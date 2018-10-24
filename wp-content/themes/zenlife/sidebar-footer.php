<?php
/**
 * The sidebar containing the main footer columns widget areas
 *
 */
?>

<div id="footer-cols">

	<div id="footer-cols-inner">

		<?php if ( is_active_sidebar( 'footer-column-1-widget-area' ) ) : ?>
			<?php 
				/**
				 * Display widgets dragged in 'Footer Columns 1' widget areas
				 */
			?>
			<div class="col3a">

				<?php if ( !dynamic_sidebar( 'footer-column-1-widget-area' ) && current_user_can('edit_theme_options') ) : ?>

							<h2 class="footer-title">
								<?php esc_html_e('Footer Col Widget 1', 'zenlife'); ?>
							</h2><!-- .footer-title -->
							
							<div class="footer-after-title">
							</div><!-- .footer-after-title -->
							
							<div class="textwidget">
								<?php esc_html_e('This is first footer widget area. To customize it, please navigate to Admin Panel -> Appearance -> Widgets and add widgets to Footer Column #1.', 'zenlife'); ?>
							</div><!-- .textwidget -->
				
				<?php endif; ?>

			</div><!-- .col3a -->
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'footer-column-2-widget-area' ) ) : ?>

			<?php 
				/**
				 * Display widgets dragged in 'Footer Columns 2' widget areas
				 */
			?>
			<div class="col3b">
				<?php if ( !dynamic_sidebar( 'footer-column-2-widget-area' ) && current_user_can('edit_theme_options') ) : ?>
				
						<h2 class="footer-title">
							<?php esc_html_e('Footer Col Widget 2', 'zenlife'); ?>
						</h2><!-- .footer-title -->
						
						<div class="footer-after-title">
						</div><!-- .footer-after-title -->
						
						<div class="textwidget">
							<?php esc_html_e('This is second footer widget area. To customize it, please navigate to Admin Panel -> Appearance -> Widgets and add widgets to Footer Column #2.', 'zenlife'); ?>
						</div><!-- .textwidget -->
							
				<?php endif; // end of ! dynamic_sidebar( 'footer-column-2-widget-area' )
					  ?>
				
			</div><!-- .col3b -->

		<?php endif; ?>
		

		<?php if ( is_active_sidebar( 'footer-column-3-widget-area' ) ) : ?>

			<?php 
				/**
				 * Display widgets dragged in 'Footer Columns 3' widget areas
				 */
			?>
			<div class="col3c">
				<?php if ( !dynamic_sidebar( 'footer-column-3-widget-area' ) && current_user_can('edit_theme_options') ) : ?>
				
						<h2 class="footer-title">
							<?php esc_html_e('Footer Col Widget 3', 'zenlife'); ?>
						</h2><!-- .footer-title -->
						
						<div class="footer-after-title">
						</div><!-- .footer-after-title -->
						
						<div class="textwidget">
							<?php esc_html_e('This is third footer widget area. To customize it, please navigate to Admin Panel -> Appearance -> Widgets and add widgets to Footer Column #3.', 'zenlife'); ?>
						</div><!-- .textwidget -->
							
				<?php endif; // end of ! dynamic_sidebar( 'footer-column-2-widget-area' )
					  ?>
				
			</div><!-- .col3c -->

		<?php endif; ?>
		
		<div class="clear">
		</div><!-- .clear -->

	</div><!-- #footer-cols-inner -->

</div><!-- #footer-cols -->