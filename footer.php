<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.site-content-->
</div><!-- main content container -->
<?php full_below_content_area(); ?>
			
			<footer id="site-footer" role="contentinfo">
				<div class="footer-section pad-50">
					<div class="container">
						<div style="font-weight: 700; letter-spacing: 0px; color: rgb(238, 238, 238); font-size: 14px; position: relative; padding: 0 0 25px; font-family: Oxygen; text-align: center;">
							Investing involves substantial risk. Always consider a financial professional when investing. Past performance is not indicative of future returns. Forex trading involves significant risk of loss and is not suitable for all investors.
						</div>
						<div id="footer-row" class="row site-footer">
							<?php get_sidebar('footerone'); ?>
							<?php get_sidebar('footertwo'); ?>
							<?php get_sidebar('footerthree'); ?>
							<?php get_sidebar('footerfour'); ?>
						</div>
					</div>
				</div>

				<div class="copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-6 footer-left padtop-10">
								<?php
								$fms_copyright = get_theme_mod( 'copyright_textbox', '' );
								if($fms_copyright) { ?>
									<small>&copy; <?php echo date('Y'); ?> <?php echo $fms_copyright; ?></small>
								<?php } else { ?>
									<small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small>
								<?php } ?>
							</div>
							<div class="col-md-6 footer-right text-right">
								<?php dynamic_sidebar('footer-right'); ?>
								<?php wp_nav_menu(array('theme_location' => 'footer', 'container' => false, 'items_wrap' => '<ul class="foot-menu">%3$s</ul>')); ?>
							</div>
						</div>
					</div>
				</div>


			</footer>


		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>