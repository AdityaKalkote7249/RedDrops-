<?php
$servername="localhost";
$username="root";
$password="";
$dbname="bdm";
//connecting data base
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
	}
    //creating table
    $sql="CREATE TABLE abbank( id INT AUTO_INCREMENT PRIMARY KEY,district VARCHAR(30) NOT NULL,
    taluka VARCHAR(30) NOT NULL,pincode INT(30) NOT NULL,hospital_name VARCHAR(500)NOT NULL,
    mobileNumber INT(10)NOT NULL,email VARCHAR(30) NOT NULL,blood_available VARCHAR(30) NOT NULL,
    category VARCHAR(30) NOT NULL,address VARCHAR(500) NOT NULL,city VARCHAR(30) NOT NULL)";
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
