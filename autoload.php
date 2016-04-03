<?php

define ('DS', DIRECTORY_SEPARATOR);
define ('ROOT', realpath(dirname(__FILE__)) . DS);
define ('APP_PATH', ROOT . 'app' . DS);

require_once APP_PATH . 'Bootstrap.php';
require_once APP_PATH . 'Config.php';
require_once APP_PATH . 'Controller.php';
require_once APP_PATH . 'Model.php';
require_once APP_PATH . 'Register.php';
require_once APP_PATH . 'Request.php';
require_once APP_PATH . 'View.php';