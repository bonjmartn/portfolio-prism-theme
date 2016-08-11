<footer>

	<hr>
	<div class="footer-container">

		<div class="footer-social">

			<?php if( get_theme_mod( 'prism_facebook_url' ) != "" ): ?>
				<span id="facebook"><a href="<?php echo get_theme_mod( 'prism_facebook_url' ); ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></span>
			<?php endif; ?>

			<?php if( get_theme_mod( 'prism_twitter_url' ) != "" ): ?>
				<span id="twitter"><a href="<?php echo get_theme_mod( 'prism_twitter_url' ); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
			<?php endif; ?>

			<?php if( get_theme_mod( 'prism_pinterest_url' ) != "" ): ?>
				<span id="pinterest"><a href="<?php echo get_theme_mod( 'prism_pinterest_url' ); ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></span>
			<?php endif; ?>

			<?php if( get_theme_mod( 'prism_instagram_url' ) != "" ): ?>
				<span id="instagram"><a href="<?php echo get_theme_mod( 'prism_instagram_url' ); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
			<?php endif; ?>

			<?php if( get_theme_mod( 'prism_behance_url' ) != "" ): ?>
				<span id="behance"><a href="<?php echo get_theme_mod( 'prism_behance_url' ); ?>"><i class="fa fa-behance" aria-hidden="true"></i></a></span>
			<?php endif; ?>

			<?php if( get_theme_mod( 'prism_dribble_url' ) != "" ): ?>
				<span id="dribbble"><a href="<?php echo get_theme_mod( 'prism_dribble_url' ); ?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a></span>
			<?php endif; ?>

			<?php if( get_theme_mod( 'prism_github_url' ) != "" ): ?>
				<span id="github"><a href="<?php echo get_theme_mod( 'prism_github_url' ); ?>"><i class="fa fa-github" aria-hidden="true"></i></a></span>
			<?php endif; ?>

			<?php if( get_theme_mod( 'prism_tumblr_url' ) != "" ): ?>
				<span id="tumblr"><a href="<?php echo get_theme_mod( 'prism_tumblr_url' ); ?>"><i class="fa fa-tumblr" aria-hidden="true"></i></a></span>
			<?php endif; ?>

			<?php if( get_theme_mod( 'prism_snapchat_url' ) != "" ): ?>
				<span id="snapchat"><a href="<?php echo get_theme_mod( 'prism_snapchat_url' ); ?>"><i class="fa fa-snapchat-ghost" aria-hidden="true"></i></a></span>
			<?php endif; ?>

			<?php if( get_theme_mod( 'prism_youtube_url' ) != "" ): ?>
				<span id="youtube"><a href="<?php echo get_theme_mod( 'prism_youtube_url' ); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></span>
			<?php endif; ?>

			<?php if( get_theme_mod( 'prism_vimeo_url' ) != "" ): ?>
				<span id="vimeo"><a href="<?php echo get_theme_mod( 'prism_vimeo_url' ); ?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a></span>
			<?php endif; ?>

			<?php if( get_theme_mod( 'prism_vine_url' ) != "" ): ?>
				<span id="vine"><a href="<?php echo get_theme_mod( 'prism_vine_url' ); ?>"><i class="fa fa-vine" aria-hidden="true"></i></a></span>
			<?php endif; ?>

			<?php if( get_theme_mod( 'prism_googleplus_url' ) != "" ): ?>
				<span id="google-plus"><a href="<?php echo get_theme_mod( 'prism_googleplus_url' ); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></span>
			<?php endif; ?>

			<?php if( get_theme_mod( 'prism_linkedin_url' ) != "" ): ?>
				<span id="linkedin"><a href="<?php echo get_theme_mod( 'prism_linkedin_url' ); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></span>
			<?php endif; ?>

		</div>

		<div class="copyright">&copy; <?php echo date ('Y') ?> <?php bloginfo('name'); ?><br>Portfolio Prism Theme by <a href="https://www.zenwebthemes.com/">ZenWebThemes.com</a></div>

	</div>
	
</footer>

<?php wp_footer(); ?>

</body>
</html>