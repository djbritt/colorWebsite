<!DOCTYPE html>
<html>

<head>
    <title>351 - Color Music</title>
    <script type="text/javascript" src="js/amplitude.js"></script>
    <!-- jQuery only used to help with animations and NON Amplitude elements -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <style>
        /*#bio {*/
        /*    top: 507 !important;*/
        /*}*/
    </style>
</head>

<body>
    <div id="scroll">
        <a href="index.php" class="button pos">Home</a>
        <img id="big" src="img/big/5.png">
        <?php include 'player.php'?>
        <div id="input">Comment: <input id="type" type="text"> <button id="click">Submit</button><br><div id="comments"></div></div>
        <p id="clickMe1" style="color: red;">Click</p>
        <div id="lyrics">
            <p id="name">Purple People Eater</p>
            <p id="text">Somewhere in the middle of nowhere<br>Sits a chipmunk<br>Simon Seville<br>Waiting for a sign from outer space<br>Alvin, Theodore<br>We’ve made contact<br>Well I saw the thing comin' out of the sky<br>It had the one long horn, one big eye.<br>I commenced to shakin' and I said "ooh-eee"<br>It looks like a purple people eater to me.<br>It was a one-eyed, one-horned, flyin' purple people eater.<br>(one-eyed, one-horned, flyin' purple people eater)<br>A one-eyed one-horned, flyin' purple people eater<br>Sure looks strange to me. (one eye?)<br>Well he came down to earth and lit in a tree<br>I said Mr. Purple People Eater don't eat me<br>I heard him say in a voice so gruff<br>I wouldn't eat you cuz you're so tough<br>It was a one-eyed, one-horned flyin' purple people eater<br>one-eyed, one-horned flyin' purple people eater<br>one-eyed, one-horned flyin' purple people eater<br>Sure looks strange to me. (one horn?)<br>I said Mr. Purple People Eater, what's your line<br>He said it's eatin' purple people and it sure is fine<br>But that's not the reason that I came to land<br>I wanna get a job in a rock and roll band<br>Well bless my soul, rock and roll, flying purple people eater.<br>Pigeon-toed, undergrowed, flyin' purple people eater (we wear short shorts)<br>Flyin' purple people eater<br>sure looks strange to me.<br>And then he swung from the tree and lit on the<br>ground. He started to rock, really rockin' around<br>It was a crazy little ditty with a swingin' tune<br>(sing aboop boop aboopa lopa lum bam boom)<br>Well, bless my soul, rock and roll<br>flyin' purple people eater.<br>Pigeon-toed, undergrowed, flyin' purple people eater.<br>Flyin' little people eater<br>Sure looks strange to me. (purple people?)<br>And then he went on his way, and then what do<br>you know. I saw him last night on a TV show.<br>He was blowing it out, a'really knockin' em dead<br>Playin' rock and roll music through the horn in<br>his head</p>
        </div>
        <p id="clickMe" style="color: red;">Click</p>
        <div id="bio">
            <p id="artist">Alvin and the Chipmunks</p>
            <p id="about">Alvin and the Chipmunks is an American animated music group created by Ross Bagdasarian, Sr., for a novelty record in 1958. The group consists of three singing animated anthropomorphic chipmunks: Alvin, the mischievous troublemaker, who quickly became the star of the group; Simon, the tall, bespectacled intellectual; and Theodore, the chubby, impressionable one. The trio is managed by their human adoptive father, David (Dave) Seville. In reality, "David Seville" was Bagdasarian's stage name, and the Chipmunks themselves are named after the executives of their original record label. The characters became a success, and the singing Chipmunks and their manager were given life in several animated cartoon productions, using redrawn, anthropomorphic chipmunks, and eventually films.</p>
        </div>
    </div>
</body>
<script type="text/javascript">
    $("#lyrics").css("top", "550px").css("left", "286px");
    $("#clickMe1").css("top", "520px").css("left", "290px");
    $("#bio").css("left", "809px")
    //comments
    $("#click").click(function() {
        $("#comments").append("User: " + $("#type").val() + "<br>")
    })
    //click on artist show bio
    $("#artist").click(function() {
        // $("#bio").css("top", "590px").css("left", "310px");
        $("#bio").css("left", "830px")
        $("#clickMe").css("display", "none");
        $("#artist").css("display", "none");
        $("#bio").css("font-size", "12px").css("overflow-x", "hidden").css("padding-top", "0px").css("font-size", "20px").css("height", "260px");
        $("#about").fadeIn("700")
    })
    //click on band, show lyrics
    $("#lyrics").click(function() {
        $("#clickMe1").css("display", "none");
        $("#name").css("display", "none");
        $("#lyrics").css("font-size", "12px").css("overflow-x", "hidden").css("padding-top", "0px").css("font-size", "20px").css("height", "260px");
        $("#text").fadeIn("700")
    })

    $("#player").load('player.html');
    Amplitude.init({
        "songs": [{
            "name": "Purple People Eater",
            "artist": "Alvin and the Chipmunks",
            // "album": ,
            "url": "mp3/5 Purple People Eater.mp3",
            "live": false,
            "cover_art_url": "http://wharble.com/sites/default/files/Alvin_and_The_Chipmunks_Movie_Soundtrack_CD.jpg"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
