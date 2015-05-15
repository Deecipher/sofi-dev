</section>
<footer id="footer">
	<div class="row widgets">
	<?php do_action( 'foundationpress_before_footer' ); ?>
	<?php dynamic_sidebar( 'footer-widgets' ); ?>
	<?php do_action( 'foundationpress_after_footer' ); ?>
	</div>
	<div id="copyright">
		<div class="row">
			<div class="small-12 columns">
				Copyright © <?php echo date(Y); ?> — The MasterCard Foundation. Boulder Institute of Microfinance +1 (315) 760.3091 / <a href="mailto:info@bouldermicrofinance.org">info@bouldermicrofinance.org</a>
			</div>
		</div>
	</div>
</footer>
<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
<?php wp_footer(); ?>
<!-- <?php do_action( 'foundationpress_before_closing_body' ); ?> -->
</body>
</html>
