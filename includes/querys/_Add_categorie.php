<?php
if (isset($_POST["submit"]) && isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["icon"])) {
  if (trim($_POST["name"]) != "" && trim($_POST["description"]) != "" && trim($_POST["icon"]) != "") {

    $categorie_name = htmlspecialchars(trim($_POST["name"]));
    $categorie_description = htmlspecialchars(trim($_POST["description"]));
    $icon = htmlspecialchars(trim($_POST["icon"]));
    // insert into database
    $query = "INSERT INTO categorie (name_categorie , description_categorie , icon)
                          VALUES ('$categorie_name' , '$categorie_description' , '$icon')";
    $request = mysqli_query($connection, $query);
    if ($request) {
      header("Location: dashboard-post-categories.php");
    }
  }
}
?>