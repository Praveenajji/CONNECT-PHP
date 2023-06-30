<?php


$con=new mysqli('localhost','root','','php');

if($con->connect_errno)
{
	echo $con->connect_error;
	die(); 
}
else
{
	echo "Database connected";
}



?>
<html>
<head>
<title>connecting database</title>
<style>
	body{
		background: lightsalmon;
	}
	form{
        display: flex;
		background-color: gray;
		font-family: 'Times New Roman', Times, serif;
		width: 400px;
		flex-direction: column;
        margin-left: 35%;
		border-radius: 5px;
		height: 200px;
		
	}
	label{
		text-align: center;
	}
	input{
     width: 200px;
	 height: 30px;
	 padding: 10px;
	 margin-left: 100px;
	}
	#save{
		padding: 1px;
		width: 100px;
        margin-left: 150px;
	}
</style>
</head>
<body>
<form action="index.php" method="post">

<label>USER</label><input type="text" name="name"><br><br>
<label>AGE</label><input type="text" name="age"><br><br>
<input  id="save"type="submit" name="submit" value="Save data">
</form>



<?php

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$age=$_POST['age'];
	
	$sql= "INSERT INTO connection(uname,age) VALUES('$name',$age)";
	if($con->query($sql))
	{
		echo "Datas stored";
	}
	else
	{
		echo "Insert data failed";
	}
	
	}
else
{
	echo "please enter all datas";
}
?>
</body>

</html>