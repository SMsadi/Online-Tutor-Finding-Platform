// resourceValidation.js

function validateResourceForm() {
    var title = document.getElementById('title').value;
    var author = document.getElementById('author').value;
    var published_year = document.getElementById('published_year').value;
    var error_message = document.getElementById('error_message');

    
    if (title.trim() === '' || author.trim() === '' || published_year.trim() === '') {
        error_message.innerHTML = "Please enter title, author, and published year";
        alert("Please enter title, author, and published year.");
        return false; 
    } else {
        
        error_message.innerHTML = "";
        return true; 
    }
}
