<?php

function is_input_empty($email, $password) {
    if(empty($email) || empty($password)) {
        return true;
    }
    else {
        return false;
    }
}

function id_email_invalid($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else {
        return false;
    }
}

function is_email_wrong($result) {
    if(!$result) {
        return true;
    }
    else {
        return false;
    }
}

function is_password_wrong($password, $hashedPassword){
    if(!password_verify($password, $hashedPassword)){
        return true;
    }
    else {
        return false;
    }
}
