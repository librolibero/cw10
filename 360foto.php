<!DOCTYPE HTML>
<html lang='pl'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    <title>360 foto</title>
    <link rel='stylesheet' href='css/mojestyle.css'>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
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
                <div class="mobimin" onclick="$('.menu').toggle();">
                    &equiv;
                </div>
                 <ul class="menu">
                    
               
                <li><a href="index.php">Home</a></li>
                <li><a href="foto.php">Foto</a></li>
                <li><a href="video.php">Video</a></li>
                <li><a href="360Foto.php">Foto360</a></li>
                <li><a href="Udostepnij.php">Udostepnij</a></li>
                <li><a href="bxSlider.php">bxSlider</a></li>
                <li><a href="cycle2.php">Cycle2</a></li>
                <li><a href="360.php">360</a></li>
                    
                </ul>
            </nav>
        </aside>

        <!-- main -->
        <section id="main">
            <h1>360 Foto</h1>
            <script src="https://static.kuula.io/embed.js " data-kuula="https://kuula.co/share/7lv3H?fs=0&vr=0&zoom=1&thumbs=1&chromeless=0&logo=0 " data-width="90% " data-height="640px "></script>
        
            
            <div class="cycle" style="background:url(images/360/c001.jpg);height:2137px"></div>
		</section>
        	<script>
		$(document).ready(function ($) {
			$('.cycle').cyclotron();
		});
		</script>
        
        
        
        </section>

        <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2017</p>
        </footer>
    </div>
</body>

</html>