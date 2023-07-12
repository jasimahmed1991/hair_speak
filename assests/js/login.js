function user_login() {
  jQuery(".field_error").html("");
  var email = jQuery("#login_email").val();
  var password = jQuery("#login_password").val();
  console.log(email, password);
  var is_error = "";
  if (email == "") {
    jQuery("#login_email_error").html("Please enter email");
    is_error = "yes";
  }
  if (password == "") {
    jQuery("#login_password_error").html("Please enter password");
    is_error = "yes";
  }
  if (is_error == "") {
    jQuery.ajax({
      url: "login_submit.php",
      type: "post",
      data: "email=" + email + "&password=" + password,
      success: function (result) {
        if (result == "wrong") {
          //alert(result);
          jQuery("#login_password_error").html(
            "Please enter valid credentials"
          );
        }
        if (result == "valid") {
          window.location.href = "index.php";
          //alert(result);
        }
      },
    });
  }
}
