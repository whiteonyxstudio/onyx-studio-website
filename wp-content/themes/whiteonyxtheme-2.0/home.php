
<?php get_header(); ?>
<?php
$page_for_posts = get_option( 'page_for_posts' );
?>

			<!-- main body - start
			================================================== -->
			<main>
				<!-- breadcrumb_section - start
				================================================== -->
				<section class="breadcrumb_section breadcrumbs_blog  section_space pb-0">
					<div class="container ">
						<h1 class="page_title">
							<span class="d-block">Blog</span>
						</h1>
						<p class="mb-0 d-none d-md-inline">
							Regular dose of usefull content from our studio experts
						</p>
						<div class="category-navigation d-block d-lg-none pt-0">
							<div class="container mx-0 px-0">
								<div class="row">
									<div class="filter_nav_wrap">

										<ul class="filter-btns-group button-group ul_li">
											<li><a href="" class="button">All<sup>10</sup></a></li>
											<?php $categories = get_categories(); 
												foreach($categories as $category) {

												echo '<li><a href="' . get_category_link($category->term_id) . '" class="button" >' . $category->name . '<sup>'. $category->count .'</sup></a></li>';
											}
											?>
										</ul>

									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- breadcrumb_section - end
				================================================== -->

				<!-- blog_section - start
				================================================== -->
				<section class="blog_archive_section section_space ">
					<div class="container">
						<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
							<div class="col-12 col-sm-12 col-md-12 col-lg-8 ">

							<?php 
                if ( have_posts() ) {
                  $counter=1;
                	while ( have_posts() ) {
                		the_post(); 
                		?>
                      <article class="blog_standard_layout">
												<a class="item_image" href="<?php the_permalink(); ?>">
													<?php the_post_thumbnail('full'); ?>
												</a>
												<div class="item_content">
													<ul class="post_meta ul_li text-uppercase">
														<li>By - <a href="#!">Admin</a></li>
														<li><a href="#!">Branding</a></li>
													</ul>
													<h3 class="item_title text_effect_wrap">
														<a href="<?php the_permalink(); ?>">
															<span class="text_effect_wrap1">
																<span class="text_effect_wrap2">
																	<span class="text_effect_wrap3"><?php the_title(); ?></span>
																</span>
															</span>
														</a>
													</h3>
													<p>
														<?php echo get_the_excerpt(); ?>
													</p>
													<a class="btn_text text-uppercase" href="<?php the_permalink(); ?>"><span>Read More</span> <i class="fal fa-long-arrow-right"></i></a>
												</div>
											</article>
                    <?php
                    $counter++;
                	} // end while
                } // end if
              ?>

								

                <?php
                    the_posts_pagination( array(
                    'mid_size' => 2,
                    'prev_text' => __( 'Prev', 'textdomain' ),
                    'next_text' => __( 'next', 'textdomain' ),
                    ) );
                ?>
                
							</div>

							<div class="col-12 col-sm-12 col-md-12 col-lg-4  ">
								<aside class="sidebar_section">

									<div class="sb_widget sb_category">
										<h3 class="sb_widget_title text-uppercase">Categories</h3>
										<ul class="ul_li_block">
											<?php $categories = get_categories(); 
												foreach($categories as $category) {
													if( $category->count>0){
															echo '<li><a href="' . get_category_link($category->term_id) . '" class="button" >' . $category->name . '<sup>'. $category->count .'</sup></a></li>';
													}
												}
											?>
										</ul>
									</div>

									<div class="sb_widget sb_recent_post">
										<h3 class="sb_widget_title text-uppercase">Featured Posts</h3>
										<?php
										$featured_posts = get_field('s24_popular_posts',$page_for_posts);
										if( $featured_posts ): ?>
										    <?php foreach( $featured_posts as $featured_post ): 
										        $permalink = get_permalink( $featured_post->ID );
										        $title = get_the_title( $featured_post->ID );
										        ?>
															<div class="recent_post_item">
																<h3 class="item_title">
																	<a href="<?php echo $permalink; ?>"><?php echo $title; ?></a>
																</h3>
																<span class="post_date text-uppercase"><?php echo get_the_date( ); ?></span>
															</div>
										    <?php endforeach; ?>
										<?php endif; ?>
									</div>

									<div class="sb_widget sb_banner black-bg">
										<h3 class="sb_widget_title text-uppercase mb-0">Want to get useful content?</h3>
										<p >Subscribe to our blog!</p>
										<form action="#">
											<div class="form_item">
												<input type="email" name="email" placeholder="Your Email*">
											</div>
											<buton type="submit" class="btn btn_border border_dark text-uppercase" href="#">   Subscribe   </buton>
										</form>
									</div>
									
								</aside>
							</div>
						</div>
					</div>
				</section>
				<!-- blog_section - end
				================================================== -->

			</main>
			<!-- main body - end
			================================================== -->

			<section class="title_section ">
				<div class="container">
					<h2 class="biggest_title text-center">A modern digital agency</h2>
				</div>
			</section>

		<?php get_footer(); ?>