<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mattelsa</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <H1><a class="navbar-brand" href="index.php">Mattelsa</a></H1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="registro.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="registro.php">Registro</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="editar.php">Editar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="registro.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="hombre.php">Hombre</a>

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="mujer.php">Mujer</a>
        </div>
      </li>
      
    </ul>
  </div>
</nav>
    </header>

    <main>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <center><img src="img/img1.jpg" class="d-block w-75"></center>
                </div>
                <div class="carousel-item">
                    <center><img src="img/img2.jpg" class="d-block w-75"></center>
                </div>
                <div class="carousel-item">
                    <center><img src="img/img3.jpg" class="d-block w-75"></center>
                </div>
                
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
        </div>

    
        <div class= "container" id="parrafo">
            <div class="row">
                <div class="col-12 col-md-6">
                    Mattelsa es una tienda de ropa fundada en 2006 en Medellín - Colombia. Nuestro concepto de venta es de tienda a puerta cerrada, que para entrar necesitas tocar el timbre. Promovemos el consumo ético y racional sin generar necesidades injustificadas, no tenemos vitrinas y la exhibición de las tiendas se divide en líneas de productos sin maniquís o ventas cruzadas que confundan a la gente y llamen la atención, permitiendo que la compra sea rápida y práctica. No hay estrategias de precios emocionales como los terminados en 999, son precios cerrados y justos, precios que reflejan el verdadero valor de la ropa.

                </div>
                <div class="col-12 col-md-6">
                    Buscamos generar conciencia adoptando posturas que aporten hacia un mundo culto, evolucionado y civilizado donde no haya explotación laboral, donde la gente no discrimine racial, cultural o sexualmente, donde podamos coexistir como especie y con la naturaleza, donde a la educación se le da la importancia que se merece, donde la música y el arte se exploten como instrumentos de expresión y donde a las personas no les de miedo pensar y reflexionar. Un mundo donde seamos conscientes que el problema no son las drogas o el ocio, sino el uso que nuestra falta de cultura y educación les ha dado. 

                </div>


            </div>


        </div>
    
    
    </main>
    
    <footer>
    <div class= "container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <a class="navbar-brand" href="https://github.com/JuanDContreras" target="_blank"><img src="img/icono.png" alt="" width="70" height="70"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
                        </button>
    
                    </div>
                    <div class="col-12 col-md-6">
                        <p>creado por:</br>JUAN    DAVID    CONTRERAS <br> juand.20@live.com</p>
                     
                    </div>
    
    
                </div>
    
    
            </div>
    
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>