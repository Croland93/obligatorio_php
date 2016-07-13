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
    <script src='https://www.google.com/recaptcha/api.js'></script>

  </head>

  <body>
    {include file="cabezal.tpl"}
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1 edit-lateral-perfil">
        </div>
        <div class="col-md-3 edit-perfil-1">
          <img class="avatar-user" src="{$nickvista->getImg()}" width="150" height="150">
          <h2 id="h2-title">{$usuario_nick}</h2>
          <br>
          <hr id="side-menu">
          <a href="usuario/my_profile/" id="menu-option">Descripción general</a>
          <hr id="side-menu">
          <a href="usuario/edit_profile/" style="color: white; text-decoration: none;">Editar perfil</a>
          <hr id="side-menu">
          <a id="menu-option">Playlists</a>
          <hr id="side-menu">
          <a href="usuario/my_profile/followers" id="menu-option">Siguiendo/Seguidores</a>
          <hr id="side-menu">
          <a href="usuario/logout/" id="menu-option">Cerrar sesión</a>
        </div>
        <div class="col-md-7 edit-perfil-2">
          <div class="col-md-11 desc-gral">
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
            <h3 id="h3-title">Editar perfil</h3>
            <hr id="side-perfil">
            <div class="col-md-5 desc-gral-perfil">
              <h4 id="h4-title">Perfil</h4>
              {if $usuario_apellido!='' || $usuario_nombre!=''}
              <p id="p-profile">¡Nos agrada que te presentes ante la comunidad!</p>
              {else}
              <p id="p-profile">Muestrale al mundo como te llamas y hazte de más amigos con tus mismos gustos musicales.</p>
              {/if}
              <form id="formID" class="formular" method="POST" action="">
                <fieldset class="form-group">
                  {if $usuario_nombre!=''}
                  <h5>Nombre: {$usuario_nombre}</h5>
                  {else}
                  <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" value=''>
                  {/if}
                </fieldset>
                <fieldset class="form-group">
                  {if $usuario_apellido!=''}
                  <h5>Apellido: {$usuario_apellido}</h5>
                  {else}
                  <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" value=''>
                  {/if}
                </fieldset>
                {if $usuario_nombre!='' && $usuario_apellido!=''}
                {else}
                <button type="submit" class="submit form-control btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
                <br>
                {/if}
                <br>
              </form>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 desc-gral-perfil">
              <h4 id="h4-title">Datos de cuenta</h4>
              <h5>Cambiar correo</h5>
              <hr>
              <p id="p-profile">Recuerda de ingresar un correo válido, de lo contrario no podrás validar tu cuenta.</p>
              <form id="formID2" class="formular" method="POST" action="">
              <fieldset class="form-group">
                  <input type="text" id="oldemail" name="oldemail" class="form-control" placeholder="Email actual" value=''>
                </fieldset>
                <fieldset class="form-group">
                  <input type="text" id="email" name="email" class="form-control" placeholder="Nuevo email" value=''>
                </fieldset>
                <fieldset class="form-group">
                  <input type="text" id="reemail" name="reemail" class="form-control" placeholder="Confirmar email" value='' autocomplete="off">
                </fieldset>
                <button type="submit" class="submit form-control btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
              </form>
              <br>
              <h5>Cambiar contraseña</h5>
              <hr>
              <form id="captcha-form" class="formular" method="POST" action="">
                <p id="p-profile">Para cambiar tu contraseña se te enviará un correo de confirmación para que puedas completar esta acción.</p>
                <br>
                <div class="g-recaptcha" data-sitekey="6Le7sCITAAAAADSD-3kFrVwaAiG9MpyjxCe9saJP"></div>
                <br>
                <button type="submit" class="submit btn btn-warning"><span class="glyphicon glyphicon-envelope"></span> Solicitar cambio</button>
              </form>
              <br>
              <br>
            </div>
          </div>
        </div>
        <div class="col-md-1 edit-lateral-perfil">
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