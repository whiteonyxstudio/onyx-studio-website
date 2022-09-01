      <?php /* Template Name: Start a project
      */ ?>

      <?php get_header(); ?>

			<!-- main body - start
			================================================== -->
			<main>

				<!-- breadcrumb_section - start
				================================================== -->
				<section class="section_space ">
					<div class="container">
						<div class="row">
							<div class="col-12  ">
								<h1 class="page_title">
									<span class="d-block">Start</span>
									<span class="d-block">a Project</span>
								</h1>
							</div>
							
						</div>
						
					</div>
				</section>
				<!-- breadcrumb_section - end
				================================================== -->

				<!-- contact_section - start
				================================================== -->
				<section class="contact_section section_space pt-0 pb-0" >
					<div class="container">
						<div class="row">
						<div class="contact_form_area section_space pt-0">
							<div class="main_contact_form">
								<?php
									$custom_shortcode= get_field('s27_shortcode');
									echo do_shortcode($custom_shortcode);
								?>
							</div>
						</div>
					</div>
				</section>
				<!-- contact_section - end
				================================================== -->

			</main>
			<!-- main body - end
			================================================== -->

			<?php get_footer('contact'); ?>