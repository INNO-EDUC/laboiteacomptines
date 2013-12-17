<!DOCTYPE html>
<html>

<head>

    <title>La boite à comptines</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />

    <!--css-->
    <link href="main.css" rel="stylesheet" type="text/css" media="screen"/>
<!--    <link href="ipad.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="iphone.css" rel="stylesheet" type="text/css" media="screen"/>-->

    <!--javascript-->
    <link rel="stylesheet" href="colorbox/colorbox.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="colorbox/jquery.colorbox.js"></script>
    <script>
        $(document).ready(function(){
            //Examples of how to assign the Colorbox event to elements
            $(".group1").colorbox({rel:'group1'});
            $(".group2").colorbox({rel:'group2', transition:"fade"});
            $(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
            $(".group4").colorbox({rel:'group4', slideshow:true});
            $(".ajax").colorbox();
            $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
            $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
            $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
            $(".inline").colorbox({inline:true, width:"50%"});
            $(".callbacks").colorbox({
                onOpen:function(){ alert('onOpen: colorbox is about to open'); },
                onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
                onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
                onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
                onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
            });

            $('.non-retina').colorbox({rel:'group5', transition:'none'})
            $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});

            //Example of preserving a JavaScript event for inline calls.
            $("#click").click(function(){
                $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                return false;
            });
        });
    </script>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="http://laboiteacomptines.fr/favicon.png">

    <!--API google font Varela Round + Cookie-->
    <link href='http://fonts.googleapis.com/css?family=Varela+Round|Cookie' rel='stylesheet' type='text/css'>
</head>


<body>

<div id="bloc_page">

    <!-- HEADER -->

    <header>

        <div class='wrap'>
            <nav>
                <ul>
                    <a href="index.php?action=ajout"><li id="add">ajouter une comptine</li></a>
                    <a href="index.php#"><li id="question">?</li></a>
                    <a href="mailto:contact@laboiteacomptines.fr"><li id="contact">contact</li></a>
                </ul>
            </nav>

            <a href="index.php"><div id="logo"></div></a>

        </div>
    </header>

