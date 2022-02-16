
    </div>
    <?php
      $query = new WP_Query(array(
        'post_type' => 'post',
        'name' => 'footer'
      ));
    ?>
    <footer>
      <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
          <p class='footer-text'><?php the_content(); ?></p>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <p class='footer-text'>Copyright © <?php echo date("Y") ?> GGO Apps</p>

      <?php endif; ?>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>