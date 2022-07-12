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
                            
                                <p class="mt-4 text-white lead text-center">
                                   Login
                                </p>
                                <div class="mt-4">
                                      <?php echo form_open("login1/daftar")?>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                        </div>
                                        <label class="custom-control custom-checkbox mt-2">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description text-white">Keep me logged in</span>
                                        </label>
                                        <button type="submit" class="btn btn-primary float-right">Sign in</button>
                                    </form>
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
                                    Don't have an account yet? <a href="<?php echo base_url('index.php/register')?>"><b>Sign Up Now - </a>
                                    <a href="<?php echo base_url('index.php/home')?>"><b>Home</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                   
                </div>
            </div>
        </section>

    </body>
</html>
