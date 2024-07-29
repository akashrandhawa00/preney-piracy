<?php
session_start();

    include("connection.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['username'];
        $password = hash('sha1', $_POST['password']);

        if(!empty($user_name) && !empty($password))
        {
            // Saving credentials into Database
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;

        } else {
            echo "Please enter valid info!";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="CSS/global_css.css">
    <link rel="stylesheet" href="CSS/signup.css">
</head>
<body>
    <div id="page-container">
        <div class="signup-container">
            <div id="signup-right-section">
                <h2>Welcome to Preney Piracy</h2>
                <p>Already have an account?</p>
                <a href="login.php"><button>Login</button></a>
            </div>
            <div id="signup-left-section">
                <p>SignUp</p>
                <form class="signup-form" method="POST">
                    <label for="username">USERNAME</label>
                    <input type="text" id="username" placeholder="Username" name="username" required>
        
                    <label for="password">PASSWORD</label>
                    <input type="password" id="password" placeholder="Create Password" name="password" required>
<!--         
                    <label for="password">RE-ENTER PASSWORD</label>
                    <input type="password" id="password" placeholder="Confirm Password" name="password" required> -->

                    <button type="submit">Create Account</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
