<!--
Author: XyonCodeur
Author URL: http://XyonCodeurs.com
-->
<?php
if (isset($message)){
	echo "<script>alert('$message') </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="image/icon" href="<?= base_url(); ?>/vendor/script/images/top2.jpg">
<title>E Market</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="E Market Responsive web site, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); }
</script>
<!--//tags -->
<link href="<?= base_url(); ?>/vendor/script/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= base_url(); ?>/vendor/script/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?= base_url(); ?>/vendor/script/css/font-awesome.css" rel="stylesheet">
<link href="<?= base_url(); ?>/vendor/script/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<style>
	<?php
		foreach ($categorie->result() as $key){
 ?>
	.carousel .item.item<?php if($key->IDCATEGORIE != 1){echo $key->IDCATEGORIE; } ?>{
		background:-webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?= base_url(); ?>/vendor/script/images/<?= $key->IMAGES ?>) no-repeat;
		background:-moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?= base_url(); ?>/vendor/script/images/<?= $key->IMAGES ?>) no-repeat;
		background:-ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?= base_url(); ?>/vendor/script/images/<?= $key->IMAGES ?>) no-repeat;
		background:linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(<?= base_url(); ?>/vendor/script/images/<?= $key->IMAGES ?>) no-repeat;
		background-size:cover;
	}
	<?php
}
 ?>
</style>
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>
			<?php
			if (!empty($Id)){
				?>
			<li><i class='fa fa-user' style="color: red;" aria-hidden='true'></i> <?= $Surname ?>  <?= $Name ?></li>
			<li> <a href='#' data-toggle='modal' data-target='#myModal3'><i class='fa fa-heart' style="color: red;" aria-hidden='true'></i> Become seller </a></li>
			<li><i class='fa fa-sign-out' style="color: red;" aria-hidden='true'></i> <a href="<?= site_url('welcome/deconnexion') ?>">Deconnexion</a></li>
			<?php
			}else{
				?>
			<li> <a href='#' data-toggle='modal' data-target='#myModal'><i class='fa fa-unlock-alt' aria-hidden='true'></i> Sign In </a></li>
			<li> <a href='#' data-toggle='modal' data-target='#myModal2'><i class='fa fa-pencil-square-o' aria-hidden='true'></i> Sign Up </a></li>
			<li><i class='fa fa-phone' aria-hidden='true'></i> Call : 6-90-29-50-69</li>
			<li><i class='fa fa-envelope-o' aria-hidden='true'></i> <a href='Blife1255@gmail.com'>XyonCodeurs</a></li>
				<?php
			}

			?>


		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="" method="post">
					<input type="search" name="search" placeholder="Search here..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="<?= base_url(); ?>"><span style="color: #ffb900">E</span>Market<i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
			</div>
        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
						<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						                                   <li class="share">Share On : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>



		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-2">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="<?= base_url(); ?>">SHOP's Market<span class="sr-only">(current)</span></a></li>
					  <?php
					  foreach ($shopgroup->result() as $key){
						  $query = "SELECT * FROM sellers WHERE  IDGROUP = ?";
						  $select = $this->db->query($query, array($key->IDGROUP));
						  $countAll = $select->num_rows();
							$count = $select->num_rows();
							if ($count == 1){
								$count = $count;
							}elseif($select->num_rows() >= 2){

							  if($select->num_rows() % 2 == 0){
								  $count = $select->num_rows() / 2;
							  }else{
								  $count = floor($select->num_rows() / 2) + 1;
							  }
						  }

					  ?>
							<li class="dropdown menu__item">

									<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $key->NAMEGROUP; ?> <span class="caret"></span></a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
											<div class="col-sm-<?php if ($count <= 1){ echo "6";}else{ echo "3";} ?> multi-gd-img1 multi-gd-text ">
												<a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>/vendor/script/images/top2.jpg" alt=" "/></a>
											</div>
											<div class="col-sm-3 multi-gd-img">
												<ul class="multi-column-dropdown">
													<?php
													$query = "SELECT * FROM sellers WHERE  IDGROUP = ? limit 1,$count";
													$select = $this->db->query($query, array($key->IDGROUP));
													foreach ($select->result() as $seller){
														?>
															<li><a href="categories.php"><?= $seller->NAMESHOP ?></a></li>
														<?php
													}
													?>

												</ul>
											</div>
											<div class="col-sm-3 multi-gd-img">
												<ul class="multi-column-dropdown">
													<?php
														$c = $count + 1;
														$query = "SELECT * FROM sellers WHERE  IDGROUP = ? limit $c,$countAll";
														$select = $this->db->query($query, array($key->IDGROUP));
														foreach ($select->result() as $seller){
														?>
														<li><a href="categories.php"><?= $seller->NAMESHOP ?></a></li>
														<?php
													}
													?>
												</ul>
											</div>

											<div class="clearfix"></div>
										</div>
									</ul>
							</li>
						<?php
						}
						?>


					<!--<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Women's wear <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Clothing</a></li>
											<li><a href="womens.html">Wallets</a></li>
											<li><a href="womens.html">Footwear</a></li>
											<li><a href="womens.html">Watches</a></li>
											<li><a href="womens.html">Accessories</a></li>
											<li><a href="womens.html">Bags</a></li>
											<li><a href="womens.html">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Jewellery</a></li>
											<li><a href="womens.html">Sunglasses</a></li>
											<li><a href="womens.html">Perfumes</a></li>
											<li><a href="womens.html">Beauty</a></li>
											<li><a href="womens.html">Shirts</a></li>
											<li><a href="womens.html">Sunglasses</a></li>
											<li><a href="womens.html">Swimwear</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="<?= base_url(); ?>/vendor/script/images/top1.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>-->
					<!--<li class="menu__item dropdown">
					   <a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Web Icons</a></li>
									<li><a href="typography.html">Typography</a></li>
								</ul>
					</li>-->
<!--					<li class=" menu__item"><a class="menu__link" href="contact.html">Contact</a></li>-->
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>


		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
						<form action="#" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
					</form>  
  
						</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
									<form action="<?= site_url('welcome/connection') ?>" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="email" name="Email" required="">
								<label>Email</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="Password" required="">
								<label>Password</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="checkbox" name="Remember" >
								<label>Remember me</label>
								<span></span>
							</div>
							<input type="submit" value="Sign In">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#" data-toggle="modal" data-target="#myModal2" > Don't have an account?</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="<?= base_url(); ?>/vendor/script/images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
		<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body modal-body-sub_agile">
				<div class="col-md-8 modal_body_left modal_body_left1">
					<h3 class="agileinfo_sign">Become <span>Seller</span></h3>
					<form action="<?= site_url('upload/movefile') ?>" method="post" enctype="multipart/form-data">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="Name" required="">
							<label>Shop's Name</label>
							<span></span>
						</div>
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="Position" required="">
							<label>Shop's Position</label>
							<span></span>
						</div>

						<div class="styled-input agile-styled-input-top">
							<textarea type="text" name="Desc" required=""></textarea>
							<label>More about Shop</label>
							<span></span>
						</div>
						<label>Shop's Picture</label>
						<div class="styled-input">
							<input type="file" name="userfile" required="">
							<span></span>
						</div>
						<div class="clearfix"></div>
						<input type="submit" value="Send Data">
					</form>
					<ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
						<li><a href="#" class="facebook">
								<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
						<li><a href="#" class="twitter">
								<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
						<li><a href="#" class="instagram">
								<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
						<li><a href="#" class="pinterest">
								<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
								<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
					</ul>
					<div class="clearfix"></div>

				</div>
				<div class="col-md-4 modal_body_right modal_body_right1">
					<img src="<?= base_url(); ?>/vendor/script/images/log_pic.jpg" alt=" "/>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //Modal content-->
	</div>
</div>
<!-- //Modal1 -->
<!-- Modal2 -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modal-body modal-body-sub_agile">
						<div class="col-md-8 modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
						 <form action="<?= site_url('welcome/registration') ?>" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Name" required="">
								<label>Name</label>
								<span></span>
							</div>
							 <div class="styled-input agile-styled-input-top">
								 <input type="text" name="Surname" required="">
								 <label>Surname</label>
								 <span></span>
							 </div>
							 <div class="styled-input agile-styled-input-top">
								 <input type="tel" name="Phone" required="" style="border: 0px solid">
								 <label>Phone</label>
								 <span></span>
							 </div>
							 <div class="styled-input agile-styled-input-top">
								 <input type="text" name="Adresse" required="">
								 <label>Adresse</label>
								 <span></span>
							 </div>
							<div class="styled-input">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div>
							<!-- <div class="styled-input">
								 <select >

								 </select>
								 <input type="email" name="Email" required="">
								 <label>Email</label>
								 <span></span>
							 </div>-->
							<div class="styled-input">
								<input type="password" name="password" required=""> 
								<label>Password</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="Cpassword" required="">
								<label>Confirm Password</label>
								<span></span>
							</div> 
							<input type="submit" value="Sign Up">
						</form>
						  <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">By clicking register, I agree to your terms</a></p>

						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<img src="<?= base_url(); ?>/vendor/script/images/log_pic.jpg" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->

<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->

		<ol class="carousel-indicators">
			<?php
			foreach ($categorie->result() as $key){
			?>
					<li data-target="#myCarousel" data-slide-to="<?= $key->IDCATEGORIE ?>" class="<?php if($key->IDCATEGORIE == 1){echo "active"; } ?>"></li>
			<?php
			}
			?>
		</ol>
		<div class="carousel-inner" role="listbox">
			<?php
			foreach ($categorie->result() as $key){
			?>
			<div class="item <?php if($key->IDCATEGORIE == 1){echo "active"; }else{ echo "item$key->IDCATEGORIE";} ?>">
				<div class="container">
					<div class="carousel-caption">
						<h3><?= $key->NAMECATEGORIE ; ?><span><?= $key->PETITMOT ; ?></span></h3>
						<p><?= $key->DESCCRIPTION ; ?></p>
						<a class="hvr-outline-out button2" href="<?= site_url('welcome/categorie'); ?>/<?= $key->IDCATEGORIE ; ?>">Shop Now </a>
					</div>
				</div>
			</div>
				<?php
			}
			?>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
    </div> 
	<!-- //banner -->
<div class="clearfix"></div>

<div class="clearfix"></div>

    <div class="banner_bottom_agile_info">
	    <div class="container">

            <div class="banner_bottom_agile_info_inner_w3ls">

    	           <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="<?= base_url(); ?>/vendor/script/images/bottom1.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>F</span>all Ahead</h3>
								<p>New Arrivals</p>
							</figcaption>			
						</figure>
					</div>
					 <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="<?= base_url(); ?>/vendor/script/images/bottom2.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>F</span>all Ahead</h3>
								<p>New Arrivals</p>
							</figcaption>			
						</figure>
					</div>
					<div class="clearfix"></div>
		    </div> 
		 </div> 
    </div>
	<!-- schedule-bottom -->
	<div class="schedule-bottom">
		<div class="col-md-6 agileinfo_schedule_bottom_left">
			<img src="<?= base_url(); ?>/vendor/script/images/mid.jpg" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-6 agileits_schedule_bottom_right">
			<div class="w3ls_schedule_bottom_right_grid">
				<h3>Save up to <span>50%</span> in this week</h3>
				<p>Suspendisse varius turpis efficitur erat laoreet dapibus. 
					Mauris sollicitudin scelerisque commodo.Nunc dapibus mauris sed metus finibus posuere.</p>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-user-o" aria-hidden="true"></i>
					<h4>Customers</h4>
					<?php
						$customer = "SELECT * FROM customer";
						$checkCustomer = $this->db->query($customer);
						$countCustomer = $checkCustomer->num_rows();
						$event = "SELECT * FROM commands";
						$checkEvent = $this->db->query($event);
						$countEvent = $checkEvent->num_rows();

						$product = "SELECT * FROM products";
						$checkProduct = $this->db->query($product);
						$countProduct = $checkProduct->num_rows();
					?>
					<h5 class="counter"><?= $countCustomer ; ?></h5>
				</div>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-calendar-o" aria-hidden="true"></i>
					<h4>Events</h4>
					<h5 class="counter"><?= $countEvent ; ?></h5>
				</div>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-shield" aria-hidden="true"></i>
					<h4>Awards</h4>
					<h5 class="counter"><?= $countProduct ; ?></h5>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //schedule-bottom -->
  <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
		<h3 class="wthree_text_info">What's <span>Trending</span></h3>
	
		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
			<a href="womens.html">
			   <div class="bb-left-agileits-w3layouts-inner grid">
					<figure class="effect-roxy">
							<img src="<?= base_url(); ?>/vendor/script/images/bb1.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>S</span>ale </h3>
								<p>Upto 55%</p>
							</figcaption>			
						</figure>
			    </div>
			</a>
		</div>
		<div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
		      <a href="categories.php">
		       <div class="bb-middle-agileits-w3layouts grid">
			           <figure class="effect-roxy">
							<img src="<?= base_url(); ?>/vendor/script/images/bottom3.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>S</span>ale </h3>
								<p>Upto 55%</p>
							</figcaption>			
						</figure>
		        </div>
				</a>
				<a href="categories.php">
		      <div class="bb-middle-agileits-w3layouts forth grid">
						<figure class="effect-roxy">
							<img src="<?= base_url(); ?>/vendor/script/images/bottom4.jpg" alt=" " class="img-responsive">
							<figcaption>
								<h3><span>S</span>ale </h3>
								<p>Upto 65%</p>
							</figcaption>		
						</figure>
					</div>
					</a>
		<div class="clearfix"></div>
	</div>
	</div>
    </div>
<!--/grids-->
      <div class="agile_last_double_sectionw3ls">
            <div class="col-md-6 multi-gd-img multi-gd-text ">
					<a href="womens.html"><img src="<?= base_url(); ?>/vendor/script/images/bot_1.jpg" alt=" "><h4>Flat <span>50%</span> offer</h4></a>
					
			</div>
			 <div class="col-md-6 multi-gd-img multi-gd-text ">
					<a href="womens.html"><img src="<?= base_url(); ?>/vendor/script/images/bot_2.jpg" alt=" "><h4>Flat <span>50%</span> offer</h4></a>
			</div>
			<div class="clearfix"></div>
	   </div>							
<!--/grids-->
<!-- /new_arrivals --> 
	<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <h3 class="wthree_text_info">New <span>Arrivals</span></h3>		
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<?php
								$countC = $categorie->num_rows();

								if($countC < 4 AND $countC > 0){
									var_dump("bonjour");
									die;
									$begin = 1;
									$query = "SELECT * FROM categories";
									$categorieCount = $this->db->query($query);
									foreach ($categorieCount->result() as $val){
										?>
										<li> <?= $val->NAMECATEGORIE ?></li>
										<?php
									}

								}elseif($countC >= 4){
									$begin = $countC - 4 ;
									$query = "SELECT * FROM categories limit $begin , $countC";
									$categorieCount = $this->db->query($query);
									foreach ($categorieCount->result() as $val){
										?>
										<li> <?= $val->NAMECATEGORIE ?></li>
										<?php
									}
								}elseif($countC == 0){

									$begin = 0;
									?>
										</ul>

									<?php
								}

							?>
					<h3 class="wthree_text_info"> <span>Il y'a pas encore d'élements dans nos boutique</span></h3>

					<div class="resp-tabs-container">
					<!--/tab_one-->
						<?php

							if ($countC != 0){

							for ($i=$countC;$i>$begin;$i--){

								?>
								<div class="tab<?= $i ?>">
									<?php
										$checkProduct = "SELECT * FROM souscategories WHERE  IDCATEGORIE = ? ORDER BY IDSOUSCATEGORIE DESC limit 8";
										$getProduct = $this->db->query($checkProduct,array($i));

										foreach ($getProduct->result() as $product){

									?>
											<div class="col-md-3 product-men">
												<div class="men-pro-item simpleCart_shelfItem">
													<div class="men-thumb-item">
														<img src="<?= base_url(); ?>/vendor/script/images/<?= $product->PHOTOSC ?>" alt="" class="pro-image-front">
														<img src="<?= base_url(); ?>/vendor/script/images/<?= $product->PHOTOSC ?>" alt="" class="pro-image-back">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="<?= site_url('welcome/categorie') ; ?>/<?= $i ; ?>/<?= $product->IDSOUSCATEGORIE ; ?>" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>

													</div>
													<div class="item-info-product ">
														<h4><a href="single.php"><?= $product->NAMESOUSCATEGORIE ?></a></h4>
														<div class="info-product-price">
															<!--<span class="item_price"><?/*= $product->PRICEPRODUCT */?></span>-->
															<del><?= $product->CODESOUSCATEGORIE ?></del>
														</div>
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<!--<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="<?/*= $product->NAMEPRODUCT */?>" />
																	<input type="hidden" name="amount" value="<?/*= $product->PRICEPRODUCT */?>" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="FCFA" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>-->
														</div>

													</div>
												</div>
											</div>
									<?php

										}
									?>
									<div class="clearfix"></div>
								</div>
							<?php
							}
							}
							?>

						<!--//tab_one-->

					</div>
				</div>	
			</div>
		</div>
	<!-- //new_arrivals --> 
	<!-- /we-offer -->
		<div class="sale-w3ls">
			<div class="container">
				<h6>Enter on Your  <span><span style="padding: 0 10px; background: #000000; font-weight: 600; color: #ffb900;">E</span>Market</span> There</h6>
 
				<a class="hvr-outline-out button2" href="single.php">Let's Enter </a>
			</div>
		</div>
	<!-- //we-offer -->
<!--/grids-->
<div class="coupons">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid">
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE SHIPPING</h3>
						<p>Il ya toujours un coursier disponible pour vous</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>24/7 SUPPORT</h3>
						<p>Jamais fermé</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>MONEY BACK GUARANTEE</h3>
						<p>Nous vous garantissons tous les jours une satisfactiopn hors norme sinon vous êtes remboursés</p>
					</div>
				</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-gift" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>FREE GIFT COUPONS</h3>
						<p>plus tu fais d'achats ici plus tu as des chances d'avoir plus des coupons</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
</div>
<!--grids-->
<!-- footer -->
<div class="footer">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h2  style="background-color: #000000;"><a href="index.html"><span style=" color: #ffb900;">E</span>Market </a></h2>
			<p>Une nouvelle façon de faire les achats en toute tranquilité et sans devoir se bouger quoi que ce soit.</p>
			<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
		</div>
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Our <span>Information</span> </h4>
					<ul>
						<!--<li><a href="index.html">Home</a></li>
						<li><a href="mens.html">Men's Wear</a></li>
						<li><a href="womens.html">Women's wear</a></li>-->
						<li><a href="about.php">About</a></li>
						<!--<li><a href="typography.html">Short Codes</a></li>-->
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				
				<div class="col-md-5 sign-gd-two">
					<h4>Store <span>Information</span></h4>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Phone Number</h6>
								<p>+237 690295969</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email Address</h6>
								<p>Email :<a href="mailto:blife155@gmail.com"> blife155@gmail.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Location</h6>
								<p>Fougerol, Ngousso,Yaounde, CMR.
								
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 sign-gd flickr-post">
					<h4>Flickr <span>Posts</span></h4>
					<ul>
						<li><a href="single.php"><img src="<?= base_url(); ?>/vendor/script/images/t1.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.php"><img src="<?= base_url(); ?>/vendor/script/images/t2.jpg" alt=" " class="img-responsive"  /></a></li>
						<li><a href="single.php"><img src="<?= base_url(); ?>/vendor/script/images/t3.jpg" alt=" " class="img-responsive"  /></a></li>
						<li><a href="single.php"><img src="<?= base_url(); ?>/vendor/script/images/t4.jpg" alt=" " class="img-responsive"  /></a></li>
						<li><a href="single.php"><img src="<?= base_url(); ?>/vendor/script/images/t1.jpg" alt=" " class="img-responsive"  /></a></li>
						<li><a href="single.php"><img src="<?= base_url(); ?>/vendor/script/images/t2.jpg" alt=" " class="img-responsive"  /></a></li>
						<li><a href="single.php"><img src="<?= base_url(); ?>/vendor/script/images/t3.jpg" alt=" " class="img-responsive"  /></a></li>
						<li><a href="single.php"><img src="<?= base_url(); ?>/vendor/script/images/t2.jpg" alt=" " class="img-responsive"  /></a></li>
						<li><a href="single.php"><img src="<?= base_url(); ?>/vendor/script/images/t4.jpg" alt=" " class="img-responsive"  /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
			<div class="agile_newsletter_footer">
					<div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form action="#" method="post">
					<input type="email" placeholder="Enter your email..." name="email" required="">
					<input type="submit" value="Submit">
				</form>
			</div>

		<div class="clearfix"></div>
	</div>
		<p class="copy-right">&copy 2022 E Market. All rights reserved | Design by <a href="http://XyonCodeur.com/">XyonCodeur</a></p>
	</div>
</div>
<!-- //footer -->

<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
<script type="text/javascript" src="<?= base_url(); ?>/vendor/script/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="<?= base_url(); ?>/vendor/script/js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="<?= base_url(); ?>/vendor/script/js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
<!-- script for responsive tabs -->						
<script src="<?= base_url(); ?>/vendor/script/js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- //script for responsive tabs -->		
<!-- stats -->
	<script src="<?= base_url(); ?>/vendor/script/js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url(); ?>/vendor/script/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?= base_url(); ?>/vendor/script/js/move-top.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/vendor/script/js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="<?= base_url(); ?>/vendor/script/js/bootstrap.js"></script>
</body>
</html>


<?php
/*	if (isset($_POST['signin'])){
		if (!empty($_POST['NOM']) AND !empty($_POST['PRENOM']) AND !empty($_POST['PASSWORD'])){
			$NOM = htmlspecialchars($_POST['NOM']);
			$PRENOM = htmlspecialchars($_POST['PRENOM']);
			$PASSWORD = htmlspecialchars($_POST['PASSWORD']);
			$use = $bdd->prepare("SELECT * FROM administrateur WHERE NOM_T = ? AND PRENOM_T = ?");
			$use->execute(array($NOM,$PRENOM));
			if ($use->rowCount() == 1 ){
				$check = $use->fetch();
				if ($PASSWORD == $check['PASSWORD_A']){
					header('location : index.php');
				}else{
					echo "<script> alert('mot de passe incorrect') </script>";
				}
			}else{
				echo "<script> alert('cet identifiant n\'est pas dans cette base de données ') </script>";
			}
		}else{
			echo "<script> alert('s\'il vous plait remplissez tous les champs) </script>";
		}
	}
*/?><!--

<div class="form-group">
	<input type="submit" name="signin" class="btn btn-primary btn-user btn-block" value="valider">
</div>
<hr>-->







































