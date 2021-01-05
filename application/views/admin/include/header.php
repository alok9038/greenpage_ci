<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenPages | admin pannel</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="<?= base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="<?= base_url('assets/css/mdb.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container"><a href="<?= base_url('admin'); ?>" class="navbar-brand">Greenpages | admin Pannel</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="<?= base_url('home'); ?>" target="_blank" class="nav-link">view site</a></li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-0">
        <div class="container">
            <ul class="nav md-pills nav-justified pills-pink">
                <li class="nav-item">
                    <a class="nav-link active"  href="<?= base_url('admin'); ?>" >Dashboard</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="<?= base_url('admin/category'); ?>"> Category</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">Business</a>
                    <div class="dropdown-menu dropdown-success rounded-0">
                        <a class="dropdown-item" href="<?= base_url('admin/add_biz'); ?>">Add Biz</a>
                        <a class="dropdown-item" href="<?= base_url('admin/biz'); ?>">Manage Biz</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panel53" role="tab">Profile</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panel53" role="tab">Setting</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#panel53" role="tab">Logout</a></li>
            </ul>
        </div>
    </nav>

    <?php if($msg = $this->session->flashdata('error')): ?>
  <div class="toast ml-auto rounded-0 border-0" role="alert" data-delay="3000" data-autohide="true" style="position: absolute; top: 110px; right: 20px; min-width:300px;min-heigth:100px;">
        <div class="toast-body bg-danger-2" style='background-color:#ff3547 !important;'>

            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <p class="text-light"><?= $msg; ?></p>
         </div>
    </div>
<?php endif; ?>
<?php if($msg = $this->session->flashdata('msg')): ?>
  <div class="toast ml-auto rounded-0 border-0" role="alert" data-delay="3000" data-autohide="true" style="position: absolute; top: 110px; right: 20px; min-width:300px;min-heigth:100px;">
        <div class="toast-body " style='background-color:#00c851 !important'>

            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <p class="text-light"><?= $msg; ?></p>
         </div>
    </div>
<?php endif; ?>