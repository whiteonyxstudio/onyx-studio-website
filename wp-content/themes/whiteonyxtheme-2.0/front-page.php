
<?php get_header(); ?>

		<main>

			<section class="sec home-hero">
				<div class="bg"></div>
				<div class="content">
					<h1 class="page-header">
						A web design and web                    
						<b>development agency</b>
					</h1>
					<p class="white">We bring bespoke web development and web design services to every business and start-up in the world</p>
					<?php 
					$link = get_field('s01_hero_screen_link');
					if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="button white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
					
				</div>
				<div class="home-hero-extra">
					<span>Lviv - 3:54 PM</span>
					<span>London - 1:54 PM</span>
					<span class="copyright">© 2023 White Onyx</span>
				</div>
			</section>

			<section class="sec about transparent">
				<img class="ball-image" src="<?php echo get_template_directory_uri() ?>/assets/images/sphere.png" alt="">
				<div class="content">
					<h2 class="section-header">WE CREATE BEST AND
          <b>BOLD SOLUTIONS</b></h2>
					<p>White Onyx Studio is a Ukrainer-born global Web Design & Development Agency, created to support SMEs and Personal Brands in their growth. </p>
					<p>Since 2017, we have been helping our corporate and brand customers in creating bespoke web solutions, branding, and customer experience.</p>
					<p>From simple promo websites and branding, to a custom corporate solutions, we try to understand our clients' perspective of the project to create the most effective user experiences.</p>
					<a href="" class="button">Start a Project</a>
				</div>
				<div class="extra">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/maykan-logo.png" alt="">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/dental-logo.png" alt="">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/ed-logo.png" alt="">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/hourone-logo.png" alt="">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/tose-zafirov-logo.png" alt="">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/juegos-logo.png" alt="">
				</div>
			</section>
			
			<section class="sec services-home">
				<div class="bg"></div>


				<?php 

          if( have_rows('s02_homepage_services_table') ): ?>
              <?php 
              // loop through rows (parent repeater)
							$counter=1;
              while( have_rows('s02_homepage_services_table') ): the_row(); ?>
                  <div class="services-home-item <?php if($counter==1){echo "first";} ?>">
                      <h2 class="section-header white thin"><?php the_sub_field('s02_service_type'); ?></h2>
											<p class="white"><?php the_sub_field('s02_service_description'); ?></p>
                      <?php 
                      // check for rows (sub repeater)
                      if( have_rows('s02_services_pills') ): ?>
                          <div class="pills-wrapper">
                          <?php 
                          while( have_rows('s02_services_pills') ): the_row();
                              ?>
                              <?php 
																$link = get_sub_field('pills_link');
																if( $link ): 
																		$link_url = $link['url'];
																		$link_title = $link['title'];
																		$link_target = $link['target'] ? $link['target'] : '_self';
																		?>
																		<a class="pill" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
															<?php endif; ?>
                          <?php endwhile; ?>
                          </div>
                      <?php endif; ?>
											<?php 
												$link = get_sub_field('s02_learn_more_link');
												if( $link ): 
													$link_url = $link['url'];
													$link_title = $link['title'];
													$link_target = $link['target'] ? $link['target'] : '_self';
													?>
													<a class="button white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
											<?php endif; ?>
											
                  </div>    
              <?php $counter++; endwhile;  ?>
          <?php endif; ?>

			</section>

			<section class="sec cta home-cta">
					<div class="content">
						<h2 class="section-header white">
							ANY ENQUIRIES?
							<b>DON’T HESITATE!</b>
						</h2>	
						<p class="white">Not only are we a top web agency, but we're also a full-service digital marketing agency. From SEO to paid advertising to email marketing and social media management, our team can do it all. And because we're focused on results, building faster the right way is finally within reach.</p>
						<?php 
							$link = get_field('s03_cta_1_link');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="button white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
					</div>
			</section>

			<section class="sec portfolio-home">
				<a href="" class="portfolio-button"><span>LET’S TALK</span></a>
				<div class="portfolio-home-wrapper">
					<h2 class="section-header">CHECK OUR <br> LATEST PROJECTS</h2>
					<div class="links-wrapper">
						<?php 
							$link = get_field('s04_instagram_link');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
									<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M8.839 13.0638C8.839 10.7607 10.705 8.89314 13.0075 8.89314C15.31 8.89314 17.177 10.7607 17.177 13.0638C17.177 15.367 15.31 17.2346 13.0075 17.2346C10.705 17.2346 8.839 15.367 8.839 13.0638ZM6.58505 13.0638C6.58505 16.612 9.46037 19.4882 13.0075 19.4882C16.5546 19.4882 19.43 16.612 19.43 13.0638C19.43 9.51569 16.5546 6.63954 13.0075 6.63954C9.46037 6.63954 6.58505 9.51569 6.58505 13.0638ZM18.1833 6.38481C18.1832 6.68175 18.2711 6.97205 18.4359 7.21901C18.6007 7.46597 18.8351 7.65849 19.1093 7.77224C19.3835 7.88598 19.6853 7.91583 19.9764 7.85802C20.2676 7.8002 20.5351 7.65732 20.7451 7.44744C20.9551 7.23756 21.0981 6.97011 21.1561 6.6789C21.2142 6.38769 21.1846 6.08581 21.0711 5.81143C20.9576 5.53706 20.7653 5.3025 20.5186 5.13743C20.2718 4.97237 19.9817 4.8842 19.6848 4.88408H19.6842C19.2863 4.88427 18.9047 5.04242 18.6233 5.3238C18.3419 5.60519 18.1836 5.9868 18.1833 6.38481ZM7.95447 23.2476C6.73504 23.192 6.07224 22.9889 5.63178 22.8172C5.04783 22.5898 4.63118 22.319 4.19311 21.8814C3.75505 21.4438 3.48389 21.0274 3.25755 20.4433C3.08585 20.0029 2.88273 19.3397 2.8273 18.1199C2.76666 16.8012 2.75455 16.405 2.75455 13.0639C2.75455 9.72288 2.76766 9.32783 2.8273 8.00796C2.88283 6.78817 3.08745 6.12628 3.25755 5.68459C3.48489 5.10047 3.75565 4.6837 4.19311 4.24551C4.63058 3.80733 5.04683 3.53608 5.63178 3.30968C6.07204 3.13793 6.73504 2.93475 7.95447 2.8793C9.27286 2.81865 9.6689 2.80654 13.0075 2.80654C16.3461 2.80654 16.7425 2.81965 18.062 2.8793C19.2815 2.93485 19.9432 3.13953 20.3847 3.30968C20.9687 3.53608 21.3853 3.80793 21.8234 4.24551C22.2614 4.6831 22.5316 5.10047 22.7589 5.68459C22.9307 6.12498 23.1338 6.78817 23.1892 8.00796C23.2498 9.32783 23.2619 9.72288 23.2619 13.0639C23.2619 16.405 23.2498 16.8001 23.1892 18.1199C23.1337 19.3397 22.9296 20.0027 22.7589 20.4433C22.5316 21.0274 22.2608 21.4442 21.8234 21.8814C21.3859 22.3186 20.9687 22.5898 20.3847 22.8172C19.9445 22.989 19.2815 23.1921 18.062 23.2476C16.7436 23.3082 16.3476 23.3204 13.0075 23.3204C9.6674 23.3204 9.27246 23.3082 7.95447 23.2476ZM7.85091 0.628502C6.51941 0.689156 5.60956 0.900343 4.81499 1.20962C3.99209 1.529 3.29548 1.95748 2.59936 2.6527C1.90324 3.34792 1.47599 4.04584 1.15669 4.86897C0.847508 5.66427 0.636382 6.57388 0.575745 7.90577C0.514108 9.23975 0.5 9.66623 0.5 13.0638C0.5 16.4615 0.514108 16.8879 0.575745 18.2219C0.636382 19.5539 0.847508 20.4634 1.15669 21.2587C1.47599 22.0814 1.90334 22.7801 2.59936 23.475C3.29538 24.1699 3.99209 24.5978 4.81499 24.9181C5.61106 25.2274 6.51941 25.4385 7.85091 25.4992C9.18521 25.5598 9.61086 25.575 13.0075 25.575C16.4041 25.575 16.8305 25.5608 18.1641 25.4992C19.4957 25.4385 20.4049 25.2274 21.2 24.9181C22.0224 24.5978 22.7195 24.1702 23.4156 23.475C24.1118 22.7798 24.5381 22.0814 24.8583 21.2587C25.1675 20.4634 25.3796 19.5538 25.4393 18.2219C25.4999 16.8869 25.514 16.4615 25.514 13.0638C25.514 9.66623 25.4999 9.23975 25.4393 7.90577C25.3786 6.57378 25.1675 5.66377 24.8583 4.86897C24.5381 4.04634 24.1107 3.34902 23.4156 2.6527C22.7206 1.95638 22.0224 1.529 21.201 1.20962C20.4049 0.900343 19.4956 0.688155 18.1651 0.628502C16.8315 0.567848 16.4051 0.552734 13.0085 0.552734C9.61186 0.552734 9.18521 0.566847 7.85091 0.628502Z" fill="black"/>
										<path d="M8.839 13.0638C8.839 10.7607 10.705 8.89314 13.0075 8.89314C15.31 8.89314 17.177 10.7607 17.177 13.0638C17.177 15.367 15.31 17.2346 13.0075 17.2346C10.705 17.2346 8.839 15.367 8.839 13.0638ZM6.58505 13.0638C6.58505 16.612 9.46037 19.4882 13.0075 19.4882C16.5546 19.4882 19.43 16.612 19.43 13.0638C19.43 9.51569 16.5546 6.63954 13.0075 6.63954C9.46037 6.63954 6.58505 9.51569 6.58505 13.0638ZM18.1833 6.38481C18.1832 6.68175 18.2711 6.97205 18.4359 7.21901C18.6007 7.46597 18.8351 7.65849 19.1093 7.77224C19.3835 7.88598 19.6853 7.91583 19.9764 7.85802C20.2676 7.8002 20.5351 7.65732 20.7451 7.44744C20.9551 7.23756 21.0981 6.97011 21.1561 6.6789C21.2142 6.38769 21.1846 6.08581 21.0711 5.81143C20.9576 5.53706 20.7653 5.3025 20.5186 5.13743C20.2718 4.97237 19.9817 4.8842 19.6848 4.88408H19.6842C19.2863 4.88427 18.9047 5.04242 18.6233 5.3238C18.3419 5.60519 18.1836 5.9868 18.1833 6.38481ZM7.95447 23.2476C6.73504 23.192 6.07224 22.9889 5.63178 22.8172C5.04783 22.5898 4.63118 22.319 4.19311 21.8814C3.75505 21.4438 3.48389 21.0274 3.25755 20.4433C3.08585 20.0029 2.88273 19.3397 2.8273 18.1199C2.76666 16.8012 2.75455 16.405 2.75455 13.0639C2.75455 9.72288 2.76766 9.32783 2.8273 8.00796C2.88283 6.78817 3.08745 6.12628 3.25755 5.68459C3.48489 5.10047 3.75565 4.6837 4.19311 4.24551C4.63058 3.80733 5.04683 3.53608 5.63178 3.30968C6.07204 3.13793 6.73504 2.93475 7.95447 2.8793C9.27286 2.81865 9.6689 2.80654 13.0075 2.80654C16.3461 2.80654 16.7425 2.81965 18.062 2.8793C19.2815 2.93485 19.9432 3.13953 20.3847 3.30968C20.9687 3.53608 21.3853 3.80793 21.8234 4.24551C22.2614 4.6831 22.5316 5.10047 22.7589 5.68459C22.9307 6.12498 23.1338 6.78817 23.1892 8.00796C23.2498 9.32783 23.2619 9.72288 23.2619 13.0639C23.2619 16.405 23.2498 16.8001 23.1892 18.1199C23.1337 19.3397 22.9296 20.0027 22.7589 20.4433C22.5316 21.0274 22.2608 21.4442 21.8234 21.8814C21.3859 22.3186 20.9687 22.5898 20.3847 22.8172C19.9445 22.989 19.2815 23.1921 18.062 23.2476C16.7436 23.3082 16.3476 23.3204 13.0075 23.3204C9.6674 23.3204 9.27246 23.3082 7.95447 23.2476ZM7.85091 0.628502C6.51941 0.689156 5.60956 0.900343 4.81499 1.20962C3.99209 1.529 3.29548 1.95748 2.59936 2.6527C1.90324 3.34792 1.47599 4.04584 1.15669 4.86897C0.847508 5.66427 0.636382 6.57388 0.575745 7.90577C0.514108 9.23975 0.5 9.66623 0.5 13.0638C0.5 16.4615 0.514108 16.8879 0.575745 18.2219C0.636382 19.5539 0.847508 20.4634 1.15669 21.2587C1.47599 22.0814 1.90334 22.7801 2.59936 23.475C3.29538 24.1699 3.99209 24.5978 4.81499 24.9181C5.61106 25.2274 6.51941 25.4385 7.85091 25.4992C9.18521 25.5598 9.61086 25.575 13.0075 25.575C16.4041 25.575 16.8305 25.5608 18.1641 25.4992C19.4957 25.4385 20.4049 25.2274 21.2 24.9181C22.0224 24.5978 22.7195 24.1702 23.4156 23.475C24.1118 22.7798 24.5381 22.0814 24.8583 21.2587C25.1675 20.4634 25.3796 19.5538 25.4393 18.2219C25.4999 16.8869 25.514 16.4615 25.514 13.0638C25.514 9.66623 25.4999 9.23975 25.4393 7.90577C25.3786 6.57378 25.1675 5.66377 24.8583 4.86897C24.5381 4.04634 24.1107 3.34902 23.4156 2.6527C22.7206 1.95638 22.0224 1.529 21.201 1.20962C20.4049 0.900343 19.4956 0.688155 18.1651 0.628502C16.8315 0.567848 16.4051 0.552734 13.0085 0.552734C9.61186 0.552734 9.18521 0.566847 7.85091 0.628502Z" fill="black"/>
									</svg>
								</a>
						<?php endif; ?>
						

						<?php 
							$link = get_field('s04_linkedin_link');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
									<svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.24777 20.1316V6.62513H0.762428V20.1316H5.24824H5.24777ZM3.00604 4.78137C4.56984 4.78137 5.54342 3.74423 5.54342 2.44811C5.51415 1.12245 4.56984 0.114258 3.03578 0.114258C1.50066 0.114258 0.498047 1.12245 0.498047 2.44799C0.498047 3.74412 1.47127 4.78125 2.97665 4.78125H3.00569L3.00604 4.78137ZM7.73048 20.1316H12.2155V12.5898C12.2155 12.1866 12.2447 11.7824 12.3632 11.4945C12.6873 10.6877 13.4253 9.85244 14.6647 9.85244C16.2873 9.85244 16.9367 11.0909 16.9367 12.9068V20.1316H21.4216V12.3874C21.4216 8.23896 19.2092 6.30848 16.2582 6.30848C13.8389 6.30848 12.7763 7.66191 12.186 8.58373H12.2158V6.6256H7.73071C7.78925 7.89266 7.73036 20.132 7.73036 20.132L7.73048 20.1316Z" fill="black"/>
							</svg>
								</a>
						<?php endif; ?>

						<?php 
							$link = get_field('s04_behance_link');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
									<svg width="26" height="17" viewBox="0 0 26 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.5951 7.72231C10.5951 7.72231 12.9614 7.54236 12.9614 4.70846C12.9614 1.8769 11.3565 0.481075 8.90348 0.481075L0.5 0.467773V16.116H9.09891C9.09891 16.116 13.3984 16.2522 13.3984 11.4216C13.3984 11.4216 13.7142 7.72231 10.5951 7.72231ZM3.62687 2.81501H7.92633C7.92633 2.81501 9.39752 2.83927 9.39752 4.74836C9.39752 6.72708 7.92633 6.72708 7.92633 6.72708H3.62687V2.81501ZM8.31719 13.7688H3.62687V9.07432H8.31719C8.31719 9.07432 10.6623 9.09858 10.6623 11.4216C10.6623 13.7446 8.65489 13.7688 8.31719 13.7688Z" fill="black"/>
										<path d="M20.0435 4.38037C14.1704 4.38037 14.1806 10.2485 14.1806 10.2485C14.1806 10.2485 13.7897 16.1166 20.0435 16.1166C20.0435 16.1166 25.5155 16.1166 25.5155 11.4221H22.3887C22.3887 11.4221 22.3887 13.7693 20.0435 13.7693C20.0435 13.7693 17.6983 13.7693 17.6983 10.6397C17.6983 10.6397 23.9521 10.6397 25.5155 10.6397C25.5155 9.07485 25.5155 4.38037 20.0435 4.38037ZM17.6983 9.07485C17.6983 9.07485 17.6467 6.72761 20.0435 6.72761C22.4395 6.72761 22.3887 9.07485 22.3887 9.07485H17.6983Z" fill="black"/>
										<path d="M23.1698 2.03271H16.916V3.59754H23.1698V2.03271Z" fill="black"/>
									</svg>
								</a>
						<?php endif; ?>
						<a class="pill black" href="<?php the_field('s04_portfolio_button_link'); ?>">See All Projects</a>
					</div>
				</div>
				<p>We help clients around the world create more engaging experiences through design.</p>
			</section>

			<section class="sec portfolio-item atlant">
				<div class="content">
					<h2 class="section-header white small">ATLANT.</h2>
					<div class="pills-wrapper">
						<a href="" class="pill">Web Design</a><a href="" class="pill">Web Developemnt</a>
					</div>
					<p class="white">Atlant is a group of construction companies working in the high end residential sector throughout the south east.</p>
				</div>
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/atlant-thumbnail.png" alt="" class="thumbnail">
			</section>

			<section class="sec portfolio-item juegos">
				<div class="content">
					<h2 class="section-header white small">JUEGOS <br> CASINO</h2>
					<div class="pills-wrapper">
						<a href="" class="pill">Web Design</a><a href="" class="pill">Web Developemnt</a>
					</div>
					<p class="white">Atlant is a group of construction companies working in the high end residential sector throughout the south east.</p>
				</div>
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/juegos-thumbnail.png" alt="" class="thumbnail">
			</section>

			<section class="sec portfolio-item ed-agency">
				<div class="content">
					<h2 class="section-header white small">e.D. MARKETING AGENCY</h2>
					<div class="pills-wrapper">
						<a href="" class="pill">Web Design</a><a href="" class="pill">Web Developemnt</a>
					</div>
					<p class="white">Atlant is a group of construction companies working in the high end residential sector throughout the south east.</p>
				</div>
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/ed-agency-thumbnail.png" alt="" class="thumbnail">
			</section>

			<section class="sec portfolio-item tose">
				<div class="content">
					<h2 class="section-header white small">TOSE ZAFIROV</h2>
					<div class="pills-wrapper">
						<a href="" class="pill">Web Design</a><a href="" class="pill">Web Developemnt</a>
					</div>
					<p class="white">Atlant is a group of construction companies working in the high end residential sector throughout the south east.</p>
				</div>
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/tose-zafirov-thumbnail.png" alt="" class="thumbnail">
			</section>

			<section class="sec portfolio-item aesop">
				<div class="content">
					<h2 class="section-header white small">AESOP</h2>
					<div class="pills-wrapper">
						<a href="" class="pill">Web Design</a><a href="" class="pill">Web Developemnt</a>
					</div>
					<p class="white">Atlant is a group of construction companies working in the high end residential sector throughout the south east.</p>
				</div>
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/tose-zafirov-thumbnail.png" alt="" class="thumbnail">
			</section>



			<section class="sec cta home-cta">
					<div class="content">
						<h2 class="section-header white">
							
							<?php the_field('s05_cta_header'); ?>
						</h2>	
						<p class="white"><?php the_field('s05_cta_text'); ?></p>
						<div class="advantages">
							<div class="advantages-item">
								<h3><img src="<?php echo get_template_directory_uri() ?>/assets/images/webflo.svg" alt="">Webflow development agency</h3>
								<p>for some of the world’s top B2B unicorns</p>
							</div>
							<div class="advantages-item">
								<h3><img src="<?php echo get_template_directory_uri() ?>/assets/images/roi.svg" alt="">Laser-focused on ROI</h3>
								<p>with proven growth marketing services</p>
							</div>
							<div class="advantages-item">
								<h3><img src="<?php echo get_template_directory_uri() ?>/assets/images/calendar.svg" alt="">Weekly 1-on-1 meetings</h3>
								<p>with our Webflow services experts</p>
							</div>
						</div>
						<?php 
							$link = get_field('s05_cta_button');
							if( $link ): 
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a class="button white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
					</div>
			</section>


			<section class="sec blog-home transparent">
				<div class="blog-home-wrapper">
					<h2 class="section-header">
						READ OUR 
										<b>LATEST ARTICLES</b>
					</h2>
						<a href="/blog" class="pill black">Read Our Blog</a>
				</div>

				<div class="blog-home-grid">
					<?php 

						$my_posts = get_posts( array(
							'numberposts' => 3,
							'category'    => 0,
							'orderby'     => 'date',
							'order'       => 'DESC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  =>'',
							'post_type'   => 'post',
							'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
						) );
						
						global $post;
						
						foreach( $my_posts as $post ){
							setup_postdata( $post );
								?>
								<div class="blog-home-grid-item">
									 <?php 
                      $thumbnail_id = get_post_thumbnail_id( $featured_post->ID );
                      $alt = get_post_meta ( $thumbnail_id, '_wp_attachment_image_alt', true );
                      $url = get_the_post_thumbnail_url();
                    ?>
									<a href="<?php the_permalink(); ?>"><img  src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" class="blog-thumbnail" loading="lazy"></a>
									<div class="post-meta">
										<a href="" class="pill">Web Design</a>
										<a href="" class="pill">Web Development</a>
										<?php $content = get_post_field( 'post_content');
											$word_count = str_word_count( strip_tags( $content ) );
											$readingtime = ceil($word_count / 200); 
											?>
										<span><?php echo $readingtime; ?> Mins to read</span>
										<a href="<?php the_permalink(); ?>">
											<h3><?php the_title(); ?></h3>
										</a>
									</div>
								</div>
								<?php
						}
						wp_reset_postdata(); 
					?> 
					

				</div>
			</section>

			<section class="sec promo">
				<div class="bg"></div>
				<h2>A MODERN DIGITAL AGENCY</h2>
			</section>

		</main>

			

<?php get_footer(); ?>