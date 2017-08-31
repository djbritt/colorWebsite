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
        <img id="big" src="img/big/7.png">
        <?php include 'player.php'?>
        <div id="input">Comment: <input id="type" type="text"> <button id="click">Submit</button><br><div id="comments"></div></div>
        
        <p id="clickMe" style="color: red;">Click</p>
        <div id="bio">
            <p id="artist">Los Lobos</p>
            <p id="about">Los Lobos were already East L.A. neighborhood legends, Sunset Strip regulars and a Grammy Award winning band (Best Mexican-American/Tejano Music Performance) by the time they recorded their major label debut How Will The Wolf Survive? in 1984. Although the album’s name and title song were inspired by a National Geographic article about real life wolves in the wild, the band—David Hidalgo, Louie Perez, Cesar Rosas, Conrad Lozano and Steve Berlin—saw parallels with their struggle to gain mainstream rock success while maintaining their Mexican roots. Perez, the band’s drummer, once called their powerhouse mix of rock, Tex-Mex, country, folk, R&B, blues and traditional Spanish and Mexican music “the soundtrack of the barrio.” Three decades, two more Grammys, a worldwide smash single (“La Bamba”) and thousands of rollicking performances across the globe later, Los Lobos is surviving quite well -- and still jamming with the same raw intensity as they had when they began in that garage in 1973.</p>
        </div>
        <p id="clickMe1" style="color: red;">Click</p>
        <div id="lyrics">
            <p id="name">Kiko and the Lavender Moon</p>
            <p id="text">Kiko and the lavender moon<br>Out playing - makes believe<br>Nobody can see<br>And then he waits<br>And then he fakes<br>And then he bends<br>And then he shakes<br>He plays and plays<br>Still playing till he<br>Goes off to sleep<br>Kiko and the lavender moon<br>Out dancing making faces at<br>A big black cat<br>And then he flies<br>Up to the wall<br>Stands on one foot<br>Doesn’t even fall<br>Dance and dance<br>Still dancing till<br>He goes off to sleep<br>He always sleeps<br>Till the sun goes down<br>He never wakes<br>Till no one’s around<br>He never stops<br>Can’t catch his breath<br>It’s always there<br>Scares him to death<br>Kiko and the lavender moon<br>Out dreaming ‘bout green shoes<br>Haircuts and cake<br>And then he wishes<br>The world away<br>And then he kneels<br>As if to pray<br>He dreams and dreams<br>Kiko and the lavender moon</p>
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
            "name": "Kiko and the Lavender Moon",
            "artist": "Los Lobos",
            // "album": ,
            "url": "mp3/7 Kiko.mp3",
            "live": false,
            "cover_art_url": "https://i5.walmartimages.com/asr/0cbe3c54-6a1c-4646-a8a2-1948f9264149_1.b857952c0134d3232aff71e7aa63fa59.jpeg?odnHeight=450&odnWidth=450&odnBg=FFFFFF"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
