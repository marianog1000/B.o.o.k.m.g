<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 ?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html lang="en">
<head>

<title>
<?php
global $page, $paged;
 
wp_title( '|', true, 'right' );
 
// Add the blog name.
bloginfo( 'name' );
 
// Add the blog description for the home/front page.
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
 

?>
</title>



<!--<title>Scholastic an Education Category Flat Bootstrap Responsive  Website Template | Home :: w3layouts</title>-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholastic a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
<!-- /fonts -->
<!-- css files 
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/footer-pic.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/staff.css" rel="stylesheet" type="text/css" media="all"/>
<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- /css files -->

<?php wp_head(); ?>

</head>
<body>

<!-- navigation -->
<div class="navbar-wrapper">
	<div class="container">
		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html"><h1>CAPRo</h1></a>
			</div>
			<!--<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav cl-effect-18">
					<li class="active"><a href="index.html" class="page-scroll" data-hover="Home">Home</a></li>
					<li><a href="#about" class="page-scroll" data-hover="About">About</a></li>
					<li><a href="#service" class="page-scroll" data-hover="Services">Services</a></li>
					<li><a href="#team" class="page-scroll" data-hover="Team">Team</a></li>
					<li><a href="#portfolio" class="page-scroll" data-hover="Portfolio">Portfolio</a></li>
					<li><a href="#contact" class="page-scroll" data-hover="Contact">Contact</a></li>
				</ul>
			</div>	 -->		
			<?php if (function_exists(clean_custom_menus())) clean_custom_menus(); ?>
			
			<div class="search-w3ls">
				<form action="#" method="post">
					<div class="input-group">
						<input type="text" class="form-control" name="search" id="search2" placeholder="Search" required/>
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit" ><i class="fa fa-search"></i></button>
						</span>
					</div>
				</form>
			</div>
        </nav>
	</div>	
</div>
<!-- /navigation -->
<!-- banner section -->
<section class="banner-w3ls">
	<div class='header'>
		<div class="container">
			<div class="banner-agileits">
				<h2>Centro de Atención Psicoterapéutica Rosario</h2>	
				<ul class="social-icons1">
					<li><a href="https://www.facebook.com/pg/marinacapro/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>
		</div>
	</div>	
</section>
<!-- /banner section -->


