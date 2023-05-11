<!-- Connection to the database -->
<?php
	include_once './includes/dbh.inc.php'; 
?>
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
            <form action="includes/signup.inc.php" method ="POST" class="login_form">
                    <!-- Title of the form -->
                        <h2 class="title">Sign up</h2>
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
                    <!-- confirm password -->
                    <div class="input-group">
                        <i class='bx bxs-lock'></i>
                        <input type="password" placeholder ="Confirm Password" name ="passwordRepeat" required>
                    </div>
                    <!-- Sign up button -->
                    <div class="input-group" id="submit_btn">
                        <button class ="btn" type ="submit" name ="signup-submit">Sign up</button>
                    </div>
                    <!-- Message to take a user to login page -->
                    <p class="register-account">Have an account already? <a href="login.php">  Sign in</a></p>

            </form>
            <div class="errors">
                <?php
                // Communicating that all fields aint filled
                    if (isset($_GET["error"])){
                        if ($_GET["error"] == "emptyinput"){
                            echo "<p>All fields must be filled! </p>";
                        }

                        // communicating that the username already exists
                        else if ($_GET["error"] == "invalidUsername"){
                            echo "<p>Invalid username!</p>";
                        }

                        // Communicating that passwords don't match
                        else if ($_GET["error"] == "passwordsdontmatch"){
                            echo "<p>Passwords don't match!</p>";
                        }

                        // Communicating that username is taken
                        else if ($_GET["error"] == "usernameExists"){
                            echo "<p>Username already exists!</p>";
                        }

                        // Communicating that something went wrong
                        else if ($_GET["error"] == "stmtfailed"){
                            echo "<p>Something went wrong, try again!</p>";
                        }

                        // Successfully signed up
                        else if ($_GET["error"] == "none"){
                            echo "<p>You have signed up!</p>";
                        }
                    }
                ?> 
            </div>
        </div> 
    </div>
</body>
</html>