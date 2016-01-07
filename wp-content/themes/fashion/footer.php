<div class="footer-wrapper">
	<div class="footer-main">
		<?php if(!dynamic_sidebar(footer)):?>
			<div class="footer-left">
				<p>Здесь место для копирайта. Добавляется через виджет текст</p>
			</div>
			<div class="footer-right">
				<p style="color: #fefcfc;">Место для социальных сетей. Добавляется через виджет текст</p>
			</div>
		<?php endif; ?>
	</div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquerypp.custom.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.elastislide.js"></script>
<script type="text/javascript">
	
	$( '#carousel' ).elastislide();
	
</script>
<?php wp_footer();?>
</body>
</html>  