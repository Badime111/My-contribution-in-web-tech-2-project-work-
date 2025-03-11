<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Driveaway Rental Company</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: linear-gradient(rgba(173, 173, 173, 0), rgba(255, 47, 0, 0.5)), url(images/rolls3.jpg);
            color: #333;
            display: flex;
            flex-direction: column;
            height: 100vh; /* Full viewport height */
        }
        header {
            background:rgb(136, 43, 80);
            color: #ffffff;
            padding: 15px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            width: 70px; /* Adjust logo size as needed */
            margin-right: 10px; /* Space between logo and title */
            border-radius: 10px;
        }
        .title {
            font-size: xx-large;
            color:white
        }
        nav {
            margin: 0;
        }
        nav a {
            color: #ffffff;
            margin: 0 15px;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        nav a:hover {
            background: #45a049;
        }
        .container {
            flex: 1;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto; /* Scroll if content overflows */
        }
        h1 {
            color: #007BFF;
        }
        .mission, .team {
            margin: 20px 0;
        }
        footer {
            text-align: center;
            padding: 20px;
            background:rgb(136, 43, 80);
            color: #ffffff;
            width: 100%;
            position: relative; /* Stay at bottom of the page */
        }
        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <img src="images/logo3.png" alt="Company Logo">
        <div class="title">About DriveAway Rental Company</div>
    </div>
    <nav>
        <a href="index.php">HOME</a>
        <a href="about.php">ABOUT US</a>
        <a href="register.php">REGISTER</a>
        <a href="contact.php">CONTACT US</a>
        <a href="signup.php">SignUp</a>
    </nav>
</header>

<div class="container">
    <h2>Our Mission</h2>
    <p class="mission">
        At Driveaway Rental Company, our mission is to provide reliable and affordable vehicle rentals to ensure your travel experience is seamless and enjoyable. 
        We are dedicated to exceptional customer service and strive to meet the needs of every traveler.Our mission is to provide reliable, affordable, and high-quality car rental services tailored to our customers' needs.
        We prioritize customer satisfaction through seamless processes, exceptional support, and a diverse fleet of vehicles.
        We aim to build lasting relationships with our clients while promoting safety and sustainability in travel.
    </p>

    <h2>Our Vision</h2>
    <p>
        To be the leading car rental company, recognized for our commitment to exceptional service, diverse vehicle options,
        and innovative solutions that enhance the travel experience. We aspire to empower travelers with freedom and convenience,
        making every journey memorable and enjoyable.
        Founded in 2020, Driveaway Rental Company has quickly become a leader in the vehicle rental industry. 
        With a fleet of diverse vehicles and a commitment to customer satisfaction, we cater to both individual and corporate clients.
    </p>

    <h2>Our Team</h2>
    <p class="team">
        Our team comprises experienced professionals who are passionate about travel and dedicated to helping you find the perfect vehicle 
        for your journey. From booking to return, we are here to assist you every step of the way.
    </p>
</div>

<footer>
    <p>Made with ❤️❤️❤️ by Web Tech II Group 19 members</p>
    <p>&copy; 2025 Group 19 Members. All Rights Reserved.</p>
</footer>

</body>
</html>


