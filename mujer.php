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
    <?php

    include("BaseDatos.php");

    $transaccion=new BaseDatos();

    $consultaSQL="SELECT * FROM `productos` WHERE genero = 'f'";

    $productos=$transaccion->consultarDatos($consultaSQL);



    //print_r($productos)

    ?>
    

    <div class="container">

        <div class="row row-cols-1 row-cols-md-5">
        
        <?php foreach($productos as $producto): ?>

            

            <div class="col mb-4">
                <div class="card h-100">
                    
                        <img src="<?= ($producto["imagen"])?>" class="card-img-top" alt="fotocard">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo($producto["nombre"]) ?></h5>
                        <p class="card-text"><?= $producto["descripcion"] ?></p>
                        <h5 class="card-title"><?php echo($producto["precio"]) ?></h5>

                    
                    
                    
                    
                    
                    </div> 
                </div>
                

            
            </div>
            
           

        <?php endforeach ?>
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