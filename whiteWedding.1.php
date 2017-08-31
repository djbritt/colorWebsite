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
        
    </style>
</head>

<body>
    <div id="container">
        <img id="big" src="img/big/18.png">
        <?php include 'player.php'?>      
    </div>
    
</body>
<script type="text/javascript">
    $("#player").load('player.html');
    Amplitude.init({
        "songs": [{
            "name": "White Wedding",
            "artist": "Billy Idol",
            // "album": ,
            "url": "mp3/01 White Wedding.mp3",
            "live": false,
            "cover_art_url": "https://www.indieshuffle.com/bundles/webbundle/images/artwork/original/billy_idol__white_wedding.jpeg"
        }],
        "default_album_art": "images/no-cover.png"
    });
    $('#small-player-middle-controls').show();
    $('#small-player-middle-meta').show();
</script>

</html>
