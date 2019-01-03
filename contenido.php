<?php

include("cgi/conexion_db.php");
session_start();
$usuario=$_SESSION['username'];
$columnista ="SELECT* from columnista where usuario='$usuario' ";
$resultadocolumnita = mysql_query($columnista);
echo "
 <center><table border = 1 cellspacing = 1 cellpadding = 1>
    <tr>
        <th>Titulo</th>
        <th>Noticia</th>
        <th>Fecha</th>
        <th>Estatus</th>
        <th>Comenatio</th>  
    </tr>";

?>

<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
            <li><a href="index.html">Pagina Principal</a></li>
            
        </ul>  
       
    
    <!-- end of templatemo_menu -->
<div id="templa_form">

      <div id="templatemo_form">
             
               
    </div>
   </div>
    </div>
</div> <!-- end of menu wrapper -->

<div id="templatemo_header_wrapper">
  <div id="templatemo_header">
    <div id="site_title">
      <h1><a> 
          PERIODICO UNIVERSE
          </a></h1>
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

<div class="two_column float_l" >

  
      <?php
      while ($row = mysql_fetch_array($resultadocolumnita))
          {
             echo "
          <tr>
            <td>".$row[1]."</td>
            <td>".$row[2]."</td>
            <td>".$row[3]."</td>
            <td>".$row[4]."</td>
            <td>".$row[7]."</td>
          </tr>";

          }
           echo "</table></center>"; 
      ?>
      
</div>

	<div id="templatemo_content1" align="center">
      
		
            
            <div id="contact_form" style="width: 80% "  align="center">

				        
                <h1>NOTICIA</h1>
    
            
                <form method="post" name="contact" action="valida_foto.php" aling:"center" enctype="multipart/form-data">

                      <label for="author">Titulo:</label> <input type="text" id="titulo" name="titulo" class="required input_field" style="width: 90%"  />
                      <div class="cleaner_h10"></div>
                    
                        
                     <label for="text">Noticia :</label> <textarea id="text" name="noticia" rows="0" cols="0" class="required" style="width: 90%" ></textarea>
                        <div class="cleaner_h10"></div>
                        
                         <label for="imagen">Imagen:</label> <input type="file" id="foto" name="foto" class="required input_field" style="width: 90%;height: 30px" />
                      <div class="cleaner_h10"></div>
           
                        
                        <input type="submit" class="submit_btn" name="submit" id="submit" value="ENVIAR" align: center />
                       
                
           		  </form>
                
            </div>
                
    
    	<div class="cleaner"></div>
	</div> <!-- end of content -->
</div> <!-- end of content_wrapper -->
</body>

</html>