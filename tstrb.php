#!/usr/bin/php
<?php
require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

function doItAll() {
$client = new rabbitMQClient("testRabbitMQ.ini","testServer");
if (isset($argv[1]))
{
  $msg = $argv[1];
}
else
{
  $msg = "HELLOO FROM THE WEB";
}

$request = array();
$request['type'] = "Login";
$request['username'] = "RABBIT";
$request['password'] = "YALL";
$request['message'] = $msg;
$response = $client->send_request($request);

return $response;

}



