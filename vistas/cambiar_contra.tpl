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

    <script>  
    $(document).ready(function() {
      // SUCCESS AJAX CALL, replace "success: false," by:     success : function() { callSuccessFunction() }, 
      
      $("#formID").validationEngine()
    });
  </script>
  </head>

  <body>
    {include file="cabezal.tpl"}
    <div class="container-fluid" style="height: 650px">
      <div class="main">
        <h1 class="page-header">Cambiar contraseña</h1>
        <div class="col-sm-3  col-md-3"></div>
        <div class="col-sm-6  col-md-6">
        {if $msgerror!=''}
        <div class="alert alert-danger" role="alert"><br><p style="text-align: center;">{$msgerror}</p><br></div>
        {/if}
        {if $noform!=''}
        <div class="alert alert-success" role="alert"><br><p style="text-align: center;">{$msgok}</p><br></div>
        {else}
        <form id="formID" class="formular" method="POST" action="">
          <fieldset class="form-group">
            <input type="password" id="old-pass" name="old-pass" class="form-control" placeholder="Contraseña vieja" value=''>
          </fieldset>
          <fieldset class="form-group">
            <input type="password" id="new-pass" name="new-pass" class="form-control validate[required,length[6,30]] text-input" placeholder="Nueva contraseña" value=''>
          </fieldset>
          <fieldset class="form-group">
            <input type="password" id="repass" name="repass" class="form-control validate[required,confirm[new-pass]] text-input" placeholder="Repetir contraseña" value=''>
          </fieldset>
          <input type="submit" value="Cambiar ahora!" class="submit form-control btn btn-primary">
        </form>
        {/if}
        </div>
      </div>
    </div>
    <footer class="footer-distributed">
      <div class="footer-left"> 
        <br>
        <p>Copyrighterino</p>
      </div>
    </div>
  </body>
</html>