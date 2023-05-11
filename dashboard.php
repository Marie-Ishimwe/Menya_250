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
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body id="dashboard">
    <?php
        include_once 'side_menu.php';
    ?>
    <div class="dashboard_content">
        <div class="tutorial_content">
            <div class="tutorial_image">
                <img src="img/search.jpg" alt="Searching">
            </div>
            <div class="tutorial_message1">
                <h4>Choose a province</h4>
                <p>Have fun while learning</p>
                <a class="dsh_btn" href="https://animoto.com/play/j9I4x39YLeZvM7QVo8kX1Q" target="_blank" rel="noopener noreferrer">Learn how to play here</a>
            </div>
        </div>

        <!-- Provinces section -->
        <div class="provinces_content">
     
            <div class="provinces_holder">
                <div class="prov_id">
                    <p>1</p>
                </div>
                <div class="prov_image">
                    <img src="img/kigali.jpg" alt="Kigali">
                </div>
                <div class="prov_name">
                    <p>Kigali city</p>
                </div>
                <div class="play_btn">
                    <a href="rules.php">Play</a> 
                </div>
            </div>

            <!-- Northern province -->
            <div class="provinces_holder">
                <div class="prov_id">
                    <p>2</p>
                </div>
                <div class="prov_image">
                    <img src="img/north.jpg" alt="north">
                </div>
                <div class="prov_name">
                    <p>Northern province</p>
                </div>
                <div class="play_btn">
                    <a href="#">Play</a> 
                </div>
            </div>

            <!-- Eastern province -->
            <div class="provinces_holder">
                <div class="prov_id">
                    <p>3</p>
                </div>
                <div class="prov_image">
                    <img src="img/East.jpg" alt="east">
                </div>
                <div class="prov_name">
                    <p>Eastern province</p>
                </div>
                <div class="play_btn">
                    <a href="#">Play</a> 
                </div>
            </div>
            <!-- Southern province -->
            <div class="provinces_holder">
                <div class="prov_id">
                    <p>4</p>
                </div>
                <div class="prov_image">
                    <img src="img/south.jpg" alt="south">
                </div>
                <div class="prov_name">
                    <p>Southern province</p>
                </div>
                <div class="play_btn">
                    <a href="#">Play</a> 
                </div>
            </div>
            <!-- Western province -->
            <div class="provinces_holder">
                <div class="prov_id">
                    <p>5</p>
                </div>
                <div class="prov_image">
                    <img src="img/west.jpg" alt="west">
                </div>
                <div class="prov_name">
                    <p>Western province</p>
                </div>
                <div class="play_btn">
                    <a href="#">Play</a> 
                </div>
            </div>

        </div>
    </div>

</body>
</html>