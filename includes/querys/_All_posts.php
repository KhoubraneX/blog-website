<?php
    $query = "SELECT * FROM `posts` 
    INNER JOIN categorie using(categorie_id) 
    INNER JOIN users ON post_author_id = id
    INNER JOIN post_status 
		ON posts.post_status_id = post_status.status_id
    ORDER BY post_date DESC";
    $result_posts = mysqli_query($connection, $query);
?>