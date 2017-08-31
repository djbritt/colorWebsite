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
        <img id="big" src="img/big/2.png">
        <?php include 'player.php'?>
        <div id="input">Comment: <input id="type" type="text"> <button id="click">Submit</button><br><div id="comments"></div></div>
        
        <p id="clickMe" style="color: red;">Click</p>
        <div id="bio">
            <p id="artist">Amanda Ghost</p>
            <p id="about">Amanda Ghost (born Amanda Louisa Gosein) is a singer and songwriter from Enfield, North London. After an initial period in which she performed as a solo artist, she formed a band which performed under her name, and of which she was the lead singer. From February 2009 until December 2010, Ghost was also president of Epic Records, however she left the role to resume her career as a songwriter and music producer and was replaced by L.A. Reid.</p>
        </div>
        <p id="clickMe1" style="color: red;">Click</p>
        <div id="lyrics">
            <p id="name">Silver Lining</p>
            <p id="text">Drawn to the violence of change<br>Charmed by the sentimental brave<br>I hear the door slam<br>I look the other way<br>I hate the small talk and the empty days<br>Chorus<br>Silver lining<br>I bathe in your light<br>I'll always believe in your place in my life<br>Silver lining<br>I know that I'm right<br>I'll always believe in your right to shine<br>Scared of the things that people say<br>Knowing my confidence might fail<br>I feel the worlds weight upon my breaking back<br>I see uncertainty and the visible cracks<br>Repeat chorus</p>
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
            "name": "Silver Lining",
            "artist": "Amanda Ghost",
            // "album": ,
            "url": "mp3/2 Silver Lining.mp3",
            "live": false,
            "cover_art_url": "https://img.discogs.com/TAIqm9G4ay2sFcVFYNw2rvmDyIM=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-2016892-1332008009.jpeg.jpg"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
