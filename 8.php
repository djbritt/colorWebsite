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
        <img id="big" src="img/big/8.png">
        <?php include 'player.php'?>
        <div id="input">Comment: <input id="type" type="text"> <button id="click">Submit</button><br><div id="comments"></div></div>
        
        <p id="clickMe" style="color: red;">Click</p>
        <div id="bio">
            <p id="artist">Indigo Swing</p>
            <p id="about">The retro-swing unit Indigo Swing were formed in San Francisco around the sextet of vocalist Johnny Boyd, guitarist Josh Workman, bassist Vance Ehlers, drummer ”Big Jim” Overton, pianist William Beatty and saxophone player Baron Shul. After kick-starting northern California’s new school of swing, the group began touring around America and signed to Time Bomb Recordings in 1997. The group’s debut All Aboard! was released in July 1998. They followed with Red Light in 1999. </p>
        </div>
        <p id="clickMe1" style="color: red;">Click</p>
        <div id="lyrics">
            <p id="name">The Indigo Swing</p>
            <p id="text">If you feel like dancing<br>and some big shot romancing<br>well, now's the time<br>If you feel like grooving<br>and you can't keep from moving<br>well, now's the time<br>Check your hat at the door<br>and move out to the floor<br>cuz you know what to do<br>and the drums are calling you<br>Take your girl by the hand<br>and go out to the band<br>you can hear the boys sing<br>the Indigo Swing<br>If you feel it catch you<br>and you see her looking at you<br>well, now's the time<br>Check your hat at the door<br>and move out to the floor<br>cuz you know what to do<br>and the drums are calling you<br>Take your girl by the hand<br>and go out to the band<br>you can hear the boys sing<br>the Indigo Swing<br>If you feel it catch you<br>and you see her looking at you<br>well, now's the time</p>
        </div>
    </div>
</body>
<script type="text/javascript">
$("#clickMe1").css("top", "500px")
$("#lyrics").css("top", "540px")
$("#volume").css("margin-left", "68px", "important")
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
        $("#lyrics").css("top", "580px")
        $("#clickMe1").css("display", "none");
        $("#name").css("display", "none");
        $("#lyrics").css("font-size", "12px").css("overflow-x", "hidden").css("padding-top", "0px").css("font-size", "20px").css("height", "260px");
        $("#text").fadeIn("700")
    })

    $("#player").load('player.html');
    Amplitude.init({
        "songs": [{
            "name": "The Indigo Swing",
            "artist": "Indigo Swing",
            // "album": ,
            "url": "mp3/8 The Indigo Swing.mp3",
            "live": false,
            "cover_art_url": "http://www.vinylvendors.com/Pictures/i/n/indigoswing243858.jpg"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
