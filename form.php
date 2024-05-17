<?php
$a= $_POST['name']; //$_GET['name'];
$b= $_POST['dob']; //$_GET['dob'];
$c= $_POST['pass']; //$_GET['pass'];
$d= $_REQUEST['pno']; //$_REQUEST['pno'];
$e= $_REQUEST['add']; //$_REQUEST['add'];
echo "Your details : <br>";
echo "Name : ".$a."<br>";
echo "DOB : ".$b."<br>";
echo "Password : ".$c."<br>";
echo "Phone no. : ".$d."<br>";
echo "Address : ".$e."<br>";
?>
<!DOCTYPE HTML>
<html>
<head><title>Personal Information</title>
<style>
body{ background-color : lightblue; text : gray;}
</style></head>
<body>
<form action="form.php" method="POST">
    <br><br>
Name : <input type="text" name="name"><br><br>
DOB : <input type="date" name="dob"><br><br>
Password : <input type="password" name="pass"><br><br>
Phone no.: <input type="number" name="pno"><br><br>
Address : <input type="text" name="add"><br><br>
<input type="submit" ><br><br>
</form>
</body>
</html> 