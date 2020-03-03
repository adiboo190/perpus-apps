<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Selamat Datang!</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/vendor/bootstrap/css/bootstrap.min.css" media="all,print" />
        <link rel="stylesheet" media="all,print" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/frontend.css" />

        <!-- Plugins -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" media="all,print" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/vendor/jquery-ui/jquery-ui.min.css" media="all,print" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/vendor/fontawesome/css/all.min.css" media="all,print" />
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

            .icon {
                color: #fff;
                float: right;
                background: #6861ce;
                display: inline-block;
                min-width: 2rem;
                height: 2rem;
                padding: 0 .25rem;
                line-height: 2rem;
                text-align: center;
                border-radius: 3px;
                font-weight: 600;
                min-width: 3.5rem;
                min-height: 3.5rem;
                line-height: 3.5rem;
            }
        </style>
    </head>
    <body class="bg-light d-flex flex-column">

        <div id="page-content">

            <div class="bg-primary pb-3 shadow">

                <!-- Navigation -->
                <nav class="navbar navbar-expand-lg navbar-dark" data-trigger="bg-white-dark">
                	<div class="container">
        	            <a class="navbar-brand" href="<?php echo base_url(); ?>">Perpus Apps</a>
        	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        	            <span class="navbar-toggler-icon"></span>
        	            </button>
        	            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <span class="badge badge-info" id="clock"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>auth/login/" class="nav-link">Masuk</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>auth/register/" class="nav-link">Mendaftar</a>
                                </li>
                            </ul>
        	            </div>
                	</div>
                </nav>

                <div class="container text-white my-3">
                    <h3>Selamat Datang</h3>
                    <p class="p-0 m-0">Selamat datang di halaman aplikasi perpus. Masuk dengan akun untuk melihat daftar bacaan, kelola peminjaman dan melihat buku yang telat dikembalikan.</p>
                </div>            
            </div>

            <main class="container mt-3">
                
                <div class="row justify-content-center">

                    <div class="col-md-3 mb-3">
                        <div class="card bg-white shadow">
                            <div class="card-body text-dark">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-8">
                                        <span class="m-0">Buku Terpinjam</span>
                                        <h3 class="m-0"><?php echo $count[0]; ?> <small>Buku</small></h3>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="icon bg-primary text-white">
                                            <i class="fas fa-book"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="card bg-white shadow">
                            <div class="card-body text-dark">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-8">
                                        <span class="m-0">Pengunjung</span>
                                        <h3 class="m-0"><?php echo $count[1]; ?> <small>Orang</small></h3>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="icon bg-danger text-white">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="card bg-white shadow">
                            <div class="card-body text-dark">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-8">
                                        <span class="m-0">Pengguna Terdaftar</span>
                                        <h3 class="m-0"><?php echo $count[2]; ?> <small>Orang</small></h3>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="icon bg-success text-white">
                                            <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center">
                    <div class="col-md-12">
                        
                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <div class="card-body card shadow">
                                    <h3>Daftar Pengunjung</h3>
                                    <p>Pengunjung yang terdaftar pada hari ini.</p>

                                    <div class="table-responsive">
                                        <table id="visitor" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nama Pengunjung</th>
                                                    <th>Jam Kunjung</th>
                                                    <th>Tujuan</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Nama Pengunjung</th>
                                                    <th>Jam Kunjung</th>
                                                    <th>Tujuan</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                
                                <div class="card-body card shadow">
                                    <h3>Buku Tamu</h3>
                                    <p>Wajib diisi apabila ada tanda <em>asterisk</em> (<span class="text-danger">*</span>)!</p>

                                    <div class="collapse" id="bukuTamuAlert">
                                        <div class="alert"></div>
                                    </div>

                                    <form class="row" id="bukuTamu">
                                        <div class="col-6">
                                          
                                            <div class="form-group">
                                                <label for="inputName">Nama Depan<span class="text-danger">*</span></label>
                                                <input type="text" required="required" class="form-control" id="inputName" aria-describedby="firstNameHelp" name="FirstName" />
                                                <small id="firstNameHelp" class="form-text text-muted">Isikan nama depan anda.</small>
                                            </div>  
                                            
                                        </div>
                                        <div class="col-6">
                                          
                                            <div class="form-group">
                                                <label for="inputNameLast">Nama Belakang<span class="text-danger">*</span></label>
                                                <input name="LastName" type="text" class="form-control" id="inputNameLast" required="required" aria-describedby="lastNameHelp" />
                                                <small id="lastNameHelp" class="form-text text-muted">Isikan nama belakang anda.</small>
                                            </div>  
                                            
                                        </div>

                                        <div class="col-md-12">
                                          
                                            <div class="form-group">
                                                <label for="jenisKelamin">Jenis Kelamin<span class="text-danger">*</span></label>
                                                <select name="selectKelamin" class="form-control" id="jenisKelamin" aria-describedby="kelaminSelect" data-live-search="true" required="required">
                                                    <option selected="selected" disabled="disabled">Pilih</option>
                                                    <option value="lk">Laki-Laki</option>
                                                    <option value="pr">Perempuan</option>
                                                    <option value="wr">Waria</option>
                                                    <option value="un">Tidak Terdefinisi</option>
                                                </select>
                                                <small id="kelaminSelect" class="form-text text-muted">Pilih jenis kelamin anda.</small>
                                            </div>  

                                        </div>

                                        <div class="col-md-12">
                                          
                                            <div class="form-group">
                                                <label for="alamatRumah">Alamat Rumah<span class="text-danger">*</span></label>
                                                <textarea name="alamat" class="form-control" id="alamatRumah" aria-describedby="alamat" data-live-search="true" placeholder="Dimanakah rumahmu?" required="required"></textarea>
                                                <small id="alamat" class="form-text text-muted">Dimanakah rumahmu?</small>
                                            </div>  

                                        </div>

                                        <div class="col-md-12">
                                          
                                            <div class="form-group">
                                                <label>Apa Tujuan Anda?<span class="text-danger">*</span></label>
                                                
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="tujuan1" name="tujuan[]" value="baca" />
                                                            <label class="custom-control-label" for="tujuan1">Baca Buku</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="tujuan2" name="tujuan[]" value="wifi" />
                                                            <label class="custom-control-label" for="tujuan2">Mengakses Internet</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="tujuan3" name="tujuan[]" value="pertemuan" />
                                                            <label class="custom-control-label" for="tujuan3">Agenda Pertemuan Santai</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="tujuan4" name="tujuan[]" value="koran" />
                                                            <label class="custom-control-label" for="tujuan4">Baca Koran</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" id="tujuan5" name="tujuan[]" value="lainnya" />
                                                            <label class="custom-control-label" for="tujuan5">Lainnya</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>  

                                        </div>

                                        <input type="hidden" name="alamat_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />

                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit">Simpan<i class="fas fa-save ml-2"></i></button>
                                        </div>


                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </main>

        </div>

        <footer class="footer bg-white shadow py-3 mt-5">
        	<div class="container">
        		<span class="text-muted" data-trigger="text-muted-dark">Hak Cipta <?php echo date('Y'); ?> <a class="font-weight-bold text-muted" href="/">Perpus Apps</a>.</span>
        	</div>
        </footer>

        <script src="<?php echo base_url(); ?>assets/frontend/vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/vendor/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugins -->
        <script href="<?php echo base_url(); ?>assets/frontend/vendor/fontawesome/js/all.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/vendor/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/vendor/datatables/datatables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    function updateClock() {
        var currentTime = new Date();
        var currentHours = currentTime.getHours();
        var currentMinutes = currentTime.getMinutes();
        var currentSeconds = currentTime.getSeconds();

        // Show Date
        var monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];
        var dayNames = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];

        var newDate = new Date();
        newDate.setDate(newDate.getDate() + 1);

        // Pad the minutes and seconds with leading zeros, if required
        currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
        currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

        // Choose either "AM" or "PM" as appropriate
        var timeOfDay = (currentHours < 12) ? "AM" : "PM";
        // Convert the hours component to 12-hour format if needed
        currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;
        // Convert an hours component of "0" to "12"
        currentHours = (currentHours == 0) ? 12 : currentHours;
        // Compose the string for display
        var currentTimeString = dayNames[newDate.getDay()] + ", " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear() + " " + currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;

        $("#clock").html(currentTimeString);
    }
    $(document).ready(function() {
        setInterval('updateClock()', 1000);
    });

    $('select').selectpicker();

    $('#visitor').DataTable({
        'ajax' : '<?php echo base_url( 'frontend/list-buku-tamu' ); ?>',
    });

    $( '#bukuTamu' ).submit(function(e) {
        e.preventDefault();

        $('#bukuTamuAlert').collapse('hide');

        var $f = $(this);
        var $r = $f.serializeArray();

        $.ajax({
            'url'       : '<?php echo base_url( 'frontend/buku-tamu' ); ?>',
            'data'      : $r,
            'method'    : "POST",
            beforeSend  : function() {
                $('[type="submit"]').attr({
                    'disabled' : 'disabled',
                }).html( '<i class="fas fa-spin fa-spinner mr-2"></i>Tunggu Sebentar' );
            },
            error       : function() {
                $('#bukuTamuAlert').collapse('show');
                $('#bukuTamuAlert .alert').addClass('alert-danger').removeClass('alert-success').html('<h3>Gagal!</h3><p>Ups, nampaknya server sedang bermasalah. Coba lagi beberapa saat.</p>');
                
                setInterval(function() {
                    $('#bukuTamuAlert').collapse('hide');
                    $('[type="submit"]').removeAttr( 'disabled' ).html( 'Simpan<i class="fas fa-save ml-2"></i>' );
                }, 5000);
            },
            success     : function(s) {
                if (s == 1) {
                    $('#bukuTamuAlert').collapse('show');
                    $('#bukuTamuAlert .alert').addClass('alert-success').removeClass('alert-danger').html('<h3>Sukses!</h3><p>Anda telah mengirimkan data, terimakasih telah mengisi kuisioner ini.</p>');

                    $f[0].reset();
                    
                    setInterval(function() {
                        $('#bukuTamuAlert').collapse('hide');
                        $('[type="submit"]').removeAttr( 'disabled' ).html( 'Simpan<i class="fas fa-save ml-2"></i>' );
                    }, 5000);

                    $('#visitor').DataTable().destroy();
                    $('#visitor').DataTable({
                        'ajax' : '<?php echo base_url( 'frontend/list-buku-tamu' ); ?>',
                    });
                } else {
                    $('#bukuTamuAlert').collapse('show');
                    $('#bukuTamuAlert .alert').addClass('alert-danger').removeClass('alert-success').html('<h3>Gagal!</h3><p>Ups, nampaknya server sedang bermasalah. Coba lagi beberapa saat.</p>');
                    
                    setInterval(function() {
                        $('#bukuTamuAlert').collapse('hide');
                        $('[type="submit"]').removeAttr( 'disabled' ).html( 'Simpan<i class="fas fa-save ml-2"></i>' );
                    }, 5000);
                }
            }
        });
    });
    </script>


    </body>
</html>