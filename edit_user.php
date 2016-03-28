<?php
include( "db.php" );

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["name"]);
for($i=0;$i<$usersCount;$i++) {
mysql_query("UPDATE companies set name='" . $_POST["name"][$i] . "', price='" . $_POST["price"][$i] . "' WHERE pid='" . $_POST["pid"][$i] . "'");
}
header("Location:index.php");
}
?>
<html>
<head>
<title>Edit Data</title>
<link href="favicon1.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>

<form name="frmUser" method="post" action="">

<td>Edit Data</td>
<div class="leftbox">
<?php
$rowCount = count($_POST["companies"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysql_query("SELECT * FROM companies WHERE pid='" . $_POST["companies"][$i] . "'");
$row[$i]= mysql_fetch_array($result);
?>
<p>
<label>Name Company:</label></td>
<td><input type="hidden" name="pid[]"  value="<?php echo $row[$i]['pid']; ?>"><input type="text" name="name[]"  value="<?php echo $row[$i]['name']; ?>"></td>
</tr>
</p>
<p>
<td><label>Earnings:</label></td>
<td><input type="number" name="price[]"  value="<?php echo $row[$i]['price']; ?>"></td>
</tr>
</p>
</table>
</td>
</tr>
<?php
}
?>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Edit" class="btnsub"></td>
</tr>
</table>
<p>
</form>
<form method="back" action="index.php">
  <input class="btnsub" type="submit" value="< Back" >
</form>
</p>
</div>
</body></html>

