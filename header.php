<?php 
$pages = array();
$pages["Home"] = "/";
$pages["About us"] = "about-us";
$pages["Services"] = ['Logo & Identity'=>'logo-identity','Website Design'=>'website-design','Website Development'=>'website-development','E-Commerce Website'=>'e-commerce','Dynamic website'=>'dynamic-website','CMS Website'=>'cms-website','Mobile Apps'=>'mobile-apps','Search Engine Optimization'=>'seo','Search Engine Marketing'=>'sem','Email Marketing'=>'email-marketing','Digital Marketing'=>'digital-marketing','Software development'=>'software-development'];
$pages["Products"] = ['ArtsFlow'=>'artsflow'];
$pages["Portfolio"] = "portfolio";
$pages["Contact us"] = "contact";
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- <meta name="title" content=""> --><!-- Max-Characters-70 -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<!-- <meta name="description" content=""> --><!-- Max-Characters-150 -->
	<!-- <meta name="keywords" content=""> --><!-- Separate with commas -->
	<!-- <meta name="author" content=""> -->
	<meta name="language" content="English">

	<?php 
	if($activePage == 'index'){
		$add_seo_meta = 'index';
	}elseif ($activePage == 'about-us') {
		$add_seo_meta = 'about';
	}elseif ($activePage == 'logo-identity') {
		$add_seo_meta = 'logo-identity';
	}elseif ($activePage == 'website-design') {
		$add_seo_meta = 'website-design';
	}elseif ($activePage == 'website-development') {
		$add_seo_meta = 'website-development';
	}elseif ($activePage == 'e-commerce') {
		$add_seo_meta = 'e-commerce';
	}elseif ($activePage == 'dynamic-website') {
		$add_seo_meta = 'dynamic-website';
	}elseif ($activePage == 'cms-website') {
		$add_seo_meta = 'cms-website';
	}elseif ($activePage == 'mobile-apps') {
		$add_seo_meta = 'mobile-apps';
	}elseif ($activePage == 'seo') {
		$add_seo_meta = 'seo';
	}elseif ($activePage == 'sem') {
		$add_seo_meta = 'sem';
	}elseif ($activePage == 'email-marketing') {
		$add_seo_meta = 'email-marketing';
	}elseif ($activePage == 'digital-marketing') {
		$add_seo_meta = 'digital-marketing';
	}elseif ($activePage == 'software-development') {
		$add_seo_meta = 'software-development';
	}elseif ($activePage == 'artsflow') {
		$add_seo_meta = 'artsflow';
	}elseif ($activePage == 'contact') {
		$add_seo_meta = 'contact';
	}else {
		$add_seo_meta = 'default';
	}
// echo $add_seo_meta;die;
	include_once 'meta/'.$add_seo_meta. '.php'; 

	?>
	<!---favicon--->
	<link rel="shortcut icon" href="https://focus-its.com/images/fav.png" type="image/x-icon"/>
	<!---Font awesome--->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
	<!---Google font--->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<!---bootstrap css--->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!-- for modal-window -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.0/venobox.min.css" rel="stylesheet">
	<!-- for portfolio -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
	<!---css--->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!---International Telephone Input CSS--->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
	<style>
		.iti { width: 100%; margin-bottom: 20px; }
		.iti__flag-container { z-index: 99; }
		#exampleInputMobile { padding-left: 50px !important; }
		.contact-error { color: #dc3545; font-size: 12px; margin-top: 5px; display: none; }
	</style>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TTRXCWRH');</script>
	<!-- End Google Tag Manager -->
</head>
<body class="<?php echo $activePage; ?>">
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-QK04XF772Z"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-QK04XF772Z');
	</script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTRXCWRH"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<section id="background">
		<header id="header" class="fixed-top header-transparent">
			<div class="container-fluid d-flex align-items-center custom ">
				<!-- <nav class="navbar navbar-expand-lg navbar-light p-0"> -->
					<a href="/" class="focus-logo  mr-auto" ><img src="/images/logo.png" alt="Focus IT Solutions Logo"></a>
					<nav class="main-nav d-none d-lg-block">

						<!-- <div class="collapse navbar-collapse text-right " id="navbarNavDropdown"> -->
							<ul class="main-nav d-none d-lg-block menu-items">

								<?php
// echo $activePage;die;
								foreach($pages as $title=>$url):
									if(!is_array($url)){
										?>

										<li class="mr-2 " >
											<a <?php if($url === $activePage):?>class="middle active"<?php endif;?> href="<?php echo $url;?>">
												<?php echo $title;?>
											</a>
										</li>

										<?php 
									}else{
										?>
										<li class="nav-item dropdown mr-2 list-unstyled list-dashed">

											<a class="nav-link dropdown-toggle middle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$title?></a>
											<div class="dropdown-menu dr-menu pt-3 pb-3 rounded-0 mt-3  border-0">
												<?php 
// print_r($title);die;
												foreach ($url as $submenuTitle => $submenuUrl) { 
													$active = ($submenuUrl === $activePage) ? 'active' : "";
													?>

													<a class="dropdown-item identify  <?=$active?>" href="<?=$submenuUrl?>"><?=$submenuTitle?></a>

													<?php
												} ?>
											</div >
										</li>
									<?php }
								endforeach;?>
							</ul>
							<!-- </div> -->
						</nav><!-- .main-nav-->	
					</div>
				</header>
<!-- End Header -->