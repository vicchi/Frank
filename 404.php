<?php
/**
 * @package Frank
 */
?>
<?php get_header(); ?>
<<<<<<< HEAD:404.php
<main id="content" class="fourohfour" role="main">
	<div class="row">
=======
<div id="content" class="fullspread fourohfour">
	<main id="content-primary" role="main">
>>>>>>> refs/heads/local-customisation:frank/404.php
		<header>
			<h1>
			  <?php _e('Page Not Found', 'frank_theme'); ?>
			</h1>
		</header>
	</div>
	<div class="row">
		<div id="content-primary">
			<div class="six columns">
					<p class="large">
					<?php
					  $home_link = sprintf('<a href="%s" title="%s">%s</a>',
					                      home_url(),
					                      get_bloginfo('name'),
					                      _x('home', 'home_link_text', 'frank_theme'));
					  echo sprintf(__('Unfortunately, the page you are looking for no longer exists or never existed in the first place. If you reached this page in error, you can go %s and start over.', 'frank_theme'), $home_link);
					?>
					</p>
				</div>
				<div class="six columns search">
					<p class="large">
					<?php
					  _e('If you believe this page exists, please try searching for the page in the search input below.', 'frank_theme');
					?>
					</p>
					<?php get_search_form(); ?>
				</div>
		</div>
<<<<<<< HEAD:404.php
	</div>
</main>
=======
	</main>
</div>
>>>>>>> refs/heads/local-customisation:frank/404.php
<?php get_footer(); ?>