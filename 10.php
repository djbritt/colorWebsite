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
        <img id="big" src="img/big/10.png">
        <?php include 'player.php'?>
        <div id="input">Comment: <input id="type" type="text"> <button id="click">Submit</button><br><div id="comments"></div></div>
        
        <p id="clickMe1" style="color: red;">Click</p>
        <div id="lyrics">
            <p id="name">John Deere Green</p>
            <p id="text">They were farm kids way down in Dixie<br>They met in high school in the sixties<br>Everyone knew it was love from the start<br>One July in the midnight hour<br>He climbed upon the water tower<br>Stood on the rail and painted a ten foot heart<br>CHORUS<br>In John Deere Green<br>On a hot summer night<br>He wrote Billy Bob loves Charlene<br>In letters three foot high<br>And the whole town said<br>That he should have used red<br>But it looked good to Charlene<br>In John Deere green<br>They settled down on eighty acres<br>Raising sweet corn, kids and tomatoes<br>They went together like a hand and a glove<br>On a clear day from their front yard<br>If you look and know what to look for<br>Off to the east you can still read his words of love<br>repeat CHORUS<br>Now more than once the town has discovered<br>that paintin over it ain't no use<br>There ain't no paint that'll cover it<br>if the heart still shows through</p>
        </div>
        <p id="clickMe" style="color: red;">Click</p>
        <div id="bio">
            <p id="artist">Joe Diffie</p>
            <p id="about">Joe Logan Diffie (born December 28, 1958) is an American country music singer known for his ballads and novelty songs. After working as a demo singer in the 1980s, he signed with Epic Records' Nashville division in 1990. Between then and 2004, Diffie charted 35 cuts on the Billboard Hot Country Songs chart, including five number one singles: his debut release "Home", "If the Devil Danced (In Empty Pockets)", "Third Rock from the Sun", "Pickup Man" (his longest-lasting number one, at four weeks) and "Bigger Than the Beatles". In addition to these cuts, he has 12 other top ten singles and ten other top 40 hits on the same chart. He also co-wrote singles for Holly Dunn, Tim McGraw and Jo Dee Messina, and has recorded with Mary Chapin Carpenter, George Jones and Marty Stuart.</p>
        </div>
    </div>
</body>
<script type="text/javascript">
$("#clickMe1").css("top", "500px")
$("#lyrics").css("top", "530px")
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
        $("#lyrics").css("top", "590px")
        $("#clickMe1").css("display", "none");
        $("#name").css("display", "none");
        $("#lyrics").css("font-size", "12px").css("overflow-x", "hidden").css("padding-top", "0px").css("font-size", "20px").css("height", "260px");
        $("#text").fadeIn("700")
    })

    $("#player").load('player.html');
    Amplitude.init({
        "songs": [{
            "name": "John Deere Green",
            "artist": "Joe Diffie",
            // "album": ,
            "url": "mp3/10 John Deere Green.mp3",
            "live": false,
            "cover_art_url": "https://images.rapgenius.com/7f31ae203d223ec53795c73fe4d7fcb0.500x500x1.jpg"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
