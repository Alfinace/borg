<?php
/**
 * Template Name: Sidebar-page
 *
 * @package WordPress
 */
?>
<?php get_header(); ?>

<div id="slider"> 
	<div id="header">
		<div id="sitetite"  class="tooltip">
				<h1>
					<a href="https://www.on135.com/borg" target="_parent">
						<img src="<?= get_site_url().'/wp-content/themes/borg/images/templatemo_logo.png'?>" alt="Borg" />
					</a>
				</h1>
				<span class="tooltiptext"><?= the_title() ?></span>
		</div> 
			<?php
					wp_nav_menu(array(
						'menu'              => 'secondary_menu',
						'theme_location'    => 'secondarymenu',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'submenu',
						'menu_class'        => 'navigation',
					));
				?>            
    </div>
    <div class="scroll">
      <div class="scrollContainer">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="panel" id="home"">
							<h1 class="pagetitle"><?php echo is_page( 'login' ) || is_page( 'join-now' ) ? '' : the_title() ?></h1>
							<?php the_content() ?>
						</div>
						<div class=" right-sidebar">
							<?php get_template_part("partials/right-sidebar-1") ?>
						</div
					<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
    </div>
		<!-- <div id="templatemo_footer">
		</div> -->
  </div>
</div>

<?php get_footer(); ?>
