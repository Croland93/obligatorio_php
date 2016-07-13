
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="{$url_base}">
    <meta charset="utf-8">
    
    <title>{$proyecto}</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/footer-distributed-with-address-and-phones.css">
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    
  </head>

  <body>
    {include file="cabezal.tpl"}
    <div class="container-fluid" style="height: 600px;">
      <div class="main">
        <h1 class="page-header">Login</h1>
        <div class="row">
          <div class="col-md-3">
          </div>
          <div class="col-md-6">
          <form class="form-signin" method="POST" >
            {if $mensaje!=""}
            <div class="alert alert-danger" role="alert">{$mensaje}</div>
            {/if}
            <fieldset class="form-group">
              <label for="Email">Correo electrónico</label>
              <input type="text" id="email" name="email" class="form-control" placeholder="Email">
              <div id="email_available"></div>
            </fieldset>
            <fieldset class="form-group">
              <label for="Password">Contraseña</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña">
            </fieldset>
            
            <button class="submit form-control btn btn-primary" type="submit">Ingresar</button>
            <br><br>
            <p style="text-align: center;">¿Aún no tienes cuenta? <a href="usuario/nuevo/">Registrate aqui!</a></p>

          </form>
          </div>
          <div class="col-md-3">
          </div>
        </div>
      </div>
    </div>
    <footer class="footer-distributed">
      <div class="footer-left"> 
        <br>
        <p>Copyrighterino</p>
      </div>
    </footer>
  </body>
</html>

