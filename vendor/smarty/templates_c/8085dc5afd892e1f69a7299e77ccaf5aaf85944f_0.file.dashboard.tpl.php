<?php
/* Smarty version 3.1.29, created on 2016-05-29 03:05:09
  from "E:\wamp64\www\obligatorio_php\vistas\dashboard.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574a5c6592c9c9_17453990',
  'file_dependency' => 
  array (
    '8085dc5afd892e1f69a7299e77ccaf5aaf85944f' => 
    array (
      0 => 'E:\\wamp64\\www\\obligatorio_php\\vistas\\dashboard.tpl',
      1 => 1464490827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cabezal.tpl' => 1,
  ),
),false)) {
function content_574a5c6592c9c9_17453990 ($_smarty_tpl) {
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
    <link href="css/dashboard.css" rel="stylesheet">

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


    <div class="row">
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
$__foreach_videos_0_saved_item = isset($_smarty_tpl->tpl_vars['videos']) ? $_smarty_tpl->tpl_vars['videos'] : false;
$_smarty_tpl->tpl_vars['videos'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['videos']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['videos']->value) {
$_smarty_tpl->tpl_vars['videos']->_loop = true;
$__foreach_videos_0_saved_local_item = $_smarty_tpl->tpl_vars['videos'];
?>

                



              <ul>   
              <a class="btn btn-default" href="javascript:cargarvideo('<?php echo $_smarty_tpl->tpl_vars['videos']->value['id']['videoId'];?>
')" ><span class="glyphicon glyphicon-play"></span> <?php echo $_smarty_tpl->tpl_vars['videos']->value['snippet']['title'];?>
 </a>    
              
              </ul>



            <?php
$_smarty_tpl->tpl_vars['videos'] = $__foreach_videos_0_saved_local_item;
}
if ($__foreach_videos_0_saved_item) {
$_smarty_tpl->tpl_vars['videos'] = $__foreach_videos_0_saved_item;
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
    </div> 
   
  

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 type="text/javascript">

        


      function cargarvideo(primerID){

        
        var i = <?php echo $_smarty_tpl->tpl_vars['lista']->value;?>
.indexOf(primerID);
        
        var sig = <?php echo $_smarty_tpl->tpl_vars['lista']->value;?>
.splice(i+1,<?php echo $_smarty_tpl->tpl_vars['lista']->value;?>
.length);

        var listaID = sig.toString();
        
        document.getElementById("videoplay").src="http://www.youtube.com/embed/"+ primerID +"?autoplay=1&playlist="+ listaID +"&controls=1&modestbranding=1&rel=0&fs=0&frameborder=”0″&showinfo=1&disablekb=1&iv_load_policy=3&enablejsapi=1&&fs=0&frameborder=”0″&disablekb=1&iv_load_policy=3";
        
      }

      <?php echo '</script'; ?>
>
  </body>
</html>

<?php }
}
