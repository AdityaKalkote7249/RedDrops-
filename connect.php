<html>
<head>
<title>Insert page</title>
</head>
<body>
<?php
$conn=mysqli_connect("localhost" ,"root" ,"","staff");
if($conn ===false)
{
    die("ERROR:Could not connect.".mysqli_connect_error());
	}
	$firstname=$_REQUEST['firstname'];
	$gender=$_REQUEST['gender'];
	$address=$_REQUEST['address'];
	$email=$_REQUEST['email'];
	
	$sql="INSERT INTO college VALUE('$firstname','$gender','$address','$email')";
	if(mysqli_query($conn,$sql))
	{
	    echo"The data is entered";
		
		echo nl2br("\n$firstname\n $gender\n $address \n $email");
		}
		
		else
		{
		   echo"There is problem".mysqli_error($conn);
		   }
		
		   ?>
		   </body>
		   </html>
		   
	
