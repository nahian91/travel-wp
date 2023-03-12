<?php get_header(); ?>

<section class="breadcumb bg" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h4 class="breadcumb-title"><?php the_title();?></h4>
				<ul class="breadcumb-nav">
					<li class="breadcumb-list"><a href="<?php echo site_url();?>" class="breadcumb-link">Home</a></li>
					<li class="breadcumb-list"><?php the_title();?></li>
				</ul>
			</div>
		</div>
	</div>
</section>

	<main id="primary" class="site-main pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<?php
		while ( have_posts() ) :
			the_post();

			the_content();

		endwhile; // End of the loop.
		?>

				</div>
			</div>
		</div>

		
	</main><!-- #main -->

<?php
get_footer();
