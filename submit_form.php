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
		
		$er = mysql_select_db ('Comments');
		if (!$er) {
			print "Error - could not select the database";
			$error = mysql_error();
			print "<p>" . $error . "</p>";
			exit;
		}
		
		$result = mysql_query("SELECT * FROM Comments", mysql_connect);
		$num_rows = mysql_num_rows($result);
		$row = mysql_fetch_array($result);
		$mun_fields = mysql_num_fields($result);
		
		$keys = array_keys($row);
		for($index = 0; $index < $num_fields; $index++)
			print "<th>" . $keys[2 * $index + 1] . ">/th>";
		print "<tr>";
		
		for($row_num = 0; $row_num< $num_rows; $row_num++){
			print "<tr align = 'center'>";
			$values = array_values($row);
			for($index = 0; $index < $num_fields; $index++){
				print"<td>" . $value > "</td>";
			}
		}
		
		
		


	?>
</body>
		