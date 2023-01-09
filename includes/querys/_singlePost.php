<?php
if (isset($_GET["post"])) {
    $post_id = htmlspecialchars($_GET["post"]);
    $query = "SELECT * FROM `posts` 
        INNER JOIN categorie using(categorie_id) 
        INNER JOIN users ON post_author_id = id
        INNER JOIN post_status 
            ON posts.post_status_id = post_status.status_id
            WHERE post_id = '$post_id'
        ORDER BY post_date DESC";
    $res = mysqli_query($connection, $query);
    if (isset($res) && mysqli_num_rows($res) > 0) {
        $fetch = mysqli_fetch_assoc($res);
        $post_image = $fetch["post_img"];
        $author_avatar = $fetch["avatar"];
        $post_name = $fetch["post_name"];
        $post_short_desc = $fetch["short_desc"];
        $post_body = $fetch["post_body"];
        $post_date = $fetch["post_date"];
        $post_author_name = $fetch["firstname"];
        $post_author_jobtitle = $fetch["jobtitle"];
        $post_author_bio = $fetch["bio"];
        $post_categorie = $fetch["name_categorie"];
        $avatar_name = avatarGenerate($post_author_name);
        // date format
        $new_data_format = formatDate($post_date);
    } else {
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
}

?>