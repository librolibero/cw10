<!DOCTYPE HTML>
<html lang='pl'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    <title>Foto</title>
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="foto.php">Foto</a></li>
                    <li><a href="video.php">Video</a></li>
                    <li><a href="360Foto.php">360Foto</a></li>
                    <li><a href="FbUdostepnij.php">FB Udostępnij</a></li>
                    <li><a href="bxSlider.php">bxSlider</a></li>
                    <li><a href="cycle2.php">Cycle2</a></li>
                    <li><a href="360.php">360</a></li>
                </ul>
            </nav>
        </aside>

        <!-- main -->
        <section id="main">
            <h1>Foto</h1>
            <img style="width: 95%" src="https://upload.wikimedia.org/wikipedia/commons/4/4d/Masca_Road.jpg">
        </section>

        <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2017</p>
        </footer>
    </div>
</body>

</html>