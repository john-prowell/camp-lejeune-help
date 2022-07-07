<!-- Hero Section -->
<section id="hero" class="hero">
  <div class="container">
    <div class="row">
      <div class="col-md-8 hero__content">
        <h1 class="hero__heading"><?php the_field('hero_h1'); ?></h1>
        <h2 class="hero__heading--sub">
        <?php the_field('hero_h2')?>
        </h2>
      </div>
      <div class="col-md-4 hero__form">
        <p class="text-center">FILE YOUR CLAIM NOW</p>
        <p class="text-center"><a href="tel:+18882706395">(888) 270-6395</a></p>        
        <?php $formShortcode = get_field('form_shortcode');
               echo do_shortcode($formShortcode); ?>        
      </div>
    </div>
  </div>
</section>