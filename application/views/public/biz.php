<div class="container my-5 px-0" style="height:89vh; background-image:url('<?= base_url('assets/upload/'.$business->images); ?>');background-size:100% 100%; background-repeat:no-repeat;  ">
    <div class="wrapper text-white px-5 pt-5" style="height:89vh;">
        <h6 class="display-4 text-capitalize"><?= $business->title; ?></h6>
                                <ul class="p-0">
									<li class="d-inline"><i class="fas fa-star text-warning"></i></li>
									<li class="d-inline"><i class="fas fa-star text-warning"></i></li>
									<li class="d-inline"><i class="fas fa-star text-warning"></i></li>
									<li class="d-inline"><i class="fas fa-star text-warning"></i></li>
                                    <li class="d-inline"><i class="fas fa-star-half-alt text-warning"></i></li>
                                    <li class="d-inline small">19 reviews</li>
                                </ul>
            <p>purnea,</p>
            <p class="mt-n3">bihar - 854301</p>
            <h6 class="h5">+91 <?= $business->contact1; ?></h6>
            <p class="small"><?= $business->email; ?></p>
    </div>
</div>
<div class="container">
		<div class="row">
			<div class="col-lg-12 content">
				<div class="head text-white border-bottom border-success "><span class="bg-success d-inline-flex">
						<h2 class="font-weight-light h6  mt-2 px-4">Related businesses</h2>
					</span>
					<a href="" class="float-right mt-2 text-muted small">view all</a>
				</div>
				<div class="row mt-5">
                <?php foreach($related as $biz): ?>
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