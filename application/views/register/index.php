<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Free Bootstrap 4 Login/Register Forms By Wired Dots</title>
        <meta name="description" content="Love Authority." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <link rel="stylesheet" href="<?php echo base_url('asets/css/style.css')?>" />
    </head>
    <body>
        <!--hero section-->
        <section class="hero" style="background-color : rgb(0, 41, 77);">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 mx-auto">
                        <div class="card border-none">
                            <div class="card-body">
                                <div class="mt-2 text-center">
                                    <h2>Ayoo! daftar sekarang</h2>
                                </div>
                                <p class="mt-4 text-white lead text-center">
                                    Sign up to get started with Authority
                                </p>
                                <div class="mt-4">
                                    <?php echo form_open("register/simpan")?>
                                    <div class="form-group">
                                            <input type="text" class="form-control" name="username" value="" placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" value="" placeholder="Enter email address">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password1" value="" placeholder="Enter password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="confirm-password" value="" placeholder="Confirm password">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                                      <?php form_close()?>
                                    <div class="clearfix"></div>
                                    <p class="content-divider center mt-4"><span>or</span></p>
                                </div>
                                <p class="mt-4 social-login text-center">
                                    <a href="#" class="btn btn-twitter"><em class="ion-social-twitter"></em></a>
                                    <a href="#" class="btn btn-facebook"><em class="ion-social-facebook"></em></a>
                                    <a href="#" class="btn btn-linkedin"><em class="ion-social-linkedin"></em></a>
                                    <a href="#" class="btn btn-google"><em class="ion-social-googleplus"></em></a>
                                    <a href="#" class="btn btn-github"><em class="ion-social-github"></em></a>
                                </p>
                                <p class="text-center">
                                    Already have an account? <a href="<?php echo base_url('index.php/login1')?>">Login Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-12 mt-5 footer">
                        <p class="text-white small text-center">
                            &copy; 2017 Login/Register Forms. A FREE Bootstrap 4 component by 
                            <a href="https://wireddots.com">Wired Dots</a>. Designed by <a href="https://twitter.com/attacomsian">@attacomsian</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>