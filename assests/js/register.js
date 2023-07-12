function user_register() {
  jQuery(".field_error").html("");
  var name = jQuery("#name").val();
  var email = jQuery("#email").val();
  var mobile = jQuery("#mobile").val();
  var password = jQuery("#password").val();
  var is_error = "";
  if (name == "") {
    jQuery("#name_error").html("Please enter name");
    is_error = "yes";
  }
  if (email == "") {
    jQuery("#email_error").html("Please enter email");
    is_error = "yes";
  }
  if (mobile == "") {
    jQuery("#mobile_error").html("Please enter mobile");
    is_error = "yes";
  }
  if (password == "") {
    jQuery("#password_error").html("Please enter password");
    is_error = "yes";
  }
  if (is_error == "") {
    jQuery.ajax({
      url: "register_submit.php",
      type: "post",
      data:
        "name=" +
        name +
        "&email=" +
        email +
        "&mobile=" +
        mobile +
        "&password=" +
        password,
      success: function (result) {
        if (result == "email_present") {
          jQuery("#email_error").html("Email id already present");
        }
        if (result == "insert") {
          document.querySelector(".register-form").reset();
          swal({
            title: "Registration Succesfull!",
            text: "Your registration was successfull!",
            icon: "success",
            button: "Done!",
          });
        }
      },
    });
  }
}
