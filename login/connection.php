<?php

$dbhost = "cs490.checoeg55vw8.us-east-2.rds.amazonaws.com";
$dbuser = "admin";
$dbpass = "qianyuhang123";
$dbname = "login_sample_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
