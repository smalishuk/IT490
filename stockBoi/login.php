<?php


if (!isset($_POST))
{
	$msg = "NO POST MESSAGE SET, POLITELY FUCK OFF";
	echo json_encode($msg);
	exit(0);
}
$request = $_POST;
$response = "unsupported request type, politely FUCK OFF";

$response = "";
$pullone = $request["uname"]
$response = $pullone
	
echo json_encode($response);
exit(0);

?>
