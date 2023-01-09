<?php
if (isset($_GET["categorie"]) && !empty($_GET["categorie"])) {
    $categorie = htmlspecialchars($_GET["categorie"]);

    $query = "SELECT * FROM categorie WHERE categorie_id = '$categorie'";
    $request_categorie = mysqli_query($connection, $query);

    if (mysqli_num_rows($request_categorie) == 0) {
        echo "fack";
    } else {
        $categorie_name = mysqli_fetch_assoc($request_categorie)["name_categorie"];
        $query = "SELECT * FROM `posts` INNER JOIN categorie using(categorie_id) 
        INNER JOIN users ON post_author_id = id
        INNER JOIN post_status 
            ON posts.post_status_id = post_status.status_id
            WHERE categorie_id = '$categorie'
        ORDER BY post_date DESC ";
        $req_posts = mysqli_query($connection, $query);
        $categorie_posts_num = mysqli_num_rows($req_posts);
    }
}else {
    header("Location: index.php");
}
?>