
              <?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
              ?>

              <div class="content-right" style="float: right;">
                  <h1>News</h1>
                  <div class="news-post" id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                      <ul>
                        <li style="margin-bottom: 7px;"><span class="post-date"><?php the_date(); ?></span></li>

                        <li style="margin-bottom: 7px;"><a href="<?php the_permalink() ?>" class="news-headline blue lowercase"><?php the_title(); ?></a></li>
                     
                        <li style="margin-bottom: 60px;">
                          <?php
                            // the content (pretty self explanatory huh)
                            the_content();
                          ?>
                        </li>

                        <li style="margin-top: 7px;">
                        <div class="next-prev">
                          <a class="view-more-button yellow previous" href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>"><img src="/wp-content/themes/Gateway%20GI/library/images/arrow-left.png" /> Previous</a>
                          &nbsp;
                          <a class="view-more-button yellow next" href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>">Next<img src="/wp-content/themes/Gateway%20GI/library/images/arrow-right.png" style="padding-left: 3px;"/></a>
                        </div>

                        <div class="social" style="float: right;">

                        </div>
                        </li>

                      </ul>

                  </div> <!-- news-post --> <?php // end article ?>
              </div><!-- content-right -->

               <div class="sidebar-left post">
                <?php the_widget('WP_Widget_Accordion_Archives'); ?>
              </div><!-- sidebar-left -->





