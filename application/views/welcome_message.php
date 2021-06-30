<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <style>
.button {
  background-color: #5C2A86;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  float: right;
}
.Options {
  background-color: #5C2A86;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: #174F6D;
margin-top: 50px;
}
.SS ul {
   margin-left: 100px;
}
.SS ul li{
  display: inline-block;
  list-style: none;


} 

#slideshow {
  margin: 80px auto;
  position: relative;
  width: 100%;
  height: 500px;
  padding: 10px;         
  box-shadow:  20px rgba(5 , 5 , 5 ,5);
}

#slideshow > div {
  position: absolute;
  top: 10px;
  left: 10px;
  right: 10px;
  bottom: 10px;

}
.left p {
  width: 50%;
  float:  left;
}



  
</style>
  <title>SherlocKind</title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
  $("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
}, 3000);
</script>
</head>

<header>
  <img src="img/Z.png" alt="Girl in a jacket" width="200" height="100">
  
</header><!-- /header --><body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SherlocKind</a>
    </div>       
    <ul class="nav navbar-nav">
     <li class="active"><a href="Home.html">HOME</a></li>
      <li><a href="previos.html">PREVIOUS EVENT</a></li>
      <li><a href="Future.html">FUTUR PLANS</a></li>
      <li><a href="what_join.html">ABOUT US</a></li>
    </ul>
  </div>
</nav>
<body>
 <a href="what_join.html" class="button">SIGN UP</a>
<a href="what_join.html" class="button">LOGIN</a>
<a href="what_join.html" class="button">+JOIN AS MEMBER</a>
<div id="slideshow">
   <div>
     <img src="https://www.cityflowers.co.in/blog/wp-content/uploads/2018/11/NGO.jpg" width="1340" height="500px">
   </div>
   <div>
     <img src="https://miro.medium.com/max/3000/1*S9HaE6sdvl601ALnb-yzcQ.jpeg" width="1340" height="500">
   </div>
  <div>
    <img src="https://www.cope.org.au/wp-content/uploads/2020/01/Baby-Standing-Header-1200-400-1024x341.jpg" width="1340" height="500">
  </div>
   <div>
    <img src="https://www.savethechildren.in/getattachment/93599b11-be20-4e6d-b5f5-85b466810943/child-protection.aspx?width=950&height=360" width="1340" height="500">
  </div>
</div>
<div class="post">
    
 
<div class="container">
 <p>There are so many children who are suffering from economical dificulies , who can't fulfit their basic needs , who have last their parents and who have been abused or exploited by the society </p>
 <p>It is true that today we have institutes to inform such conditions. But unfortunately still there are some helpless children in the society who are not awarded out these institutes.Sometimes they are afraid peaking their problems in public. they are fear for being embarraced  </p>
 <p>We are going to help those children through this website The main purpose of this website is to help those children</p>
 <p>You can donate to this organization by clicking DONATE button. Not only that but also our organization is Non-profit organization . the every donations use for helping some children</p>
<p>You can send us a clear information about who need helps by clicking this "INFORM" button .that should be actual information. Also You can inform about a school or a hospital or anything  which needs helps</p>

<p>You can Contact us by clicking "CONTACT US" and you can get more details about our organization by contacting us</p>
<p>Not only that but also you have a chance to join with this organization as a member or OC  .If you wont to join with us you can join by clicking "+JOIN WITH US" button.</p>
<p>If you want to join with oraganizing comity member you can request by clicking "REQUEST FOR OC"</p>
</div>


<div class="SS">
  <ul>
    <li><a href="donate.html" class="Options">DONATE</a></li>
    <li><a href="information.html" class="Options">INFORM</a></li>
    <li><a href="Contact.html" class="Options">CONTACT US</a></li>
    <li><a href="what_join.html" class="Options">REQUEST FOR OC</a></li>
  </ul>
  
</div>
</div>
</body>
</html>