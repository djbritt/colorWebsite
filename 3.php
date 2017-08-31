<!DOCTYPE html>
<html>

<head>
    <title>351 - Color Music</title>
    <script type="text/javascript" src="js/amplitude.js"></script>
    <!-- jQuery only used to help with animations and NON Amplitude elements -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <style>
    /* #scroll {*/
    /*	height:95%;*/
    /*	position:absolute;*/
    /*    overflow-y:scroll;*/
    /*	overflow-x:hidden;*/
    /*}*/
    </style>
</head>

<body>
    <div id="scroll">
        <a href="index.php" class="button pos">Home</a>
        <img id="big" src="img/big/3.png">
        <?php include 'player.php'?>
        <div id="input">Comment: <input id="type" type="text"> <button id="click">Submit</button><br><div id="comments"></div></div>
        
        <p id="clickMe" style="color: red;">Click</p>
        <div id="bio">
            <p id="artist">The Monkees</p>
            <p id="about">The Monkees are an American pop/rock band that released music in their original incarnation between 1966 and 1970, with subsequent reunion albums and tours in the decades that followed. Formed in Los Angeles in 1965 by Robert "Bob" Rafelson and Bert Schneider for the American television series The Monkees, which aired from 1966 to 1968, the musical acting quartet was composed of Americans Micky Dolenz, Michael Nesmith, and Peter Tork, and Englishman Davy Jones. The band's music was initially supervised by producer Don Kirshner.</p>
        </div>
        <p id="clickMe1" style="color: red;">Click</p>
        <div id="lyrics">
            <p id="name">Shades of Grey</p>
            <p id="text">When the world and I were young,<br>Just yesterday.<br>Live was such a simple game,<br>A child could play.<br>It was easy then to tell right from wrong.<br>Easy then to tell weak from strong.<br>When a man should stand and fight,<br>Or just go along.<br>But today there is no day or night<br>Today there is no dark or light.<br>Today there is no black or white,<br>Only shades of gray.<br>I remember when the answers seemed so clear<br>We had never lived with doubt or tasted fear.<br>It was easy then to tell truth from lies<br>Selling out from compromise<br>Who to love and who to hate,<br>The foolish from the wise.<br>But today there is no day or night<br>Today there is no dark or light.<br>Today there is no black or white,<br>Only shades of gray.<br>[Instumental interlude]<br>It was easy then to know what was fair<br>When to keep and when to share.<br>How much to protect your heart<br>And how much to care.<br>But today there is no day or night<br>Today there is no dark or light.<br>Today there is no black or white,<br>Only shades of gray.<br>Only shades of gray.</p>
        </div>
    </div>
</body>
<script type="text/javascript">
$("#volume").css("margin-left", "84px", "important")
    $("#click").click(function() {
        $("#comments").append("User: " + $("#type").val() + "<br>")
    })
    $("#artist").click(function() {
        $("#clickMe").css("display", "none");
        $("#artist").css("display", "none");
        $("#bio").css("font-size", "12px").css("overflow-x", "hidden").css("padding-top", "0px").css("font-size", "20px").css("height", "260px");
        $("#about").fadeIn("700")
    })
    
    $("#lyrics").click(function() {
        $("#clickMe1").css("display", "none");
        $("#name").css("display", "none");
        $("#lyrics").css("font-size", "12px").css("overflow-x", "hidden").css("padding-top", "0px").css("font-size", "20px").css("height", "260px");
        $("#text").fadeIn("700")
    })

    $("#player").load('player.html');
    Amplitude.init({
        "songs": [{
            "name": "Shades of Gray",
            "artist": "The Monkees",
            // "album": ,
            "url": "mp3/3 Shades of Gray.mp3",
            "live": false,
            "cover_art_url": "https://i.ytimg.com/vi/-UHWBrODYIo/hqdefault.jpg"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
