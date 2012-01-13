<?php get_header(); ?>
	<?php roots_content_before(); ?>
		<div id="content" class="<?php echo $roots_options['container_class']; ?>">
		<?php roots_main_before(); ?>
			<div id="main" role="main">
				<div class="container">
					<center><h3 class="paragraph_indent"><?php _e('404 Error - Can\'t find That!', 'roots'); ?></h3></center>
					<p id="error_paragraph"><span class="paragraph_indent"></span>We're so glad you stopped by, however it seems that the file or page you have requested is either no longer available or it never was. Odds are that you just typed in the URL incorrectly, but if you have any questions feel free to contact the site administrator, <a href="mailto:info@dreamstarstudios.com" title="E-mail Brian">Brian Feister</a>.</p>
					
					<p><?php _e('Please try the following:', 'roots'); ?></p>
					<ul> 
						<li><?php _e('Check your spelling', 'roots'); ?> </li>
						<li><?php printf(__('Return to the <a href="%s">home page</a>', 'roots'), home_url()); ?></li>
						<li><?php _e('Click the <a href="javascript:history.back()">Back</a> button', 'roots'); ?></li>
					</ul>
				</div>
			</div><!-- /#main -->
		<?php roots_main_after(); ?>
		</div><!-- /#content -->
	<?php roots_content_after(); ?>
<?php get_footer(); ?>