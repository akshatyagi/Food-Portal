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
                
    $fname = $lname = $usrname = $passwrd = $reppasswrd = "";
                
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                   
                    
         $fname=  test_input($_POST['fname']);
         $lname=  test_input($_POST['lname']);
         $usrname=  test_input($_POST['usrname']);
         $passwrd=  test_input($_POST['passwrd']);
         $reppasswrd=  test_input($_POST['reppasswrd']);
                    
        }
                
         function test_input($value) {
         $value = trim($value);
         $value = stripslashes($value);
         $value = htmlspecialchars($value);
         return $value;
                 }
                 
       if(isset($_POST['submit'])){
            $user="root";
            $passw="";
            $db="restaurant_data";
            $connect2= new mysqli("localhost",$user,$passw,$db);                     
              if ($connect2->connect_error) {
                 die("Connection failed: " . $connect2->connect_error);
                    } 
                     
       if(strlen($fname)>25||strlen($fname)<4){echo "<p style='color:red'>First Name Must Be between 4 to 25 characters</p>";}            
          else {
              if(strlen($lname)>25||strlen($lname)<4){echo "<p style='color:red'>Last Name Must Be between 4 to 25 characters</p>";}
                  else{
                     if(strlen($usrname)>25&&strlen($usrname)<8){ echo "<p style='color:red'>Username Must be between 8 to 25 characters</p>"; }
                        else {
                          if($passwrd!=$reppasswrd){echo "<p style='color:red'>The Passwords do not match</p>"; }
                             else {
                                 $sql="INSERT INTO USERS(username,password,fname,lname) values ('$usrname','$passwrd','$fname','$lname')";
                                    if ($connect2->query($sql) === TRUE) {
                             
                             header("Location:loginregister.php");
                             
                             } else {
                               echo "Error creating database: " . $connect2->error;
                                                        }

                                              }
                                          }
                                  }
                          }     
                   } 
                     
          
                ?>
                <?php
session_start();
 if($_SESSION['username']){
    echo "<h1 style='color:yellow'>Welcome,".$_SESSION['username']."!"."(<a href='logout.php'>Logout </a> ) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; "
  . "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   <a  href='adminpage1.php'><span style='color:white' class='glyphicon glyphicon-circle-arrow-left'></span>Return Back</a></h2>"; 
   
}
else die("You Must Be Logged In");
?>
                
                         <section id="newuser">
                        <h1 style="color:yellow">KINDLY FILL IN THE FOLLOWING DETAILS!</h1>
                        <br>
                        
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                           <div class="form-group">
                            <label style="color:#0017C4" for="usr" id="HOME_ADDRESS_LOCALITY">First Name:</label>
                            <input style="width:400px" type="text" class="form-control" name="fname" value="<?php echo $fname; ?>">
                                    </div>
                              
                             <div class="form-group">
                            <label style="color:#0017C4" for="usr" id="HOME_ADDRESS_LOCALITY">Last Name:</label>
                              <input style="width:400px" type="text" class="form-control" name="lname" value="<?php echo $lname; ?>">
                                    </div>
                            
                             <div class="form-group">
                            <label style="color:#0017C4" for="usr" id="HOME_ADDRESS_LOCALITY">Username:</label>
                            <input style="width:400px" type="text" class="form-control" name="usrname" value="<?php echo $usrname; ?>">
                                    </div>
                            
                            <div class="form-group">
                            <label style="color:#0017C4" for="usr" id="HOME_ADDRESS_LOCALITY">Password:</label>
                              <input style="width:400px" type="password" class="form-control" name="passwrd">
                                    </div>
                            
                            <div class="form-group">
                            <label style="color:#0017C4" for="usr" id="HOME_ADDRESS_LOCALITY">Repeat Password:</label>
                              <input style="width:400px" type="password" class="form-control" name="reppasswrd">
                                    </div>
                            
                            <button type="submit" name="submit" class="btn btn-success" >Confirm User</button>
                            </form>
                        
                        
                    </section>
                
                
                
 <footer id="thefooter">
<h4 style="color:yellow;text-align:center;"><span style="color:yellow;" class="glyphicon glyphicon-copyright-mark"></span>
    (Copyright)Akshat Tyagi, Amity University</h4>
</footer>
</div>
         </body>
    
</html>