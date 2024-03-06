<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="contact.css" />
    <link rel="stylesheet" href="style.css" />
   
  </head>
  <body>
    <nav>
    <ul>
        <li><a href="contact.php">Contacts</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="login.php">Join as Buyer/farmer</a></li>
        <li><a href="services.php">Join as Transport service provider</a></li>
        <li><a href="home.php">Home</a></li>
    </ul>
    </nav>
       
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>10101-012, Aberdare Road, Nyeri</div>
        <div><i class="fas fa-envelope"></i>agrimovers@gmail.com</div>
        <div><i class="fas fa-phone"></i>+254 712 345 678</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="conn.php" method="post">
          <input type="text" name="name" id="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" id="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" id="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" id="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    

  </body>
</html>
    </body>

    </html>