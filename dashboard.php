<?php
session_start();

    include("connection.php");
    include("function.php");

    $user_data = check_login($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preney Piracy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/global_css.css">
    <link rel="stylesheet" href="CSS/dashboard.css">
</head>
<body>
    <?php
        include("header.php");
    ?>
    <div class="page-wrapper">
        <div class="main-body">
            <h2>Hi <?php echo $user_data['user_name']; ?>!</h2>
            <div class="page-sections">
                <div><h3>Your Courses</h3></div>
                <div class="course-cards-container">
                    <a href="COMP3340.html">
                        <div class="course-cards">
                            <img class="course-logo" src="Media/html.jpg" alt="Course Logo">
                            <h4>COURSE 2</h4>
                            <p>COURSE INFO</p>
                        </div>
                    </a>
                    <a href="COMP3220.html">
                        <div class="course-cards">
                            <img class="course-logo" src="Media/oo.png" alt="Course Logo">
                            <h4>COURSE 2</h4>
                            <p>COURSE INFO</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="page-sections">
                <h1>Section 2</h1>
            </div>
        </div>
        <div class="sidebar"></div>
    </div>
    <?php
        include("footer.php");
    ?>
</body>
</html>
