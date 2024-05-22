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

// Session Start
require_once __DIR__ . "/config_session.inc.php";

// Utility
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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Blog Inputs
    $title = $_POST["title"];
    $place = $_POST["place"];
    $location = $_POST["location"];
    $body = $_POST["body"];
    $writerID = $_SESSION["user_id"];
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

    try {
        require_once __DIR__ . "/database/dbh.inc.php";
        require_once __DIR__ . "/blogWrite_mvc/blogWrite_model.inc.php";
        require_once __DIR__ . "/blogWrite_mvc/blogWrite_contr.inc.php";

        // Errors array 
        $errors = [];

        // Handling Empty Error
        if (is_input_empty($title, $body, $place, $location, $photo)) {
            $errors["empty_input"] = "Fillup All The Fields";
        }

        // Error Handling and Moving Photo
        if (!($photoError === 0)) {
            $errors["photo_error"] = "There was an error uploading Photo!!!";
        }
        if ((filesize($photoTempName) > $maxPhotoSize)) {
            $errors["photo_size_error"] = "File Size must not exceed 2MB!!!";
        }

        // 
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

            header("Location: ../blogWrite.php");
            die();
        }

        // No Error Zone
        $photoInfo = handlePhotoUpload($photoName, $photoTempName);
        // Add blog to database
        create_blog($pdo, $writerID, $title, $body, $place, $location, $photoInfo["URL"], $photoInfo["PUBLIC_ID"]);
        header("Location: ../blogWrite.php?blog=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }



} else {
    // Sending back to Blog Writing page
    header("Location: ../blogWrite.php");
    die();
}

// farr($_SESSION);
