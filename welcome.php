<?php

$message=$_POST['message'];
$name=$_POST['name'];
$email=$_POST['email'];


$conn=mysqli_connect("localhost","root","","db");
if($conn){
	echo "connection success";
	<br>
}
else{
	echo "connection not success";
}

mysqli_select_db($conn,"db") ;




$query="insert into db(message,name,email) VALUES('$message','$name','$email')";

	if( !mysqli_query($conn,$query))
	{
		
		die('eror in inserting record' );
	}
	else{
		echo "data insert";
	}
	


?>
