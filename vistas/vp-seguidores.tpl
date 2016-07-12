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
    <link href="css/perfil-user.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/footer-distributed-with-address-and-phones.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  </head>

  <body>
    {include file="cabezal.tpl"}
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1 lateral-perfil">
        </div>
        <div class="col-md-3 perfil-1">
          <img class="avatar-user" src="{$nick->getImg()}" width="150" height="150">
          <h2 id="h2-title">{$usuario_nick}</h2>
          <br>
          <hr id="side-menu">
          <a href="usuario/my_profile/" id="menu-option">Descripción general</a>
          <hr id="side-menu">
          <a href="usuario/edit_profile/" id="menu-option">Editar perfil</a>
          <hr id="side-menu">
          <a id="menu-option">Playlists</a>
          <hr id="side-menu">
          <a href="usuario/followers/" style="color: white; text-decoration: none;">Siguiendo/Seguidores</a>
          <hr id="side-menu">
          <a href="usuario/logout/" id="menu-option">Cerrar sesión</a>
        </div>
        <div class="col-md-7 perfil-2">
          <div class="col-md-11 desc-gral">
            <div class="col-md-5 desc-gral-perfil">
              <h4 id="h4-title">Seguidores</h4>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1"></div>
            <div class="col-md-5 extra-perfil">
              <h4 id="h4-title">Siguiendo</h4>
            </div>
          </div>
        </div>
        <div class="col-md-1 lateral-perfil">
        </div>
      </div>
    </div>
    <footer class="footer-distributed">
      <div class="footer-left"> 
        <br>
        <a id="copyright">Copyrighterino</a>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  </body>
</html>