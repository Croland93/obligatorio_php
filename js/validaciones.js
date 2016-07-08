$(document).ready(function() {
      // SUCCESS AJAX CALL, replace "success: false," by:     success : function() { callSuccessFunction() }, 
      
  $("#captcha-form").validationEngine()
});

//Disponibilidad del nickname
$(document).ready(function(){
  $('#nickname').keyup(function(){
    var nick = $('#nickname').val();
    if (nick!=''){
      $.post('/obligatorio_php/usuario/check', {nickname:nick}, 
        function(result){
          console.log(result);
          $('#nickname_available').html(result);
      }); 
    } else {
      $('#nickname_available').html('');
    } 
  });
});

//Disponibilidad del correo electronico
$(document).ready(function(){
  $('#email').keyup(function(){
    var e = $('#email').val();
    if (e!=''){
      $.post('/obligatorio_php/usuario/check', {email:e}, 
        function(result){
          console.log(result);
          $('#email_available').html(result);
      }); 
    } else {
      $('#email_available').html('');
    } 
  });
});