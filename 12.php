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
        <img id="big" src="img/big/12.png">
        <?php include 'player.php'?>
        <div id="input">Comment: <input id="type" type="text"> <button id="click">Submit</button><br><div id="comments"></div></div>
        
        <p id="clickMe1" style="color: red;">Click</p>
        <div id="lyrics">
            <p id="name">Mellow Yellow</p>
            <p id="text">I'm just mad about Saffron.<br>A-Saffron's mad about me.<br>I'm-a just mad about Saffron.<br>She's just mad about me.<br>They call me Mellow Yellow, Quite rightly.<br>They call me Mellow Yellow, Quite rightly.<br>They call me Mellow Yellow.<br>I'm just mad about Fourteen.<br>Fourteen's mad about me.<br>I'm-a just mad about-a Fourteen.<br>She's just mad about me.<br>They call me Mellow Yellow.<br>They call me Mellow Yellow,<br>Quite rightly.<br>They call me Mellow Yellow.<br>Born-a high forever to fly.<br>Wind-a velocity nil.<br>Born-a high forever to fly.<br>If you want your cup, I will fill.<br>They call me Mellow Yellow, Quite rightly.<br>They call me Mellow Yellow, Quite rightly.<br>They call me Mellow Yellow.<br>So mellow yellow..<br>Electrical banana<br>Is gonna be a sudden craze.<br>Electrical banana<br>Is bound to be the very next phase.<br>They call it Mellow Yellow, Quite rightly.<br>They call me Mellow Yellow,Quite rightly.<br>They call me Mellow Yellow.<br>Saffron, yeah.<br>I'm just-a mad about her.<br>I'm-a just-a mad about-a Saffron.<br>She's just mad about me.<br>They call me Mellow Yellow, Quite rightly.<br>They call me Mellow Yellow, Quite rightly.<br>They call me Mellow Yellow.<br>Oh, so yellow..<br>Oh, so mellow..</p>
        </div>
        <p id="clickMe" style="color: red;">Click</p>
        <div id="bio">
            <p id="artist">Donovan</p>
            <p id="about">Donovan (born Donovan Philips Leitch, 10 May 1946) is a Scottish singer, songwriter and guitarist. He developed an eclectic and distinctive style that blended folk, jazz, pop, psychedelia, and world music (notably calypso). He has lived in Scotland, London and California, and, since at least 2008, in County Cork, Ireland, with his family. Emerging from the British folk scene, Donovan reached fame in the United Kingdom in early 1965 with live performances on the pop TV series, Ready Steady Go!. </p>
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
            "name": "Mellow Yellow",
            "artist": "Donovan",
            // "album": ,
            "url": "mp3/12 Mellow Yellow.mp3",
            "live": false,
            "cover_art_url": "https://timeentertainment.files.wordpress.com/2011/07/05_top10songssongswithsillylyrics.jpg?w=350&h=350&crop=1"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
