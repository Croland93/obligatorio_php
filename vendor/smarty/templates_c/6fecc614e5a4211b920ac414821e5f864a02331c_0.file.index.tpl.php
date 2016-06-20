<?php
/* Smarty version 3.1.29, created on 2016-06-14 01:17:02
  from "E:\wamp64\www\obligatorio_php\vistas\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575f5b0e7ce013_75590893',
  'file_dependency' => 
  array (
    '6fecc614e5a4211b920ac414821e5f864a02331c' => 
    array (
      0 => 'E:\\wamp64\\www\\obligatorio_php\\vistas\\index.tpl',
      1 => 1465866927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_575f5b0e7ce013_75590893 ($_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">
    
    <title><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/funciones.js"><?php echo '</script'; ?>
>

  </head>

  <body style="background: url('../obligatorio_php/public/media/845974.jpg') no-repeat center center fixed;  -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container-fluid">
      <div class="main" style="height: 614px;>
          <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6" style="padding-top: 90px;">
            <!-- <h1 class="text-center" style="color: white;">
              Jukebox
            </h1> -->
              <div align="center"><img src="../obligatorio_php/public/media/logo-jukebox-j.png"></div>
              <form role="form" method="post" action="index.php">
                <div class="form-group">
                  <input class="form-control" name="buscar" type="text" placeholder="Ej. David Guetta">
                </div>
              
              <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                  <input type="submit" value="Let's Play!" class="btn-play btn btn-default btn-block">
                </div>
              </form>
              <div class="col-md-3">
              </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
      </div>
    </div>
    <footer class="footer-distributed">
      <div class="footer-left">  
        <br>
        <p>Copyrighterino</p>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>

  </body>
</html>

<?php }
}
