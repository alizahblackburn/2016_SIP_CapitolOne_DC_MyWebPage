<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN
			"htto://www.w3.org/TR/khtml1/DTD/xhtml-strict.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">

<head>
	<title></title>
	<meta http-equiv = "content-type" content = "text/html;charset=utf-8"  />
</head>
<body>
	<h1> Welcome </h1>
	<?php
	
	
		$db_user = 'sunnyba1_gwc6';
		$db_password = 'SIP2016-f';
		$db_host = 'localhost'; 
		$db_name = 'sunnyba1_gwc6';
		
		echo "<p> Connecing to MySQL server. </p>";
		$dbc = mysql_connect ($db_host, $db_user, $db_password)
			OR die ('Could not connect to MySQL: '.mysql_error());
		echo "<p> Connecting to database </p>";
		mysql_select_db ($db_name)
			OR die ('Could not select the database: '.mysql_error());
		echo "<p> Create a table. </p>";
		$create_table_string = "CREATE TABLE Comments (" .
			"name text not null, ".
			"comment text not null)";
		mysql_query ($create_table_string, $dbc)
			OR die ("Can't create the table: ".mysql_error());
			
		echo ("<i>$table</i> table created succesfully.");

	?>
</body>
		