
			<?php $pageID = get_option('page_on_front');  ?>	
      <?php get_header(); ?>
			<?php $term = get_queried_object(); ?>
			
			<!-- main body - start
			================================================== -->
			<main>

				<!-- breadcrumb_section - start
				================================================== -->
				<section class="breadcrumb_section black-bg ">
					<div class="container">
						<div class="row">
							<div class="col-12 col-lg-9">
								<h1 class="page_title">
									<span class="d-block">Our <?php single_cat_title(); ?> Projects</span>
								</h1>
							</div>
							<p class="mb-0">
								<?php  the_field('s18_project_category_hero_description',$term); ?>
							</p>
						</div>
					</div>
				</section>
				<!-- breadcrumb_section - end
				================================================== -->

				<div class="category-navigation">
					<div class="container">
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
				</div>

				<!-- portfolio_section - start
				================================================== -->
				<div class="portfolio_section section_space pt-0">
					<div class="container">
						<div class="row">

						<?php 
						if ( have_posts() ) : 
						    while ( have_posts() ) : the_post(); 
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
							
 						endif; 
						?>	
						</div><!-- row -->

						<div class="loadmore_btn_wrap text-center">
							<a class="btn btn_light text-uppercase" href="index.html"><i class="fal fa-sync"></i> Load More</a>
						</div>
					</div>
				</div>
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
													<span class="text_effect_wrap3 text-break">Any enquiries? </span>
												</span>
											</span>
											<a href="contact.html">
												<span class="text_effect_wrap1">
													<span class="text_effect_wrap2">
														<span class="text_effect_wrap3 text-break">Get in touch now!</span>
													</span>
												</span>
											</a>
										</h3>
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
																	<a class="btn_text" href="web-development.html">
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
																		<a class="btn btn_white" href="contact.html">Start a project</a>
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

				<section class="extra_section">
					<div	div class="container">
						<h2 class="biggest_title text-center">A modern digital agency</h2>
						<!-- <div class="extra_seo">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="extra_seo_banner">
										<p class="extra_seo_text">Development and promotion of websites from White Onyx Studio studio</p>
										<h3 class="extra_seo_header">Bespoke web development of websites in London</h3>
										<a class="btn btn_white" href="contact.html">Discuss a Project</a>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="extra_seo_textarea">
										<p>High-quality web development of websites in Kyiv is a prerequisite for creating an effective tool, because the website is one of the most important elements of business success in the digital era. That is why it is important that development and promotion of websites should be carried out by professionals. The opportunities offered by website creation and development have a very positive effect on the growth of business projects of any complexity. This tool is capable of:</p><ul><li>provide beneficial introduction of company to potential client;</li><li>present all the advantages of products and services;</li><li>prepare the client for direct contact and purchase;</li><li>make a sale;</li><li>become the base of clients’ trust and loyalty;</li><li>provide an opportunity to qualitatively analyze the audience and its behavior in order to adjust strategies of the business and its further development.</li></ul><p>The main mission of In create team is to develop and create effective, progressive and user-friendly websites.</p><p>Kyiv is the city where our office is located, but we work throughout Ukraine. In order to contact us, just leave an online request or call us.</p><h2>Developing an efficient and vibrant website</h2><p>To develop an efficient and vibrant website in Kyiv, it is not enough to simply find good contractors. This is a process of close cooperation between a client company and a studio. For a company to be ready for this website creation process, it is important that it clearly knows the following:</p><ol><li>1. Website is created for end user, not for team or management.Starting website building, the team from the client’s part must know well their target audience, its behavior, needs, pains, opportunities and ways to implement these opportunities in order to stand out among the competitors. This will create a product that will compare favorably with the general market.</li><li>2. Work on the website is a ‘tandem jump’.Only understanding the potentials of the company’s product, its main features, you will be able to convey them to the user. In order for the web studio to uncover the main accents most profitably, communication needs to be given a sufficiently large amount of time; only active communication will help create an efficient website.</li><li>3. Trust and discuss is a must.The customer is responsible for the product and service for which the website is built. He is not obliged to know all the subtleties and possibilities of implementing such a tool as a website. The task of the web studio is to develop the website, it should offer the most optimal ways to implement the project. Building a website, discuss necessary functionality previously and trust the studio in choosing the path.</li></ol><h2>What types of websites can be ordered from In Create?</h2><p>We work in Kyiv to build websites of varying complexity:</p><ul><li>landing page;</li><li>promo websites;</li><li>corporate websites;</li><li>online catalogs;</li><li>online stores;</li><li>web services.</li></ul><p>Each of these website types requires a detailed study of the goals and objectives of our client, because we pay great attention to communication and analysis of his needs.</p><p>Since established, we have developed more than 300 projects, have taken our place in the TOP 30 Ukrainian web studios and TOP 10 developers on CMS WordPress and OpenCart.</p><h2>What is the process of building websites in the In Create studio?</h2><p>We are absolutely open, we build trust with the client, because we consider this to be the key to the success of the final product.</p><p>So that you understand how the joint work on the website will take place, we divide the process into stages:</p><ol><li>1. Request and first communication – the stage is necessary for an open dialogue to indicate general picture of problems and goals of the client. Our manager, in a convenient format for you, meets with key persons of the company who will participate in the website development.</li><li>2. Filling in the brief is an important stage at which the client fills in a detailed brief, which in a concise manner gives our team the opportunity to find out the pain points of the client’s company, the strategy of its movement.</li><li>3. Development of a prototype – the stage at which the skeleton of the future website is built, which determines which blocks will be basic and which will be minor. Information and tools are defined: calls to action, forms, places of contact and so on. This stage builds the logic of the relationship of all elements of the website, forms the flow map of the end user.</li><li>4. Development of statement of work – a document that contains a description of all blocks of the approved prototype and technical functions of the future website.</li><li>5. Design – the stage is divided and has two intervals:<ul><li>development and approval of the design of the home page, which becomes the base, the basic concept of all further stylistics;</li><li>design of internal pages based on the home page.</li></ul></li><li>6. Layout and programming – working with the technical side of the website and its functionality.</li><li>7. Testing – providing the client with a test link for initial review with already alive website and its final approval.</li><li>8. Transfer for hosting and delivery of the project – the final stage, which involves transfer of the website to the client for use, familiarization with administration and support processes.</li></ol><p>When ordering website building from In create web studio, the client is calm and protected, because from the first day a formal cooperation agreement is signed, in which all the stages, deadlines, costs, points of responsibility of the parties are fixed.</p><h2>What else makes collaboration with In Create web studio beneficial?</h2><p>Kyiv is a city with a lot of web studios, we understand that choosing a contractor has many factors influencing the decision to cooperate. In create website development studio works for the client’s result, fulfills its obligations with the highest quality.</p><p>In order to satisfy more complete needs of companies in digital environment, in addition to developing websites in Kyiv and Ukraine, we have included development of logos, mobile applications, improvement, promotion and support of websites in our list of our services.</p><p>Thus, choosing In create, the client gets a partner in Kyiv for implementation of the most important element of his digital strategy. Since each of the listed services affects the choice of the end user, we work on the complex so that each of them emphasizes and carried unique selling point of our client.</p><p>To make sure that In create team is made up of professionals, check out our portfolio and feedback of existing clients.</p>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</section>

			</main>
			<!-- main body - end
			================================================== -->

			<?php get_footer(); ?>