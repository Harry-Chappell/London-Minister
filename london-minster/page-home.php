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

			<section class="hero wrap">

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

		</main>

	</div>

</div>

<?php get_footer(); ?>
