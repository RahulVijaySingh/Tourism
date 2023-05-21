<?php

// database name is tourism
//table name is userinfodata
$con=mysqli_connect('localhost','root','','tourism');

if($con){
    echo "Connection Successful";
    
}
else{
    echo "Error ";
}

$user = $_POST['user'];
$email=$_POST['email'];
$mob=$_POST['mobile'];
$comments=$_POST['comments'];


$query="insert into userinfodata(user,email,mobile,comments) 
values('$user','$email','$mob','$comments')";

mysqli_query($con,$query);

header('location:index.php')


?>