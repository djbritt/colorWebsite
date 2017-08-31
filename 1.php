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
        <img id="big" src="img/big/1.png">
        <?php include 'player.php'?>
        <div id="input">Comment: <input id="type" type="text"> <button id="click">Submit</button><br><div id="comments"></div></div>
        
        <p id="clickMe" style="color: red;">Click</p>
        <div id="bio">
            <p id="artist">Christine McVie</p>
            <p id="about">Christine Anne Perfect (born 12 July 1943) professionally known as Christine McVie is an English singer-songwriter and keyboardist. Her fame came as a member of rock band Fleetwood Mac. Eight songs written and sung by McVie are on the band's Greatest Hits album, including "Don't Stop", "Little Lies", "Everywhere" and "You Make Loving Fun". She has also released three solo albums. AllMusic critic Steve Leggett noted McVie's "naturally smoky low alto vocal style", describing her as an "Unabashedly easy-on-the-ears singer/songwriter, and the prime mover behind some of Fleetwood Mac's biggest hits."</p>
        </div>
        <p id="clickMe1" style="color: red;">Click</p>
        <div id="lyrics">
            <p id="name">Brown Eyes</p>
            <p id="text">When you look at me with those brown eyes<br>What do you want to do<br>Do you have to have me<br>The way that i want you<br>I want you<br>When you look at me with those brown eyes<br>What do you want to say<br>And are you just another liar<br>Will you take me all the way<br>All the way.</p>
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
            "name": "Brown Eyes",
            "artist": "Christince McVie",
            // "album": ,
            "url": "mp3/1 Brown Eyes.mp3",
            "live": false,
            "cover_art_url": "http://images.amazon.com/images/P/B00029J20S.01.LZZZZZZZ.jpg"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
