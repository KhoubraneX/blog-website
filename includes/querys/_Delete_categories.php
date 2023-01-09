<?php 
    if (isset($_POST["Delete"]) && isset($_POST["categorie-d-v"])) {
        $id_cat = htmlspecialchars($_POST["categorie-d-v"]);
        if (!empty($id_cat)) {
            $query = "DELETE FROM categorie WHERE categorie_id = '$id_cat'";
            $res = mysqli_query($connection , $query);
            if ($res) {
                echo '<div class="alert alert-success" role="alert">
                success category was deleted!
              </div>';
            }else {
                header("Location : dashboard-post-categories.php");
            }
        }
    }
?>