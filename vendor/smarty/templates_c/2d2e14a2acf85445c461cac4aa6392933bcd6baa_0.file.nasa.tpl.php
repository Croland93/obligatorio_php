<?php
/* Smarty version 3.1.29, created on 2016-04-05 02:19:35
  from "D:\wamp\www\tip\ejemplos\clase5\vistas\nasa.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570320b709f8c2_98222212',
  'file_dependency' => 
  array (
    '2d2e14a2acf85445c461cac4aa6392933bcd6baa' => 
    array (
      0 => 'D:\\wamp\\www\\tip\\ejemplos\\clase5\\vistas\\nasa.tpl',
      1 => 1459822767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_570320b709f8c2_98222212 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nasa - Imágen Random</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style type="text/css">
        body {
            margin-top: 50px;
            margin-bottom: 50px;
            background: none;
            color:white;
        }

        .full {
          background: url( <?php echo $_smarty_tpl->tpl_vars['foto']->value->img_src;?>
) no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
        }


    </style>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

</head>

<body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 op">
                <h1>Marte</h1>
                <p>Cámara:<?php echo $_smarty_tpl->tpl_vars['foto']->value->camera->full_name;?>
</p>
                <p>Fecha Terrestre:<?php echo $_smarty_tpl->tpl_vars['foto']->value->earth_date;?>
</p>
                <p>Temperatura: <?php echo $_smarty_tpl->tpl_vars['clima']->value->min_temp;?>
 / <?php echo $_smarty_tpl->tpl_vars['clima']->value->max_temp;?>
 </p>
                <p>Presión: <?php echo $_smarty_tpl->tpl_vars['clima']->value->pressure;?>
</p>
                <p>Estado: <?php echo $_smarty_tpl->tpl_vars['clima']->value->atmo_opacity;?>
</p>
                <p>Humedad: <?php if (isset($_smarty_tpl->tpl_vars['clima']->value->humidity)) {
echo $_smarty_tpl->tpl_vars['clima']->value->atmo_opacity;
} else { ?>0<?php }?></p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
