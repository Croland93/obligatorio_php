<!DOCTYPE html>
<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>
    <base href="{$url_base}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nasa - Imágen Random</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style type="text/css">
        body {
            margin-top: 50px;
            margin-bottom: 50px;
            background: none;
            color:white;
        }

        .full {
          background: url( {$foto->img_src}) no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
        }


    </style>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    {include file="cabezal.tpl"}

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 op">
                <h1>Marte</h1>
                <p>Cámara:{$foto->camera->full_name}</p>
                <p>Fecha Terrestre:{$foto->earth_date}</p>
                <p>Temperatura: {$clima->min_temp} / {$clima->max_temp} </p>
                <p>Presión: {$clima->pressure}</p>
                <p>Estado: {$clima->atmo_opacity}</p>
                <p>Humedad: {if isset($clima->humidity)}{$clima->atmo_opacity}{else}0{/if}</p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
