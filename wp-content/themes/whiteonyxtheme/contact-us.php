      <?php /* Template Name: Contact Us Page
      */ ?>

      <?php get_header(); ?>

			<!-- main body - start
			================================================== -->
			<main>

				<!-- breadcrumb_section - start
				================================================== -->
				<section class="breadcrumb_section">
					<div class="container">
						<div class="row">
							<div class="col-12 col-lg-5 ">
								<h1 class="page_title">
									<span class="d-block">Contact </span>
									<span class="d-block">us</span>
								</h1>
							</div>
							<div class="col-lg-7">
								<div class="row">

									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="main_contact_info">
											<h3 class="area_title">London</h3>
											<p>
												About helplessly as he looked what's happened to me he thought
											</p>
											<ul class="ul_li_block">
												<li><span>Time:</span> 9:30 AM 5:30PM</li>
												<li><span>Phone:</span> +55 (997) 2354-8798</li>
												<li><span>Email:</span> demo@ecample.com</li>
											</ul>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="main_contact_info">
											<h3 class="area_title">Lviv</h3>
											<p>
												About helplessly as he looked what's happened to me he thought
											</p>
											<ul class="ul_li_block">
												<li><span>Time:</span> 9:30 AM 5:30PM</li>
												<li><span>Phone:</span> +55 (997) 2354-8798</li>
												<li><span>Email:</span> demo@ecample.com</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</section>
				<!-- breadcrumb_section - end
				================================================== -->

				

				<!-- contact_section - start
				================================================== -->
				<section class="contact_section section_space pt-0" >
					<div class="container">
						<div class="row">
							<div class="col-12  ">
								<h1 class="page_title">
									<span class="d-block">Start</span>
									<span class="d-block">a Project</span>
								</h1>
							</div>
						<div class="contact_form_area section_space pt-0">
							<form action="" class="main_contact_form">
								
								<?php
									$custom_shortcode= get_field('s27_shortcode');
									echo do_shortcode($custom_shortcode);
									 ?>
							</form>
						</div>
					</div>
				</section>
				<!-- contact_section - end
				================================================== -->

			</main>
			<!-- main body - end
			================================================== -->

			<?php get_footer('contact'); ?>