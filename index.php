<?php

require_once './google-api-php-client/src/Google_Client.php';
require_once './google-api-php-client/src/contrib/Google_CalendarService.php';
require_once './apiAccess.php';
require_once './functins_google_api.php';
require_once './Presenter.php';
require_once './Logic.php';
require_once './Router.php';
// require_once './function.php';
// require_once './function_display.php';
session_start();

$client = createClient();
if (!authenticate($client)) return;

$logic = new Logic($client);
$presenter = new Presenter($logic);
$router = new Router($presenter);
$router->doUserAction();
?>
