<?php/*
Template Name: News Page Template
*/
?>

<!-- removes automatically generated p tags in goofy places -->
<?php remove_filter ('the_content', 'wpautop'); ?>

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap cf main-content">

			<div class="page-content">
			<h1>News</h1>

				<ul>
				<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>

				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

				<div class="news-post">
					<li><a href="<?php the_permalink() ?>" class="news-headline"><?php the_title(); ?></a></li>

					<li><?php the_excerpt(__('(more…)')); ?></li>
				</div> <!-- news-post -->

				<?php 
				endwhile;
				wp_reset_postdata();
				?>
				</ul>

			</div><!-- page-content -->

		</div><!-- inner-content -->

	</div><!-- content -->

<?php get_footer(); ?>