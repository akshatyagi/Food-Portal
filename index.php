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
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<?php
// define variables and set to empty values


$fname = $lname = $email = $age = $option = $district= $locality = $street = $flat = $pin = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   
     $fname = test_input($_POST["fname"]);
     $lname = test_input($_POST["lname"]);
 
     $age = test_input($_POST["age"]);

     $email = test_input($_POST["email"]);

     $option = test_input($_POST["option"]);

     $district = test_input($_POST["district"]);
 
     $locality = test_input($_POST["locality"]);

     $street = test_input($_POST["street"]);
 
     $flat = test_input($_POST["flat"]);
 
     $pin = test_input($_POST["pin"]);

     $phone = test_input($_POST["phone"]);
   
   
   
  
   
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
$sql="INSERT INTO DATA (firstname,lastname,age,email,optionn,district,locality,street,flat,pin,phone)
VALUES ('$fname' , '$lname' , '$age', '$email' , '$option' , '$district' , '$locality' , '$street', '$flat', '$pin', '$phone' )";


if ($conn->query($sql) === TRUE) {
    echo "Order Saved. Shop for more!";
} else {
    echo "Error creating database: " . $conn->error;
}

}

$conn->close();

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
        <li   class="active"><a style="color:yellow;text-shadow: 2px 2px green;" href="index.php">Order Online</a></li>
        <li><a style="color:yellow;text-shadow: 2px 2px green;" href="articles.php">Articles</a></li>
         
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a style="color:yellow;text-shadow: 2px 2px green;" href="faq1.html">FAQ</a></li>
          <li><a style="color:yellow;text-shadow: 2px 2px green;" href="complaint.php">Complaint</a></li>
        <li><a style="color:yellow;text-shadow: 2px 2px green;" href="admin.php"><span style="color:green;text-shadow: 2px 2px yellow;" class="glyphicon glyphicon-log-in"></span>Admin Panel Login</a></li>
      </ul>
      
    </div>
  </div>
</nav>

<nav id="foodmenu" class="navbar navbar-default">
<div class="container-fluid">
  <div>
      <ul class="nav navbar-nav">
        <li id="ma0"><a href="#" style="yellow" id="newarrival" name="ma0">New Arrival:</a></li>
        <li id="ma1"><a href="#" style="#F8FF01" id="tandoor" name="ma1">Tandoor:</a></li>
        <li id="ma2"><a href="#" style="#F8FF01" id="chinese" name="ma2">Chinese:</a></li>
        <li id="ma3"><a href="#" style="#F8FF01" id="vegetarian" name="ma3">Vegetarian:</a></li>
        <li id="ma4"><a href="#" style="#F8FF01" id="nvegetarian" name="ma4">Non-Vegetarian:</a></li>
	<li id="ma5"><a href="#" style="#F8FF01" id="continental" name="ma5">Continental:</a></li>
        <li id="ma6"><a href="#" style="#F8FF01" name="ma5">Step 2: The final Registration of your Order for Delivery!</a></li>
        </ul>
    </div>
  </div>
</nav>
    
 
 
<section id="menusection">
    <br>
    <div class="progress" id='pb1'>
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:7%" value='Kindly Select an item'>
    0% Completed!
  </div>
   </div>
    <div class="progress" id='pb2'>
    <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:33%" value='Kindly Select an item'>
    33% Completed!
  </div>
   </div>
<h1 id="mainh" style="color:yellow">THE BEST NEW RANGE IN TOWN!</h1>
<h1 id="tandoorh" style="color:yellow">TANDOOR</h1>
<h1 id="chineseh" style="color:yellow">CHINESE</h1> 
<h1 id="vegh" style="color:yellow">VEGETARIAN</h1>
<h1 id="nvegh" style="color:yellow">NON-VEGETARIAN</h1>
<h1 id="conh" style="color:yellow">CONTINENTAL</h1>

<table id="table0">
  <tr><td>
  <div id="m1">
    <p style="color:#E05E06">Cheese Burger:</p>
    <p><img class="img-circle" src="hero_pdt_cheeseburger.png" alt="" width="200" height="160" align="absmiddle"/> Rs.99/-    
      <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa1"  class="btn btn-primary" onclick=addtoorder(99)><span style="color:white" class="glyphicon glyphicon-plus"></span>Add</a>
  <a href="#" style="color:white" id="fr1" class="btn btn-danger" onclick=delorder(99)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
      </td><td>
  <div id="m2">
    <p style="color:#E05E06">Veg Nuggets:</p>
    <p><img class="img-circle" src="Crunchy-Vegetable-Nuggets.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.59/-    
      <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa2" class="btn btn-primary" onclick=addtoorder(59)><span style="color:white" class="glyphicon glyphicon-plus"></span>Add</a>
  <a href="#" style="color:white" id="fr2" class="btn btn-danger" onclick=delorder(59)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  <div id="m3">
    <p style="color:#E05E06">Decaffinated Coffee:</p>
    <p><img class="img-circle" src="decaf__Cat__prod__pg_.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.79/-    
       <div class="btn-group btn-group-justified">
     <a href="#" style="color:white" id="fa3" class="btn btn-primary" onclick=addtoorder(79)><span style="color:white" class="glyphicon glyphicon-plus"></span>Add</a>
  <a href="#" style="color:white" id="fr3" class="btn btn-danger" onclick=delorder(79)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td>
  <td>
  <div id="m4">
    <p style="color:#E05E08">Aloo Puri:</p>
    <p><img class="img-circle" src="aloo_puri.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.89/-    
       <div class="btn-group btn-group-justified">
 <a href="#" style="color:white" id="fa4" class="btn btn-primary" onclick=addtoorder(89)><span style="color:white" class="glyphicon glyphicon-plus"></span>Add</a>
  <a href="#"style="color:white" id="fr4" class="btn btn-danger" onclick=delorder(89)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td></tr>
  <tr><td>
  <div id="m5">
    <p style="color:#E05E06">Veg Lasanga:</p>
    <p><img class="img-circle" src="veg_lasanga.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.129/-    
       <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa5" class="btn btn-primary" onclick=addtoorder(129)><span style="color:white" class="glyphicon glyphicon-plus"></span>Add</a>
  <a href="#" style="color:white" id="fr5" class="btn btn-danger" onclick=delorder(129)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td></td></tr>
</table>

  <table id="table1">
  <tr><td>
  <div id="m6">
    <p>Paneer Tikka:</p>
    <p><img class="img-circle" src="tandoori-paneer-tikka.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.149/-    
      <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa6" class="btn btn-primary" onclick=addtoorder(149)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr6" class="btn btn-danger" onclick=delorder(149)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  <div id="m7">
    <p>Hariyaali Paneer Tikka:</p>
    <p><img class="img-circle" src="Paneer-Hariyali-Tikka.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.189/-    
      <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa7" class="btn btn-primary" onclick=addtoorder(189)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr7" class="btn btn-danger" onclick=delorder(189)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  <div id="m8">
    <p>Mushroom Tikka:</p>
    <p><img class="img-circle" src="mushroom_tikka.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.179/-    
       <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa8" class="btn btn-primary" onclick=addtoorder(179)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr8" class="btn btn-danger" onclick=delorder(179)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  <div id="m9">
    <p>Veg Kebab:</p>
    <p><img class="img-circle" src="veg_kebab.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.109/-    
       <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa9" class="btn btn-primary" onclick=addtoorder(109)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr9" class="btn btn-danger" onclick=delorder(109)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td></tr>
  <tr><td>
  <div id="m10">
    <p>Seekh Kebab:</p>
    <p><img class="img-circle" src="seekh_kabab.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.199/-    
       <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa10" class="btn btn-primary" onclick=addtoorder(199)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white"  id="fr10" class="btn btn-danger" onclick=delorder(199)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
   <div id="m11">
    <p>Bharwani Aloo:</p>
    <p><img class="img-circle" src="tandoori-aloo.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.139/-    
       <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa11" class="btn btn-primary" onclick=addtoorder(139)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr11" class="btn btn-danger" onclick=delorder(139)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  
      
  </td><td>
  <div id="m12">
    <p>Methi Aloo Tikki:</p>
    <p><img class="img-circle" src="methi_tikka.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.169/-    
       <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa12" class="btn btn-primary" onclick=addtoorder(169)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr12" class="btn btn-danger" onclick=delorder(169)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  <div id="m13">
    <p>Chicken Tikka:</p>
    <p><img class="img-circle" src="chicken_tikka.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.249/-    
       <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa13" class="btn btn-primary" onclick=addtoorder(249)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr13" class="btn btn-danger" onclick=delorder(249)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td></tr>
  <tr><td>
  <div id="m14">
    <p>Fish Tikka:</p>
    <p><img class="img-circle" src="fish_tikka.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.279/-    
       <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa14" class="btn btn-primary" onclick=addtoorder(279)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr14" class="btn btn-danger" onclick=delorder(279)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  <div id="m15">
    <p>Soya Chaap:</p>
    <p><img class="img-circle" src="soya_chaap.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.239/-    
       <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa15" class="btn btn-primary" onclick=addtoorder(239)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr15" class="btn btn-danger" onclick=delorder(239)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
	  </p>
	  </div>
	  </td><td>
  <div id="m16">
    <p>Malai Chaap:</p>
    <p><img class="img-circle" src="malai_chaap.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.289/-    
       <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa16" class="btn btn-primary" onclick=addtoorder(289)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr16" class="btn btn-danger" onclick=delorder(289)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
	  </p>
	  </div>
</td><td>
  <div id="m17">
    <p>Masala Chaap:</p>
    <p><img class="img-circle" src="masala_chaap.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.299/-    
       <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa17" class="btn btn-primary" onclick=addtoorder(299)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr17" class="btn btn-danger" onclick=delorder(299)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td></tr>
  </table>
  <table id="table2">
  <tr><td>
  <div id="m18">
    <p style="color:green">Veg Chopsuey:</p>
    <p><img class="img-circle" src="veg_chopsuey.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.199/-    
    <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa18" class="btn btn-primary" onclick=addtoorder(199)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr18" class="btn btn-danger" onclick=delorder(199)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  <div id="m19">
    <p style="color:green">Chilly Paneer:</p>
    <p><img class="img-circle" src="chilly_paneer.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.209/-    
    <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa19" class="btn btn-primary" onclick=addtoorder(209)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr19" class="btn btn-danger" onclick=delorder(209)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  
  <div id="m20">
    <p style="color:green">Veg Spring Roll</p>
    <p><img class="img-circle" src="spring_roll.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.129/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa20" class="btn btn-primary" onclick=addtoorder(129)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr20" class="btn btn-danger" onclick=delorder(129)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  
  <div id="m21">
    <p style="color:green">Veg Momos-6pc</p>
    <p><img class="img-circle" src="vegetable-momos.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.119/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa21" class="btn btn-primary" onclick=addtoorder(119)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr21" class="btn btn-danger" onclick=delorder(119)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td></tr>
  <tr><td>
  <div id="m22">
    <p style="color:green">Non Veg Momo-6pc</p>
    <p><img class="img-circle" src="non_momos.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.159/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa22" class="btn btn-primary" onclick=addtoorder(159)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr22" class="btn btn-danger" onclick=delorder(159)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
   <div id="m23">
    <p style="color:green">Veg Hakka Noodles</p>
    <p><img class="img-circle" src="hakka-noodles-recipe9.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.219-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa23" class="btn btn-primary" onclick=addtoorder(219)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr23" class="btn btn-danger" onclick=delorder(219)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  <div id="m24">
    <p style="color:green">Veg Garlic Noodles</p>
    <p><img class="img-circle" src="veg_garlic.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.209/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa24" class="btn btn-primary" onclick=addtoorder(209)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr24" class="btn btn-danger" onclick=delorder(209)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  <div id="m25">
    <p style="color:green">Chicken Garlic Noodles</p>
    <p><img class="img-circle" src="chicken_garlic.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.249/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa25" class="btn btn-primary" onclick=addtoorder(249)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr25" class="btn btn-danger" onclick=delorder(249)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td></tr>
  <tr><td>
  <div id="m26">
    <p style="color:green">Veg Chowmein</p>
    <p><img class="img-circle" src="chowmein.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.199/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa26" class="btn btn-primary" onclick=addtoorder(199)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr26" class="btn btn-danger" onclick=delorder(199)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  <div id="m27">
    <p style="color:green">Veg Manchurian</p>
    <p><img class="img-circle" src="manchurian.png" alt="" width="200" height="160" align="absmiddle"/> Rs.239/-    
      <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa27" class="btn btn-primary" onclick=addtoorder(239)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr27" class="btn btn-danger" onclick=delorder(239)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
	  </p>
	  </div>
	  </td><td>
  <div id="m28">
    <p style="color:green">Gobi Manchurian</p>
    <p><img  class="img-circle" src="Gobi-Manchurian-600.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.259/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa28" class="btn btn-primary" onclick=addtoorder(259)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white"   id="fr28" class="btn btn-danger" onclick=delorder(259)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
	  </p>
	  </div>
</td><td>
  <div id="m29">
    <p style="color:green">Schezwan Noodles</p>
    <p><img class="img-circle" src="schezwan.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.189/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white"  id="fa29" class="btn btn-primary" onclick=addtoorder(189)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr29" class="btn btn-danger" onclick=delorder(189)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td></tr>
  </table>
  <table id="table3">
  <tr><td>
  <div id="m30">
    <p style="color:#ED702F">Paneer Tikka Masala</p>
    <p><img class="img-circle" src="paneer-tikka-masala-600x448.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.299/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa30" class="btn btn-primary" onclick=addtoorder(299)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr30" class="btn btn-danger" onclick=delorder(299)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  
  <div id="m31">
    <p style="color:#ED702F">Aloo Gobhi</p>
    <p><img class="img-circle" src="aloo-gobhi1.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.159/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa31" class="btn btn-primary" onclick=addtoorder(159)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr31" class="btn btn-danger" onclick=delorder(159)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  
  <div id="m32">
    <p style="color:#ED702F">Okra Masala</p>
    <p><img class="img-circle" src="bhindi-masala7.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.129/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa32" class="btn btn-primary" onclick=addtoorder(129)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr32" class="btn btn-danger" onclick=delorder(129)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  <div id="m33">
    <p style="color:#ED702F">Kadhai Paneer</p>
    <p><img class="img-circle" src="Kadhai-paneer-www.recipecurry.com_.jpg" alt="" width="200" height="160" align="absmiddle"/>Rs.239/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa33" class="btn btn-primary" onclick=addtoorder(239)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr33" class="btn btn-danger" onclick=delorder(239)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td></tr>
  <tr><td>
  <div id="m34">
    <p style="color:#ED702F">Mattar Paneer</p>
    <p><img class="img-circle" src="matar-paneer.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.269/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa34" class="btn btn-primary" onclick=addtoorder(269)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr34" class="btn btn-danger" onclick=delorder(269)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
   <div id="m35">
    <p style="color:#ED702F">Mixed Vegetable</p>
    <p><img class="img-circle" src="mix-vegetable_lose_rte.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.189-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa35" class="btn btn-primary" onclick=addtoorder(189)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr35" class="btn btn-danger" onclick=delorder(189)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  <div id="m36">
    <p style="color:#ED702F">Rajma Masala</p>
    <p><img class="img-circle" src="rajama_masala.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.229/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa36" class="btn btn-primary" onclick=addtoorder(229)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr36" class="btn btn-danger" onclick=delorder(229)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  <div id="m37">
    <p style="color:#ED702F">Chole Masala</p>
    <p><img  class="img-circle"src="chana_masala_033.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.229/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa37" class="btn btn-primary" onclick=addtoorder(229)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr37" class="btn btn-danger" onclick=delorder(229)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td></tr>
  <tr><td>
  <div id="m38">
    <p style="color:#ED702F">Dal Fry</p>
    <p><img class="img-circle" src="daal_fry.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.119/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa38" class="btn btn-primary" onclick=addtoorder(119)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr38" class="btn btn-danger" onclick=delorder(119)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
 </td><td>
  <div id="m39">
    <p style="color:#ED702F">Tawa Masala</p>
    <p><img class="img-circle" src="tava-paneer-masala-recipe7.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.169/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa39" class="btn btn-primary" onclick=addtoorder(169)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr39" class="btn btn-danger" onclick=delorder(169)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
	  </p>
	  </div>
	  </td><td>
  <div id="m40">
    <p style="color:#ED702F">Mushroom Masala</p>
    <p><img class="img-circle" src="mushroom-curry.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.159/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa40" class="btn btn-primary" onclick=addtoorder(159)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr40" class="btn btn-danger" onclick=delorder(159)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div> </p>
	  </div>
	  </td><td>
  <div id="m41">
    <p style="color:#ED702F">Dum Aloo Kashmiri</p>
    <p><img class="img-circle" src="Kashmiri-Dum-Aloo.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.199/-    
    <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa41" class="btn btn-primary" onclick=addtoorder(199)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr41" class="btn btn-danger" onclick=delorder(199)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
	  </div>
	  </td></tr>
  <tr><td>
	  <div id="m42">
    <p style="color:#ED702F">Dal Makhani</p>
    <p><img class="img-circle" src="daal_makhani.JPG" alt="" width="200" height="160" align="absmiddle"/> Rs.289/-    
     <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa42" class="btn btn-primary" onclick=addtoorder(289)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr42" class="btn btn-danger" onclick=delorder(289)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
 
                  </td></tr>
  </table>
  
  <table id="table4">
  <tr><td>
  <div id="m43">
    <p style="color:#9566B9">Chicken Vindaloo:</p>
    <p><img class="img-circle" src="chicken_vindaloo.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.309/-    
      <div class="btn-group btn-group-justified">
  <a href="#" style="color:white"  id="fa43" class="btn btn-primary" onclick=addtoorder(309)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr43" class="btn btn-danger" onclick=delorder(309)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  <div id="m44">
    <p style="color:#9566B9">Mutton Korma:</p>
    <p><img class="img-circle" src="MUTTON-KORMA-RED-MEAT-KORMA.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.359/-    
      <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa44" class="btn btn-primary" onclick=addtoorder(359)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr44" class="btn btn-danger" onclick=delorder(359)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  <div id="m45">
    <p style="color:#9566B9">Chicken Masala:</p>
    <p><img class="img-circle" src="chicken-masala.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.289/-    
       <div class="btn-group btn-group-justified">
     <a href="#" style="color:white" id="fa45" class="btn btn-primary" onclick=addtoorder(289)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr45" class="btn btn-danger" onclick=delorder(289)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
</td><td>
  <div id="m46">
    <p style="color:#9566B9">Fish Masala:</p>
    <p><img class="img-circle" src="fish-masala-curry-1.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.319/-    
       <div class="btn-group btn-group-justified">
 <a href="#" style="color:white" id="fa46" class="btn btn-primary" onclick=addtoorder(319)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr46" class="btn btn-danger" onclick=delorder(319)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td></tr>
      <tr><td>
  <div id="m47">
    <p style="color:#9566B9">Egg Curry:</p>
    <p><img class="img-circle" src="egg-curry-recipe.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.199/-    
       <div class="btn-group btn-group-justified">
  <a href="#" style="color:white"style="color:white" id="fa47" class="btn btn-primary" onclick=addtoorder(199)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr47" class="btn btn-danger" onclick=delorder(199)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td>
  <td>
   <div id="m48">
    <p style="color:#9566B9">Kadhai Chicken:</p>
    <p><img class="img-circle" src="KadaiChicken.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.279/-    
       <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa48" class="btn btn-primary" onclick=addtoorder(279)><span style="color:white" class="glyphicon glyphicon-plus">Addr</a>
  <a href="#" style="color:white" id="fr48" class="btn btn-danger" onclick=delorder(279)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div></td><td>
   <div id="m49">
    <p style="color:#9566B9">Butter Chicken:</p>
    <p><img class="img-circle" src="Butter-Chicken.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.349/-    
       <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa49" class="btn btn-primary" onclick=addtoorder(349)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr49" class="btn btn-danger" onclick=delorder(349)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
  </td></tr>
</table>

<table id="table5">
  <tr><td>
  <div id="m50">
    <p style="color:#005C88">Pasta(White Sauce):</p>
    <p><img class="img-circle" src="Italian-Pasta-with-Mushroom-Sauce.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.199/-    
      <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa50" class="btn btn-primary" onclick=addtoorder(199)><span style="color:white" class="glyphicon glyphicon-plus">Addr</a>
  <a href="#" style="color:white"  id="fr50" class="btn btn-danger" onclick=delorder(199)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td>
  <td>
  <div id="m51">
    <p style="color:#005C88">Pasta(Red Sauce):</p>
    <p><img class="img-circle" src="pastawithtomatosauce_90243_16x9.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.209/-    
      <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa51" class="btn btn-primary" onclick=addtoorder(209)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr51" class="btn btn-danger" onclick=delorder(209)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  <div id="m52">
    <p style="color:#005C88">Veg Burger:</p>
    <p><img class="img-circle" src="Veg_Burger_L.png" alt="" width="200" height="160" align="absmiddle"/> Rs.49/-    
       <div class="btn-group btn-group-justified">
     <a href="#" style="color:white" id="fa52" class="btn btn-primary" onclick=addtoorder(49)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr52" class="btn btn-danger" onclick=delorder(49)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  <div id="m53">
    <p style="color:#005C88">Egg Burger:</p>
    <p><img class="img-circle" src="CroppedImage500500-Egg-Burger.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.79/-    
       <div class="btn-group btn-group-justified">
 <a href="#" style="color:white" id="fa53" class="btn btn-primary" onclick=addtoorder(79)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr53" class="btn btn-danger" onclick=delorder(79)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
 </td></tr>
  <tr><td>
  <div id="m54">
    <p style="color:#005C88">Chicken Burger:</p>
    <p><img class="img-circle" src="Burgers-GDL-Spicy-Chicken-ME.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.119/-    
       <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa54" class="btn btn-primary" onclick=addtoorder(119)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr54" class="btn btn-danger" onclick=delorder(119)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td>
  <td>
  <div id="m55">
    <p style="color:#005C88">Fish Burger</p>
    <p><img class="img-circle" src="burger-fish-burger.png" alt="" width="200" height="160" align="absmiddle"/> Rs.159/-    
       <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa55" class="btn btn-primary" onclick=addtoorder(159)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr55" class="btn btn-danger" onclick=delorder(159)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
  </p>
  </div>
 </td><td>
  <div id="m56">
    <p style="color:#005C88">Ch. Grilled Sandwich:</p>
    <p><img class="img-circle" src="grilled-cheese-_-sex.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.69/-    
      <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa56" class="btn btn-primary" onclick=addtoorder(69)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr56" class="btn btn-danger" onclick=delorder(69)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td><td>
  <div id="m57">
    <p style="color:#005C88">French Fries:</p>
    <p><img class="img-circle" src="sides-french-fries.png" alt="" width="200" height="160" align="absmiddle"/> Rs.89/-    
      <div class="btn-group btn-group-justified">
  <a href="#" style="color:white" id="fa57" class="btn btn-primary" onclick=addtoorder(89)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr57" class="btn btn-danger" onclick=delorder(89)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td></tr>
  <tr><td>
  <div id="m58">
    <p style="color:#005C88">Hash Browns:</p>
    <p><img class="img-circle" src="02510_hash_brown_ovals.480.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.79/-    
       <div class="btn-group btn-group-justified">
     <a href="#" style="color:white" id="fa58" class="btn btn-primary" onclick=addtoorder(79)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr58" class="btn btn-danger" onclick=delorder(79)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
 </td><td>
  <div id="m59">
    <p style="color:#005C88">Veg Hot Dog:</p>
    <p><img class="img-circle" src="Veggie_Garden_Hot_Dogs.jpg" alt="" width="200" height="160" align="absmiddle"/> Rs.99/-    
       <div class="btn-group btn-group-justified">
     <a href="#" style="color:white" id="fa59" class="btn btn-primary" onclick=addtoorder(99)><span style="color:white" class="glyphicon glyphicon-plus">Add</a>
  <a href="#" style="color:white" id="fr59" class="btn btn-danger" onclick=delorder(99)><span style="color:white" class="glyphicon glyphicon-minus"></span>Delete</a>
  </div>
    </p>
  </div>
  </td></tr>
  </table>
  
  
  </section>
  
  
  <section id="formsection" style="width:965px">
<br>
 <div class="progress" id='pb2'>
    <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:70%" value='Kindly Select an item'>
    70% 
  </div>
   </div>

<div class="container">
  
 <h1 style="color:yellow">ENTER THE DETAILS:</h1><br>
 
  <p><span class="error" style="color:red">* required field.</span></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
      
    <div class="form-group">
      <label style="color:#0017C4" for="usr" id="FIRSTNAME"> First Name:</label>
      <input style="width:650px" type="usr" name="fname" class="form-control"  placeholder="Enter First Name">
	  <span class="error" style="color:red">*</span>
    </div>
      
	<div class="form-group">
      <label style="color:#0017C4" for="usr" id="LASTNAME">Surname:</label>
      <input style="width:650px" type="usr" class="form-control" name="lname"  placeholder="Enter Surname">
	  <span class="error" style="color:red">*</span>
    </div>
	
	<div class="form-group">
      <label style="color:#0017C4" for="email" ID="AGE">Age:</label>
      <input style="width:650px" type="usr" class="form-control" name="age" placeholder="Age">
	  
    </div>
	
    <div class="form-group">
      <label style="color:#0017C4" for="email" ID="EMAIL_ADDRESS">Email:</label>
      <input style="width:650px" type="email" class="form-control" name="email" placeholder="email-id@example.com">
	  <span class="error" style="color:red">*</span>
    </div>
      
	<div class="form-group">
      <label style="color:#0017C4" for="usr" id="HOME_ADDRESS_STATE">State/Union Territory:</label>
      <input style="width:650px" type="usr" class="form-control" name="option" placeholder="Select State">
      <span class="error" style="color:red">*</span>
    </div>
	
<div class="form-group">
      <label style="color:#0017C4" for="usr" id="HOME_ADDRESS_CITY">District:</label>
      <input style="width:650px" type="usr" class="form-control" name="district" placeholder="City/District">
      <span class="error" style="color:red">*</span>
    </div>	

<div class="form-group">
      <label style="color:#0017C4" for="usr" id="HOME_ADDRESS_LOCALITY">Locality:</label>
      <input style="width:650px" type="usr" class="form-control" name="locality" placeholder="Locality">
      
    </div>	
	
<div class="form-group">
      <label style="color:#0017C4" for="usr" id="HOME_ADDRESS_STREET">Street Address:</label>
      <input style="width:650px" type="usr" class="form-control" name="street" placeholder="Street Adress">
      <span class="error" style="color:red">*</span>
    </div>

<div class="form-group">
      <label style="color:#0017C4" for="usr" id="HOME_ADDRESS_FLAT">Flat Number:</label>
      <input style="width:650px" type="usr" class="form-control" name="flat" placeholder="Flat Number Including the Building Number">
      <span class="error" style="color:red">*</span>
    </div>		

<div class="form-group">
      <label style="color:#0017C4" for="usr" id="PINCODE">Pincode:</label>
      <input style="width:650px" type="usr" class="form-control" name="pin" placeholder="6 digit Pincode">
    </div>	

	<div class="form-group">
      <label style="color:#0017C4" for="usr" id="PHONE">Telephone Number:</label>
      <input style="width:650px" type="usr" class="form-control" name="phone" placeholder="Enter You Mobile/Landline Number">
      <span class="error" style="color:red">*</span>
    </div>	

	
	<div class="form-group">
      <label style="color:#0017C4" for="usr" id="AMOUNT">Payable Amount:Rs.</label>
      <label style="color:#0017C4" for="usr"  id="amount"></label>
       
	  </div>
    
   <button type="submit" name="submit" class="btn btn-success" id="ao">Authenticate Order</button>
  </form> 
  
 </div>
</section>
 
  
  
  <aside id="billaside">
<h1 style="color:yellow">BILL</h1>
<p id="kind">Kindly Select some item from the Menu to get started!</p><br>
  <p>Total Amount payable:Rs.<label id="l1">0</label></p>
  <p>VAT Tax(12.5%):Rs.<label id="l2">0</label></p>
  <p>Payable Amount(Final amt to be paid):Rs.<label id="l3">0</label></p>
  <div class="btn-group btn-group-justified">
  <a href="#" id="buy" class="btn btn-success">Order</a>
  <a href="#" id="delo" class="btn btn-info">Alter Order?</a>
  
  </div>
  </aside>
<aside id="itemaside">
<h1 id="h11" style="color:yellow">List of Items Selected:</h1>
<h1 id="h21" style="color:yellow">List of Items Purchased:</h1>
<ul><li id="li0">Nothing Selected</li></ul>
<ol id="selecteditem">
    
    <li id="li1">Cheese Burger(Rs.99)</li>
	<li id="li2">Veg Nuggets(Rs.59)</li>
	<li id="li3">Decaffinated Coffee(Rs.79)</li>
	<li id="li4">Aloo Puri(Rs.89)</li>
	<li id="li5">Veg Lasanga(Rs.129)</li>
	<li id="li6">Paneer Tikka(Rs.149)</li>
	<li id="li7">Hariyali Paneer Tikka(Rs.189)</li>
	<li id="li8">Mushroom Tikka(Rs.179)</li>
	<li id="li9">Veg Kebab(Rs.109)</li>
	<li id="li10">Sikh Kebab(Rs.199)</li>
	<li id="li11">Bharwani Aloo(Rs.139)</li>
	<li id="li12">Methi Aloo Tikki(Rs.169)</li>
	<li id="li13">Chicken Tikka(Rs.249)</li>
	<li id="li14">Fish Tikka(Rs.279)</li>
	<li id="li15">Soya Chaap(Rs.239)</li>
	<li id="li16">Malai Chaap(Rs.289)</li>
	<li id="li17">Masala Chaap(Rs.299)</li>
	<li id="li18">Veg Chopsuey(Rs.199)</li>
	<li id="li19">Chilly Paneer(Rs.209)</li>
	<li id="li20">Veg Spring Roll(Rs.129)</li>
	<li id="li21">Veg Momos(Rs.119)</li>
	<li id="li22">Non Veg Momos(Rs.159)</li>
	<li id="li23">Hakka Noodles(Rs.219)</li>
	<li id="li24">Veg Garlic Noodles(Rs.209)</li>
	<li id="li25">Chicken Garlic Noodles(Rs.249)</li>
	<li id="li26">Veg Chowmein(Rs.199)</li>
	<li id="li27">Veg Manchurian(Rs.239)</li>
	<li id="li28">Gobi Manchurian(Rs.259)</li>
	<li id="li29">Schezwan Noodles(Rs.189)</li>
	<li id="li30">Paneer Tikka Masala(Rs.299)</li>
	<li id="li31">Aloo Gobhi(Rs.159)</li>
	<li id="li32">Okra Masala(Rs.129)</li>
	<li id="li33">Kadhai Paneer(Rs.239)</li>
	<li id="li34">Mattar Paneer(Rs.269)</li>
	<li id="li35">Mix Vegetable(Rs.189)</li>
	<li id="li36">Rajma Masala(Rs.229)</li>
	<li id="li37">Chole Masala(Rs.229)</li>
	<li id="li38">Dal Fry(Rs.119)</li>
	<li id="li39">Tawa Masala(Rs.169)</li>
	<li id="li40">Mushroom Masala(Rs.159)</li>
	<li id="li41">Dum Aloo Kashmiri(Rs.199)</li>
	<li id="li42">Dal Makhani(Rs.289)</li>
	<li id="li43">Chicken Vindaloo(Rs.309)</li>
	<li id="li44">Mutton Korma(Rs.359)</li>
	<li id="li45">Chicken Masala(Rs.289)</li>
	<li id="li46">Fish Masala(Rs.319)</li>
	<li id="li47">Egg Curry(Rs.199)</li>
	<li id="li48">Kadhai Chicken(Rs.279)</li>
	<li id="li49">Butter Chicken(Rs.349)</li>
	<li id="li50">Pasta- White Sauce(Rs.199)</li>
	<li id="li51">Pasta- Red Sauce(Rs.209)</li>
	<li id="li52">Veg. Burger(Rs.49)</li>
	<li id="li53">Egg Burger(Rs.79)</li>
	<li id="li54">Chicken Burger(Rs.119)</li>
	<li id="li55">Fish Burger(Rs.159)</li>
	<li id="li56">Cheese Grilled Sandwich(Rs.69)</li>
	<li id="li57">French Fries(Rs.89)</li>
	<li id="li58">Hash Browns(Rs.79)</li>
	<li id="li59">Veg. Hot Dog(Rs.99)</li>
	
 </ol>
</aside>
  
<footer id='thefooter'>
<h4 style="color:yellow;text-align:center;"><span style="color:yellow;" class="glyphicon glyphicon-copyright-mark"></span>
    (Copyright)Akshat Tyagi, Amity University</h4>
    </footer>
</div>
</body>
</html>

