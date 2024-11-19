function validateForm() {
    var amountInput = document.getElementById("amount");
    var amount = amountInput.value.trim();

    if (isNaN(amount) || amount === "") {
        alert("Please enter a valid number for the amount");
        return false;
    }
    return true;
}