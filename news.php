<?php

include("cgi/conexion_db.php");
$columnista ="SELECT* from columnista where estatus='ONLINE' ";
$resultadocolumnita = mysql_query($columnista);

?>



<!DOCTYPE html>
<html>
<head>
<meta  content="charset=utf-8" />
<title>Periodico</title>
<meta name="keywords" content="" />
<meta name="description" content="" />

<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />

</head>

<body>

<div id="templatemo_menu_wrapper">

    <div id="templatemo_menu">
    
        <ul>
           	<li><a href="index.html">Pagina principal</a></li>

        </ul>    	
    
    </div> <!-- end of templatemo_menu -->
</div> <!-- end of menu wrapper -->

<div id="templatemo_header_wrapper">
  <div id="templatemo_header">
    <div id="site_title">
      <h1><a> PERIODICO UNIVERSE </a></h1>
    </div>
    <div id="templatemo_slider">
      <div id="one" class="contentslider">
        <div class="cs_wrapper">
          
          <div class="cs_slider">
          
                 <div class="cs_article"> 
                    <a href="#"> 
                    <img src="images/slider/lasnoticias.png" alt="lasnoticias" /></a> 
                </div>
                
                <div class="cs_article"> 
                    <a href="#"> 
                    <img src="images/slider/icono-noticias.png" alt="icono-noticias" /></a> 
                </div>
                
                <div class="cs_article"> 
                    <a href="#">
                    <img src="images/slider/noticias.jpg" alt="noticias" /></a> 
                </div>
                
                <div class="cs_article"> 
                    <a href="#">
                    <img src="images/slider/imagencabecera.jpg" alt="imagencabecera" /></a> 
                </div>
            
          </div>
          <!-- End cs_slider -->
          
        </div>
        <!-- End cs_wrapper -->
      </div>
      <!-- End contentslider -->
      <!-- Site JavaScript -->
      <script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
      <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
      <script type="text/javascript" src="js/jquery.ennui.contentslider.js"></script>
      <script type="text/javascript">
                $(function() {
                $('#one').ContentSlider({
                width : '430px',
                height : '200px',
                speed : 600,
                easing : 'easeInOutQuart'
                });
                });
            </script>
      <script src="js/jquery.chili-2.2.js" type="text/javascript"></script>
      <script src="js/chili/recipes.js" type="text/javascript"></script>
      <div class="cleaner"></div>
    </div>
    <!-- end of templatemo_slider -->
  </div>
  <!-- header -->

</div> 
<!-- end header wrapper -->
 
<div id="templatemo_content_wrapper">

	<div id="templatemo_content">
    	<h1>Noticias</h1>
         <?php
             
      
              while ($arraeglo_columnista= mysql_fetch_array($resultadocolumnita))
              {  
                $titulo = $arraeglo_columnista[1];
                $noticia = $arraeglo_columnista[2];
                $fecha = $arraeglo_columnista[3];
                $autor = $arraeglo_columnista[8];
                $imagen = $arraeglo_columnista[6];
                $ruta = "Imagenes_resp/"; 
              ?>
        <div class="post_box">
          <div class="post_content">
            <div class="left">

                         
                <img src="<?php echo $ruta.$imagen ?>"><br>    


              </div> 

              <div class="right">
           
                <h2><?php echo $titulo."<br/><br/>" ;?></h2>
                <div class="post_info"><?php echo "Fecha : ".$fecha; ?> | <strong><?php echo "Autor : ".$autor; ?></strong> |  </div>
                <p><?php echo $noticia; ?></p>
            </div>  

                
              <?php
                
                 echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
                 }    
              ?>
 
        </div>
    </div> <!-- end of content -->
  </div> <!-- end of content_wrapper -->
</div> <!-- end of content_wrapper -->

</body>
</html>