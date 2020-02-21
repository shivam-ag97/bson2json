
<?php


class API
{
	function bson2json(){

		$mcon=new MongoDB\Driver\Manager();

		$bson = file_get_contents("ten.bson");//path to bson file

		$b=MongoDB\BSON\toCanonicalExtendedJSON($bson);

		return ($b);

	}
}

$API = new API;

header('Content-type:application/json');

echo $API->bson2json();


// $mcon=new MongoDB\Driver\Manager();

// $bson = file_get_contents("ten.bson");

// $b=MongoDB\BSON\toCanonicalExtendedJSON($bson);

// var_dump($b);



?>
