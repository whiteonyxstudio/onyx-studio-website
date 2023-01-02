 			<?php /* Template Name: Portfolio Page
      */ ?>

			<?php $pageID = get_option('page_on_front');  ?>
      <?php get_header(); ?>
		
			<main>

				<section class=" section_space pb-0">
					<div class="container">
						<h1 class="page_title">
							<span class="d-block">Portfolio</span>
						</h1>
						<div class="row">
							<div class="filter_nav_wrap">
								<h3 class="filter_nav_title text-uppercase">Filter by:</h3>
								<?php 
 									$cat_args = array(
											'taxonomy'  => 'project-category',
									    'orderby' => 'count',
									    'order'   => 'DESC'
									);
									$categories = get_categories( $cat_args );
									if ( count($categories) ) {
											$portfolio_link = get_post_type_archive_link('portfolio');
											$total_posts = $count_posts = wp_count_posts( 'portfolio' )->publish;
									    echo '<ul class="filter-btns-group button-group ul_li">';
											echo '<li><a href="'.$portfolio_link.'" class="black-link button active">All<sup>'.$total_posts.'</sup></a></li>';
									    foreach ( $categories as $category ) {
									      echo '<li><a class="black-link button" href="'.get_category_link( $category->term_id ).'">'.$category->name.'<sup>0'.$category->count.'</sup></a></li>';
									    }
										
									    echo '</ul>';
									}
								?>
							</div>
						</div>
					</div>
				</section>

				<!-- portfolio_section - start
				================================================== -->
				<section class="portfolio_section section_space pt-0">
					<div class="container">
						<div class="row">

 							<?php 
								$args = array(  
    						    'post_type' => 'portfolio',
    						    'posts_per_page' => 10, 
    						    'orderby' => 'date', 
    						    'order' => 'ASC',
    						);
								$loop = new WP_Query( $args );

								while ( $loop->have_posts() ) : $loop->the_post(); 
									?>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<a class="portfolio_fullimage_layout" href="<?php the_permalink(); ?>"> 
												<?php the_post_thumbnail('full'); ?>
												<span class="item_content">
													<strong class="item_title"><?php the_title(); ?></strong>
													<?php
														 $terms = get_the_terms( get_the_ID(), 'project-category' );
													   
															echo '<small class="item_categories text-uppercase" >';
													   	foreach($terms as $term) {
															
															 $string = $term->name;
															 echo $string . ", "; 
													   	}
														 echo '</small>';
													?>
												</span>
											</a>
										</div>
									<?php
    						endwhile;
							?>
						</div>
					</div>
				</section>
				<!-- portfolio_section - end
				================================================== -->

				<!-- cta_section - start
				================================================== -->
				<section class="cta_section section_space">
					<div class="container">
						<div class="row">

							<div class="col-lg-3">
								<div class="section_title style_2">
									<h2 class="small_title">
										contact us
										<span class="line"></span>
									</h2>
								</div>
							</div>
              
              <div class="col-lg-7">
								<div class="about_content mt-0">
									<div class="section_title style_2">
										<h3 class="big_title text_effect_wrap mb-0">
											<span class="text_effect_wrap1">
												<span class="text_effect_wrap2">
													<span class="text_effect_wrap3 text-break">Boost your business with us! </span>
												</span>
											</span>
											
										</h3>
										<a class="btn btn_border border_dark text-uppercase " href="<?php the_field('s25_agency_start_project_link', 'option'); ?>">Get in touch now!</a>
									</div>
								</div>
							</div>

						</div>
					</div>
				</section>
				<!-- cta_section - end
				================================================== -->


				<!-- services_section - start
				================================================== -->
				<section class="services section_space ">
					<div class="container">
						<div class="row">

							<div class="col-lg-12">
								<div class="section_title style_2">
									<h2 class="small_title">
										what we do
										<span class="line"></span>
									</h2>
								</div>
							</div>
							<div class="col-12 col-sm-6  col-lg-6">
								<div class="section_title style_2">
									<h3 class="big_title text_effect_wrap">
										<span class="text_effect_wrap1">
											<span class="text_effect_wrap2">
												<span class="text_effect_wrap3 text-break">Our Services</span>
											</span>
										</span>
									</h3>
								</div>
							</div>
							
							<div class="col-12 col-sm-6 col-lg-6  d-flex justify-content-start justify-content-md-end align-items-end" >
								<a class="btn_text more_btn" href="<?php echo get_post_type_archive_link('services'); ?>" style="margin-bottom:30px;"> 
									<span>All services</span> 
									<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10 0V7.50063H9.16833V1.42131L0.587991 10L0 9.41015L8.57868 0.833125H2.49418V0H10Z" fill="white"></path>
									</svg>
								</a>
							</div>

							<div class="col-12 col-md-12 col-lg-12 ">
								<div class="accordion accordion-flush services-accordion large-accordion mt-0" id="accordionFlushExample">
									<?php if( have_rows('s15_services_accordion',$pageID) ): ?>
									    <?php $counter=1; while( have_rows('s15_services_accordion',$pageID) ): the_row(); 
									    ?>
									      <div class="accordion-item">
								  			  <h2 class="accordion-header" id="flush-heading<?php echo $counter; ?>">
								  			    <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $counter; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $counter; ?>">
								  			      <div class="blog_simple_layout">
																<div class="mb-0">
																	<h3 class="item_title text_effect_wrap ">
																		<span class="text_effect_wrap1">
																			<span class="text_effect_wrap2">
																				<span class="text_effect_wrap3"><?php the_sub_field('service_name'); ?></span>
																			</span>
																		</span>
																	</h3>
																</div>
															</div>
								  			    </button>
								  			  </h2>
								  			  <div id="flush-collapse<?php echo $counter; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $counter; ?>" data-bs-parent="#accordionFlushExample">
								  			    <div class="accordion-body">
															<div class="blog_simple_layout">
																<div class="blog_col">
																	<p>
																		<?php the_sub_field('service_description'); ?>
																	</p>
																	<a class="btn_text" href="<?php the_sub_field('service_link'); ?>">
																		<span>Learn more</span> 
																		<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M10 0V7.50063H9.16833V1.42131L0.587991 10L0 9.41015L8.57868 0.833125H2.49418V0H10Z" fill=""></path>
																		</svg>
																	</a>
																</div>
																<div class="blog_col blog_col_1">
																	
																	<ul class="service-list">
																		<?php if( have_rows('services_sub_navigation') ): ?>
																		    <?php $inner_counter=1; while( have_rows('services_sub_navigation') ): the_row(); 
																		    ?>
																		      <li class="service-list-item">
																						<a href="<?php the_sub_field('item_link'); ?>">
																							<span>0<?php echo $inner_counter; ?></span>
																							<span class="service-item-name"><?php the_sub_field('item_name'); ?></span>
																							<svg width="44" height="17" viewBox="0 0 44 17" fill="none" xmlns="http://www.w3.org/2000/svg">
																							  <path d="M39.7777 4.77763C39.973 4.58236 39.973 4.26578 39.7777 4.07052L36.5957 0.888538C36.4005 0.693276 36.0839 0.693276 35.8886 0.888538C35.6934 1.0838 35.6934 1.40038 35.8886 1.59565L38.7171 4.42407L35.8886 7.2525C35.6934 7.44776 35.6934 7.76434 35.8886 7.95961C36.0839 8.15487 36.4005 8.15487 36.5957 7.95961L39.7777 4.77763ZM4.57617 4.92407L39.4242 4.92407V3.92407L4.57617 3.92407V4.92407Z" fill="black"/>
																							</svg>
																						</a>
																					</li>
																		    <?php $inner_counter++; endwhile; ?>
																		<?php endif; ?>
																	</ul>
																	<div data-animation="fadeInUp2" data-delay=".6s">
																		<a class="btn btn_white" href="<?php the_field('s25_agency_start_project_link', 'option'); ?>">Start a project</a>
																	</div>
																</div>
															</div>
														</div>
								  			  </div>
								  			</div>
									    <?php $counter++; endwhile; ?>
									<?php endif; ?>
								  
								</div>
          		</div>
						</div>
					</div>
				</section>
				<!-- services_section - end
				================================================== -->

				<!-- <section class="extra_section">
					<div	div class="container">
						<h2 class="biggest_title text-center">A modern digital agency</h2>
						
					</div>
				</section> -->

			</main>
			<!-- main body - end
			================================================== -->

			<?php get_footer(); ?>