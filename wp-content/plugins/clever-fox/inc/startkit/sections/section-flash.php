<?php
if ( ! function_exists( 'startkit_info_plu' ) ) :

	function startkit_info_plu() {
	$hide_show_info			= get_theme_mod('hide_show_info','1');
	$info_icons				= get_theme_mod('info_icons','fa-envelope');
	$info_title				= get_theme_mod('info_title','Design For Business');
	$info_description		= get_theme_mod('info_description','The chunk standard of Lorem Ipsum used since the 900s is reproduced below');
	$info_icons2			= get_theme_mod('info_icons2','fa-opera');
	$info_title2			= get_theme_mod('info_title2','Develop For Work');
	$info_description2		= get_theme_mod('info_description2','The chunk standard of Lorem Ipsum used since the 900s is reproduced below');  
	$info_icons3			= get_theme_mod('info_icons3','fa-connectdevelop'); 
	$info_title3			= get_theme_mod('info_title3','Maketing For Blast');
	$info_description3		= get_theme_mod('info_description3','The chunk standard of Lorem Ipsum used since the 900s is reproduced below'); 
?>
<!-- Start: Features List
    ============================= -->
	<?php if($hide_show_info == '1') { ?>
    <section id="features-list">
        <div class="container">
            <div class="row text-lg-left text-md-center">
                <div class="col-md-4 mb-lg-0 mb-3">
                    <div class="features-list-item first wow fadeInUp" data-wow-delay="0.1s">
                        <span class="icon"><i class="fa <?php echo esc_attr( $info_icons ); ?>"></i></span>
                        <h4><?php echo esc_html( $info_title ); ?></h4>
                        <p class="small"><?php echo esc_html( $info_description ); ?></p>
                    </div>
                </div>
                <div class="col-md-4 mb-md-0 mb-3">
                    <div class="features-list-item second wow fadeInUp" data-wow-delay="0.2s">
                        <span class="icon"><i class="fa <?php echo esc_attr( $info_icons2 ); ?>"></i></span>
                        <h4><?php echo esc_html( $info_title2 ); ?></h4>
                        <p class="small"><?php echo esc_html( $info_description2 ); ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="features-list-item third wow fadeInUp" data-wow-delay="0.3s">
                        <span class="icon"><i class="fa <?php echo esc_attr( $info_icons3 ); ?>"></i></span>
                        <h4><?php echo esc_html( $info_title3 ); ?></h4>
                        <p class="small"><?php echo esc_html( $info_description3 ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } 
 }

endif;
    
	
if ( function_exists( 'startkit_info_plu' ) ) {
$section_priority = apply_filters( 'startkit_section_priority', 12, 'startkit_info_plu' );
add_action( 'startkit_sections', 'startkit_info_plu', absint( $section_priority ) );

}
?>