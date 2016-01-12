<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>" />

<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/liSlidik.css" />
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/liSlidik.blackClasic.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
	$(function() {
		var pull 		= $('#pull');
			menu 		= $('#menu ul');
			menuHeight	= menu.height();

		$(pull).on('click', function(e) {
			e.preventDefault();
			menu.slideToggle();
		});

		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	});
</script>



<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->

<!--[if lte IE 9]>
  <style type="text/css">
  	body{
    	background:url(images/body-bg-ie.png) repeat-x 0 730px;
    }
  	.menu, .elastislide-wrapper{
    	background:url(images/opacity.png);
    }
   </style>
<![endif]-->
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<?php wp_head();?>
</head>
<body>
<div class="karkas">
	<div class="header">
		<a href="/"><img src="<?php bloginfo('template_url');?>/images/logo.png" class="logo" alt="Fashion photographer"/></a>
        <div id="menu">        
	   <?php wp_nav_menu(array(
            'theme_location' => 'menu',
            'container' => '',
            'menu_class' => 'menu menu-ex',
        )); ?>
		<a id="pull" href="#">Меню</a>
		</div>		
	</div>