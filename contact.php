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
    <title>My Bio</title>
    <link rel="stylesheet" href="CSS/global_css.css">
    <link rel="stylesheet" href="CSS/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="script.js"></script>
  </head>
  <body id="contact-body">
    <?php
      include("header.php");
    ?>
    <section class="form-section first-section center">
      <form id="form" class="form" action="" method="post">
        <h3>Contact Form</h3>
          <input id="username" type="text" name="username" placeholder="Name"/>
          <span id="username_error" class="form-error-message"></span>

          <input id="email" type="text" name="email" placeholder="Email address"/>
          <span id="email_error" class="form-error-message"></span>

          <input id="subject" type="text" name="subject" placeholder="Subject"/>
          <span id="subject_error" class="form-error-message"></span>

          <textarea id="message" name="message" placeholder="Write your message here..."></textarea>
          <span id="message_error" class="form-error-message"></span>
          
          <div class="center">
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
          </div>
      </form>
    </section>
    <?php
        include("footer.php");
    ?>
  </body>
</html>
