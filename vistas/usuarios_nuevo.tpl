<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <base href="{$url_base}">
    
    <title>{$proyecto} - Crear cuenta</title>
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8">
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/footer-distributed-with-address-and-phones.css">

    <!-- Javascript personales -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
    <script src="js/jquery.validationEngine.js" type="text/javascript"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="js/validaciones.js" type="text/javascript"></script>
    
  </head>

  <body>
    {include file="cabezal.tpl"}
    <div class="container-fluid" style="height: 700px">
      <div class="main">
        <h1 class="page-header">Cuenta nueva</h1>
        <div class="col-sm-3  col-md-3"></div>
        <div class="col-sm-6  col-md-6">
        {if $mensaje!=''}
        <div class="alert alert-danger" role="alert">{$mensaje}</div>
        {/if}
        <form id="captcha-form" class="formular" method="POST" action="">
          <fieldset class="form-group">
            <label for="Nickname">Nickname</label>
            <input type="text" id="nickname" name="nickname" class="form-control validate[required,custom[noSpecialCaracters],length[0,30]]" placeholder="Nickname" value='' autocomplete="off">
            <div id="nickname_available"></div>
          </fieldset>
          <fieldset class="form-group">
            <label for="Password">Contraseña</label>
            <input type="password" id="pass" name="pass" class="form-control validate[required,length[6,30]] text-input" placeholder="Contraseña" value=''>
          </fieldset><fieldset class="form-group">
            <label for="Password">Repetir contraseña</label>
            <input type="password" id="repass" name="repass" class="form-control validate[required,confirm[pass]] text-input" placeholder="Repetir contraseña" value=''>
          </fieldset>
          <fieldset class="form-group">
            <label for="Email">Email</label>
            <input type="text" id="email" name="email" class="form-control validate[required,custom[email]] text-input" placeholder="Email" value=''>
            <div id="email_available"></div>
          </fieldset>
          <fieldset class="form-group">
            <label for="Remail">Confirmar email</label>
            <input type="text" id="reemail" name="reemail" class="form-control validate[required,confirm[email]] text-input" placeholder="Confirmar email" value='' autocomplete="off">
          </fieldset>
          <br>
          <div class="g-recaptcha" data-sitekey="6Le7sCITAAAAADSD-3kFrVwaAiG9MpyjxCe9saJP"></div>
          <br>
          <input type="submit" value="Comenzar ahora!" class="submit form-control btn btn-primary">
        </form>
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