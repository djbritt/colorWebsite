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
        <img id="big" src="img/big/9.png">
        <?php include 'player.php'?>
        <div id="input">Comment: <input id="type" type="text"> <button id="click">Submit</button><br><div id="comments"></div></div>
        
        <p id="clickMe" style="color: red;">Click</p>
        <div id="bio">
            <p id="artist">Chris Issac</p>
            <p id="about">Christopher Joseph "Chris" Isaak (born June 26, 1956) is an American rock musician and occasional actor. Isaak signed a contract to Warner Bros. Records in 1984 for his first album, Silvertone. One track from the album "Dancin" was Isaak's first music video featured on MTV and two tracks from this album, "Gone Ridin'" and "Livin' for Your Lover", were featured in David Lynch's cult classic Blue Velvet. Isaak's second self-titled album, Chris Isaak, was photographed by fashion photographer Bruce Weber. Isaak's contract was renewed in 1988 when Warner Bros. moved him to their Reprise Records label. Suspicion of Love appears in the 1988 hit movie Married to the Mob starring Matthew Modine, Michele Pfeifer and Dean Stockwell. </p>
        </div>
        <p id="clickMe1" style="color: red;">Click</p>
        <div id="lyrics">
            <p id="name">Blue Moon</p>
            <p id="text">Blue moon,<br>You saw me standing alone,<br>Without a dream in my heart,<br>Without a love of my own.<br>Blue moon,<br>You knew just what I was there for.<br>You heard me saying a pray for<br>Someone I really could care for.<br>Blue moon,<br>You saw me standing alone,<br>Without a dream in my heart,<br>Without a love of my own.<br>Blue moon...<br>Without a love of my own.</p>
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
            "name": "Blue Moon",
            "artist": "Chris Issac",
            // "album": ,
            "url": "mp3/9 Blue Moon.mp3",
            "live": false,
            "cover_art_url": "http://img.photobucket.com/albums/v280/drjohncarpenter/ISAAKSilvertone1985.jpg"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
