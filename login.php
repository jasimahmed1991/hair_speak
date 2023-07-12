<?php require('top.php'); ?>
   <!-- main -->
<main>
    <section class="login-sec">
        <div class="login">
            <h2>Welcome to</h2>
            <div class="login-logo">
                <img src="./assests/images/logo.svg" alt="">
            </div>
            <!-- <img class="login-img" src="./assests/images/SVG/login-img.svg" alt=""> -->
            <form class="login-form" action="#">
                <input type="text" placeholder="Enter Your Email" name="login_email" id="login_email"> <br>
                <span class="field_error" id="login_email_error"></span> <br>
                <input type="password" placeholder="Enter Your Password" name="login_password" id="login_password"> <br>
                <span class="field_error" id="login_password_error"></span> <br>

                <button type="button" class="btn-1" onclick="user_login()">Login</button><br>
                <a class="forgot" href="forget-password.html">forget password ?</a> <br>
            </form>
            <p>New to HairSpeak <a href="registration.php">CREATE AN ACCOUNT</a></p>
        </div>
    </section>
</main>
<!-- main ends -->
  <?php require('footer.php'); ?>