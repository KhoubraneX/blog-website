<?php 
    if (isset($_POST["Delete"]) && isset($_POST["post-d-v"])) {
        $id_post = htmlspecialchars($_POST["post-d-v"]);
        if (!empty($id_post)) {
            $query = "DELETE FROM posts WHERE post_id = '$id_post'";
            $res = mysqli_query($connection , $query);
            if ($res) {
                echo '<div class="alert alert-success" role="alert">
                success post was deleted!
              </div>';
            }else {
                header("Location : dashboard-post-list.php");
            }
        }
    }
?>