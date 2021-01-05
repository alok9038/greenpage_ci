<div class="container-fluid  pt-5" style="background-image:url('<?= base_url('assets/image/home-banner.jpg'); ?>'); height:109.7vh;">
    <div class="row">
        <div class="col-lg-5 mx-auto p-4 rounded" style="background-color: rgba(255, 255, 255, 0.418);">
            <div class="card shadow-none" >
                <div class="card-body text-center">
                    <h6 class="h1 text-muted">Create an account</h6>
                    <p class="small">Already have an account?<a href="" class="c-link">sign in</a></p>
                    <?= form_open('auth/signup'); ?>     
                    <div class="md-form">
                                <input type="text" id="name" name="name" class="form-control">
                                <?= form_error('name'); ?>
                                <label for="name">Name</label>
                            </div>
                    <div class="md-form">
                                <input type="text" id="contact" name="contact" class="form-control">
                                <?= form_error('contact'); ?>
                                <label for="contact">Contact</label>
                            </div>
                    <div class="md-form">
                                <input type="email" id="materialLoginFormEmail" name="email" class="form-control">
                                <?= form_error('email'); ?>
                                <label for="materialLoginFormEmail">E-mail</label>
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                                <input type="password" id="materialLoginFormPassword" name="password" class="form-control">
                                <?= form_error('password'); ?>
                                <label for="materialLoginFormPassword">Password</label>
                            </div>
                            <div class="md-form">
                                <input type="password" id="pass" class="form-control" name="confirm_pass">
                                <?= form_error('confirm_pass'); ?>
                                <label for="pass">Confirm Password</label>
                            </div>
                            <!-- Sign in button -->
                            <button class="btn btn-outline-success  btn-block my-4 waves-effect z-depth-0" type="submit">Sign up</button>

                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>