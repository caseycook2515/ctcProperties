<?php

$db  =mysql_connect('localhost','cook','a12345b')
	or die('ERR could not connect to database.');
	mysql_select_db('cook');

	$fName = $_REQUEST['fName'];
	$lName = $_REQUEST['lName'];
	$address1 = $_REQUEST['address1'];
	$address2 = $_REQUEST['address2'];
	$city = $_REQUEST['city'];
	$state = $_REQUEST['state'];
	$zip = $_REQUEST['zip'];
	


$insert = "INSERT INTO cook.Person (firstName, lastName, address1, address2, city, state, zip) VALUES ('$fName','$lName','$address1','$address2','$city','$state','$zip')";
 
$res = mysql_query($insert) or die('ERR Error [$query]');
$cnt = mysql_insert_id();

if ($cnt == 0) 
	die ('Err Could Not Add Customer');
 
 print 'OK';
?>