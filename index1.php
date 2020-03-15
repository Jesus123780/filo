<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Oswald&display=swap" rel="stylesheet">
	
     <link rel="shortcut icon " type="image/png" href="media/bg-imagen.jpeg">
	<link rel="stylesheet" href="css/estilos.css">
</head>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
    <div class="img_btn">
        <span class="lol"><center>Registrate a nuestra pagina    de filosofia (Filosopha.S)</center> </span>
       
      </div>
    
    
    
<p class="tip">
</p>
<div class="cont">
  <div class="form sign-in">
   <form action="validar.php" method="post">

	<h2>Ingresa disfruta A nuestra pagina y hace parte mas conocimiento  </h2>
  
		<tr><td><label <b> Correo: </b></label></td>
			<td> <input class="input-field" type="text" name="mail"></td></tr>
		<tr><td><label <b>Contraseña: </b></label></td>
			<td ><input class="input-field" type="password" name="pass"></td></tr>
		<tr><td></td>
			<td  align=center><input class="toggle-btn"  type="submit" value="Aceptar"></td>
			</tr></tr>
		</form>
        
  </div>
  <div class="sub-cont">
    <div class="img">
      
      <div class="img__btn">
        <span class="m--up">Registrate</span>
        <span class="m--in">Ingresa</span>
      </div>
    </div>
      
      
      
    <div class="form sign-up">
      <h2>Ingresa disfruta y comparte </h2>
     
<form method="post" action="" >
    
    
    <center> <legend  class="toggle-btn" style="font-size: 18pt"> <i class="fa fa-address-book"></i><b>Registro</b></legend></center>
   
    <div class="input-group">
      <label style="font-size: 14pt"></label>
      <input type="text" name="realname" class="input-field" placeholder="Ingresa tu nombre" />
    </div>
    <div class="input-group">
      <label  style="font-size: 14pt"></label>
      <input type="text" name="nick" class="input-field"  required placeholder="Ingresa mail"/>
    </div>
    <div class="input-group">
      <label  style="font-size: 14pt"></label>
      <input type="password" name="pass" class="input-field"  placeholder="Ingresa contraseña" />
    </div>
    <div class="input-group">
        <br>
      <label  style="font-size: 14pt"></label>
      <input type="password" name="rpass" class="input-field" required placeholder="repite contraseña" />
            <input  class="toggle-btn" type="submit" name="submit" value="Registrarse"/>
    </div>
      
    </div>
    <br>
   


</form>
     
    </div>
  </div>
</div>

<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

		<script>
			AOS.init({
				easing: 'ease-out-back',
				duration: 1000
			});
		</script>

		<script>
			hljs.initHighlightingOnLoad();

			$('.hero__scroll').on('click', function(e) {
				$('html, body').animate({
					scrollTop: $(window).height()
				}, 1200);
			});
		</script>

</div>
</div>

<a href="#" target="_blank" class="icon-link">
  <img src="fb.png">
</a>
<a href="https://twitter.com" target="_blank" class="icon-link icon-link--twitter">
  <img src= "tw.png" >
</a>
<!-- partial -->
  <script  src="./script.js"></script>


</body>
</html>