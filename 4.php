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
        <img id="big" src="img/big/4.png">
        <?php include 'player.php'?>
        <div id="input">Comment: <input id="type" type="text"> <button id="click">Submit</button><br><div id="comments"></div></div>
        
        <p id="clickMe" style="color: red;">Click</p>
        <div id="bio">
            <p id="artist" style="color: white;">Ella Fitzergald</p>
            <p id="about" style="color: white;">Ella Jane Fitzgerald (April 25, 1917 – June 15, 1996) was an American jazz vocalist with a vocal range spanning three octaves (D♭3 to D♭6). Often referred to as the "First Lady of Song," the "Queen of Jazz" and "Lady Ella," she was noted for her purity of tone, impeccable diction, phrasing and intonation, and a "horn-like" improvisational ability, particularly in her scat singing.</p>
        </div>
        <p id="clickMe1" style="color: red;">Click</p>
        <div id="lyrics" style="color: white;">
            <p id="name" style="color: white;">Black Coffee</p>
            <p id="text">I'm feeling mighty lonesome<br>Haven't slept a wink<br>I walk the floor and watch the door<br>And in between I drink<br>Black Coffee<br>Love's a hand me down brew<br>I'll never know a Sunday<br>In this weekday room<br>I'm talking to the shadows<br>1 o'clock to 4<br>And Lord, how slow the moments go<br>When all I do is pour<br>Black Coffee<br>Since the blues caught my eye<br>I'm hanging out on Monday<br>My Sunday dream's too dry<br>Now a man is born to go a lovin'<br>A woman's born to weep and fret<br>To stay at home and tend her oven<br>And drown her past regrets<br>In coffee and cigarettes<br>I'm moody all the morning<br>Mourning all the night<br>And in between it's nicotine<br>And not much hard to fight<br>Black Coffee<br>Feelin' low as the ground<br>It's driving me crazy just waiting for my baby<br>To maybe come around<br>My nerves have gone to pieces<br>My hair is turning gray<br>All I do is drink black coffee<br>Since my man's gone away</p>
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
            "name": "Black Coffee",
            "artist": "Ella Fitzergald",
            // "album": ,
            "url": "mp3/4 Black Coffee.mp3",
            "live": false,
            "cover_art_url": "http://darkmp3.ru/imgs/8369354-460x460/black-coffee.jpg"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
