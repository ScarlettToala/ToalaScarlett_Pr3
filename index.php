<?php
include("headerIndexHtml.html");
?>

<body>
      <header>
         <h1>Home</h1>
         <div class="menu">
         <img src="imagenes/itblogo.png" alt="logo de la empresa">

         <nav class="navprincipal">
            <ul>
               <li><a href="Peliculas.html" target="_blank">Peliculas</a></li>
               <li><a href="Peliculas.html" target="_blank">Series</a></li>
               <li><a href="Peliculas.html" target="_blank">Festivales</a></li>
               <li><a href="Altaflix.html" target="_blank">Altaflix</a></li>
               <li><a href="Peliculas.html" target="_blank">Lo más vito</a></li>
            </ul>
         </nav>
      </div>
      </header>

   <section class="peliculas"> 

      <!--Películas: Aparecen 6 elementos que contienen, una imagen, el nombre de la película, y un breve texto de descripción. Información de edad y temas a destacar-->
         <h2>Peliculas</h2>

         <div class="contenedorPeliculas">
            <?php 
            for ($i = 0; $i<7; $i++){
                include("contendioPeliculas.html");
            }
            ?>
         </div>

   </section>
   <?php include("footer.html") ?>
</body>
</html>