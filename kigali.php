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
    <link rel="stylesheet" href="css/all.css">

    <!-- Jquery codes -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        var district = ["NYARUGENGE","GASABO","KICUKIRO"];
        var tempdistrict = [];
        var selectedWord = "";

        $(document).ready(function(){
            gameSetup();
            $(".individual").click(function(){
                $(this).addClass("clicked");
                selectedWord += $(this).html();
                console.log(selectedWord);

                if(district.indexOf(selectedWord) >= 0)
                {
                    $(".clicked").addClass("correct");
                    $("#districts p").each(function(key, item){
                        if(selectedWord == $(item).html())
                        {
                            $(this).addClass("done");
                        }
                    });
                    selectedWord = "";
                    $(".individual").removeClass("clicked");
                } 
                if($(".done").length == district.length)
                {
                    $("body").load("congs.php");
                }

            });
            
            $(".clear").click(function(){
                selectedWord = ""; 
                $(".individual").removeClass("clicked");
            });
        });

        function gameSetup(){
            $.each(district, function(key, item){
                $("#districts").append("<p>" + item + "</p>");

            });
            for(var i =1; i <=13; i++)
            {
                for(var j =1; j <=13; j++)
                {
                    $(".letters").append("<div class=individual data-row=" + i + " data-column=" + j+ "></div>");
                }
            }

            placeLetters(district);
            placeLetters(tempdistrict);
            $.each($(".individual"), function(key, item){
                if($(item).attr("data-word") == undefined)
                {
                    $(this).html(randomLetter());
                }
            })
        }
        // A function to return a random alphabet
        function randomLetter()
        {
            var alphabets = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            return alphabets.charAt(Math.floor(Math.random()*26));
        }

        function checkOccupancy(district, starting, orientation)
        {
            var status = ""; var incrementBy = 0;
            if(orientation == "row")
            {
                incrementBy = 1;
            }
            else if(orientation == "column")
            {
                incrementBy = 13;
            }
            else if (orientation == "diagonal")
            {
                incrementBy = 14;
            }
            for(var p = starting, i = 0; i < district.length; i++)
            {
                if($(".individual:eq(" + p +")").attr("data-word") == undefined)
                {
                    status = "empty";
                }
                else{
                    status = "occupied";
                    break;
                }
                p += incrementBy;
            }
            return status;
        }
        
        function placeLetters(arr)
        {
             for (var i=0; i<arr.length; i++)
             {
                var positions = ["row", "column", "diagonal"];
                var orientation = positions[Math.floor(Math.random()*positions.length)];
            // alert(orientation);
                var start = Math.floor(Math.random()*$(".individual").length);

            // var actualIndex = start -1;
                var givenRow = $(".individual:eq(" + start + ")").data("row");
                var givenColumn = $(".individual:eq(" + start + ")").data("column");
                // $(".individual:eq(" + start + ")").html("A");
                // console.log(arr[i] + ":" + start + ":" + orientation + ":" + givenRow + ":" + givenColumn);
                var newStart = 0; var nextLetter = 0;
                if(orientation == "row")
                {
                    nextLetter = 1;
                    if((givenColumn*1) + arr[i].length <= 13)
                    {
                        newStart = start;
                        // console.log("Space in row : " + arr[i] +":" + start +":" + givenColumn);
                    }
                    else
                    {
                        var newColumn = 13 - arr[i].length;
                        newStart = $(".individual[data-row=" + givenRow + "][data-column="+ newColumn +"]").index();
                        // console.log("No space in row : " + arr[i] +":" + start +":" + givenColumn + ":" + newStart);

                    }
                }
                else if(orientation == "column")
                {
                    nextLetter = 13;
                    if((givenRow*1) + arr[i].length <= 13) {
                        newStart = start;
                        // console.log("Space in column : " + arr[i] +":" + start +":" + givenRow);
                    }
                    else{
                        var newRow = 13 - arr[i].length;
                        newStart = $(".individual[data-row=" + newRow + "][data-column="+ givenColumn +"]").index();
                        // console.log("No space in column : " + arr[i] +":" + start +":" + givenRow +":"+newRow);

                    }
                }
                
                else if(orientation == "diagonal")
                {
                    nextLetter = 14;
                     if(((givenColumn*1) + arr[i].length <= 13) &&((givenRow*1) + arr[i].length <= 13))
                     {
                        newStart = start;
                     }
                     else if ((givenColumn*1) + arr[i].length > 13)
                     {
                        var newColumn = 13 - arr[i].length;
                        newStart = $(".individual[data-row=" + givenRow + "][data-column="+ newColumn +"]").index();

                     }

                     else if ((givenRow*1) + arr[i].length > 13)
                     {
                        var newRow = 13 - arr[i].length;
                        newStart = $(".individual[data-row=" + newRow + "][data-column="+ givenColumn +"]").index();
                     }

                     else if(((givenColumn*1) + arr[i].length > 13) &&((givenRow*1) + arr[i].length > 13))
                     {
                        var newColumn = 13 - arr[i].length;
                        var newRow = 13 - arr[i].length;
                        newStart = $(".individual[data-row=" + newRow + "][data-column="+ newColumn +"]").index();
                     
                     }

                }

                var characters = arr[i].split("");
                var nextPosition = 0;
                var occupied = checkOccupancy(arr[i], newStart, orientation);

                if(occupied == "empty")
                {
                    $.each(characters, function(key, item){

                        // console.log(item);
                        $(".individual:eq(" + (newStart+nextPosition) + ")").html(item);
                        $(".individual:eq(" + (newStart+nextPosition) + ")").attr("data-word", arr[i]);
                        // $(".individual:eq(" + (newStart+nextPosition) + ")").css("background","#9EB4EF");
                        nextPosition += nextLetter;
                     })
                }
                else
                {
                    tempdistrict.push(arr[i]);
                }
                
             }
            //  console.log(tempdistrict);
            
        }
    </script>
</head>
<body>
    <?php
        include_once 'side_menu.php';
    ?>
    <div class="page_details">
        <h1>Kigali city</h1>
        <hr>
        <p>Identify the 3 districts found here.</p>
    </div>
    <div class="container">
        <div class="letters"></div>
        <div id="districts_section">
            <div id="districts"></div>
            <div class="timing">
                <h1 id="countdown"></h1>
            </div>
            <button class="clear">Clear</button>
        </div>
    </div>
    <script src="js/time.js"></script>
</body>
</html>