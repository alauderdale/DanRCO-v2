<?php

/*

Template Name: Homepage

 */

?>





<?php get_header(); ?>



<?php

if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {

	wpcf7_enqueue_scripts();

}



if ( function_exists( 'wpcf7_enqueue_styles' ) ) {

	wpcf7_enqueue_styles();

}

?>



<?php while ( have_posts() ) : the_post(); ?>





<div class='main'>

	<section class='dan-hero parallax-dan' style="background-image:url(<?php the_field('dan_hero_image');?>);">
		<div class="parallax-inner">
			<div class='container'>

				<div class='row'>

					<div class='col-sm-5 col-md-6'></div>

					<div class='col-sm-7 col-md-6'>

						<div class='padded'>

							<?php the_content();?>

						</div>

					</div>

				</div>

			</div>
		</div>

	</section>

	<section class='narratives-hero' id='ssabout'>

		<div class='container'>

			<?php if( have_rows('narratives') ): ?>

			<div class='row'>

					<?php 

					while( have_rows('narratives') ): the_row(); 

		// vars

					$title = get_sub_field('title');

					$text = get_sub_field('text');

					$icon = get_sub_field('font_awesome_class');

					?>

				<div class='col-sm-4'>

					<div class='padded-sm'>

						<div class='margin-bottom padded-sm'>

							<i class='fa <?php echo $icon; ?> fa-4x' style='color:#939393;'></i>

						</div>

						<h3>

							<?php echo $title; ?>

						</h3>

						<?php echo $text; ?>

					</div>

				</div>

				<?php endwhile; ?>

			</div>

			<?php endif; ?>

		</div>

	</section>

	<section class='surf parallax-default' style="background-image:url(<?php the_field('dan_surf_image');?>);"></section>

<!-- 	<div class='visible-xs'>

		<img class='img-responsive' src='<?php the_field('dan_surf_image');?>'>

	</div> -->

	<section class='believe inverse-section'>

		<div class='container'>

			<div class='row'>

				<div class='col-lg-12'>

					<div class='padded'>

						<h3 class='margin-bottom'>

							<?php the_field('believe_title');?>

						</h3>

						<div class='margin-bottom'>

							<?php the_field('believe_text');?>

						</div>

					</div>

				</div>

			</div>

			<div class='row'>

				<div class='col-lg-12'>

					<div class='padded'>

						<h3>

							What’s your Narrative?

						</h3>

						<?php the_field('narrative_contact_form_shortcode');?>

					</div>

				</div>

			</div>

		</div>

	</section>

	<section>

		<div class='container'>

			<div class='row'>

				<div class='col-lg-12'>

					<div class='padded no-padding-bottom'>

						<h3>

							<?php the_field('notebooks_title');?>

						</h3>

						<p>

							<?php the_field('notebooks_text');?>

						</p>

					</div>

				</div>

			</div>

			<div class='row'>

				<div class='col-lg-12'>

					<div class="notebooks">

						<?php $portfolioLoop = new WP_Query( array('post_type' => 'notebook') ); ?>

						<?php while ( $portfolioLoop->have_posts() ) : $portfolioLoop->the_post(); ?>

								<div class='notebook-container pull-left'>

									<img class='notebook margin-auto' src='<?php the_field('notebook_image');?>'>

								</div>

						<?php wp_reset_postdata(); ?>

						<?php endwhile; // end of the loop. ?>

					</div>

				</div>

			</div>

		</div>

	</section>

	<section class='bio' id='ssbio'>

		<div class='container'>

			<div class='row'>

				<div class='col-lg-12'>

					<div class='padded'>

						<h3 class='margin-bottom'>

							<?php the_field('bio_title');?>

						</h3>



						<div class='margin-bottom'>

							<?php the_field('bio_text');?>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

	<section class='ski parallax-default' style="background-image:url(<?php the_field('dan_ski_image');?>);"></section>

<!-- 	<div class='visible-xs'>

		<img class='img-responsive' src='<?php the_field('dan_ski_image');?>'>

	</div> -->

	<section class='contact inverse-section' id='sscontact'>

		<div class='container'>

			<div class='row'>

				<div class='col-lg-12'>

					<div class='padded'>

						<h3>

							Contact Dan

						</h3>

						<?php the_field('dan_contact_form_shortcode');?>

					</div>

				</div>

			</div>

		</div>

	</section>

</div>

<!-- end main content -->



<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>