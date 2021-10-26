<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Intent.</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet"> 
	  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
  <link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<header>
	<div class="icon-top row">
			<span class="col-lg-9 col-md-4 col-sm-2 col-xs-0"></span>
			<span class="col-lg-3 col-md-8 col-sm-10 col-xs-12 text-center">
				<a href="#"><img src="img/icon/twitter.png" alt="tw"></a>
				<a href="#"><img src="img/icon/facebook.png" alt="f"></a>
				<a href="#"><img src="img/icon/dribbble.png" alt="dr"></a>
				<a href="#"><img src="img/icon/rss.png" alt="rss"></a>
			</span>
	</div>
	<div class="nav-bar row">
		<div class="logo col-lg-3 col-md-4 col-sm-7 col-xs-10"><span class="i">i</span><span>Intent</span>
		<span class="ii">.</span></div>
		<div class="col-lg-4 col-md-3 col-sm-0 col-xs-0"></div>
		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-2">
      <nav class="navbar-inverse">
		 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
			<ul class="nav_bar">
				<li><a href="home.php" class="nav">Home</a></li>
				<li><a href="blog.php" class="nav">Blog</a></li>
				<li><a href="portfolio.php" class="nav">Portfolio</a></li>
				<li><a href="contact.php" class="nav">Contact</a></li>
			</ul>
		</nav>
		</div>
	</div>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
			<script>
$( ".navbar-toggle" ).click(function() {
$( ".nav_bar" ).slideToggle( "slow", function() {
$( ".navbar-toggle" ).hide();
$( ".navbar-toggle" ).show();
});
});

		</script>
	</header>