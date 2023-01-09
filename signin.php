<?php include_once "includes/header.php"; ?>
<?php

$error_auth = "";

    require_once "includes/database.php";
    if (isset($_POST["submit"]) && isset($_POST["email"]) && isset($_POST["password"])) {
        $email = htmlspecialchars($_POST["email"]);
        $password = htmlspecialchars($_POST["password"]);
        if ($email != "" && $password != "") {
            $query = "SELECT email , password FROM users WHERE email = '$email'";
            $result = mysqli_query($connection , $query);
            $fetch = mysqli_fetch_array($result , MYSQLI_ASSOC);
            if (isset($fetch)) {
                $res = password_verify($password , $fetch["password"]);
                if ($res == 1) {
                    header("Location: http://localhost:8080/php/project/weblog.gatacamp.com/index.php");
                }else {
                    $error_auth = "Your account name or password is incorrect.";
                }
            }else {
                $error_auth = "Your account name or password is incorrect.";
            }
        }else {
            $error_auth = "Your account name or password is incorrect.";
        }
    }
?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                    <div class="p-4 p-sm-5 bg-primary-soft rounded">
                        <h2>Log in to your account</h2>

                        <form class="mt-4" method="post" >

                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">Email address</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="exampleInputPassword1">Password</label>
                                <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="*********">
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">keep me signed in</label>
                            </div>
                            <?php if (!empty($error_auth)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $error_auth; ?>
                                    </div>
                                <?php } ?>

                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <button name="submit" type="submit" class="btn btn-success">Sign me in</button>
                                </div>
                                <div class="col-sm-8 text-sm-end">
                                    <span>Don't have an account? <a href="signup.php"><u>Sign up</u></a></span>
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