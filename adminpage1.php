<html lang="en-US">
    <head>
        <title>Welcome Administrator!</title>
<link rel="stylesheet" href="main.css" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script id="javascript" src="addnremove.js"></script>
<script id="jquery" src="jquery-hidenshow.js"></script>
<script id="jquery2" src="adminj.js"></script>
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
    echo "<h1 style='color:yellow'>Welcome,".$_SESSION['username']."!"."(<a href='logout.php'>Logout </a>)</h1>"; 
   
}
else die("You Must Be Logged In");
?>

                <section style='width:1200px' id="adminsection">
                    <div id="logdiv">
                    <article id="adarticle">
                         <p>&nbsp;</p>
                       <header> <h1 style="color:yellow;text-align:center;">USER</h1></header>
                        
                        <img  src='user-data.jpg' class="img-circle" width=1125 height=400>
                        <p>&nbsp;</p>
                        
                        <div class="btn-group btn-group-justified">
                        <a href="register.php" id="view1" class="btn btn-success">Register a new User</a>
                        <a href="deluser.php" id="view1" class="btn btn-danger">Delete User</a>
                        
                        
                        </div>
                        
                        <div class="btn-group btn-group-justified">
                         <a href="users.php" id="view1" class="btn btn-primary">View Registered Users</a>   
                        <a href="changepassword.php" id="view2" class="btn btn-warning">Change Password of Existing Customer </a>
                        </div>
                         
                        
                    </article>
                        
                        <article>
                            
                            
                            <p>&nbsp;</p>
                       <header> <h1 style="color:yellow;text-align:center;">CUSTOMER</h1></header>
                        
                        <img  src='SingleView.jpg' class="img-circle" width=1125 height=400>
                        <p>&nbsp;</p>
                        
                        
                        <div class="btn-group btn-group-justified">
                        
                        <a href="customers.php" id="view2" class="btn btn-primary">View Customers </a>
                         <a href="delcus.php" id="view1" class="btn btn-danger">Delete Customer</a>
                        </div>
                        </article>
                        
                        
                         <article>
                            
                            
                            <p>&nbsp;</p>
                       <header> <h1 style="color:yellow;text-align:center;">COMPLAINTS</h1></header>
                        <img  src='complaint.jpg' class="img-circle" width=1125 height=400>
                        
                        <p>&nbsp;</p>
                        <div class="btn-group btn-group-justified">
                        
                        <a href="complaints.php" id="view1" class="btn btn-primary">View Complaints</a>
                        <a href="delcomp.php" id="view2" class="btn btn-danger">Delete Complaint</a>
                        
                       
                        </div>
                            
                            
                            
                            
                        </article>
                        
                        
                        
                        
                    </section>
                    
                    
                             
                    
                    
                 
                
                
                
                
<footer id="thefooter">
<h4 style="color:yellow;text-align:center;"><span style="color:yellow;" class="glyphicon glyphicon-copyright-mark"></span>
    (Copyright)Akshat Tyagi, Amity University</h4>
</footer>
        
        
</div>
        
            
            
            
        </body>
    
</html>
