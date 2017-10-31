<?php
  define('HOST','localhost');
  define('USER','root');
  define('PASS','AmmaBhava1712');
  define('DB','u813815354');
  $con = mysqli_connect(HOST,USER,PASS,DB);
  
  $name = $_POST['name'];
  $designation = $_POST['designation'];
  $salary = $_POST['salary'];
  
    $sql = "insert into person2 (name,designation,salary) values ('$name','$designation','$salary')";
	//$sql = "insert into person2 (name,designation,salary) values ('Hari','Analyst','40000')";
 if(mysqli_query($con,$sql)){
   echo 'successful';
 }
 else{
   echo 'failure';
 }
 mysqli_close($con)

?>