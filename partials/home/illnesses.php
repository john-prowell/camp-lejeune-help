<!-- Illnesses Section -->
<section class="illnesses">
  <div class="container">
    <div class="row">      
      <div class="col-md-6 order-2 order-md-1">
        <h2><?php the_field('illnesses_h2'); ?></h2>
        <?php the_field('illnesses_text') ?>        
      </div>        
      <div class="col-md-6 order-1 order-md-2 mb-3 mb-md-3">
      <?php 
        $illnessesImage = get_field('illnesses_image');
        if( !empty( $illnessesImage ) ): ?>
          <img class="img-fluid" src="<?php echo esc_url($illnessesImage['url']); ?>" alt="<?php echo esc_attr($illnessesImage['alt']); ?>" />
      <?php endif; ?>
      </div>
    </div>
  </div>
</section>  