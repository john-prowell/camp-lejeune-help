<!-- Eligibility Section -->
<section class="eligibility">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      <?php 
        $eligibilityImage = get_field('eligibility_image');
        if( !empty( $eligibilityImage ) ): ?>
          <img class="img-fluid" src="<?php echo esc_url($eligibilityImage['url']); ?>" alt="<?php echo esc_attr($eligibilityImage['alt']); ?>" />
      <?php endif; ?>
      </div>
      <div class="col-md-6">
        <h2><?php the_field('eligibility_h2') ?></h2>
        <?php the_field('eligibility_text') ?>
      </div>
    </div>
  </div>
</section>