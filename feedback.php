<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="icon" href="images/Log.png" type="image/x-icon">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/feedback.css">
    <script src="script.js"></script>

</head>
<body>
    <?php include('includes/global-nav.php'); ?>
    
    <div class="container">
        <?php
            $name = $_GET['name'];
            echo '<h1>Thank you, ' . htmlspecialchars($name) . ', for your query</h1>';
        ?>
        <br>
        <?php
            $email = $_GET['email'];
            echo '<p>You will shortly receive an email for your query at <span class="email">' . htmlspecialchars($email).'</span></p>';
        ?>
          <div id="notification"></div>

    </div>
</body>
</html>
