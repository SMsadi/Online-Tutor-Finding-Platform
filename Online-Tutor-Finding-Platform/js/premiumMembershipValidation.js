function validateNameAndAddress() {
    var name = document.getElementsByName('name')[0].value;
    var address = document.getElementsByName('address')[0].value;
    var error_message = document.getElementById('error_message');

    if (name.trim() === '' || address.trim() === '') {
        error_message.innerHTML = "Please enter your name and address";
        alert("Please enter your name and address.");
        return false; 
    } else {
        
        error_message.innerHTML = "";
        return true; 
    }
}
