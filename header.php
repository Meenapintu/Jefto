<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jefto.com </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 

  <html>
 
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="./materialize/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
      <script type="text/javascript" src="./materialize/js/materialize.min.js"></script>
     <script type="text/javascript" src="./materialize/js/typehead.js"></script>
      <!--<link rel="stylesheet" href="materialize-tags.min.css">-->

</head>
<link rel="stylesheet" href="forms.css">
 <!--  Begining of Navbar Header part  (# START) -->



  <nav>
    <div class="nav-wrapper">
      <a href="/Jefto-1.0/" class="brand-logo"><img src="def_img/jefto.png" id='logo' style="height:100%; max-height:64px;max-width:171px;position:relative" /></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="form.php">Submit Event</a></li>
        <li><a href="index.php#whatwedo">What We Do </a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
         <li><a href="form.php">Submit Event</a></li>
         <li><a href="index.php#whatwedo">What We Do </a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>

<script >
   $(".button-collapse").sideNav();
  $(document).ready(function(){
    $(window).resize(function(){
        $('#logo').css('height',($(".nav-wrapper").height()+'px'));
    });
});
  $('#logo').css('height',($(".nav-wrapper").height()+'px'));
</script>
  <link rel="stylesheet" href="forms.css">
