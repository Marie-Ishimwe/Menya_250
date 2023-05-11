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
    <link rel="stylesheet" href="css/congs.css">
    <!-- <link rel="stylesheet" href="css/rules.css"> -->

    <!-- Jquery codes -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <!-- <---- won pop-up --->
    <div class="popup" id="failed">
      <div class="popup-content">
        <div class="imgbox">
          <img src="img/failed.svg" alt="Congratulations" class="img">
        </div>
        <div class="title" id="time-out">
          <h3>You failed:(</h3>
        </div>
        <p class="para">You could find all districts in time</p>
        <a href="dashboard.php" class ="reco-visit" id="try-again">Try again</a>
      </div>
    <script src="js/timer.js"></script>
</body>
</html>