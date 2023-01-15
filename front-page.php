<?php get_header(); ?>
<main>
    <?php
        $banner = get_field('banner');
    ?>
		<div class="main-video">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/videos/main-video.gif" alt="main-video" class="main-video__video">
			<div class="container main-video__text-cntnr">
				<h1 class="main-video__text">
                    <?php echo $banner['title']; ?>
                </h1>
			</div>
		</div>
		<div class="about">
			<div class="container">
				<div class="about__wrapper">
					<div class="about__comp">
						<div class="about__title-wrapper">
							<p class="about__title-about">About company</p>
							<h2 class="about__title">GRANULITE</h2>
						</div>
						<div class="about__text-wrapper">
							<p>Introducing energy-efficient lightweight aggregates - mineral microspheres, with a closed spherical shell and zero water absorption. They are used as components and additives in the production of goods and materials with light weight and resistance to high temperatures and high pressures. Microsphere-based products are used in the "Green Building" industry, in the production of composite materials with unique insulating properties.</p>
							<p>Our company supplies microspheres with more than 10 years of proven experience of successful application in industry - since 2010 GRANULITE microspheres have been accredited by producers of insulating, refractory materials and leading global energy service companies.</p>
						</div>
					</div>
					<div class="about__iso">
						<picture>
							<source src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/about-img.png">
							<img class="about__img" src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/about-img.webp" alt="about">
						</picture>
						<div class="about__iso-wrapper">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/iso.svg" alt="iso" class="about__iso-img">
							<p class="about__iso-text">Each stage of raw materials processing and final product production complies with the quality control system (ISO 9001:2015)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="products">
			<div class="container">
				<div class="products__wrapper">
					<div class="products__prods">
						<div class="products__title-wrapper">
							<p class="products__title-about">Technological microspheres</p>
							<h2 class="products__title">PRODUCTS</h2>
						</div>
						<p class="products__title-text">Our products are hollow mineral microspheres:</p>
						<ul class="products__text-wrapper">
							<li>GRANULITE™ are cenospheres obtained after processing and stabilization from renewable mineral resources of the electric power industry.</li>
							<li>GRANSPHERE™ — ceramic spheres from a composition of available natural raw materials and environmentally friendly volcanic glass. To date, the products are produced according to the developed technology for preparing raw materials based on natural volcanic glass and the improved technological process of its spherolization.</li>
						</ul>
					</div>
					<div class="products__benefits">
						<div class="products__ben-header">
							<p class="products__ben-title">BENEFITS</p>
							<p class="products__ben-info">Hollow spherolized mineral microspheres with a closed porosity provide:</p>
							<img class="products__img" src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/yin-yang.svg" alt="products">
						</div>
						<ul class="products__ben-wrapper">
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-hex.svg" alt="icon">
								<p>Homogeneous material with specified parameters</p>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-square.svg" alt="icon">
								<p>Optimal strength-to-density ratio</p>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-drop.svg" alt="icon">
								<p>"Zero" water absorption and high adhesion to binders and structural materials in challenging hydrobaric conditions</p>
							</li>
							<li>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-flame.svg" alt="icon">
								<p>High thermal insulation and fire resistance</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="videos">
			<div>
				<p></p>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/videos/video-01.gif" alt="balls">
			</div>
			<div>
				<p></p>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/videos/video-02.gif" alt="sphere">
			</div>
		</div>
		<div class="high-tech first">
			<div class="container">
				<div class="high-tech__wrapper">
					<div class="high-tech__header">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/gran-logo-01.svg" alt="granulite-logo">
						<div class="high-tech__header-wrapper">
							<h2>Granulite™</h2>
							<h3>High-tech cenospheres</h3>
						</div>
					</div>
					<div class="high-tech__img-wrapper">
						<span>01</span>
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-lightning.svg" alt="lightning">
							<p>energy saving products</p>
						</div>
						<picture>
							<source src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/energy-saving-01.png">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/energy-saving-01.webp" alt="saving-energy">
						</picture>
					</div>
					<div class="high-tech__text-wrapper">
						<p>Fine free flowing powder, consisting of homogeneous high-strength hollow spherical aluminosilicate particles. The production of stabilized cenospheres always requires careful selection, multi-stage processing of the original mineral raw materials.</p>
						<p>The patented Granulite production technology allows to obtain a pure product without impurities, with excellent insulating characteristics - aluminosilicate hollow microspheres "Granulite ™" with a high content of Al2O3, high heat resistance and an excellent strength-to-density ratio.</p>
						<p>Granulite™ cenospheres are used in aggressive and challenging thermobaric conditions, as a component of lightweight refractory and fire-retardant materials, energy efficient insulating building materials, with zero water absorption and low thermal conductivity.</p>
					</div>
					<h3>Granulite product range</h3>
					<p>We offer microspheres that are suitable for solving various technological tasks</p>
				</div>
			</div>
		</div>
		<div class="gran-tabs first">
			<div class="gran-tabs__container">
				<div class="gran-tabs__wrapper" data-slide="0">
					<div class="gran-tabs__tab gran-tab">
						<div class="gran-tab__btns">
							<button>
								<span>GRANULITE</span><span>500</span>
							</button>
							<button>
								<span>GRANULITE</span><span>300</span>
							</button>
							<button>
								<span>GRANULITE</span><span>150</span>
							</button>
						</div>
						<div class="gran-tab__header">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/text-around.svg" alt="text">
							<p>GRANULITE<span>500</span></p>
						</div>
						<div class="gran-tab__info">
							<ul class="gran-tab__props">
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-circle-grey.svg" alt="icon">
										<p>Particle size</p>
									</div>
									<p>500 µm</p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-grid-grey.svg" alt="icon">
										<p>Strength</p>
									</div>
									<p>3000-6000 psi</p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-square-grey.svg" alt="icon">
										<p>Shell hardness</p>
									</div>
									<p>6 (the Mohs scale)</p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-hex-grey.svg" alt="icon">
										<p>with Al<sub>2</sub>O<sub>3</sub></p>
									</div>
									<p>< 32-40%</p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-flame-purple.svg" alt="icon">
										<p>Melting point</p>
									</div>
									<p>1750°C</p>
								</li>
							</ul>
							<div class="gran-tab__img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/flame.svg" alt="flame">
								<div>
									<p>Melting<br>point</p>
									<p>1750°C</p>
								</div>
							</div>
						</div>
					</div>
					<div class="gran-tabs__tab gran-tab">
						<div class="gran-tab__btns">
							<button>
								<span>GRANULITE</span><span>500</span>
							</button>
							<button>
								<span>GRANULITE</span><span>300</span>
							</button>
							<button>
								<span>GRANULITE</span><span>150</span>
							</button>
						</div>
						<div class="gran-tab__header">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/text-around.svg" alt="text">
							<p>GRANULITE<span>300</span></p>
						</div>
						<div class="gran-tab__info">
							<ul class="gran-tab__props">
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-circle-grey.svg" alt="icon">
										<p>Particle size</p>
									</div>
									<p>300 µm</p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-hex-grey.svg" alt="icon">
										<p>with Al2O3</p>
									</div>
									<p>< 32-40%</p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-flame-purple.svg" alt="icon">
										<p>Melting point</p>
									</div>
									<p>1750°C</p>
								</li>
							</ul>
							<div class="gran-tab__img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/flame.svg" alt="flame">
								<div>
									<p>Melting<br>point</p>
									<p>1750°C</p>
								</div>
							</div>
						</div>
					</div>
					<div class="gran-tabs__tab gran-tab">
						<div class="gran-tab__btns">
							<button>
								<span>GRANULITE</span><span>500</span>
							</button>
							<button>
								<span>GRANULITE</span><span>300</span>
							</button>
							<button>
								<span>GRANULITE</span><span>150</span>
							</button>
						</div>
						<div class="gran-tab__header">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/text-around.svg" alt="text">
							<p>GRANULITE<span>150</span></p>
						</div>
						<div class="gran-tab__info">
							<ul class="gran-tab__props">
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-circle-grey.svg" alt="icon">
										<p>Particle size</p>
									</div>
									<p>150 µm (97-100%)</p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-hex-grey.svg" alt="icon">
										<p>with Al2O3</p>
									</div>
									<p>< 32-40%</p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-flame-purple.svg" alt="icon">
										<p>Melting point</p>
									</div>
									<p>1750°C</p>
								</li>
							</ul>
							<div class="gran-tab__img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/flame.svg" alt="flame">
								<div>
									<p>Melting<br>point</p>
									<p>1750°C</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="high-tech second">
			<div class="container">
				<div class="high-tech__wrapper">
					<div class="high-tech__header">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/gran-logo-02.svg" alt="granulite-logo">
						<div class="high-tech__header-wrapper">
							<h2>Gransphere™</h2>
							<h3> Ceramic spheres from mineral natural raw materials</h3>
						</div>
					</div>
					<div class="high-tech__img-wrapper">
						<span>02</span>
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-lightning.svg" alt="lightning">
							<p>energy saving products</p>
						</div>
						<picture>
							<source src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/energy-saving-02.png">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/energy-saving-02.webp" alt="saving-energy">
						</picture>
					</div>
					<div class="high-tech__text-wrapper">
						<p>GRANSPHERE ™ is a fully engineered product, a new step in the development of lightweight, energy-efficient microspherical aggregates from environmentally friendly and available mineral raw materials.</p>
						<p>Ceramic hollow microspheres with a completely closed surface, inert, strong and with high insulating power. The combination of properties allows the use of ceramic spheres in a wide variety of materials and industries, in order to save resources, reduce weight, as an excellent insulating component in modern energy-efficient materials resistant to high pressures and temperature fluctuations.</p>
						<p>GRANSPHERE ™ ceramic spheres are an excellent alternative to cenospheres. Automated and controlled production process allows you to adjust the main parameters of microspheres — density and size.</p>
					</div>
					<h3>GRANSPHERE product range</h3>
					<p>Ceramic spheres have a wide range of produced products</p>
				</div>
			</div>
		</div>
		<div class="gran-tabs second">
			<div class="gran-tabs__container">
				<div class="gran-tabs__wrapper" data-slide="0">
					<div class="gran-tabs__tab gran-tab">
						<div class="gran-tab__btns">
							<button>
								<span>GRANSPHERE</span><span>5000</span>
							</button>
							<button>
								<span>GRANSPHERE</span><span>4000</span>
							</button>
							<button>
								<span>GRANSPHERE</span><span>3000</span>
							</button>
						</div>
						<div class="gran-tab__header">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/text-around-2.svg" alt="text">
							<p>GRANSPHERE<span>5000</span></p>
						</div>
						<div class="gran-tab__info">
							<ul class="gran-tab__props">
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-cube-grey.svg" alt="icon">
										<p>Bulk density</p>
									</div>
									<p>420-450 kg/m<sup>3</sup></p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-circle-grey.svg" alt="icon">
										<p>Particle size (D50)</p>
									</div>
									<p>100 µm</p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-cube-white.svg" alt="icon">
										<p>Apparent density</p>
									</div>
									<p>0.83-0.85 g/cm<sup>3</sup></p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-weight.svg" alt="icon">
										<p>Operating pressure</p>
									</div>
									<p>5000 psi</p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-diamond-purple.svg" alt="icon">
										<p>Ratio of density and strength</p>
									</div>
								</li>
							</ul>
							<div class="gran-tab__img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/diamond.svg" alt="flame">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/diamond-tablet.svg" alt="flame">
								<div>
									<p>Ratio<br>of density<br>and<br>strength</p>
								</div>
							</div>
						</div>
					</div>
					<div class="gran-tabs__tab gran-tab">
						<div class="gran-tab__btns">
							<button>
								<span>GRANSPHERE</span><span>5000</span>
							</button>
							<button>
								<span>GRANSPHERE</span><span>4000</span>
							</button>
							<button>
								<span>GRANSPHERE</span><span>3000</span>
							</button>
						</div>
						<div class="gran-tab__header">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/text-around-2.svg" alt="text">
							<p>GRANSPHERE<span>4000</span></p>
						</div>
						<div class="gran-tab__info">
							<ul class="gran-tab__props">
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-cube-grey.svg" alt="icon">
										<p>Bulk density</p>
									</div>
									<p>420-450 kg/m<sup>3</sup></p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-circle-grey.svg" alt="icon">
										<p>Particle size (D50)</p>
									</div>
									<p>100 µm</p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-cube-white.svg" alt="icon">
										<p>Apparent density</p>
									</div>
									<p>0.80-0.83 g/cm<sup>3</sup></p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-weight.svg" alt="icon">
										<p>Operating pressure</p>
									</div>
									<p>4000 psi</p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-diamond-purple.svg" alt="icon">
										<p>Ratio of density and strength</p>
									</div>
								</li>
							</ul>
							<div class="gran-tab__img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/diamond.svg" alt="flame">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/diamond-tablet.svg" alt="flame">
								<div>
									<p>Ratio<br>of density<br>and<br>strength</p>
								</div>
							</div>
						</div>
					</div>
					<div class="gran-tabs__tab gran-tab">
						<div class="gran-tab__btns">
							<button>
								<span>GRANSPHERE</span><span>5000</span>
							</button>
							<button>
								<span>GRANSPHERE</span><span>4000</span>
							</button>
							<button>
								<span>GRANSPHERE</span><span>3000</span>
							</button>
						</div>
						<div class="gran-tab__header">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/text-around-2.svg" alt="text">
							<p>GRANSPHERE<span>3000</span></p>
						</div>
						<div class="gran-tab__info">
							<ul class="gran-tab__props">
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-cube-grey.svg" alt="icon">
										<p>Bulk density</p>
									</div>
									<p>350-400 kg/m<sup>3</sup></p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-circle-grey.svg" alt="icon">
										<p>Particle size (D50)</p>
									</div>
									<p>120 µm</p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-cube-white.svg" alt="icon">
										<p>Apparent density</p>
									</div>
									<p>0.76-0.80 g/cm<sup>3</sup></p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-weight.svg" alt="icon">
										<p>Operating pressure</p>
									</div>
									<p>3000 psi</p>
								</li>
								<li>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-diamond-purple.svg" alt="icon">
										<p>Ratio of density and strength</p>
									</div>
								</li>
							</ul>
							<div class="gran-tab__img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/diamond.svg" alt="flame">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/diamond-tablet.svg" alt="flame">
								<div>
									<p>Ratio<br>of density<br>and<br>strength</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <?php if( have_rows('lab') ): ?>
        <div class="lab swiper">
        <div class="lab__wrapper swiper-wrapper">
            <?php while ( have_rows('lab') ) : the_row(); ?>
            <div class="lab__slide swiper-slide">
                <div class="lab__left">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-scheme.svg" alt="scheme">
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
		<div class="prod">
			<div class="container">
				<div class="prod__wrapper">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/location.svg" alt="location">
					<div class="prod__cycle">
						<div class="prod__title-wrapper">
							<p>Full cycle</p>
							<h2>PRODUCTION</h2>
						</div>
						<div class="prod__content">
							<div class="prod__text-wrapper">
								<p>The main sources of "white cenosphere" pure raw material of Aksu HPP and all processing from harvesting to the production of a full cycle of microspheres are carried out by TOO Kazcenospheres, Republic of Kazakhstan, Pavlodar region.</p>
								<p>TOO Kazcenospheres executes a full cycle production of "Granulite" microspheres from selection and procurement of raw material, its stabilization, to final processing, followed by the release of a wide rangeof high-quality lightening microspherical additives.</p>
							</div>
							<div class="prod__process">
								<p>Innovative production<br>process</p>
								<ul>
									<li><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-leaf-blue.svg" alt="marker">Full automated control of the raw material used, the procedure of its processing and the properties of the final product (adjustable strength and density)</li>
									<li><img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-leaf-blue.svg" alt="marker">Minimal energy consumption</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="prod-swiper">
			<div class="container">
				<div class="prod-swiper__swiper swiper">
					<div class="swiper-wrapper">
						<div class="prod-swiper__slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/prod-1.jpg" alt="prod-img">
						</div>
						<div class="prod-swiper__slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/prod-2.jpg" alt="prod-img">
						</div>
						<div class="prod-swiper__slide swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/prod-3.jpg" alt="prod-img">
						</div>
					</div>
					<div class="prod-swiper__btns">
						<div class="prod-swiper__prev swiper-button-prev"></div>
						<div class="prod-swiper__next swiper-button-next"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="eco">
			<picture>
				<source src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/ecology.jpg">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/ecology.webp" alt="ecology-img">
			</picture>
			<div class="container">
				<div class="eco__wrapper">
					<div class="eco__natural">
						<div class="eco__title-wrapper">
							<p>Natural ingredients</p>
							<h2>ECOLOGY AND EFFICIENCY</h2>
						</div>
						<div class="eco__content">
							<div class="eco__text-wrapper">
								<p>The production is based on the use of available pure natural mineral raw materials, as well as the waste-free use of renewable mineral resources.</p>
								<div>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-triangle-green.svg" alt="icon">
									</div>
									<p>Transfer of energy in the processes of heat treatment with IR radiation (without heat loss)</p>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-leaf-green.svg" alt="icon">
									</div>
									<p>Environmentally friendly technologies for processing mineral raw materials. Closed production cycle</p>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-lightning-green.svg" alt="icon">
									</div>
									<p>Technological processes run by electricity</p>
									<div>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-arrow-green.svg" alt="icon">
									</div>
									<p>Complete absence of exhaust flue gases, low noise and dust levels</p>
								</div>
							</div>
							<div class="eco__iso">
								<div class="eco__iso-wrapper">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/iso.svg" alt="iso">
									<p>With integrated raw material sourcing, production processes and logistics, the highest quality standards are ensured throughout the entire supply chain.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ads">
			<div class="container">
				<div class="ads__wrapper">
					<ul class="ads__list">
						<div>
							<p>Advantages of choice</p>
							<h2>Efficiency of microspheres application</h2>
						</div>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-ok-black.svg" alt="icon">
							<div>
								<p>
									Economic effect
									<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.00391 0.883488L8.1123 6.99188L2.00391 13.1003" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</p>
								<div>
									<p>Reduce the consumption rate of expensive binders and components in the compositions.</p>
								</div>
							</div>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-circle.svg" alt="icon">
							<div>
								<p>
									Spherical shape
									<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.00391 0.883488L8.1123 6.99188L2.00391 13.1003" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</p>
								<div>
									<p>Spherical shape of the microspheres helps to reduce the viscosity of the resulting composites, improves the fluidity of materials, provides better distribution and efficient filling of particles, as well as reduced shrinkage.</p>
								</div>
							</div>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-flame.svg" alt="icon">
							<div>
								<p>
									Refractoriness
									<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.00391 0.883488L8.1123 6.99188L2.00391 13.1003" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</p>
								<div>
									<p>The high melting point of microspheres makes them highly sought after by manufacturers of refractory materials, as it increases the thermal stability of materials to which microspheres are added, with relatively small linear changes.</p>
								</div>
							</div>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-grid.svg" alt="icon">
							<div>
								<p>
									Strength
									<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.00391 0.883488L8.1123 6.99188L2.00391 13.1003" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</p>
								<div>
									<p>The unique combination of "superlightness" and "strength" of microspheres allows the production of lightweight cements with a density of up to 1200 kg/m3 with stable and controllable parameters.</p>
									<p>Due to their compressive strength, microsphere particles withstand high pressure conditions without loss of cement density and have higher strength compared to similar and more expensive industrial glass microspheres, providing approximately 25% weight loss compared to traditional mineral fillers.</p>
								</div>
							</div>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-wifi.svg" alt="icon">
							<div>
								<p>
									Heat and sound insulation
									<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.00391 0.883488L8.1123 6.99188L2.00391 13.1003" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</p>
								<div>
									<p>Due to their low sound and heat conductivity, microspheres can be used as excellent insulating materials.</p>
								</div>
							</div>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/icon-yin-yang.svg" alt="icon">
							<div>
								<p>
									Resistance to aggressive environment
									<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.00391 0.883488L8.1123 6.99188L2.00391 13.1003" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
								</p>
								<div>
									<p>Can be used in a number of materials providing high resistance to acids and alkalis.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="app swiper">
			<div class="app__wrapper swiper-wrapper">
				<div class="app__slide swiper-slide">
					<div class="app__app">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/app-1.jpg" alt="app-img">
						<div class="app__title-wrapper">
							<p>Cenospheres and ceramospheres</p>
							<h2>APPLICATION</h2>
						</div>
						<div class="app__text-wrapper">
							<p>Our lightweight additives meet the requirements for the development of new composite materials designed for long-term operation in challenging conditions at high temperatures, heavy and varied mechanical loads. Any technical problem that requires weight reduction with low thermal conductivity, high strength, smaller volume, increased resistance to erosion and aggressive environments can be solved using cenospheres and ceramospheres.</p>
							<p>Our microspheres are in high demand among manufacturers of refractories and flame retardants, polyurethane, polyester, epoxy resins, PVC, construction, paints, abrasives, mortars, automotive, mastic and flotation products.</p>
						</div>
					</div>
					<div class="app__materials">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/app-2.jpg" alt="app-img">
						<p>Construction Materials</p>
						<ul>
							<li>Sealants and adhesives</li>
							<li>Filler</li>
							<li>Adhesives for tiles, putties, grouts</li>
							<li>Floor grouts</li>
							<li>Light/insulating and fire-fighting plasters</li>
							<li>Lightweight concrete</li>
							<li>Heat and sound insulation panels</li>
							<li>Dry masonry</li>
							<li>Fiber cement boards</li>
							<li>Bituminous materials</li>
						</ul>
					</div>
				</div>
				<div class="app__slide swiper-slide">
					<div class="app__app">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/app-3.jpg" alt="app-img">
						<div class="app__title-wrapper">
							<p>Cenospheres and ceramospheres</p>
							<h2>APPLICATION</h2>
						</div>
						<div class="app__text-wrapper">
							<p>Our lightweight additives meet the requirements for the development of new composite materials designed for long-term operation in challenging conditions at high temperatures, heavy and varied mechanical loads. Any technical problem that requires weight reduction with low thermal conductivity, high strength, smaller volume, increased resistance to erosion and aggressive environments can be solved using cenospheres and ceramospheres.</p>
							<p>Our microspheres are in high demand among manufacturers of refractories and flame retardants, polyurethane, polyester, epoxy resins, PVC, construction, paints, abrasives, mortars, automotive, mastic and flotation products.</p>
						</div>
					</div>
					<div class="app__materials">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/app-4.jpg" alt="app-img">
						<p>Refractory materials</p>
						<ul>
							<li>Refractory bricks</li>
							<li>Lightweight refractories</li>
							<li>Fire resistant coatings</li>
							<li>Fire retardant coatings</li>
						</ul>
					</div>
				</div>
				<div class="app__slide swiper-slide">
					<div class="app__app">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/app-5.jpg" alt="app-img">
						<div class="app__title-wrapper">
							<p>Cenospheres and ceramospheres</p>
							<h2>APPLICATION</h2>
						</div>
						<div class="app__text-wrapper">
							<p>Our lightweight additives meet the requirements for the development of new composite materials designed for long-term operation in challenging conditions at high temperatures, heavy and varied mechanical loads. Any technical problem that requires weight reduction with low thermal conductivity, high strength, smaller volume, increased resistance to erosion and aggressive environments can be solved using cenospheres and ceramospheres.</p>
							<p>Our microspheres are in high demand among manufacturers of refractories and flame retardants, polyurethane, polyester, epoxy resins, PVC, construction, paints, abrasives, mortars, automotive, mastic and flotation products.</p>
						</div>
					</div>
					<div class="app__materials">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/app-6.jpg" alt="app-img">
						<p>Plastics and Composites</p>
						<ul>
							<li>Injection molding</li>
							<li>Composite materials</li>
							<li>Wood Plastic Composite Materials</li>
						</ul>
					</div>
				</div>
				<div class="app__slide swiper-slide">
					<div class="app__app">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/app-7.jpg" alt="app-img">
						<div class="app__title-wrapper">
							<p>Cenospheres and ceramospheres</p>
							<h2>APPLICATION</h2>
						</div>
						<div class="app__text-wrapper">
							<p>Our lightweight additives meet the requirements for the development of new composite materials designed for long-term operation in challenging conditions at high temperatures, heavy and varied mechanical loads. Any technical problem that requires weight reduction with low thermal conductivity, high strength, smaller volume, increased resistance to erosion and aggressive environments can be solved using cenospheres and ceramospheres.</p>
							<p>Our microspheres are in high demand among manufacturers of refractories and flame retardants, polyurethane, polyester, epoxy resins, PVC, construction, paints, abrasives, mortars, automotive, mastic and flotation products.</p>
						</div>
					</div>
					<div class="app__materials">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/app-8.jpg" alt="app-img">
						<p>Paints and coatings</p>
						<ul>
							<li>Powder coating</li>
							<li>Construction paints</li>
							<li>Heat reflective paints</li>
							<li>Airless putty</li>
						</ul>
					</div>
				</div>
				<div class="app__slide swiper-slide">
					<div class="app__app">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/app-9.jpg" alt="app-img">
						<div class="app__title-wrapper">
							<p>Cenospheres and ceramospheres</p>
							<h2>APPLICATION</h2>
						</div>
						<div class="app__text-wrapper">
							<p>Our lightweight additives meet the requirements for the development of new composite materials designed for long-term operation in challenging conditions at high temperatures, heavy and varied mechanical loads. Any technical problem that requires weight reduction with low thermal conductivity, high strength, smaller volume, increased resistance to erosion and aggressive environments can be solved using cenospheres and ceramospheres.</p>
							<p>Our microspheres are in high demand among manufacturers of refractories and flame retardants, polyurethane, polyester, epoxy resins, PVC, construction, paints, abrasives, mortars, automotive, mastic and flotation products.</p>
						</div>
					</div>
					<div class="app__materials">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/public/images/app-10.jpg" alt="app-img">
						<p>Modeling and restoration</p>
						<ul>
							<li>Putties</li>
							<li>Materials for the repair of yachts and cars</li>
							<li>Restoration materials</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="app__btns">
				<div class="app__prev swiper-button-prev"></div>
				<div class="app__next swiper-button-next"></div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>