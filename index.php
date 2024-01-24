<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Explorer</title>
    <!-- Librerias de Bootstrap CSS -->
    <link rel="stylesheet" href="modules/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <!-- Libreria de Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
      <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: #C8C8C8;">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <div>
                        <img src="recursos/LOGOI.png" width="215" height="115">
                    </div>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li>
                        <a href="#submenu0" data-bs-toggle="collapse" class="nav-link align-middle px-0">
                          <span class="ms-1 d-none d-sm-inline" style="color: #07477D">
                          <i class="fas fa-user-circle"></i>
                          <b>INICIO</b></span>
                        </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu0" data-bs-parent="#menu">
                          <li class="w-100">
                              <a href="views/inicio/bienvenida.php" class="nav-link px-0" style="color: #07477D"><span class="d-none d-sm-inline">Bienvenida</span></a>
                          </li>
                          <li>
                              <a href="views/inicio/sAutor.php" class="nav-link px-0" style="color: #07477D"><span class="d-none d-sm-inline">Sobre el Autor</span></a>
                          </li>
                          <li>
                              <a href="views/inicio/cPrevios.php" class="nav-link px-0" style="color: #07477D"><span class="d-none d-sm-inline">Conocimientos Previos</span></a>
                          </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                          <span class="ms-1 d-none d-sm-inline" style="color: #07477D">
                          <i class="fas fa-book-open"></i>
                          <b>TEORÍA</b></span>
                        </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="views/teoria/definicion.php" class="nav-link px-0" style="color: #07477D"><span class="d-none d-sm-inline">Definición</span></a>
                            </li>
                            <li>
                                <a href="views/teoria/mIgualacion.php" class="nav-link px-0" style="color: #07477D"><span class="d-none d-sm-inline">Método de Igualación</span></a>
                            </li>
                            <li>
                                <a href="views/teoria/mSustitucion.php" class="nav-link px-0" style="color: #07477D"><span class="d-none d-sm-inline">Método de Sustitución</span></a>
                            </li>
                            <li>
                                <a href="views/teoria/mReduccion.php" class="nav-link px-0" style="color: #07477D"><span class="d-none d-sm-inline">Método de Reducción</span></a>
                            </li>
                            <li>
                                <a href="views/teoria/mGrafico.php" class="nav-link px-0" style="color: #07477D"><span class="d-none d-sm-inline">Método Grafico</span></a>
                            </li>
                            <li>
                                <a href="views/teoria/pSistemas.php" class="nav-link px-0" style="color: #07477D"><span class="d-none d-sm-inline">Problemas de Sistemas</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                          <span class="ms-1 d-none d-sm-inline" style="color: #07477D">
                          <i class="fas fa-brain"></i>
                          <b>PRÁCTICA</b></span>
                        </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li>
                                <a href="views/practica/cFundamentales.php" class="nav-link px-0" style="color: #07477D"><span class="d-none d-sm-inline">Conceptos Fundamentales</span></a>
                            </li>
                            <li>
                                <a href="views/practica/practica1.php" class="nav-link px-0" style="color: #07477D"><span class="d-none d-sm-inline">Practica N°1</span></a>
                            </li>
                            <li>
                                <a href="views/practica/practica2.php" class="nav-link px-0" style="color: #07477D"><span class="d-none d-sm-inline">Practica N°2</span></a>
                            </li>
                            <li>
                                <a href="views/practica/practica3.php" class="nav-link px-0" style="color: #07477D"><span class="d-none d-sm-inline">Practica N°3</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                          <span class="ms-1 d-none d-sm-inline" style="color: #07477D">
                          <i class="fas fa-atom"></i>
                          <b>SIMULADOR</b></span>
                        </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="views/simulador/calculadora.php" class="nav-link px-0" style="color: #07477D"><span class="d-none d-sm-inline">CALCULADORA GRAFICA</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <span class="ms-1 d-none d-sm-inline" style="color: #07477D">
                            <i class="fas fa-gamepad"></i>
                            <b>JUEGOS</b></span>
                        </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="views/juegos/preguntas.php" class="nav-link px-0" style="color: #07477D"><span class="d-none d-sm-inline">PREGUNTADOS</span></a>
                            </li>
                            <li class="w-100">
                                <a href="views/juegos/unaA.php" class="nav-link px-0" style="color: #07477D"><span class="d-none d-sm-inline">UNA GRAN AMENAZA</span></a>
                            </li>
                            <li class="w-100">
                                <a href="views/juegos/mentalM.php" class="nav-link px-0" style="color: #07477D"><span class="d-none d-sm-inline">MENTAL MATH</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="views/recursosA/recursos.php" class="nav-link px-0 align-middle">
                          <span class="ms-1 d-none d-sm-inline" style="color: #07477D">
                          <i class="far fa-copy"></i>
                          <b>RECURSOS ADICIONALES</b></span>
                        </a>
                    </li>
                    <li>
                        <a href="views/encuesta/encuesta.php" class="nav-link px-0 align-middle">
                          <span class="ms-1 d-none d-sm-inline" style="color: #07477D">
                          <i class="fas fa-smile-wink"></i>
                          <b>ENCUESTA DE SATISFACCIÓN</b></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div style="position: relative; width: 100%; height: 0; padding-top: 60%;
              padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
              border-radius: 8px; will-change: transform;">
              <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                  src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAF3XLN0agk&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
              </iframe>
            </div>
        </div>
      </div>
    </div>
    <!-- Librerias de Bootstrap JavaScript -->
    <script src="modules/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</body>
</html>
