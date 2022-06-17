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

		<?php wp_head(); ?>
		<title>Home Page - Borne - Agency Portfolio Template</title>
		<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/assets/images/icon/favicon.jpg">
	</head>


	<body class="body_entity">

		<!-- body_wrap - start -->
		<div class="body_wrap">

			<!-- backtotop - start -->
			<div class="backtotop">
				<a href="#" class="scroll">
					Back to top
				</a>
			</div>
			<!-- backtotop - end -->

			<!-- preloader - start -->
			<!-- <div id="preloader"></div> -->
			<!-- preloader - end -->

			<!-- live chat - start -->
			<div class="livechat_wrapper">
				<button class="livechat_btn">
					<span>
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M18 0H2C0.9 0 0 0.9 0 2V20L4 16H18C19.1 16 20 15.1 20 14V2C20 0.9 19.1 0 18 0Z" fill="white"/>
						</svg>
					</span>
					<small>Live Chat</small>
				</button>
			</div>
			<!-- live chat - end -->

			<!-- header_section - start
			================================================== -->
			<header class="header_section main-header" id="myHeader">
  		  <a href="../index.html" class="header-logo">
					<span><b>White Onyx</b> Studio.</span>
				</a>
  		  <!-- <div class="header-desc">Студія створення сайтів під ключ у Львові</div> -->
  		  <div class="header-contacts">
  		    WHITEONYXSTUDIO@GMAIL.COM
  		    (067)-123-23-23
  		  </div>
  		  <div class="menu-icon btn">
  		    <div class="wrapper open-btn">
  		      <svg width="25" height="15" viewBox="0 0 25 15" fill="none" xmlns="http://www.w3.org/2000/svg">
  		      <rect width="25" height="1" fill="white"/>
  		      <rect y="7" width="25" height="1" fill="white"/>
  		      <rect y="14" width="25" height="1" fill="white"/>
  		    </svg>
  		    </div>
  		  </div>
  		</header>
			<!-- header_section - end
			================================================== -->


