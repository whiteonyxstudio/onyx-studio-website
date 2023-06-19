
<?php get_header(); ?>

	<main>

    <section class="sec services-hero">
      <h1 class="page-header">Services</h1>
      <p class="white">Our Mission is to help businesses combine Web Design, Sales, and Marketing, into a single system to make businesses grow.</p>
    </section>


    <section class="sec services-archive">

			<?php 

        // check for rows (parent repeater)
        if( have_rows('s07_homepage_services_table','options') ): 
            while( have_rows('s07_homepage_services_table','options') ): the_row(); ?>
                <div class="services-archive-item">
									<div class="details">
										<h2 class="section-header small"><?php the_sub_field('s07_service_type'); ?></h2>
                    <?php 
                    if( have_rows('s07_services_pills') ): ?>
                        <div class="pills-wrapper">
													<?php 
													while( have_rows('s07_services_pills') ): the_row();
															?>
															<?php 
																$link = get_sub_field('pills_link');
																if( $link ): 
																		$link_url = $link['url'];
																		$link_title = $link['title'];
																		$link_target = $link['target'] ? $link['target'] : '_self';
																		?>
																		<a class="pill black" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
															<?php endif; ?>
													<?php endwhile; ?>
                        </div>
												<?php 
													$link = get_sub_field('s07_learn_more_link');
													if( $link ): 
															$link_url = $link['url'];
															$link_title = $link['title'];
															$link_target = $link['target'] ? $link['target'] : '_self';
															?>
															<a class="button black" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
												<?php endif; ?>
                    <?php endif; //if( get_sub_field('items') ): ?>
                </div>  <!-- details --> 
								<div class="sample-projects">
        				  <div class="sample-projects-slider">
        				    <div class="sample-projects-slider-item">
        				      <img src="<?php echo get_template_directory_uri() ?>/assets/images/smaple-project.png" alt="">
        				      <div class="image-overlay"></div>
        				      <h3>ATLANT.</h3>
        				      <p>Atlant is a group of construction companies working in the high end residential sector throughout the south east.</p>
        				    </div>
        				  </div>
        				</div> <!-- sample-projects -->
							</div> <!-- services-archive-item -->
            <?php endwhile;?>
        <?php endif;?>
				
    </section>

    <section class="sec cta home-cta ">
					<div class="content">
						<h2 class="section-header white">
							Bespoke services
							<b>tailored for you</b>
							
						</h2>	
						<p class="white">As a full-service web agency we create standout web solutions and intelligent user experiences. Working and planning specifically to meet your business needs, we do our best to build websites that will impact your business. Wither it a small business website or a large web solution, we got you covered. Feel free to check our portfolio or drop us a line today!</p>
						<?php 
							$link = get_field('s05_cta_button','options');
							if( $link ): 
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a class="button white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
					</div>
			</section>
      
      <section class="sec industries">
        <h2 class="section-header">
          Industries and Businesses <br>We work with
        </h2>
        <div class="industries-wrapper">


          <div class="industries-wrapper-item">
						<span>01</span>
            <div class="content">
							<h3>Healthcare</h3>
									<p>We provide web development services and SEO for dental clinics, medical centers, and private practitioners. We help businesses generate more leads and grow their patient base through user-friendly web solutions and result-driven SEO.</p>
						</div>
          </div>
          <div class="industries-wrapper-item">
						<span>02</span>
            <div class="content">
							<h3>Real Estate</h3>
								<p>
									We build and promote websites for real estate organizations, construction companies, architecture firms, and interior design studios. To bring more customers into real estate, we create client-oriented web services and property listings that rank high on Google.
								</p>
						</div>
          </div>
          <div class="industries-wrapper-item">
						<span>03</span>
            <div class="content">
							<h3>Affiliate marketing</h3>
								<p>
									Affiliate marketing is a large niche in the digital world. We support marketing experts by helping them drive traffic to their affiliate marketing platforms. We design niche blogs and develop custom solutions that blend perfectly with affiliate programs.
								</p>
						</div>
          </div>
          <div class="industries-wrapper-item">
						<span>04</span>
            <div class="content">
							<h3>Fitness</h3>
								<p>
									Creating and promoting fitness brand websites around the world, we provide web services to fitness trainers, influencers, bodybuilding organizations, and brands. Our team is super motivated to help your brand grow.
								</p>
						</div>
          </div>
					<div class="industries-wrapper-item">
						<span>05</span>
            <div class="content">
							<h3>Law Firms</h3>
								<p>
									We work with Lawyers, IT Law Companies, and Large Law Firms. We provide web development services to help these companies obtain clients through Google search and PPC Ad Campaign. Because legal services are complex products, we concentrate on expert blogs and consulting services when working on Law Firm websites
								</p>
						</div>
          </div>
					<div class="industries-wrapper-item">
						<span>06</span>
            <div class="content">
							<h3>E-commerce</h3>
								<p>
									Providing E-commerce development services for brands, retail and wholesale companies. We will help digitalize sales and bring you newly created products to online shoppers around the world by building a mobile-friendly, easy-to-use online store.
								</p>
						</div>
          </div>
        </div>
      </section>

			<section class="sec portfolio-home no-sec">
				
				<div class="portfolio-home-wrapper">
					<h2 class="section-header">CHECK OUR <br> LATEST PROJECTS</h2>
					
				</div>
				<p>We help clients around the world create more engaging experiences through design.</p>
			</section>

			<section class="portfolio-secondary">
				<div class="portfolio-secondary-wrapper">
					<?php 

						$my_posts = get_posts( array(
							'numberposts' => 2,
							'category'    => 0,
							'orderby'     => 'date',
							'order'       => 'DESC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  =>'',
							'post_type'   => 'portfolio',
							'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
						) );
						
						global $post;
						
						foreach( $my_posts as $post ){
							setup_postdata( $post );
								?>
									<div class="portfolio-secondary-item">
										<a href="<?php the_permalink(); ?>">
											<?php 
                    	  $thumbnail_id = get_post_thumbnail_id( $featured_post->ID );
                    	  $alt = get_post_meta ( $thumbnail_id, '_wp_attachment_image_alt', true );
                    	  $url = get_the_post_thumbnail_url();
                    	?>
											<img  src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" loading="lazy">
										</a>
										<a href="<?php the_permalink(); ?>">
											<h3><?php the_title(); ?></h3>
										</a>
										<p><?php the_excerpt(); ?></p>
									</div>
								<?php
						}
						wp_reset_postdata(); 
					?> 
				</div>
			</section>
			
			<section class="sec cta services-cta">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/onyx-sphere.png" alt="" class="cta-shpere">
					<div class="content">
						<h2 class="section-header white">
							<?php the_field('s06_cta_header','options'); ?>
						</h2>	
						<p class="white"><?php the_field('s06_cta_text','options'); ?></p>
						<?php 
							$link = get_field('s06_cta_button','options');
							if( $link ): 
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a class="button white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
					</div>
			</section>

		</main>			

<?php get_footer(); ?>