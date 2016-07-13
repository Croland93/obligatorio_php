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
  var mute_toggle = $('#ctrl_volumen > i.fa');
  console.log(mute_toggle);
  if(player.isMuted() && mute_toggle.hasClass('fa-volume-off')){
    player.unMute();
    
    mute_toggle.addClass('fa-volume-up');
    mute_toggle.removeClass('fa-volume-off');

  }
  else{
    player.mute();

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

  function cargarvideo(primerID,tituloVid,listt){

    var miarray = listt;
    var i = miarray.indexOf(primerID);
    
    var sig = miarray.splice(i+1,miarray.length);

    var listaID = sig.toString();
    
    document.getElementById("videoplay").src="http://www.youtube.com/embed/"+ primerID +"?autoplay=1&playlist="+ listaID +"&controls=0&modestbranding=0&rel=0&fs=0&frameborder=”0″&showinfo=0&disablekb=1&iv_load_policy=3&enablejsapi=1&&fs=0&frameborder=”0″&disablekb=1&iv_load_policy=3";

    $('#boton-play').removeClass('fa-play-circle-o');
    $('#boton-play').addClass('fa-pause-circle-o');
    $('#playingNow').text(tituloVid);
    
  } 