<?php 
$pages = array();
$pages["Home"] = "/";
$pages["About us"] = "about-us";
$pages["Services"] = ['Logo & Identity'=>'logo-identity','Website Design'=>'website-design','Website Development'=>'website-development','E-Commerce Website'=>'e-commerce','Dynamic website'=>'dynamic-website','CMS Website'=>'cms-website','Mobile Apps'=>'mobile-apps','Search Engine Optimization'=>'seo','Search Engine Marketing'=>'sem','Email Marketing'=>'email-marketing','Digital Marketing'=>'digital-marketing','Software development'=>'software-development'];
// $pages["Products"] = "Products";
$pages["Portfolio"] = "portfolio";
$pages["Contact us"] = "contact";
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="title" content=""><!-- Max-Characters-70 -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content=""><!-- Max-Characters-150 -->
	<meta name="keywords" content=""><!-- Separate with commas -->
	<meta name="author" content="">
	<meta name="language" content="English">
	
	<?php 
	if($activePage == 'about-us'){
		$add_seo_meta = 'about';
	}elseif ($activePage == 'index') {
		$add_seo_meta = 'index';
	}elseif ($activePage == '') {
		$add_seo_meta = 'default';
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
	<!---bootstrap css--->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!-- for modal-window -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.0/venobox.min.css" rel="stylesheet">
	<!-- for portfolio -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
	<!---css--->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	
	<section id="background">

		<header id="header" class="fixed-top header-transparent">

			<nav class="navbar navbar-expand-lg navbar-light p-0">
				<div class="container-fluid custom">
					<a href="/" class="focus-logo" ><img src="https://focus-its.com/images/logo.png" ></a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse text-right " id="navbarNavDropdown">
						<ul class="navbar-nav ml-auto menu-items">
							<?php
// echo $activePage;die;
							foreach($pages as $title=>$url):
								if(!is_array($url)){
									?>

									<li class="nav-item active mr-2 " >
										<a class="nav-link middle" <?php if($url === $activePage):?>class="active"<?php endif;?> href="<?php echo $url;?>">
											<?php echo $title;?>
										</a>
									</li>

									<?php 
								}else{
									?>
									<li class="nav-item dropdown ml-2 mr-2 list-unstyled list-dashed">
										<a class="nav-link dropdown-toggle middle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$title?></a>
										<div class="dropdown-menu dr-menu pt-3 pb-3 rounded-0 mt-3  border-0" aria-labelledby="navbarDropdownMenuLink">
											<?php 
            // print_r($title);die;
											foreach ($url as $submenuTitle => $submenuUrl) { 
												$active = ($submenuUrl === $activePage) ? 'active' : "";
												?>
												<a class="dropdown-item identify <?=$active?>" href="<?=$submenuUrl?>"><?=$submenuTitle?></a>
												<?php
											} ?>
										</div>
									</li>
								<?php }
							endforeach;?>
						</ul>
					</div>
				</div>

			</nav><!-- .main-nav-->	
		</header>
		 <!-- End Header -->