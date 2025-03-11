<!DOCTYPE html>
<?php

include('connect.php');

$customer_id="";
$first_name="";
$last_name="";
$email="";
$phone="";
$license_number="";
$created_at="";
$message = ""; // Variable to hold messages


// Get data from the form
function getData() {
    $data = array();
    $data[0] = $_POST['customer_id'];
    $data[1] = $_POST['first_name'];
    $data[2] = $_POST['last_name'];
    $data[3] = $_POST['email'];
    $data[4] = $_POST['phone'];
    $data[5] = $_POST['license_number'];
    $data[6] = $_POST['created_at'];
    return $data;
}

// Search
if (isset($_POST['search'])) {
    $info = getData();
    $search_query = "SELECT * FROM customers WHERE customer_id = '$info[0]'";
    $search_result = mysqli_query($conn, $search_query);
    if ($search_result) {
        if (mysqli_num_rows($search_result)) {
            while ($rows = mysqli_fetch_array($search_result)) {
                $customer_id = $rows['customer_id'];
                $first_name = $rows['first_name'];
                $last_name = $rows['last_name'];
                $email = $rows['email'];
                $phone = $rows['phone'];
                $license_number = $rows['license_number'];
                $created_at = $rows['created_at'];
            }
        } else {
            $message = "No data available";
        }
    } else {
        $message = "Result error";
    }
}

// Insert
if (isset($_POST['insert'])) {
    $info = getData();
    $insert_query = "INSERT INTO `customers`(`first_name`, `last_name`, `email`, `phone`, `license_number`, `created_at`) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]')";
    try {
        $insert_result = mysqli_query($conn, $insert_query);
        if ($insert_result) {
            if (mysqli_affected_rows($conn) > 0) {
                $message = "Data inserted successfully";
            } else {
                $message = "Data not inserted";
            }
        }
    } catch (Exception $ex) {
        $message = "Error inserting: " . $ex->getMessage();
    }
}

// Delete
if (isset($_POST['delete'])) {
    $info = getData();
    $delete_query = "DELETE FROM `customers` WHERE customer_id = '$info[0]'";
    try {
        $delete_result = mysqli_query($conn, $delete_query);
        if ($delete_result) {
            if (mysqli_affected_rows($conn) > 0) {
                $message = "Data deleted successfully";
            } else {
                $message = "Data not deleted";
            }
        }
    } catch (Exception $ex) {
        $message = "Error in delete: " . $ex->getMessage();
    }
}

// Update
if (isset($_POST['update'])) {
    $info = getData();
    $update_query = "UPDATE `customers` SET `first_name`='$info[1]', last_name='$info[2]', email='$info[3]', phone='$info[4]', license_number='$info[5]', created_at='$info[6]' WHERE customer_id = '$info[0]'";
    try {
        $update_result = mysqli_query($conn, $update_query);
        if ($update_result) {
            if (mysqli_affected_rows($conn) > 0) {
                $message = "Data updated successfully";
            } else {
                $message = "Data not updated";
            }
        }
    } catch (Exception $ex) {
        $message = "Error in update: " . $ex->getMessage();
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box; /* Add box-sizing for better layout */
        }

        body, html {
            height: 100%; /* Full height */
        }

        .reform {
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            height: 100vh; /* Full viewport height */
            background-image: linear-gradient(rgba(173, 173, 173, 0), rgba(255, 47, 0, 0.5)), url(images/mercedes3.jpg);
            
        }

        #register {
            width: 500px;
            background:rgb(136, 43, 80);
            padding: 60px;
            border-radius: 5px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .submits input{
            background-color: black;
            color: orange;
            border: none;
            margin: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .submits input:hover {
            background-color: orange;
            margin: 10px;
            color: rgb(0, 0, 0);
        }

        h1 {
            color: rgb(230, 230, 224);
            text-align: center;
            margin-bottom: 20px;
            font-family: gilroy;
        }

        .message {
            text-align: center;
            color: rgb(251, 123, 3);
            font-size: 20px;
            margin-top: 20px;
        }

        .submits {
            display: flex;
            flex-direction: row;
        }

    </style>
</head>
<body>

<div class="reform" id="reform">
    <div>
        <h1>Registration Form</h1>
        
        <!-- Display message if available -->
        <?php if (!empty($message)): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>

        <form id="register" action="register.php" method="post">
            <input type="number" name="customer_id" placeholder="Customers ID" value="<?php echo($customer_id); ?>"><br><br>
            <input type="text" name="first_name" placeholder="First Name" value="<?php echo($first_name); ?>"><br><br>
            <input type="text" name="last_name" placeholder="Last Name" value="<?php echo($last_name); ?>"><br><br>
            <input type="email" name="email" placeholder="Email" value="<?php echo($email); ?>"><br><br>
            <input type="text" name="phone" placeholder="Phone" value="<?php echo($phone); ?>"><br><br>
            <input type="date" name="created_at" placeholder="Registration Date" value="<?php echo($created_at); ?>"><br><br>
            <input type="text" name="license_number" placeholder="License Number" value="<?php echo($license_number); ?>"><br><br>
    
            <div class="submits">
                <input type="submit" name="insert" value="ADD">
                <input type="submit" name="delete" value="DELETE">
                <input type="submit" name="update" value="UPDATE">
                <input type="submit" name="search" value="DISPLAY">
            </div>
        </form>
    </div>
</div>

</body>
</html>



