<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$con=mysqli_connect("localhost","root","","dbvolley");
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$password=$_POST['password'];
$room=$_POST['room'];
$colony=$_POST['colony'];
$landmark=$_POST['landmark'];
$city=$_POST['city'];
$state=$_POST['state'];
$pin=$_POST['pin'];
 
 
$sql="INSERT INTO `insertData`(`name`, `contact`, `email`, `password`, `room`, `colony`, `landmark`, `city`, `state`, `pin`) VALUES ('".$name."','".$contact."','".$email."','".$password."','".$room."','".$colony."','".$landmark."','".$city."','".$state."','".$pin."')";
 if(mysqli_query($con,$sql)){
 echo("Yes");
 }else{
 echo("No");
 }
 
}else{
	echo "ok";
}
 
 
 
?>