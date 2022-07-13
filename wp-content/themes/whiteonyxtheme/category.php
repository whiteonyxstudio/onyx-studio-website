<?php get_header(); ?>

			<!-- main body - start
			================================================== -->
			<main>
				<!-- breadcrumb_section - start
				================================================== -->
				<section class="breadcrumb_section breadcrumbs_blog section_space ">
					<div class="container ">
						<h1 class="page_title">
							<span class="d-block"><?php single_cat_title(); ?> Articles</span>
						</h1>
						<p class="mb-0 d-none d-md-inline">
							REGULAR DOSE OF USEFUL CONTENT FROM OUR STUDIO EXPERTS
						</p>
						<div class="category-navigation d-block d-lg-none pt-0">
							<div class="container mx-0 px-0">
								<div class="row">
									<div class="filter_nav_wrap">
										<h3 class="filter_nav_title text-uppercase">Filter by:</h3>
										<ul class="filter-btns-group button-group ul_li">
											<li><button class="button active" data-filter="*">All<sup>10</sup></button></li>
											<li><button class="button" data-filter=".creative">Web development<sup>12</sup></button></li>
											<li><button class="button" data-filter=".branding">Web design<sup>08</sup></button></li>
											<li><button class="button" data-filter=".insparation">Branding<sup>03</sup></button></li>
											<li><button class="button" data-filter=".design">SEO<sup>01</sup></button></li>
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
				<section class="blog_section section_space pt-0">
					<div class="container">
						<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
							<div class="col-lg-8 col-md-8 col-sm-10">
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

							<div class="col-lg-4 col-md-8 col-sm-10">
								<aside class="sidebar_section">

									<div class="sb_widget sb_category">
										<h3 class="sb_widget_title text-uppercase">Categories</h3>
										<ul class="ul_li_block">
											<?php 
												$post_args=array(
												'post_type'=>'post'
												);
												$postTypes = new WP_Query($post_args);
												$numberOfBlog_Posts=$postTypes->found_posts;
											?>
											<li><a href="<?php echo get_post_type_archive_link( 'post' ); ?>">All<sup><?php echo $numberOfBlog_Posts; ?></sup></a></li>
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
										<h3 class="sb_widget_title text-uppercase">Recent Post</h3>
										<div class="recent_post_item">
											<h3 class="item_title">
												<a href="#!">Ransformed in his bed into a horrible vermin</a>
											</h3>
											<span class="post_date text-uppercase">25 Mar 2021</span>
										</div>
										<div class="recent_post_item">
											<h3 class="item_title">
												<a href="#!">Northely was hardly able to cover ready</a>
											</h3>
											<span class="post_date text-uppercase">25 Apr 2021</span>
										</div>
										<div class="recent_post_item">
											<h3 class="item_title">
												<a href="#!">Moment his many legs pitifully thin</a>
											</h3>
											<span class="post_date text-uppercase">25 Apr 2021</span>
										</div>
									</div>

									<div class="sb_widget sb_banner black-bg">
										<h3 class="sb_widget_title text-uppercase mb-0">Want to get useful content?</h3>
										<p >Subscribe to our blog!</p>
										<form action="#">
											<div class="form_item">
												<input type="email" name="email" placeholder="Your Email*">
											</div>
											<buton type="submit" class="btn btn_border border_dark text-uppercase" href="about.html">   Subscribe   </buton>
										</form>
									</div>

									

									<div class="sb_widget sb_tags">
										<h3 class="sb_widget_title text-uppercase">Tags</h3>
										<ul class="tags_primary ul_li text-uppercase">
											<li><a href="#!">Portfolio</a></li>
											<li><a href="#!">branding</a></li>
											<li><a href="#!">art</a></li>
											<li><a href="#!">philoshipy</a></li>
											<li><a href="#!">analylic</a></li>
											<li><a href="#!">services</a></li>
										</ul>
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