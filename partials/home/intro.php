<!-- Intro Section -->
<section class="intro">
  <div class="container">
    <div class="row">
      <div class="col-md-6 order-2 order-md-1">
        <h2><?php the_field('intro_h2')?></h2>
        <?php the_field('intro_text'); ?>        
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-3 mb-md-0">
      <?php 
        $introImage = get_field('intro_image');
        if( !empty( $introImage ) ): ?>
          <img class="img-fluid" src="<?php echo esc_url($introImage['url']); ?>" alt="<?php echo esc_attr($introImage['alt']); ?>" />
      <?php endif; ?>
      </div>
    </div>
  </div>
  </section>  