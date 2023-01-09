<?php
if (
    isset($_POST["submit-b"]) &&
    isset($_POST["name_p"]) &&
    isset($_POST["type_p"]) &&
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
    $today = date("Y-m-d H:i:s");

    if (!empty($name_p) && !empty($description_s) && !empty($description_b) && !empty($category) && !empty($tags)) {
        if ($_FILES["my-image"]["size"] != 0) {
            $fileName = $_FILES["my-image"]["name"];
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            $allowTypes = array('jpg', 'png', 'jpeg');
            if (in_array($fileType, $allowTypes)) {
                $img = $_FILES["my-image"]["tmp_name"];
                $imgContent = addslashes(file_get_contents($img));

                $query = "INSERT INTO
                `posts` (`post_name`, `post_type_id`, `short_desc`, `post_body`, `post_img`, `post_tags`, `post_date`, `post_featured`, `post_author_id`, `categorie_id`, `post_status_id`) 
                VALUES ('$name_p', '$post_type_id', '$description_s', ' $description_b', '$imgContent', '$tags', ' $today', '$post_featured ', '39', '$category', '2');";

                $request = mysqli_query($connection, $query);

                if ($request) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>successfully!</strong> post added.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
                }else {
                    echo "somthing wrong";
                }
            }
        }
    }
}


?>
