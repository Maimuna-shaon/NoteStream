<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $mobno = $_POST['mobno'];
    $email = $_POST['email'];
    
    $password = $_POST['password'];

    if ($password !== $_POST['username']) {
        $hashed_password = md5($password);
        $ret = "SELECT Email, MobileNumber FROM tbluser WHERE Email=:email || MobileNumber=:mobno";
        $query= $dbh -> prepare($ret);
        $query-> bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':mobno', $mobno, PDO::PARAM_INT);
        $query-> execute();
        $results = $query -> fetchAll(PDO::FETCH_OBJ);

        if($query -> rowCount() == 0) {
            $sql="INSERT INTO tbluser(FullName, MobileNumber, Email, Password) VALUES(:fname, :mobno, :email, :password)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':fname', $fname, PDO::PARAM_STR);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->bindParam(':mobno', $mobno, PDO::PARAM_INT);
            $query->bindParam(':password', $hashed_password, PDO::PARAM_STR);
           
           
            $query->execute();
            $lastInsertId = $dbh->lastInsertId();
            if($lastInsertId) {
                echo "<script>alert('You have successfully registered with us');</script>";
                echo "<script>window.location.href ='dashboard.php'</script>";
            } else {
                echo "<script>alert('Something went wrong. Please try again');</script>";
            }
        } else {
            echo "<script>alert('Email-id or Mobile Number already exists. Please try again');</script>";
        }
    } else {
        echo "<script>alert('Email and Username cannot be the same');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container-fluid {
            background: url('path/to/your/image.jpg') no-repeat center center;
            background-size: cover;
            position: relative;
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .signup-form {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        .signup-form h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .signup-form label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            color: #555;
        }
        .signup-form input[type="text"],
        .signup-form input[type="password"],
        .signup-form input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .signup-form button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        .signup-form button:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
        .strength {
            font-size: 0.9em;
        }
    </style>
    <script>
        function validatePassword() {
            var password = document.getElementById("password").value;
            var errorMessage = "";
            var isValid = true;
            if (password.length < 7) {
                errorMessage += "Password must be at least 7 characters long. ";
                isValid = false;
            }
            if (!/[a-z]/.test(password)) {
                errorMessage += "Password must contain at least one lowercase letter. ";
                isValid = false;
            }
            if (!/[A-Z]/.test(password)) {
                errorMessage += "Password must contain at least one uppercase letter. ";
                isValid = false;
            }
            if (!/[0-9]/.test(password)) {
                errorMessage += "Password must contain at least one number. ";
                isValid = false;
            }
            if (!isValid) {
                alert(errorMessage);
            }
            return isValid;
        }
    </script>
</head>
<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <div class="signup-form">
            <h2>Sign Up</h2>
            <form method="post" onsubmit="return validatePassword()">
                <label for="fname">Full Name:</label>
                <input type="text" id="fname" name="fname" required>
                <label for="mobno">Mobile Number:</label>
                <input type="text" id="mobno" name="mobno" required maxlength="10" pattern="[0-9]+">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>