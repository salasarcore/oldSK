<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  
<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
	
	<link rel="stylesheet" href="<?php echo SITE_URL;?>/css/style.css">
	<link rel="stylesheet" href="<?php echo SITE_URL;?>/css/common.css">
	<link rel="stylesheet" href="<?php echo SITE_URL;?>/css/skeleton.css">
	<link rel="stylesheet" href="<?php echo SITE_URL;?>/css/layout.css">
	<link rel="stylesheet" href="<?php echo SITE_URL;?>/css/menu.css">
	<link rel="stylesheet" href="<?php echo SITE_URL;?>/css/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo SITE_URL;?>/css/JQthems/blue/jquery-ui.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo SITE_URL;?>/css/validationEngine.jquery.css"  type="text/css" />
	
	
	
	<script src="<?php echo SITE_URL;?>/modernizr.foundation.js"></script>
  
  <!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
	<!-- CSS  ================================================== -->
	
<script type="text/javascript" src="<?php echo SITE_URL;?>/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>/js/jquery-1.8.24.ui.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>/js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>/js/jquery.validationEngine.js" language="javascript"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>/js/jquery.validationEngine-en.js" language="javascript"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>/js/jquery.validate.js" language="javascript"></script>
<script type="text/javascript" src="<?php echo SITE_URL;?>/js/jquery.newsTicker.js" language="javascript"></script>
<script  type="text/javascript" language="javascript">
			jQuery(document).ready(function(){
				
				// hide #back-top first
				jQuery("#back-top").hide();
				
				// fade in #back-top
				jQuery(function () {
					jQuery(window).scroll(function () {
						if (jQuery(this).scrollTop() > 100) {
							jQuery('#back-top').fadeIn();
						} else {
							jQuery('#back-top').fadeOut();
						}
					});

					// scroll body to 0px on click
					jQuery('#back-top a').click(function () {
						jQuery('body,html').animate({
							scrollTop: 0
						}, 800);
						return false;
					});
				});

			});
		
		</script>
		