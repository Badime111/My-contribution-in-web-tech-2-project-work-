<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 19</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            overflow-x: hidden; /* Prevent horizontal scrolling */
        }

        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(rgba(173, 173, 173, 0), rgba(255, 47, 0, 0.5)), url(images/audi.jpg);
            height: 100vh;
            color: #333;
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
            color: rgb(251, 249, 249);
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
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            flex: 1; /* Allow the container to grow */
        }

        .profile {
            background: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 10px;
            width: 150px;
            height: 220px;
            text-align: center;
            padding: 10px;
        }

        .profile:hover{
            background-color: rgb(136, 43, 80);
        }

        .profile img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .profile a{
            text-decoration: none;
        }

        .profile a:hover{
            color: white;
        }


        footer {
            text-align: center;
            padding: 20px;
            background:rgb(136, 43, 80);
            color: #ffffff;
            width: 100%;
        }

        .about {
            display: flex;
            flex-direction: row;
        }

        .div {
            margin: 30px;
            margin-top: 20px;
            margin-left: 70px;
            background:rgb(136, 43, 80);
            border: 1px solidrgb(221, 221, 221);
            border-radius: 8px;
            color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 10px;
            
        }

        .div:hover{
	        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2);
        }

    

        /* scrolling text styling */
        .scrolling-text {
            white-space: nowrap;
            position: absolute;
            top: 50%; /* Center vertically */
            transform: translateY(-50%); /* Adjust for perfect centering */
            font-size: 24px;
            color:rgb(247, 244, 245);
        }

        /* swapping image styling */
        .swap {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            text-align: center;
        }

        .state{
            display: flex;
            flex-direction: row;
            padding-left: 40px;
        }

        .tats{
            margin: 30px;
            padding: 10px;
            width: 600px;
            height: 200px;
            background: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .div img {
            width: 500px; /* Set a fixed width for images */
            height: 250px;
            border-radius: 8px;
            margin: 10px 0;
            transition: opacity 0.5s ease; /* Smooth transition */
            padding: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #2377b0;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }
        button:hover {
            background-color: #1e6495;
        }

        .image-container img{
            width: 250px; /* Set a fixed width for images */
            height: 200px;
            border-radius: 20px;

        }

        @media(max-width: 700px){
	.text-box h1{
		font-size: 20px;
	}
	.nav-link ul li{
		display: block;
	}
	.nav-link{
		position: absolute;
		background: #f44336;
		height: 100vh;
		width: 100px;
		top: 0;
		right: -200px;
		text-align: left;
		z-index: 2;
		transition: 1s;
	}
	nav .fa{
		display: block;
		margin: 10px;
		color: #fff;
		font-size: 22px;
		cursor: pointer;

	}
	.nav-link ul{
		padding: 20px;
	}

}
    
    </style>
</head>

<body>

<header>
    <div class="logo">
        <img src="images/logo3.png" alt="Company Logo">
        <div class="title">DriveAway Rentals Company</div>
    </div>

    <nav>
        <a href="dashboard.php">DASHBOARD</a>
        <a href="about.php">ABOUT US</a>
        <a href= "register.php">REGISTER</a>
        <a href="contact.php">CONTACT US</a>
        <a href="signup.php">SignUp</a>
    </nav>
</header>
<div class="scrolling-text" id="scrollingText">
    Welcome to Our Car Rental Company! Enjoy great deals and excellent service. 
</div>


<div class="container">
    <div class="profile">
        <a href="profile1.php">
        <img src="images/dom.jpg" alt="Profile Picture">
        <h3>Dominic Njangnabe</h3>
        <p>PS/ITC/22/0043</p>
        </a>
    </div>
    <div class="profile">
        <a href="profile2.php">
        <img src="images/AB.jpg" alt="Profile Picture">
        <h3>Abraham Nayinpoan</h3>
        <p>PS/ITC/22/0116</p>
        </a>
    </div>
    <div class="profile">
        <a href="profile3.php">
        <img src="images/member1.jpg" alt="Profile Picture">
        <h3>Jessica Ama Gamor</h3>
        <p>PS/ITC/22/0110</p>
        </a>
    </div>
    <div class="profile">
        <a href="profile4.php">
        <img src="images/member2.jpg" alt="Profile Picture">
        <h3>Michael Barnes</h3>
        <p>PS/ITC/22/0017</p>
        </a>
    </div>
    <div class="profile">
        <a href="profile5.php">
        <img src="images/member3.jpg" alt="Profile Picture">
        <h3>Nana Kwame Baffoe Buah</h3>
        <p>PS/ITC/22/0034</p>
        </a>
    </div>
    <div class="profile">
        <a href="profile6.php">
        <img src="images/member4.jpg" alt="Profile Picture">
        <h3>Arthur Solomon</h3>
        <p>PS/ITC/22/0090</p>
        </a>
    </div>
    <div class="profile">
        <a href="profile7.php">
        <img src="images/member5.jpg" alt="Profile Picture">
        <h3>Joachim Armookyi Kwofie</h3>
        <p>PS/ITC/22/0243</p>
        </a>
    </div>
</div>

<section class="about">
    <div class="div">
        <p>
            Welcome to DriveAway rental, your premier choice for car rentals!
            We are dedicated to providing our customers with a seamless and enjoyable experience,
            whether you're traveling for business or pleasure.
        </p>
        <p>
            Safety and reliability are our top priorities. Each vehicle undergoes rigorous maintenance
            checks to guarantee a smooth and safe ride. With easy online booking and 24/7 customer support,
            we make car rental hassle-free.
        </p>
        <p>
            To get started with your rental, please fill out our registration form by clicking the link below.
            Registration Form. To get started with your rental, please fill out our registration form by clicking the link below.
            Registration Form. To get started with your rental, please fill out our registration form by clicking the link below.
            Registration Form. To get started with your rental, please fill out our registration form by clicking the link below.
            Registration Form
        </p>
    </div>
    <div class="div">
    <div class="image-container">
        
        <div>
            <img id="image" src="images/AB.jpg" alt="Image" />
            
        </div>
    </div>
    </div>
</section>

<section class="swap">

<h1 style="color: rgb(237, 83, 22)">Vision and Mission Statements</h1>

<div class="state">
    <div class="tats">
        <h1>Vision Statement</h1>
        <p>
        To be the leading car rental company, recognized for our commitment to exceptional service, diverse vehicle options,
        and innovative solutions that enhance the travel experience. We aspire to empower travelers with freedom and convenience,
        making every journey memorable and enjoyable.
        </p>
    </div>

    <div class="tats">
        <h1>Mission Statement</h1>
        <p>
        Our mission is to provide reliable, affordable, and high-quality car rental services tailored to our customers' needs.
        We prioritize customer satisfaction through seamless processes, exceptional support, and a diverse fleet of vehicles.
        We aim to build lasting relationships with our clients while promoting safety and sustainability in travel.
        </p>
    </div>
</div>


</section>

<footer>
    <p>Made with ❤️❤️❤️ by Web Tech II Group 19 members</p>
    <p>&copy; 2025 Group 19 Members. All Rights Reserved.</p>
</footer>


<script>
    const scrollingText = document.getElementById("scrollingText");
    let position = window.innerWidth;
    const speed = 2;

    function animate() {
        position -= speed;
        if (position < -scrollingText.offsetWidth) {
            position = window.innerWidth;
        }
        scrollingText.style.left = position + "px";
        requestAnimationFrame(animate);
    }

    animate();

    const images = [
        "images/dom.jpg",
        "images/member1.jpg",
        "images/member2.jpg",
        "images/member3.jpg",
        "images/member5.jpg",
        "images/member4.jpg",
        "images/AB.jpg"
    ];
    let currentIndex = 0;

    function updateImage() {
        const imgElement = document.getElementById("image");
        imgElement.src = images[currentIndex];

        // Remove the slide class to reset position
        imgElement.classList.remove('slide');

        // Force reflow to restart the animation
        void imgElement.offsetWidth; // Trigger reflow

        // Add the slide class to trigger the slide effect
        imgElement.classList.add('slide');
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        updateImage();
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateImage();
    }

    // Automatically change images every 3 seconds
    setInterval(nextImage, 3000); // Change the image every 3000 milliseconds (3 seconds)

</script>

</body>

</html>

