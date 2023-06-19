<?php get_header(); ?>
			
	<main>
			<section class="sec portfolio-single-head">
				<?php 
          $thumbnail_id = get_post_thumbnail_id( );
          $alt = get_post_meta ( $thumbnail_id, '_wp_attachment_image_alt', true );
          $url = get_the_post_thumbnail_url();
        ?>
        <img  src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
				<div class="opacity-overlay"></div>
				<div class="content">
					<h1 class="page-header white small">
						<?php the_title(); ?>
					</h1>
					<p class="white"><?php echo get_the_excerpt(); ?></p>
					<div class="pills-wrapper">
						<span class="pill">Web Design</span>
						<span class="pill">Web Development</span>
						<a class="pill link" href="https://www.juegoscasino.es/">Visit Website</a>
					</div>
				</div>
			</section>
			<section class="sec portfolio-single-about">
				<h2 class="section-header">
					About Project
				</h2>
				<hr>
				<div class="portfolio-single-about-meta">
					<div class="portfolio-single-about-meta-item">
						<span>Date:</span>
						<p><?php the_field('s17_project_date'); ?></p>
					</div>
					<div class="portfolio-single-about-meta-item">
						<span>Services:</span>
						<p><?php the_field('s17_project_services'); ?></p>
					</div>
					<div class="portfolio-single-about-meta-item">
						<span>Client:</span>
						<p><?php the_field('s17_client_company'); ?></p>
					</div>
					<div class="portfolio-single-about-meta-item">
						<span>Tags:</span>
						<p><?php the_field('s17_tags'); ?></p>
					</div>

				</div>
				<hr>
				<p class="portfolio-single-about-text"><?php the_field('s17_about_text'); ?></p>
				<hr>
				<div class="portfolio-single-about-deliverables">
					<div class="portfolio-single-about-deliverables-item">
						<h3>PLATFORMS</h3>
						<?php if( have_rows('s17_platforms') ): ?>
								<?php while( have_rows('s17_platforms') ): the_row(); 
									?>
									<p><?php the_sub_field('platform_name'); ?></p>
								<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="portfolio-single-about-deliverables-item">
						<h3>ROLES</h3>
						<?php if( have_rows('s17_roles') ): ?>
								<?php while( have_rows('s17_roles') ): the_row(); 
									?>
									<p><?php the_sub_field('role'); ?></p>
								<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="portfolio-single-about-deliverables-item">
						<h3>DELIVERABLES</h3>
						<?php if( have_rows('s17_deliverables') ): ?>
								<?php while( have_rows('s17_deliverables') ): the_row(); 
									?>
									<p><?php the_sub_field('deliverable'); ?></p>
								<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</section>
			<?php 
				$image = get_field('s17_full_image_1');
				if( !empty( $image ) ): ?>
					<img class="case-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>

		

			<section class="sec industries">
        <h2 class="section-header">
          Challenges
        </h2>
				<p><?php the_field('s17_challenge_description'); ?></p>
        <div class="industries-wrapper">

				<?php if( have_rows('s17_challanges_grid') ): ?>
				    <?php $counter=1; while( have_rows('s17_challanges_grid') ): the_row(); 
				      ?>
				      <div class="industries-wrapper-item">
								<span>0<?php echo $counter; ?></span>
								<div class="content">
									<h3><?php the_sub_field('challange_header'); ?></h3>
										<p><?php the_sub_field('challange_description'); ?></p>
								</div>
							</div>
				    <?php $counter++; endwhile; ?>
				<?php endif; ?>

         
        </div>
      </section>
			<section class="sec portfolio-single-gallery">
				<?php if( have_rows('s17_case_gallery') ): ?>

					<?php while( have_rows('s17_case_gallery') ): the_row(); 
						?>
							<?php 
							$image = get_sub_field('image');
							if( !empty( $image ) ): ?>
							    <img class="portfolio-single-gallery-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
					<?php endwhile; ?>

			<?php endif; ?>
				
			</section>

			<section class="sec portfolio-single-about-design">
				<h2 class="section-header">Design</h2>
				<p><?php the_field('s20_design_description'); ?></p>
			</section>
			<?php 
				$image = get_field('s20_full_image_2');
				if( !empty( $image ) ): ?>
					<img class="case-about" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
			

			<section class="sec about-text portfolio-single-about-text-2">
        
        <div class="additional-info mt-0">
          <h3><?php the_field('s21_results_header'); ?></h3>
          <p><?php the_field('s21_result_description'); ?></p>
        </div>
        <div class="industries-wrapper">
					<?php if( have_rows('s21_case_results_grid') ): ?>
				    <?php $counter=1; while( have_rows('s21_case_results_grid') ): the_row(); 
				      ?>
				      <div class="industries-wrapper-item">
								<span>0<?php echo $counter; ?></span>
								<div class="content">
									<h3><?php the_sub_field('result_header'); ?></h3>
										<p><?php the_sub_field('result_description'); ?></p>
								</div>
							</div>
				    <?php $counter++; endwhile; ?>
				<?php endif; ?>
          
        </div>
      </section>


      <section class="sec portfolio-home no-sec">
				<div class="portfolio-home-wrapper">
					<h2 class="section-header">CHECK OUR <br> LATEST PROJECTS</h2>
				</div>
				<p >We help clients around the world create more engaging experiences through design.</p>
			</section>

      <section class="sec cta services-cta portfolio-signle-cta">
				
					<div class="content">
						<h2 class="section-header white">
							Bespoke services
							<b>tailored for you</b>
						</h2>	
						<p class="white">As a full-service web agency we create standout web solutions and intelligent user experiences. Working and planning specifically to meet your business needs, we do our best to build websites that will impact your business. Wither it a small business website or a large web solution, we got you covered. Feel free to check our portfolio or drop us a line today!</p>
						<a href="/contact-us" class="button white">Start a Project</a>
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
        
            // параметры по умолчанию
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
              $thumbnail_id = get_post_thumbnail_id( $post->ID );
                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);   
								$url = get_the_post_thumbnail_url($featured_post );
            	?>
                <div class="portfolio-secondary-item">
									<a href="<?php the_permalink(); ?>">
										<img  src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" loading="lazy">
									</a>
									<a href="<?php the_permalink(); ?>">
										<h3><?php the_title(); ?></h3>
									</a>
									<p><?php echo get_the_excerpt(); ?></p>
								</div>
              <?php
            }

            wp_reset_postdata(); // сброс
        
        ?>
				</div>
			</section>

			
			<section class="sec promo">
				<div class="bg"></div>
				<h2>A MODERN DIGITAL AGENCY</h2>
			</section>

		</main>

<?php get_footer(); ?>