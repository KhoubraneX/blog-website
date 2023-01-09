<?php
function NumTypeCat(int $id_cat)
{
    global $connection;
    $query = "SELECT COUNT(*) as num FROM posts INNER JOIN categorie ON posts.categorie_id = categorie.categorie_id WHERE categorie.categorie_id = '$id_cat'";
    $result = mysqli_query( $connection, $query);
    $num = mysqli_fetch_assoc($result);
    return $num["num"];
}
function NumTypeCatAVtar(int $id_cat)
{
    global $connection;
    $query = "SELECT DISTINCT firstname , avatar FROM users INNER JOIN posts ON users.id = posts.post_author_id INNER JOIN categorie where categorie.categorie_id = posts.categorie_id AND categorie.categorie_id = '$id_cat' LIMIT 3";
    $result = mysqli_query($connection, $query);
    $num = mysqli_fetch_all($result , MYSQLI_ASSOC);
    return $num;
}
?>