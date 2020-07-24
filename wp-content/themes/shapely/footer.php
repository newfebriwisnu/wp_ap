<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?>

</div><!-- #main -->
</section><!-- section -->

<div class="footer-callout">
	<?php shapely_footer_callout(); ?>
</div>

<footer id="colophon" class="site-footer footer bg-dark" role="contentinfo">
	<div class="container footer-inner">
		<div class="row">
			<?php get_sidebar( 'footer' ); ?>
		</div>

		<div class="row">
			
				<div class="copyright-text">
					<?php echo wp_kses_post( get_theme_mod( 'shapely_footer_copyright' ) ); ?>
				</div>
				<div class="footer-credits">
					<p style="text-align: center"><strong>Alaric Photography | Photo Studio Jogja | Alaric Studio<br>
					Kunjungi Juga Instagram Kami, Klik Dibawah Ini :</p></strong>
					<center>
					    <a href="https://www.instagram.com/alaricworks/" target="blank"><img src='https://alaricphotography.com/wp-content/uploads/2019/01/3.png' width="200px" height="200px"></a>
					    
					    <a href="https://www.instagram.com/alaricstudiosgraduation/" target="blank"><img src='https://alaricphotography.com/wp-content/uploads/2019/01/2.png' width="325px" height="350px"></a>
					</center>
				</div>
			<!-- .site-info -->
			<div class="col-sm-6 text-right">
				<?php shapely_social_icons(); ?>
			</div>
		</div>
	</div>

	<a class="btn btn-sm fade-half back-to-top inner-link" href="#top"><i class="fa fa-angle-up"></i></a>
</footer><!-- #colophon -->
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
