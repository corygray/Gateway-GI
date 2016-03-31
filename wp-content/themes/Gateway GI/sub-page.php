<?php/*
Template Name: Sub Page Template
*/
?>

<!-- removes automatically generated p tags in goofy places -->
<?php remove_filter ('the_content', 'wpautop'); ?>

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap cf main-content">

			<div class="page-content">
				<?php	
					if ( have_posts() ) while ( have_posts() )
					{
						the_post();
						the_content();
					}
				?>
			</div><!-- page-content -->

		</div><!-- inner-content -->

	</div><!-- content -->

<?php get_footer(); ?>