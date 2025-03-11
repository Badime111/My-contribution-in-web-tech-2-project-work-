<!DOCTYPE html>


<?php


include('connect.php');

$contact_id="";
$customer_id="";
$full_name="";
$email="";
$phone="";
$message="";
$messages = ""; // Variable to hold messages


// Get data from the form
function getData() {
    $data = array();
    $data[1] = $_POST['full_name'];
    $data[2] = $_POST['email'];
    $data[3] = $_POST['phone'];
    $data[4] = $_POST['message'];
    return $data;
}

if (isset($_POST['insert'])) {
    $info = getData();
    $insert_query = "INSERT INTO `contacts`(`full_name`, `email`, `phone`, `message`) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]')";
    try {
        $insert_result = mysqli_query($conn, $insert_query);
        if ($insert_result) {
            if (mysqli_affected_rows($conn) > 0) {
                $messages = "Welcome to our contact page";
            } else {
                $messages = "Could not go to contact page";
            }
        }
    } catch (Exception $ex) {
        $messages = "There was a mismatch: " . $ex->getMessages();
    }

    
}


?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Premium Car Rentals</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-image: linear-gradient(rgba(173, 173, 173, 0), rgba(255, 47, 0, 0.5)), url(images/benz2.jpg);
            background-size: cover;

        }

        .contact-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 20px;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .contact-header h1 {
            font-size: 2.5rem;
            color:orange;
            margin-bottom: 1rem;
        }

        .contact-header p {
            color:rgb(240, 237, 233);
            font-size: 1.1rem;
        }

        .contact-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            background:rgb(136, 43, 80);
            padding: 2rem;
    
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .contact-info {
            padding: 20px;
        }

        .info-box {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }

        .info-icon {
            width: 50px;
            height: 50px;
            background: #3498db;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
        }

        .info-icon i {
            color: white;
            font-size: 1.2rem;
        }

        .info-text h3 {
            color:orange;
            margin-bottom: 0.5rem;
        }

        .info-text p {
            color:rgb(224, 233, 233);
        }

        .contact-form {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: orange;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #3498db;
        }


        .button {
            background-color: black;
            color: orange;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        .button:hover {
            background-color: orange;
            color: rgb(0, 0, 0);
        }

        .map-container {
            margin-top: 2rem;
            border-radius: 15px;
            overflow: hidden;
        }

        iframe {
            width: 100%;
            height: 400px;
            border: 0;
        }

        @media (max-width: 768px) {
            .contact-content {
                grid-template-columns: 1fr;
                padding: 1rem;
            }
            
            .contact-header h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="contact-container">
        <div class="contact-header">
            <h1>Contact DriveAway Car Rentals</h1>
            <p>Get in touch with us for any inquiries or assistance with your car rental needs.</p>
        </div>

        <div class="contact-content">
            <div class="contact-info">
                <div class="info-box">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-text">
                        <h3>Visit Us</h3>
                        <p>University of Cape Coast<br>Department of CS and IT<br>Science block</p>
                    </div>
                </div>

                <div class="info-box">
                    <div class="info-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="info-text">
                        <h3>Call Us</h3>
                        <p>General Inquiries: 0551283612<br>Reservations: 0246053688</p>
                    </div>
                </div>

                <div class="info-box">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-text">
                        <h3>Email Us</h3>
                        <p>driveaway@gmail.com<br>info@gmail.com</p>
                    </div>
                </div>
            </div>

            <form class="contact-form" id="contactForm" action ="contact.php" method="POST">
                <div class="form-group">

                    <input type="text" id="name" name="full_name" placeholder="Full Name" value="<?php echo($full_name); ?>">
                </div>

                <div class="form-group">

                    <input type="email" id="email" name="email" placeholder="Email Address" value="<?php echo($email); ?>">
                </div>

                <div class="form-group">

                    <input type="tel" id="phone" name="phone" placeholder="Phone Number" value="<?php echo($phone); ?>">
                </div>

                <div class="form-group">
                    
                    <textarea id="message" name="message" rows="5" placeholder="Your Message" value="<?php echo($message); ?>"></textarea>
                </div>

                <input type="submit" class ="button" id="submit" name="insert" value ="Send Message">
            </form>
        

        <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.927017587202!2d-1.293429325258272!3d5.115464494861615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfddfed6fc798569%3A0x7531c2a02fe48636!2sUniversity%20Of%20Cape%20Coast!5e0!3m2!1sen!2sgh!4v1738942371250!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
        </div>

    
</body>
</html>




