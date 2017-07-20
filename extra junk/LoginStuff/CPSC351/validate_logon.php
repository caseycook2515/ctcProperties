<?php 
//ini_set('display_errors','on');
/*
	inputs: 
		username (string/email)
		password (string)
	outputs:
		If successful: OK:FirstName:LastName
		If not: ERR [informative message]
*/
//print_r($_REQUEST); exit; //debug

session_start();
$_SESSION['loggedOn'] = false;

if (!isset($_REQUEST['username']))
	die('ERR Username required');
if (!isset($_REQUEST['password']))
	$_REQUEST['password'] = '';  // default pass

$db = mysql_connect('localhost','cook','a12345b')
	or die('ERR Could not connect to database.');
	
$username = mysql_real_escape_string($_REQUEST['username']);
$password = mysql_real_escape_string($_REQUEST['password']);
	
mysql_select_db('cook');
$query = "
	select count(*) cnt, max(ID) ID from user 
	where username = '$username' 
		  and passwordhash = sha1(concat('$password',salt))" ;

$res = mysql_query($query) or die('Error [$query]');
$row = mysql_fetch_object($res);

if ($row->cnt == 0)
	die('ERR Invalid logon');

$query = "select firstName,lastName from user where ID = {$row->ID}";
$res = mysql_query($query);
$row = mysql_fetch_object($res);

print "OK:{$row->firstName}:{$row->lastName}";
$_SESSION['loggedOn'] = true;

?>