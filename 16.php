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
        <img id="big" src="img/big/16.png">
        <?php include 'player.php'?>
        <div id="input">Comment: <input id="type" type="text"> <button id="click">Submit</button><br><div id="comments"></div></div>
        
        <p id="clickMe1" style="color: red;">Click</p>
        <div id="lyrics">
            <p id="name">99 Red Balloons</p>
            <p id="text">You and I in a little toy shop<br>buy a bag of balloons with the money we've got<br>Set them free at the break of dawn<br>'Til one by one, they were gone<br>Back at base, bugs in the software<br>Flash the message, "Something's out there"<br>Floating in the summer sky<br>99 red balloons go by.<br>99 red balloons floating in the summer sky<br>Panic bells, it's red alert<br>There's something here from somewhere else<br>The war machine, it springs to life<br>Opens up one eager eye<br>Focusing it on the sky<br>As 99 red balloons go by.<br>99 Decision Street, 99 ministers meet<br>To worry, worry, super-scurry<br>Call out the troops now in a hurry<br>This is what we've waited for<br>This is it boys, this is war<br>The president is on the line<br>As 99 red balloons go by.<br>99 Kriegsminister<br>Streichholz und Benzinkanister<br>Hielten sich fuer schlaue Leute<br>Witterten schon fette Beute<br>Riefen: Krieg und wollten Macht<br>Mann, wer haette das gedacht<br>Dass es einmal soweit kommt<br>Wegen 99 Luftballons<br>99 dreams I have had<br>In every one a red balloon<br>It's all over and I'm standin' pretty<br>In the dust that was a city<br>If I could find a souvenier<br>Just to prove the world was here...<br>And here it is, a red balloon<br>I think of you and let it go.</p>
        </div>
        <p id="clickMe" style="color: red;">Click</p>
        <div id="bio">
            <p id="artist">Nena</p>
            <p id="about">The Nena band was formed in 1982 when vocalist Gabriele Kerner came to Berlin with drummer Rolf Brendel her boyfriend at the time. There they assembled the other members of the band, which took its name from their lead singer’s nickname (a corruption of the Spanish for “little girl”) , which she had acquired as a toddler during a family holiday to Spain.</p>
        </div>
    </div>
</body>
<script type="text/javascript">
$("#clickMe1").css("color", "white")
$("#clickMe").css("color", "white")
$("#bio").css("left", "880px")
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
            "name": "99 Red Balloons",
            "artist": "Nena",
            // "album": ,
            "url": "mp3/16 99 Red Balloons.mp3",
            "live": false,
            "cover_art_url": "https://upload.wikimedia.org/wikipedia/en/4/40/99_Luftballons_single_cover.jpg"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
