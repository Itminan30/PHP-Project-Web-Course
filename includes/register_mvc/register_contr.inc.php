<?php

    function is_input_empty($username, $password, $email, $dob, $address, $phone, $photo) {
        if(empty($username) || empty($password) || empty($email) || empty($dob) || empty($address) || $photo["size"] == 0 || empty($phone)) {
            return true;
        }
        else {
            return false;
        }
    }

    function is_email_invalid($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        else {
            return false;
        }
    }

    function is_email_taken($pdo, $email) {
        if(get_email($pdo, $email)) {
            return true;
        }
        else {
            return false;
        }
    }

    function create_user($pdo, $username, $password, $email, $dob, $address, $phone, $url, $publicId){
        set_user($pdo, $username, $password, $email, $dob, $address, $phone, $url, $publicId);
    }