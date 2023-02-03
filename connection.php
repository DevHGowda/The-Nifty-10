<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "thenifty10.";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
