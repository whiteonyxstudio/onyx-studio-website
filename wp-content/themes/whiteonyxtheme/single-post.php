<?php get_header(); ?>
			<!-- main body - start
			================================================== -->
			<main>
				<!-- breadcrumb_section - start
				================================================== -->
				<section class="breadcrumb_section section_space  pb-0 <?php the_field('s12_post_head_color'); ?>">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-10">
								<div class="category-navigation pt-0">
									<div class="container mx-0 px-0">
										<div class="row">
											<div class="filter_nav_wrap">
												<!-- <h3 class="filter_nav_title text-uppercase">Breadcrumbs:</h3> -->
												<ul class="filter-btns-group button-group ul_li">
													<li><a href="<?php echo get_home_url(); ?>" class="breadcrumb_link button active" data-filter="*">Home</a></li>
													<?php 
														$category = get_the_category();
														$link = get_category_link( $category[0]->term_id );
														$category_id =  $category[0]->term_id;
														$category_name =  $category[0]->name ;
													
														$cat_args=array(
														'cat' => $category_id,
														'post_type'=>'post'
														);
														$catTypes = new WP_Query($cat_args);
														$numberOfCat_Posts=$catTypes->found_posts;

														$post_args=array(
														'post_type'=>'post'
														);
														$postTypes = new WP_Query($post_args);
														$numberOfBlog_Posts=$postTypes->found_posts;
														
													?>
													<li><a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="breadcrumb_link button" data-filter=".creative">Blog<sup><?php echo $numberOfBlog_Posts; ?></sup></a></li>
													<li><a href="<?php echo $link; ?>" class="breadcrumb_link button" data-filter=".branding"><?php echo $category_name; ?><sup><?php echo $numberOfCat_Posts; ?></sup></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<h1 class="page_title">
									<span class="d-block"><?php the_title(); ?></span>
								</h1>
								<div class="tagandshare_links">
									<ul class="post_meta ul_li text-uppercase">
										<li>By - <?php $author_id=$post->post_author; the_author_meta( 'display_name' , $author_id ); ?></li>
										<li><?php  echo get_the_date( );  ?></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- breadcrumb_section - end
				================================================== -->

				<!-- blog_section - start
				================================================== -->
				<section class="blog_section section_space">
					<div class="container">
						<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
							<div class="col-12 col-sm-12 col-md-12 col-lg-8 ">
								<div class="details_image">
									<?php the_post_thumbnail('full'); ?>
								</div>
								<div class="details_content text_editor">

									<?php the_content(); ?>

								</div>
							</div>

							<div class="col-12 col-sm-12 col-md-12 col-lg-4 ">
								<aside class="sidebar_section">			

									<div class="sb_widget sb_category">
										<h3 class="sb_widget_title text-uppercase">Table Of Content</h3>
										<ol type="1" class="table_of_content">
											<li><a href="#header-1">What is the difference between a web application and a website?</a></li>
											<li><a href="#header-2">E-commerce applications</a></li>
											<li><a href="#header-3">Portal web applications</a></li>
											<li><a href="#header-4">Front-end frameworks</a></li>
											<li><a href="">CMS web applications</a></li>
											<li><a href="">Skills needed for web app development</a></li>
										</ol>
									</div>

									<div class="sb_widget sb_share">
										<h3 class="sb_widget_title text-uppercase">Share Post</h3>
										<ul class="social_primary ul_li">
											<li><a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
											<li><a rel="nofollow" href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" ><i class="fab fa-twitter"></i></a></li>
											<li><a rel="nofollow" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
											<li><a rel="nofollow" href="https://telegram.me/share/url?url=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-telegram"></i></a></li>
										</ul>
									</div>

									<div class="sb_widget sb_recent_post">
										<h3 class="sb_widget_title text-uppercase">Related Posts</h3>

										<?php
										$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 2,'post_type' => 'post', 'post__not_in' => array($post->ID) ) );
										if( $related ) foreach( $related as $post ) {
										setup_postdata($post); ?>
										 <div class="recent_post_item">
											<h3 class="item_title">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h3>
											<span class="post_date text-uppercase"><?php  echo get_the_date( );  ?></span>
										</div>
										
										<?php }
										wp_reset_postdata(); ?>
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

								</aside>
							</div>
						</div>
					</div>
				</section>
				<!-- blog_section - end
				================================================== -->
				<section class="related_posts_setion section_space pt-0 pb-0">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h2 class="page_title style_2">
									<span class="d-block">Read Also</span>
								</h2>
							</div>
							<div class="col-12 also_post_grid">

								<?php example_cats_related_post(); ?>
								
							</div>
						</div>
					</div>
				</section>
			</main>
			<!-- main body - end
			================================================== -->

			<section class="extra">
				<div class="container">
					<h2 class="biggest_title text-center">A modern creative agency</h2>
				</div>
			</section>

			<?php get_footer(); ?>