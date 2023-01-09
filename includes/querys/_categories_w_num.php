<?php
$query = "SELECT categorie.categorie_id ,  categorie.name_categorie , COUNT(posts.post_id) as num_posts
FROM categorie
LEFT JOIN posts ON categorie.categorie_id = posts.categorie_id
GROUP BY categorie.categorie_id";
$res_cat = mysqli_query($connection, $query);
?>