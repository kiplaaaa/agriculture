
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Shipment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Agrimovers company</h1>
    </header>
    <div class="container">
    <div class="sidebar">
      <nav>
          <ul>
              <li><a href="home page.html">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#book-now">Book Now</a></li>
              <li><a href="#queries">Queries</a></li>
          </ul>
      </nav>
  </div>
    <main>
        <section class="booking-form">
            <h2>Book Your courier</h2>
            <form action="Bookcredentials.php" method="post" id="bookingForm">
                <label for="senderName">Sender's Name:</label>
                <input type="text" name="senderName" id="senderName" required>
                <label for="location">Source:</label>
                <select name="location" id="location">
                  <option name="Kamakwa">Kamakwa</option>
                  <option name="Mathari">Mathari</option>
                  <option name="express">kieni</option>
                  <option name="standard">othaya</option>
                  <option name="express">Mathira</option>
                  <option name="standard">Nyeri town</option>
                  <option name="express">Giakanja</option>
                  <option name="standard">Mweiga</option>
              </select>
               
                <label for="destiny">Destination:</label>
                <select name="destiny" id="destiny">
                  <option name="express">Kamakwa</option>
                  <option name="standard">Mathari</option>
                  <option name="express">kieni</option>
                  <option name="standard">othaya</option>
                  <option name="express">Mathira</option>
                  <option name="standard">Nyeri town</option>
                  <option name="express">Giakanja</option>
                  <option name="standard">Mweiga</option>
              </select>
                
                <label for="recipientName">Recipient's Name:</label>
                <input type="text" name="recipientName" id="recipientName" required>

                <label for="product">Describe your product</label>
                <input type="text" name="productName" id="productName" required>
                <button type="submit" name="submit">Book Now</button>
            </form>
        </section>
    </main>
  </div>
    <footer>
        <p>© 2024 Agrimovers company. All rights reserved.</p>
    </footer>
</body>
</html>