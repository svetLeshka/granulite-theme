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
	<header class="header">
		<div class="container">
			<div class="header__wrapper">
				<a class="header__logo" href="/"><img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/logo.svg" alt="logo" class="header__logo-img"></a>
				<nav class="header__parts">
					<a href="#!" class="header__part-link">PRODUCTS</a>
					<a href="#!" class="header__part-link">R&D</a>
					<a href="#!" class="header__part-link">PRODUCTION</a>
					<a href="#!" class="header__part-link">APPLICATION</a>
					<a href="#!" class="header__part-link">CONTACTS</a>
				</nav>
				<div class="header__right-wrapper">
					<button class="header__langs">
						<span class="header__lang">EN</span>
						<div class="header__lang-sep"></div>
						<span class="header__lang active">DE</span>
					</button>
                    <?php if(function_exists ( 'wpm_language_switcher' )) :
                        wpm_language_switcher ('select');
                    endif; ?>
					<img tabindex="0" src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/burger.svg" alt="burger" class="header__burger"></img>
				</div>
			</div>
		</div>
	</header>
