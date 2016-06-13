<?php
/* Smarty version 3.1.29, created on 2016-06-01 23:24:36
  from "E:\wamp64\www\obligatorio_php\vistas\artists.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574f6eb4032256_16584036',
  'file_dependency' => 
  array (
    '45d0b0ecb4760d256073265d3cb5ec47dbe265f4' => 
    array (
      0 => 'E:\\wamp64\\www\\obligatorio_php\\vistas\\artists.tpl',
      1 => 1464823468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_574f6eb4032256_16584036 ($_smarty_tpl) {
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
    

    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.4.2.min.js"><?php echo '</script'; ?>
>




  </head>

  <body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



              <?php
$_from = $_smarty_tpl->tpl_vars['listart']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_artistas_0_saved_item = isset($_smarty_tpl->tpl_vars['artistas']) ? $_smarty_tpl->tpl_vars['artistas'] : false;
$_smarty_tpl->tpl_vars['artistas'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['artistas']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['artistas']->value) {
$_smarty_tpl->tpl_vars['artistas']->_loop = true;
$__foreach_artistas_0_saved_local_item = $_smarty_tpl->tpl_vars['artistas'];
?>
                artista
              <?php
$_smarty_tpl->tpl_vars['artistas'] = $__foreach_artistas_0_saved_local_item;
}
if ($__foreach_artistas_0_saved_item) {
$_smarty_tpl->tpl_vars['artistas'] = $__foreach_artistas_0_saved_item;
}
?>


          hola

          
              <?php
$_from = $_smarty_tpl->tpl_vars['listart']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_artistas_1_saved_item = isset($_smarty_tpl->tpl_vars['artistas']) ? $_smarty_tpl->tpl_vars['artistas'] : false;
$_smarty_tpl->tpl_vars['artistas'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['artistas']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['artistas']->value) {
$_smarty_tpl->tpl_vars['artistas']->_loop = true;
$__foreach_artistas_1_saved_local_item = $_smarty_tpl->tpl_vars['artistas'];
?>

              <?php
$_from = $_smarty_tpl->tpl_vars['artistas']->value[0];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_name_2_saved_item = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['name']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
$__foreach_name_2_saved_local_item = $_smarty_tpl->tpl_vars['name'];
?>
                  <div class="cover">
                  <ul>
       
              <a class="btn btn-default" href="javascript:cargarvideo('<?php echo $_smarty_tpl->tpl_vars['videos']->value['id']['videoId'];?>
')" ><span class="glyphicon glyphicon-play"></span> <?php echo $_smarty_tpl->tpl_vars['name']->value['nombre'];?>
 </a>    
           
                  
                  </ul>
                  <ul>
                  <?php echo $_smarty_tpl->tpl_vars['artistas']->value['imagen'];?>

                  </ul>
                  </div>
                  <?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_2_saved_local_item;
}
if ($__foreach_name_2_saved_item) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_2_saved_item;
}
?>
              <?php
$_smarty_tpl->tpl_vars['artistas'] = $__foreach_artistas_1_saved_local_item;
}
if ($__foreach_artistas_1_saved_item) {
$_smarty_tpl->tpl_vars['artistas'] = $__foreach_artistas_1_saved_item;
}
?>
        
          
    
   
  

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
