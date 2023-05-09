<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package studio_main_theme
 */

?>

<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Blog</title>
		<link rel="icon" type="image/x-icon" href="../assets/images/icon/favicon.jpg">

		<!-- fraimwork - css include -->
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

		<!-- icon font - css include -->
		<link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">

		<!-- carousel - css include -->
		<link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/slick-theme.css">

		<!-- popup - css include -->
		<link rel="stylesheet" type="text/css" href="../assets/css/magnific-popup.css">

		<!-- nice select - css include -->
		<link rel="stylesheet" type="text/css" href="../assets/css/nice-select.css">

		<!-- custom - css include -->
		<link rel="stylesheet" type="text/css" href="../assets/styles/style.css">
	<?php wp_header(); ?>
	</head>


	<body>

		<header class="sec header">
			
			<img src="../assets/images/studio-logo.svg" alt="" class="logo">
			<ul class="navigation">
				<li><a href="home-page-2.html">Home</a></li>
				<li><a href="portfolio.html">Portfolio</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="blog.html">Blog</a></li>
				
				
			</ul>
				<a href="" class="button">Contact us</a>
				<span class="menu-open">
					<svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="27" cy="27" r="26.5" stroke="black"/>
						<path d="M13 27H42" stroke="black" stroke-width="1.5"/>
						<path d="M13 19H42" stroke="black" stroke-width="1.5"/>
						<path d="M13 35H42" stroke="black" stroke-width="1.5"/>
					</svg>
				</span>

		</header>


