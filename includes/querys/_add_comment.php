<?php
    require_once("../database.php");
    require_once("../functions/avatar.php");

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: access");
    header("Access-Control-Allow-Methods: POST");

if (isset($_POST)) {
    $data = json_decode(file_get_contents('php://input'), true);
    if (strlen($data["comment"]) != 0) {
        $query = "INSERT INTO `post_comments` (`comment_id`, `comment_content`, `comment_author_id`, `post_id`, `comment_date`) VALUES (NULL, '$data[comment]', '40', '$data[postId]', NOW())";
        $request = mysqli_query($connection, $query);
        if ($request) {
            $query = "select firstname , avatar from users where id = 40";
            $request = mysqli_query($connection, $query);
            $fetch = mysqli_fetch_assoc($request);
            if ($fetch["avatar"] != null) {
                $avatar = base64_encode($fetch["avatar"]);
                $typeofAvatar = "img";
            }else {
                $avatar = avatarGenerate($fetch["firstname"]);
                $typeofAvatar = "str";
            }
            echo json_encode([
                "status" => "success",
                "avatar" => $avatar,
                "time" => date('Y-m-d H:i:s'),
                "typeofAvatar" => $typeofAvatar
            ]);
        }else {
            echo json_encode(["status" => "faild"]);
        }
    }
}
?>