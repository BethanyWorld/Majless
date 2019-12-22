<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$active_group = 'default';
$query_builder = TRUE;
$db['default'] = array(
    'dsn'=> '',
    /* LocalHost */
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'majles11',
    /* Azmaa.net */
    /* 'username' => 'majlesco_user',
    'password' => 'L{I7h5J#3pFy',
    'database' => 'majlesco_db',*/
    /* Azmaa.me */
    /*
	'username' => 'azmaanet_user',
	'password' => 'Bethany1923#',
	'database' => 'azmaanet_db',
    */
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => TRUE,
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);

$db['blogDB'] = array(
    'dsn'=> '',
    /* LocalHost */
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'majless11_blog',
    /* Azmaa.net */
    /* 'username' => 'majlesco_user',
    'password' => 'L{I7h5J#3pFy',
    'database' => 'majlesco_db',*/
    /* Azmaa.me */
    /*
	'username' => 'azmaanet_user',
	'password' => 'Bethany1923#',
	'database' => 'azmaanet_db',
    */
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => TRUE,
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);