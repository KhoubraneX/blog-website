<?php
if (isset($_POST["submit"]) && isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["icon"])) {
    if (trim($_POST["name"]) != "" && trim($_POST["description"]) != "" && trim($_POST["icon"]) != "") {
        $cat_id = htmlspecialchars($_GET["category"]);
        $categorie_name = htmlspecialchars(trim($_POST["name"]));
        $categorie_description = htmlspecialchars(trim($_POST["description"]));
        $icon = htmlspecialchars(trim($_POST["icon"]));
        // insert into database
        $query = "UPDATE categorie 
        SET name_categorie =  '$categorie_name' ,
            description_categorie =  '$categorie_description' ,
            icon = ' $icon'
                where categorie_id = '$cat_id'";
        $request = mysqli_query($connection, $query);
        if ($request) {
            header("Location: dashboard-post-categories.php");
        } else {
            echo '<div class="alert alert-danger" role="alert">
            Somthing Wrong!
          </div>';
        }
    }
}

?>