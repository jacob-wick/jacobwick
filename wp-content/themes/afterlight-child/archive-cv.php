<?php
/**
 * The template file for CV Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package Afterlight
 * @since Afterlight 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area cv-page">

		<main id="main" class="site-main cv-main" role="main">

		<h1 class="entry-title">CV</h1>

		
	<!-- Education -->
		<section class="education">

			<h2 class="cv-section-title">Education</h2>

			<div class="cv-section">
			
				<?php $query = new WP_Query( array( 'post_type' => 'cv' , 'category_name' => "Education" ) ); ?>

				<?php
			
					if ( $query->have_posts() ) :
    					while ( $query->have_posts() ) : $query->the_post(); 
    						get_template_part ( 'content', 'cv' );
    					endwhile;
				
					else : get_template_part ('content', 'none');	
					endif;
				?>

			</div>

		</section>

	<!-- Selected Performances -->
		
		<section class="selected-performances">

			<h2 class="cv-section-title">Selected Performances</h2>

			<div class="cv-section">
			
				<?php $query = new WP_Query( array( 'post_type' => 'cv' , 'category_name' => "selected-performances", 'posts_per_archive_page' => '25' ) ); ?>

				<?php
			
					if ( $query->have_posts() ) :
    					while ( $query->have_posts() ) : $query->the_post(); 
    						get_template_part ( 'content', 'cv' );
    					endwhile;
				
					else : get_template_part ('content', 'none');	
					endif;
				?>
				
			</div>

		</section>

	<!-- Selected Projects & Exhibitions -->
		
		<section class="selected-projects">

			<h2 class="cv-section-title">Selected Projects & Exhibitions</h2>

			<div class="cv-section">
			
				<?php $query = new WP_Query( array( 'post_type' => 'cv' , 'category_name' => "selected-projects", 'posts_per_archive_page' => '20' ) ); ?>

				<?php
			
					if ( $query->have_posts() ) :
    					while ( $query->have_posts() ) : $query->the_post(); 
    						get_template_part ( 'content', 'cv' );
    					endwhile;
				
					else : get_template_part ('content', 'none');	
					endif;
				?>
				
			</div>

		</section>


	<!-- Workshops & Masterclasses -->

		<section class="workshops-masterclasses">

			<h2 class="cv-section-title">Workshops & Masterclasses</h2>

			<div class="cv-section">
			
				<?php $query = new WP_Query( array( 'post_type' => 'cv' , 'category_name' => "workshops-masterclasses", 'posts_per_archive_page' => '15' ) ); ?>

				<?php
			
					if ( $query->have_posts() ) :
    					while ( $query->have_posts() ) : $query->the_post(); 
    						get_template_part ( 'content', 'cv' );
    					endwhile;
				
					else : get_template_part ('content', 'none');	
					endif;
				?>
				
			</div>

		</section>

	<!-- Recordings as a Leader -->

		<section class="recordings">

			<h2 class="cv-section-title">Recordings as a Leader</h2>

			<div class="cv-section">
			
				<?php $query = new WP_Query( array( 'post_type' => 'cv' , 'category_name' => "recordings", 'posts_per_archive_page' => '15' ) ); ?>

				<?php
			
					if ( $query->have_posts() ) :
    					while ( $query->have_posts() ) : $query->the_post(); 
    						get_template_part ( 'content', 'cv' );
    					endwhile;
				
					else : get_template_part ('content', 'none');	
					endif;
				?>
				
			</div>

		</section>

	<!-- Publications -->

		<section class="publications">

			<h2 class="cv-section-title">Selected Publications</h2>

			<div class="cv-section">
			
				<?php $query = new WP_Query( array( 'post_type' => 'cv' , 'category_name' => "publications", 'posts_per_archive_page' => '15' ) ); ?>

				<?php
			
					if ( $query->have_posts() ) :
    					while ( $query->have_posts() ) : $query->the_post(); 
    						get_template_part ( 'content', 'cv' );
    					endwhile;
				
					else : get_template_part ('content', 'none');	
					endif;
				?>
				
			</div>

		</section>

	<!-- Residencies & Awards -->

		<section class="residencies-awards">

			<h2 class="cv-section-title">Residencies and Awards</h2>

			<div class="cv-section">
			
				<?php $query = new WP_Query( array( 'post_type' => 'cv' , 'category_name' => "residencies-awards", 'posts_per_archive_page' => '10' ) ); ?>

				<?php
			
					if ( $query->have_posts() ) :
    					while ( $query->have_posts() ) : $query->the_post(); 
    						get_template_part ( 'content', 'cv' );
    					endwhile;
				
					else : get_template_part ('content', 'none');	
					endif;
				?>
				
			</div>


		</section>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
