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
    <a href="javascript:volver()">Volver</a>
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
                  <img class="art img-thumbnail" src="public/media/non-artist-image.jpg">

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
<br>
<br>
<br>
<br>
</div>

</body>
</html>
