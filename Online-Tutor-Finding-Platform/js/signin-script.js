function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var error = "";

    if (username.trim() == "") {
        error += "Username cannot be empty\n";
    }

    if (password.trim() == "") {
        error += "Password cannot be empty";
    }

    if (error !== "") {
        alert(error);
        return false;
    }

    return true;
}
