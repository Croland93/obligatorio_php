
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{$url_base}">
    <meta charset="utf-8">
    
    <title>{$proyecto}</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
    <link href="css/art.css" rel="stylesheet">

</head>

<body>
    {include file="cabezal.tpl"}


    <div class="col-lg-12 col-sm-6">
     <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="{$imgArtista}">
            <!-- http://lorempixel.com/850/280/people/9/ -->
            
        </div>
        <div class="useravatar">
            <img alt="" src="{$imgArtista}">
        </div>
        <div class="card-info"> <span class="card-title">{$nomArtista}</span>

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
           


            {foreach from=$tops item=top}


            
            <div class="lista-tracks">
               
                <!-- Tab panes -->
                <ul>   
                    <a class="btn btn-default" href="api/busqueda/{$top['nombre']}/{$nomArtista}/track"><span class="glyphicon glyphicon-play"></span> {$top['nombre']}</a>    

                </ul>
                
                
            </div>
            {/foreach}

            <!-- aca termina tab 1 -->






        </div>
        <div class="tab-pane fade in" id="tab2">

          <div class="container-fluid">

            <div class="row">

               {foreach from=$relacionados item=rel} 

               <div class="col-md-1">
                   
                <a href="api/artista/{$rel['nombre']}/{$rel['id']}/{$rel['imagen']}" name="artista" id="artista">


                  {if $rel['imagen']==null}
                  <img class="art img-thumbnail" src="../obligatorio_php/public/media/logo-jukebox-j.png">

                  {else}

                  <img class="art img-thumbnail" src="{$rel['imagen']}" alt="...">
                  {/if}
                  <span>{$rel['nombre']}</span>
              </a>

          </div>
          {/foreach}
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
    // Update the value of our progress bar accordingly.
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
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript">

          $(document).ready(function() {
            $(".btn-pref .btn").click(function () {
                $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
        });

    </script>
    <script src="https://www.youtube.com/iframe_api"></script>

</body>
</html>

