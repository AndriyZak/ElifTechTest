<html>
<head>
<title>View Tree</title>
<link href="favicon1.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<td>View Tree</td>
<?php
include( "db.php" );

	function ShowTree($ParentID, $lvl) {
	
	global $conn;
	global $lvl;
	
	$lvl++;		
	
	$sSQL = "SELECT pid, name, price, idchild FROM companies WHERE idchild = " . $ParentID . " ORDER BY name";
	
	
	
	$result = mysql_query($sSQL, $conn);
	
	if (mysql_num_rows($result) > 0) {
		echo("<UL>\n");
	while ( $row = mysql_fetch_array($result) ) {
		$ID1 = $row["pid"];
		echo("<LI>\n");
		echo("" . $row["name"] ."\n". "|".$row["price"] . "|". "</A>" . "&nbsp;&nbsp;\n");
		ShowTree($ID1, $lvl); 
		$lvl--;
	}
		echo("</UL>\n");
		
	}
	
	}

ShowTree(0, 0);


?>
<form method="back" action="index.php">
  <input class="btnsub" type="submit" value="< Back">
</form>
</body>
</html>