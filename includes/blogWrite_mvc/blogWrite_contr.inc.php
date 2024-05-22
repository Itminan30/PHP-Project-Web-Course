<?php

// Checking Empty Errors
function is_input_empty($title, $body, $place, $location, $photo){
    if(empty($title) || empty($body) || empty($place) || empty($location) || $photo["size"] == 0 ) {
        return true;
    }
    else {
        return false;
    }
}

// Add blog to database
function create_blog($pdo, $writerID, $title, $body, $place, $location, $url, $publicId){
    set_blog($pdo, $writerID, $title, $body, $place, $location, $url, $publicId);
}