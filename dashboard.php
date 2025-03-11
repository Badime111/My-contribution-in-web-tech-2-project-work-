
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: linear-gradient(rgba(173, 173, 173, 0), rgba(255, 47, 0, 0.5)), url(images/rolls1.jpg);
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure the body takes full height */
        }

        .dashboard-container {
            display: flex;
            flex: 1; /* Allow the main container to grow */
        }

        .sidebar {
            width: 250px;
            background:rgb(136, 43, 80);
            color: white;
            padding: 20px;
            height: 100vh;
            position: fixed; /* Fixed sidebar */
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: orange;
            text-decoration: none;
            font-weight: bold;
        }

        .sidebar ul li a:hover {
            text-decoration: underline;
        }

        .main-content {
            margin-left: 250px; Offset 
            padding: 20px;
            flex: 1;
        }

        footer {
            background:rgb(136, 43, 80);
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* car images movement */

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: orange;
        }

        .carousel {
            position: relative;
            overflow: hidden;
            border-radius: 5px;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        img {
            width: 80%;
            border-radius: 5px;
            margin-left: 80px
    
        }

        .controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .button {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        div a{
            text-decoration: none;
            color: orange;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 24px;
            }
        }
        
    </style>
</head>
<body>
    <div class="dashboard-container">
        <nav class="sidebar">
            <h2>DASHBOARD</h2>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="booking.php">BOOKINGS</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul> 
            <br><br><br>
            <div>
                <h3>Contact Our Managers</h3> <br>
                <a href="profile1.php">General Manager</a> <br><br>
                <a href="profile2.php">Sales and Marketing Manager</a> <br><br>
                <a href="profile3.php">Finance Manager</a> <br><br>
                <a href="profile4.php">Operations Manager</a> <br><br>
                <a href="profile5.php">Fleet Manager</a> <br><br>
                <a href="profile6.php">Customer Service Representative</a> <br><br>
                <a href="profile7.php">Branch Manager</a> <br><br>
            </div>
        </nav>
        <div class="main-content">
            <header>
                <!-- <h1>Welcome, <?php echo $_SESSION['user_id']; ?>!</h1> -->
            </header>
            <div class="info-cards">
            <div class="container">
        <h1>Available Cars</h1>
        <div class="carousel">
            <div class="slides" id="slides">
                <div class="slide"><img src="images/rolls3.jpg" alt="Car 3"></div>
                <div class="slide"><img src="images/rolls1.jpg" alt="Car 3"></div>
                <div class="slide"><img src="images/mercedes3.jpg" alt="Car 3"></div>
                <div class="slide"><img src="images/benz2.jpg" alt="Car 3"></div>
                <div class="slide"><img src="images/benz.jpg" alt="Car 3"></div>
                <div class="slide"><img src="images/audi.jpg" alt="Car 3"></div>
                <div class="slide"><img src="images/bgg.jpeg" alt="Car 1"></div>
                <div class="slide"><img src="images/bg.jpeg" alt="Car 2"></div>
                <div class="slide"><img src="images/bag.jpeg" alt="Car 3"></div>
                <div class="slide"><img src="images/backg.jpeg" alt="Car 3"></div>
                <!-- Add more car images as needed -->
            </div>
            <div class="controls">
                <button class="button" id="prev">❮ Prev</button>
                <button class="button" id="next">Next ❯</button>
            </div>
        </div>
    </div>

    <script>
        let currentIndex = 0;

        function showSlide(index) {
            const slides = document.getElementById('slides');
            const totalSlides = slides.children.length;
            if (index >= totalSlides) {
                currentIndex = 0;
            } else if (index < 0) {
                currentIndex = totalSlides - 1;
            } else {
                currentIndex = index;
            }
            slides.style.transform = 'translateX(' + (-currentIndex * 100) + '%)';
        }

        document.getElementById('next').addEventListener('click', () => {
            showSlide(currentIndex + 1);
        });

        document.getElementById('prev').addEventListener('click', () => {
            showSlide(currentIndex - 1);
        });

        // Auto-slide every 5 seconds
        setInterval(() => {
            showSlide(currentIndex + 1);
        }, 3000);


    </script>


    <footer>
        <p>&copy; Web tech II Group 19 members</p>
    </footer>
</body>
</html>


