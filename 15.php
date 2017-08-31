<!DOCTYPE html>
<html>

<head>
    <title>351 - Color Music</title>
    <script type="text/javascript" src="js/amplitude.js"></script>
    <!-- jQuery only used to help with animations and NON Amplitude elements -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
    <div id="scroll">
        <a href="index.php" class="button pos">Home</a>
        <img id="big" src="img/big/15.png">
        <?php include 'player.php'?>
        <div id="input">Comment: <input id="type" type="text"> <button id="click">Submit</button><br><div id="comments"></div></div>
        
        <p id="clickMe1" style="color: red;">Click</p>
        <div id="lyrics">
            <p id="name">After The Goldrush</p>
            <p id="text">Well, I dreamed I saw the knights<br>In armor coming,<br>Saying something about a queen.<br>There were peasants singing and<br>Drummers drumming<br>And the archer split the tree.<br>There was a fanfare blowing<br>To the sun<br>That was floating on the breeze.<br>Look at Mother Nature on the run<br>In the nineteen seventies.<br>Look at Mother Nature on the run<br>In the nineteen seventies.<br>I was lying in a burned out basement<br>With the full moon in my eyes.<br>I was hoping for replacement<br>When the sun burst thru the sky.<br>There was a band playing in my head<br>And I felt like getting high.<br>I was thinking about what a<br>Friend had said<br>I was hoping it was a lie.<br>Thinking about what a<br>Friend had said<br>I was hoping it was a lie.<br>Well, I dreamed I saw the silver<br>Space ships flying<br>In the yellow haze of the sun,<br>There were children crying<br>And colors flying<br>All around the chosen ones.<br>All in a dream, all in a dream<br>The loading had begun.<br>They were flying Mother Nature's<br>Silver seed to a new home in the sun.<br>Flying Mother Nature's<br>Silver seed to a new home.</p>
        </div>
        <p id="clickMe" style="color: red;">Click</p>
        <div id="bio">
            <p id="artist">Emmylou Harris & Others</p>
            <p id="about">Emmylou Harris (born April 2, 1947) is an American singer and songwriter. She has released many popular albums and singles over the course of her career, and has now won 13 Grammys - as of 2014 - as well as numerous other awards. Her work and recordings include work as a solo artist, bandleader, an interpreter of other composers' works and as a singer-songwriter, and a backing vocalist and duet partner. She has worked with numerous leading artists including Gram Parsons, John Denver, Linda Ronstadt, Dolly Parton, Roy Orbison, The Band, Mark Knopfler, Delbert McClinton, The Milk Carton Kids, Guy Clark, Willie Nelson, Bob Dylan, Bright Eyes, Rodney Crowell, John Prine, Neil Young, Nick Cave and Steve Earle. </p>
        </div>
    </div>
</body>
<script type="text/javascript">
    $("#click").click(function() {
        $("#comments").append("User: " + $("#type").val() + "<br>")
    })
    $("#lyrics").click(function() {
        $("#clickMe1").css("display", "none");
        $("#name").css("display", "none");
        $("#lyrics").css("font-size", "12px").css("overflow-x", "hidden").css("padding-top", "0px").css("font-size", "20px").css("height", "260px");
        $("#text").fadeIn("700")
    })
    $("#bio").click(function() {
        $("#clickMe").css("display", "none");
        $("#artist").css("display", "none");
        $("#bio").css("font-size", "12px").css("overflow-x", "hidden").css("padding-top", "0px").css("font-size", "20px").css("height", "260px");
        $("#about").fadeIn("700")
    })

    $("#player").load('player.html');
    Amplitude.init({
        "songs": [{
            "name": "After The Goldrush",
            "artist": "Emmylou Harris & Others",
            // "album": ,
            "url": "mp3/15 Goldrush.mp3",
            "live": false,
            "cover_art_url": "http://www.popspotsnyc.com/afterthegoldrush/neil_young_big.jpg"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
