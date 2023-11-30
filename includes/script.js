setTimeout(function () {
    var errorMessage = document.getElementById('errorMessage');
    if (errorMessage) {
        errorMessage.style.display = 'none';
    }
}, 3000);

function redirect() {
    window.location.href = "register-page.php?toggle=true";
}

window.onload = function () {
    const urlParams = new URLSearchParams(window.location.search);
    const toggleParam = urlParams.get('toggle');

    if (toggleParam === 'true') {
        toggleBoolean();
    }
};

function toggleBoolean() {

    var booleanValue = true;

    if (booleanValue) {
        document.getElementById("companyInputFieldDiv").style.display = "block";
        document.getElementById("companyInputField").style.display = "block";
        document.getElementById("companyInput").style.display = "block";
    } else {
        document.getElementById("companyInputFieldDiv").style.display = "none";
        document.getElementById("companyInputField").style.display = "none";
        document.getElementById("companyInput").style.display = "none";
    }
}