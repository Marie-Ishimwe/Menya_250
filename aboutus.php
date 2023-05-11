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
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php
        include_once 'nav.php';
    ?>
    <div class="aboutusContainer">
         <div class="our-mission">
            <div class="info">
                <h5>Our mission</h5>
                <p class="para">
                Getting people to know more about Rwanda <br>
                through a word puzzle game. This will help both <br>
                locals and internationals to be exposed to more aspects <br>
                of Rwanda while also developing the Visit Rwanda Campaign.</p>
                <button class="play">Play</button>
            </div>
            
            <div class="background">
                    <img class="pic" src="img/search.jpg" alt=" " />
            </div>
         </div>

         <div class="story">
            <img class="pic" src="img/abt.svg" alt=" " />
            <div class="info">
            <h5 class="our-story">Our story</h5>
            <p class="para1">
             Two ALU Computer Science students, who are passionate <br>
             about developing new technologies and giving back to <br>
             their community with the intention of contributing to <br>
             developing a society with high technology.</p>
            </div>
          
         </div>
       </div>
       <?php
        include_once "footer.php";
        ?>
</body>
</html>