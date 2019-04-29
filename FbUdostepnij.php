<!DOCTYPE HTML>
<html lang='pl'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    <title>Fb Udostępnij</title>
    <link rel='stylesheet' href='css/mojestyle.css'>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>

<body>

    <div class="container">

        <!-- header -->
        <header>
            <img src="images/header.jpg" alt="" />
        </header>

        <!-- sidebar -->

        <aside>
            <nav>
                <div class="mobimin" onclick="$('.menu').toggle();">
                    &equiv;
                </div>
                <ul class="menu">
                    
                    <li><a href="index.html">Home</a></li> 
                    <li><a href="foto.html">Foto</a></li>
                    <li><a href="video.html">Video</a></li>
                    <li><a href="360Foto.html">360Foto</a></li>
                    <li><a href="FbUdostepnij.html">FB Udostępnij</a></li>
                    <li><a href="bxSlider.html">bxSlider</a></li>
                    <li><a href="cycle2.html">Cycle2</a></li>
                    <li><a href="360.html">360</a></li>
                            
                </ul>
            </nav>
        </aside>

        <!-- main -->
        <section id="main">
            <h1>Fb Udostepnij</h1>
           <body>
                <div id="fb-root"></div>
                <script>(function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.11';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <div class="container"> </div>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
           
            <script src="https://static.kuula.io/embed.js " data-kuula="https://kuula.co/share/7lv3H?fs=0&vr=0&zoom=1&thumbs=1&chromeless=0&logo=0 " data-width="90% " data-height="640px "></script>
            <a name="fb_share" share_url="goo.gl/fxUsqU" href="goo.gl/fxUsqU" ></a>
            <button type="button">Udostępnij</button>
            <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
            <a name="fb_share" type="button_count" share_url="url">
                <script src="http://widgets.fbshare.me/files/fbshare.js"></script>

            </a>
            <a href="https://www.facebook.com/sharer/sharer.php?s=100&p[url]='.urlEncode("goo.gl/fxUsqU").$rekord["id_news"].'').'&p[title]='.urlEncode(''.$rekord["tytul"].'').'&p[summary]='.urlEncode(''.$rekord["news"].'').'&p[images][0]='.urlEncode("goo.gl/fxUsqU").'">FB</a>
            <div class="fb_share">
                
                <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></div>
        </section>
</body>
        <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2017</p>
        </footer>
    </div>
</body>

</html>