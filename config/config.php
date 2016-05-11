<?php
	define("DB_HOST", "localhost");
	define("DB_USR", "root");
	define("DB_PASS", "");
	define("DB_DB", "jukebox");
	define("URL_BASE", "/obligatorio_php/");
	//define(DB_TYPE, "mysql");

	$template_config = 
    array(
        'template_dir' => 'vistas/',
        'compile_dir' => 'vendor/smarty/templates_c/',
        'cache_dir' => 'vendor/smarty/cache/',
        'config_dir' => 'vendor/smarty/configs/',
        );
?>