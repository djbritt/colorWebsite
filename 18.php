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
        <img id="big" src="img/big/18.png">
        <?php include 'player.php'?>
        <div id="input">Comment: <input id="type" type="text"> <button id="click">Submit</button><br><div id="comments"></div></div>
        <p id="clickMe1" style="color: red;">Click</p>
        <div id="lyrics">
            <p id="name">White Wedding</p>
            <p id="text">Hey little sister what have you done<br>Hey little sister who's the only one<br>Hey little sister who's your superman<br>Hey little sister who's the one you want<br>Hey little sister shotgun<br> It's a nice day to start again<br>It's a nice day for a white wedding<br>It's a nice day to start again<br> Hey little sister who is it you're with<br>Hey little sister what's your welsse wish<br>Hey little sister shotgun oh yeah<br>Hey little sister who's your superman<br>Hey little sister shotgun<br> It's a nice day to start again<br>It's a nice day for a white wedding<br>It's a nice day to start again<br> Pick it up<br>Take me back home yeah<br> Hey little sister what have you done<br>Hey little sister who's the only one (only one)<br>I've been away for so long (so long)<br>I've been away for so long (so long)<br>I let you go for so long<br> It's a nice day to start again<br>Come on it's a nice day for a white wedding<br>It's a nice day to start again, wow<br> There is nothing fair in this world<br>There is nothing safe in this world<br>And there's nothing sure in this world<br>And there's nothing pure in this world<br>Look for something left in this world<br>Start again come one<br> It's a nice day for a white wedding<br>Wow, it's a nice day to start again<br>It's a nice day to start again</p>
        </div>
        <p id="clickMe" style="color: red;">Click</p>
        <div id="bio">
            <p id="artist">Billy Joel</p>
            <p id="about">Singer Billy Idol was born on November 30, 1955, in England. He joined the punk band Chelsea in 1976, and delivered his first hit single, "Dancing with Myself", with Generation X in 1980. Idol's success continued into the following decade, his popularity bolstered by singles such as "White Wedding," Eyes Without a Face," and "Cradle of Love."</p>
        </div>
    </div>
</body>
<script type="text/javascript">
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
            "name": "White Wedding",
            "artist": "Billy Idol",
            // "album": ,
            "url": "mp3/18 White Wedding.mp3",
            "live": false,
            "cover_art_url": "https://www.indieshuffle.com/bundles/webbundle/images/artwork/original/billy_idol__white_wedding.jpeg"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
