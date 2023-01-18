<!doctype html>
<html lang="en" class="_scroll-behavior">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
    <title><?php wp_title(' - ', 'echo', 'right'); ?></title>
</head>

<body>
	<?php $nav = get_field('header', 'options'); ?>
	<header class="header">
		<div class="container">
			<div class="header__wrapper">
				<a class="header__logo" href="/"><img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/logo.svg" alt="logo" class="header__logo-img"></a>
				<nav class="header__parts">
					<?php if($nav['nav']) : ?>
						<?php foreach($nav['nav'] as $link) : ?>
							<a href="<?= '#' . $link['link']; ?>" class="header__part-link"><?= $link['linkText']; ?></a>
						<?php endforeach; ?>
					<?php endif; ?>
				</nav>
				<div class="header__right-wrapper">
					<ul class="header__langs">
						<?php
							$args = array(
								'dropdown'               => 0, // displays a list if set to 0, a dropdown list if set to 1 (default: 0)
								'show_names'             => 1, // displays language names if set to 1 (default: 1)
								'display_names_as'       => 'slug', // either ‘name’ or ‘slug’ (default: ‘name’)
								'show_flags'             => 0, // displays flags if set to 1 (default: 0)
								'hide_if_empty'          => 1, // hides languages with no posts (or pages) if set to 1 (default: 1)
								'force_home'             => 0, // forces link to homepage if set to 1 (default: 0)
								'echo'                   => 1, // echoes if set to 1, returns a string if set to 0 (default: 1)
								'hide_if_no_translation' => 1, // hides the language if no translation exists if set to 1 (default: 0)
								'hide_current'           => 0, // hides the current language if set to 1 (default: 0)
								'post_id'                => null, // if set, displays links to translations of the post (or page) defined by post_id (default: null)
								'raw'                    => 0, // use this to create your own custom language switcher (default:0)
							);
							pll_the_languages( $args );
						?>
					</ul>
					<img tabindex="0" src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/burger.svg" alt="burger" class="header__burger"></img>
				</div>
			</div>
		</div>
	</header>
