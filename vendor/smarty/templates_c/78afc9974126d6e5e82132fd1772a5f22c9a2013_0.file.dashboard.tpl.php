<?php
/* Smarty version 3.1.29, created on 2016-06-22 19:10:19
  from "/Applications/MAMP/htdocs/obligatorio_php/vistas/dashboard.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576ac67b7c8ff5_07956753',
  'file_dependency' => 
  array (
    '78afc9974126d6e5e82132fd1772a5f22c9a2013' => 
    array (
      0 => '/Applications/MAMP/htdocs/obligatorio_php/vistas/dashboard.tpl',
      1 => 1466615391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
    'file:reproductor.tpl' => 1,
  ),
),false)) {
function content_576ac67b7c8ff5_07956753 ($_smarty_tpl) {
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

  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">

  <link href="css/repro.css" rel="stylesheet">

  <link href="css/art.css" rel="stylesheet">

  
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



  <!-- <div id="video-placeholder"></div> -->

  <!-- <label for="volumen">Volumen: </label><input type="range" min="0" max="100" value="80" step="0.1" id="volumen"> -->


  <div class="container-fluid">

    <div class="row">

<div id="lista-artista" class="contenedor">

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
 <div class="todo">
      <!-- <div class="col-md-1"> -->
     
         


            <!-- <img class="art img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['artistas']->value['imagen'];?>
" alt="..."> -->
            <img class="cosanueva" src="<?php echo $_smarty_tpl->tpl_vars['artistas']->value['imagen'];?>
" alt="...">
         
    
       </div>

      <?php
$_smarty_tpl->tpl_vars['artistas'] = $__foreach_artistas_0_saved_local_item;
}
if ($__foreach_artistas_0_saved_item) {
$_smarty_tpl->tpl_vars['artistas'] = $__foreach_artistas_0_saved_item;
}
?>
      
</div>
    </div>


  </div>

  <div id="result">



  </div>




  <div class="col-md-4 playlist">
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
')" ><span class="glyphicon glyphicon-play"></span> <?php echo $_smarty_tpl->tpl_vars['videos']->value['snippet']['title'];?>
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

// function onYouTubePlayerAPIReady() {
//controles

$('#boton-play').on('click', function () {

  var play_toggle = $(this);
  console.log(play_toggle);
  if (play_toggle.hasClass('fa-play-circle-o')){
    // player.pauseVideo();
   
    play_toggle.removeClass('fa-play-circle-o');
    play_toggle.addClass('fa-pause-circle-o');
     player.playVideo();
  }else{
   // player.playVideo();
   player.pauseVideo();
   play_toggle.removeClass('fa-pause-circle-o');
   play_toggle.addClass('fa-play-circle-o');
 }
 
});

//boton volume
$('#ctrl_volumen').on('click', function() {
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




//anterior y siguiente
$('#boton-siguiente').on('click', function () {
  player.nextVideo()
});

$('#boton-anterior').on('click', function () {
  player.previousVideo()
});


//barra de volume
$('#volume-rango').on('change', function () {
  player.setVolume($(this).val());
});

//barra de progreso
$('#progreso').on('mouseup touchend', function (e) {

    // Calculate the new time for the video.
    // new time in seconds = total duration in seconds * ( value of range input / 100 )
    var newTime = player.getDuration() * (e.target.value / 100);

    // Skip video to new time.
    player.seekTo(newTime);

  });


//temporizador
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
<?php echo '<script'; ?>
 src="https://www.youtube.com/iframe_api"><?php echo '</script'; ?>
>

</body>
</html>

<?php }
}
