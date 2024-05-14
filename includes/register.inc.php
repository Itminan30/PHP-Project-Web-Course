<?php
// Cloudinary Files
require __DIR__ . '/vendor/autoload.php';

use Cloudinary\Configuration\Configuration;
// Use the SearchApi class for searching assets
use Cloudinary\Api\Search\SearchApi;
// Use the AdminApi class for managing assets
use Cloudinary\Api\Admin\AdminApi;
// Use the UploadApi class for uploading assets
use Cloudinary\Api\Upload\UploadApi;

Configuration::instance('cloudinary://655593777979475:zel8MpjP8MDeSO0Xp8SV30I5IsE@dzpf6ktfk?secure=true');

// Utility Function
function farr($arr)
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

// Move Photo to upload Folder
function handlePhotoUpload($photoName, $photoTempName, $destination = "./uploads/")
{
    // Seperate the extention from the photoname
    $extention = explode(".", $photoName);
    $photoExtension = strtolower(end($extention));
    // Give the photo a unique name
    $newPhotoName = uniqid("", true) . "." . $photoExtension;
    // Photo Destination
    $photoDestination = $destination . $newPhotoName;
    // Move photo to destination
    move_uploaded_file($photoTempName, $photoDestination);

    // Send Photo To Cloudinary
    $data = (new uploadApi())->upload(
        $photoDestination
    );

    // Delete Photo
    if (file_exists($photoDestination)) {
        unlink($photoDestination);
    }

    // Return The important info of the Photo
    return [
        "URL" => $data["url"],
        "PUBLIC_ID" => $data["public_id"]
    ];
}

// Checking Server method for unwanted entry to file
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // User Inputs
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $dob = $_POST["dob"];

    // Photo Input
    $photo = $_FILES["photo"];
    // Photo Info
    $photoName = $photo["name"];
    $photoTempName = $photo["tmp_name"];
    $photoSize = $photo["size"];
    $photoError = $photo["error"];
    $photoType = $photo["type"];
    // Photo Specification
    $maxPhotoSize = 2 * 1024 * 1024;

    // farr($photoInfo);
    // farr($photo);

    try {
        require_once __DIR__ . "/database/dbh.inc.php";
        require_once __DIR__ . "/register_mvc/register_model.inc.php";
        require_once __DIR__ . "/register_mvc/register_contr.inc.php";

        // Error Handling
        $errors = [];

        if (is_input_empty($username, $password, $email, $dob, $address, $phone, $photo)) {
            $errors["empty_input"] = "Fillup All The Fields";
        }
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Enter a Valid Email";
        }
        if (is_email_taken($pdo, $email)) {
            $errors["taken_email"] = "Email Already taken";
        }
        // Error Handling and Moving Photo
        if (!($photoError === 0)) {
            $errors["photo_error"] = "There was an error uploading Photo!!!";
        }
        if ((filesize($photoTempName) > $maxPhotoSize)) {
            $errors["photo_size_error"] = "File Size must not exceed 2MB!!!";
        }

        require_once __DIR__ . "/config_session.inc.php";
        if ($errors) {
            $_SESSION["register_error"] = $errors;

            // Keep Form Data if Error // Will be implemented Later
            // $registerData = [
            //     "username" => $username,
            //     "email" => $email,
            //     "address" => $address,
            //     "phone" => $phone,
            //     "dob" => $dob
            // ];

            header("Location: ../register.php");
            die();
        }

        $photoInfo = handlePhotoUpload($photoName, $photoTempName);
        create_user($pdo, $username, $password, $email, $dob, $address, $phone, $photoInfo["URL"], $photoInfo["PUBLIC_ID"]);
        header("Location: ../index.php?register=success");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    // Sending back to register page
    header("Location: ../register.php");
    die();
}
