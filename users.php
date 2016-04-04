<?php 
$user="root";
$pass="";
$db="restaurant_data";



mysql_connect('localhost','root','');

mysql_select_db($db);
$sql="SELECT * FROM users";
$records=  mysql_query($sql);

?>




<!DOCTYPE php>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<title>Welcome to the jungle</title>
<link rel="stylesheet" href="main.css" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script id="javascript" src="addnremove.js"></script>
<script id="jquery" src="jquery-hidenshow.js"></script>

</head>
<body>

    <div id="div1">
<header id="topheader">
<h1>Welcome to the JUNGLE!!</h1>
<p style="text-align:right" id="demo"></p>
</header>
<nav style="color:white" id="topmenu" class="navbar navbar-default">
<div class="container-fluid">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topmenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>    
      
      </button>
  <div>
      <ul class="nav navbar-nav">
        <li><a style="color:yellow;text-shadow: 2px 2px green;" href="intro.php">Home</a></li>
        <li><a style="color:yellow;text-shadow: 2px 2px green;" href="index.php">Order Online</a></li>
        <li><a style="color:yellow;text-shadow: 2px 2px green;" href="articles.php">Articles</a></li>
         
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a style="color:yellow;text-shadow: 2px 2px green;" href="faq1.html">FAQ</a></li>
          <li><a style="color:yellow;text-shadow: 2px 2px green;" href="complaint.php">Complaint</a></li>
        <li class="active"><a style="color:yellow;text-shadow: 2px 2px green;" href="#"><span style="color:green;text-shadow: 2px 2px yellow;" class="glyphicon glyphicon-log-in"></span>Admin Panel</a></li>
      </ul>
      
    </div>
  </div>
</nav>
      <?php
session_start();
 if($_SESSION['username']){
    echo "<h1 style='color:yellow'>Welcome,".$_SESSION['username']."!"."(<a href='logout.php'>Logout </a> ) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; "
  . "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   <a  href='adminpage1.php'><span style='color:white' class='glyphicon glyphicon-circle-arrow-left'></span>Return Back</a></h2>"; 
   
}
else die("You Must Be Logged In");
?>
        <section>
            <h1 style='color:yellow'>USER RECORDS:</h1>
            
            <table class='table table-hover'>
                <thead>
                    <th>Username</th>
                    <th>Password</th>
                    <th>First Name</th>
                    <th>Last Name</th> 
                </thead>
                <tbody>
                    <?php 
                    while($userr= mysql_fetch_assoc($records))
                    {
                        echo "<tr>";
                        echo "<td>".$userr['username']."</td>";
                        echo "<td>".$userr['password']."</td>";
                        echo "<td>".$userr['fname']."</td>";
                        echo "<td>".$userr['lname']."</td>";
                        
                        echo "</tr>";
                        
                        
                        
                    }
                    
                    
                    
                    
                    
                    ?>
                    
                    
                    
                    
                    
                </tbody>
                
                
                
                
            </table>
            
            
            
            
            
        </section>
        
        
        
        
        
        
        
        
        
<footer id="thefooter">
<h4 style="color:yellow;text-align:center;"><span style="color:yellow;" class="glyphicon glyphicon-copyright-mark"></span>
    (Copyright)Akshat Tyagi, Amity University</h4>
</footer>
</div>
</body>
</html>        