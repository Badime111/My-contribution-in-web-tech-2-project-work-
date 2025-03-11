<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Showcase - Car Rental</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: linear-gradient(rgba(173, 173, 173, 0), rgba(255, 47, 0, 0.5)), url(images/backg.jpeg);
        }

        .container {
            max-width: 1000px;
            margin: 10px auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
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
            margin-left: 100px
    
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

        @media (max-width: 768px) {
            h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Available Cars</h1>
        <div class="carousel">
            <div class="slides" id="slides">
                <div class="slide"><img src="images/white.jpeg" alt="Car 1"></div>
                <div class="slide"><img src="images/whiteb.jpeg" alt="Car 2"></div>
                <div class="slide"><img src="images/car.jpg" alt="Car 3"></div>
                <div class="slide"><img src="images/car2.jpg" alt="Car 3"></div>
                <div class="slide"><img src="images/car3.jpg" alt="Car 3"></div>
                <div class="slide"><img src="images/bgroud.jpeg" alt="Car 3"></div>
                <div class="slide"><img src="images/bgg.jpeg" alt="Car 3"></div>
                <div class="slide"><img src="images/bg.jpeg" alt="Car 3"></div>
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
</body>
</html>



