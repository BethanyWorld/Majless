<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$autoload['packages'] = array();
/* دریافت کتابخانه های مورد نیاز در سراسر پروژه */
$autoload['libraries'] = array('database', 'session','form_validation','JDateTime');
$autoload['drivers'] = array();
/* دریافت توابع مورد نیاز در سراسر پروژه */
$autoload['helper'] = array('url', 'string', 'security', 'cookie','html' , 'form' , 'ui/ui_security' , 'pipes/pipe');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array();