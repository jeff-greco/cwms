<?php
	$conn = mysql_connect("localhost", DB_USER, DB_PASS) or die ("<br>Could not connect to MySQL server");
	mysql_select_db(USERNAME."_cwmssys",$conn) or die ("<br>Could not select the indicated database");
?>