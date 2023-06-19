
<?php get_header(); ?>

<main>
		<section class="sec blog-archive-head">
      <h1 class="page-header">
        BLOG
      </h1>
      <p>Welcome to our blog! Here you'll find expert insights and opinions  of seasoned web professionals that share their experiences, knowledge and latest trends in the industry. Stay tuned for informative and engaging articles, case studies, and more!</p>
    </section>
		
    <section class="sec transparent blog-archive-main">
      <div class="section-header">Featured Posts</div>
      <div class="blog-archvie-grid">
				<?php
				$featured_posts = get_field('s08_featured_posts','options');
				if( $featured_posts ): ?>

						<?php foreach( $featured_posts as $post ): 
						setup_postdata($post); ?>
						
							<article class="blog-archvie-grid-item">
        			  <?php $thumbnail_id = get_post_thumbnail_id( $post->ID );
                	$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);    
								?>
        				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full', array( 'alt' => $alt ) );  ?></a>
        			  <div class="blog-post-meta">
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
                    $content = get_post_field( 'post_content',$featured_post->ID);
                    $word_count = str_word_count( strip_tags( $content ) );
                    $readingtime = ceil($word_count / 200);
                  ?>
        			    <span class="time"><?php echo $readingtime; ?> Mins to read</span>
        			    <a href="<?php the_permalink(); ?>">
										<h3><?php the_title(); ?></h3>
									</a>
        			  </div>

        			</article>

						<?php endforeach; ?>

						<?php 
						// Reset the global post object so that the rest of the page works correctly.
						wp_reset_postdata(); ?>
				<?php endif; ?>
       
      </div>
      <hr>

      <div class="section-header">Latest POSTS</div>
      <div class="pills-wrapper blog-pills">
        <span class="pill active">All Posts</span>
        <span class="pill ">Web Design</span>
        <span class="pill ">Web Development</span>
        <span class="pill ">SEO</span>
        <span class="pill ">Branding</span>
      </div>
      <div class="blog-archvie-grid">
				<?php 
          if ( have_posts() ) {
            $counter=1;
          	while ( have_posts() ) {
          		the_post();
              $thumbnail_id = get_post_thumbnail_id( $post->ID );
              $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);   
              
          		?>
              
                <article class="blog-archvie-grid-item">
									<?php $thumbnail_id = get_post_thumbnail_id( $post->ID );
                		$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);    
									?>
        				   <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full', array( 'alt' => $alt ) );  ?></a>
        				  <div class="blog-post-meta">
        				    <span class="pill">Web Design</span>
        				    <span class="pill">Web Development</span>
        				    <span class="time">5 Mins to read</span>
        				    <a href="<?php the_permalink(); ?>">
											<h3><?php the_title(); ?></h3>
										</a>
        				  </div>
        				</article>
              <?php
              $counter++;
          	} // end while
          } // end if
        ?>
      </div>
			<?php 
			
					global $wp_query;
					$has_pagination = ( $wp_query->max_num_pages > 1 );
					if ( $has_pagination ) {
							?>
							
								<div class="pagination">
      					  <a href="<?php echo get_next_posts_page_link(); ?>" class="show-more">Show More</a>
									<?php
      						  $args = array(
      						  	'show_all'     => false, // показаны все страницы участвующие в пагинации
      						  	'end_size'     => 1,     // количество страниц на концах
      						  	'mid_size'     => 1,     // количество страниц вокруг текущей
      						  	'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
      						  	'prev_text'    => __('<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.58984 1L1.00161 8L7.58984 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>'),
      						  	'next_text'    => __('<svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 1L7.58824 8L1 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>'),
      						  	'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
      						  	'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
      						  	'class'        => 'pagination-wrapper', // CSS класс, добавлено в 5.5.0.
      						  );
      						  the_posts_pagination( $args );
      						?>

      					</div>
							
							<?php
					} else {
							// No pagination, do something else
					}

			?>
      
    </section>
    <section class="sec promo">
			<div class="bg"></div>
			<h2>A MODERN DIGITAL AGENCY</h2>
		</section>
	</main>

<?php get_footer(); ?>