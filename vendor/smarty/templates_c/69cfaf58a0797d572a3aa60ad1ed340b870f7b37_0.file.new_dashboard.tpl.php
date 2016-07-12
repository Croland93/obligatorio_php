<?php
/* Smarty version 3.1.29, created on 2016-07-12 00:31:55
  from "/Applications/MAMP/htdocs/obligatorio_php/vistas/new_dashboard.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57841e5bcc0bc1_59254676',
  'file_dependency' => 
  array (
    '69cfaf58a0797d572a3aa60ad1ed340b870f7b37' => 
    array (
      0 => '/Applications/MAMP/htdocs/obligatorio_php/vistas/new_dashboard.tpl',
      1 => 1468276308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_57841e5bcc0bc1_59254676 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/Applications/MAMP/htdocs/obligatorio_php/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
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

  <!-- CSS -->
  <link href="css/dashboard.css" rel="stylesheet">
  <link href="css/new_dashboard.css" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/footer-distributed-with-address-and-phones.css">
  <link rel="stylesheet" href="css/nuevo.css">

  <!-- Javascript -->
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <!--<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.4.2.min.js"><?php echo '</script'; ?>
>-->
  <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery-latest.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/jquery.film_roll.js"><?php echo '</script'; ?>
> 

  <?php echo '<script'; ?>
 type="text/javascript">
    (function() {
    jQuery(function() {
    this.film_rolls || (this.film_rolls = []);
    this.film_rolls['demo'] = new FilmRoll({
    container: '#demo',
    height: 140
    });
    return true;
    });
    }).call(this);

    function mostrar() {
      document.getElementById('image-dashboard').style.display = 'none';
      document.getElementById('videoHiden').style.display = 'block';
      var ver_ocultar = document.getElementById('ver-ocultar-video');
      ver_ocultar.value = 'Ocultar video'; 
      ver_ocultar.onclick=ocultar;   
    }

    function ocultar() {
      document.getElementById('image-dashboard').style.display = 'block';
      document.getElementById('videoHiden').style.display = 'none';
      var ver_ocultar = document.getElementById('ver-ocultar-video');
      ver_ocultar.value = 'Ver video'; 
      ver_ocultar.onclick=mostrar;     
    }

  <?php echo '</script'; ?>
>

</head>

<body>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <div class="container-fluid">
  <div id="result">
    
  </div>
    <div class="row">
      <div class="col-md-12 artist-encontreishon">
        <h3 style="color: white;">Artistas</h3>
        <div id='demo'>
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
          <?php if ($_smarty_tpl->tpl_vars['artistas']->value['imagen'] == null) {?>
          <div style="text-align: center;"><a name="artista" class="artista"><img class="art img-thumbnail" src="public/media/non-artist-image.jpg" width="100" height="100"></a><br><span style="color: white;"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['artistas']->value['nombre'],15);?>
</span></div>
          <?php } else { ?>
          <div style="text-align: center;"><a name="artista" class="artista"><img class="art img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['artistas']->value['imagen'];?>
" alt="..." width="100" height="100"></a><br><span style="color: white;"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['artistas']->value['nombre'],15);?>
</span></div>
          <?php }?>
          <?php
$_smarty_tpl->tpl_vars['artistas'] = $__foreach_artistas_0_saved_local_item;
}
if ($__foreach_artistas_0_saved_item) {
$_smarty_tpl->tpl_vars['artistas'] = $__foreach_artistas_0_saved_item;
}
?>
        </div>
      </div>
      <div class="col-md-4 music-found">
      <h3>Temas</h3>
        <table align="center">
          <tr>
            <td id="div-btn1">
              <br>
              <?php
$_from = $_smarty_tpl->tpl_vars['datos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_videos_1_saved_item = isset($_smarty_tpl->tpl_vars['videos']) ? $_smarty_tpl->tpl_vars['videos'] : false;
$_smarty_tpl->tpl_vars['videos'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['videos']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['videos']->value) {
$_smarty_tpl->tpl_vars['videos']->_loop = true;
$__foreach_videos_1_saved_local_item = $_smarty_tpl->tpl_vars['videos'];
?>
              <ul>   
                <a class="btn btn-default"  href="javascript:cargarvideo('<?php echo $_smarty_tpl->tpl_vars['videos']->value['id']['videoId'];?>
','<?php echo $_smarty_tpl->tpl_vars['videos']->value['snippet']['title'];?>
',<?php echo $_smarty_tpl->tpl_vars['lista']->value;?>
)" ><span class="glyphicon glyphicon-play"></span> <?php echo $_smarty_tpl->tpl_vars['videos']->value['snippet']['title'];?>
 </a>    
              </ul>
              <?php
$_smarty_tpl->tpl_vars['videos'] = $__foreach_videos_1_saved_local_item;
}
if ($__foreach_videos_1_saved_item) {
$_smarty_tpl->tpl_vars['videos'] = $__foreach_videos_1_saved_item;
}
?>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-8 dash-of-the-board">
        <img class="visible" id="image-dashboard" src="../obligatorio_php/public/media/logo-jukebox-2.png" style="display: block;">
        <div class="col-md-12 novisible" id="videoHiden" style="display: none;">
          <iframe id="videoplay" width="420" height="315" FRAMEBORDER ="0" src=""></iframe>
        </div>
      </div>
    </div>

<div class="navbar navbar-inverse navbar-fixed-bottom reproductorino" style="background-color: grey;">
  <div class="col-md-6" style="display: inline-block; text-align: center; padding-left: 5%; padding-top: 5px;">
    <div class="col-md-12" style="height: 10px; margin: 0;">
      <span id="playingNow" style="float: left;"></span>
    </div>
    <div class="col-md-12" style="margin: 0;">
      <input type="range" value="" id="progreso" style="float: left;">
      <span id="current-time" style="float: left; margin-top: 18px; margin-left: 10px;">0:00/</span>
      <span id="duration" style="float: left; margin-top: 18px;">0:00</span>
    </div>
  </div>
  <div class="col-md-2">
    <div id="controles">
      <i id="boton-anterior" class="fa fa-step-backward fa-4x" aria-hidden="true"></i>
      <i id="boton-play" class="fa fa-play-circle-o fa-5x" aria-hidden="true"></i>
      <i id="boton-siguiente" class="fa fa-step-forward fa-4x" aria-hidden="true"></i>
      <!-- <i class="fa fa-pause-circle-o fa-3x" style="color:white; padding-right: 15px;" aria-hidden="true"></i> -->
    </div>
  </div>
  <div class="col-md-2">
    <div id="ctrl_volumen">
      <i class="fa fa-volume-up fa-2x" aria-hidden="true"></i>
      <!-- <input id="volume-rango" type="range" value=""> -->
    </div>  
    <input id="volume-rango" type="range" value="">
  </div>
  <div class="col-md-1">
    <br>
    <input id="ver-ocultar-video" type="button" value="Ver video" onclick="mostrar()">
  </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/reproductor.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">


// $("#artistas").load("index.tpl");


// funcion nueva


// $(document).ready(function(){

// $("#pag-artistas").click(function(){

// $("#contenido").load("play.html");
// });
// });
// 
// var nombre = "<?php echo $_smarty_tpl->tpl_vars['artistas']->value['nombre'];?>
";
// var id = "<?php echo $_smarty_tpl->tpl_vars['artistas']->value['id'];?>
";
// var imagen = "<?php echo $_smarty_tpl->tpl_vars['artistas']->value['imagen'];?>
";

// 


$(document).ready(function() {
 


 
  $('.artista').click(function() {
  // Envia AJAX
  // var id = $(event.attr.id);
  var id = $(this).attr('id');
  var datos = $(this).attr('value');
  var res = datos.split("*");
  var nombre = res[1];
  var imagen = res[0];
  if (imagen == ""){
    var imagen = "http://djlogic.es/wp-content/uploads/musica-internet.jpg";
  }
  // var nombre = "<?php echo $_smarty_tpl->tpl_vars['artistas']->value['nombre'];?>
";
  // var id = "<?php echo $_smarty_tpl->tpl_vars['artistas']->value['id'];?>
";
  // var imagen = "<?php echo $_smarty_tpl->tpl_vars['artistas']->value['imagen'];?>
";
    
  $.ajax({
    type: 'GET',
    url: 'api/artista/'+nombre+'/'+id+'/'+imagen,
    data: $(this).serialize(),
            // Muesta lo q trae d php
            success: function(data) {

              $('#result').html(data);
              // $('#main').slideUp('fast');
            }
          })        
  return false;
}); 
})
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://www.youtube.com/iframe_api"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
