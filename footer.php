  <footer>
  	<div class="conts" id="conts">
  		<div class="contain">
  			<div class="conts__row">
  				<div class="conts__l">
  					<h2 class="h2">Контакты</h2>
  					<div class="conts__item">
  						<div class="conts__lbl">Телефон</div>
  						<a href="tel:<?php the_field('phone', 'option'); ?>" class="conts__phone"><?php the_field('phone', 'option'); ?></a>
  					</div>
  					<div class="conts__item">
  						<div class="conts__lbl">Адрес:</div>  						
  						<p class="conts__adress">
  							<?php the_field('adres', 'option'); ?>
  						</p>
  					</div>
  					<div class="copy">  						
  						<?php the_field('copy', 'option'); ?>
  					</div>
  				</div>
  				<div class="conts__r">  					
  					<div class="conts__map">
  						<?php the_field('map', 'option'); ?>  						
  					</div>
  					<div class="conts__form-w">
  						<div class="cform__title">Написать нам</div>
  						<div class="cform__text">Заполните форму и в течение 15 минут с вами свяжется наш специалист</div>

  						<div class="conts__form">
  							<?php echo do_shortcode('[contact-form-7 id="e73a45e" title="form1"]'); ?>
  						</div>  						
  						<div class="form-bg"><img src="<? bloginfo('template_url') ?>/img/form-bg.png" /></div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </footer>
  <a href="#header" class="serv-arr-up"></a>    
</div>
<!--wrapper-->
<script src="<? bloginfo('template_url') ?>/js/jquery-3.4.1.min.js"></script>
<script src="<? bloginfo('template_url') ?>/js/jquery.fancybox.min.js"></script>
<script src="<? bloginfo('template_url') ?>/js/jquery.maskedinput.min.js"></script>
<script src="<? bloginfo('template_url') ?>/js/common.js"></script>
<? wp_footer(); ?>
</body>
</html>