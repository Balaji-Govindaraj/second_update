<?php
include 'db_con.php';
if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {

$uname=$_POST['uname'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
$pass=$_POST['pass'];

$tmpName = $_FILES['image']['tmp_name'];
$fp = fopen($tmpName, 'r');
$data = fread($fp, filesize($tmpName));
$data = addslashes($data);
fclose($fp);
$query = "INSERT INTO account VALUES ('$data','$uname','$mail','$phone','$pass')";
$results = mysql_query($query, $con);
// Print results
//print "Thank you, your file has been uploaded.";
header('Location:index.php');
}

else {

echo "alert('Not Inserted')";
}


// Close our MySQL Link

mysql_close($con);
?>