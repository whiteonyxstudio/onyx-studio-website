<?php /* Template Name: Contact Us Page
*/ ?>

<?php get_header(); ?>

	<main>

			<section class="sec contact">
        <div class="row">
          <div class="col">
            <h1 class="page-header white">WRITE TO US</h1>
          </div>
          <div class="col">
            <a href="" class="mail-link">whiteonyx.studio.lviv@gmail.com</a>
            <div class="wrapper">
              <ul>
                <li><a href="">BEHANCE</a></li>
                <li><a href="">FACEBOOK</a></li>
                <li><a href="">Instagram</a></li>
              </ul>
              <ul>
                <li><a href="">TELEGRAM</a></li>
                <li><a href="">LINKEDIN</a></li>
              </ul>
            </div>
          </div>
        </div>

        <?php echo do_shortcode('[contact-form-7 id="537" title="Contact US"]'); ?>
      </section>

		</main>

<?php get_footer('contact'); ?>