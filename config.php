<?php
setlocale(LC_ALL,"pt_BR");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);

/* O nome do banco de dados*/
define('DB_NAME', 'tcc');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/* caminho absoluto para a pasta do sistema */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/* caminho no server para o sistema */
if ( !defined('BASEURL') )
	define('BASEURL', '/tcc/');
	
/* caminho do arquivo de banco de dados */
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'inc/database.php');

session_start();