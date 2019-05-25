<?php include 'config/config.php' ?>
<head>
    <meta charset="utf-8">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	<title><?php echo name; ?></title>
</head>
<!-- 
     Author: ImDinikCZ
     Website: www.dinik.cz
     Name: Modern v1.0
-->
<style>.jumbotron {
    margin-bottom: 0px;
    background-image: url(<?php echo background; ?>);
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #111111;
	background-position: center;
    color: white;
}</style>
<style>
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url(img/loader.gif) center no-repeat #fff;
}</style>
  <script>
	$(window).load(function() {
		$(".se-pre-con").fadeOut("slow");;
	});</script>
	  <div class="se-pre-con"></div>
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
  <div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_navbar_collapse">
	  <span class="sr-only">Toggle navigation</span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	</button>
  </div>
      <div class="collapse navbar-collapse" id="main_navbar_collapse">
	<ul class="nav navbar-nav">
        <ul class="nav navbar-nav">
	  <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        <li><a href="/play.php/">⚔ Play</a></li>
        <li><a href="/staff.php/"><i class="fa fa-users" aria-hidden="true"></i> Staff</a></li>
            <li><a href="/rules.php/"><i class="fa fa-exclamation" aria-hidden="true"></i> Rules</a></li>
        </ul>
	</ul>
  </div>
</div>
</nav>
    <div class="jumbotron jumbotron-homepage" style="margin-top: -30px;">
    <div class="container">
        <center>
            <!-- Insert Logo here -->
            <br>
            <br>
            <br>
        <img src="<?php echo logo; ?>">
            <br>
            <br>
            <br>
            <!-- Logo End -->
        </center>
        </div>
    </div>
    <!-- You can edit Players at config/config.php -->
    <div class="status-bar"><div class="container"> <div class="players-online"><center><b>On our server is currently playing <?php 
    echo $serverInfo['Players']; // You can edit this at config/config.php
        ?> players</b></center></div></div></div>