<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DHL Express</title>
    <style>
        /* Reset default margin and padding */
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-image: url(images/image\ -1.png);
            background-size: cover;
            background-attachment:fixed ;
        }

        /* Header styles */
        .header {
            background-color: #f5f5f5;
            padding: 20px;
            text-align: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            color: #333;
            color:green ;
        }

        .nav-items {
            margin-top: 10px; 
        }
        .nav-items:hover  {
            color: aqua;
            background-color: #f5f5f5;
        }

        .nav-items a {
            margin-right: 20px;
            text-decoration: none;
            color: #666;
        }

        /* Main content styles */
        .intro {
            padding: 40px;
            text-align: center;
        }

        .intro h1 {
            font-size: 36px;
            color: #333;
        }

        .intro p {
            font-size: 16px;
            color: #777;
        }

        .achievements {
            display: flex;
            justify-content: space-around;
            padding: 40px;
        }

        .work {
            text-align: center;
        }

        .work i {
            font-size: 24px;
            color: #007bff;
        }

        .work-heading {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }

        .work-text {
            font-size: 14px;
            color: #777;
        }
        .login-signup {
                display: flex;
                justify-content: center;
            padding: 60px}
        /* Footer styles */
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header class="header">
        <a href="#" class="logo">AGRI-MOVERS TRANSPORT COMPANY</a>
        <nav class="nav-items">
            <a href="">Home</a>
            <a href="services.php">Services</a>
            <a href="book.php">bookings</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">contacts</a>
            <a href="Login.php">Login</a>
             <!-- Add more navigation links as needed --> 
        </nav>
    </header>

    <main>
        <div class="intro">
            <h1>Agricultural Transport solution</h1>
            <p>Fast, reliable, and secure shipping transport company in Nyeri</p>
        </div>

        <div class="achievements">
            <div class="work">
                <i class="fas fa-globe"></i>
                <p class="work-heading">You produce, We deliver countrywide</p>
                <p class="work-text">Delivering to over 8 sub-counties.</p>
            </div>
            <!-- Add more achievement sections -->
        </div>        
        </div>
    </main>

    
</body>
</html>