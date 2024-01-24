<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Explorer</title>
    <!-- Librerias de Bootstrap CSS -->
    <link rel="stylesheet" href="../../modules/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <!-- Libreria de Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-fluid">
      <div class="row flex-nowrap">
        <?php
          require_once('../../components/menu.php');
        ?>
        <div class="col py-3">
        <iframe src="https://www.matematicasinclusivas.com/" style="border:0px #ffffff none;" name="myiFrame"
          scrolling="yes" frameborder="1" marginheight="0px" marginwidth="0px" height="750px" width="1240px" allowfullscreen>
        </iframe>
        </div>
      </div>
    </div>
    <!-- Librerias de Bootstrap JavaScript -->
    <script src="../../modules/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</body>
</html>
