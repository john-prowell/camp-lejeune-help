<!-- Toxins Section -->
<section class="toxins">
  <div class="container">
    <div class="row">
    <div class="col-md-6">
    <?php 
        $toxinsImage = get_field('toxins_image');
        if( !empty( $toxinsImage ) ): ?>
          <img class="img-fluid" src="<?php echo esc_url($toxinsImage['url']); ?>" alt="<?php echo esc_attr($toxinsImage['alt']); ?>" />
      <?php endif; ?>
      </div>
      <div class="col-md-6">
        <h2><?php the_field('toxins_h2') ?></h2>
        <?php the_field('toxins_text'); ?>
      </div>      
    </div>
  </div>
</section>