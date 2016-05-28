
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
    <script type="text/javascript" src="js/funciones.js"></script>
    

    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>




  </head>

  <body>
    {include file="cabezal.tpl"}

    <div class="row">
        <div class="col-md-4 playlist">
          <table align="center">
            <tr>
             
              <td id="div-btn1">
              <br>

             {foreach from=$datos item=videos}





              <ul>   
              <a class="btn btn-default" href="javascript:cargarvideo('{$videos['id']['videoId']}')" ><span class="glyphicon glyphicon-play"></span> {$videos['snippet']['title']} </a>    
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
    </div> 
   
  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script type="text/javascript">
         
      function cargarvideo(id){
        document.getElementById("videoplay").src="http://www.youtube.com/embed/"+ id +"?autoplay=1&controls=0&modestbranding=1&rel=1&fs=0&frameborder=”0″&showinfo=0&disablekb=1&iv_load_policy=3&enablejsapi=1&rel=1&fs=0&frameborder=”0″&disablekb=1&iv_load_policy=3";
      }

      </script>
  </body>
</html>

