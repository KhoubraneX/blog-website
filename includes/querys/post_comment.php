<?php 
$query = "SELECT * FROM post_comments INNER JOIN users ON comment_author_id = id WHERE post_id = $post_id and visibility = 'true'";
$result_post_comment = mysqli_query($connection, $query);
?>