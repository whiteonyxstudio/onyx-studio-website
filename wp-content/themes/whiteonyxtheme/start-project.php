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
				<section class="contact_section">
					<div class="container">
						
						<div class="contact_form_area section_space pt-0">
							<form action="" class="main_contact_form">
								<div class="row">
									<div class="col-lg-6 ">
										<p class="p-24 contact-heading">1. Provide Contact Info</p>
									</div>
 
									<div class="col-lg-6 bread">
										<div class="form_item"><input type="text"  placeholder="Name"></div>
										<div class="form_item"><input type="text"  placeholder="Company"></div>
										<div class="form_item"><input type="text"  placeholder="Phone Number"></div>
										<div class="form_item"><input type="text"  placeholder="Email*"></div>
										<p>*Enter relevant personal information</p>
									</div>

								</div>
								<div class="row section_space">
									<div class="col-lg-6 ">
										<p class="p-24 contact-heading">2. Choose service</p>
									</div>
 
									<div class="col-lg-6 d-flex flex-wrap">
										<div class="checkbox_wrap">
											<input type="checkbox" name="" id="" placeholder="Corporate Website">
											<label for="">Website Creation</label>
										</div>
										<div class="checkbox_wrap">
											<input type="checkbox" name="" id="" placeholder="">
											<label for="">Website design</label>
										</div>
										<div class="checkbox_wrap">
											<input type="checkbox" name="" id="" placeholder="">
											<label for="">Branding</label>
										</div>
										<div class="checkbox_wrap">
											<input type="checkbox" name="" id="" placeholder="">
											<label for="">Search Engine Optimization</label>
										</div>
										<div class="checkbox_wrap">
											<input type="checkbox" name="" id="" placeholder="">
											<label for="">Custom Solution</label>
										</div>
										<p>*Choose one or more opions</p>
									</div>

								</div>
								<div class="row">
									<div class="col-lg-6 ">
										<p class="p-24 contact-heading">3. Describe your project</p>
									</div>
 
									<div class="col-lg-6">
										
										<div class="form_item">
											<textarea id="" class="form_textarea" name="message" placeholder="Message*"></textarea>
										</div>
										
										<p>*Write about the purpose of your project</p>

										<button type="submit" class="btn btn_white text-uppercase">Start a Porject </button>
									</div>
								</div>
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