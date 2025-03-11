<!DOCTYPE html>

<?php
include('connect.php');

$book_id = "";
$selection = "";
$full_name = "";
$email = "";
$phone = "";
$pickupdate = "";
$returndate = "";
$message = ""; // Variable to hold messages

// Get data from the form
function getData() {
    $data = array();
    $data[1] = $_POST['selection'];
    $data[2] = $_POST['full_name'];
    $data[3] = $_POST['email'];
    $data[4] = $_POST['phone'];
    $data[5] = $_POST['pickupdate'];
    $data[6] = $_POST['returndate'];
    return $data;
}

if (isset($_POST['insert'])) {
    $info = getData();
    $insert_query = "INSERT INTO `booking`(`selection`, `full_name`, `email`, `phone`, `pickupdate`, `returndate`) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]')";
    try {
        $insert_result = mysqli_query($conn, $insert_query);
        if ($insert_result) {
            if (mysqli_affected_rows($conn) > 0) {
                header('Location: bookThanks.php');
                exit();
            } 
        }
        
    } catch (Exception $ex) {
        $message = "Error: " . $ex->getMessage();
    }
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Car</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: linear-gradient(rgba(173, 173, 173, 0), rgba(255, 47, 0, 0.5)), url(images/mercedes3.jpg);
            background-repeat: 4;
        }

        .container {
            max-width: 350px;
            margin: 30px auto;
            padding: 30px;
            background: rgb(136, 43, 80);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: rgb(247, 237, 237);
        }

        label {
            display: block;
            color: white;
            margin: 15px 0 5px;
        }
        

        input[type="text"],
        input[type="date"],
        input[type="email"],
        input[type="number"],
        select {
            width: 330px;
            padding: 10px;
            background-color: rgb(231, 197, 177);
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .button {
            width: 100%;
            padding: 15px;
            background-color: rgb(253, 94, 2);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: rgb(253, 94, 2);
        }

        .message {
            color: green;
            text-align: center;
            margin: 15px 0;
        }

        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Book for your favorite Car</h1>
    <div class="container">
        <?php if ($message): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
        <form action="booking.php" method="post">
            <label for="car">Select Car:</label>
            <select id="selection" name="selection" value="<?php echo($selection); ?>" required>
                <option value="">Select a Car</option>
                <option value="Rolls Royce">Rolls Royce- $100/day</option>
                <option value="Rolls Royce">Rolls Royce - $70/day</option>
                <option value="Mercedes Benz">Mercedes Benz - $90/day</option>
                <option value="Mercedes Benz">Mercedes Benz - $90/day</option>
                <option value="Mercedes Benz">Mercedes Benz - $90/day</option>
                <option value="Toyota vits">Toyota vits- $90/day</option>
                <option value="Toyota corolla">Toyota corolla - $90/day</option>
                <option value="Honda Civic">Honda Civic - $90/day</option>
                <option value="Honda Civic">Honda Civic - $90/day</option>
                <option value="BMW">BMW - $90/day</option>
                <!-- Add more cars as needed -->
            </select>

            <input type="text" id="full_name" name="full_name" placeholder ="Your Name" value="<?php echo($full_name); ?>" required>

            <input type="email" id="email" name="email" placeholder ="Email" value="<?php echo($email); ?>" required>

            <input type="text" id="phone" name="phone" placeholder ="Phone Number" value="<?php echo($phone); ?>" required>

            <input type="date" id="pickupdate" name="pickupdate" placeholder ="Pickup Date" value="<?php echo($pickupdate); ?>" required>

            <input type="date" id="returndate" name="returndate" placeholder ="Return Date" value="<?php echo($returndate); ?>" required>

            <input class="button" type="submit" name="insert" value="Book a Car">
        </form>
    </div>
</body>


<script>
    var result = confirm("Click OK to book a car?");
</script>
</html>


