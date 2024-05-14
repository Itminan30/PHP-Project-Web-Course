<?php

function get_email($pdo, $email) {
    $query = "SELECT EMAIL FROM USERS WHERE EMAIL = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function set_user($pdo, $username, $password, $email, $dob, $address, $phone, $url, $publicId)
{
    $query = "INSERT INTO USERS (USER_NAME, EMAIL, USER_PASSWORD, PHONE_NUMBER, ADDRESS, DOB, PHOTO_URL, PHOTO_ID) VALUES (:username, :email, :password, :phone, :address, :dob, :url, :publicId );";

    $options = [
        "cost" => 12
    ];
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $hashedPassword);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":dob", $dob);
    $stmt->bindParam(":address", $address);
    $stmt->bindParam(":url", $url);
    $stmt->bindParam(":publicId", $publicId);
    $stmt->execute();
}