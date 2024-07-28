
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/global_css.css">
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <div id="page-container">
        <div class="login-container">
            <div id="login-left-section">
                <p>Sign In</p>
                <form class="login-form" method="POST">
                    <label for="username">USERNAME</label>
                    <input type="text" id="username" placeholder="Username" name="username" required>
        
                    <label for="password">PASSWORD</label>
                    <input type="password" id="password" placeholder="Password" name="password" required>
        
                    <button type="submit">LOGIN</button>

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
                                    //Reading credentials from Database
                                    $query = "select * from users where user_name = '$user_name' limit 1";
                                    $result = mysqli_query($con, $query);

                                    if($result)
                                    {
                                        if($result && mysqli_num_rows($result) > 0)
                                        {
                                            $user_data = mysqli_fetch_assoc($result);

                                            if($user_data['password'] === $password)
                                            {
                                                $_SESSION['user_id'] = $user_data['user_id'];
                                                header("Location: dashboard.php");
                                                die;    
                                            }
                                        }
                                    }
                                    echo '<h5 class="echo-text-style">Incorrect username or password!</h5>';
                                } else {
                                    echo '<h5 class="echo-text-style">Incorrect username or password!</h5>'; 
                                }
                            }

                        ?>
                </form>
            </div>
            <div id="login-right-section">
                <h2>Welcome to Preney Piracy</h2>
                <p>Don't have an account?</p>
                <a href="signup.php"><button>Create Account</button></a>
            </div>
        </div>
    </div>
</body>
</html>
