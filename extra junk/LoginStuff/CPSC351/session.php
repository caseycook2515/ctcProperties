<?php
	
	session_start();
	if (!isset($_SESSION['loggedOn']) || $_SESSION['loggedOn']==false) {
		print "ERR You are not logged in."
		exit;
	}


?>