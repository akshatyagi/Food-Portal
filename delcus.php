<?php 
$user="root";
$pass="";
$db="restaurant_data";



mysql_connect('localhost','root','');

mysql_select_db($db);
$sql="SELECT * FROM data";
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
            <h1 style='color:red'>DELETING CUSTOMER DATA</h1>
            <h3 style='color:yellow'>CUSTOMER RECORDS:</h3>
            <?php
          if(isset($_POST['submit'])){
                     $conn=mysql_connect('localhost','root','');
                    
                    if(! $conn){
                        die('Could Not Connect!'.mysql_error());
                    }
                    
                     $fname=  $_POST['fname'];
                     
                      $sql="DELETE FROM data where firstname='$fname'";
                       mysql_select_db('restaurant_data');
                      $retval = mysql_query( $sql, $conn );
                      
                      if(! $retval )
                           {
                              die('Could not update data: ' . mysql_error());
                            }
                     else { echo "<p style='color:red'>Data Deleted!Refresh or Return back to view updated record!</p>";   }                    
                     mysql_close($conn);
                  
                 
 }
            ?>
            <table class='table table-hover'>
                <thead>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age(years)</th>
                    <th>Email</th> 
                    <th>State</th> 
                    <th>District</th> 
                    <th>Locality</th> 
                    <th>Street Address</th> 
                    <th>Flat</th>
                    <th>Pin</th>
                    <th>Phone</th>
                    
                </thead>
                <tbody>
                    <?php 
                    while($customerr= mysql_fetch_assoc($records))
                    {
                        echo "<tr>";
                        echo "<td>".$customerr['firstname']."</td>";
                        echo "<td>".$customerr['lastname']."</td>";
                        echo "<td>".$customerr['age']."</td>";
                        echo "<td>".$customerr['email']."</td>";
                        echo "<td>".$customerr['optionn']."</td>";
                        echo "<td>".$customerr['district']."</td>";
                        echo "<td>".$customerr['locality']."</td>";
                        echo "<td>".$customerr['street']."</td>";
                        echo "<td>".$customerr['flat']."</td>";
                        echo "<td>".$customerr['pin']."</td>";
                        echo "<td>".$customerr['phone']."</td>";
                       
                        
                        echo "</tr>";
               
                    }
                   
                    ?>
                    
                   
                </tbody>
             
            </table>
             <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
             <label style="color:#0017C4" for="usr" id="HOME_ADDRESS_LOCALITY">Enter the First Name of the entry to be deleted:</label>
             <input style="width:400px" type="text" class="form-control" name="fname">
                            
                                   
      <button type="submit" name="submit" class="btn btn-danger" id='submit' ><span style='color:white' class='glyphicon glyphicon-ban-circle'>Delete</span></button>
            
            </form>
            
        </section>
        
        
        
        
        
        
        
        
        
<footer id="thefooter">
<h4 style="color:yellow;text-align:center;"><span style="color:yellow;" class="glyphicon glyphicon-copyright-mark"></span>
    (Copyright)Akshat Tyagi, Amity University</h4>
</footer>
</div>
</body>
</html>        
