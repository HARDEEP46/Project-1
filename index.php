<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YANKY AUTO SALES | 2024</title>
  <link rel="icon" href="images/Log.png" type="image/x-icon">
  <link rel="stylesheet" href="css/styles.css">
  <script src="script.js"></script>
</head>

<body>
  <?php
  include('includes/global-nav.php');
  ?>
  <img class="hero-image" src="images/car11.jpg" alt="Luxury Car">

  <div class="container" id="services">
    <h2>Our Services</h2>
    <div class="services">
      <div class="service" id="inventory" title="EXPLORE MORE CARS">
        <a href="inventory.php">
          <h3>Vehicles</h3>
          <p>Explore our wide selection of luxury(Vintage) cars for sale.</p>
        </a>
      </div>
      <div  class="service">
        <a href="car-rental.php">
          <h3>Car Rentals</h3>
          <p>Experience the thrill of driving a luxury car with our rental services.</p>
        </a>
      </div>

      <div class="service">
        <h3>Parts and Accessories </h3>
        <p>Selling parts and accessories for vehicles. This includes OEM parts as well as aftermarket parts and accessories.</p>
      </div>
      <div class="service">
        <h3>Financing and Loans</h3>
        <p>Financing and Loans: Providing financing options and loans to help customers purchase vehicles. </p>
      </div>
      <div class="service">
        <h3>Repairs & Maintenance</h3>
        <p>Trust our expert technicians to keep your vehicle in top condition.</p>
      </div>


    </div>
  </div>
  <div class="container">
    <h2>MOST SELLING CARS</h2>
    <div class="gallery" id="gallery">

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="images/car22.jpg" alt="Car 2">
          </div>
          <div class="flip-card-back">
            <h3>Jaguar E-Type</h3>
            <p> "The most beautiful car ever made" by Enzo Ferrari, the 1960s Jaguar E-Type is a classic sports car mainstay. </p>
            <ul>
              <li>4000 CC ENGINE</li>
              <li>POWER STEERING</li>
              <li>EMBEDDED MUSIC SYSTEM</li>
              <li>3 MODELS AVAILABLE</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="images/car55.jpg" alt="Car 2">
          </div>
          <div class="flip-card-back">
            <h3>Chevrolet Corvette</h3>
            <p>The emblem of Big Three muscle cars, the Chevy Corvette is the most collected vehicle in America. The second generation, which spanned 1963 to 1967.</p>
            <ul>
              <li>Chrome Detailing</li>
              <li>Manual Controls</li>
              <li>Bench Seats</li>
              <li>Wooden Accent</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="images/car77.jpg" alt="Car 2">
          </div>
          <div class="flip-card-back">
            <h3>Lamborghini Miura</h3>
            <p>Considered by some to be the sexiest car ever built, the Miura debuted in 1966 as a sleek mid-engine speedster designed to challenge Ferrari.</p>
            <ul>
              <li>Mechanical Simplicity</li>
              <li>Classic Instrumentation</li>
              <li>Convertible Tops</li>
              <li>Turbo ENgine</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="images/car88.jpg" alt="Car 2">
          </div>
          <div class="flip-card-back">
            <h3>Porsche 911</h3>
            <p>The Porsche 911 represents vintage driving at its best—particularly during the golden era before the car's 1974 redesign. "There's magic in the early 911," Hagerty says. "It's an amazingly well-built machine that delivers one of the most honest driving experiences of any sports car ever built."</p>
          </div>
        </div>
      </div>
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="images/car99.jpg" alt="Car 2">
          </div>
          <div class="flip-card-back">
            <h3>Rolls-Royce Dawn Drophead
            </h3>
            <p>Based on the first full-size car Rolls-Royce made after the war, the original Silver Dawn drophead launched in 1949 and retired in 1954. The name was intended to mark the dawn of a new era for the world and Rolls-Royce's place in it. Slightly smaller than pre-war cars, the Dawn helped the British bespoke carmaker reintroduce motoring craftsmanship while bringing the company into the modern age. They're extremely rare: only three of the original 28 dropheads remain in the U.S.</p>
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="images/car100.jpg" alt="Car 2">
          </div>
          <div class="flip-card-back">
            <h3>Mercedes SL 300 Gullwing
            </h3>
            <p>Among the first sports cars of the post-war era, the Mercedes SL 300 Gullwing was the fastest production car of its time when it was introduced in 1954. As the first direct fuel injection series production car, the SL 300 could travel at an eye-popping 160 miles per hour. "Nobody expected something like that from Mercedes," says Constantin von Kageneck, a specialist in classic car marketing at the Mercedes-Benz Classic Center in Irvine, CA..</p>
          </div>
        </div>
      </div>
      <!-- Repeat for other images -->
    </div>
  </div>
  <div class="container">
    <h2>Give us Feedback:</h2>
    <form method="get" action="feedback.php">
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name"><br>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" required><br>
      <label for="message">Feedback:</label><br>
      <textarea id="message" name="message" rows="4" cols="50"></textarea><br>
      <input type="submit" value="Submit">
    </form>
  </div>

  <?php
  include('includes/footer-nav.php');
  ?>

</body>

</html>