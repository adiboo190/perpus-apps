<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" media="all,print" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" media="all,print" />

        <!-- Plugins -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Source+Sans+Pro&display=swap" rel="stylesheet" media="all,print" />

        <style type="text/css" media="print,all">
            html,
            body {
              height: 100%;
            }

            #page-content {
              flex: 1 0 auto;
            }

            #sticky-footer {
              flex-shrink: none;
            }
            [data-trigger] { transition: all .3s; }
            body { font-family: 'Source Sans Pro', sans-serif; min-height: calc(100vh - 9rem)!important;}
            h1,.h1,
            h2,.h2,
            h3,.h3,
            h4,.h4,
            h5,.h5,
            h6,.h6 { font-family: 'Roboto Slab', serif; }
        </style>
    </head>
    <body class="bg-light d-flex flex-column">

        <div class="content-wrapper container" id="page-content">

        	<div class="row align-items-center h-100 justify-content-center">
        		<div class="col-md-6 col-lg-4">

                    <h3 class="text-center">Perpus Apps</h3>
                    <p class="text-center">Masuk dahulu</p>
                    <div class="card card-body">
                        <form class="row" method="post" action="<?php echo base_url( 'auth/check-login' ); ?>">

                            <div class="col-4">
                                <label for="username">Nama Pengguna</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="username" class="form-control" placeholder="Nama Pengguna" />
                            </div>

                            <div class="col-4">
                                <label for="username">Kata Sandi</label>
                            </div>
                            <div class="col-8">
                                <input type="password" name="password" class="form-control" placeholder="Kata Sandi" />
                            </div>

                            <div class="col-12 my-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="remember" value="forever" name="remember" />
                                    <label class="custom-control-label" for="remember">Ingatkan Saya</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <button class="btn btn-primary" type="submit">Masuk<i class="fas fa-sign-in-alt ml-2"></i></button>
                            </div>
                            <div class="col-6">
                                <a class="text-right float-right" href="<?php echo base_url( 'auth/remember-me' ); ?>">Reset Kata Sandi</a>
                            </div>

                        </form>
                    </div>

        		</div>
        	</div>

        </div>

        <footer class="footer bg-white py-3 mt-3">
        	<div class="container w-100">
        		<div class="row align-items-between">
	        		<div class="col-md-6">
	        			<span class="text-muted text-sm-center">Hak Cipta <?php echo date('Y'); ?> <a class="font-weight-bold text-muted" href="<?php echo base_url(); ?>">Perpus Apps</a>.</span>
	        		</div>
	        		<div class="col-md-6">
	        			<p class="m-0 badge-primary text-md-center badge" id="clock"></p>
	        		</div>
	        	</div>
        	</div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>

        <script type="text/javascript">
$(function($) {
    "use strict";

    $('form').submit(function(s) {
        s.preventDefault();

        
    });
})(jQuery);
        </script>

    </body>
</html>