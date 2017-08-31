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
        <img id="big" src="img/big/6.png">
        <?php include 'player.php'?>
        <div id="input">Comment: <input id="type" type="text"> <button id="click">Submit</button><br><div id="comments"></div></div>
        
        <p id="clickMe" style="color: red;">Click</p>
        <div id="bio">
            <p id="artist">Savage Garden</p>
            <p id="about">Savage Garden was an Australian pop duo consisting of Darren Hayes as vocalist and Daniel Jones as instrumentalist. Formed in Logan City, Queensland in 1994, the duo achieved international success in the late 1990s and early 2000s with the number-one hit singles "I Want You", "To the Moon and Back", "Truly Madly Deeply", "The Animal Song" and "I Knew I Loved You". Their two studio albums, Savage Garden and Affirmation reached number one in Australia and peaked in the top ten in both the United Kingdom and United States. The group won a record number of ten ARIA Music Awards in 1997 for their debut album and its related singles. They disbanded in 2001 and Hayes continued as a solo artist.</p>
        </div>
        <p id="clickMe1" style="color: red;">Click</p>
        <div id="lyrics">
            <p id="name">Violet</p>
            <p id="text">If there's a way that you could<br>be everything you want to be,<br>Would you complain that it came too easy?<br>Just like the games with you and me<br>A resolution hard to see,<br>But that's O.K. 'cause I don't<br>see things that are plain to see<br>I've got a dream to take you over<br>Exploding like a supernova<br>I'm gonna crash into your world<br>And that's no lie<br>You want to give ecstacy delivered<br>with certainty<br>But you're afraid that the pleasure<br>won't be needed<br>In a way, we're the same two people<br>looking out to sea<br>For a wave that would carry all our<br>fantasies<br>If there's a way to infiltrate you<br>Sway your mind and complicate you<br>I'm gonna crash into your world<br>And that's no lie<br>Let your body move into the doorway<br>To the disco inside your head (Violet)<br>Wear a color that you want to cling to<br>The color inside your head (Violet)<br>Contemplate jealously intermixed<br>with urgency<br>A million things take a damned<br>good shot at you and me<br>If there's a way to infiltrate you<br>Sway your mind and complicate you<br>I'm gonna crash into your world<br>And that's no lie<br>Let your body move into the doorway<br>To the disco inside your head (Violet)<br>Wear a color that you want to cling to<br>The color inside your head (Violet)<br>Dance to the disco, Dance to the disco<br>Dance to the disco, Dance to the disco<br>I'm gonna take you<br>I'll do my best to break you<br>I'm gonna take you higher<br>And that's no lie<br>Common sense is a game many<br>people don't like to play<br>But give it in and the moment takes<br>you either way<br>I've got a dream to take you over<br>Exploding like a supernova<br>I'm gonna crash into your world<br>And that's no lie<br>Let your body move into the doorway<br>To the disco inside your head (Violet)<br>Wear a color that you want to cling to<br>The color inside your head (Violet)<br>If there's a way that you could<br>be everything you want to be,<br>Would you complain that it came too easy?<br>In a way, we're the same two people<br>looking out to sea<br>For a wave that would carry all our<br>Fantasies</p>
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
            "name": "Violet",
            "artist": "Savage Garden",
            // "album": ,
            "url": "mp3/6 Violet.mp3",
            "live": false,
            "cover_art_url": "http://images.genius.com/e261435aaee2c6d9575402abe30aa4a3.640x640x1.jpg"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
