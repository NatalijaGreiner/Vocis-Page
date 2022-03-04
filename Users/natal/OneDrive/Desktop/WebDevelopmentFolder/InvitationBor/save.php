<?php
	//error_reporting(E_ERROR | E_PARSE |  E_NOTICE | E_STRICT);
	$searchthis=$_REQUEST["yourname"];
	$isgoing=$_REQUEST["gogo"];

	@if ($searchthis=="Muc Muri")
	{
		echo "<br /><h2>We doubt your name is Muc Muri, please fill out the form and click again</h2>";
	}
	else if ($isgoing=="Hell yeah!" && $searchthis!="Muc Muri")
	{
		echo "<br /><h2>Hell yeah you are coming ".$searchthis."!</h2>";
		$file=fopen($searchthis." IS coming.txt","w");
		header("Location: yes.php");
	}
	else if ($isgoing== "Sorry, can't come" && $searchthis!="Muc Muri")
	{
		echo "<br /><h2>That is too bad ".$searchthis.", maybe some other time</h2>";
		$file=fopen($searchthis." NOT coming.txt","w");
	}

	ini_set('display_errors', 0);

	static $r1;
	$r1=$searchthis;
?>
