<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package studio_main_theme
 */

?>
			
			<footer class="footer_section">
				<div class="container">
					<div class="footer_widget_area">
						<div class="row">
							<div class="col-lg-5 col-md-12 order-5 order-lg-1">
								<div class="footer_widget social_text_layout">
									<div class="footer_copyright ">
										<a href="index.html" class="header-logo">
											<span><b>White Onyx</b> Studio.</span>
										</a>
										<p class="mb-0">© 2021  all right reserved</p>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2 col-md-4 order-lg-3">
								<div class="footer_widget social_text_layout">
									<h3 class="footer_widget_title text-uppercase">Studio</h3>
									<ul class="ul_li_block">
										<li><a href="#">About</a></li>
										<li><a href="#">Serives</a></li>
										<li><a href="#">Portfolio</a></li>
										<li><a href="#">Contacts</a></li>
									</ul>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2 col-md-4 order-lg-4">
								<div class="footer_widget social_text_layout">
									<h3 class="footer_widget_title text-uppercase">Social Links</h3>
									<ul class="ul_li_block">
										<li><a href="#">Facebook</a></li>
										<li><a href="#">Twitter</a></li>
										<li><a href="#">Linkedin</a></li>
										<li><a href="#">Pinterest</a></li>
									</ul>
								</div>
							</div>
						
							<div class=" col-sm-4  col-lg-3 col-md-4 col-12 order-lg-1 ">
								<div class="footer_widget footer_contact_info">
									<h3 class="footer_widget_title text-uppercase">Contact Us</h3>
									<ul class="ul_li_block">
										<li><a href="#">+39 348 9195991</a></li>
										<li><a href="#">+39 348 9195991</a></li>
										<li><a href="#">whiteonyx.studio@gmail.com</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- footer_section - end
			================================================== -->

			<div class="popup">
  		  <div class="popup-overlay"></div>
  		  <div class="main-popup">
  		    <div class="popup-header"><div class="close-btn"><span >&times;</span></div></div>
  		    <div class="popup-content">
  		      <div class="container-fluid">
  		        <div class="row">
  		          <div class="col-xxl-12 menu-wrapper">
  		            <span class="small_title">Main Menu</span>
  		            <ul>
  		              <li><a class="nav-link" href="index.html">Home</a></li>
  		              <li><a class="nav-link" href="services.html">Services</a></li>
										<li><a class="nav-link" href="portfolio.html">Portfolio</a></li>
  		              <li><a class="nav-link" href="contact.html">Contact Us</a></li>
  		            </ul>
  		            <span>Services</span>
  		            <ul>
  		              <li><a class="nav-link" href="web-development.html">Web developemnt</a></li>
  		              <li><a class="nav-link" href="web_design.html">Web Design</a></li>
  		              <li><a class="nav-link" href="seo.html">SEO</a></li>
  		              <li><a class="nav-link" href="branding.html">Branding</a></li>
  		            </ul>
  		            <span>Useful links</span>
  		            <ul>
  		              <li><a class="nav-link" href="../blog.html">Blog</a></li>
  		              <li><a class="nav-link" href="../web_design.html">Site Map</a></li>
  		            </ul>
  		            <span>Soc. networks</span>
  		            <ul class="social-nav">
  		              <li><a target="_blank" href="https://www.instagram.com/whiteonyx.studio/"><i class="fa fa-instagram"></i></a></li>
  		              <li><a target="_blank" href=""><i class="fa fa-facebook"></i></a></li>
  		              <li><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
  		              <li><a target="_blank" href="https://www.behance.net/whiteonyxstudio/"><i class="fa fa-behance"></i></a></li>
  		            </ul>
  		          </div>
  		        </div>
  		      </div>
  		    </div>
  		  </div>
  		</div>
		</div>
		<!-- body_wrap - end -->

		<!-- framwork - jquery include -->
		<?php wp_footer(); ?>
	</body>
</html>
