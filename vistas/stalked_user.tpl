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

    <script type="text/javascript">
      function subscribeTo(nickStalked,idStalked){
        var respuesta = confirm("¿Desea suscribirse a este usuario?");
        if (respuesta){
          $.ajax({
            type: 'POST',
            url: 'usuario/profile/'+nickStalked+'/subscribe'
            })
          window.location.href="index/home/";
        } else {
          alert("No se suscribio");
        }
      }
    </script>

  </head>

  <body style="background-color: #696969;">
    {include file="cabezal.tpl"}
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1 lateral-stalked_profile">
        </div>
        <div class="col-md-10">
          <div class="col-md-12 logo-jukebox-stalked">
            <img class="jukebox-stalked_logo" src="public/media/logo-jukebox-letras-2.png">
          </div>
          <div class="col-md-5 stalked-perfil-1" style="background-color: rgba(0, 61, 86, 1); height: 500px;">
            <img class="avatar-stalked-user" src="{$stalked_user_data->getImg()}" width="300" height="300">
          </div>
          <div class="col-md-7 stalked-perfil-1" style="background-color: rgba(0, 61, 86, 1); height: 500px;">
            <br>
            <br>
            <h1 id="h1-stalked">{$stalked_user_data->getNick()}</h1>
            <hr>
            <h4 id="h4-stalked">Nombre</h4>
            {if $stalked_user_data->getNombre()==''}
            <p id="p-stalked">Nombre no declarado</p>
            {else}
            <p id="p-stalked">{$stalked_user_data->getNombre()}</p>
            {/if}
            <h4 id="h4-stalked">Apellido</h4>
            {if $stalked_user_data->getApellido()==''}
            <p id="p-stalked">Apellido no declarado</p>
            {else}
            <p id="p-stalked">{$stalked_user_data->getApellido()}</p>
            {/if}
            <h4 id="h4-stalked">Correo electrónico</h4>
            <p id="p-stalked">{$stalked_user_data->getEmail()}</p>
            <br>
            <br>
            <a href="javascript:subscribeTo('{$stalked_user_data->getNick()}')" class="btn btn-primary btn-warning" style="float: right; margin-right: 20px;" {$disponible}><span class="glyphicon glyphicon-user"></span> {$disponible_two}</a>
          </div>
        </div>
        <div class="col-md-1 lateral-stalked_profile">
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

  </body>
</html>