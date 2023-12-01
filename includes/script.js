setTimeout(function () {
    var errorMessage = document.getElementById('errorMessage');
    if (errorMessage) {
        errorMessage.style.display = 'none';
    }
}, 3000);

function redirect() {
    window.location.href = "register-page.php?toggle=true";
}

document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);
    const toggleParam = urlParams.get('toggle');

    if (toggleParam === 'true') {
        toggleBoolean();
    }
});

function toggleBoolean() {
    var booleanValue = true;

    if (booleanValue) {
        var companyInputField = document.getElementById("companyInputField");
        var companyInput = document.getElementById("companyInput");

        if (companyInputField && companyInput) {
            companyInputField.style.display = "block";
            companyInput.style.display = "block";
        }
    }
}
