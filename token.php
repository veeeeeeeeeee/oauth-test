<?php
require_once('server.php');

$server->handleTokenRequest(OAuth2\Request\::createFromGlobals())->send();
// INSERT INTO oauth_clients (client_id, client_secret, redirect_uri) VALUES ("testclient", "testpass", "http://test/");
?>
