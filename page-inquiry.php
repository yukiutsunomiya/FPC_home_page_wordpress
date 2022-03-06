<?php
/*
Template Name: お問い合わせ
*/
?>


<?php get_header(); ?>
      <main>
        <div class="container">
          <h3 class="pt-1 mb-4 fw-bold s-title update-information-h3">
            お問い合わせ
          </h3>
          
        <section class="main_box mb-5">
          <?php if( get_field('contact') ) { ?>
            <?php echo apply_filters('the_content', get_post_meta($post->ID, 'contact', true)); ?>
          <?php } ?> 
        </section>
      </div>
        
        
      </main>
      <?php get_footer(); ?>