<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Green Pages | Your Local Business Directory In India</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="<?= base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="<?= base_url('assets/css/mdb.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet">
	<style>
		@media (max-width:991px) {
			.item-image{
				object-fit:cover;
				width:100%!important;
			}
			.barss {
				display: block !important;
			}

			.navbar-brand {
				margin-left: auto !important;
			}

			.desktop-nav {
				display: none;
			}

			.search {
				max-width: 91% !important;
			}

			.slider-home {
				display: none !important;
			}

			.card-img-top {}

			.mobile-nav {
				box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
				display: block !important;
			}
		}

        .c-link{
            transition:.3s linear;
            color:black;
        }
        .c-link:hover{
            color:green!important;
        }
		.c-btn {
			display: inline-block;
			font-weight: 400;
			color: #212529;
			text-align: center;
			vertical-align: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			background-color: transparent;
			border: 1px solid transparent;
			padding: 0.375rem 0.75rem;
			font-size: 1rem;
			line-height: 1.5;
			border-radius: 0.25rem;
			transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
		}

		.c-btn:hover {
			color: #212529;
			text-decoration: none;
		}

		.c-btn:focus,
		.c-btn.focus {
			outline: 0;
			box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
		}

		.item-card {
			transition: .3s linear;
		}

		.item-card:hover {
			box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12) !important;
		}

	</style>

</head>

<body class="homepage-v1 hidden-sn white-skin animated">

	<!-- Navigation -->
	<header>

		<!-- Sidebar navigation -->
		<ul id="slide-out" class="side-nav custom-scrollbar">
			<!-- Search Form -->
			<li></li>
			<!-- Search Form -->

			<!-- Side navigation links -->
			<li>
				<ul class="collapsible collapsible-accordion">
					<li><a class="waves-effect " href="">Home</a></li>
				</ul>
			</li>
			<!-- Side navigation links -->
			<div class="sidenav-bg mask-strong"></div>

		</ul>
		<!-- Sidebar navigation end-->
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar shadow-none asdf"
			style="background-color:transparent;">

			<div class="container">

				<!-- SideNav slide-out button -->
				<div class="float-left mr-3 ml-4 barss" style="display:none;">

					<a href="#" data-activates="slide-out" class="button-collapse">

						<i class="fas fa-bars text-white"></i>

					</a>

				</div>

				<a class="navbar-brand mx-auto mx-lg-0" href=""><span class="text-white px-3 py-2 bg-success" style="border-radius:0px 25px 25px 25px;">Green</span> Pages</a>
				<ul class="navbar-nav desktop-nav">
					<li class="nav-item"><a href="<?= base_url('admin/add_biz'); ?>" class="nav-link">Add a Business</a></li>
					<li class="nav-item"><a href="" class="nav-link">Categories</a></li>
					<?php if(!$this->session->userdata('admin')):?>
					<li class="nav-item"><a href="<?= base_url('auth/login'); ?>" class="nav-link">Login</a></li>
					<?php else: ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown" type="button" id="dropdownMenu2" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false"><?= $user->name; ?></a>
						<div class="dropdown-menu dropdown-info">
							<a class="dropdown-item" href="#">My Profile</a>
							<a class="dropdown-item" href="#">Setting</a>
							<a class="dropdown-item" href="#">Dashboard</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="fas fa-power-off"></i> Logout</a>
						</div>
					</li>
					<?php endif; ?>
				</ul>
			</div>

		</nav>
		<!-- Navbar end-->
	</header>
	<div class="container-fluid p-0"
		style="background-image:url('<?= base_url('assets/image/home-banner.jpg'); ?>');background-size:cover; background-position:center; background-repeat:no-repeat; background-attachment:fixed;  margin-top:-64.55px!important;">
		<div class="wrapper pt-5" style="height:95vh; ">
			<div class="search-section mx-auto col-lg-8 text-center text-white pt-5 mt-5">
				<h1 class="mt-5" style="font-family: 'Nunito', sans-serif;">Explore Local Business</h1>
				<p>Let's uncover the best places to eat, drink, and shop nearest to you.</p>
				<div class="search-sec p-3 col-lg-11 mx-auto rounded">
					<form action="">
						<div class="input-group">
								<div class="input-group-prepend">
									<label class="input-group-text bg-white border-right-0"
										for="inputGroupSelect01">What</label>
								</div>
								<input type="text" aria-label="First name" class="form-control border-left-0 border-right-0"
									style="height:45px; outline:none!important;" placeholder="search local business in india">
								<div class="input-group-prepend">
									<label class="input-group-text bg-white border-right-0" for="inputGroupSelect01">Where <i
											class="fas fa-compass ml-2 text-muted"></i></label>
								</div>
								<input type="text" aria-label="Last name" class="form-control border-left-0"
									style="height:45px;">

								<div class="input-group-append">
									<button class="btn btn-md btn-success m-0 px-3 py-2 z-depth-0 waves-effect"
										type="button"><i class="fas fa-search fa-2x"></i></button>
								</div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="biz-list mt-n5 mb-5 rounded col-lg-8 mx-auto bg-white p-3 px-5 shadow">
		<div class="row">
			<div class="col-lg-2 col-sm-2 col-xs-2 col-md-2 col text-center"><a href="" class="c-link "><i
						class="fas fa-tshirt fa-2x"></i></a> <br><small class="text-muted">Fashion</small></div>
			<div class="col-lg-2 col-sm-2 col-xs-2 col-md-2 col text-center"><a href="" class="c-link "><i
						class="fas fa-graduation-cap fa-2x"></i></a><br> <small class="text-muted">Education</small>
			</div>
			<div class="col-lg-2 col-sm-2 col-xs-2 col-md-2 col text-center"><a href="" class="c-link "><i
						class="fas fa-heartbeat fa-2x"></i></a><br> <small class="text-muted">Health</small></div>
			<div class="col-lg-2 col-sm-2 col-xs-2 col-md-2 col text-center"><a href="" class="c-link "><i
						class="fas fa-cogs fa-2x"></i></a><br> <small class="text-muted">Automative</small></div>
			<div class="col-lg-2 col-sm-2 col-xs-2 col-md-2 col text-center"><a href="" class="c-link "><i
						class="fas fa-shopping-bag fa-2x"></i></a><br> <small class="text-muted">Shopping</small></div>
			<div class="col-lg-2 col-sm-2 col-xs-2 col-md-2 col text-center"><a href="" class="c-link "><i
						class="fas fa-utensils fa-2x"></i></i></a><br> <small class="text-muted">Foods</small></div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 content">
				<div class="head text-white border-bottom border-success "><span class="bg-success d-inline-flex">
						<h2 class="font-weight-light h6  mt-2 px-4">Popular businesses</h2>
					</span>
					<a href="" class="float-right mt-2 text-muted small">view all</a>
				</div>
				<div class="row mt-5">
                <?php foreach($popular as $biz): ?>
					<div class="col-lg-3 mb-4 px-1">
						<div class="card rounded-0">
							<div class="card-img-top view zoom"><img src="<?= base_url('assets/upload/'.$biz->images); ?>"
									alt="" class="img-fluid img-responsive item-image" style="height:255px;"></div>
							<div class="card-body pb-0">
								<h4 class="font-weight-light"><a href="<?= base_url('home/biz/'.$biz->slug); ?>" class="stretched-link c-link"><?= $biz->title; ?></a></h4>
								<p class="text-muted small ">purnia, bihar</p>
								<p class="mt-n2 "><i class="fas fa-phone-alt text-muted"></i> +91 <?= $biz->contact1; ?></p>
								<p class="mt-n2 small text-muted"><i class="fas fa-clock"></i> 9:00 am to 8:00 pm </p>
								<ul class="p-0">
									<li class="d-inline"><i class="fas fa-star text-warning"></i></li>
									<li class="d-inline"><i class="fas fa-star text-warning"></i></li>
									<li class="d-inline"><i class="fas fa-star text-warning"></i></li>
									<li class="d-inline"><i class="fas fa-star text-warning"></i></li>
									<li class="d-inline"><i class="fas fa-star-half-alt text-warning"></i></li>
								</ul>
							</div>
						</div>
                    </div>
                <?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="col-lg-8 content">
				<div class="head text-white border-bottom border-success ">
					<span class="bg-success d-inline-flex">
						<h2 class="font-weight-light h6  mt-2 px-4">Places Around You</h2>
					</span>
					<a href="" class="float-right mt-2 text-muted small">view all</a>
                </div>
    <?php foreach($business as $biz): ?>
				
					<div class="card my-3 rounded-0">
						<div class="card-body">
						<div class="row ">
							<div class="col-lg-4">
								<div class="view zoom"><img src="<?= base_url('assets/upload/'.$biz->images); ?>" alt=""
										class="img-fluid img-responsive item-image"></div>
							</div>
							<div class="col-lg-8">
								<h5><a href="<?= base_url('home/biz/'.$biz->slug); ?>" class="stretched-link c-link"><?= $biz->title; ?></a></h5>
								<div class="row">
									<div class="col-lg-7">
										<ul class="p-0">
											<li class="d-inline"><i class="fas fa-star text-warning"></i></li>
											<li class="d-inline"><i class="fas fa-star text-warning"></i></li>
											<li class="d-inline"><i class="fas fa-star text-warning"></i></li>
											<li class="d-inline"><i class="fas fa-star text-warning"></i></li>
											<li class="d-inline"><i class="fas fa-star-half-alt text-warning"></i></li>
										</ul>
										<p class="small"><?= $biz->cat_title; ?></p>
										<p class="mt-n2 small text-muted"><i class="fas fa-clock"></i> 9:00 am to 8:00 pm </p>
									</div>
									<div class="col-lg-5"><i class="fas fa-phone-alt text-muted"></i> +91 <?= $biz->contact1; ?></div>
								</div>
							</div>
						</div>
						</div>
					</div>
                
    <?php endforeach; ?>
			</div>
			<div class="col-lg-4 widgets">
				<div class="head text-white border-bottom border-success ">
					<span class="bg-success d-inline-flex">
						<h2 class="font-weight-light h6  mt-2 px-4">Categories</h2>
					</span>
					<a href="" class="float-right mt-2 text-muted small">view all</a>
				</div>
				<div class="list-group  ">
                    <?php foreach($category as $cat): ?>
					<a href=""
						class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-left-0 border-right-0 "><?= $cat->cat_title; ?><span class="badge badge-primary badge-pill">1</span>
                    </a>
                    <?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="page-footer font-small pt-4 mt-5" style="background-color:#363b3d;">

		<!-- Footer Links -->
		<div class="container text-center text-md-left">

			<!-- Grid row -->
			<div class="row">

				<!-- Grid column -->
				<div class="col-md-6 mt-md-0 mt-3">

					<!-- Content -->
					<h5 class="text-capitalize  text-success">Greenpages</h5>
					<p>Green Pages | Your Local Business Directory In India</p>

				</div>
				<!-- Grid column -->

				<hr class="clearfix w-100 d-md-none pb-3">

				<!-- Grid column -->
				<div class="col-md-3 mb-md-0 mb-3">

					<!-- Links -->
					<h5 class="text-capitalize text-success">Links</h5>

					<ul class="list-unstyled">
						<li>
							<a href="#!">About us</a>
						</li>
						<li>
							<a href="#!">Contact us</a>
						</li>
					</ul>

				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-3 mb-md-0 mb-3">

					<!-- Links -->
					<h5 class="text-capitalize text-success">Follow Us</h5>

					<ul class="list-unstyled mt-4">
						<a class="fb-ic">
							<i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
						</a>
						<!-- Twitter -->
						<a class="tw-ic">
							<i class="fab fa-twitter fa-lg white-text mr-4"> </i>
						</a>
						<!-- Google +-->
						<a class="gplus-ic">
							<i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
						</a>
						<!--Linkedin -->
						<a class="li-ic">
							<i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
						</a>
						<!--Instagram-->
						<a class="ins-ic">
							<i class="fab fa-instagram fa-lg white-text mr-4"> </i>
						</a>
						<!--Pinterest-->
						<a class="pin-ic">
							<i class="fab fa-pinterest fa-lg white-text"> </i>
						</a>
					</ul>

				</div>
				<!-- Grid column -->

			</div>
			<!-- Grid row -->

		</div>
		<!-- Footer Links -->

		<!-- Copyright -->
		<div class="footer-copyright text-center py-3">© 2020 Copyright:
			<a href=""> Greenpages</a>
		</div>
		<!-- Copyright -->

	</footer>
	<!-- Footer -->

	<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/abz.js'); ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
	</script>
	<!-- jQuery and JS bundle w/ Popper.js -->
	<script type="text/javascript">
		/* WOW.js init */
		new WOW().init();
		// Tooltips Initialization
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})

		// Material Select Initialization
		$(document).ready(function () {
			$('.mdb-select').material_select();
		});

		// SideNav Initialization
		$(".button-collapse").sideNav();

	</script>


	<script>
		// initialize and show Bootstrap 4 toast
		$('.toast').toast('show');

	</script>
</body>

</html>
