<?php
$servername="localhost";
$username="root";
$password="";
$dbname="bdm";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
	}
    $sql="CREATE TABLE contactus( id INT AUTO_INCREMENT PRIMARY KEY,fname VARCHAR(30) NOT NULL,mobileNumber INT(10)NOT NULL,email VARCHAR(220) NOT NULL,message VARCHAR(500)NOT NULL)";
    if($conn->query($sql)===TRUE)
    {   
        echo"Table is created :";
    }
    else   
    { 
       echo"Table is not created".$conn->error;
    }
    $conn->close();
?>
