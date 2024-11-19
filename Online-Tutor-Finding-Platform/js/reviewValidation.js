// reviewValidation.js

function validateReviewForm() {
    var teacher_name = document.getElementsByName('teacher_name')[0].value;
    var subject = document.getElementsByName('subject')[0].value;
    var review = document.getElementsByName('review')[0].value;
    var error_message = document.getElementById('error_message');

    if (teacher_name.trim() === '' || subject.trim() === '' || review.trim() === '') {
        error_message.innerHTML = "Please enter teacher name, subject, and review";
        alert("Please enter teacher name, subject, and review.");
        return false; 
    } else {
       
        error_message.innerHTML = "";
        return true; 
    }
}
