<?php
$a=$_POST['name'];
$b=$_POST['gender'];
$c=$_POST['contact'];
$d=$_POST['dob'];
$e=$_POST['street'];
$f=$_POST['city'];
$g=$_POST['state'];
$h=$_POST['zipcode'];
$i=$_POST['email'];
$j=$_POST['services'];
$k=$_POST['date_time'];
$l=$_POST['attended'];

$conn=mysqli_connect("localhost","root","","hospital");
$sql="INSERT INTO patient(name,gender,contact,dob,street,city,state,zipcode,email,services,date_time,attended) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
$ss=mysqli_query($conn,$sql);
if($ss)
{
    echo"form submitted";
}
else{
    echo"form not submitted";
}
mysqli_close($conn);
?>
<br>
<button><a href="index.html">Go to home</a></button>