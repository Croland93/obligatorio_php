<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <base href="{$url_base}">
    
<<<<<<< HEAD
<<<<<<< HEAD
    <title>{$proyecto}</title>

=======
    <title>{$proyecto} - Crear cuenta</title>
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8">
    
>>>>>>> antonio
=======
    <title>{$proyecto} - Crear cuenta</title>
    <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8">
    
>>>>>>> Matias
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
    <link rel="stylesheet" type="text/css" href="css/footer-distributed-with-address-and-phones.css">
>>>>>>> Matias

    <!-- Javascript personales -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
    <script src="js/jquery.validationEngine.js" type="text/javascript"></script>

    <script>  
    $(document).ready(function() {
      // SUCCESS AJAX CALL, replace "success: false," by:     success : function() { callSuccessFunction() }, 
      
      $("#formID").validationEngine()
    });
<<<<<<< HEAD
    
    // JUST AN EXAMPLE OF VALIDATIN CUSTOM FUNCTIONS : funcCall[validate2fields]
    function validate2fields(){
      if($("#nombre").val() =="" || $("#apellido").val() == ""){
        return true;
      }else{
        return false;
      }
    }
  </script>
>>>>>>> antonio
=======
  </script>

  <script type="text/javascript">
  {literal}
  $(document).ready(function(){
    $('#nickname').keyup(function(){
      var nick = $('#nickname').val();
      if (nick!=''){
        $.post('/obligatorio_php/usuario/check', {nickname:nick}, 
          function(result){
            console.log(result);
            $('#nickname_available').html(result);
        }); 
      } else {
        $('#nickname_available').html('');
      } 
    });
  });
  {/literal}
  </script>

    <script type="text/javascript">
  {literal}
  $(document).ready(function(){
    $('#email').keyup(function(){
      var e = $('#email').val();
      if (e!=''){
        $.post('/obligatorio_php/usuario/check', {email:e}, 
          function(result){
            console.log(result);
            $('#email_available').html(result);
        }); 
      } else {
        $('#email_available').html('');
      } 
    });
  });
  {/literal}
  </script>
>>>>>>> Matias
    
  </head>

  <body>
    {include file="cabezal.tpl"}
    <div class="container-fluid" style="height: 650px">
      <div class="main">
<<<<<<< HEAD
<<<<<<< HEAD
        <h1 class="page-header">Crear usuario</h1>
=======
        <h1 class="page-header">Cuenta nueva</h1>
>>>>>>> antonio
=======
        <h1 class="page-header">Cuenta nueva</h1>
>>>>>>> Matias
        {if $mensaje!=''}
        {$mensaje}
        {/if}
        <div class="col-sm-3  col-md-3"></div>
        <div class="col-sm-6  col-md-6">
<<<<<<< HEAD
<<<<<<< HEAD
        <form method="POST">
=======
        <form id="formID" class="formular" method="POST" action="">
>>>>>>> Matias
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
<<<<<<< HEAD
          <input type="submit" value="Comenzar ahora!" class="form-control btn btn-primary">
=======
        <form id="formID" class="formular" method="POST" action="">
          <fieldset class="form-group">
            <label for="Nickname">Nickname</label>
            <input type="text" id="nickname" name="nickname" class="form-control validate[required,custom[noSpecialCaracters],length[0,30]]" placeholder="Nickname" value=''>
          </fieldset>
          <fieldset class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control validate[required,custom[onlyLetter],length[0,30]] text-input" placeholder="Nombre" value=''>
          </fieldset>
          <fieldset class="form-group">
            <label for="Apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" class="form-control validate[required,custom[onlyLetter],length[0,30]] text-input" placeholder="Apellido" value=''>
          </fieldset>
          <fieldset class="form-group">
            <label for="Password">Contraseña</label>
            <input type="password" id="pass" name="pass" class="form-control validate[required,length[6,30]] text-input" placeholder="Contraseña" value=''>
          </fieldset><fieldset class="form-group">
            <label for="Password">Repetir contraseña</label>
            <input type="password" id="repass" name="repass" class="form-control validate[required,confirm[password]] text-input" placeholder="Repetir contraseña" value=''>
          </fieldset>
          <fieldset class="form-group">
            <label for="Email">Email</label>
            <input type="text" id="email" name="email" class="form-control validate[required,custom[email]] text-input" placeholder="Email" value=''>
          </fieldset>
          <fieldset class="form-group">
            <label for="Remail">Confirmar email</label>
            <input type="text" id="reemail" name="reemail" class="form-control validate[required,confirm[email]] text-input" placeholder="Confirmar email" value=''>
          </fieldset>
          <input type="submit" value="Comenzar ahora!" class="submit form-control btn btn-primary">
>>>>>>> antonio
=======
          <fieldset class="form-group">
            <label for="Remail">Confirmar email</label>
            <input type="text" id="reemail" name="reemail" class="form-control validate[required,confirm[email]] text-input" placeholder="Confirmar email" value='' autocomplete="off">
          </fieldset>
          <input type="submit" value="Comenzar ahora!" class="submit form-control btn btn-primary">
>>>>>>> Matias
        </form>
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