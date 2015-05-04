<?php
/**
 * Blocking direct access to your theme PHP files for security
 */
	defined('ABSPATH') or die("No script kiddies please!");
?>
		<div id="after-content"></div><!--#after-content-->
        </div><!--.content-->

        <div id="footer">
			<?php dynamic_sidebar( footer ); ?> 
        </div><!--#footer -->

	</div><!--#wrapper-->

<?php wp_footer(); ?>
</body>
</html>