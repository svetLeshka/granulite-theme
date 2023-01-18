<?php $footer = get_field('footer', 'options');?>
<?php $nav = get_field('header', 'options'); ?>
<?php $navIds = []; ?>
<?php foreach($nav['nav'] as $link) array_push($navIds, $link['link']); ?>
<?php $navCounter = count($navIds)-1; ?>
<footer id="<?= $navIds[$navCounter]; ?>" class="footer">
		<div class="container">
			<div class="footer__wrapper">
				<a href="#!"><img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/logo.svg" alt="logo"></a>
				<div>
					<div></div>
					<div>
						<?php if($footer['phones']) : ?>
							<img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/icon-tel.svg" alt="telephone">
							<div>
								<?php foreach ($footer['phones'] as $phone) : ?>
									<a href="tel:<?= $phone['phone']; ?>"><?= $phone['phone']; ?></a>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
					<div>
                        <?php if($footer['mails']) : ?>
                            <?php foreach ($footer['mails'] as $mail) : ?>
                                <a href="mailto:<?= $mail['mail']; ?>"><?= $mail['mail']; ?></a>
                            <?php endforeach; ?>
                        <?php endif; ?>
					</div>
					<div>
                        <?php if($footer['address']): ?>
						    <img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/icon-location.svg" alt="location">
						    <p><?= $footer['address']; ?></p>
                        <?php endif; ?>
					</div>
					<div>
						<?php if($footer['copyright']) : ?>
							<p><?= $footer['copyright']; ?></p>
						<?php endif; ?>
					</div>
					<div>
						<?php if($footer['CoC']) : ?>
							<?php $CoC = $footer['CoC']; ?>
							<?php if($CoC['title']) : ?>
								<p><?= $CoC['title']; ?></p>
							<?php endif; ?>
							<?php if($CoC['number']) : ?>
								<p><?= $CoC['number']; ?></p>
							<?php endif; ?>
						<?php endif; ?>
					</div>
					<div>
						<?php if($footer['nds']) : ?>
							<?php $nds = $footer['nds']; ?>
							<?php if($nds['title']) : ?>
								<p><?= $nds['title']; ?></p>
							<?php endif; ?>
							<?php if($nds['number']) : ?>
								<p><?= $nds['number']; ?></p>
							<?php endif; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</footer>
    <?php wp_footer(); ?>
</body>

</html>