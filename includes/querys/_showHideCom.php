<?php
require_once("../database.php");
if (isset($_POST)) {
    $data = json_decode(file_get_contents('php://input'), true);
    if (!empty($data["id_comment"]) && !empty($data["visibility"])) {
        $id = $data["id_comment"];
        $visibility = $data["visibility"] == 'false' ? 'true' : 'false';

        $query = "UPDATE post_comments SET visibility = '$visibility' WHERE comment_id = '$id'";
        $res = mysqli_query($connection, $query);
        if ($res) {
            echo (json_encode(["status" => "success"]));
        }else{
            echo (json_encode(["status" => "faild"]));
        }
    }
}
?>