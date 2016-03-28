<?php
include( "db.php" );

$rowCount = count($_POST["companies"]);
for($i=0;$i<$rowCount;$i++) {
mysql_query("DELETE FROM companies WHERE pid='" . $_POST["companies"][$i] . "'");
}
header("Location:index.php");
?>