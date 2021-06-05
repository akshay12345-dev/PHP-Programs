<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$dbconnect=mysqli_connect("localhost","root","","grocerryregister");
		
	
	$name=$_POST["ss1"];
	$contact=$_POST["ss2"];
	$email=$_POST["ss3"];
	$password=$_POST["ss4"];
	$room=$_POST["ss5"];
	$colony=$_POST["ss6"];
	$landmark=$_POST["ss7"];
	$city=$_POST["ss8"];
	$state=$_POST["ss9"];
	$pin=$_POST["ss10"];
	$sql="insert into registration1 values('$name','$contact','$email','$password','$room','$colony','$landmark','$city','$state','$pin')";
	
	if(mysqli_query($dbconnect,$sql)){
		echo("Yes");
	}else{
			echo("No");
			}
 
	}else{
		echo "ok";
}
 
 
 
?>
	
		
	
	
	
	
	