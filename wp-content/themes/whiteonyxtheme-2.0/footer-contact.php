<div class="popup">
  		  <div class="popup-overlay"></div>
  		  <div class="main-popup">
  		    <div class="popup-header"><div class="close-btn"><span >&times;</span></div></div>
  		    <div class="popup-content">
  		      <div class="container-fluid">
  		        <div class="row">
  		          <div class="col-xxl-12 menu-wrapper">
  		            <span class="small_title">Main Menu</span>
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
  		            
  		            <span>Useful links</span>
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

		<?php wp_footer(); ?>

	</body>
</html>