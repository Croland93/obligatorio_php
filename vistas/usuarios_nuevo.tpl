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
        <h1 class="page-header">Cuenta nueva</h1>
        {if $mensaje!=''}
        {$mensaje}
        {/if}
        <div class="col-sm-3  col-md-3"></div>
        <div class="col-sm-6  col-md-6">
        <form method="POST">
          <fieldset class="form-group">
            <label for="Nickname">Nickname</label>
            <input type="text" id="nickname" name="nickname" class="form-control" placeholder="Nickname" value='' required>
          </fieldset>
          <fieldset class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" value='' required>
          </fieldset>
          <fieldset class="form-group">
            <label for="Apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido" value='' required>
          </fieldset>
          <fieldset class="form-group">
            <label for="Password">Contraseña</label>
            <input type="password" id="pass" name="pass" minlength="6" class="form-control" placeholder="Contraseña" value='' required>
          </fieldset><fieldset class="form-group">
            <label for="Password">Repetir contraseña</label>
            <input type="password" id="repass" name="repass" minlength="6" class="form-control" placeholder="Repetir contraseña" value='' required>
          </fieldset>
          <fieldset class="form-group">
            <label for="Email">Email</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Email" value='' required>
          </fieldset>
          <input type="submit" value="Comenzar ahora!" class="form-control btn btn-primary">
        </form>
        </div>
      </div>
    </div>
  </body>
</html>