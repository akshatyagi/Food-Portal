<?php
session_start();
$username=$_POST["username"];
$password=$_POST["password"];

if($username&&$password){
  $connect=  mysql_connect("localhost","root","") or die("Connection could not be established");  
  mysql_select_db("restaurant_data") or die("Couldn't establish a connection with the database");
   $query=  mysql_query("SELECT * from users where username='$username'");
   $numrows=  mysql_num_rows($query);
   if($numrows!=0){
       //Code to Login
       while($row=  mysql_fetch_assoc($query)){
           $dbusername=$row['username'];
           $dbpassword=$row['password'];
           
           if($username==$dbusername&&$password==$dbpassword){
               header("Location:adminpage1.php");
               $_SESSION['username'] = $dbusername;
               }
           else {
               header("Location:failedlogin.php");
               }
           }
         }    
       else {
           header("Location:failedlogin2.php");
       }
   
    
}
else die("Please Enter a Valid Username and Password!");



?>

