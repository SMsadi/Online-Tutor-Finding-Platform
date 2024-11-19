function validateForm() {

    var name = document.getElementById("name").value;
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;
    var error = "";

    if (name.trim() == "" || username.trim() == "" || email.trim() == "" || phone.trim() == "" || password.trim() == "" || confirm_password.trim() == "") {
        error += "Fill up requrired data";
    }

    if (password !== confirm_password) {
        error += "Password do not match";
    }

    if (error !== "") {
        alert(error);
        return false;
    }

    return true;
}
