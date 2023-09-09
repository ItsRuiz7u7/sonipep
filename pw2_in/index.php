<?php
session_start();
if(isset($_SESSION['usuario'])){
  $cerrarSesion = true;
} else {
  $cerrarSesion = false;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="img/cr7.png" type="img/cr7.png">
        <title> Cristiano Ronaldo</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
    <div class="navegacion">
        <nav>
            <ul class="clearfix">
                <li><a href="#contenido">Inicio</a></li>
                <li><a href="#">Equipos</a>
                    <ul>
                        <li><a href="real.html">Real Madrid</a></li>
                        <li><a href="man.html">Manchester Unite</a></li>
                        <li><a href="juve.html">Juventus</a></li>
                        <li><a href="https://www.sporting.pt/en">Sporting</a></li>
                        <li><a href="al.html">Al Nassr</a></li>
                    </ul>
                </li>
                <li><a href="#">Récords</a>
                    <ul>
                        <li><a href="#">máximo goleador histórico de la Champions League</a></li>
                        <li><a href="#">máximo goleador histórico del Real Madrid</a></li>
                        <li><a href="#">máximo goleador histórico a nivel seleccion y club</a></li>
                    </ul>
                </li>
                <li><a href="tienda.php">Tienda</a></li>
                <li><a href=>Redes Sociales</a>
                    <ul>
                        <li><a href="https://www.instagram.com/cristiano/">instagram</a></li>
                        <li><a href="https://twitter.com/Cristiano">twitter</a></li>
                    </ul>
                </li>
                <li>
                    <?php if ($cerrarSesion) { ?>
                        <a href="logout.php">Cerrar Sesión</a>
                    <?php } else { ?>
                        <a href="login.php">Iniciar Sesión</a>
                    <?php } ?>
                </li>
            </ul>
        </nav>
    </div>

    <div class="contenido">
        <main>
            <article>
            <?php if ($cerrarSesion) { ?>
                    <h2>Bienvenid@, <?php echo $_SESSION['usuario']; ?></h2>
                    <?php } ?>
                <h2>Cristiano Ronaldo</h2>
                <img src="img/cristiano.jpg" alt="Cristiano Ronaldo">
                <table>
                    <thead>
                      <tr>
                        <th>Catidad</th>
                        <th>premio</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>3</td>
                        <td>JUGADOR MUNDIAL DE LA FIFA</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>BALLON D'OR</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>MEJOR JUGADOR EN EUROPA UEFA</td>
                      </tr>
                      <tr>
                        <td>14</td>
                        <td>MEJOR FUTBOLISTA DEL AÑO</td>
                      </tr>
                      <tr>
                        <td>19</td>
                        <td>MÁXIMO GOLEADOR</td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>MEJOR FUTBOLISTA DE LA TEMPORADA</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>CAMPEÓN DE EUROPA</td>
                      </tr>
                      <tr>
                        <td>5</td>
                        <td>LIGA DE CAMPEONES</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>MUNDIAL DE CLUBES</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>CAMPEÓN DE INGLATERRA</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>CAMPÉON DE ESPAÑA</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>CAMPEÓN DE ITALIA</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>SUPERCOPA DE EUROPA</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>UEFA NATIONS LEAGUE</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>FA CUP DE INGLATERRA</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>COPA DEL REY</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>COPA ITALIA</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td> COPA DE LA LIGA DE INGLATERRA</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>SUPERCOPA DE ESPAÑA</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>SUPERCOPA DE ITALIA</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>SUPERCOPA DE INGLATERRA</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>PORTUGIESISCHER SUPERPOKALSIEGER</td>
                      </tr>
                    </tbody>
                  </table>
               
            </article>
            <article>
                <h2>informacion</h2>
                <img src="img/Cristiano_Ronaldo_2018.jpg" alt="informacion">
                <p>Cristiano Ronaldo dos Santos Aveiro , conocido como Cristiano Ronaldo,
                     es un futbolista portugués. Juega como extremo izquierdo o delantero y su equipo actual es el Al-Nassr F. C. de la Liga Profesional Saudí, Es internacional absoluto con la selección de Portugal, de la cual es capitán y máximo goleador histórico.</p>
                    
            </article>
            <article>
                <h2>informacion personal</h2>
                <img src="img/ronaldo.jpg" alt="ronaldo">
                <p> Nombre completo:	Cristiano Ronaldo dos Santos Aveiro​</p>
                <p>Apodo(s)	CR7,
                    El Bicho,
                    El Comandante,
                    Míster Champions,
                    D7OS​</p>
                <p>Nacimiento	Funchal, Madeira, Portugal  5 de febrero de 1985 (38 años)</p>
                <p>Altura	1,87 m (6′ 2″)n 
                    Peso	83 kg (183 lb)​</p>
                
            </article>

            <audio controls preload="metadata" class="audio">
                <source src="audio/himno.mp3" type="audio/mp3">
            </audio>
        </main>

        <aside class="sidebar">
            <h2>Otros posts</h2>
            <ul>
                <li><a href="#">Neymar</a></li>
                <li><a href="#">Messi</a></li>
                <li><a href="#">Mbappe</a></li>
                <li><a href="#">Sergio Ramos</a></li>
                <li><a href="#">Luca Modric</a></li>
            </ul>
        </aside>
    </div>


    <footer>

        <div class="contenedor">
            <div class="nosotros">
            <h2>Realizado por </h2>
            <p>
                Jonathan Ruiz Y Cesar Villegas
            </p>
        </div>
        </div>

        <p class="copyright">
            todos los derecos reservados &copy;2023
        </p>
    </footer>
   </body>
</html>