<?php
session_start();

$GLOBALS['config'] = array(
    'mysql' => array(
        'host'     => '127.0.0.1',
        'username' => 'somedbuser',
        'password' => 'MegaTron!',
        'db'       => 'pdo'
    ),
    'remember' => array(
        'cookie_name'   => 'hash',
        'cookie_expiry' => 604800
    ),
    'session' => array(
        'session_name' => 'user'
    )
);

//Class Loader
spl_autoload_register(function ($class) {
    require_once 'classes/' . $class . '.php';
});

//Global Function List
require_once 'functions/sanitize.php';
