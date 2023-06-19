 			<?php /* Template Name: Portfolio Page
      */ ?>

			<?php $pageID = get_option('page_on_front');  ?>
      <?php get_header(); ?>
		
			<main>

      <section class="sec portfolio-archive-head">
        <h2 class="page-header">Portfolio</h2>
        <p>Given the importance of product distribution in the B2B SaaS space, we design, develop and market with purpose to distribute. Take a look at some of our work.</p>
				<!-- <div class="pills-wrapper">
            <a href="" class="pill active">All Work</a>
            <a href="" class="pill ">Web Design</a>
            <a href="" class="pill ">SEO</a>
            <a href="" class="pill ">Web Development</a>
            <a href="" class="pill ">Branding</a>
				</div> -->
			</section>

			<section class="portfolio-secondary">
				<div class="portfolio-secondary-wrapper">
					<?php 
            if ( have_posts() ) {
            	while ( have_posts() ) {
            		the_post();
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
                
            	} // end while
            } // end if
          ?>
				</div>
        <div class="pagination">

        </div>
			</section>

      <section class="sec cta services-cta portfolio-cta">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/purple-sphere.png" alt="" class="cta-shpere">
					<div class="content">
						<h2 class="section-header white">
							<?php the_field('s05_cta_header','options'); ?>
						</h2>	
						<p class="white"><?php the_field('s05_cta_text','options'); ?></p>
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
      
		</main>

			<?php get_footer(); ?>