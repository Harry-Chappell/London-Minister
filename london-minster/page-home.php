<?php
/*
 Template Name: Page Home
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class=" cf">

		<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<section class="hero wrap cf">

				<h1>A warm welcome <br>to London Minster</h1>
				<h2>The heart of London for over 900 years</h2>

				<div class="featured-links">

					<a class="featured-link" href="#">
						<img src="<?php echo home_url(); ?>/wp-content/uploads/Minster-Hero@2x.jpg" alt="Minster Hero">
						<div class="border-right bg-dark-blue">
							<h3>Services at London Minster</h3>
							<span>View our service times</span>
						</div>
					</a>

					<a class="featured-link" href="#">
						<img src="<?php echo home_url(); ?>/wp-content/uploads/Candle-Hero@2x.jpg" alt="Candle Hero">
						<div class="border-right bg-purple">
							<h3>Light a Candle</h3>
							<span>Discover more here</span>
						</div>
					</a>

					<a class="featured-link" href="#">
						<img src="<?php echo home_url(); ?>/wp-content/uploads/Coffee@2x.jpg" alt="Coffee Hero">
						<div class="border-right bg-green">
							<h3>Visit the Minster Coffee Shop</h3>
							<span>View our opening times</span>
						</div>
					</a>

				</div>
			</section>

			<section class="today wrap cf">
				<div class="today--cntr d-2of3 t-1of2 m-all">
					<div class="bg-white border-top d-1of2 t-all m-all">
						<h4 class="today--date"><?php echo date("l d M Y"); ?></h4>
						<h2 class="today--title">Today at London Minster</h2>
						<?php
							$today = date('Ymd');
							$args = array(
								'post_type'     => 'events',
								'nopaging'      => true,
								'orderby'       => 'meta_value_num',
								'meta_key'      => 'date', //ACF date field
								'meta_query'    => array( array(
									'key' => 'date', 
									'value' => $today, 
									'compare' => '=', 
									'type' => 'DATE'
								))
							);
							$upcoming_events = new WP_Query( $args );
							if ( $upcoming_events->have_posts() ) :
						?>
						<div class="today--events-cntr">
							<table class="today--events">

							<?php while ( $upcoming_events->have_posts() ) : $upcoming_events->the_post(); ?>

								<tr>
									<td><?php echo get_field('start_time');?> - <?php echo get_field('end_time'); ?>
									<td><?php the_title(); ?><br>
								</tr>

							<?php endwhile; wp_reset_postdata(); ?>

							</table>
						</div>
						<?php endif; ?>

						<a href="#" class="today--link">
							<span>View all service times</span>
							<?php echo file_get_contents( home_url() . '/wp-content/svgs/Button-Circle-1.svg' ); ?>
						</a>
						<a href="#" class="today--link">
							<span>General viewing times</span>
							<?php echo file_get_contents( home_url() . '/wp-content/svgs/Button-Circle-1.svg' ); ?>
						</a>
						<a href="#" class="today--link">
							<span>All latest events</span>
							<?php echo file_get_contents( home_url() . '/wp-content/svgs/Button-Circle-1.svg' ); ?>
						</a>
					</div>
				</div>

				<div class="today--about-cntr d-1of3 t-1of2 m-all">
					<h4>About London Minster</h4>
					<h2>What makes the Minster special</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tellus justo, aliquam a pulvinar vitae, consequat eget nisi. Aenean feugiat in enim nec commodo. Donec volutpat enim enim, at laoreet augue varius vitae. Morbi diam leo, suscipit at placerat eget, convallis et ligula.</p>
					<a href="#" class="btn btn-small">Find out more</a>
				</div>
			</section>

		</main>

	</div>

</div>

<?php get_footer(); ?>
