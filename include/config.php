<?php 
//SITE_ROOT contains the full path to the tshirtshop folder
define('SITE_ROOT', dirname(dirname(__FILE__)));

//Application directories
define('PRESENTATION_DIR', SITE_ROOT . '/presentation/');
define('BUSINESS_DIR', SITE_ROOT . '/business/');

//Settings needed to configure the Smarty template engine
define('SMARTY_DIR', SITE_ROOT . '/libs/smarty/');
define('TEMPLATE_DIR', PRESENTATION_DIR . 'templates');
define('COMPILE_DIR', PRESENTATION_DIR . 'templates_c');
define('CONFIG_DIR', SITE_ROOT . '/include/configs');

//These should be true while developing the web site
define('IS_WARNING_FATAL', true);
define("DEBUGGING", true);

//The error types to be reported
define('ERROR_TYPES', E_ALL);

//Settings about mailing the error messages to admin
define('SEND_ERROR_MAIL', false);
define('ADMIN_ERROR_MAIL', 'Adminitrator@example.com');
define('SENDMAIL_FROM', 'Errors@example.com');
ini_set('senmail_from', SENDMAIL_FROM);

//By default we don't log errors to a file
define('LOG_ERRORS', false);
define('LOG_ERRORS_FILE', 'E:\\ClassWork\\php\\workspace\\tshirtshop\\errors_log.txt');

//Generic error message
define('SITE_GENERIC_ERROR_MESSAGE', '<h1>TShirtShop Error!<h1>');

//Database connectivity setup
define('DB_PERSISTENCY', 'true');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'tshirtshopadmin');
define('DB_PASSWORD', 'tshirtshopadmin');
define('DB_DATABASE', 'tshirtshop');
define('PDO_DSN', 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE);

//Server HTTP port
define('HTTP_SERVER_PORT', '8080');

//Name of virtual directory the site run in
define('VIRTUAL_LOCATION', '/tshirtshop/');

?>