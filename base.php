<?php 
	// Turn on error reporting
	ini_set('display_errors','On');
	ini_set('session.save_path', dirname(__FILE__) . '/sessions');
    session_start();
	// connect to the database
	$mysqli = new mysqli("oniddb.cws.oregonstate.edu", "lej-db","TXtxBA8ziziWBsVM","lej-db");
	if($mysqli->connect_errno){
		echo "Connection error " . $mysqli->connect_errno." ".$mysqli->connect_error;
        exit();
    }
    $mysqli->set_charset("utf8");
    $dburl = "http://web.engr.oregonstate.edu/~lej/361/";
    $fromemail = "lej@oregonstate.edu";
?>

