      <?php /* Template Name: Agency Page Template
      */ ?>

      <?php get_header(); ?>

			<main>

      <section class="sec secondary-hero">
        <h1 class="page-header small whites"><?php the_field('s09_page_title'); ?></h1>
        <div class="descriptors">
          <div class="descriptors-item">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/webflow-services.svg" alt="">
            <p><?php the_field('s09_icon_description_1'); ?></p>
          </div>
          <div class="descriptors-item">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/agency-team-services.svg" alt="">
            <p><?php the_field('s09_icon_description_2'); ?></p>
          </div>
        </div>
        <?php 
        $link = get_field('s09_button');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="button full white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
        <div class="top-benefits agency">

          <?php if( have_rows('s09_key_advantages') ): ?>

              <?php while( have_rows('s09_key_advantages') ): the_row(); 
                ?>
                  <div class="top-benefits-item">
                    <h3><?php the_sub_field('advantage_header'); ?></h3>
                    <div class="top-benefits-item-card">
                      <img src="<?php the_sub_field('advantage_icon'); ?>" alt="">
                      <p><?php the_sub_field('advantage_description'); ?></p>
                    </div>
                  </div>
              <?php endwhile; ?>

          <?php endif; ?>
        </div>
      </section>

      <section class="sec about-text">
        <h2 class="section-header">
          <?php the_field('s10_about_1_section_header'); ?>
        </h2>
        <?php 
    
            if(get_field('s10_paragraph_1')){
              ?>
              <p class="par-1"><?php the_field('s10_paragraph_1'); ?></p>
              <?php
            }

            if(get_field('s10_paragraph_2')){
              ?>
              <p class="par-2"><?php the_field('s10_paragraph_2'); ?></p>
              <?php
            }
        ?>
        <?php 
          $link = get_field('s10_section_button');
          if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>

      </section>

      <section class="sec testemonials">
        <h2 class="section-header white">
          DON’T JUST TAKE OUR WORD FOR IT.
        <b>SEE WHAT OUR HAPPY CLIENTS HAVE TO SAY:</b>
        </h2>
        <div class="testemonials-slider">

        <?php if( have_rows('s11_testemonials_slider') ): ?>
          <?php while( have_rows('s11_testemonials_slider') ): the_row(); 
          ?>
            <div class="testemonials-slider-item">
              <div class="client">
                <?php 
                    $image = get_sub_field('client_image');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <h3><?php the_sub_field('client_name'); ?></h3>
                <p><?php the_sub_field('client_position'); ?></p>
              </div>
              <div class="quote">
                <p>“<?php the_sub_field('quote'); ?>”</p>
              </div>
              <div class="logo">
                <?php 
                    $image = get_sub_field('logo');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
              </div>
              <div class="button-wrapper">
                <a href="/contact-us" class="button white">Become Our Client!</a>
              </div>
            </div>    
          <?php endwhile; ?>
          </ul>
        <?php endif; ?>
          
        </div>
      </section>

      <section class="sec portfolio-home no-sec">
				
				<div class="portfolio-home-wrapper">
					<h2 class="section-header">CHECK OUR <br> LATEST PROJECTS</h2>
					
				</div>
				<p>We help clients around the world create more engaging experiences through design.</p>
			</section>

			<section class="portfolio-secondary">
				<div class="portfolio-secondary-wrapper">

        <?php 
        
            // параметры по умолчанию
            $my_posts = get_posts( array(
            	'numberposts' => 2,
            	'category'    => 0,
            	'orderby'     => 'date',
            	'order'       => 'DESC',
            	'include'     => array(),
            	'exclude'     => array(),
            	'meta_key'    => '',
            	'meta_value'  =>'',
            	'post_type'   => 'portfolio',
            	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );
            
            global $post;
            
            foreach( $my_posts as $post ){
            	setup_postdata( $post );
              $thumbnail_id = get_post_thumbnail_id( $post->ID );
                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);   
								$url = get_the_post_thumbnail_url($featured_post );
            	?>
                <div class="portfolio-secondary-item">
									<a href="<?php the_permalink(); ?>">
										<img  src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" loading="lazy">
									</a>
									<a href="<?php the_permalink(); ?>">
										<h3><?php the_title(); ?></h3>
									</a>
									<p><?php echo get_the_excerpt(); ?></p>
								</div>
              <?php
            }

            wp_reset_postdata(); // сброс
        
        ?>
				</div>
			</section>

      <section class="sec cta  services-cta">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/webflow-logo.png" alt="" class="cta-shpere">
					<div class="content">
						<h2 class="section-header white">
              <?php the_field('s12_cta_header'); ?>
						</h2>	
						<p class="white"><?php the_field('s12_cta_text'); ?></p>
						<a href="" class="button white">Start a Project</a>
					</div>
			</section>

      <section class="sec why-service">
        <h2 class="section-header">
          <?php the_field('s15_section_header'); ?>
        </h2>
        <p><?php the_field('s15_section_description'); ?></p>
        <div class="why-service-grid">
          <?php if( have_rows('s15_section_grid') ): ?>
              <?php while( have_rows('s15_section_grid') ): the_row(); 
                  ?>
                  <div class="why-service-grid-item">
                    <?php 
                    $image = get_sub_field('icon');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <h3><?php the_sub_field('header'); ?></h3>
                    <p><?php the_sub_field('description'); ?></p>
                    <a class="grey-link" href="<?php the_sub_field('link'); ?>">Learn More</a>
                  </div>
              <?php endwhile; ?>
          <?php endif; ?>
        </div> 

        <?php 
        $link = get_field('s15_full_width_section_button');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="button full" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
      </section>

    <section class="sec industries">
        <h2 class="section-header">
          <?php the_field('s13_section_header'); ?>
        </h2>
        <?php 
    
            if(get_field('s13_paragraph_1')){
              ?>
              <p class="par-1"><?php the_field('s13_paragraph_1'); ?></p>
              <?php
            }

            if(get_field('s13_paragraph_2')){
              ?>
              <p class="par-2"><?php the_field('s13_paragraph_2'); ?></p>
              <?php
            }
        ?>
        
        <div class="industries-wrapper">

        <?php if( have_rows('s13_advantages_grid') ): ?>
          <?php while( have_rows('s13_advantages_grid') ): the_row(); 
              ?>
              <div class="industries-wrapper-item">
                <?php the_sub_field('number'); ?>
                <?php 
                $image = get_sub_field('image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <div class="content">
                  <h3><?php the_sub_field('header'); ?></h3>
                    <p><?php the_sub_field('text'); ?></p>
                </div>
              </div>
          <?php endwhile; ?>
        <?php endif; ?>
          
        </div>
      </section>
      <section class="sec steps">
        <h2 class="section-header"><?php the_field('s14_steps_header'); ?></h2>
        <p><?php the_field('s14_steps_description'); ?></p>
        
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">


          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Research & Planning</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Design & Development</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Delivery & Support</button>
          </li>

        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <div class="steps-table">
              <div class="steps-table-row head">
                <div class="stage"><h3>STAGE</h3></div>
                <div class="works"><h3>WORKS</h3></div>
                <div class="results"><h3>RESULTS</h3></div>
              </div>
              <div class="steps-table-row">
                <div class="stage">
                  <span>01</span>
                  <h4>Briefing</h4>
                </div>
                <div class="works"><p>Marketing research, market analysis, and business planning to determine the front of the project</p></div>
                <div class="results"><p>Defining tasks and deadlines for their implementation</p></div>
              </div>
              <div class="steps-table-row">
                <div class="stage">
                  <span>02</span>
                  <h4>Reaseach and Marketing Strategy</h4>
                </div>
                <div class="works"><p>Preparation of preliminary design models for further development of the corporate portal project</p></div>
                <div class="results"><p>Ready-made product concept that can be taken into development</p></div>
              </div>

              <div class="steps-table-row">
                <div class="stage">
                  <span>03</span>
                  <h4>Design</h4>
                </div>
                <div class="works"><p>Creation of visual and interface solutions for the project of the corporate site, as well as their coordination with the client</p></div>
                <div class="results"><p>Ready UI/UX for the project</p></div>
              </div>
            </div> <!-- steps-table -->
          </div>

          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <div class="steps-table">
              <div class="steps-table-row head">
                <div class="stage"><h3>STAGE</h3></div>
                <div class="works"><h3>WORKS</h3></div>
                <div class="results"><h3>RESULTS</h3></div>
              </div>
              <div class="steps-table-row">
                <div class="stage">
                  <span>01</span>
                  <h4>Briefing</h4>
                </div>
                <div class="works"><p>Marketing research, market analysis, and business planning to determine the front of the project</p></div>
                <div class="results"><p>Defining tasks and deadlines for their implementation</p></div>
              </div>
              <div class="steps-table-row">
                <div class="stage">
                  <span>02</span>
                  <h4>Reaseach and Marketing Strategy</h4>
                </div>
                <div class="works"><p>Preparation of preliminary design models for further development of the corporate portal project</p></div>
                <div class="results"><p>Ready-made product concept that can be taken into development</p></div>
              </div>

              <div class="steps-table-row">
                <div class="stage">
                  <span>03</span>
                  <h4>Design</h4>
                </div>
                <div class="works"><p>Creation of visual and interface solutions for the project of the corporate site, as well as their coordination with the client</p></div>
                <div class="results"><p>Ready UI/UX for the project</p></div>
              </div>
            </div> <!-- steps-table -->
          </div>

          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="steps-table">
              <div class="steps-table-row head">
                <div class="stage"><h3>STAGE</h3></div>
                <div class="works"><h3>WORKS</h3></div>
                <div class="results"><h3>RESULTS</h3></div>
              </div>
              <div class="steps-table-row">
                <div class="stage">
                  <span>01</span>
                  <h4>Briefing</h4>
                </div>
                <div class="works"><p>Marketing research, market analysis, and business planning to determine the front of the project</p></div>
                <div class="results"><p>Defining tasks and deadlines for their implementation</p></div>
              </div>
              <div class="steps-table-row">
                <div class="stage">
                  <span>02</span>
                  <h4>Reaseach and Marketing Strategy</h4>
                </div>
                <div class="works"><p>Preparation of preliminary design models for further development of the corporate portal project</p></div>
                <div class="results"><p>Ready-made product concept that can be taken into development</p></div>
              </div>

              <div class="steps-table-row">
                <div class="stage">
                  <span>03</span>
                  <h4>Design</h4>
                </div>
                <div class="works"><p>Creation of visual and interface solutions for the project of the corporate site, as well as their coordination with the client</p></div>
                <div class="results"><p>Ready UI/UX for the project</p></div>
              </div>
            </div> <!-- steps-table -->
          </div>

        </div>
      </section>
      <section class="sec services-faq">
        <h2 class="white section-header small">
          Frequently asked <br> questions
        </h2>
        <div class="services-faq-text-editor">
          <?php the_content(); ?>
        
        </div>
        <div class="services-faq-cta">
          <h3>any questions left? 
          <br> get a free consultation now!</h3>
          <p>
            Don't wait any longer to take your next steps - schedule your free consultation today and receive personalized advice and a quote tailored to your specific project in under 24 hours!
          </p>
          <a href="" class="button white full">Get  It Now!</a>
        </div>
      </section>

		</main>

			<?php get_footer(); ?>