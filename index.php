<?php 
include('scs_config.php');
include('sa_conn.php');

include_once(SH_INC_DIR.'/functions/common.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Home: S K Tutorials</title>
	<meta name="keywords" content="S K Tutorials, CBSE School, SSC School, College, Commerce">
	<meta name="description" content="To become the Number One Institute in India for Guiding and Coaching Students for being Successful in Academic as well as in Competitive Examinations.">
	<meta name="author" content="Salasar Core Solution">

	<?php include(SH_INC_DIR.'/js_css_common.php');?>

</head>
<body>
	
<div class="container" >

<?php include(SH_INC_DIR.'/header.php');?>
<div id="wrapper">
<?php include(SH_INC_DIR.'/menu.php');?>

	<main id="main">
		<div class="container">
		<?php include_once(SH_INC_DIR.'/banner/banner.php');?>
			<div class="twelve columns">
				
							<div class="block-green">
							<div class="block-title"><h2>School</h2></div>	
								<div class="block-content align-justify">
									A School is an institution designed for teaching the students under the guidance of teachers. Most countries have systems of formal education, which is generally compulsory.
									<br />
									<br />
									We provide coaching to students of Class VIII, IX & X at our centers through well educated and experienced faculty. We are rendering our services for English medium for S. S. C. Board and  C. B. S. E. boards.
									<img src="images/school.jpg" width="100%" />
								</div>
							</div>
							<div class="block-orange">
							<div class="block-title"><h2>COLLEGE</h2></div>	
								<div class="block-content align-justify">
									The term 'College' is used for institutions that offer the bachelor's degree and 'Junior College' is used for institutions that offer education for Classes XI & XII.

									<br />
									<br />
									We  provide coaching to commerce students of Class XI & XII and for difficult examinations of Chartered Accountancy (C.P.T., I.P.C.C & Final) . We also provide coaching to degree college students of commerce from F.Y.Bcom to T.Y.B. Com.
									<img src="images/college.jpg" width="100%" />
								</div>
							</div>
				</div>	<!--twelve columns-->
			<?php include(SH_INC_DIR.'/right.php');?>
			
			</div><!-- container-->
			<br />
		</div><!--wrapper-->
	</main>
	<?php include(SH_INC_DIR.'/footer.php');?>
	


</body>
</html>