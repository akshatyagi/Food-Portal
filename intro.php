<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome to the jungle</title>
<link rel="stylesheet" href="main.css" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>

$(document).ready(function(){
   
   $('#h').hide();
   $('#c').hide();
   $('#ch').hide();
   $('#l').hide();
   $('#f').hide();
   $('#a').hide();
   
   $('#map1').hide();
   $('#map2').hide();
   $('#map3').hide();
   
   
   $('#hh').click(function(e){
        e.preventDefault();
        $('#h').fadeToggle();
        $("#hh").animate({left: '1000px'});
        $("#h").animate({left: '150px'});
    });
    
   
    $('#auh').click(function(e){
        
        $('#h').hide();
        $("#hh").animate({left: '0px'});
    });
    
    
    $('#cc').click(function(e){
        e.preventDefault();
        $('#c').fadeToggle();
        $("#cc").animate({left: '1000px'});
        $("#c").animate({left: '150px'});
    });
    
     $('#auc').click(function(e){
        e.preventDefault();
        $('#c').hide();
        $("#cc").animate({left: '0px'});
    });
    
    $('#chch').click(function(e){
        e.preventDefault();
        $('#ch').fadeToggle();
        $("#chch").animate({left: '1000px'});
        $("#ch").animate({left: '150px'});
    });
    
    $('#auch').click(function(e){
        e.preventDefault();
        $('#ch').hide();
        $("#chch").animate({left: '0px'});
    });
    
    
    $('#ch').click(function(e){
        e.preventDefault();
        $('#ch').hide();
        $("#chch").animate({left: '0px'});
    });
    
    $('#ff').click(function(e){
        e.preventDefault();
        $('#f').fadeToggle();
        $("#ff").animate({left: '1000px'});
        $("#f").animate({left: '150px'});
    });
    
       $('#auff').click(function(e){
        e.preventDefault();
        $('#f').hide();
        $("#ff").animate({left: '0px'});
    });
    
    
    
    $('#ll').click(function(e){
        e.preventDefault();
        $('#l').fadeToggle();
        $("#ll").animate({left: '1000px'});
        $("#l").animate({left: '150px'});
        
    });
    
     $('#aul').click(function(e){
        e.preventDefault();
        $('#l').hide();
        $("#ll").animate({left: '0px'});
    });
    
 
    
    $('#aa').click(function(e){
        e.preventDefault();
        $('#a').fadeToggle();
        $("#aa").animate({left: '1000px'});
        $("#a").animate({left: '150px'});
    });
    
    $('#a').click(function(e){
        e.preventDefault();
        $('#a').hide();
        $("#aa").animate({left: '0px'});
    });
    
    
    $("#d1").click(function(){
    $("#map1").slideDown();
});
     
    $("#d2").click(function(){
    $("#map2").slideDown();
});    
     
    $("#d3").click(function(){
    $("#map3").slideDown();
});

   
    
  
  
  
});






</script>

<style>
    
    #itemdiv{
    background-color:yellow;
    width:1100px;
    height:800px;
   
    background: url("image6.jpg") no-repeat center center fixed;
   }
   
   #itemdiv1{
      background-color:yellow;
    width:1100px;
    height:1400px;
    
    background: url("image6.jpg") no-repeat center center fixed; 
    } 
   
    #itemdiv2{
    background-color:yellow;
    width:1100px;
    height:700px;
    background: url("image6.jpg") no-repeat center center fixed; 
    } 
   
    #itemdiv3{
    background-color:yellow;
    width:1100px;
    height:1000px;
    background: url("image6.jpg") no-repeat center center fixed; 
    } 
    
    div[id^='d']{
    padding: 5px;
    text-align: center;
    background:url("chef.jpg") no-repeat center center fixed; 
    }
    
</style>



</head>
<body>
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
        <li  class="active"><a style="color:yellow;text-shadow: 2px 2px green;" href="intro.php">Home</a></li>
        <li><a style="color:yellow;text-shadow: 2px 2px green;" href="index.php">Order Online</a></li>
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


     <section id='aboutsection'>
         
  <p>&nbsp;</p>
  
  <h1 style='text-align:center;color:yellow;'>DARE TO DREAM BEYOND THE HORIZON!</h1>
  <p>&nbsp;</p>
  
  <img  src='cicchetti_01.jpg' class="img-circle" width=1325 height=400>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p id='au1'>
         We have been catering to the need of Delhites for over 40 years! WTTJ was created by Akshat Tyagi in the year 1965. It was initially a
         restaurant in the Vikas Puri area of New Delhi. The name comes from a famous song by the American Hard Rock Band, Gun's N Roses 
         entitled Welcome To The Jungle. 
         </p>
   
  <div id='bigdiv' class='col-md-12'>
      
  <h2 id="hh" style="color:#005C88;position:relative;"><span style='color:green' class="glyphicon glyphicon-chevron-right"></span>History</h2>
  <div  id="h" style='position:relative' class='col-md-12'> 
      
      <div id='itemdiv1'>
          
          
                      <article>
                          <hgroup>
                       <h1 style='color:yellow'>WE BRING IN YEARS OF EXPERIENCE ON THE TABLE!</h1>
                          </hgroup>
                         
                   <p id='au3'>Below here is the picture of the  first restaurant in our chain started by Akshat Tyagi in 1967 at Boat Club Road in Pune.
                   </p>  <br>     
                <img class='img-circle' id='image' src='pictures-r-5879.jpg' align='middle' height='400' width='1050' alt='' />
                <p>&nbsp;</p>
          
                <p id='au4'>Initially, WTTJ catered to the needs of Army personnel. Menu items included Vada Pav and Misal Pav. Word got around 
                   and WTTJ became one of the most happening places in Pune. The Zomato blog wrote an article about our progress and we were published in 
                   the food traveller's journal. Business expanded and so did the Menu. A certain Andre Pirlo was hired as an italian chef and pizzas were added to the Menu.
                   Soon, youngsters from all around the city started flocking inside our restaurant. This was just the start.</p>
                 <p>&nbsp;</p>
                <img class='img-rounded' id='image' src='925739317s.jpg' align='middle' height='400' width='1050' alt='' />
                   <p id='au5'>We now have chains in over 9 cities, not to mention that fact that we have over 123 outlets, with over
                       a thousand customers each hour!</p>
      
                     <footer style='text-align:right'><button id='auh' type="button" class="btn btn-success">
                             <span style='color:white' class="glyphicon glyphicon-ok"></span></button></footer>
                     </article>
      </div>
  
  </div>
<h2 id="cc" style="color:#005C88;position:static;"><span style='color:green'  class="glyphicon glyphicon-chevron-right"></span>Cuisine</h2>
<div  id="c" class='col-md-12'> 
    
    <div id='itemdiv2'>
          <article>
                          <hgroup>
                       <h1 style='color:yellow'>EXPLORE MOUTH WATERING DISHES OF THE WORLD!</h1>
                          </hgroup>
                         
                   <p id='au3'>At WTTJ, we believe in providing an unbelievable experience of mouth watering cousine from around the world. Our highly trained 
                              chefs ensure the no part of the world is left unexplored.  

                   </p>  <br>     
                <img class='img-circle' id='image' src='dishes.jpg' align='middle' height='400' width='1050' alt='' />
                <p>&nbsp;</p>
          
                <p id='au4'>Check out our <a class='btn btn-info' href='index.php'>Menu</a> to explore the joy of Food!</p>
                 
      
                     <footer style='text-align:right'><button id='auc' type="button" class="btn btn-success">
                             <span style='color:white' class="glyphicon glyphicon-ok"></span></button></footer>
                     </article>
      </div>
 </div>

<h2 id='chch' style="color:#005C88;position:static;"><span style='color:green' class="glyphicon glyphicon-chevron-right"></span>Chefs</h2>
<div  id="ch" class='col-md-12'> 
    
    <div id='itemdiv3'>
        <article>
             <h1 style='color:yellow'>GET THE BEST FROM THE WORLD'S BEST!</h1>
            <p id='au4'>At WTTJ, we offer a variety of food items prepared with the uptmost care and affection by the best Chefs in the world. 
            Our chefs have constantly been ranked amount the best chefs by Caravan New York. </p>
            <p>&nbsp;</p>
             <img class='img-rounded' id='image' src='chef.jpg' align='middle' height='600' width='1050' alt='' />
             <p id='au5'>Our Chef, Mr. Mark Hammond currently stars as a guest in the popular show, Masterchef</p>
             <p>&nbsp;</p>
             
             <footer style='text-align:right'><button id='auch' type="button" class="btn btn-success">
                             <span style='color:white' class="glyphicon glyphicon-ok"></span></button></footer>
        </article>
      </div>
    </div>

 
 
<h2 id='ff' style="color:#005C88;position:static;"><span style='color:green' class="glyphicon glyphicon-chevron-right"></span>Food Quality</h2>
<div  id="f" class='col-md-12'> 
    
    <div id='itemdiv3'>
          <article>
<h1 style='color:yellow'>A+ QUALITY GUARANTEED!</h1>
<p>&nbsp;</p>

<p id='au7'>Food quality is the quality characteristics of food that is acceptable to consumers. This includes
 external factors as appearance (size, shape, colour, gloss, and consistency), texture, and flavour; 
factors such as federal grade standards (e.g. of eggs) and internal (chemical, physical, microbial).</p>
 <img class='img-circle' id='image' src='fruit.jpg' align='middle' height='500' width='1050' alt='' />
<p>&nbsp;</p><br>
<p id='au8'>
Our food is rated A+ for the quality served and the raw materials used!

</p>

 <footer style='text-align:right'><button id='auff' type="button" class="btn btn-success">
                             <span style='color:white' class="glyphicon glyphicon-ok"></span></button>
							 </footer>
</article>
      </div>
    </div>


<h2 id='ll' style="color:#005C88;position:static;"><span style='color:green' class="glyphicon glyphicon-chevron-right"></span>Locations</h2>
<div  id="l" class='col-md-12'> 
    
    <div id='itemdiv3'><article>
            <h1 style='color:yellow'>CHECK OUT OUR AMAZING OUTLETS</h1>
          
        <div id='d1'><h1 style='color:yellow'><span style='color:blueviolet'  class="glyphicon glyphicon-chevron-right"></span>Vasundhara</h1></div>        
<div id='map1'>
<div class='col-md-8'>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3400.473461934918!2d77.36540170090288!3d28.686208141691207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfaa1c1508c11%3A0xdd43351e11bdc374!2sVasundhara%2C+Ghaziabad%2C+Uttar+Pradesh!5e0!3m2!1sen!2sin!4v1437496396686" 
                    width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>           
        </div>    
    
</div>
    
      <div id='d2'><h1 style='color:yellow'><span style='color:blueviolet'  class="glyphicon glyphicon-chevron-right"></span>New Delhi</h1></div>        
<div id='map2'>
<div class='col-md-8'>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.547269621632!2d77.21828279999998!3d28.643327900000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd3f74e11a9f%3A0x5fb3a7f3d07a63c5!2sNew+Delhi+Railway+Station!5e0!3m2!1sen!2sin!4v1437507691105" 
                    width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>        
        </div>    
    
</div>
      

      
      
      <footer style='text-align:right'><button id='aul' type="button" class="btn btn-success">
                             <span style='color:white' class="glyphicon glyphicon-ok"></span></button>
							 </footer></article>
      </div>
  </div>
 





    </div>
    <p>&nbsp;</p>

 
    <img style='image-orientation:center' src='cicchetti_01.jpg' class="img-rounded" width=1325 height=600>
  

  
  <p>&nbsp;</p>
   
        
        <p id='au2'>    With  the advancement of the internet in the initial stages of the 21st century, we shifted our focus
         towards the vast web. We provide a wide range of menu from all around the world. Our chefs have been listed A+ by the Food Authority 
         of New Delhi. To back it up, we have been winning  the Food Quality Award for the last 10 years! Here at WTTJ, we believe in the wisdom 
         of our Father of the Nation, MK Gandhi and abide by his words, &quot;Work is Worship&quot;.
     </p>
   
    </section>
    
   




<footer id="thefooter">
<h4 style="color:yellow;text-align:center;"><span style="color:yellow;" class="glyphicon glyphicon-copyright-mark"></span>
    (Copyright)Akshat Tyagi, Amity University</h4>
</footer>
</div>
</body>
</html>











