<div class="rt-builder-landing">
	<div class="rt-builder-landing-header">
		<h1><?php esc_html_e( 'RT Easy Builder', 'rt-easy-builder' ); ?></h1>
		<?php if( function_exists( 'rt_freemius' ) && !rt_freemius()->is_not_paying() ): ?>
			<a href="//wpactivethemes.com/download/full-site-editing-themes/" target="_blank" class="rt-builder-landing-btn">
			<?php esc_html_e( 'Go to pro', 'rt-easy-builder' ); ?> <span class="dashicons dashicons-plugins-checked"></span></a>
		<?php endif; ?>
	</div>

	<div class="rt-builder-landing-banner">
		<h2><?php esc_html_e( 'Advanced Addon For Elementor Plugin', 'rt-easy-builder' ); ?></h2>
		<div class="rt-builder-landing-btn-wrap">
			<a href="//wpactivethemes.com/downloads/all-themes-plan/" target="_blank" class="rt-builder-landing-btn"><?php esc_html_e( 'Starter Sites', 'rt-easy-builder' ); ?> <span class="dashicons dashicons-welcome-view-site"></span></a>
			<a href="<?php echo esc_url( admin_url( 'themes.php?page=one-click-demo-import' ) ); ?>" class="rt-builder-landing-btn rt-btn-secondary"><?php esc_html_e( 'Get Started Now', 'rt-easy-builder' ); ?> <span class="dashicons dashicons-saved"></span></a>
		</div>
	</div>

	<div class="rt-builder-landing-box-wrapper">
		<div class="rt-builder-landing-box">
			<div class="rt-builder-landing-box-inner">
				<div class="rt-builder-landing-icon-wrapper">
					<span class="dashicons dashicons-format-aside"></span>
				</div>
				<div>
					<h3><?php esc_html_e( 'Documentation', 'rt-easy-builder' ); ?></h3>
					<p><?php esc_html_e( 'Get Started: Thank you for using our RT Easy Builder Plugin. For manual setup, you should follow the instructions to create any pages or sites using our extra add-ons.', 'rt-easy-builder' ); ?></p>
					<a href="//wpactivethemes.com" target="_blank"><?php esc_html_e( 'Documentation', 'rt-easy-builder' ); ?> </a>
				</div> 
			</div>
		</div>
		<div class="rt-builder-landing-box">
			<div class="rt-builder-landing-box-inner">
				<div class="rt-builder-landing-icon-wrapper">
					<span class="dashicons dashicons-admin-post"></span>
				</div>
				<div>
					<h3><?php esc_html_e( 'Elementor Widgets', 'rt-easy-builder' ); ?></h3>
					<p><?php esc_html_e( 'Based on the Elementor plugin, a bunch of extra elementor widget is available for creating a unique and different layout.', 'rt-easy-builder' ); ?></p>
					<a href="//wpactivethemes.com/download/full-site-editing-themes/" target="_blank"><?php esc_html_e( 'Widgets', 'rt-easy-builder' ); ?> </a>
				</div> 
			</div>
		</div>

		<div class="rt-builder-landing-box">
			<div class="rt-builder-landing-box-inner">
				<div class="rt-builder-landing-icon-wrapper">
					<span class="dashicons dashicons-format-status"></span>
				</div>
				<div>
					<h3><?php esc_html_e( 'Customer Support', 'rt-easy-builder' ); ?></h3>
					<p><?php esc_html_e( 'Always, we believe in customer satisfaction. If you need any quick support, feel free to contact us. We\'re mostly available via email and Skype.', 'rt-easy-builder' ); ?></p>
					<a href="//www.eaglevisionit.com/contact-us/" target="_blank"><?php esc_html_e( 'Support', 'rt-easy-builder' ); ?></a>
				</div>
			</div>
		</div>
		<div class="rt-builder-landing-box">
			<div class="rt-builder-landing-box-inner">
				<div class="rt-builder-landing-icon-wrapper">
					<span class="dashicons dashicons-welcome-view-site"></span>
				</div>
				<div>
					<h3><?php esc_html_e( 'Recommended Themes', 'rt-easy-builder' ); ?></h3>
					<p><?php esc_html_e( 'This supports all of the themes that are listed in the WordPress repository,  but few of the themes work great with this RT Easy builder.', 'rt-easy-builder' ); ?></p>
					<a href="//wpactivethemes.com/download/full-site-editing-themes/" target="_blank"><?php esc_html_e( 'Themes', 'rt-easy-builder' ); ?></a>
				</div> 
			</div>
		</div>
		<div class="rt-builder-landing-box">
			<div class="rt-builder-landing-box-inner">
				<div class="rt-builder-landing-icon-wrapper">
					<span class="dashicons dashicons-image-rotate-right"></span>
				</div>
				<div>
					<h3><?php esc_html_e( 'Ready to Import Templates', 'rt-easy-builder' ); ?></h3>
					<p><?php esc_html_e( 'Importing starter templates and customizing them is a great way to save your development time. The demo sites can be installed and configure within a single click after installing RT Easy Builder.', 'rt-easy-builder' ); ?></p>
					<a href="//wpactivethemes.com/live-preview/" target="_blank"><?php esc_html_e( 'Demo Templates', 'rt-easy-builder' ); ?></a>
				</div> 
			</div>
		</div>
		<div class="rt-builder-landing-box">
			<div class="rt-builder-landing-box-inner">
				<div class="rt-builder-landing-icon-wrapper">
					<span class="dashicons dashicons-heart"></span>
				</div>
				<div>
					<h3><?php esc_html_e( 'Show Your Love', 'rt-easy-builder' ); ?></h3>
					<p><?php esc_html_e( 'Hello! Seems like you have used our plugin to build your website - Thanks a ton! Could you please do us a BIG favor and give it a 5-star rating and excellent review on WordPress? This would boost our motivation and help other users make a comfortable decision while choosing our plugin.', 'rt-easy-builder' ); ?></p>
					<a href="//wordpress.org/support/plugin/rt-easy-builder-advanced-addons-for-elementor/reviews/#new-post" target="_blank"><?php esc_html_e( 'Rating', 'rt-easy-builder' ); ?></a>
				</div>
			</div>
		</div>
	</div>
	<?php if( function_exists( 'rt_freemius' ) && !rt_freemius()->is_not_paying() ): ?>
		<div class="rt-builder-landing-pro-notice">
			<div>
				<p><?php esc_html_e( 'The pro version helps you to unlock premium options and widgets that would help to build a professional website.', 'rt-easy-builder' ); ?></p>
				<p><?php esc_html_e( 'A dedicated supports team is available via email and live chat in case of any confusion.', 'rt-easy-builder' ); ?></p>
				<div class="rt-builder-landing-btn-wrap">
					<a href="//wpactivethemes.com/download/full-site-editing-themes/" target="_blank" class="rt-builder-landing-btn"><?php esc_html_e( 'Free vs Pro', 'rt-easy-builder' ); ?> <span class="dashicons dashicons-shortcode"></span></a>
					<a href="//wpactivethemes.com/download/full-site-editing-themes/" target="_blank" class="rt-builder-landing-btn rt-btn-secondary"><?php esc_html_e( 'Go to Pro', 'rt-easy-builder' ); ?> <span class="dashicons dashicons-plugins-checked"></span></a>
				</div>
			</div>
		</div>
	<?php endif; ?>
</div>
