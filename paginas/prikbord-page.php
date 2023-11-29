<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/main.scss">
    <link rel="stylesheet" href="style/pages.css">
  </head>
<body>
<div class="container">
        <h1>Job Offers</h1>
        
        <!-- Form to add new job offer -->
        <form id="jobForm">
            <label for="companyName">Company Name:</label>
            <input type="text" id="companyName" name="companyName" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
            
            <button type="button" onclick="addJobOffer()">Post Job</button>
        </form>

        <!-- Display existing job offers -->
        <div id="jobOffersContainer">
            <?php include 'includes/display_joboffers.php'; ?>
        </div>
    </div>

    <script src="scripts.js"></script>
</body>
</html>