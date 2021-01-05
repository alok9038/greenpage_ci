<div class="container-fluid  pt-5" style="background-image:url('<?= base_url('assets/image/home-banner.jpg'); ?>'); height:87.7vh;">
    <div class="row">
        <div class="col-lg-5 mx-auto p-4 rounded" style="background-color: rgba(255, 255, 255, 0.418);">
            <div class="card shadow-none" >
                <div class="card-body text-center">
                    <h4 class="text-muted h1">Welcome Back!</h4>
                    <h6 class="text-muted">Sign in to your account</h6>
                    <p class="small">Don't have an account?<a href="" class="c-link">sign up</a></p>
                    <?= form_open('auth/login'); ?>     
                    <div class="md-form">
                                <input type="text" name="contact" id="materialLoginFormEmail" class="form-control">
                                <label for="materialLoginFormEmail">Contact</label>
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                                <input type="password" name="password" id="materialLoginFormPassword" class="form-control">
                                <label for="materialLoginFormPassword">Password</label>
                            </div>

                            <div class="d-flex justify-content-around">
                                <div>
                                <!-- Remember me -->
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                                    <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                                </div>
                                </div>
                                <div>
                                <!-- Forgot password -->
                                <a href="" class="small">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Sign in button -->
                            <button class="btn btn-outline-success  btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>