<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->

    <!-- Google fonts - DM Sans -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">


     <!-- Boxicons CDN Links -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!-- CSS style -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
<div class="content_wrapper">
        <div class="page_img">
            <img src="img/search.jpg" alt="search">
        </div>
    
        <div class="form_content">
            <form action="includes/login.inc.php" method ="POST" class="login_form">
                    <!-- Title of the form -->
                        <h2 class="title">Sign in</h2>
                    <!-- username -->
                    <div class="input-group">
                        <i class='bx bxs-user'></i>
                        <input type="text" placeholder ="Username" name ="username" required>
                    </div>
                    <!-- password -->
                    <div class="input-group">
                        <i class='bx bxs-lock'></i>
                        <input type="password" placeholder ="Password" name ="password" required>
                    </div>
                    <!-- Sign in button -->
                    <div class="input-group" id="submit_btn">
                        <button class ="btn" type ="submit" name ="signin-submit">Sign in</button>
                    </div>
                    <!-- Message to take a user to sign up page -->
                    <p class="register-account">New here?    <a href="signup.php">   Sign up</a></p>

            </form>
            <div class="errors">
                <!-- Possible errors -->
                <?php
                // empty fields
                    if (isset($_GET["error"])){
                        if ($_GET["error"] == "emptyinput"){
                            echo "<p>All fields must be filled!</p>";
                        }
                // incorrect username OR password
                        else if ($_GET["error"] == "incorrectlogin"){
                            echo "<p>Incorrect username or password!</p>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>