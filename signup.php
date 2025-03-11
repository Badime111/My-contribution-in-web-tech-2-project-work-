<!DOCTYPE html>

<?php
include('connect.php');

$username = "";
$email = "";
$password = "";
$confirm_password = "";
$message = ""; // Variable to hold messages

// Get data from the form
function getData() {
    return [
        $_POST['username'],
        $_POST['email'],
        $_POST['password'],
        $_POST['confirm_password']
    ];
}

if (isset($_POST['insert'])) {
    // Validate form inputs
    $info = getData();
    $username = $info[0];
    $email = $info[1];
    $password = $info[2];
    $confirm_password = $info[3];

    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $message = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format.";
    } elseif ($password !== $confirm_password) {
        $message = "Passwords do not match.";
    } else {
        // Hash the password before storing
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare the insert query
        $insert_query = "INSERT INTO `signup`(`username`, `email`, `password`) VALUES ('$username','$email','$hashed_password')";
        try {
            $insert_result = mysqli_query($conn, $insert_query);
            if ($insert_result) {
                if (mysqli_affected_rows($conn) > 0) {
                    $message = "Sign up successfully";
                    header('Location: dashboard.php');
                    exit();
                } else {
                    $message = "Sign up failed";
                }
            }
        } catch (Exception $ex) {
            $message = "Error signing up: " . $ex->getMessage();
        }
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .reform {
            background-image: linear-gradient(rgba(173, 173, 173, 0), rgba(255, 47, 0, 0.5)), url(images/mercedes3.jpg);
            height: 100vh;
        }

        #register {
            width: 300px;
            margin: 10rem auto;
            background: rgb(136, 43, 80);
            padding: 70px;
            border-radius: 5px;
            margin-top: -10px;
        }

        label {
            font-family: 'Times New Roman', Times, serif;
            color: orange; 
            font-size: larger;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #submit {
            background-color: black;
            color: orange;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        #submit:hover {
            background-color: orange;
            color: rgb(0, 0, 0);
        }

        h2 {
            color: orange;
            text-align: center;
            padding: 50px;
            margin-bottom: -100px;
            font-family: gilroy;
            padding-top: 145px;
        }

        .message {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="reform">
        <h2>SignUp Form</h2>
        <?php if ($message): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
        <form id="register" action="signup.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirm_password">

            <br><br>
            <input type="submit" id="submit" name="insert" value="Sign Up">
        </form>
    </div>
</body>

<script>
    
    // Prompt popup
    var name = prompt("Please enter your name:", " ");
    if (name != null && name != "") {
    alert("Hello, " + name + ", Click OK to go to SignUp ");
    }
    // Alert popup
    alert("You are going to SignUp page");
</script>
</html>


