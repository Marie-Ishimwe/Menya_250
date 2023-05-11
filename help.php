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
    <link rel="stylesheet" href="css/help.css">
    <!-- <link rel="stylesheet" href="css/helping.css"> -->
    <link rel="stylesheet" href="css/footer.css">
    
</head>
<body>
    <?php
        include_once 'nav.php';
    ?>
    <div class="landingContainer">
        <div class="welcoming">
        <div class="help-text">
                <p> Hi Username, how can we help?</p>
            </div>
            <div class="search">
                <form action="" class="search-bar">
                    <input type="text" placeholder ="Search here" >
                    <!-- <i class='bx bxs-search'></i> -->
                </form>
            </div>
         
        </div>

        <div class="faqs">

            <div class="question-section">
            <h2>FAQs</h2>
                <div class="quest">
                    <i class='bx bxs-right-arrow' ></i>
                    <h5>How do you play the game?</h5>
                </div>
                <div class="answer">
                    <p>Start by choosing a province or city you want to play in, then proceed to the game grid.
                    </p>
                </div>

<!-- Question 2 -->
                <div class="quest">
                    <i class='bx bxs-right-arrow' ></i>
                    <h5>How do you register for an account?</h5>
                </div>
                <div class="answer">
                    <p>To register for an account for our platformyou will need to provide your email and password.</p>
                </div>

                <div class="quest">
                    <i class='bx bxs-right-arrow' ></i>
                    <h5>How long does a game session?</h5>
                </div>
                <div class="answer">
                    <p>One game session lasts for three minutes, if you would like to continue playing please restart the game
                    </p>
                </div>

                <div class="quest">
                    <i class='bx bxs-right-arrow' ></i>
                    <h5>How does one get in touch with you?</h5>
                </div>
                <div class="answer">
                    <p>To get in touch with us for personal questions 
                       or any other kind of assistance, please refer to 
                       our home page where you can find our contacts
                       on the footer

                    </p>
                </div>
            </div>
            <div class="concerns">
                <input class="email-concern" type="email"placeholder="Type your email" />
                <input class="concern-text" placeholder="What is your concern" />
                <button>Submit</button>
        </div>
        </div>
    </div>
    <?php
        include_once 'footer.php';
        ?>
</body>
</html>