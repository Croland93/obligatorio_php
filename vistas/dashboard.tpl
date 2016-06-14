<!DOCTYPE html>
<html lang="en">
<head>
  <base href="{$url_base}">
  <meta charset="utf-8">

  <title>{$proyecto}</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <link href="css/repro.css" rel="stylesheet">
  <script type="text/javascript" src="js/funciones.js"></script>

  <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>




</head>

<body>
  {include file="cabezal.tpl"}


<!-- <div id="video-placeholder"></div> -->

<!-- <label for="volumen">Volumen: </label><input type="range" min="0" max="100" value="80" step="0.1" id="volumen"> -->


  <div class="container-fluid">

    <div class="row">

      {foreach from=$listart item=artistas} 

      <div class="col-md-1">
        <a href="api/artista/{$artistas['nombre']}/{$artistas['id']}/{$artistas['imagen']}" name="artista" id="artista">


          {if $artistas['imagen']==null}
          <img class="art img-thumbnail" src="../obligatorio_php/public/media/logo-jukebox-j.png">

          {else}

          <img class="art img-thumbnail" src="{$artistas['imagen']}" alt="...">
          {/if}
          <span>{$artistas['nombre']}</span>
        </a>

      </div>
      {/foreach}
    </div>


  </div>


  <div class="col-md-4 playlist">
    <table align="center">
      <tr>




        <td id="div-btn1">
          <br>

          
          {foreach from=$datos item=videos}





          <ul>   
            <a class="btn btn-default"  href="javascript:cargarvideo('{$videos['id']['videoId']}')" ><span class="glyphicon glyphicon-play"></span> {$videos['snippet']['title']} </a>    

          </ul>



          {/foreach}

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

{include file="reproductor.tpl"}

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript">
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
    // Update the value of our progress bar ac
cordingly.
    var actual = (player.getCurrentTime() / player.getDuration()) * 100;
    $('#progreso').val(actual);
}
      function cargarvideo(primerID){
        var miarray = {$lista};
        var i = miarray.indexOf(primerID);
        
        var sig = miarray.splice(i+1,miarray.length);
        var listaID = sig.toString();
        
        document.getElementById("videoplay").src="http://www.youtube.com/embed/"+ primerID +"?autoplay=1&playlist="+ listaID +"&controls=1&modestbranding=1&rel=0&fs=0&frameborder=”0″&showinfo=1&disablekb=1&iv_load_policy=3&enablejsapi=1&&fs=0&frameborder=”0″&disablekb=1&iv_load_policy=3";
        
      }
    </script>
<script src="https://www.youtube.com/iframe_api"></script>
 
  </body>
</html>

