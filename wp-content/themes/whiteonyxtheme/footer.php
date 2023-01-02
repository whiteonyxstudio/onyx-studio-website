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
										<a href="<?php echo get_home_url(); ?>" class="header-logo">
											<span><b>White Onyx</b> Studio.</span>
										</a>
										<p class="mb-0">© 2021  all right reserved</p>
									</div>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2 col-md-4 order-lg-3">
								<div class="footer_widget social_text_layout">
									<h3 class="footer_widget_title text-uppercase">Studio</h3>
									<?php 
      								wp_nav_menu( [
      									'theme_location'  => 'footer_studio_menu',
      									'container'       => false, 
      									'menu_class'      => 'navBar_menu', 
      									'menu_id'         => '',
      									'echo'            => true,
      									'fallback_cb'     => 'wp_page_menu',
      									'before'          => '',
      									'after'           => '',
      									'link_before'     => '',
      									'link_after'      => '',
      									'items_wrap'      => '<ul class="ul_li_block">%3$s</ul>',
      									'depth'           => 0,
      									'walker'          => '',
      								] );
            					?>
								</div>
							</div>

							<div class="col-6 col-sm-4 col-lg-2 col-md-4 order-lg-4">
								<div class="footer_widget social_text_layout">
									<h3 class="footer_widget_title text-uppercase">Social Links</h3>
									<?php 
      							wp_nav_menu( [
      								'theme_location'  => 'footer_social_menu',
      								'container'       => false, 
      								'menu_class'      => 'navBar_menu', 
      								'menu_id'         => '',
      								'echo'            => true,
      								'fallback_cb'     => 'wp_page_menu',
      								'before'          => '',
      								'after'           => '',
      								'link_before'     => '',
      								'link_after'      => '',
      								'items_wrap'      => '<ul class="ul_li_block">%3$s</ul>',
      								'depth'           => 0,
      								'walker'          => '',
      							] );
            			?>
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
  		            <span class="small_title d-none">Main Menu</span>
									<?php 
      							wp_nav_menu( [
      								'theme_location'  => 'main_menu',
      								'container'       => false, 
      								'menu_id'         => '',
      								'echo'            => true,
      								'fallback_cb'     => 'wp_page_menu',
      								'before'          => '',
      								'after'           => '',
      								'link_before'     => '',
      								'link_after'      => '',
      								'items_wrap'      => '<ul >%3$s</ul>',
      								'depth'           => 0,
      								'walker'          => '',
      							] );
            			?>
  		            
  		            
  		            <span class="small_title d-none" >Useful links</span>
									<?php 
      							wp_nav_menu( [
      								'theme_location'  => 'useful_menu',
      								'container'       => false, 
      								'menu_id'         => '',
      								'echo'            => true,
      								'fallback_cb'     => 'wp_page_menu',
      								'before'          => '',
      								'after'           => '',
      								'link_before'     => '',
      								'link_after'      => '',
      								'items_wrap'      => '<ul >%3$s</ul>',
      								'depth'           => 0,
      								'walker'          => '',
      							] );
            			?>
  		            
  		            <span class="small_title d-none" >Soc. networks</span>
  		            <ul class="social-nav">
  		              <li>
											<a target="_blank" href="<?php the_field('s25_instagram_link', 'option'); ?>">
												<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px">    <path d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z"/></svg>
											</a>
										</li>
  		              <li>
											<a target="_blank" href="<?php the_field('s25_facebook_link', 'option'); ?>">
												<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px">    <path d="M15,3C8.373,3,3,8.373,3,15c0,6.016,4.432,10.984,10.206,11.852V18.18h-2.969v-3.154h2.969v-2.099c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L19.73,18.18h-3.106v8.697 C22.481,26.083,27,21.075,27,15C27,8.373,21.627,3,15,3z"/></svg>
											</a>
										</li>
  		              <li>
											<a target="_blank" href="<?php the_field('s25_linkedin_link', 'option'); ?>">
												<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px">    <path d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M10.496,8.403 c0.842,0,1.403,0.561,1.403,1.309c0,0.748-0.561,1.309-1.496,1.309C9.561,11.022,9,10.46,9,9.712C9,8.964,9.561,8.403,10.496,8.403z M12,20H9v-8h3V20z M22,20h-2.824v-4.372c0-1.209-0.753-1.488-1.035-1.488s-1.224,0.186-1.224,1.488c0,0.186,0,4.372,0,4.372H14v-8 h2.918v1.116C17.294,12.465,18.047,12,19.459,12C20.871,12,22,13.116,22,15.628V20z"/></svg>
											</a>
										</li>
  		              <li>
											<a target="_blank" href="<?php the_field('s25_behance_link', 'option'); ?>">
												<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px">    <path d="M 6 4 C 4.895 4 4 4.895 4 6 L 4 24 C 4 25.105 4.895 26 6 26 L 24 26 C 25.105 26 26 25.105 26 24 L 26 6 C 26 4.895 25.105 4 24 4 L 6 4 z M 17.5 11 L 20.056641 11 C 20.332641 11 20.556641 11.224 20.556641 11.5 C 20.556641 11.776 20.332641 12 20.056641 12 L 17.5 12 C 17.224 12 17 11.776 17 11.5 C 17 11.224 17.224 11 17.5 11 z M 8.9199219 11.384766 L 11.705078 11.384766 C 13.349078 11.384766 14.330078 12.189047 14.330078 13.498047 C 14.330078 14.396047 13.665875 15.179594 12.796875 15.308594 L 12.796875 15.414062 C 13.918875 15.496063 14.734375 16.341594 14.734375 17.433594 C 14.735375 18.918594 13.613688 19.859375 11.804688 19.859375 L 8.9199219 19.859375 C 8.4119219 19.859375 8 19.447453 8 18.939453 L 8 12.304688 C 8 11.796688 8.4119219 11.384766 8.9199219 11.384766 z M 9.7734375 12.740234 L 9.7734375 14.896484 L 11.105469 14.896484 C 12.063469 14.897484 12.585937 14.503266 12.585938 13.822266 C 12.585938 13.147266 12.099906 12.740234 11.253906 12.740234 L 9.7734375 12.740234 z M 18.962891 13.240234 C 20.871891 13.240234 21.998047 14.456719 21.998047 16.511719 L 21.998047 17.033203 L 17.554688 17.033203 L 17.554688 17.121094 C 17.577687 18.084094 18.142156 18.683594 19.035156 18.683594 C 19.710156 18.683594 20.173469 18.443625 20.355469 18.015625 L 21.947266 18.015625 C 21.689266 19.237625 20.572328 20 18.986328 20 C 17.013328 20 15.851563 18.754344 15.851562 16.652344 C 15.851562 14.544344 17.036891 13.240234 18.962891 13.240234 z M 18.970703 14.550781 C 18.177703 14.550781 17.618547 15.101406 17.560547 15.941406 L 20.320312 15.941406 C 20.284313 15.084406 19.768703 14.550781 18.970703 14.550781 z M 9.7734375 16.095703 L 9.7734375 18.503906 L 11.353516 18.503906 C 12.375516 18.503906 12.927734 18.07325 12.927734 17.28125 C 12.927734 16.50525 12.3575 16.095703 11.3125 16.095703 L 9.7734375 16.095703 z"/></svg>
											</a>
										</li>
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
