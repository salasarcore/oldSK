<?php 
$logedin=false;

if(!isset($_SESSION['sid'])) create_session();
?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type="text/javascript">
$(function() {
blinkeffect('#txtblnk');
})
function blinkeffect(selector) {
$(selector).fadeOut('fast', function() {
$(this).fadeIn('fast', function() {
blinkeffect(this);
});
});
}
</script>
<header class="clearfix" style="display: block;" id="header">
	<div class="eight columns"><div id="logo">	<a href="./"><img src="logo.png" alt="KS Tutorials"></a>		</div><!--/ #logo--></div><!--/ .columns-->
	<div class="eight columns">
		
		
		<div class="social-icon float_right">
			<ul>
				<li><a class="twitter" href=""><i class="icon-twitter"></i></a></li>
				<li><a class="facebook" href=""><i class="icon-facebook"></i></a></li>
				<li><a class="youtube" href=""><i class="icon-youtube"></i></a></li>
				<li><a class="dribble" href=""><i class="icon-globe"></i></a></li>
				<li><a class="rss" href=""><i class="icon-rss"></i></a></li>
			</ul>
		</div><!--/ .social-icons -->	
		<div class="clear"></div>
		<div class="contactus"><span style="color:#efefef"><i class="icon-phone"></i></span> Call Us : <span>+91 8879259139</span></div><!--/ .vcard-->
		<div class="clear"></div>
		<div class="contactus">
 <span id="txtblnk"><strong><a href="http://skt.salasaredu.com/apply_online.php" target="_blank" style="color:blue;Font-size:15px;">Free Registration</a></strong></span>
		
		<span style="color:#efefef"><i class="icon-user"></i></span> <a href="#" title="Register">Downloads</a> | <a href="http://skt.salasaredu.com/academic_calender.php" title="Eventd">Events</a>
		<div class="align-right"><a href="http://skt.salasaredu.com/contactusschool.php" title="Login"><img src="images/ef.gif" /></a></div>
		
		</div><!--/ .vcard-->
	</div><!--/ .columns-->
			
			<div class="clear"></div>
    </header><!--/ #header-->
	