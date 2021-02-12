<html>
<head>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
	border:2px solid #FFFFFF;
	padding:2px;
}

#customers tr{background-color:white;}


#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: Center;
    background-color:   #4CAF50;
    color: white;
}
</style>
</head>
<?php


$conn=new mysqli("localhost","root","hello","db");
if($conn){
	echo "";
	
}
else{
	echo "connection not success  ";
}


$query="Select * from db"; 
$result=$conn->query($query);
?>
<table id="customers">
<tr>
<th>MESSAGE</th>
<th>NAME</th>
<th>EMAIL</th>
<th>GENDER</th>
<th>COUNTRY</th>
</tr>
<?php while($row=$result->fetch_assoc()){?>
<tr>
<td><?php echo $row['message']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['country']; ?></td>
</tr>
<?php }?>
</table>
</html>
