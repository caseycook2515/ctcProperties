<?php
//Connect to db
$db = mysql_connect('localhost','cook','a12345b')
	or die('Could not connect.');

mysql_select_db('cook'); // "use cook"
	
$res = mysql_query('select count(*) cnt from user') //result set
	or die(mysql_error());
	
$row = mysql_fetch_object($res);

if ($row->cnt == 1){
	$numRec = 'is one record';
} else {
	$numRec = 'are ' . $row->cnt . ' records';
}
print "There $numRec in user";
?>