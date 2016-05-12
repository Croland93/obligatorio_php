
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

  <body>
    {include file="cabezal.tpl"}
    <!--
    <div class="container-fluid">
      <div class="main">
        <div class="col-sm-3  col-md-3"></div>
          <div class="music-search col-sm-6  col-md-6">
          <form method="POST">
            <div class="form-group">
              <div class="col-md-4"></div>
              <div class="col-md-8">
                <input id="input-buscar" name="input-buscar" placeholder="Ej. Queen" class="form-control input-md" type="search">
                
              </div>
            </div>

            <div class="form-group">
              <label class="control-label" for="btn-buscar"></label>
              <div class="col-md-4">
                <button id="btn-buscar" name="btn-buscar" class="btn btn-primary">Let's Play!</button>
              </div>
            </div>
          </form>
          </div>
      </div>
    </div>
    -->
    <div class="container-fluid">
      <div class="main">
          <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6" style="padding-top: 150px;">
            <h1 class="text-center" style="color: white;">
              Jukebox
            </h1>
              <form role="form">
                <div class="form-group">
                  <input class="form-control" id="search-music" type="text" placeholder="Ej. David Guetta">
                </div>
              
              <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                  <button type="button" class="btn-play btn btn-default btn-block">
                    Let's Play!
                  </button>
                </div>
              </form>
              <div class="col-md-3">
              </div>
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

