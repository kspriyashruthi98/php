<html>
<head>
<style>
input[type=number]
{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}


input[type=submit] 
{
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover
 {
  background-color: #45a049;
}
</style>
</head>
<body>
<?php
$username = $_POST['userid'];
$password = $_POST['pwd'];
echo "Welcome $username!!!!";
?>
<form name = "f1" action = "secondpage.php" method = "POST">
<table width = 450px>
<tr>
<td>Enter Number of Questions To Ask:</td>
<td><input type = "number" name = "number" id = "number"></td>
</tr>
</table>
<input type = "submit" value ="submit">
</form>
</body>
</html>

