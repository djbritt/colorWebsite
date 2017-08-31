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
        <img id="big" src="img/big/13.png">
        <?php include 'player.php'?>
        <div id="input">Comment: <input id="type" type="text"> <button id="click">Submit</button><br><div id="comments"></div></div>
        
        <p id="clickMe1" style="color: red;">Click</p>
        <div id="lyrics">
            <p id="name">Chartreuse</p>
            <p id="text">You're a freckled gal<br>you're a bug nosed kitty<br>as sweet as Charlotte Bruce<br>You've got big blue eyes<br>so I ask you why<br>did you dye your hair chartreuse?<br>Chartreuse, chartreuse<br>Chartreuse, chartreuse<br>though you think it's mighty cute<br>just wait 'til I write and tell your ma<br>that you dyed your hair chartreuse<br>Chartreuse, chartreuse<br>Chartreuse, chartreuse<br>though you think it's mighty cute<br>just wait 'til I write and tell your ma<br>that you dyed your hair chartreuse<br>In the days of old<br>when the nights were cold<br>when the girls were true and blue<br>Just think what ma would have said to pa<br>if he dyed his hair chartreuse<br>Chartreuse, chartreuse<br>Chartreuse, chartreuse<br>though you think it's mighty cute<br>you went too far in the beauty booth<br>when you dyed your hair chartreuse<br>Now you know that I knew you<br>when your hair was black<br>and you lived on Chestnut Street<br>When you wore pig tails<br>and ginger ale was your most favorite treat<br>You're a big girl now<br>so you think it's cute<br>to be fast and fancy loose<br>but you went too far in the beauty booth<br>when you dyed your hair chartreuse<br>Chartreuse, chartreuse<br>Chartreuse, chartreuse<br>though you think it's mighty cute<br>just wait til I write and tell your ma<br>that you dyed your hair chartreuse<br>Chartreuse, chartreuse<br>Chartreuse, chartreuse<br>though you think it's mighty cute<br>just wait til I write and tell your ma<br>that you didn't like black<br>you hated red, you hate blonde<br>Oh, what's the use...<br>You got mad and you dyed your hair<br>chartreuse</p>
        </div>
        <p id="clickMe" style="color: red;">Click</p>
        <div id="bio">
            <p id="artist">Chris Daniels and The Kings</p>
            <p id="about">Chris Daniels aka "Spoons" born Christopher Williams Daniels on September 30, 1952, is an American bandleader, singer, songwriter, guitarist, and roots musician best known for the horn-driven, swing, R&B, jump blues style band he has led since 1984, Chris Daniels & The Kings. With a music career that spans four decades, he has produced fourteen albums on several labels, including critically acclaimed international releases in the United States, Japan, and the Netherlands. During the decades as a long-standing unit, Chris Daniels & The Kings have toured throughout the US and Europe appearing at festivals such as The Telluride Bluegrass Festival Carolina Downhome Blues Festival, Parkpop Festival in the Netherlands, Marktrock in Belgium; plus appearing on TV and radio shows such as Countdown Cafe in the Netherlands, Nashville Now, Ohne Filter in Germany, and the HDnet Network in the US. Daniels also tours as a sideman and bandleader for various artists across the US and Europe including Russell Smith of the Amazing Rhythm Aces, The Kings backing David Bromberg in Colorado, Chicago, and New York, with New Grass Revival in Nashville and Telluride, and with Dutch guitarist Jan Rijbroek, and the BMaster (formally Blues Masters) in Europe. </p>
        </div>
    </div>
</body>
<script type="text/javascript">
$("#volume").css("margin-left", "71px", "important")
$("#lyrics").css("left", "280px")
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
            "name": "Chartreuse",
            "artist": "Chris Daniels and The Kings",
            // "album": ,
            "url": "mp3/13 Chartreuse.mp3",
            "live": false,
            "cover_art_url": "http://www.cpr.org/sites/default/files/images/funky_to_the_bone.jpg"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
