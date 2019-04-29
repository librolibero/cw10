<!DOCTYPE HTML>
<html lang='pl'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    <title>Strona</title>
    <link rel='stylesheet' href='css/mojestyle.css'>
	<script src="./index_files/jquery-1.7.1.min.js"></script>
<script src="./index_files/jquery.cyclotron.js"></script>

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
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="foto.html">Foto</a></li>
                    <li><a href="video.html">Video</a></li>
                    <li><a href="360.html">360Foto</a></li>
                    <li><a href="share.html">FB Udostępnij</a></li>
                    <li><a href="bxSlider.html">bxSlider</a></li>
                    <li><a href="cycle.html">Cycle2</a></li>
                    <li><a href="foto360.html">360</a></li>
                </ul>
            </nav>
        </aside>

        <!-- main -->
        <section id="main">
            <h1>Fotografia 360</h1>
            <script src="https://static.kuula.io/embed.js" data-kuula="https://kuula.co/share/7lv3H?fs=1&vr=0&zoom=1&autorotate=0.45&thumbs=1&hideinst=1&chromeless=0&logo=0" data-width="80%" data-height="640px"></script>
        
		
		
		<div class="cycle" style="background:url(images/360/c001.jpg);height:2137px"></div>
		</section>
        	<script>
		$(document).ready(function ($) {
			$('.cycle').cyclotron();
		});
		</script>

        <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2017</p>
        </footer>
    </div>
</body>

</html>