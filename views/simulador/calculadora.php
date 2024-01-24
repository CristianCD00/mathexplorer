<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Explorer</title>
    <!-- Librerias de Bootstrap CSS -->
    <link rel="stylesheet" href="../../modules/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <!-- Librerias de plotly -->
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <!-- Libreria de Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Libreria de Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.2/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.2/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>    
    <div class="container-fluid">
      <div class="row flex-nowrap">
        <?php
          require_once('../../components/menu.php');
        ?>
        <div class="col py-3">
          <div id="calculadora">
            <div class="container-fluid">
              <div class="row">
                <div class="col-3">
                  <div class="row">
                    <div class="col">
                      <nav class="navbar navbar-light rounded-pill" style="background-color: #ff8000;">
                        <p><h5 style="color: #FFFFFF"><b>SIMULADOR GRÁFICO</b></h5></p>
                      </nav>
                    </div>
                  </div><br/>
                  <div class="row">
                    <div class="col">
                      <label for="exampleFormControlInput1" class="form-label"><b>Primera Ecuación:</b></label>
                      <input type="text" class="form-control" id="ecuacion1" placeholder="Ingrese primera ecuación">
                    </div>
                  </div><br/>
                  <div class="row">
                    <div class="col">
                      <label for="exampleFormControlInput1" class="form-label"><b>Segunda Ecuación:</b></label>
                      <input type="text" class="form-control" id="ecuacion2" placeholder="Ingrese segunda ecuación">
                    </div>
                  </div><br/>
                  <div class="row">
                    <div class="col">
                      <button type="button" class="btn btn-primary rounded-pill" onclick="graficar()"><b>Graficar</b></button>
                      <button type="button" class="btn btn-danger rounded-pill" onclick="reiniciar()"><b>Reiniciar</b></button>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="row">
                    <div class="col">
                      <div id="grafico"></div>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="row">
                    <div class="col">
                      <label for="exampleFormControlInput1" class="form-label"><b>Tablas de Valores:</b></label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div id="tabla1" class="tabla-valores"></div>
                    </div>
                    <div class="col">
                      <div id="tabla2" class="tabla-valores"></div>
                    </div>
                  </div><br/>
                  <div class="row">
                    <div class="col">
                      <label for="exampleFormControlInput1" class="form-label"><b>Resultado:</b></label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div id="resultado-interseccion"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><br/>
          <div class="container-fluid">
            <div class="row">
              <div class="col-3">
                <div class="alert alert-info" role="alert">
                  <p><small><small><small><h5 style="color: #000000">
                    <b>Bienvenido</b> al simulador grafico donde podrás interactuar con ecuaciones lineales y
                    ver su representación gráfica en el plano cartesiano, determinando las respectivas
                    tablas de valores con sus pares ordenados y verificar que clase de solución tiene
                    un sistema de ecuaciones.
                  </h6></small></small></small></p>
                </div>
              </div>
              <div class="col-9">
                <div class="alert alert-info" role="alert">
                  <p><small><small><small><h5 style="color: #000000">
                    <b>Instrucciones:</b><br/>
                    1. Tienes dos cuadros de texto en el que se indica para ingresar la primera y segunda ecuación lineal. Asegúrate que la ecuación lineal este en el formato de <b>“ax+by=c”</b><br/>
                    2. Una vez estén escritas las ecuaciones lineales, presiona en el botón <b>Graficar</b> para visualizar inmediatamente las tablas de valores, la gráfica y la intersección de las rectas.<br/>
                    3. Mostrada la gráfica, al pasar el puntero sobre ella, tienes varias opciones en la parte superior para visualizar de mejor manera la gráfica según tus preferencias.<br/>
                    4. Si gustas probar con otras ecuaciones, puedes presionar en el botón <b>Reiniciar</b> para limpiar los datos. 
                  </h6></small></small></small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Librerias de Bootstrap JavaScript -->
    <script src="../../modules/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <!-- Script para el funcionamiento de la calculadora -->
    <script src="../../controller/script.js"></script>
</body>
</html>
