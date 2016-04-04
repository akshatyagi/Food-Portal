<!DOCTYPE php>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<title>Admin Page</title>
<link rel="stylesheet" href="main.css" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script id="javascript" src="addnremove.js"></script>
<script id="jquery" src="jquery-hidenshow.js"></script>
</head>

<body>
    <?php 
     $user;
     $pass;
     $userErr;
     $passErr;
     
    
    
    
    
    ?>
    
    
    
    
    
    
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
    <section id="loginsection">
        <h3 style="color:yellow">Kindly Enter your Username and Password to Login</h3>
            <p style="color:red">Logged Out.</p>
             <div id="ldiv">
            <form method="post" action="login.php">
                
            <label style="color:#0017C4" for="usr" id="USERNAME">Username:</label>
            <input style="width:600px" type="text" name="username" id="logu" class="form-control">
                 
            <br><br>
       
            <label style="color:#0017C4" for="usr" id="LASTNAME">Password:</label>
            <input style="width:600px" type="password" id="logpass" class="form-control" name="password">
      
      <br><br>
      
      
      <button type="submit" name="submit" class="btn btn-submit" id="logbtn">Log in to Admin Page</button>       
                
            </form>
            
            
            
        </div>
        
        
        
        
        
        
        
    </section>
           <aside id="lo">
   <img alt="" src="non_momos.jpg" width=585 height=129>
  
   <img alt="" src="decaf__Cat__prod__pg_.jpg" width=585 height=129>
   <img alt="" src="spring_roll.jpg" width=585 height=129>
   </aside>
    <footer id="thefooter">
<h4 style="color:yellow;text-align:center;"><span style="color:yellow;" class="glyphicon glyphicon-copyright-mark"></span>
    (Copyright)Akshat Tyagi, Amity University</h4>
</footer>
        
        
</div>
    
    
</body>



</html>
    
