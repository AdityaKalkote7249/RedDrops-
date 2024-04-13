<?php
$servername="localhost";
$username="root";
$password="";
 
$conn=new mysqli($servername,$username,$password);
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
	}
	  $sql="Create database bdm";
	  if($conn->query($sql)===TRUE)
	  {
	      echo"Database is created";
		  }
		  else 
		  {  
		    echo"Database is not created".$conn->error;
			}
			 $conn->close();
			 ?>