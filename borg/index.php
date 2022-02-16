<?php get_header(); ?>

<div class="writifybox" id="writifybox">
  <div class="writifybox__content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      
    <h1 class="pagetitle"><?php echo the_title() ?></h1>
    <?php the_content() ?>

    <?php endwhile; else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    <?php get_footer(); ?>
  </div>
</div>

