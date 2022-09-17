<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>API</title>

<!-- Bootstrap core CSS -->
<link href="views/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="views/assets/sticky-footer-navbar.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"></head>

<body>
<header> 
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="index.php">Consumo api PHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a> </li>
      </ul>
    </div>
  </nav>
  
</header>

<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">LISTAR</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
        <!-- Content Section --> 
        <!-- crud jquery-->
        <div class="da">
            <div class="row">
                <div class="col-md-12">
                <div class="pull-right">
                <button class="btn btn-primary" type="submit" onclick="consultar()">Enviar formulario</button>
                </div>
                </div>
            </div>
        <br>
            <div class="row">
                <div class="col-md-12">
                <div id="records_content">
                    <table class="table">
                        <thead>
                            <th scope="col">codigo</th>
                            <th scope="col">contacto</th>
                            <th scope="col">nombre</th>
                            <th scope="col">fecha</th>
                        </thead>
                        <tbody id="cuerpo">
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
        <!-- /Content Section --> 




<!-- // Modal --> 
<!-- Jquery JS file --> 
<script type="text/javascript" src="views/js/jquery-1.11.3.min.js"></script> 
<!-- Bootstrap JS file --> 
<!-- Custom JS file --> 
<script type="text/javascript" src="views/js/script.js"></script> 
<!-- Fin crud jquery-->
<scriptsrc="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->
<footer class="footer">
  <div class="container"> <span class="text-muted">
    <p>Gustavo Ticora </p>
    </span> </div>
</footer>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<script src="views/dist/js/bootstrap.min.js"></script> 

<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>