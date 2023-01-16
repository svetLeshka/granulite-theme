<?php $footer = get_field('footer', 'options');?>
<footer class="footer">
		<div class="container">
			<div class="footer__wrapper">
				<a href="#!"><img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/logo.svg" alt="logo"></a>
				<div>
					<div></div>
					<div>
						<img src="<?= get_template_directory_uri(); ?>/assets/dist/public/images/icon-tel.svg" alt="telephone">
						<div>
                            <?php if($footer['phones']) : ?>
                                <?php foreach ($footer['phones'] as $phone) : ?>
                                    <a href="tel:<?= $phone['phone']; ?>"><?= $phone['phone']; ?></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
						</div>
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
						<p>«GRANULITE» CJSC © 2022</p>
					</div>
					<div>
						<p>Chamber of Commerce (KvK)</p>
						<p>67422519</p>
					</div>
					<div>
						<p>VAT Number</p>
						<p>NL002491305B72</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
    <?php wp_footer(); ?>
</body>

</html>