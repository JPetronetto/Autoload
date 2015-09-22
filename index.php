<?php

define('WWW_ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

require_once(WWW_ROOT . DS . 'autoload.php');

use Classes\Foo;
$foo = new Foo();

$bar = new Classes\Bar(); //Instancing directly