<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - YANKY AUTO SALES</title>
  <link rel="icon" href="images/Log.png" type="image/x-icon">

  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/styles3.css">
</head>
<body>
  <?php

  include('includes/global-nav.php')
  ?>

  <div class="container">
    <h2>Contact Us</h2>
    <p>If you have any questions, inquiries, or feedback, please don't hesitate to get in touch with us using the form below:</p>
    <form action="feedback.php" method="get">
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name" required><br>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" required><br>
      <label for="car-name">Car Name</label>
      <input type="text" id="carname" class="car-name">
      <label for="car-model">Car Model</label>
      <input type="year" id="car-model" class="car-model">
      <label for="message">Message:</label><br>
      <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>
      <input type="submit" value="Submit">
    </form>
  </div>

  <footer>
    <p>&copy; 2024 YANKY AUTO SALES. All rights reserved.</p>
  </footer>
</body>
</html>
