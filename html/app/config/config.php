<?php
// Configuración de la base de datos basada en el docker-compose
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root_password');
define('DB_NAME', 'my_database');

// Configuración de la aplicación
define('APPROOT', dirname(dirname(__FILE__)));
define('URLROOT', 'http://localhost:8080'); 
define('SITENAME', 'php-template');
define('APP_VERSION', '0.1');
