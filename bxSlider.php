<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    <title>bxSlider</title>
    <link rel='stylesheet' href='css/mojestyle.css'>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  
    <script>
      $(document).ready(function(){
        $('.slider').bxSlider();
      });
    </script>
  
    
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
                <div class="slider">
        
                   <div><img src="images/show2/b001.jpg" width="100%"></div>
                  <div><img src="images/show2/b002.jpg" width="100%"></div>
                  <div><img src="images/show2/b003.jpg" width="100%"></div>
            <div><img src="images/show2/b004.jpg" width="100%"></div>
             <div><img src="images/show2/b005.jpg" width="100%"></div>
              <div><img src="images/show2/b006.jpg" width="100%"></div>
            <div><img src="images/show2/b007.jpg" width="100%"></div>
         <div><img src="images/show2/b008.jpg" width="100%"></div>

          </div>
           </section>
             
        <!-- footer -->
        <footer>
            <p>Humanistyka UKW © 2017</p>
        </footer>
    </div>
</body>
</html>