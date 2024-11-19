function validateProgressForm() {
    
    var student_name = document.getElementsByName('student_name')[0].value;
    var subject = document.getElementsByName('subject')[0].value;
    var progress = document.getElementsByName('progress')[0].value;
    var error_message = document.getElementById('error_message');

    if (student_name.trim() === '' || subject.trim() === '' || progress.trim() === '') {
        error_message.innerHTML = "Please enter student name, subject, and progress";
        alert("Please enter student name, subject, and progress.");
        return false; 
    } else {
       
        error_message.innerHTML = "";
        return true; 
    }
}
