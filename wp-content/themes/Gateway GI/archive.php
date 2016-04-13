<!-- removes automatically generated p tags in goofy places -->
<?php remove_filter ('the_content', 'wpautop'); ?>

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap cf main-content">

			<div class="page-content">

        <div class="sidebar-left">
                <?php the_widget('WP_Widget_Accordion_Archives'); ?>
        </div><!-- sidebar-left -->

       <div class="content-right">
  			<h1 style="margin-bottom: 3px;">News</h1>

  							<?php
  							the_archive_title( '<h2 class="sub-header">', '</h1>' );
  							?>
  							
  							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  							<div class="news-post" id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

  								

  									
                        <ul>
                          <li style="margin-bottom: 7px;"><span class="post-date"><?php the_date(); ?></span></li>

                          <li><a href="<?php the_permalink() ?>" class="news-headline"><?php the_title(); ?></a></li>

                          <li><?php the_excerpt(); ?></li>
                        </ul>

  							</div>

  							<?php endwhile; ?>

  									<?php bones_page_navi(); ?>

  							<?php else : ?>

  									<article id="post-not-found" class="hentry cf">
  										<header class="article-header">
  											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
  										</header>
  										<section class="entry-content">
  											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
  										</section>
  										<footer class="article-footer">
  												<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
  										</footer>
  									</article>

  							<?php endif; ?>
        </div><!-- content-right -->



				<div class="clear"></div>

			</div><!-- page-content -->

		</div><!-- inner-content -->

	</div><!-- content -->

<?php get_footer(); ?>
