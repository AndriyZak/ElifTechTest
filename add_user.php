<!DOCTYPE html>
<html>
<head>
 <title>Add Company</title>
 <link href="favicon1.ico" rel="shortcut icon" type="image/x-icon" />
 <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<?php
 if(isset($_POST['submit']))
 {
  $parent_name=addslashes($_POST['parent_name']);
  $cat_name=addslashes($_POST['cat_name']);
  $price=addslashes($_POST['price']);
  $mysqli=mysqli_connect('localhost','root','','demo');
  $sql="INSERT INTO companies(name, price, idchild) VALUES ('$cat_name','$price', '$parent_name')";
  $result=mysqli_query($mysqli,$sql);
  if($result){
	 
   echo "<font color='green'>New record created successfully!!!</font>";
 //  echo "New record created successfully!!!";

//exit; 

  } 
 }
 
?> 


<form class="cat_form" id="cat_form" method="post" action="add_user.php" >
<tr class="tableheader">

<td>Add Company</td>
</tr>
 <p>

  <label>Parent:</label>
  
  <?php
   $mysqli=mysqli_connect('localhost','root','','demo');  
   $sql="SELECT pid,name FROM companies ";
   $result=mysqli_query($mysqli,$sql);
   echo "<select name='parent_name' id='parent_name' length='15'>";
   echo "<option  value='0'>Root</option>";
   while($row=mysqli_fetch_array($result)){
     $cat_id=$row['pid'];
     $cat_name=$row['name'];
     echo "<option value=".$cat_id." >".$cat_name."</option>";
   }
   echo "</select>";
 
  ?>
 <div class="leftbox">
  
 </p>
 <p>

  <label>Name Company:</label>
  <input type="text" id="cat_name" name="cat_name" />
 </p>
 <p>
    	<label for="price">Earnings:</label>
        <input type="number" name="price" id="price">
    </p>
 <p>
  <input class="btnsub" type="submit" value="Add" name="submit" />
  
 </p>
</form>
<form method="back" action="index.php">
  <input class="btnsub" type="submit" value="< Back">
</form>
</div>
</body> 
</html>

