function validateFileUpload() {
    var fileInput = document.getElementById('profile_picture');

    if (fileInput.files.length === 0) {
        alert("Please select a file");
        return false; 
    } else {
        return true; 
    }
}

document.getElementById('fileUploadForm').addEventListener('submit', function(event) {
    event.preventDefault(); 
    if (validateFileUpload()) {
        this.submit(); 
    }
});
