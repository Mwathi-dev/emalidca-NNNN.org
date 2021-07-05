<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?php getwebname("titles"); echo"|"; gettagline("titles");?> | Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="browser_favicon" rel="shortcut icon" href="blogadmin/images/<?php geticon("titles"); ?>">
	<meta charset="utf-8" name="description" content="<?php getshortdescription("titles");?>">
	<meta name="keywords" content="<?php getkeywords("titles");?>" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/contact.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
</head>

<body>
	<!--Header-->
	<?php include("header.php");?>
	<!--//header-->
	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Contact</li>
	</ol>
	<!--//banner-->
	<!--/main-->
	<section class="main-content-w3layouts-agileits">

		<h3 class="tittle">Contact Us</h3>
		<p class="sub text-center">
			
		<p>VISION</p>
To develop thriving communities where children, youths and their families have their basic needs met sustainably and are protected from all forms of harm and abuse.

<p>MISSION</p>

Support and empower the Deprived, Excluded, and Vulnerable children, their families and their communities, collaboratively and in  partnership with like minded stakeholders so that children grow up holistically being  healthy, educated, skilled and safe.


<p>CORE VALUES </p>
1.Promotion of children survival, growth and well-being by empowering their families and communities.</p>
2.Utilization of the available resources efficiently and effectively to assist those living in difficult circumstances in a holistic manner.</p>
3.Observing and advancing the attainment of the rights of the children in all aspects of the organization</p>
4.Strengthening the capacity of the caregivers in the community-based settings to effectively address their needs around Education, Health and nutrition, water and sanitation, community livelihoods while discouraging handouts.</p>
 5.Creation of sustainable programming around the existing Community Based Mechanisms.</p>
 
		
		<div class="contact-map inner-sec">

			<iframe src="<?php getcontacts("titles","4");?>"
				class="map" style="border:0" allowfullscreen=""></iframe>
			</div>
			<div class="ad-inf-sec bg-light">
				<div class="container">
					<div class="address row">

						<div class="col-lg-4 address-grid">
							<div class="row address-info">
								<div class="col-md-4 address-left text-center">
									<i class="far fa-map"></i>
								</div>
								<div class="col-md-8 address-right text-left">
									<h6>Address</h6>
									<p> <?php getcontacts("titles","1");?>

									</p>
								</div>
							</div>

						</div>
						<div class="col-lg-4 address-grid">
							<div class="row address-info">
								<div class="col-md-4 address-left text-center">
									<i class="far fa-envelope"></i>
								</div>
								<div class="col-md-8 address-right text-left">
									<h6>Email</h6>
									<p>
										<a href="mailto:<?php getcontacts("titles","2");?>"><?php getcontacts("titles","2");?></a></p>
									</div>

								</div>
							</div>
							<div class="col-lg-4 address-grid">
								<div class="row address-info">
									<div class="col-md-4 address-left text-center">
										<i class="fas fa-mobile-alt"></i>
									</div>
									<div class="col-md-8 address-right text-left">
										<h6>Phone</h6>
										<p><?php getcontacts("titles","3");?></p>

									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--//main-->
			<!--footer-->
			<?php include("footer.php");?>
			<!---->
			<!-- js -->
			<script src="js/jquery-2.2.3.min.js"></script>
			<!-- //js -->
			<!--/ start-smoth-scrolling -->
			<script src="js/move-top.js"></script>
			<script src="js/easing.js"></script>
			<script>
				jQuery(document).ready(function ($) {
					$(".scroll").click(function (event) {
						event.preventDefault();
						$('html,body').animate({
							scrollTop: $(this.hash).offset().top
						}, 900);
					});
				});
			</script>
			<!--// end-smoth-scrolling -->

			<script>
				$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
							 		*/

							 		$().UItoTop({
							 			easingType: 'easeOutQuart'
							 		});

							 	});
							 </script>
							 <a href="#home" class="scroll" id="toTop" style="display: block;">
							 	<span id="toTopHover" style="opacity: 1;"> </span>
							 </a>

							 <!-- //Custom-JavaScript-File-Links -->
							 <script src="js/bootstrap.js"></script>


							</body>

							</html>