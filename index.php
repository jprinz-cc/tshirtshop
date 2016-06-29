<?php
//echo phpinfo();
//Activate session
session_start();

//Start output buffer
ob_start();

//Include utility files
require_once 'include/config.php';
require_once BUSINESS_DIR . 'error_handler.php';

//Set the error handler
ErrorHandler::SetHandler();

//Load the application page template
require_once PRESENTATION_DIR . 'application.php';
require_once PRESENTATION_DIR . 'link.php';

//Load the database handler
require_once BUSINESS_DIR . 'database_handler.php';

//Load Business Tier
require_once BUSINESS_DIR . 'catalog.php';

//URL correction
Link::CheckRequest();

//Load Smarty tamplate file
$application = new Application();

//Display the page
$application->display('store_front.tpl');

//Try to load inexistent file
//require_once 'afile.php';

//Close database connection
DatabaseHandler::Close();

//Output content from the buffer
flush();
ob_flush();
ob_end_clean();
?>
