<?php /* Template Name: CustomPage1 */ 

// get_header(); 
 include 'header2.php'?>
 
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
 
            // Include the page content template.
            get_template_part( 'template-parts/content', 'page' );
 
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
			?>
		<section class="service-w3l2" id="service">
			<div class="container">
				<h3><?php the_title(); ?></h3>
					<p><?php the_content(); ?><p>
			</div>
		</section>
	<?php
            // End of the loop.
        endwhile;
        ?>
 
    </main><!-- .site-main -->
 
    <?php get_sidebar( 'content-bottom' ); ?>
 
</div><!-- .content-area -->


<?php get_sidebar(); ?>
<?php include 'footer2.php' ?>