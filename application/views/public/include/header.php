<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Pages | Your Local Business Directory In India</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="<?= base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="<?= base_url('assets/css/mdb.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">

</head>
<body>  
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a href="<?= base_url(); ?>" class="navbar-brand"><span class="text-success px-3 py-2 bg-white" style="border-radius:0px 25px 25px 25px;">Green</span> Pages</a>
        
                <div class="search-sec p-2 col-lg-7 mx-auto rounded">
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
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="<?= base_url('admin/add_biz'); ?>" class="nav-link">Add a Business</a></li>
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