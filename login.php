<!DOCTYPE html>

<?php
include('connect.php');

$login_id = "";
$username = "";
$password = "";
$message = ""; // Variable to hold messages

// Get data from the form
function getData() {
    $data = array();
    $data[0] = $_POST['login_id'];
    $data[1] = $_POST['username'];
    $data[2] = $_POST['password'];
    return $data;
}

if (isset($_POST['insert'])) {
    $info = getData();
    $insert_query = "INSERT INTO `login`(`username`, `password`) VALUES ('$info[1]','$info[2]')";
    try {
        $insert_result = mysqli_query($conn, $insert_query);
        if ($insert_result) {
            if (mysqli_affected_rows($conn) > 0) {
                $message = "Login successfully";
            } else {
                $message = "Login failed";
            }
        }
    } catch (Exception $ex) {
        $message = "Error logging in: " . $ex->getMessage();
    }

    if ($insert_result) {
        header('Location: dashboard.php');
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .form {
            background-image: linear-gradient(rgba(173, 173, 173, 0), rgba(255, 47, 0, 0.5)), url(images/mercedes3.jpg);
            background-repeat: 2;
            height: 100vh;
        }

        #logins {
            width: 300px;
            margin: 10rem auto;
            background: rgb(136, 43, 80);
            padding: 80px;
            border-radius: 5px;
            align-content: center;
            margin-top: -10px;
        }

        .form h2 {
            color: orange;
            text-align: center;
            padding: 50px;
            margin-bottom: -100px;
            font-family: gilroy;
            padding-top: 150px;
        }

        label {
            font-family: 'Times New Roman', Times, serif;
            color: orange;
            font-size: larger;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        #submit {
            background-color: #000000;
            color: orange;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: max-content;
        }
        #submit:hover {
            background-color: orange;
            color: rgb(0, 0, 0);
        }
    </style> 
</head>
<body>
    <div class="form">
        <h2>User Login</h2>
        <form id="logins" method="POST" action="login.php" onsubmit="return validateForm()">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo($username); ?>">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo($password); ?>">

            <input type="submit" name="insert" id="submit" value="Login"> <br>
            <hr>
            <label style="color:rgb(239, 247, 9);">Don't have an account?
            <a href="signup.php" style="color:rgb(247, 80, 9);">Sign Up</a>
        </form>
    </div>

    <script>
        function validateForm() {
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();

            if (username === "") {
                alert("Username is required");
                return false; // Prevent form submission
            }

            if (password === "") {
                alert("Password is required");
                return false; // Prevent form submission
            }

            return true; // Form is valid, continue with submission
        }
    </script>
</body>
</html>


