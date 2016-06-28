<?php
/* Smarty version 3.1.29, created on 2016-06-28 01:53:49
  from "E:\wamp64\www\obligatorio_php\vistas\arti.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5771d8ad3c65a5_99063607',
  'file_dependency' => 
  array (
    '6bff4363a45cc80ae5b9a27238abddfa3a340fa5' => 
    array (
      0 => 'E:\\wamp64\\www\\obligatorio_php\\vistas\\arti.tpl',
      1 => 1467078816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
    'file:reproductor.tpl' => 1,
  ),
),false)) {
function content_5771d8ad3c65a5_99063607 ($_smarty_tpl) {
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
    <!-- <?php echo '<script'; ?>
 type="text/javascript" src="js/funciones.js"><?php echo '</script'; ?>
> -->
    <link href="css/art.css" rel="stylesheet">

</head>

<body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    <div class="col-lg-12 col-sm-6">
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
            <button type="button" id="tab1" class="btn btn-primary" href="#tab1" data-toggle="tab">
                <div class="hidden-xs"><h5>Top Tracks</h5></div>
            </button>
        </div>
          <div class="btn-group" role="group">
            <button type="button" id="tab2" class="btn btn-primary" href="#tab2" data-toggle="tab">
                <div class="hidden-xs"><h5>Albumes</h5></div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="tab3" class="btn btn-default" href="#tab3" data-toggle="tab">
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
           <div class="tab-pane fade in active" id="tab2">
           
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
                  <img class="art img-thumbnail" src="../obligatorio_php/public/media/logo-jukebox-j.png">

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
        <div class="tab-pane fade in" id="tab3">

          <div class="container-fluid">

            <div class="row">

               <?php
$_from = $_smarty_tpl->tpl_vars['relacionados']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_rel_2_saved_item = isset($_smarty_tpl->tpl_vars['rel']) ? $_smarty_tpl->tpl_vars['rel'] : false;
$_smarty_tpl->tpl_vars['rel'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['rel']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rel']->value) {
$_smarty_tpl->tpl_vars['rel']->_loop = true;
$__foreach_rel_2_saved_local_item = $_smarty_tpl->tpl_vars['rel'];
?> 

               <div class="col-md-1">
                   
                <a href="api/artista/<?php echo $_smarty_tpl->tpl_vars['rel']->value['nombre'];?>
/<?php echo $_smarty_tpl->tpl_vars['rel']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['rel']->value['imagen'];?>
" name="artista" id="artista">


                  <?php if ($_smarty_tpl->tpl_vars['rel']->value['imagen'] == null) {?>
                  <img class="art img-thumbnail" src="../obligatorio_php/public/media/logo-jukebox-j.png">

                  <?php } else { ?>

                  <img class="art img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['rel']->value['imagen'];?>
" alt="...">
                  <?php }?>
                  <span><?php echo $_smarty_tpl->tpl_vars['rel']->value['nombre'];?>
</span>
              </a>

          </div>
          <?php
$_smarty_tpl->tpl_vars['rel'] = $__foreach_rel_2_saved_local_item;
}
if ($__foreach_rel_2_saved_item) {
$_smarty_tpl->tpl_vars['rel'] = $__foreach_rel_2_saved_item;
}
?>
      </div>


  </div>



</div>
   
</div>
</div>

</div>






<div class="col-md-7">
    <table>
      <tr>
        <td >
          <iframe id="videoplay" width="420" height="315" FRAMEBORDER ="0" src=""></iframe>
      </td>
  </tr>
</table>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:reproductor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('videoplay', {
            events: {
                onReady: initialize,
            }
        });
    }
  // document.addEventListener("DOMContentLoaded", function() {
  //   initialize();
  //   console.log("DOM fully loaded and parsed");
  // });
// // $(document).ready(function{
// // initialize();
// });
function initialize(){
    // Update the controls on load
    updateTimerDisplay();
    updateProgressBar();
    // Start interval to update elapsed time display and
    // the elapsed part of the progress bar every second.
    time_update_interval = setInterval(function () {
        updateTimerDisplay();
        updateProgressBar();
    }, 1000)
}
function formatTime(time){
    time = Math.round(time);
    var minutes = Math.floor(time / 60),
    seconds = time - minutes * 60;
    seconds = seconds < 10 ? '0' + seconds : seconds;
    return minutes + ":" + seconds;
}
//controles
$('#boton-play').on('click', function () {
    player.playVideo();
});
$('#pause').on('click', function () {
    player.pauseVideo();
});
$('#mute').on('click', function() {
    var mute_toggle = $(this);
    console.log(mute_toggle);
    if(player.isMuted()){
        player.unMute();
        mute_toggle.text('encendido');
        
        mute_toggle.addClass('fa-volume-up');
        mute_toggle.removeClass('fa-volume-off');
    }
    else{
        player.mute();
        mute_toggle.text('apagado'); 
        mute_toggle.removeClass('fa-volume-up');
        mute_toggle.addClass('fa-volume-off');
    }
});
$('#volumen').on('change', function () {
    player.setVolume($(this).val());
});
$('#progreso').on('mouseup touchend', function (e) {
    // Calculate the new time for the video.
    // new time in seconds = total duration in seconds * ( value of range input / 100 )
    var newTime = player.getDuration() * (e.target.value / 100);
    // Skip video to new time.
    player.seekTo(newTime);
});
function updateTimerDisplay(){
    // Update current time text display.
    $('#current-time').text(formatTime( player.getCurrentTime() ) + "/");
    $('#duration').text(formatTime( player.getDuration() ));
}
function formatTime(time){
    time = Math.round(time);
    var minutes = Math.floor(time / 60),
    seconds = time - minutes * 60;
    seconds = seconds < 10 ? '0' + seconds : seconds;
    return minutes + ":" + seconds;
}
// This function is called by initialize()
function updateProgressBar(){
    // Update the value of our progress bar accordingly.
    var actual = (player.getCurrentTime() / player.getDuration()) * 100;
    $('#progreso').val(actual);
}
function cargarvideo(primerID){
    var miarray = <?php echo $_smarty_tpl->tpl_vars['lista']->value;?>
;
    var i = miarray.indexOf(primerID);
    
    var sig = miarray.splice(i+1,miarray.length);
    var listaID = sig.toString();
    
    document.getElementById("videoplay").src="http://www.youtube.com/embed/"+ primerID +"?autoplay=1&playlist="+ listaID +"&controls=1&modestbranding=1&rel=0&fs=0&frameborder=”0″&showinfo=1&disablekb=1&iv_load_policy=3&enablejsapi=1&&fs=0&frameborder=”0″&disablekb=1&iv_load_policy=3";
    
}
<?php echo '</script'; ?>
>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
          $(document).ready(function() {
            $(".btn-pref .btn").click(function () {
                $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
        });
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://www.youtube.com/iframe_api"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
