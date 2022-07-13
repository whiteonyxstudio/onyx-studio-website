<?php 
								$args = array(  
    						    'post_type' => 'case',
    						    'posts_per_page' => 10, 
    						    'orderby' => 'date', 
    						    'order' => 'ASC',
    						);
								$loop = new WP_Query( $args );

								while ( $loop->have_posts() ) : $loop->the_post(); 
									?>
										<div class="col-lg-12">
											<a class="portfolio_fullimage_layout" href="<?php the_permalink(); ?>"> 
												<?php the_post_thumbnail('full'); ?>
												<span class="item_content">
													<strong class="item_title"><?php the_title(); ?></strong>
													<?php $cats = get_the_category($id); ?>
													<small class="item_categories text-uppercase">
														<?php foreach ( $cats as $cat ): ?>
														     <?php echo $cat->name; echo '  '; ?>
																 
														<?php endforeach; ?>
													</small>
													
												</span>
											</a>
										</div>
									<?php
    						endwhile;
							?>