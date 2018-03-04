<?php

include('config.php');

$dsn = 'mysql:dbname=' . MYSQL['dbname'] . ';host=' . MYSQL['dbhost'];
$user = MYSQL['user'];
$pass = MYSQL['pass'];

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('oauth2-server/src/OAuth2/Autoloader.php');

OAuth2\Autoloader::register();
$storage = new OAuth2\Storage\Pdo(['dsn' => $dsn, 'username' => $user, 'password' => $pass]);
$server = new OAuth2\Server($storage);
$server->addGrantType(new OAuth2\GrantType\ClientCredentials($storage));
$server->addGrantType(new OAuth2\GrantType\AuthorizationCode($storage));
?>
