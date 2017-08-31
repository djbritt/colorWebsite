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
        <img id="big" src="img/big/11.png">
        <?php include 'player.php'?>
        <div id="input">Comment: <input id="type" type="text"> <button id="click">Submit</button><br><div id="comments"></div></div>
        
        <p id="clickMe" style="color: red;">Click</p>        
        <div id="lyrics">
            <p id="name">Lime Green Fitted Blouse</p>
            <p id="text">My favorite shirt:<br>lime green fitted blouse<br>with rounded collar & puce cuffs<br>only to be worn with<br>capri pants and suede pumps</p>
        </div>
        <p id="clickMe1" style="color: red;">Click</p>
        <div id="bio">
            <p id="artist">Death By Chocolate</p>
            <p id="about">Death By Chocolate is the confectionary pseudonym of one Angie Tillett, purportedly a teenage chambermaid from the kitschy English tourist town of Clacton-on-Sea. Now, Angie clearly has a fondness for sweets, which evoke powerful sensory memories for her — as do colors. Letters too, actually. She recites these memories, non-sequiturially, in the bored voice of a schoolgirl delivering a report before class, while giddy pop keyboard lines burble and eddy around her. In addition, Tillett offers ’60s spy movie instrumentals, quirky bubblegum psycedelia, and novelty covers, including a decidedly twee version of Cat Stevens’s “If You Want to Sing Out, Sing Out,” made famous in the ’60s black comedy Harold and Maude. Her music is as much a pop-cultural study as it is escapist fantasy. </p>
        </div>
    </div>
</body>
<script type="text/javascript">
$("#clickMe1").css("top", "500px")
$("#lyrics").css("top", "530px")
    $("#click").click(function() {
        $("#comments").append("User: " + $("#type").val() + "<br>")
    })
    $("#lyrics").click(function() {
        $("#lyrics").css("top", "580px")
        $("#clickMe1").css("display", "none");
        $("#name").css("display", "none");
        $("#lyrics").css("font-size", "12px").css("overflow-x", "hidden").css("padding-top", "0px").css("font-size", "20px").css("height", "260px");
        $("#text").fadeIn("700")
    })
    $("#artist").click(function() {
        $("#clickMe").css("display", "none");
        $("#artist").css("display", "none");
        $("#bio").css("font-size", "12px").css("overflow-x", "hidden").css("padding-top", "0px").css("font-size", "20px").css("height", "260px");
        $("#about").fadeIn("700")
    })

    $("#player").load('player.html');
    Amplitude.init({
        "songs": [{
            "name": "Lime Green Fitted Blouse",
            "artist": "Death By Chocolate",
            // "album": ,
            "url": "mp3/11 Lime Green Fitted Blouse.mp3",
            "live": false,
            "cover_art_url": "http://img2-ak.lst.fm/i/u/avatar170s/77f62e79db554d8dbe5fdc87359e6bb8"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
