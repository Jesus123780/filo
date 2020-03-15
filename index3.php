<!DOCTYPE html>
<html lang="en">

<head>
    
    
    <meta charset="UTF-8">
    
      <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="pepe.css">
    <link rel="stylesheet" href="aos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filosopha.S</title>
     <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.min.css'>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon " type="image/png" href="logg.png">
</head>

<body>
   
<header class="cabecera">
 

  <div class="cabecera__capa"></div>
    
  <div class="cabecera__contenido">
       
    <h1>Filosofate desde ya</h1>
    <p>Descubre lo último sobre Filosofia </p>
   
  </div>
  <nav class="nav">
    <div class="nav__columna nav__pull"></div>
    <ul class="nav__columna nav__enlaces">
      <li><a href="#">Inicio</a></li>
      <li><a href="libros.html">libros</a></li>
      <li><a href="grado10.html">grado 10</a></li>
      <li><a href="grado11.html">grado 11</a></li>
    
           
    </ul>
    <ul class="nav__columna nav__social">
        
        
      <li>
          <li>
     
         <i class="fas fa-user-circle"></i>
        </a>
      </li>
      
          <?php
       
	session_start();
	if (@!$_SESSION['user']) {
        
      
	}elseif ($_SESSION['rol']==1) {
	
	}
            
            
	?>
        </div>
    
        
            <li><a href=" "<strong> Bienvenido <?php echo $_SESSION['user'];?></strong> </a>
			  <li><a href="desconectar.php"> cerrar sesion </a></li>		

      </li>
      
    
    </ul>
  </nav>
</header>
<div class="relleno"></div>

    
    
    <header>
      
        <div data-aos="fade-up"
     data-aos-duration="3000">

        <div class="textos">
            <h1 class="titulo">Filosofando ando</h1>
            <h3 class="subtitulo">La Mejor Web de filosofia</h3>
            <h3 class="slogan">Pensar para vivir</h3>
            <a href="#" 
               
           
               
               
               class="boton">Bienvenido</a>
            
            
           <br>
            <span class="hero__scroll aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="800">
				
				<i class="chevron bottom"></i>
			</span>  
            
            
            
            
        </div>
            </div>
        <br>
        <br>
        <div class="sesgoabajo">
            
        
        </div>
    
    
        
       
    </header>
    <main>
        <section class="acerca-de">
            <div class="contenedor">
                <div data-aos="zoom-out-down">
                <h2 class="sobre-nosotros">Sobre nosotros</h2>
                <h3 class="slogan">&nbsp;&nbsp; un sabio no dice todo lo que piensa pero si piensa todo lo que dice</h3>
                    </div>
               
                <p class="parrafo">Somos un grupo de jóvenes inquietos por el saber, nos cuestionamos sobre lo que nos rodea<br>
                    Filosofía es una doctrina que usa un conjunto de razonamientos lógicos y metódicos sobre conceptos abstractos como la existencia, la verdad y la ética basados en la esencia, las características y las causas y efectos de las cosas naturales como el ser humanos y el universo. 
                    La filosofia tiene como funcion cuestionarnos, crear incognitas y plantearnos ideas propias de la realidad.
                
                </p>
                <div data-aos="flip-up">
                <a href="#"  class="boton">Estamos felices que estes aqui<a  class="boton "<strong>   <?php echo $_SESSION['user'];?></strong> </a>
                 
                </div>
              
            </div>
        </section>
         
        <section class="galeria">
          
             
            <div class="imagenes none">
                
              
                <img src="1.png" alt="">
            </div>
            <div class="imagenes">
                <img src="3.jpg" alt="">
            </div>
            <div class="imagenes">
                <img src="2.jpg" alt="">
                <div class="encima">
                    <h2>Filosofate</h2>
                    <div></div>
                </div>
            </div>
            <div class="imagenes">
                <img src="4.jpeg" alt="">

            </div>
            <div class="imagenes none">
                <img src="5.jpeg" alt="">
            </div>
            <div class="sesgoabajo"></div>
        </section>
             </div>
        <section class="miembros">
            <div class="contenedor">
                <h2 class="sobre-nosotros">Nuestra mesa de trabajo</h2>
                
                <div class="cards">
                    <a href="historia-de-la-filosofia-medieval.pdf">
                    <div class="card">
                        <img src="AlexCGDesign.png" alt="">
                        <h4>Filosofia Medieval</h4>
                       
                        </a>
                    </div>
                    
                    
                    <a href="filosofia%20contemporanea.pdf">
                    <div class="card">
                        <img src="1.png" alt="">
                        <h4>Filosofia Contemporanea</h4>
                       
                        </a>
                    </div>
                    
                    
                    <a href="filosofia%20latinoamericana.pdf">
                    <div class="card">
                        <img src="0.png" alt="">
                        <h4>Filosofia latinoamericana</h4>
                      
                        </a>
                    </div>
                    
                    
                    <a href="Antropologia%20Filosofica.pdf">
                        
                        
                    <div class="card">
                        <img src="0.png" alt="">
                        <h4>Filosofia Antropologia</h4>
                       
                        </a>
                    </div>
                    
                    <a href="filosofia%20del%20sigo%2021.pdf">
                        
                    
                    <div class="card">
                        <img src="2.png" alt="">
                        <h4>Filosofia siglo XXI</h4>
                        
                        </a>
                    </div>
                        
                    <a href="filosofia%20moderna.pdf">
                     <div class="card">
                        <img src="3.png" alt="">
                        <h4>Filosofia moderna</h4>
                       
                         </a>
                    </div>
                </div>
            </div>
        </section>
        


                   <style>
                       a{
                           color:darkgray;
                           
                       }
                       
                       a:hover{
                           
                           color: red;
                       } h4{
                           color:darkgray;
                           
                       }
                       
                       h4:hover{
                           
                           color: red;
                       }
                </style>
                
        
        <div data-aos="fade-up"
     data-aos-duration="3000">

        <section class="fondo">
            <div class="sesgoarriba"></div>
            <div class="contenedor">
                <h2 class="titulo-patrocinadores">Nuestras Redes Sociales</h2>
               <section class="trial-block shadow3" id="ContactUs">
         <div class="height450">
            <div class="section-title text-center">
               
               
               <span class="section-title-line section-title-line"></span>
            </div>
             <div class="social-overlap process-scetion mt100">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-md-10">
                          <div class="social-bar">
                              <div class="social-icons mb-3 iconpad text-center">
                                 
                                  
                                  <a href="https://www.facebook.com/sarabelendelah" target="_blank" class="slider-nav-item"><i class="fab fa-facebook"></i></a>
                                  <a href="https://plus.google.com" target="_blank" class="slider-nav-item"><i class="fab fa-google-plus"></i></a>
                                  <a href="https://twitter.com" target="_blank" class="slider-nav-item"><i class="fab fa-twitter"></i></a>
                                  <a href="" target="_blank" class="slider-nav-item"><i class="fab fa-instagram"></i></a>
                                 
                                 
                                  
                                 
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
         </div> 
</section>
                </div>
            <div class="sesgoabajo-unico"></div>
        </section>
    </main>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js'></script>

        <script src="aos.js.descargar"></script>
        <script src="lola.js"></script>
        <script src="jquery-1.11.3.min.js.descargar"></script>
		<script src="highlight.min.js.descargar"></script>


<br>

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


</body>
    

</html>