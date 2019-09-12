<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package startkit
 */

get_header();
?>
<section id="recent-blog" class="section-padding-80">
        <div class="container">
            <div class="row">	
			
			<!--Blog Detail-->
			<div class="col-lg-9 col-md-12 col-sm-12" >
					
					<?php if( have_posts() ): ?>
						<?php
							if ( is_day() ) :
								printf( __( 'Daily Archives: %s', 'startkit' ), get_the_date() );
								elseif ( is_month() ) :
									printf( __( 'Monthly Archives: %s', 'startkit' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'startkit' ) ) );
								elseif ( is_year() ) :
									printf( __( 'Yearly Archives: %s', 'startkit' ), get_the_date( _x( 'Y', 'yearly archives date format', 'startkit' ) ) );
								else :
									_e( 'Archives', 'startkit' );
								endif;
						?>
						<div class="row">
							<?php while( have_posts() ): the_post(); ?>
							
								<?php get_template_part('template-parts/content','page'); ?>
						
							<?php endwhile; ?>
						</div>
						
						
					<?php else: ?>
						
						<?php get_template_part('template-parts/content','none'); ?>
						
					<?php endif; ?>
			
			</div>
			<!--/End of Blog Detail-->
			<div class="col-lg-3 col-md-12">
				<section class="sidebar">
					<?php get_sidebar(); ?>
				 </section>
			</div>	
		</div>	
	</div>
</section>

<?php get_footer(); ?>
