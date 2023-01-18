<?php get_header(); ?>
<?php $nav = get_field('header', 'options'); ?>
<?php $navIds = []; ?>
<?php $navCounter = 0; ?>
<?php foreach($nav['nav'] as $link) array_push($navIds, $link['link']); ?>
<main>
    <?php $banner = get_field('banner'); ?>
		<div class="main-video">
			<img src="<?= get_template_directory_uri(); ?>/assets/dist/public/videos/main-video.gif" alt="main-video" class="main-video__video">
			<div class="container main-video__text-cntnr">
				<h1 class="main-video__text">
					<?= $banner['title']; ?>
				</h1>
			</div>
		</div>
	<?php $about = get_field('about'); ?>
	<?php if($about) : ?>
		<div class="about">
			<div class="container">
				<div class="about__wrapper">
					<div class="about__comp">
						<div class="about__title-wrapper">
							<?php if($about['subtitle']) : ?>
								<p class="about__title-about"><?= $about['subtitle']; ?></p>
							<?php endif; ?>
							<?php if($about['title']) : ?>
								<h2 class="about__title"><?= $about['title']; ?></h2>
							<?php endif; ?>
						</div>
						<div class="about__text-wrapper">
							<?php if($about['text']) : ?>
								<?= $about['text']; ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="about__iso">
						<picture>
							<source src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/about-img.png">
							<img class="about__img" src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/about-img.webp" alt="about">
						</picture>
						<?php if($about['img'] && $about['iso']) : ?>
						<div class="about__iso-wrapper">
							<img src="<?= $about['img']; ?>" alt="iso" class="about__iso-img">
							<p class="about__iso-text"><?= $about['iso']; ?></p>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php $prods = get_field('products'); ?>
	<?php $bens = get_field('benefits'); ?>
	<div id="<?= $navIds[$navCounter]; ?>" class="products">
		<div class="container">
			<div class="products__wrapper">
				<div class="products__prods">
				<?php if($prods) : ?>
					<div class="products__title-wrapper">
						<?php if($prods['subtitle']) : ?>
							<p class="products__title-about"><?= $prods['subtitle']; ?></p>
						<?php endif; ?>
						<?php if($prods['title']) : ?>
							<h2 class="products__title"><?= $prods['title']; ?></h2>
						<?php endif; ?>
					</div>
					<?php if($prods['textBeforeList']) : ?>
						<p class="products__title-text"><?= $prods['textBeforeList']; ?></p>
					<?php endif; ?>
					<?php if($prods['listItems']) : ?>
						<ul class="products__text-wrapper">
							<?php foreach($prods['listItems'] as $item) : ?>
								<li><?= $item['listItem']; ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				<?php endif; ?>
				</div>
				<div class="products__benefits">
				<?php if($bens) : ?>
					<div class="products__ben-header">
						<?php if($bens['title']) : ?>
							<p class="products__ben-title"><?= $bens['title'] ?></p>
						<?php endif; ?>
						<?php if($bens['textBeforeList']) : ?>
							<p class="products__ben-info"><?= $bens['textBeforeList'] ?></p>
						<?php endif; ?>
						<img class="products__img" src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/yin-yang.svg" alt="products">
					</div>
					<?php if($bens['listItems']) : ?>
						<ul class="products__ben-wrapper">
							<?php foreach($bens['listItems'] as $item) : ?>
								<li>
									<img src="<?= $item['icon']; ?>" alt="icon">
									<p><?= $item['listItem']; ?></p>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="videos">
		<div>
			<p></p>
			<img src="<?= get_template_directory_uri(); ?>/assets/dist/public/videos/video-01.gif" alt="balls">
		</div>
		<div>
			<p></p>
			<img src="<?= get_template_directory_uri(); ?>/assets/dist/public/videos/video-02.gif" alt="sphere">
		</div>
	</div>
	<?php $prod1 = get_field('prod1'); ?>
	<?php if($prod1) : ?>
		<div class="high-tech first">
			<div class="container">
				<div class="high-tech__wrapper">
					<div class="high-tech__header">
						<img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/gran-logo-01.svg" alt="granulite-logo">
						<div class="high-tech__header-wrapper">
							<?php if($prod1['title']) : ?>
								<h2><?= $prod1['title']; ?></h2>
							<?php endif; ?>
							<?php if($prod1['subtitle']) : ?>
								<h3><?= $prod1['subtitle']; ?></h3>
							<?php endif; ?>
						</div>
					</div>
					<div class="high-tech__img-wrapper">
						<span>01</span>
						<?php if($prod1['textUnderImg']) : ?>
							<div>
								<img src="<?= $prod1['icon']; ?>" alt="lightning">
								<p><?= $prod1['textUnderImg']; ?></p>
							</div>
						<?php endif; ?>
						<picture>
							<source src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/energy-saving-01.png">
							<img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/energy-saving-01.webp" alt="saving-energy">
						</picture>
					</div>
					<div class="high-tech__text-wrapper">
						<?php if($prod1['text']) : ?>
							<?= $prod1['text']; ?>
						<?php endif; ?>
					</div>
					<?php if($prod1['titleUnderText']) : ?>
						<h3><?= $prod1['titleUnderText']; ?></h3>
					<?php endif; ?>
					<?php if($prod1['textUnderText']) : ?>
						<p><?= $prod1['textUnderText']; ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php $prodTypes1 = get_field('prod1Types'); ?>
	<?php if($prodTypes1) : ?>
		<div class="gran-tabs first">
			<div class="gran-tabs__container">
				<div class="gran-tabs__wrapper" data-slide="0">
					<?php
						$tabs = [];
						foreach($prodTypes1 as $item) array_push($tabs, [$item['minorTabText'], $item['mainTabText']]);
					?>
					<?php foreach($prodTypes1 as $item) : ?>
						<div class="gran-tabs__tab gran-tab">
							<div class="gran-tab__btns">
								<button>
									<span><?= $tabs[0][0]; ?></span>
									<span><?= $tabs[0][1]; ?></span>
								</button>
								<button>
									<span><?= $tabs[1][0]; ?></span>
									<span><?= $tabs[1][1]; ?></span>
								</button>
								<button>
									<span><?= $tabs[2][0]; ?></span>
									<span><?= $tabs[2][1]; ?></span>
								</button>
							</div>
							<?php if($item['title']) : ?>
								<?php
									$index = strripos($item['title'], ' ');
									$leftT = ($index) ? substr($item['title'], 0, $index) : $item['title'];
									$rightT = ($index) ? substr($item['title'], $index+1, strlen($item['title']) - $index) : null;
								?>
								<div class="gran-tab__header">
									<img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/text-around.svg" alt="text">
									<p><?= $leftT; ?><?php if($rightT) : ?><span><?= $rightT; ?></span><?php endif; ?></p>
								</div>
							<?php endif; ?>
							<?php if($item['props']) : ?>
								<?php $lastProp; ?>
								<div class="gran-tab__info">
									<ul class="gran-tab__props">
										<?php foreach($item['props'] as $prop) : ?>
											<?php $lastProp = [$prop['name'], $prop['val']]; ?>
											<li>
												<div>
													<img src="<?= $prop['icon']; ?>" alt="icon">
													<p><?= $prop['name']; ?></p>
												</div>
												<?php if($prop['val']) : ?>
													<p><?= $prop['val']; ?></p>
												<?php endif; ?>
											</li>
										<?php endforeach; ?>
									</ul>
									<div class="gran-tab__img">
										<img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/flame.svg" alt="flame">
										<div>
											<?php if($lastProp[0]) : ?>
												<p><?= $lastProp[0]; ?></p>
											<?php endif; ?>
											<?php if($lastProp[1]) : ?>
												<p><?= $lastProp[1]; ?></p>
											<?php endif; ?>
										</div>
									</div>
								</div>
							<?php endif; ?>
						</div>	
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php $prod2 = get_field('prod2'); ?>
	<?php if($prod2) : ?>
		<div class="high-tech second">
			<div class="container">
				<div class="high-tech__wrapper">
					<div class="high-tech__header">
						<img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/gran-logo-02.svg" alt="granulite-logo">
						<div class="high-tech__header-wrapper">
							<?php if($prod2['title']) : ?>
								<h2><?= $prod2['title']; ?></h2>
							<?php endif; ?>
							<?php if($prod2['subtitle']) : ?>
								<h3><?= $prod2['subtitle']; ?></h3>
							<?php endif; ?>
						</div>
					</div>
					<div class="high-tech__img-wrapper">
						<span>02</span>
						<?php if($prod2['textUnderImg']) : ?>
							<div>
								<img src="<?= $prod2['icon']; ?>" alt="lightning">
								<p><?= $prod2['textUnderImg']; ?></p>
							</div>
						<?php endif; ?>
						<picture>
							<source src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/energy-saving-02.png">
							<img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/energy-saving-02.webp" alt="saving-energy">
						</picture>
					</div>
					<div class="high-tech__text-wrapper">
						<?php if($prod2['text']) : ?>
							<?= $prod2['text']; ?>
						<?php endif; ?>
					</div>
					<?php if($prod2['titleUnderText']) : ?>
						<h3><?= $prod2['titleUnderText']; ?></h3>
					<?php endif; ?>
					<?php if($prod2['textUnderText']) : ?>
						<p><?= $prod2['textUnderText']; ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php $prodTypes2 = get_field('prod2Types'); ?>
	<?php if($prodTypes2) : ?>
		<div class="gran-tabs second">
			<div class="gran-tabs__container">
				<div class="gran-tabs__wrapper" data-slide="0">
				<?php
					$tabs = [];
					foreach($prodTypes2 as $item) array_push($tabs, [$item['minorTabText'], $item['mainTabText']]);
				?>
				<?php foreach($prodTypes2 as $item) : ?>
					<div class="gran-tabs__tab gran-tab">
						<div class="gran-tab__btns">
							<button>
								<span><?= $tabs[0][0]; ?></span>
								<span><?= $tabs[0][1]; ?></span>
							</button>
							<button>
								<span><?= $tabs[1][0]; ?></span>
								<span><?= $tabs[1][1]; ?></span>
							</button>
							<button>
								<span><?= $tabs[2][0]; ?></span>
								<span><?= $tabs[2][1]; ?></span>
							</button>
						</div>
						<?php if($item['title']) : ?>
							<?php
								$index = strripos($item['title'], ' ');
								$leftT = ($index) ? substr($item['title'], 0, $index) : $item['title'];
								$rightT = ($index) ? substr($item['title'], $index+1, strlen($item['title']) - $index) : null;
							?>
							<div class="gran-tab__header">
								<img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/text-around-2.svg" alt="text">
								<p><?= $leftT; ?><?php if($rightT) : ?><span><?= $rightT; ?></span><?php endif; ?></p>
							</div>
						<?php endif; ?>
						<?php if($item['props']) : ?>
							<?php $lastProp; ?>
							<div class="gran-tab__info">
								<ul class="gran-tab__props">
									<?php foreach($item['props'] as $prop) : ?>
										<?php $lastProp = [$prop['name'], $prop['val']]; ?>
										<li>
											<div>
												<img src="<?= $prop['icon']; ?>" alt="icon">
												<p><?= $prop['name']; ?></p>
											</div>
											<?php if($prop['val']) : ?>
												<p><?= $prop['val']; ?></p>
											<?php endif; ?>
										</li>
									<?php endforeach; ?>
								</ul>
								<div class="gran-tab__img">
									<img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/diamond.svg" alt="flame">
									<img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/diamond-tablet.svg" alt="flame">
									<div>
										<?php if($lastProp[0]) : ?>
											<p><?= $lastProp[0]; ?></p>
										<?php endif; ?>
										<?php if($lastProp[1]) : ?>
											<p><?= $lastProp[1]; ?></p>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if( have_rows('lab') ): ?>
		<?php $navCounter++; ?>
		<div id="<?= $navIds[$navCounter]; ?>" class="lab swiper">
			<div class="lab__wrapper swiper-wrapper">
				<?php while ( have_rows('lab') ) : the_row(); ?>
					<div class="lab__slide swiper-slide">
						<div class="lab__left">
							<img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/icon-scheme.svg" alt="scheme">
							<div>
								<p><?php the_sub_field('subtitle'); ?></p>
								<p><?php the_sub_field('title'); ?></p>
							</div>
							<p><?php the_sub_field('text'); ?></p>
						</div>
						<div class="lab__right">
							<img src="<?php the_sub_field('image'); ?>" alt="lab">
						</div>
					</div>
				<?php endwhile; ?>
			</div>
			<div class="lab__btns">
				<div class="lab__prev swiper-button-prev"></div>
				<div class="lab__next swiper-button-next"></div>
			</div>
		</div>
	<?php endif; ?>
	<?php $prod = get_field('prod'); ?>
	<?php if($prod) : ?>
		<?php $navCounter++; ?>
		<div id="<?= $navIds[$navCounter]; ?>" class="prod">
			<div class="container">
				<div class="prod__wrapper">
					<img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/location.svg" alt="location">
					<div class="prod__cycle">
						<div class="prod__title-wrapper">
							<?php if($prod['subtitle']) : ?>
								<p><?= $prod['subtitle']; ?></p>
							<?php endif; ?>
							<?php if($prod['title']) : ?>
								<h2><?= $prod['title']; ?></h2>
							<?php endif; ?>
						</div>
						<div class="prod__content">
							<div class="prod__text-wrapper">
								<?php if($prod['text']) : ?>
									<?= $prod['text']; ?>
								<?php endif; ?>
							</div>
							<div class="prod__process">
								<?php if($prod['list']) : ?>
									<p><?= $prod['list']; ?></p>
								<?php endif; ?>
								<?php if($prod['items']) : ?>
									<ul>
										<?php foreach($prod['items'] as $item) : ?>
											<li><img src="<?= $prod['icon']; ?>" alt="marker"><?= $item['item']; ?></li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php $prodGallery = get_field('prodGallery'); ?>
	<?php if($prodGallery) : ?>
		<div class="prod-swiper">
			<div class="container">
				<div class="prod-swiper__swiper swiper">
					<div class="swiper-wrapper">
						<?php foreach($prodGallery as $img) : ?>
							<div class="prod-swiper__slide swiper-slide">
								<img src="<?= $img['img']; ?>" alt="prod-img">
							</div>
						<?php endforeach; ?>
					</div>
					<div class="prod-swiper__btns">
						<div class="prod-swiper__prev swiper-button-prev"></div>
						<div class="prod-swiper__next swiper-button-next"></div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php $eco = get_field('eco'); ?>
	<?php if($eco) : ?>
		<div class="eco">
			<picture>
				<source src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/ecology.jpg">
				<img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/ecology.webp" alt="ecology-img">
			</picture>
			<div class="container">
				<div class="eco__wrapper">
					<div class="eco__natural">
						<div class="eco__title-wrapper">
							<?php if($eco['subtitle']) : ?>
								<p><?= $eco['subtitle']; ?></p>
							<?php endif; ?>
							<?php if($eco['title']) : ?>
								<h2><?= $eco['title']; ?></h2>
							<?php endif; ?>
						</div>
						<div class="eco__content">
							<div class="eco__text-wrapper">
								<?php if($eco['textBeforeList']) : ?>
									<p><?= $eco['textBeforeList']; ?></p>
								<?php endif; ?>
								<?php if($eco['list']) : ?>
								<div>
									<?php foreach($eco['list'] as $item) : ?>
										<div>
											<img src="<?= $item['icon']; ?>" alt="icon">
										</div>
										<p><?= $item['item']; ?></p>
									<?php endforeach; ?>
								</div>
								<?php endif; ?>
							</div>
							<div class="eco__iso">
								<?php if($eco['isoImg'] && $eco['isoText']) : ?>
									<div class="eco__iso-wrapper">
										<img src="<?= $eco['isoImg']; ?>" alt="iso">
										<p><?= $eco['isoText']; ?></p>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php $ads = get_field('ads'); ?>
	<?php if($ads) : ?>
		<div class="ads">
			<div class="container">
				<div class="ads__wrapper">
					<ul class="ads__list">
						<div>
							<?php if($ads['subtitle']) : ?>
								<p><?= $ads['subtitle']; ?></p>
							<?php endif; ?>
							<?php if($ads['title']) : ?>
								<h2><?= $ads['title']; ?></h2>
							<?php endif; ?>
						</div>
						<?php if($ads['list']) : ?>
							<?php foreach($ads['list'] as $item) : ?>
							<li>
								<img src="<?= $item['icon']; ?>" alt="icon">
								<div>
									<p>
										<?= $item['itemTitle']; ?>
										<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M2.00391 0.883488L8.1123 6.99188L2.00391 13.1003" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</p>
									<div>
									<?= $item['itemText']; ?>
									</div>
								</div>
							</li>
							<?php endforeach; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php $app = get_field('app'); ?>
	<?php if($app['appSlide']) : ?>
		<?php $navCounter++; ?>
		<div id="<?= $navIds[$navCounter]; ?>" class="app swiper">
			<div class="app__wrapper swiper-wrapper">
				<?php foreach($app['appSlide'] as $item) : ?>
					<div class="app__slide swiper-slide">
						<div class="app__app">
							<img src="<?= $item['imgLeft']; ?>" alt="app-img">
							<div class="app__title-wrapper">
								<?php if($item['subtitle']) : ?>
									<p><?= $item['subtitle']; ?></p>
								<?php endif; ?>
								<?php if($item['title']) : ?>
									<h2><?= $item['title']; ?></h2>
								<?php endif; ?>
							</div>
							<div class="app__text-wrapper">
								<?php if($item['about']) : ?>
									<?= $item['about']; ?>
								<?php endif; ?>
							</div>
						</div>
						<div class="app__materials">
							<img src="<?= $item['imgRight']; ?>" alt="app-img">
							<?php if($item['listTitle']) : ?>
								<p><?= $item['listTitle']; ?></p>
							<?php endif; ?>
							<?php if($item['list']) : ?>
								<ul>
									<?php foreach($item['list'] as $li) : ?>
										<li><?= $li['item']; ?></li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="app__btns">
				<div class="app__prev swiper-button-prev"></div>
				<div class="app__next swiper-button-next"></div>
			</div>
		</div>
	<?php endif; ?>
	</main>
<?php get_footer(); ?>