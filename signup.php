<?php include_once "includes/header.php"; ?>
<?php
require_once "includes/database.php";

$error_email = "";

if (isset($_POST["submit"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["c-password"])) {
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $c_password = htmlspecialchars($_POST["c-password"]);
    if ($email != "" and $password != "" and strlen($password) >= 8 and $c_password != "") {
        if ($password === $c_password) {
            $query = "SELECT email FROM users WHERE email = '$email'";
            $result = mysqli_query($connection, $query);
            $fetch = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if (!isset($fetch)) {
                $hash_password = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO `users` (`id`,`email`,`password`) VALUES (NULL,'$email', '$hash_password');";
                $result = mysqli_query($connection, $query);
                if ($result) {
                    header("Location: http://localhost:8080/php/project/weblog.gatacamp.com/signin.php");
                }
            } else {
                $error_email = "This email already exists";
            }
        }
    }
}
?>
<main>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                    <div class="bg-primary-soft rounded p-4 p-sm-5">
                        <h2>Create your free account </h2>
                        <form class="mt-4" method="post">
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="E-mail">
                                <small id="emailHelp" class="form-text">We'll never share your email with anyone
                                    else.</small>
                                <?php if (!empty($error_email)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $error_email; ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="*********">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="exampleInputPassword2">Confirm Password</label>
                                <input type="password" name="c-password" class="form-control" id="exampleInputPassword2"
                                    placeholder="*********">
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Yes i'd also like to sign up for
                                    additional subscription</label>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <button type="submit" name="submit" class="btn btn-success">Sign me up</button>
                                </div>
                                <div class="col-sm-8 text-sm-end">
                                    <span>Have an account? <a href="signin.php"><u>Sign in</u></a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include_once "includes/footer.php" ?>