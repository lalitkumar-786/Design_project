<?php session_start();
  if(!(isset($_SESSION['username'])))
  {
    return redirect('login');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Main Page</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="./materialize-css/css/materialize.css"  media="screen,projection"/>
  <link rel="stylesheet" href="./materialize-css/font-awesome-4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/style1.css">
  <link rel="stylesheet" href="./css/animate.css">
  <style media="screen">
    body
    {
      font-family: 'Open Sans', sans-serif;
      background-color:snow;
    }

    nav
    {
      background:black;
    }

  </style>

</head>
<body>
  <nav class="" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo left white-text">   IIITDMJ - Medi Box</a>
      <ul class="right hide-on-med-and-down" >
          <li><a href="#" class="white-text"><b>Hi ! {{ $_SESSION['firstname'] }} </b></a></li>
          <li><a href="/user_status" class="white-text"><b>History</b></a></li>
          <li><a href="/logout" class="white-text"><b>Logout</b></a></li>
    
        </ul>

   <!--   <ul id="nav-mobile" class="side-nav">
        <li><a href="#" class="white-text">{{ $_SESSION['firstname'] }}</a></li>
        <li><a href="#" class="white-text">Logout</a></li>
      </ul>-->
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

    
    
    
    
    
    
    
    
    
    
    
    <div class="slider">
    <ul class="slides">
      <li>
        <img src="images/slider.jpg"> <!-- random image -->
        <div class="caption center-align">
            <h3><span style="color:black">Better Information , Better health!</span></h3>
            <h5 class="light grey-text text-lighten-3"><span style="color:black">One stop solution for all health needs</span></h5>
        </div>
      </li>
      <li>
        <img src="images/slider2.jpg"> <!-- random image -->
        <div class="caption left-align">
            <h3><span style="color:black">Find medicines</span></h3>
            <h5 class="light grey-text text-lighten-3"><span style="color:black">Search for correct medicines.</span></h5>
        </div>
      </li>
      <li>
        <img src="images/slider4.jpg"> <!-- random image -->
        <div class="caption right-align">
            <h3><span style="color:black">Find Doctors in your area !</span></h3>
            <h5 class="light grey-text text-lighten-3"><span style="color:black">Specialization wise...</span></h5>
        </div>
      </li>
      <li>
        <img src="images/healthcare.jpg"> <!-- random image -->
        <div class="caption center-align">
            <h3><span style="color:black">Even better more!</span></h3>
            <h5 class="light grey-text text-lighten-3"><span style="color:black">Get free advice.</span></h5>
        </div>
      </li>
    </ul>
  </div>
      
  <!--<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
          <h1 class="header center black-text text-lighten-2 animated jello"><b>HOMOE - PAEDIC</b></h1>
        <div class="row center">
          <h5 class="header col s12 black-text animated jello">Applications for effective and upgraded Medical services</h5>
        </div>

        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="images/blur.jpg" alt="Unsplashed background img 1"></div>
  </div>

-->
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4 animated zoomIn">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Find Doctors near by!</h5>

            <p class="light">Find doctors according to specialization,close to you !</p>
          </div>
        </div>

        <div class="col s12 m4 animated zoomIn">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Know your Ailments !</h5>

            <p class="light"> Medicine to cure your ailments !</p>
          </div>
        </div>

        <div class="col s12 m4 animated zoomIn">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Your history !</h5>

            <p class="light">Know all taken medicines ! 
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>

<hr>
<div class="things">
  <div class="container">
    <div class="section things">
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Things You Can Do</h4>
            <div class="row">
              <div class="col l4 s12">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="images/need2.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Search Doctors<i class="material-icons right">more_vert</i></span>
                      <p><a href="./doctor">Click Here</a></p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Search Doctors<i class="material-icons right">close</i></span>
                      <p>Here you can search doctors according to specialistion.You can also search doctor in your cities.</p>
                    </div>
                  </div>
                </div>
                <div class="col l4 s12">
                  <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/need.jpg">
                      </div>
                      <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Find your disease<i class="material-icons right">more_vert</i></span>
                        <p><a href="./disease">Click Here</a></p>
                      </div>
                      <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Explore your disease<i class="material-icons right">close</i></span>
                        <p>Medicine to cure your ailments !</p>
                      </div>
                    </div>
                  </div>
                  <div class="col l4 s12">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator" src="images/add.png">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator grey-text text-darken-4"> Know more !<i class="material-icons right">more_vert</i></span>
                          <p><a href="/user_status">Click Here</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title grey-text text-darken-4">Your History !<i class="material-icons right">close</i></span>
                          <p>Know all taken medicines!</p>
                        </div>
                      </div>
                    </div>
              </div>
           
        </div>
      </div>

    </div>
  </div>
</div>



  <footer class="page-footer black darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">HouseMedic COrp.</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project that help student to do something out of box.
              .</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">About us !</h5>
          <ul>
            <li><a class="white-text" href="#">Youtube</a></li>
            <li><a class="white-text" href="facebook.com/lalitkumar7860">Facebook</a></li>
          <li><a class="white-text" href="#!">Instagram</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright lightblue darken-3">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="#">@ Lalit kumar</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
$(document).ready(function(){
$(window).scroll(function() {
 $(".card").each(function(){
   var pos = $(this).offset().top;

   var winTop = $(window).scrollTop();
     if (pos < winTop + 680) {
       $(this).delay( 2800 ).addClass("animated zoomIn");
     }
 });
});
});
</script>
    <script>
    $(document).ready(function(){
      $('.slider').slider();
    });
        </script>
  </body>
</html>
