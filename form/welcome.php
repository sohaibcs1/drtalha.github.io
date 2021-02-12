<?php

   if(empty($_POST['name']) && empty($_POST['email']))
{
  echo "<SCRIPT>
alert('NAME and Email required');
</SCRIPT>";
   exit();
   }
  
   if(!filter_has_var(INPUT_POST, "email")) {
echo("Input type does not exist");
} else {
if (!filter_input(INPUT_POST, "email",
FILTER_VALIDATE_EMAIL)) {
echo "<SCRIPT>
alert('Email is not valid');
</SCRIPT>";
exit();
} else {
echo "";
}
}
$message=$_POST['message'];
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$country=$_POST['county'];


$conn=mysqli_connect("localhost","root","hello","db");
if($conn){
	echo "<SCRIPT>
alert('Thanks for your feedback we will get to you soon!');
</SCRIPT>";;
	
}
else{
	echo "error getting feedback";
}

mysqli_select_db($conn,"db") ;




$query="insert into db(message,name,email,gender,country) VALUES('$message','$name','$email','$gender','$country')";

	if( !mysqli_query($conn,$query))
	{
		
		die('eror in inserting record  ' );
	}
	else{
		echo "";
	}
	


?>
