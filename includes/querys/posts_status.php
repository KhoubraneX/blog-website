<?php
function NumTypePost(string $type)
{
    global $connection;
    $query = "SELECT COUNT(*) as num FROM posts INNER JOIN post_type ON type_id = post_type_id WHERE type_name = '$type' ;";
    $result = mysqli_query( $connection, $query);
    $num = mysqli_fetch_assoc($result);
    return $num["num"];
}
?>