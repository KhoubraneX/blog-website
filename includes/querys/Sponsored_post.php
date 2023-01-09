<?php
    include("../database.php");
    $query = "CALL getPostsSponsored()";
    $result_PostsSponsored = mysqli_query($connection, $query);
    
    
?>