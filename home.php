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
     <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">


    <!-- CSS style -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/another.css">
    <link rel="stylesheet" href="css/footer.css">
    
</head>
<body>
    <?php
        include_once 'nav_out.php';
    ?>
    <main>
        <div class="home_container">
            <div class="kgl">
                <img class="kiga" src="img/kigali copy.jpg" alt=" " />
            </div>
            <div class="paragraph1">
                <h1 class="text">Are you ready to have fun while learning?</h1>
                <a href="login.php"><button class="playing">Start playing</button></a>
            </div>
        </div>
        
        <div class='middleContainer'>
                
            <div class="title">
                <h3 class="title1">Get to know Rwanda</h3>
            </div>
            <hr class="line1" />

                <div class='column1'>
                    <div class='box1'>
                        <img src="img/box.png" alt=" " />
                        <h4 class='top1'>Kigali</h4> 
                        <p class='para2'>
                        Kigali the capital city of Rwanda has three districts
                        in total.</p>
                    </div>
                    <div class='box2'>
                        <img src="img/box.png" alt=" " />
                        <h4 class='top1'>Northern Province</h4> 
                        <p class='para2'>
                        This province of Rwanda<br /> 
                        has five districts in
                        total.</p>
                    </div>
                </div>
            <div class='boxes'>
                <div class='box3'>
                <img src="img/box.png" alt=" " />
                <h4 class='top2'>Eastern Province</h4> 
                <p class='para2'>
                This province of Rwanda<br /> 
                has seven districts in
                total.</p>
                </div>
                <div class='box4'>
                <img src="img/box.png" alt=" " />
                <h4 class='top2'>Southern Province</h4> 
                <p class='para2'>
                This province of Rwanda<br /> 
                has eight districts in
                total.</p>
                </div>
                <div class='box5'>
                <img src="img/box.png" alt=" " />
                <h4 class='top2'>Western Province</h4>
                <p class='para2'> 
                This province of Rwanda<br /> 
                has seven districts in
                total.</p>
                </div>
            </div>
        </div>
    </main>
   <?php
        include_once 'footer.php';
        ?>
</body>
</html>