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
        <img id="big" src="img/big/14.png">
        <?php include 'player.php'?>
        <div id="input">Comment: <input id="type" type="text"> <button id="click">Submit</button><br><div id="comments"></div></div>
        
        <p id="clickMe1" style="color: red;">Click</p>
        <div id="lyrics">
            <p id="name">Orange Crush</p>
            <p id="text">Follow me, don't follow me<br>I've got my spine, I've got my orange crush<br>Collar me, don't collar me<br>I've got my spine, I've got my orange crush<br>We are agents of the free<br>I've had my fun and now its time to<br>Serve your conscience overseas (over me, not over me)<br>Coming in fast, over me<br>[repeat verse]<br>High on the roof,<br>Thin the blood,<br>Another one on the waves tonight,<br>Comin' in, you're home<br>We'd circle and we'd circle and we'd circle to stop and consider and<br>Centered on the pavement stacked up all the trucks jacked up and<br>Our wheels in slush and orange crush in pocket and all this here county<br>Hell any county it's just like heaven here and I was remembering and I<br>Was just in a different county and all then this whirlybird that I<br>Headed for I had my goggles pulled off I knew it all I knew every back<br>Road and every truck stop</p>
        </div>
        <p id="clickMe" style="color: red;">Click</p>
        <div id="bio">
            <p id="artist">REM</p>
            <p id="about">R.E.M. was an American rock band from Athens, Georgia, formed in 1980 by singer Michael Stipe, guitarist Peter Buck, bassist Mike Mills, and drummer Bill Berry. One of the first popular alternative rock bands, R.E.M. gained early attention because of Buck's ringing, arpeggiated guitar style. R.E.M. released its first single, "Radio Free Europe", in 1981 on the independent record label Hib-Tone. The single was followed by the Chronic Town EP in 1982, the band's first release on I.R.S. Records. In 1983, the group released its critically acclaimed debut album, Murmur, and built its reputation over the next few years through subsequent releases, constant touring, and the support of college radio. Following years of underground success, R.E.M. achieved a mainstream hit in 1987 with the single "The One I Love". The group signed to Warner Bros. Records in 1988, and began to espouse political and environmental concerns while playing large arenas worldwide. </p>
        </div>
    </div>
</body>
<script type="text/javascript">
$("#bio").css("left", "880px")
$("#clickMe").css("top", "440px")
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
        $("#bio").css("left", "830px");
        $("#clickMe").css("display", "none");
        $("#artist").css("display", "none");
        $("#bio").css("font-size", "12px").css("overflow-x", "hidden").css("padding-top", "0px").css("font-size", "20px").css("height", "260px");
        $("#about").fadeIn("700")
    })

    $("#player").load('player.html');
    Amplitude.init({
        "songs": [{
            "name": "Orange Crush",
            "artist": "REM",
            // "album": ,
            "url": "mp3/14 Orange Crush.mp3",
            "live": false,
            "cover_art_url": "https://images.991.com/large_image/REM+Orange+Crush-59916.jpg"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
