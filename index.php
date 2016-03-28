<?php
include( "db.php" );

$result = mysql_query("SELECT * FROM companies");
?>
<html>
<head>
<title>Company List</title>
<link href="favicon1.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" src="users.js" type="text/javascript"></script>
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<tr class="listheader">
<td></td>
<td>Name Company</td>
<td>Earnings</td>
</tr>
<?php
$i=0;
while($row = mysql_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><input type="checkbox" name="companies[]" value="<?php echo $row["pid"]; ?>" ></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["price"]; ?></td>
</tr>
<?php
$i++;
}
?>
<tr class="listheader">
<td colspan="4"><input class="btnsub" type="button" name="add" value="Add"  onClick="setAddAction();" /> <input class="btnsub" type="button" name="edit" value="Edit" onClick="setEditAction();" /> <input class="btnsub" type="button" name="delete" value="Delete"  onClick="setDeleteAction();" />  <input class="btnsub" type="button" name="viewtree" value="View Tree"  onClick="setTreeAction();" /></td>
</tr>
</table>
</form>
</div>
</body></html>