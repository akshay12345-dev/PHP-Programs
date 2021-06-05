<?php
		$fname=$_POST['n1'];
		$lname=$_POST['n2'];
		$dbconnect=mysqli_connect('127.0.0.1','root','','rail');
		$sql="select FIRST_NAME,LAST_NAME from details where FIRST_NAME='$fname' and LAST_NAME='$lname'";
		$result=mysqli_query($dbconnect,$sql);
		$row=mysqli_fetch_array($result);
		if($row['FIRST_NAME']==$fname && $row['LAST_NAME']==$lname)
		{
			echo "Login successful";
			header('location:welcome1.html');
		}
		else
		{
			echo "error";
		}
?>