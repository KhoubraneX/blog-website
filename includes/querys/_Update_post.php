<?php
if (
    isset($_POST["submit_U"]) &&
    isset($_POST["name_p"]) &&
    isset($_POST["description-s"]) &&
    isset($_POST["description-b"]) &&
    isset($_POST["category"]) &&
    isset($_FILES["my-image"]) &&
    isset($_POST["tags"])
) {
    $name_p = htmlspecialchars($_POST["name_p"]);
    $post_type_id = htmlspecialchars($_POST["type_p"]);
    $description_s = htmlspecialchars($_POST["description-s"]);
    $description_b = htmlspecialchars($_POST["description-b"]);
    $tags = htmlspecialchars($_POST["tags"]);
    $category = htmlspecialchars($_POST["category"]);
    $post_featured = isset($_POST["featured"]) ? 1 : 0;

    if (!empty($name_p) && !empty($description_s) && !empty($description_b) && !empty($category) && !empty($tags)) {
        if ($_FILES["my-image"]["size"] != 0) {
            $fileName = $_FILES["my-image"]["name"];
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            $allowTypes = array('jpg', 'png', 'jpeg');
            if (in_array($fileType, $allowTypes)) {
                $img = $_FILES["my-image"]["tmp_name"];
                $imgContent = addslashes(file_get_contents($img));

                $query = "UPDATE posts SET 
                post_name = '$name_p' ,
                post_type_id = '$post_type_id' ,
                short_desc = '$description_s' ,
                post_body = '$description_b' ,
                post_img = '$imgContent' ,
                post_tags = '$tags' ,
                post_featured = '$post_featured ' ,
                categorie_id = '$category' 
                WHERE post_id =  '$post_id'";

                $request = mysqli_query($connection, $query);

                if ($request) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>successfully!</strong> post was update.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
                }
            }
        } else {
            $query = "UPDATE posts SET 
                post_name = '$name_p' ,
                post_type_id = '$post_type_id' ,
                short_desc = '$description_s' ,
                post_body = '$description_b' ,
                post_tags = '$tags' ,
                post_featured = '$post_featured ' ,
                categorie_id = '$category' 
                WHERE post_id =  '$post_id'";

                $request = mysqli_query($connection, $query);

                if ($request) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>successfully!</strong> post was update.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
                }
        }
    }
}


?>