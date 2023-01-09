<?php

if (isset($_POST["delete"]) && !empty($_POST["id_comment"])) {
    $id = htmlspecialchars($_POST["id_comment"]);
    $query = "DELETE FROM post_comments WHERE comment_id = '$id'";
    $res = mysqli_query($connection, $query);
    if ($res) {
        echo '<div class="alert alert-success" role="alert">
                success comment was deleted!
            </div>';
    }else {
        header("Location : dashboard-reviews.php");
    }
}

if (isset($_POST["update"]) && !empty($_POST["id_comment"]) && !empty($_POST["comment_content"])) {
    $id = htmlspecialchars($_POST["id_comment"]);
    $comment_content = htmlspecialchars($_POST["comment_content"]);
    $query = "UPDATE post_comments SET comment_content = '$comment_content' WHERE comment_id = '$id'";
    $res = mysqli_query($connection, $query);
    if ($res) {
        echo '<div class="alert alert-success" role="alert">
                success comment was updated!
            </div>';
    }else {
        header("Location : dashboard-reviews.php");
    }
}

function getComments(bool $limit = false, int $limitNumber = 0)
{
    global $connection;
    if ($limit == true) {
        $query = "SELECT comment_id, post_id,post_name, comment_content, visibility	, avatar, firstname FROM post_comments INNER JOIN posts USING(post_id)
                INNER JOIN users ON comment_author_id = id limit $limitNumber";
        $result_comments = mysqli_query($connection, $query);
    } else {
        $query = "SELECT comment_id , post_id, post_name, visibility, comment_content, avatar ,firstname FROM post_comments INNER JOIN posts USING(post_id)
            INNER JOIN users ON comment_author_id = id";
        $result_comments = mysqli_query($connection, $query);
    }
    return $result_comments;
}
?>