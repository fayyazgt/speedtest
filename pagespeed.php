<?php

require('../wp-blog-header.php');

add_filter('wp_title', 'custom_title', 1000);
function custom_title($title) {
    $title = 'Page Speed Test - Magenticians';
    return $title;
}

get_header();

wp_head();

?>

<div class="main wrap cf" style="transform: none;">
	<div class="row" style="transform: none;">
		<div class="col-8 main-content">
			<article class="page type-page status-publish">
				<header class="post-header">
					<h1 class="main-heading">Magenticians Page Speed Test</h1>
				</header><!-- .post-header -->
			<div class="post-content">
				<div class="mg-cnt-box">
					<div role="form" class="wpcf7" id="wpcf7-f2361-p19-o1" lang="en-US" dir="ltr">
						<div class="screen-reader-response"></div>
						<form action="result.php" method="post" class="wpcf7-form" novalidate="novalidate">
							<p>
								<span class="wpcf7-form-control-wrap your-name">
									<input type="url" name="url" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Your Website URL *">
								</span>
							</p>
							<p>
								<span class="wpcf7-form-control-wrap your-email">
									<input type="email" name="email" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Your Email Address *">
								</span>
							</p>
							<div class="topmargin">
								<input type="submit" name="submit" value="Submit" class="wpcf7-form-control wpcf7-submit">
							</div>
							<div class="wpcf7-response-output wpcf7-display-none"></div>
						</form>
					</div>
				</div>
			</div>
			</article>
		</div>
		<?php get_sidebar(); ?>
<?php /*if (!dynamic_sidebar('primary-sidebar')) : */?><!--
        --><?php /*endif; */?>
	</div>
</div>
<?php get_footer(); ?>