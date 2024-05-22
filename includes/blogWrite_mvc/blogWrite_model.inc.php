<?php
function set_blog($pdo, $writerID, $title, $body, $place, $location, $url, $publicId)
{
    $query = "INSERT INTO BLOGS (WRITER_ID, BLOG_TITLE, BLOG_BODY, PLACE_NAME, PLACE_LOCATION, PHOTO_URL, PHOTO_ID) VALUES (:writerID, :title, :body, :place, :location, :url, :publicId );";


    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":writerID", $writerID);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":body", $body);
    $stmt->bindParam(":place", $place);
    $stmt->bindParam(":location", $location);
    $stmt->bindParam(":url", $url);
    $stmt->bindParam(":publicId", $publicId);
    $stmt->execute();
}
