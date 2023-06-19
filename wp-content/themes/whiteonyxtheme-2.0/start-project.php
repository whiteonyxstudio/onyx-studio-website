<?php /* Template Name: Start Project Page
*/ ?>

<?php get_header(); ?>

	<main>

			<section class="sec contact">
        <div class="row">
          <div class="col">
            <h1 class="page-header white">WRITE TO US</h1>
          </div>
          <div class="col">
            <p class="white">Please, provide some basic information about yourself and tell us about your project</p></p>
          </div>
        </div>

        <?php echo do_shortcode('[contact-form-7 id="537" title="Contact US"]'); ?>
      </section>

		</main>

<?php get_footer('contact'); ?>