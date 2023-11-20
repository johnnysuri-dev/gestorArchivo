<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Navbar Template · Bootstrap v4.6</title>

  
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  

  <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/navbars/">

    <!-- Bootstrap core CSS -->



    <!-- Bootstrap core CSS -->




    
    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">GTRARC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample05">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Gestion de archivos</a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="RegistroAchivos.php">Registro de Archivos</a>
        <a class="dropdown-item" href="ListaArchivos.php">Lista de arhivos</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-md-0">
      <input class="form-control" type="text" placeholder="Search">
    </form>
  </div>
</nav>
<div class="container">

      <div class="row">
        <div class="col-sm-4">  
        </div>
        <div class="col-sm-4">
          <h1>Registro de archivo</h1>
        <form method="post" action="../controlador/crtArchivos.php" >
          <label>Nombre</label>
          <input class="form-control"  type="text" name="nombre"> <br>
          <label>Tama;o</label>
          <input  class="form-control" type="text" name="tam"> <br>
          <label>Descripcion</label>
          <input  class="form-control" type="text" name="descripcion"> <br>
          <label>Direccion</label>
          <input  class="form-control" type="text" name="direccion">

          <label >Categoria</label>
          <select class="form-control" name="categoria" id="">
          <option value="value1">pdf</option>
          <option value="value1">doc</option>
          <option value="value1">imagen</option>
          <option value="value1">zip</option>
          </select>
          <br>
          <label>archivo</label>
          <input class="form-control" type="file" name="nombre">
          <br>
          <button type="submit" name="add_cat" class="btn btn-primary">Guardar</button>
          <input type="button" class="btn btn-info" value="Cancelar">

        </form> 
        </div>

        <div class="col-sm-4">
          
        </div>

      </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




  </body>
</html>
