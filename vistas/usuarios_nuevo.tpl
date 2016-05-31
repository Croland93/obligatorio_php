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
    <link href="css/check-disponible.css" rel="stylesheet">

    <!-- Javascript personales -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
    <script src="js/jquery.validationEngine.js" type="text/javascript"></script>

    <script>  
    $(document).ready(function() {
      // SUCCESS AJAX CALL, replace "success: false," by:     success : function() { callSuccessFunction() }, 
      
      $("#formID").validationEngine()
    });
  </script>

  <script type="text/javascript">
  {literal}
  $(document).ready(function(){
    $('#nickname').keyup(function(){
      var nick = $('#nickname').val();
      if (nick!=''){
        $.post('/obligatorio_php/check.php', {nickname:nick}, 
          function(result){
            console.log(result);
            $('#disponible').html(result);
        }); 
      } else {
        $('#disponible').html('');
      } 
    });
  });
  {/literal}
  </script>
    
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
        <form id="formID" class="formular" method="POST" action="">
          <fieldset class="form-group">
            <label for="Nickname">Nickname</label>
            <input type="text" id="nickname" name="nickname" class="form-control validate[required,custom[noSpecialCaracters],length[0,30]]" placeholder="Nickname" value='' autocomplete="off">
            <div id="disponible"></div>
          </fieldset>
          <fieldset class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control validate[custom[onlyLetter],length[0,30]] text-input" placeholder="Nombre" value=''>
          </fieldset>
          <fieldset class="form-group">
            <label for="Apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" class="form-control validate[custom[onlyLetter],length[0,30]] text-input" placeholder="Apellido" value=''>
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
          </fieldset>
          <fieldset class="form-group">
            <label for="Remail">Confirmar email</label>
            <input type="text" id="reemail" name="reemail" class="form-control validate[required,confirm[email]] text-input" placeholder="Confirmar email" value='' autocomplete="off">
          </fieldset>
          <input type="submit" value="Comenzar ahora!" class="submit form-control btn btn-primary">
        </form>
        </div>
      </div>
    </div>
  </body>
</html>