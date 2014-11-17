<?php
	session_start();
	
	if($_GET['id']=='logout')
	{
		unset($_SESSION['userdetails']);
		session_destroy();
		header("Location: http://destipix.com");
		die();
	}

	require 'db.php';
	require 'instagram.class.php';
	require 'instagram.config.php';
?>

<html>
	<head>
		<title>Destipix</title>
		<script type="text/javascript" src="/jquery-1.10.2.min.js"></script>
		<link rel="stylesheet" href="/css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="/css/bootstrap-responsive.css" type="text/css">

		<style>

			div.head
			{
				color: #FFFFFF;
				font-family: ‘Lucida Sans Unicode’, ‘Lucida Grande’, sans-serif;
				background-color: #18453B;
				padding: 15px;
			}

			div.gram
			{
	  			height: 410px;
	  			width: 310px;
	  			float: left;
	  			text-align: center;
			}

			div.desc
			{
				color: #333333;
				font-family: ‘Lucida Sans Unicode’, ‘Lucida Grande’, sans-serif;
				font-size: 10px;
	  			text-align: center;
	  			font-weight: normal;
	  			margin: 2px;
			}

			#logo
			{
				opacity: 0.4;
				filter: alpha(opacity=40); /* For IE8 and earlier */
			}

			#logo:hover
			{
				opacity: 1.0;
				filter: alpha(opacity=100); /* For IE8 and earlier */
			}

			#refresh
			{
				opacity: 0.4;
				filter: alpha(opacity=40); /* For IE8 and earlier */
			}

			#refresh:hover
			{
				opacity: 1.0;
				filter: alpha(opacity=100); /* For IE8 and earlier */
			}

			#view
			{
				opacity: 0.4;
				filter: alpha(opacity=40); /* For IE8 and earlier */
			}

			#view:hover
			{
				opacity: 1.0;
				filter: alpha(opacity=100); /* For IE8 and earlier */
			}
		</style>
	</head>
	
	<body>

	    <div class="navbar navbar-inverse navbar-fixed-top">
    	  <div class="navbar-inner">
        	<div class="container">
	          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
    	        <span class="icon-bar"></span>
        	    <span class="icon-bar"></span>
            	<span class="icon-bar"></span>
	          </button>
    	      <a class="brand" href="/home.php"><img id="refresh" height="28" width="91" src="/destipix_white.png"></a>
        	  <div class="nav-collapse collapse">
            	<ul class="nav">
        	      <li><a href="/nfl/index.php">NFL</a></li>
        	      <li><a href="/mlb/index.php">MLB</a></li>
        	      <li><a href="/nba/index.php">NBA</a></li>
        	      <li><a href="/nhl/index.php">NHL</a></li>
        	      <li><a href="/mls/index.php">MLS</a></li>
        	      
        	      <li><a href="#" onclick="location.reload()"><img id="refresh" height="26" width="26" src="/refresh.png"></a></li>
    	          <li><a href="/about.php">About</a></li>
<?php
	if (!empty($_SESSION['userdetails'])) 
	{
		$data=$_SESSION['userdetails'];

		echo "<div style='float:left;margin-left:300px;margin-top:4px'><img src=\"{$data->user->profile_picture}\" width='40px' height='40px'></div>";
		echo '<li><a href="http://www.instagram.com/'.$data->user->username.'/">'.$data->user->username.'</a></li>';
  
		// Store user access token
		$instagram->setAccessToken($data);
		$userid = $data->user->id;
		$accessToken = $data->access_token;
	}
	else
	{	
		header('Location: index.php');
	}
?>
    	          <li  style="float: right;"><a href="?id=logout">Logout</a></li>
            	</ul>
	          </div><!--/.nav-collapse -->
    	    </div>
	      </div>
    	</div>


    	<div style="height: 50px;"></div>

    	<center>

		<div style="clear: both;"></div>