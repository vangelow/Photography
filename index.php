
<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic" rel="stylesheet">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/jquery.fullPage.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.default.css">
        <link rel="stylesheet" href="css/lightbox.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/jquery.fullPage.js"></script>


    </head>
    <body>
        <?php if(isset($_SESSION['username'])){
            if($_SESSION['username']=='admin'){
                ?>
                <form action="slide1.php" method="post" enctype="multipart/form-data">
    Select image to upload to slider:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    <select name="slideOption">
  <option value="slide1">Слайд 1</option>
  <option value="slide2">Слайд 2</option>
  <option value="slide3">Слайд 3</option>
  <option value="slide4">Слайд 4</option>
  </select>
                <?php
            }
        }?>

  

</form>
        <div class="site-content">
            <div class="initial">
                <span>SD</span>
            </div>
            <div class="menu-wrap">
              <div class="menu-inner">
                <div class="logo">
                    <img src="images/logo.png" alt="logo">
                </div>
                <ul>
                    <li class="page-scroll"><a href="#home">Начало<span class="border-menu"></span></a></li>
                    <li class="page-scroll"><a href="#gallery">Галерия<span class="border-menu"></span></a></li>
                    <li class="page-scroll"><a href="#about">За мен<span class="border-menu"></span></a></li>
                    <li class="page-scroll"><a href="#contacts">Контакти<span class="border-menu"></span></a></li>
                </ul>
              </div>
              <div class="morph-shape" id="morph-shape" data-morph-open="M-7.312,0H15c0,0,66,113.339,66,399.5C81,664.006,15,800,15,800H-7.312V0z;M-7.312,0H100c0,0,0,113.839,0,400c0,264.506,0,400,0,400H-7.312V0z">
                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800" preserveAspectRatio="none">
                      <path d="M-7.312,0C-7.312,0,100,0,100,0C100,0,100,113.839,100,400C100,664.506,100,800,100,800C100,800,-7.312,800,-7.312,800C-7.312,800,-7.312,0,-7.312,0C-7.312,0,-7.312,0,-7.312,0"></path>
                      <defs></defs>
                  </svg>
              </div>
            </div>
            <div id="fullpage">
                <div> 
                    
                </div>
                <div class="section owl-carousel" id="home">
                    <div class="slide slide1"><?php 
                    $path =$_SERVER['PHP_SELF'];
                    $path = str_replace('index.php', '', $path);?>
                    <img src="<?php echo 'http://localhost' . $path ?>uploads/slider/1.jpg">
                </div>
                    <div class="slide slide2">
                    <?php 
                    $path =$_SERVER['PHP_SELF'];
                    $path = str_replace('index.php', '', $path);?>
                    <img src="<?php echo 'http://localhost' . $path ?>uploads/slider/2.jpg"></div>
                    <div class="slide slide3">
                    <?php 
                    $path =$_SERVER['PHP_SELF'];
                    $path = str_replace('index.php', '', $path);?>
                    <img src="<?php echo 'http://localhost' . $path ?>uploads/slider/3.jpg"></div>
                    <div class="slide slide4">
                    <?php 
                    $path =$_SERVER['PHP_SELF'];
                    $path = str_replace('index.php', '', $path);?>
                    <img src="<?php echo 'http://localhost' . $path ?>uploads/slider/4.jpg"></div>
                </div>
                <div class="section" id="gallery">
                    <div class="title">
                      <h1>Галерия</h1>
                    </div>
                    <div class="gallery-menu">
                        <div id="filters" class="button-group filters-button-group">  
                            <button class="button is-checked" data-filter="*">Всички</button>
                            <button class="button" data-filter=".portrait">Портрети</button>
                            <button class="button" data-filter=".weddings">Сватби</button>
                            <button class="button" data-filter=".children">Деца</button>
                            <button class="button" data-filter=".nature">Природа</button>
                        </div>
                    </div>
                    <div class="gallery-images">
                        <div class="grid">
                            <!--Portraits-->
<?php $files = scandir('uploads/portraits');
array_shift($files);
array_shift($files);

if ($files !== false) 
{
foreach($files as $f) {
  if($f[0]=='h' && $f[1]=='g'){?>

<a href=<?php echo 'uploads/portraits/' . $f?> data-lightbox="image" class="grid-item grid-height portrait" data-category="portrait">
                                  <img src=<?php echo 'uploads/portraits/' . $f?>>
                              </a>
<?php }
else {?>

<a href=<?php echo 'uploads/portraits/' . $f?> data-lightbox="image" class="grid-item portrait" data-category="portrait">
                                  <img src=<?php echo 'uploads/portraits/' . $f?>>
                              </a>
<?php }
}
}
?>
<!--Nature-->
<?php $files = scandir('uploads/nature');
array_shift($files);
array_shift($files);

if ($files !== false) 
{
foreach($files as $f) {
  if($f[0]=='h' && $f[1]=='g'){?>

<a href=<?php echo 'uploads/nature/' . $f?> data-lightbox="image" class="grid-item grid-height nature" data-category="nature">
                                  <img src=<?php echo 'uploads/nature/' . $f?>>
                              </a>
<?php }
else {?>

<a href=<?php echo 'uploads/nature/' . $f?> data-lightbox="image" class="grid-item nature" data-category="nature">
                                  <img src=<?php echo 'uploads/nature/' . $f?>>
                              </a>
<?php }
}
}
?>
<!--Wedding-->
<?php $files = scandir('uploads/weddings');
array_shift($files);
array_shift($files);

if ($files !== false) 
{
foreach($files as $f) {
  if($f[0]=='h' && $f[1]=='g'){?>

<a href=<?php echo 'uploads/weddings/' . $f?> data-lightbox="image" class="grid-item grid-height weddings" data-category="weddings">
                                  <img src=<?php echo 'uploads/weddings/' . $f?>>
                              </a>
<?php }
else {?>

<a href=<?php echo 'uploads/weddings/' . $f?> data-lightbox="image" class="grid-item weddings" data-category="weddings">
                                  <img src=<?php echo 'uploads/weddings/' . $f?>>
                              </a>
<?php }
}
}
?>
<!--Kids-->
<?php $files = scandir('uploads/kids');
array_shift($files);
array_shift($files);

if ($files !== false) 
{
foreach($files as $f) {
  if($f[0]=='h' && $f[1]=='g'){?>

<a href=<?php echo 'uploads/kids/' . $f?> data-lightbox="image" class="grid-item grid-height children" data-category="kids">
                                  <img src=<?php echo 'uploads/kids/' . $f?>>
                              </a>
<?php }
else {?>

<a href=<?php echo 'uploads/kids/' . $f?> data-lightbox="image" class="grid-item children" data-category="kids">
                                  <img src=<?php echo 'uploads/kids/' . $f?>>
                              </a>
<?php }
}
}
?>

                              
                        </div>
                    </div>
                </div>
                <div class="section" id="about">
                    <div class="title">
                      <h1>За мен</h1>
                    </div>
                    <div class="about-container">
                        <div class="about-image">
                            <div class="image-border">
                                <img src="images/silvia.jpg" alt="Silvia Picture">
                            </div>
                        </div>
                        <div class="about-info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis vitae dolor sed iaculis. Fusce sagittis facilisis elit, a convallis ante ultrices quis. Vestibulum dignissim, ante sit amet varius ornare, ante massa efficitur orci, quis fermentum augue risus ornare mauris. Sed pharetra dignissim tortor, quis tempor risus lacinia quis. Phasellus ac mollis quam. Nam velit nisi, tincidunt a hendrerit at, mattis at ris.</p>
                        </div>
                    </div>
                </div>
                <div class="section skills-counter">
                    <div class="skills parallax-window" data-parallax="scroll" data-image-src="images/skills-bgr.jpg">
                        <div class="skills-container">
                            <div id="projects">
                                <span class="count .integers">200</span>
                                <p>Успешни<br> проекти</p>
                            </div>
                            <div id="projects">
                                <span class="count .integers">200</span>
                                <p>Години<br> опит</p>
                            </div>
                            <div id="projects">
                                <span class="count .integers">200</span>
                                <p>Доволни<br> клиенти</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section" id="contacts">
                    <div class="title">
                      <h1>Контакти</h1>
                    </div>
                    <form method="POST" action='index.php'>
                        <input type="email" name="Email" placeholder="Имейл">
                        <input type="text" name="Subject" placeholder="Тема">
                        <textarea type="text" name="Text" placeholder="Съобщение"></textarea>
                        <button>Изпрати</button>
                        <div class="clear"></div>
                    </form>
                    <div class="contact-links">
                        <div class="social">
                            <a href="https://www.facebook.com/SilviaDimitrovaPhotography" target="_blank" class="facebook">Facebook</a>
                            <a href="#"  target="_blank" class="twitter">Twitter</a>
                            <a href="https://www.linkedin.com/in/silvia-dimitrova-93179652/" target="_blank" class="linkedin">Linkedin</a>
                            <a href="https://www.instagram.com/silvi_dim/?hl=en" target="_blank" class="instagram">Instagram</a>
                        </div>
                        <div class="contacts">
                            <p class="phone"><a href="tel:+359888888888">0886 723 484</a></p>
                            <p class="email"><a href="mаilto: silviadimitrovaphotography@gmail.com"  target="_top">silviadimitrovaphotography@gmail.com</a></p>
                            <p class="adress">България, гр.София, ул.Тирана №23</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <script src="js/lightbox.js"></script>
    <script src="js/masonry.pkgd.js"></script>
    <script src="js/isotope.pkgd.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> 
    <script src="js/main.js"></script>
    <?php 
if(isset($_POST['Email'])){
  $email = $_POST['Email'];
  $subject =  $_POST['Subject'];
  $text = $_POST['Text'];

}
?>
    </body>
</html>

