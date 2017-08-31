<?php
function printImages() {
    for ($i = 1; $i < 20; $i++) {
        echo "<a href='".$i.".php'><img style='padding-right: 20px;' height=200 class='".$i."' src='img/".$i.".png'></a>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <!--<link rel="stylesheet" type="text/css" href="theme.css">-->
        <!--<script src="myscripts.js"></script>-->
    <style>
        /*img {*/
        /*    float: right;*/
        /*}*/
        #trumpet {
            order: 1;
            align-self: center;
            flex-grow: 5;
        /*    width: 510px;*/
        /*    float: left;*/
            /*position: absolute;*/
            /*top: 35%;*/
        }
        #notes {
            order: 2;
            text-align: right;
            flex-basis: 1200px;
            margin-right: 5%;
        }
        .flex-container {
          padding: 0;
          margin: 0;
          
          /*display: -webkit-box;*/
          /*display: -moz-box;*/
          /*display: -ms-flexbox;*/
          /*display: -webkit-flex;*/
          display: flex;
          
          /*-webkit-flex-flow: row wrap;*/
          justify-content: flex-start;
          /*align-items: center;*/
        }
        /*#1 {*/
        /*    flex-grow: 12;*/
        /*}*/
        
        /*.flex-item {*/
        /*  padding: 5px;*/
        /*  width: 200px;*/
        /*  height: 150px;*/
        /*  margin-top: 10px;*/
          
        /*  line-height: 150px;*/
        /*  color: white;*/
        /*  font-weight: bold;*/
        /*  font-size: 3em;*/
        /*  text-align: center;*/
        /*}*/
    </style>
    </head>
    <body>
        <div class="flex-container">
            <div id="trumpet"><img height=200 src="img/trumpet.png"></div>
            <div id="notes"><?=printImages()?></div>
        </div>
    </body>
</html>