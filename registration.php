<?php require('top.php'); ?>
    <!-- main -->
    <main>
        <section class="registration-sec">
            <div class="registration">
                <h2>Register with Hair Speak</h2>
                <br>
                <form class="register-form" action="#">
                    <div class="form-group">
                        <label for="fname">Full Name*</label> <br>
                        <input class="register-input" type="text" placeholder="" name="name" id="name">
                        <span class="field_error" id="name_error"></span>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Id*</label> <br>
                        <input class="register-input" type="email" placeholder="" name="email" id="email">
                        <span class="field_error" id="email_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone No*</label> <br>
                        <input class="register-input" type="number" placeholder="" name="mobile" id="mobile">
                        <span class="field_error" id="mobile_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Password*</label> <br>
                        <input class="register-input" type="password" placeholder="" name="password" id="password">
                        <span class="field_error" id="password_error"></span>
                    </div>
                    <div>
                        <button type="button" class="btn-1" onclick="user_register()">Register</button>
                    </div>
                    <p class="login-text">Already Have An Account? <a href="login.php">SIGN IN</a></p>
                </form>
                <div class="form-output register_msg">
                    <p class="form-messege field_error"></p>
                </div>
            </div>
        </section>
    </main>
    <!-- main ends -->
  <?php require('footer.php'); ?>