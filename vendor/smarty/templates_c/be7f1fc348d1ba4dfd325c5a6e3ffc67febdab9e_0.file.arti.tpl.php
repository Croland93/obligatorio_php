<?php
/* Smarty version 3.1.29, created on 2016-07-13 21:38:06
  from "/Applications/MAMP/htdocs/obligatorio_php/vistas/arti.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5786989edad860_47314237',
  'file_dependency' => 
  array (
    'be7f1fc348d1ba4dfd325c5a6e3ffc67febdab9e' => 
    array (
      0 => '/Applications/MAMP/htdocs/obligatorio_php/vistas/arti.tpl',
      1 => 1468438668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_5786989edad860_47314237 ($_smarty_tpl) {
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
    <link href="css/art.css" rel="stylesheet">

</head>

<body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    <div class="col-lg-12 col-sm-6">
    <a href="javascript:volver()">Volver</a>
     <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="<?php echo $_smarty_tpl->tpl_vars['imgArtista']->value;?>
">
            <!-- http://lorempixel.com/850/280/people/9/ -->
            
        </div>
        <div class="useravatar">
            <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['imgArtista']->value;?>
">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo $_smarty_tpl->tpl_vars['nomArtista']->value;?>
</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab">
                <div class="hidden-xs"><h5>Top Tracks</h5></div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab">
                <div class="hidden-xs"><h5>Artistas Relacionados</h5></div>
            </button>
        </div>
        
    </div>

    <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
           


            <?php
$_from = $_smarty_tpl->tpl_vars['tops']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_top_0_saved_item = isset($_smarty_tpl->tpl_vars['top']) ? $_smarty_tpl->tpl_vars['top'] : false;
$_smarty_tpl->tpl_vars['top'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['top']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['top']->value) {
$_smarty_tpl->tpl_vars['top']->_loop = true;
$__foreach_top_0_saved_local_item = $_smarty_tpl->tpl_vars['top'];
?>


            
            <div class="lista-tracks">
               
                <!-- Tab panes -->
                <ul>   
                    <a class="btn btn-default" href="api/busqueda/<?php echo $_smarty_tpl->tpl_vars['top']->value['nombre'];?>
/<?php echo $_smarty_tpl->tpl_vars['nomArtista']->value;?>
/track"><span class="glyphicon glyphicon-play"></span> <?php echo $_smarty_tpl->tpl_vars['top']->value['nombre'];?>
</a>    

                </ul>
                
                
            </div>
            <?php
$_smarty_tpl->tpl_vars['top'] = $__foreach_top_0_saved_local_item;
}
if ($__foreach_top_0_saved_item) {
$_smarty_tpl->tpl_vars['top'] = $__foreach_top_0_saved_item;
}
?>

            <!-- aca termina tab 1 -->






        </div>
        <div class="tab-pane fade in" id="tab2">

          <div class="container-fluid">

            <div class="row">

               <?php
$_from = $_smarty_tpl->tpl_vars['relacionados']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_rel_1_saved_item = isset($_smarty_tpl->tpl_vars['rel']) ? $_smarty_tpl->tpl_vars['rel'] : false;
$_smarty_tpl->tpl_vars['rel'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['rel']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rel']->value) {
$_smarty_tpl->tpl_vars['rel']->_loop = true;
$__foreach_rel_1_saved_local_item = $_smarty_tpl->tpl_vars['rel'];
?> 

               <div class="col-md-1">
                   
                <a href="api/artista/<?php echo $_smarty_tpl->tpl_vars['rel']->value['nombre'];?>
/<?php echo $_smarty_tpl->tpl_vars['rel']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['rel']->value['imagen'];?>
" name="artista" id="artista">


                  <?php if ($_smarty_tpl->tpl_vars['rel']->value['imagen'] == null) {?>
                  <img class="art img-thumbnail" src="public/media/non-artist-image.jpg">

                  <?php } else { ?>

                  <img class="art img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['rel']->value['imagen'];?>
" alt="...">
                  <?php }?>
                  <span><?php echo $_smarty_tpl->tpl_vars['rel']->value['nombre'];?>
</span>
              </a>

          </div>
          <?php
$_smarty_tpl->tpl_vars['rel'] = $__foreach_rel_1_saved_local_item;
}
if ($__foreach_rel_1_saved_item) {
$_smarty_tpl->tpl_vars['rel'] = $__foreach_rel_1_saved_item;
}
?>
      </div>


  </div>



</div>
</div>
</div>
<br>
<br>
<br>
<br>
</div>

</body>
</html>
<?php }
}
