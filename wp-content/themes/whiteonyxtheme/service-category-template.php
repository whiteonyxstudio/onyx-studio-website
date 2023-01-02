     <?php /* Template Name: Service Cateogory Page
	  */ ?>
     <?php get_header(); ?>
			<!-- main body - start
			================================================== -->
			<main>

				<!-- breadcrumb_section - start
				================================================== -->

				<section class="service-category-hero">
					<div class="container custom-flex">
						<div class="row " >
							<div class="col-xxl-10 ">
								<h1><?php the_field('s21_hero_title'); ?></h1>
								<p><?php the_field('s21_hero_description'); ?></p>
								<a class="btn btn_border border_dark text-uppercase" href="<?php the_field('s25_agency_start_project_link', 'option'); ?>">Start a project</a>
								<a class="btn_text btn_text_white" href="#target_section">
									<span><?php the_field('s21_second_link_text'); ?></span> 
									<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10 0V7.50063H9.16833V1.42131L0.587991 10L0 9.41015L8.57868 0.833125H2.49418V0H10Z" fill="white"></path>
									</svg>
								</a>
							</div>
						</div>
					</div>
				</section>
				<!-- breadcrumb_section - end
				================================================== -->


				

				<!-- services_section1- start
				================================================== -->
				<section class="services section_space pb-0" id="target_section">
					<div class="container">
						<div class="row">

							<div class="col-lg-3">
								<div class="section_title style_2">
									<h2 class="small_title ">
										01
										<span class="line"></span>
									</h2>
									
								</div>
							</div>
							<div class="col-12 col-sm-7 col-md-7 col-lg-9">
								<div class="section_title style_2">
									<h3 class="big_title text_effect_wrap">
										<span class="text_effect_wrap1">
											<span class="text_effect_wrap2">
												<span class="text_effect_wrap3 text-break"><?php the_field('s16_section_name'); ?></span>
											</span>
										</span>
									</h3>
								</div>
							</div>
							
							<div class="col-12 col-md-12 col-lg-9 offset-lg-3">
								<div class="accordion accordion-flush services-accordion large-accordion mt-0" id="accordionFlushExample">

									<?php if( have_rows('s16_development_accodrion') ): ?>
									    
									    <?php $counter=1; while( have_rows('s16_development_accodrion') ): the_row(); 
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
																	<p><?php the_sub_field('service_description'); ?></p>
																	<a class="btn_text" href="<?php the_sub_field('learn_more_link'); ?>">
																		<span>Learn more</span> 
																		<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M10 0V7.50063H9.16833V1.42131L0.587991 10L0 9.41015L8.57868 0.833125H2.49418V0H10Z" fill="white"></path>
																		</svg>
																	</a>
																</div>
																<div class="blog_col blog_col_1">
																	<?php the_sub_field('service_details_content'); ?>
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

				<!-- portfolio_section - start
				================================================== -->
				<section class="team_section section_space">
					<div class="container">
						<div class="row">

							<div class="col-12 col-lg-3">
								<div class="section_title style_2">
									<h2 class="small_title">
										portfolio
										<span class="line"></span>
									</h2>
								</div>
							</div>
							
							<div class="col-12 col-sm-6 col-lg-6">
								<div class="about_content mt-0">
									<div class="section_title style_2">
										<h3 class="big_title text_effect_wrap">
											<span class="text_effect_wrap1">
												<span class="text_effect_wrap2">
													<span class="text_effect_wrap3 text-break">Check our</span>
												</span>
											</span>
											<span class="text_effect_wrap1">
												<span class="text_effect_wrap2">
													<span class="text_effect_wrap3 text-break">latest projects</span>
												</span>
											</span>
										</h3>
									</div>
								</div>
							</div>

							<div class="col-12 col-sm-6  col-lg-3 d-flex  justify-content-start justify-content-lg-end align-items-end">
								<a class="btn_text more_btn" href="<?php the_field('s17_portfolio_page_link'); ?>"> 
									<span>See all projects</span> 
									<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10 0V7.50063H9.16833V1.42131L0.587991 10L0 9.41015L8.57868 0.833125H2.49418V0H10Z" fill="white"></path>
									</svg>
								</a>
							</div>

							<div class="offset-0 col-12 col-md-12 offset-lg-3 col-lg-9 ">
								<div class="team_carousel_wrap">
									<div class="team_carousel row" data-slick='{"dots": false, "arrows": false}'>

										<?php
											$featured_posts = get_field('s17_featured_projects_slider');
											if( $featured_posts ): ?>
											    <?php foreach( $featured_posts as $post ): 
											        // Setup this post for WP functions (variable must be named $post).
											        setup_postdata($post); ?>
											        <div class="slider_item col">
																<div class="team_grid_layout">
																	<div class="team_person_image">
																		<a href="<?php the_permalink(); ?>">
																			<?php 
																			$image = get_field('s06_project_square_image');
																			if( !empty( $image ) ): ?>
																			    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
																			<?php endif; ?>
																		</a>
																	</div>
																	<div class="team_content">
																		<h3 class="team_person_name"><?php the_field('s07-project_brand_name'); ?></h3>
																		<span class="team_person_title text-uppercase"><?php the_field('s07_project_deliverable'); ?></span>
																	</div>
																</div>
															</div>
											    <?php endforeach; ?>
											<?php 
											// Reset the global post object so that the rest of the page works correctly.
											wp_reset_postdata(); ?>
										<?php endif; ?>
																				
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</section>
				<!-- portfolio_section - end
				================================================== -->

				<!-- about_section - start
				================================================== -->
				<section class="about_section  section_space   mt-0 black-bg">
					<div class="container">
						<div class="row">

							<div class="col-lg-12">
								<div class="section_title style_2">
									<h2 class="small_title">
										<?php the_field('s04_small_header'); ?>
										<span class="line"></span>
									</h2>
								</div>
							</div>
							<div class="col-lg-7">
									
									<div class="section_title style_2">
										<h3 class="big_title text_effect_wrap">
											<span class="text_effect_wrap1">
												<span class="text_effect_wrap2">
													<span class="text_effect_wrap3 text-break"><?php the_field('s04_large_header_1_row'); ?></span>
												</span>
											</span>
											<span class="text_effect_wrap1">
												<span class="text_effect_wrap2">
													<span class="text_effect_wrap3 text-break"><?php the_field('s04_large_header_2_row'); ?></span>
												</span>
											</span>
										</h3>
									</div>
							</div>
							<div class="col-lg-5 ">
								<p class="p-0  mt-0">
									<?php the_field('s04_section_content'); ?>
								</p>
								
								<a class="btn_text btn_text_white" href="<?php the_field('s04_button_url'); ?>">
									<span><?php the_field('s04_button_text'); ?></span> 
									<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10 0V7.50063H9.16833V1.42131L0.587991 10L0 9.41015L8.57868 0.833125H2.49418V0H10Z" fill="white"></path>
									</svg>
								</a>
							</div>
							
						</div>
					</div>
				</section>
				<!-- about_section - end
				================================================== -->

				
				<!-- process_section - start
				================================================== -->

				<section class="process_section section_space">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="section_title style_2">
									<h2 class="small_title">
										<?php the_field('s03_small_header'); ?>
										<span class="line"></span>
									</h2>
									<h3 class="big_title text_effect_wrap">
										<span class="text_effect_wrap1">
											<span class="text_effect_wrap2">
												<span class="text_effect_wrap3 text-break"><?php the_field('s03_large_header'); ?></span>
											</span>
										</span>
										<span class="text_effect_wrap1">
											<span class="text_effect_wrap2">
												<span class="text_effect_wrap3 text-break"><?php the_field('s03_large_header_2'); ?></span>
											</span>
										</span>
									</h3>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="process">
								<div class="process_row process_head">
									<div class="process_stage">
										<span>STAGE</span>
										<div class="line"></div>
									</div>
									<div class="process_works">
										<span>WORKS</span>
										<div class="line"></div>
									</div>
									<div class="process_results">
										<span>RESULTS</span>
										<div class="line"></div>
									</div>
								</div>

								<?php if( have_rows('s03_process_table') ): ?>
								    <?php $counter=1; while( have_rows('s03_process_table') ): the_row(); 
								    ?>
								    	<div class="process_row">
												<div class="process_stage">
													<p><sup>0<?php echo $counter; ?></sup><?php the_sub_field('stage_name'); ?></p>
												</div>
												<div class="process_works">
													<p><?php the_sub_field('works text'); ?></p>
												</div>
												<div class="process_results">
													<p><?php the_sub_field('results_text'); ?></p>
												</div>
											</div>    
								    <?php $counter++; endwhile; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</section>

				<!-- process_section - end
				================================================== -->


				<!-- steps_section - start
				================================================== -->
				<section class="stages_section  section_space mt-0 ">
					<div class="decoration_item service_sec_bg"></div>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="section_title style_2">
									<h2 class="small_title">
										<?php the_field('s01_small_header'); ?>
										<span class="line"></span>
									</h2>
								</div>
							</div>
							<div class="col-lg-10">
								<div class="section_title style_2">
									<h3 class="big_title text_effect_wrap">
										<span class="text_effect_wrap1">
											<span class="text_effect_wrap2">
												<span class="text_effect_wrap3 text-break"><?php the_field('s01_largeheader'); ?></span>
											</span>
										</span>
										<span class="text_effect_wrap1">
											<span class="text_effect_wrap2">
												<span class="text_effect_wrap3 text-break"><?php the_field('s01_largeheader_2'); ?></span>
											</span>
										</span>
									</h3>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="development-steps">
									<?php if( have_rows('s01_steps_table') ): ?>

									    <?php $counter=1; while( have_rows('s01_steps_table') ): the_row(); 
									        ?>
									       	<div class="development-steps-item">
														<h4><sup> 0<?php echo $counter; ?> </sup><?php the_sub_field('step_name'); ?></h4>
														<p><?php the_sub_field('step_text'); ?></p>
													</div>
									    <?php $counter++; endwhile; ?>

									<?php endif; ?>
								</div>
							</div>
						</div>
						
					</div>
				</section>
				<!-- steps_section - end
				================================================== -->

				<!-- cta_section with button - start
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
													<span class="text_effect_wrap3 text-break">Don't wait!</span>
												</span>
											</span>
											<span class="text_effect_wrap1">
												<span class="text_effect_wrap2">
													<span class="text_effect_wrap3 text-break">Let's start today!</span>
												</span>
											</span>
											
										</h3>
										<a class="btn btn_border border_dark text-uppercase" href="<?php the_field('s25_agency_start_project_link', 'option'); ?>">Start a project now!</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- cta_section - end
				================================================== -->

				<!-- FAQ_section - start
				================================================== -->
				<section class="faq section_space faq_accordion">
					<div class="container">
						<div class="row">

							<div class="col-lg-3">
								<div class="section_title style_2">
									<h2 class="small_title">
										FAQ
										<span class="line"></span>
									</h2>
								</div>
							</div>

							<div class="col-12 col-md-12 col-lg-9">
								<div class="section_title style_2">
									<h3 class="big_title text_effect_wrap">
										<span class="text_effect_wrap1">
											<span class="text_effect_wrap2">
												<span class="text_effect_wrap3 text-break">Frequently asked</span>
											</span>
										</span>
										<span class="text_effect_wrap1">
											<span class="text_effect_wrap2">
												<span class="text_effect_wrap3 text-break">questions</span>
											</span>
										</span>
									</h3>
									
								</div>
								<div class="accordion accordion-flush services-accordion" id="accordionFlushExample">
								  
										<?php if( have_rows('s00_faq_accordion') ): ?>
									    
									    <?php $counter=1; while( have_rows('s00_faq_accordion') ): the_row(); 
										    ?>

													<div class="accordion-item"> 
								  				  <h2 class="accordion-header" id="flush-heading<?php echo $counter; ?>">
								  				    <button class="accordion-button  collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $counter; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $counter; ?>">
								  				      <div class="blog_simple_layout">
																	<h3 class="item_title text_effect_wrap">
																			<span class="text_effect_wrap1">
																				<span class="text_effect_wrap2">
																					<span class="text_effect_wrap3"><?php the_sub_field('faq_question'); ?></span>
																				</span>
																			</span>
																		</h3>

																</div>
								  				    </button>
								  				  </h2>
								  				  <div id="flush-collapse<?php echo $counter; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $counter; ?>" data-bs-parent="#accordionFlushExample">
								  				    <div class="accordion-body">
																<div class="blog_simple_layout">
																	<p>
																		<?php the_sub_field('faq_answer'); ?>
																	</p>
																</div>
															</div>
								  				  </div>
								  				</div> <!-- accordion-item -->

										    <?php $counter++; endwhile; ?>
											
										<?php endif; ?>

								</div>
          		</div>
						</div>
					</div>
				</section>
				<!-- FAQ_section - end
				================================================== -->

				<section class="extra_section">
					<div	div class="container">
						<h2 class="biggest_title text-center">A modern digital agency</h2>
					</div>
				</section>
				

			</main>
			<!-- main body - end
			================================================== -->

			<?php get_footer(); ?>