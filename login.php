<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html>

<head>
    <link rel="shortcut icon" type="x-icon" href="images\ico.jpg">
    <title> Login - EGO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\login.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <div class="login_form">
                    <form action="login_process.php" method="POST">
                        <div class="form-group">
                            <h2>E<span>GO</span> Login</h2>
                            <?php
                            if (isset($_GET['loginerror'])) {
                                $loginerror = $_GET['loginerror'];
                            }
                            if (!empty($loginerror)) {
                                echo '<p class="errmsg">Invalid login credentials, Please Try Again..</p>';
                            } ?>

                            <label class="label_txt">Username or Email </label>
                            <input type="text" name="login_var" value="<?php if (!empty($loginerror)) {
                                echo $loginerror;
                            } ?>" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label class="label_txt">Password </label>
                            <input type="password" name="password" id="password" class="form-control" required="" />
                            <i class="bi bi-eye-slash" id="togglePassword" style=" float: right;
  margin-left: -35px;
  margin-top: -35px;
  margin-right : 15px;
  position: relative;
  z-index: 2;
  cursor: pointer; "></i>
                        </div>
                        <button type="submit" name="sublogin"
                            class="btn btn-primary btn-group-lg form_btn">Login</button>
                    </form>
                    <p style="font-size: 12px;text-align: center;margin-top: 10px;"><a href="forgotpassword.html" style="color: #00376b;">Forgot Password?</a> </p>
                    <br>
                    <p>Don't have an account? <a href="signup.php">Sign up</a> </p>
                </div>
                <div class="col-sm-4">
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye / eye slash icon
        this.classList.toggle('bi-eye');
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

</html>