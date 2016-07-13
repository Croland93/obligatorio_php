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
      function deleteConfirmation(userID){
        var respuesta = confirm("¿Realmente deseas eliminar tu cuenta? Si aceptas no hay vuelta atrás :(");
        if (respuesta){
          $.ajax({
            type: 'POST',
            url: 'usuario/my_profile/borrar/'+userID
            })
          window.location.href="index/home/";
        } else {
          alert("Muchas gracias por quedarte con nosotros :)");
        }
      }

    </script>

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
          <a href="usuario/my_profile/" style="color: white; text-decoration: none;">Descripción general</a>
          <hr id="side-menu">
          <a href="usuario/edit_profile/" id="menu-option">Editar perfil</a>
          <hr id="side-menu">
          <a id="menu-option">Playlists</a>
          <hr id="side-menu">
          <a href="usuario/my_profile/followers" id="menu-option">Siguiendo/Seguidores</a>
          <hr id="side-menu">
          <a href="usuario/logout/" id="menu-option">Cerrar sesión</a>
        </div>
        <div class="col-md-7 perfil-2">
          <div class="col-md-11 desc-gral">
            <h3 id="h3-title">Descripción general</h3>
            <hr id="side-perfil">
            <div class="col-md-6 desc-gral-perfil">
              {if $msgerror!=''}
              <div class="col-md-12 error-message"><br>{$msgerror}</div>
              <br>
              <br>
              {/if}
              {if $msgerror_two!=''}
              <div class="col-md-12 error-message"><br>{$msgerror_two}</div>
              {/if}
              {if $msgok!=''}
              <div class="col-md-12 ok-message"><br>{$msgok}</div>
              <br>
              <br>
              {/if}
              {if $msgok_two!=''}
              <div class="col-md-12 ok-message"><br>{$msgok_two}</div>
              {/if}
              <h4 id="h4-title">Perfil</h4>
              <h5>Nombre</h5>
              {if $usuario_nombre==''}
              <p id="p-profile">Nombre no declarado</p>
              {else}
              <p id="p-profile">{$usuario_nombre}</p>
              {/if}
              <h5>Apellido</h5>
              {if $usuario_apellido==''}
              <p id="p-profile">Apellido no declarado</p>
              {else}
              <p id="p-profile">{$usuario_apellido}</p>
              {/if}
              <h5>Correo electrónico</h5>
              <p id="p-profile">{$usuario_email}</p>
              <h5>ID Cuenta</h5>
              <p id="p-profile">{$usuario_id}</p>
              <br>
              <a href="usuario/edit_profile/" class="btn btn-block btn-edit-perfil"><span class="glyphicon glyphicon-edit"></span> Editar perfil</a>
              <br>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 extra-perfil">
              <h4 id="h4-title">Imagen</h4>
              <h5 style="text-align: center;">Avatar actual</h5>
              <img class="show-perfil" src="{$nick->getImg()}" width="100" height="100">
              <br>
              <a href="usuario/avatar_change/" class="btn btn-block btn-edit-perfil"><span class="glyphicon glyphicon-camera"></span> Cambiar</a>
              <br>
            </div>
            <div class="col-md-12 danger-zone">
              <h4 id="h4-danger">Zona de peligro</h4>
              <h5>Eliminar cuenta</h5>
              <p id="p-profile">Si desea eliminar su cuenta, proceda con el siguiente botón, pero recuerde que todas sus listas de reproducciones (playlists) y preferencias serán eliminadas juntos con ella. ¿Realmente desea eliminar su cuenta?</p>
              <a href="javascript:deleteConfirmation({$nick->getId()})" class="btn btn-primary btn-danger"><span class="glyphicon glyphicon-warning-sign"></span> Eliminar cuenta</a>
              <br>
              <br>
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