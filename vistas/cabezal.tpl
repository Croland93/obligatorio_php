<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand" href="#">{$proyecto}</a>-->
          <a href="index/home/"><img src="../obligatorio_php/public/media/logo-jukebox-miniatura-2.png"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          {if $usuario_logueado}
              <li><a href="usuario/my_profile/">Hola, {$usuario_nick}!</a></li>
              <li><a href="usuario/logout/">Cerrar sesión</a></li>
            {else}
              <li><a href="usuario/getLogin/">Iniciar sesión</a></li>
              <li><a href="usuario/nuevo/">Registrarse</a></li>
            {/if}
          </ul>
        </div>
      </div>
    </nav>