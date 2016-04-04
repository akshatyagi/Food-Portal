<html lang="en-US">
    <head>
        <title>Welcome Administrator!</title>
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
 
                
       <?php 
         
                 if(isset($_POST['submit'])){
                    $conn=mysql_connect('localhost','root','');
                    
                    if(! $conn){
                        die('Could Not Connect!'.mysql_error());
                    }
                    
                     $usrname=  $_POST['usrname'];
                     $passwrd=  $_POST['passwrd'];
                     $reppasswrd= $_POST['reppasswrd']; 
                     
                     if($passwrd!=$reppasswrd) {echo "<h3 style='color:red'>Passwords do not match.Try Again</h3>";}
                     else{
                      $sql="UPDATE users SET password= '$passwrd' where username='$usrname'";
                       mysql_select_db('restaurant_data');
                      $retval = mysql_query( $sql, $conn );
                      
                      if(! $retval )
                           {
                              die('Could not update data: ' . mysql_error());
                            }
                     else { echo "<h3 stle='color:yellow'>Data Updated!</h3>"; header('adminpage1.php');    }                 
                     mysql_close($conn);
                  
                 }
                     
                 }    
         ?>

                
                 <p>&nbsp;</p>
                 <section id="changepassword" style='width:800px'>
                    
                        <h1 style="color:yellow">ENTER THE GIVEN INFO</h1>
                        <br>
                        
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            
                            <div class="form-group">
                            <label style="color:#0017C4" for="usr" id="HOME_ADDRESS_LOCALITY">Username:</label>
                            <input style="width:400px" type="text" class="form-control" name="usrname">
                                    </div>
                            
                            <div class="form-group">
                            <label style="color:#0017C4" for="usr" id="HOME_ADDRESS_LOCALITY">New Password:</label>
                              <input style="width:400px" type="password" class="form-control" name="passwrd">
                                    </div>
                            
                            <div class="form-group">
                            <label style="color:#0017C4" for="usr" id="HOME_ADDRESS_LOCALITY">Repeat Password:</label>
                              <input style="width:400px" type="password" class="form-control" name="reppasswrd">
                                    </div>
                             
                            <button type="submit" name="submit" class="btn btn-success" id='submit' >Confirm User</button>
                            </form>
                        
                        
                    </section>
                
                
                
                 <footer id="thefooter">
<h4 style="color:yellow;text-align:center;"><span style="color:yellow;" class="glyphicon glyphicon-copyright-mark"></span>
    (Copyright)Akshat Tyagi, Amity University</h4>
</footer>
</div>
         </body>
    
</html>