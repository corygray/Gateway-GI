<?php/*
Template Name: Home Page Template
*/?>

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap cf">

			<div class="welcome">

				<h1>Welcome to 
				<br class="welcome-header"/>our Practice</h1>

				<a href="/our-doctors" class="fancy-button">
					Meet Our Doctors
				</a>

				<div class="welcome-bottom">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/employee-group-photo.png" class="group-photo" />
				</div><!-- welcome bottom -->

			</div><!-- welcome -->

			<div class="welcome-blurb">

				<h1>A Better Way - Gateway</h1>
				<p class="main-content">Gateway Gastroenterology is a group of eight board certified gastroenterologists. Our goal is to is to provide outstanding care in a timely, courteous, and professional manner. Our mission is to aid in improving your digestive health and also to be a resource to your primary care physician in caring for you. All of our physicians are committed to ongoing education and will make every effort to provide you with the most up to date and thorough care possible. We offer a wide variety of gastroenterology services including inpatient and outpatient consultation as well as a broad range of endoscopic procedures including upper endoscopy and colonoscopy.</p>

				<p class="satisfaction-testimonials uppercase" align="center">
					<span class="patient-satisfaction">Our patient satisfaction score is</span>
					<span class="big blue ninety-nine">99%*</span> 
					<span class="yellow-text patient-testimonials"><a href="/testimonials" class="yellow-text">Read our patient testimonials</a></span>
					<span class="yellow-arrow"><a href="/testimonials"><img src="<?php echo get_template_directory_uri(); ?>/library/images/yellow-arrow.jpg"></a></span>
				</p>

			</div><!-- welcome-blurb -->

			<div class="procedures">

				<div class="content">
					<h1>Procedures</h1>
					<ul class="yellow-procedures">
						<li>Colonoscopy</li>
						<li>Upper Endoscopy</li>
						<li>ERCP</li>
						<li>Capsule Endoscopy</li>
						<li>HYDROGEN & METHANE BREATH TESTING</li>
					</ul>
					<p>Quarterly reviews of Gateway’s endoscopy procedures consistently rank the physicians of Gateway Gastroenterology as leaders in gastrointestinal endoscopy quality. In fact, the Gateway Endoscopy Center was recently awarded for such quality by becoming an American Society for Gastrointestinal Endoscopy (ASGE)-recognized endoscopy unit.</p>

					<p class="blue">
					Save time at your appointment by completing forms prior to your visit!
					</p>

					<p style="margin-bottom: 50px;"><a href="#" class="fancy-button">
					Patient Forms
					</a></p>

					<h1>Areas of Expertise</h1>
					<p>What sets Gateway Gastroenterology apart from other practices is the training of our physicians! Our skilled doctors can help you with issues for any of the following areas. </p>

					<div class="mobile-areas">
						<a href="#" class="blue-button">Liver</a>

						<ul class="procedures-list">
							<li>Procedure #1</li>
							<li>Procedure #2</li>
							<li>Procedure #3</li>
						</ul>

						<a href="#" class="blue-button">Gall Bladder</a>
						<a href="#" class="blue-button">Large Intestine</a>
						<a href="#" class="blue-button">Small Intestine</a>
						<a href="#" class="blue-button">Esophagus</a>
						<a href="#" class="blue-button">Stomach</a>
						<a href="#" class="blue-button">Pancreas</a>
					</div><!-- mobile-areas -->

					<div class="tablet-desktop-areas">

					<p class="blue uppercase bold" align="center">Tap on the different organs to see what procedures we offer</p>

						<div class="areas-infograph-wrap">

						  <div class="area liver">
						    <p>Liver</p>
						    <div class="toggle">
						      <ul>
						        <li>Procedure 1</li>
						        <li>Procedure 2</li>
						        <li>Procedure 3</li>
						      </ul>
						    </div><!-- toggle -->
						  </div><!-- area liver -->

						  <div class="area gall-bladder">
							  <p>Gall Bladder</p>
							  <div class="toggle">
							  	<ul>
								  	<li>Procedure 1</li>
								  	<li>Procedure 2</li>
								  	<li>Procedure 3</li>
							  	</ul>
							  </div><!-- toggle -->
						  </div><!-- area gall-bladder -->

						  <div class="area large-intestine">
							  <p>Large Intestine<br />
							  (Colon)
							  </p>
							  <div class="toggle">
							  	<ul>
								  	<li>Procedure 1</li>
								  	<li>Procedure 2</li>
								  	<li>Procedure 3</li>
							  	</ul>
							  </div><!-- toggle -->
						  </div><!-- area large-intestine -->

						  <div class="area esophagus">
						    <p>Esophagus</p>
						    <div class="toggle">
						      <ul>
						        <li>Procedure 1</li>
						        <li>Procedure 2</li>
						        <li>Procedure 3</li>
						      </ul>
						    </div><!-- toggle -->
						  </div> <!-- area esophagus -->

						  <div class="area stomach">
						    <p>Stomach</p>
						    <div class="toggle">
						      <ul>
						        <li>Procedure 1</li>
						        <li>Procedure 2</li>
						        <li>Procedure 3</li>
						      </ul>
						    </div><!-- toggle -->
						  </div><!-- area stomach -->

						  <div class="area pancreas">
						    <p>Pancreas</p>
						    <div class="toggle">
						      <ul>
						        <li>Procedure 1</li>
						        <li>Procedure 2</li>
						        <li>Procedure 3</li>
						      </ul>
						    </div><!-- toggle -->
						  </div> <!-- area pancreas -->

						  <div class="area small-intestine">
							  <p>Small Intestine</p>
							  <div class="toggle">
							  	<ul>
								  	<li>Procedure 1</li>
								  	<li>Procedure 2</li>
								  	<li>Procedure 3</li>
							  	</ul>
							  </div><!-- toggle -->
						  </div><!-- area small-intestine -->

						</div><!-- areas-infograph-wrap -->

					</div><!-- tablet-desktop-areas -->
				</div><!-- procedures content -->
			</div><!-- procedures -->

			<div class="recent-news">

				<div class="left-major">
					<h1>Recent News</h1>

					<!-- pulls in 5 most recent posts -->
					<ul>
					<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>

					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					<div class="news-post">	

						<li><a href="<?php the_permalink() ?>" class="news-headline"><?php the_title(); ?></a></li>

						<li><?php the_excerpt(__('(more…)'), 0,2); ?></li>
					</div><!-- news-post -->

					<?php 
					endwhile;
					wp_reset_postdata();
					?>
					</ul>

					<a href="/news" class="view-more-button">View More</a>

					<hr />
				</div>

				<div style="text-align: center;font-weight: bold;" class="right-major">

					<div class="left fifty-percent">
						<p class="dark-blue" style="margin-top: .2em; margin-bottom: .2em;">Colon Cancer Screening</p>
						<p class="blue" style="margin-top: .2em; margin-bottom: 1em;">It can save your life!</p>
						<a class="view-more-button" href="#" style="margin-top: .2em; margin-bottom: 1em;">Read More</a>
					</div><!-- left 50-percent -->

					<div class="right fifty-percent">
						<p class="dark-blue" style="margin-top: .2em; margin-bottom: .2em;">Hemorrhoids?</p>
						<p class="blue" style="margin-top: .2em; margin-bottom: .2em;">Dont' treat them.<br />Remove them.</p>
						<p class="dark-blue" style="margin-top: .2em; margin-bottom: 1em;">Ask us!</p>
						<a class="view-more-button" href="#" style="margin-top: .2em; margin-bottom: 1em;">Read More</a>
					</div>

				</div> <!-- text align center div -->

				<div class="clear"></div>

			</div> <!--recent-news -->


		</div><!-- inner-content -->

	</div><!-- content -->

<?php get_footer(); ?>
