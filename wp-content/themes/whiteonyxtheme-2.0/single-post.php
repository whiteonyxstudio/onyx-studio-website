<?php get_header(); ?>
			
	<main>

    <section class="sec blog-single transparent">
      <div class="blog-single-content">
        <h1 class="post-header"><?php the_title(); ?></h1>
        
        <div class="post-meta">
          <div class="post-author">
						
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/author-thumbnail.png" alt="" class="author-thumbnail">
            <div class="post-author-wrapper">
              <p class="author-name">Alex Pozdnii</p>
							<?php
                // Time to read function 
                $content = get_post_field( 'post_content');
                $word_count = str_word_count( strip_tags( $content ) );
                $readingtime = ceil($word_count / 200);
              ?>
              <span class="post-details"><?php echo get_the_date(); ?></span><span class="post-details">         <?php echo $readingtime ?> Mins to read</span>
            </div>
          </div>
        </div>
        <hr>

        <?php 
          $thumbnail_id = get_post_thumbnail_id( );
          $alt = get_post_meta ( $thumbnail_id, '_wp_attachment_image_alt', true );
          $url = get_the_post_thumbnail_url();
        ?>
        <img  src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" class="post-thumbnail">
 
        
        <div class="post-editor">
           <?php the_content(); ?>
				</div>
				
      </div>
    </section>

    <section class="sec newsletter-subscription">
      <span class="bg-text">WHITE ONYX</span>
			<h2>GET UPDATE EVERY WEEK!</h2>
			<div class="newsletter-form">

				<form action="">
					<input class="text-input" type="text" placeholder="Your Name">
					<input class="text-input" type="text" placeholder="Your Email">
					<input class="button white" type="submit" value="Subscribe">
				</form>
			</div>
    </section>

		<section class="sec blog-home ">
				<div class="blog-home-wrapper">
					<h2 class="section-header">
						RELATED ARTICLES
					</h2>
				</div>

				<div class="blog-home-grid">
					<?php 
						$categories = wp_get_post_categories( get_the_ID() );
						$args = array(
						    'category__in' => $categories,
						    'post__not_in' => array( get_the_ID() ),
						    'posts_per_page' => 3,
						    'orderby' => 'rand',
						);
						$related_posts = new WP_Query( $args );

						if ( $related_posts->have_posts() ) :
						    while ( $related_posts->have_posts() ) : $related_posts->the_post();
						      ?>
										<div class="blog-home-grid-item">
											<?php 
            					  $thumbnail_id = get_post_thumbnail_id( );
            					  $alt = get_post_meta ( $thumbnail_id, '_wp_attachment_image_alt', true );
            					  $url = get_the_post_thumbnail_url();
            					?>
              				<img  src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" class="blog-thumbnail">
											<div class="post-meta">
												<?php 
													$categories = get_the_category();
													if ( ! empty( $categories ) ) {
													  
													  foreach ( $categories as $category ) {
													      echo '<a class="pill" href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
													  }
													  
													}
												?>

												<?php
              					  // Time to read function 
              					  $content = get_post_field( 'post_content');
              					  $word_count = str_word_count( strip_tags( $content ) );
              					  $readingtime = ceil($word_count / 200);
              					?>
												
												<span><?php echo $readingtime ?> Mins to read</span>
												<h3><?php the_title(); ?></h3>
											</div>
										</div>
									<?php
						    endwhile;
						endif;

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