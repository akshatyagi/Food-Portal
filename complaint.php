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

<style>
    #formsection1{
        width:800px;
        
        
        
        
    }
    
    
</style>


</head>

<body>
    
    <?php
// define variables and set to empty values


$name = $email = $phone = $nature = $detail= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
 $name = test_input($_POST["name"]);

 $phone = test_input($_POST["phone"]);
   
 $email = test_input($_POST["email"]);
   
 $nature= test_input($_POST["nature"]);

 $detail= test_input($_POST["detail"]); 
   
  
   
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$user="root";
$pass="";
$db="restaurant_data";

$conn=new mysqli("localhost",$user,$pass,$db) or die("Ain't Working Bro!");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST['submit'])) {
$sql="INSERT INTO COMPLAINTS (fullname,phone,email,nature,detail)
VALUES ('$name' , '$phone' , '$email' , '$nature' , '$detail' )";


if ($conn->query($sql) === TRUE) {
    echo 'You Complaint has been registered!';
    header('intro.php');
} else {
    echo "Error creating database: " . $conn->error;
}

}

$conn->close();

?>
    
    
    
    <div id="div1">
<header id="topheader"><h1>Welcome to the JUNGLE!!</h1></header>
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
          <li class="active"><a style="color:yellow;text-shadow: 2px 2px green;" href="complaint.php">Complaint</a></li>
        <li><a style="color:yellow;text-shadow: 2px 2px green;" href="admin.php"><span style="color:green;text-shadow: 2px 2px yellow;" class="glyphicon glyphicon-log-in"></span>Admin Panel Login</a></li>
      </ul>
      
    </div>
  </div>
</nav>

<section id="formsection1">
    
<div class="container">
  
 <h1 style="color:yellow">CUSTOMER SATISFACTION,OUR PRIORITY!</h1><br>
 
  <p><span class="error" style="color:red">* required field.</span></p>
  <form method="post" id="cform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
      
    <div class="form-group">
      <label style="color:#0017C4" for="usr" id="FIRSTNAME"> Name:</label>
      <input style="width:650px" type="text" name="name" class="form-control"  placeholder="Enter Name:">
      <span class="error" style="color:red">*</span>
    </div>
      
      <div class="form-group">
      <label style="color:#0017C4" for="usr" id="PHONE">Telephone Number:</label>
      <input style="width:650px" type="text" class="form-control" name="phone" placeholder="Enter You Mobile/Landline Number">
      <span class="error" style="color:red">*</span>
    </div>
     
    <div class="form-group">
      <label style="color:#0017C4" for="email" ID="EMAIL_ADDRESS">Email:</label>
      <input style="width:650px" type="email" class="form-control" name="email" placeholder="email-id@example.com">
	  <span class="error" style="color:red">*</span>
    </div>
      	
    <div class="form-group">
      <label style="color:#0017C4" for="usr" id="HOME_ADDRESS_STREET">Nature of Complaint:</label>
      <input style="width:650px" type="text" class="form-control" name="nature" placeholder="Street Adress">
      <span class="error" style="color:red">*</span>
    </div>
     
     
      
      <textarea name="detail" form="cform" rows="10" cols="90" placeholder='Brief Comment(about 150 words)'></textarea><br>
      <br>
    
    

   <button type="submit" name="submit" class="btn btn-success">Submit Complaint</button>
  </form> 
  
 
  
 </div>
</section>






<footer id="thefooter">
<h4 style="color:yellow;text-align:center;"><span style="color:yellow;" class="glyphicon glyphicon-copyright-mark"></span>
    (Copyright)Akshat Tyagi, Amity University</h4>
</footer>

</div>
</body>
</html>

