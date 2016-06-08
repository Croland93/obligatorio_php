
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>

  </head>

  <body style="background: url('../obligatorio_php/public/media/845974.jpg') no-repeat center center fixed;  -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;">
    {include file="cabezal.tpl"}
    <div class="container-fluid">
      <div class="main">
          <div class="row">
            <div class="col-md-3">
            </div>
<<<<<<< HEAD
            <div class="col-md-6" style="padding-top: 150px;">
            <h1 class="text-center" style="color: white;">
              Jukebox
            </h1>
=======
            <div class="col-md-6" style="padding-top: 90px;">
            <!-- <h1 class="text-center" style="color: white;">
              Jukebox
            </h1> -->
              <div align="center"><img src="../obligatorio_php/public/media/logo-jukebox-j.png"></div>
>>>>>>> antonio
              <form role="form" method="post" action="index.php">
                <div class="form-group">
                  <input class="form-control" name="buscar" type="text" placeholder="Ej. David Guetta">
                </div>
              
              <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                  <input type="submit" value="Let's Play!" class="btn-play btn btn-default btn-block">
                </div>
              </form>
              <div class="col-md-3">
              </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  </body>
</html>

