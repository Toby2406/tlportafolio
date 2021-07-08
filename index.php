<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Portafolio</title>
  <link rel="stylesheet" href="Css/estilos.css?v=<?php echo time();?>">
  <!--BOOSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300&display=swap" rel="stylesheet">
  <!--icon-->
  <script src="https://kit.fontawesome.com/43d58409e2.js" crossorigin="anonymous"></script>
  <!--Querry-->
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <!--JS-->
  <script src="JS/script.js?v=<?php echo time();?>"></script>
  <!--SWEET-->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<script type="text/javascript">
  NavBar();
</script>
<?php
  session_start();
  error_reporting(0);
 ?>
<body id="index">
<div class="nav_bar">
  <div class="hidden">
    <a href="#" class="nav_menu"><span><i class="fas fa-th-list"></i></span></a>
  </div>
  <nav>
    <ul>
      <li>
        <h5>Logo</h5>
      </li>
      <li><a href="#home" class="menuItems" data-url="home">Home</a></li>
      <li><a href="#about" class="menuItems" data-url="about">About</a></li>
      <li><a href="#portafolio" class="menuItems" data-url="portafolio">Portafolio</a></li>
      <li><a href="#contact" class="menuItems" data-url="contact">Contact</a></li>
    </ul>
  </nav>
</div>
<!--Sidebar-->
<div class="izq col-sm-1" id="izq">
  <ul>
    <li class="items"><i class="fab fa-facebook-f"></i>facebook</li>
    <li class="items"><i class="fab fa-linkedin-in"></i>linkedin</li>
  </ul>
</div>
<!--Contenido--->
  <header class="container datos" >
      <!--Seccion 1 -->
      <section name="home" class="seccion" id="home">
        <div class="row">
          <!--Nombre, apellido y profesion-->
          <div class="col-md-6">
            <div class="text">
              <h4>Tobías Luna</h4>
                <div class="texto_entrada">
                  <p>Diseñador web<p>
                  <p id="text_descripcion">
                    Desarrollo web Font-End y Back-End para su comercio o empresa.

                  </p>
                </div>
            </div>
          </div>
          <!--col-->
          <!--img-->
          <div class="col-md-6 center">

            <div class="mundo">
              <a href="#">
                <div class="texto_mundo">
                  <h5 id="TM">Contactar.Contactar.Contactar.</h5>
                </div>
              </a>
            </div>

          </div>
          <!--col-->
        </div>
        <!--row-->
      </section>
      <!--Fin seccion 1-->

      <!--Seccion 2-->
      <section name="about" class="seccion" id="about">
        <div class="row">

          <div class="col-md-4  Presentacion">
            <h4>Sobre mi</h4>
              <div class="blur">
                <p>
                  Hola, me presento soy un joven desarrollador con iniciativa de seguir aprendiendo
                  cada día mas y poder progresar en mis conocimientos. Mi enfoque está en el Back-End,
                  con el uso de base de datos y las funcionalidades de la web para hacerla más dinámica
                  al usuario.
                </p>
              </div>
          </div><!--Presentacion-->

          <div class="col-md-7 estudios">
              <h4>Estudios</h4>
              <div class="HTML progreso"></div>
              <div class="CSS progreso"></div>
              <div class="JS progreso"></div>
              <div class="PHP progreso"></div>
              <div class="SQL progreso"></div>
          </div>

        </div><!--Row-->
      </section>
      <!--Fin seccion 2-->

      <!--Seccion 3-->
      <section name="portafolio" class="seccion" id="portafolio">

        <div class="text_trabajos">
          <h4>Trabajos</h4>
        </div>
        <div class="trabajos">
        <figure>
          <a href="#" target="_blank">
            <img src="img/img_1.png" alt="">
            <div class="hover">
              <h3>Historia clinica digital</h3>
              <p>Historia clínica digital
                diseñado para el móvil de la mujer</p>
            </div>
          </a>
        </figure>
        </div>

        <div class="trabajos">
          <figure>
            <a href="https://camasyotosmc.000webhostapp.com/" target="_blank">
              <img src="img/img_2.png" alt="">
              <div class="hover">
                <h3>MC</h3>
                <p>Proyecto creado para la venta
                  de productos en línea para
                   una tienda de camas y muebles</p>
              </div>
            </a>
          </figure>
        </div>

      </section>
      <!--Fin seccion 3-->


      <!--Seccin 4-->
      <section name="contact" class="seccion" id="contact">
        <div class="contacto">
          <h4 class="text_contacto">Contacto</h4>
              <form method="post">
                <div>
                  <input id="nombre" type="text" name="nombre" value="<?php echo $_SESSION['nombre']; ?>" required>
                  <label for="nombre">Nombre</label>
                  <p id="nombre_text" class="correcto">Controle que el campo no este vacio</p>

                </div>

                <div>
                  <input id="correo" type="text" name="correo" value="<?php echo $_SESSION['correo']; ?>" required>
                  <label for="correo">Correo</label>
                  <p id="correo_text" class="correcto">Controle lo ingresado</p>

                </div>

                <div>
                  <input id="asunto" type="text" name="asunto" value="<?php echo $_SESSION['asunto']; ?>" required>
                  <label for="asunto">Asunto</label>
                  <p id="asunto_text" class="correcto">Controle lo ingresado</p>

                </div>

                <div>
                  <textarea id="mensaje" name="mensaje" required></textarea>
                  <label for="mensake">Mensaje</label>
                  <p id="mensaje_text" class="correcto">Este campo no puede estar vacio</p>
                </div>

                <input type="submit" name="btn_enviar" value="Enviar">
              </form>
        </div>
      </section>
      <!--fin Seccin 3-->
  </header>
  <footer class="izq_bottom">
    <div class="contenedor">
      <h2 id="title_contenedor">Contacta conmigo</h2>
    </div>
    <div class="redes">
      <a><i class="fab fa-facebook-f"></i></a>
      <a><i class="fab fa-linkedin-in"></i></a>
    </div>
  </footer>
  <?php
    require_once("php/admin.php");
    $c  = new Admin;
    $c->Enviar();
   ?>
</body>
<!--JS-->
<script>
  TextoMundo();
</script>
<!--BOOSTRAP JS-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>
