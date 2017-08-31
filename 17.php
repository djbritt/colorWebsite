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
        <img id="big" src="img/big/17.png">
        <?php include 'player.php'?>
        <div id="input">Comment: <input id="type" type="text"> <button id="click">Submit</button><br><div id="comments"></div></div>
        
        <p id="clickMe1" style="color: red;">Click</p>
        <div id="lyrics">
            <p id="name">Magenta Rose</p>
            <p id="text">Here is a story about a woman<br>who sang her songs and people sang along<br>sharing her life as she goes<br>But somehow down the line<br>the tears of time swept across her mind<br>The bars and beers go the best of Magenta Rose<br>Magenta Rose<br>Sweetest flower that's ever grown<br>Where did you come from?<br>Nobody knows<br>Magenta Rose<br>You were dished out a life so cold<br>But it's not over 'til you say so<br>Now people would come from miles around<br>when they heard that she was in town<br>just to sit and listen to her sing<br>But she didn't know the gift she had<br>inside her pain was so bad<br>Every night she'd drink to try to kill that pain<br>Magenta Rose<br>Sweetest flower that's ever grown<br>Where did you come from?<br>Nobody knows<br>Magenta Rose<br>You were dished out a life so cold<br>But it's not over 'til you say so<br>I went to see her a few days back<br>living down by the railroad track<br>She hardly recognized<br>when I called her name<br>And she took my hand<br>and said, "Listen, child<br>you have a spirit so wild<br>Don't let that spirit die<br>playing the game"<br>Magenta Rose<br>Sweetest flower that's ever grown<br>Where did you come from?<br>Nobody knows<br>Magenta Rose<br>You were dished out a life so cold<br>But it's not over 'til you say so<br>(repeat)</p>
        </div>
        <p id="clickMe" style="color: red;">Click</p>
        <div id="bio">
            <p id="artist">Summer Lee</p>
            <p id="about">Summer Lee was born and raised in the Pacific Northwest. Spending most of her childhood riding horses in the mountains and playing country music with her family. She found her wings and began writing and performing her own music in high school. Summer longed to perform and touch hearts, but found her shyness to be a stumbling block. Slowly through the years she replaced that shyness with a gratitude for being given the gift of music, and has chosen to serve humanity through her songs.  Before becoming Summer Lee, she was known in the Northwest as Laurie Haynes. She recorded several projects under that name and toured as an opening act for several Country stars. In '97 she married Wes Lewis. Soon she found that there was already a Laurie Lewis on a Major label doing bluegrass. With this new gentle style of thought provoking soul-stirring music, Laurie decided to change her name. She chose to take her real "birthdate" name. Born June 21st, the first day of Summer and a full moon and Father's day the year she was born, Summer Lee came forth. Being an avid gardener and farmer, Summer, her husband Wes and little daughter Callie spend their busy days on an old 1910 farm, complete with miniature donkeys, ducks, horses, cows and chickens! A wonderful place to write songs! They live near Portland, Or. just over the bridge into Washington state. Summer's vision is to raise money with her music, to aid charities and continue to perform and share the vision of hope, peace and love. </p>
        </div>
    </div>
</body>
<script type="text/javascript">
$("#clickMe1").css("color", "white")
$("#clickMe").css("color", "white")
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
            "name": "Magenta Rose",
            "artist": "Summer Lee",
            // "album": ,
            "url": "mp3/17 Magenta Rose.mp3",
            "live": false,
            "cover_art_url": "https://images-na.ssl-images-amazon.com/images/I/51Z4XyrXCuL._SS500.jpg"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
