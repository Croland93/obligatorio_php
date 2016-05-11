<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
        <base href="{$url_base}">
    
    <title>{$proyecto}</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    
  </head>

  <body>
    {include file="cabezal.tpl"}
    <div class="container-fluid">
      <div class="main">
        <h1 class="page-header">Iniciar sesion</h1>
        <div class="col-sm-4  col-md-4"></div>
        <div class="col-sm-3  col-md-3">
          <form method="POST">
            <fieldset class="form-group">
              <label for="Nombre">Nombre</label>
              <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" value=''>
            </fieldset>
            <fieldset class="form-group">
              <label for="Password">Contraseña</label>
              <input type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña" value=''>
            </fieldset>
            <input type="submit" value="Iniciar sesion" class="form-control btn btn-primary">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>