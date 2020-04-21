<?php
if($_POST["submit"]) {
    $recipient="comfortcoco@yahoo.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
    
    $thankYou="Thank you! Your message has been sent.";

        mail($recipient, $subject, $mailBody, $sender, $senderEmail;}
?>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comfort Construction</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
<div class="grid-container" id="mainbackground">
    <div class="grid-x" id="maintitle">
    <div class="large-2 medium-12 small-12 cell" id="mainlogo"><img src="images/ccclogo.png"></div>
    <h1 class="large-6 medium-12 small-12 cell" id="Site-title">Comfort Construction Co.</h1>
    
    <div class="large-3 medium-12 small-12 cell" id="socmedia1">
        <ul id="socmedia"><a href="https://www.yelp.com/biz/comfort-construction-co-walnut-creek-2"><img src="images/socmedia1.png"></a></ul>
        <ul id="socmedia"><a href="https://www.linkedin.com/company/comfort-construction-co"><img src="images/socmedia2.png"></a></ul>
        <ul id="socmedia"><img src="images/socmedia3.png"></ul>
        </div>
      </div>
    <div class="grid-x grid-padding-x">
        <div class="large-12 medium-12 small-12" id="menuplacement">
    <ul class="menu menu-hover-lines large-4 medium-4 grid-x">
  <li id="mainmenu" class="large-2 small-12"><a href="index.html" class="menutext">Home</a></li>
  <li id="mainmenu" class="large-2 small-12"><a href="about.html" class="menutext">About Us</a></li>
  <li id="mainmenu" class="large-2 small-12"><a href="services.html" class="menutext">Services</a></li>
  <li id="mainmenu" class="large-2 small-12"><a href="residential.html" class="menutext">Residential</a></li>
  <li id="mainmenu" class="large-2 small-12"><a href="commercial.html" class="menutext">Commercial</a></li>
  <li id="mainmenu" class="active large-2 small-12" class="menselect"><a href="#" class="menutext">Contact</a></li>
</ul>
    </div>
    </div>
    <div class="grid-x grid-margin-x" id="introbody">
    <div class="large-12 medium-12 small-12 cell">
        <div class="orbit" role="region" aria-label="Main Slide Show" data-orbit>
  <div class="orbit-wrapper" id="mainslideshow">
    <ul class="orbit-container">
      <li class="is-active orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="images/contact1.png" alt="Space">
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="images/contact2.png" alt="Space">
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="images/contact3.png" alt="Space">
          </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="images/contact4.png" alt="Space">
          
        </figure>
      </li>
    </ul>
  </div>
</div>
        <h2 id="imgtitle">Contact us!</h2>
        </div>
    </div>
    <div class="grid-x grid-margin-x">
    <div class="cell large-12 medium-12 small-12" id="grad1"></div>
    <div class="cell large-6 medium-6 small-12">
        <p id="infop">Got any questions, comments or concerns? Please email us at<b> <span id="email"></span></b> or call us at<b> <span id="phone"></span></b> for more information!</p>
    <p id="infop">We will read all emails sent to us and will respond in a timely fashion! Our office is located at<b> <span id="address"></span></b></p>
    
    <p id="infop">Thank you! Your message has been sent and we will get back to you as soon as possible!</p>

    <form method="post" action="contact.php" id="mainform" class="cell large-12 medium-12 small-12">
        <label>Name:</label>
        <input name="sender" id="input1">

        <label>Email address:</label>
        <input name="senderEmail" id="input1">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message" id="input2"></textarea>

        <input type="submit" name="submit" id="submitbutton">
    </form>
    
    </div>
    
        <div class="cell large-6 medium-6 small-12">
        <img src="images/img_1.png" id="bodyimage"> 
        </div>
        
    </div>
    <div class="cell large-12 medium-12 small-12">
    <div class="cell large-12 medium-12 small-12" id="introbody">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3147.333863028674!2d-122.05481548467809!3d37.92263017973281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80856109d35a5da3%3A0x2870b2d2554d8c28!2s2700%20Cherry%20Ln%2C%20Walnut%20Creek%2C%20CA%2094597!5e0!3m2!1sen!2sus!4v1585643780076!5m2!1sen!2sus" width="600" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" id="map"></iframe> 
        </div>
    <div class="cell large-12 medium-12 small-12" id="grad1"></div>
      <div class="large-12 medium-12 small-12 cell">
        <div class="cell" id="phoneinfo">
    
    <ul id="phonecontent1"> </ul>
    <ul id="phonecontent2"> </ul>
    <ul id="phonecontent3"> </ul>
    </div>
    
        </div>
        </div>
    
    
      </div>
      <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>