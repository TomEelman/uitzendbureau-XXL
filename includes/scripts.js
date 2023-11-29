function addJobOffer() {
    var companyName = document.getElementById('companyName').value;
    var description = document.getElementById('description').value;

    // Perform AJAX request to add job offer to the database
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'add_joboffer.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        // Update the job offers container with the new data
        document.getElementById('jobOffersContainer').innerHTML = xhr.responseText;
    };
    xhr.send('companyName=' + encodeURIComponent(companyName) + '&description=' + encodeURIComponent(description));
}
