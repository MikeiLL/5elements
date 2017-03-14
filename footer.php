<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				&copy; Sheridan Loudon Acupuncture | <a href="https://maps.google.com/maps?oe=utf-8&client=firefox-a&q=1308-B+Dunmire+Street++Pensacola,+FL+32504&ie=UTF-8&hq=&hnear=0x8890ea83c70e59eb:0xb43bf317612821d0,1308+Dunmire+St,+Pensacola,+FL+32504&gl=us&ei=9Xh9UsPhIMSTkQeltYGwDQ&ved=0CC4Q8gEwAA" target="_blank"> Located near Scenic and I-10
Pensacola, FL 32504 </a>
| 850-516-3323 | Developed by <a href="http://www.mzoo.org" target="_newbrowser">mZoo</a> using <?php printf( __( 'Wordpress', 'twentythirteen' ), 'WordPress' ); ?></a><!--SOFTACULOUS-->
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>