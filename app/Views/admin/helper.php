<?php echo getSite()->site_name; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Uji Coba ANBK | Kerjakan Tes</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content='width=device-width, initial-scale=0.9, minimum-scale=0.1, maximum-scale=10, user-scalable=yes'
        name='viewport'>
    <meta name="description" content="Aplikasi Ujian Online ZAYCBT">
    <meta name="keywords" content="Aplikasi Ujian Online ZYACBT">
    <meta name="author" content="Achmad Lutfi">
    <!-- Bootstrap 3.3.4 -->
    <link href="https://localhost/vue/quiz3/public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://localhost/vue/quiz3/public/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Theme style -->
    <link href="https://localhost/vue/quiz3/public/plugins/adminlte/css/AdminLTE.css" rel="stylesheet"
        type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="https://localhost/vue/quiz3/public/plugins/adminlte/css/skins/_all-skins.min.css" rel="stylesheet"
        type="text/css" />

    <link href="https://localhost/vue/quiz3/public/plugins/pnotify/pnotify.custom.min.css" rel="stylesheet"
        type="text/css" />
    <!-- DATA TABLES -->
    <link href="https://localhost/vue/quiz3/public/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet"
        type="text/css" />
    <link
        href="https://localhost/vue/quiz3/public/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css"
        rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    <!-- jQuery 2.1.4 -->
    <script src="https://localhost/vue/quiz3/public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="https://localhost/vue/quiz3/public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="https://localhost/vue/quiz3/public/plugins/adminlte/js/app.min.js" type="text/javascript"></script>

    <script src="https://localhost/vue/quiz3/public/app.js" type="text/javascript"></script>

    <script src="https://localhost/vue/quiz3/public/plugins/datatables/jquery.dataTables.min.js" type="text/javascript">
    </script>
    <script src="https://localhost/vue/quiz3/public/plugins/datatables/dataTables.reload.js" type="text/javascript">
    </script>
    <script src="https://localhost/vue/quiz3/public/plugins/datatables/dataTables.bootstrap.min.js"
        type="text/javascript"></script>
    <script
        src="https://localhost/vue/quiz3/public/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"
        type="text/javascript"></script>

    <script src="https://localhost/vue/quiz3/public/plugins/pnotify/pnotify.custom.min.js" type="text/javascript">
    </script>
    <script src="https://localhost/vue/quiz3/public/app.js" type="text/javascript"></script>

    <!-- membuat gambar responsive pada soal -->
    <style type="text/css">
    #isi-tes-soal img {
        display: block;
        max-width: 100%;
        height: auto;
    }
    </style>

    <script type="text/javascript">
    function notify_success(pesan) {
        new PNotify({
            title: 'Berhasil',
            text: pesan,
            type: 'success',
            history: false,
            delay: 2000
        });
    }

    function notify_info(pesan) {
        new PNotify({
            title: 'Informasi',
            text: pesan,
            type: 'info',
            history: false,
            delay: 2000
        });
    }

    function notify_error(pesan) {
        new PNotify({
            title: 'Error',
            text: pesan,
            type: 'error',
            history: false,
            delay: 2000
        });
    }
    </script>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="skin-green layout-top-nav">
    <div class="wrapper">

        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="https://localhost/vue/quiz3/" class="navbar-brand"> <b>Uji Coba ANBK</b></a>
                    </div>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><span id="timestamp"></span></a></li>
                            </ul>
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="https://localhost/vue/quiz3/public/images/avatar.png" class="user-image"
                                        alt="User Image" />
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">Ccoba</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header" style="max-height: 70px;">
                                        <p>
                                            Ccoba | AKM </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a data-toggle="modal" href="#modal-password"
                                                class="btn btn-default btn-flat">Password</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="https://localhost/vue/quiz3/index.php/welcome/logout"
                                                class="btn btn-default btn-flat">Log out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-custom-menu -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!-- Full Width Column -->
        <div class="content-wrapper">
            <div class="container">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Tes : Literasi </h1>
                    <div class="breadcrumb">
                        <img src="https://localhost/vue/quiz3/public/images/zoom.png" style="cursor: pointer;"
                            height="20" onclick="zoomnormal()" title="Klik ukuran font normal" />&nbsp;&nbsp;
                        <img src="https://localhost/vue/quiz3/public/images/zoom.png" style="cursor: pointer;"
                            height="26" onclick="zoombesar()" title="Klik ukuran font lebih besar" />
                    </div>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <form action="https://localhost/vue/quiz3/index.php/tes_kerjakan/simpan_jawaban"
                            id="form-kerjakan" method="post" accept-charset="utf-8">
                            <input type="hidden" name="tes-id" id="tes-id" value="11">
                            <input type="hidden" name="tes-user-id" id="tes-user-id" value="17">
                            <input type="hidden" name="tes-soal-id" id="tes-soal-id" value="81">
                            <input type="hidden" name="tes-soal-nomor" id="tes-soal-nomor" value="1">
                            <input type="hidden" name="tes-soal-jml" id="tes-soal-jml" value="10">
                            <input type="hidden" name="tes-soal-ragu" id="tes-soal-ragu" value="">
                            <div class="box box-success box-solid">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Soal <span id="judul-soal">ke 1</span></h3>
                                    <div class="box-tools pull-right">
                                        <div class="pull-right">
                                            <div id="sisa-waktu"></div>
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div id="isi-tes-soal" style="font-size: 15px;">
                                        <p style="text-align: center;"><strong>Bekantan Monyet Berhidung Merah</strong>
                                        </p>

                                        <p><img alt=""
                                                src="https://localhost/vue/quiz3/uploads/topik_10/6165741236e6c.jpg" />
                                        </p>

                                        <p>Salah satu hewan asli yang berasal dari Kalimantan adalah bekantan.
                                            Bekantan&nbsp;merupakan jenis&nbsp;monyet dengan hidung besar yang
                                            besar&nbsp;dan memiliki rambut berwarna cokelat kemerahan.&nbsp;Ciri utama
                                            yang membedakan bekantan dari monyet&nbsp;lainnya adalah hidung panjang dan
                                            besar. Ciri utama ini&nbsp; hanya ditemukan pada bekantan
                                            spesies&nbsp;jantan. Hidung bekantan jantan begitu besar yang terlihat
                                            menggantung di atas mulut.&nbsp;Jika&nbsp;ingin makan,&nbsp; si jantan ini
                                            harus mendorong hidungnya keluar dari mulut agar dapat meletakkan makanan ke
                                            dalam mulut mereka.</p>

                                        <p>Bekantan jantan berukuran lebih besar daripada bekantan betina. Ukuran
                                            bekantan jantan dapat mencapai 75 cm dengan berat mencapai 24 kg, sedangkan
                                            bekantan&nbsp;betina berukuran 60 cm dengan berat 12 kg. Makanan bekantan
                                            adalah buah-buahan dan biji-bijian. Selain itu, bekantan memakan aneka
                                            daun-daunan. Namun, makanan daun-daunan ini&nbsp; menghasilkan banyak gas
                                            pada waktu dicerna. Ini mengakibatkan efek samping yang membuat perut
                                            bekantan jadi membuncit.</p>

                                        <p>Saat ini, populasi bekantan menurun drastis. Hal tersebut disebabkan&nbsp;
                                            perburuan liar yang dilakukan oleh manusia. Selain itu, hutan tempat
                                            bekantan tinggal juga rusak karena penebangan hutan. Pohon-pohon yang
                                            menjadi tempat tinggal bekantan berkurang sehingga bekantan tergusur. Para
                                            bekantan tersebut kerap mendatangi perkampungan manusia untuk mencari
                                            makan.&nbsp;&nbsp;</p>

                                        <p>Ciri utama yang membuat monyet dan bekantan berbeda berdasarkan bacaan
                                            tersebut adalah .&hellip;</p>
                                        <hr />
                                        <div class="form-group">
                                            <div class="radio"><label><input type="radio" onchange="jawab()"
                                                        name="soal-jawaban" value="664">
                                                    <p>Makanan yang biasa dimakan sehari-hari</p>
                                                </label></div>
                                            <div class="radio"><label><input type="radio" onchange="jawab()"
                                                        name="soal-jawaban" value="662">
                                                    <p>Ukuran tubuh yang dimiliki oleh bekantan betina</p>
                                                </label></div>
                                            <div class="radio"><label><input type="radio" onchange="jawab()"
                                                        name="soal-jawaban" value="663">
                                                    <p>Hidung panjang dan besar&nbsp;pada&nbsp;spesies jantan</p>
                                                </label></div>
                                            <div class="radio"><label><input type="radio" onchange="jawab()"
                                                        name="soal-jawaban" value="665">
                                                    <p>Tempat tinggal bekantan yang ada di pedalaman</p>
                                                </label></div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="button" class="btn btn-default hide" id="btn-sebelumnya">Soal
                                        Sebelumnya</button>&nbsp;&nbsp;&nbsp;
                                    <div class="btn btn-warning" id="btn-ragu" onclick="ragu()">
                                        <input type="checkbox" style="width:10px;height:10px;" name="btn-ragu-checkbox"
                                            id="btn-ragu-checkbox" /> Ragu-ragu
                                    </div>&nbsp;&nbsp;&nbsp;
                                    <button type="button" class="btn btn-default" id="btn-selanjutnya">Soal
                                        Selanjutnya</button>
                                </div>
                            </div><!-- /.box -->
                        </form>
                    </div>
                    <div class="row">
                        <div class="box box-success box-solid">
                            <div class="box-header with-border">
                                <h3 class="box-title">Daftar Soal</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <button id="btn-soal-1" onclick="soal('81')" class="btn btn-default"
                                    style="margin-bottom: 5px;" title="Soal ke 1">1</button>

                                <button id="btn-soal-2" onclick="soal('82')" class="btn btn-default"
                                    style="margin-bottom: 5px;" title="Soal ke 2">2</button>

                                <button id="btn-soal-3" onclick="soal('83')" class="btn btn-default"
                                    style="margin-bottom: 5px;" title="Soal ke 3">3</button>

                                <button id="btn-soal-4" onclick="soal('84')" class="btn btn-default"
                                    style="margin-bottom: 5px;" title="Soal ke 4">4</button>

                                <button id="btn-soal-5" onclick="soal('85')" class="btn btn-default"
                                    style="margin-bottom: 5px;" title="Soal ke 5">5</button>

                                <button id="btn-soal-6" onclick="soal('86')" class="btn btn-default"
                                    style="margin-bottom: 5px;" title="Soal ke 6">6</button>

                                <button id="btn-soal-7" onclick="soal('87')" class="btn btn-default"
                                    style="margin-bottom: 5px;" title="Soal ke 7">7</button>

                                <button id="btn-soal-8" onclick="soal('88')" class="btn btn-default"
                                    style="margin-bottom: 5px;" title="Soal ke 8">8</button>

                                <button id="btn-soal-9" onclick="soal('89')" class="btn btn-default"
                                    style="margin-bottom: 5px;" title="Soal ke 9">9</button>

                                <button id="btn-soal-10" onclick="soal('90')" class="btn btn-default"
                                    style="margin-bottom: 5px;" title="Soal ke 10">10</button>

                                <p class="help-block">Soal yang sudah dijawab akan berwarna Biru.</p>
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <button class="btn btn-default pull-right" id="btn-hentikan">Hentikan Tes</button>
                            </div>
                        </div><!-- /.box -->
                    </div>
                </section><!-- /.content -->

                <div class="modal" style="max-height: 100%;overflow-y: auto;" id="modal-hentikan" data-backdrop="static"
                    tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                    <form action="https://localhost/vue/quiz3/index.php/tes_kerjakan/hentikan_tes" id="form-hentikan"
                        method="post" accept-charset="utf-8">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                                    <div id="trx-judul">Konfirmasi Hentikan Tes</div>
                                </div>
                                <div class="modal-body">
                                    <div class="row-fluid">
                                        <div class="box-body">
                                            <div id="form-pesan"></div>
                                            <div class="callout callout-info">
                                                <p>Apakah anda yakin mengakhiri mata uji ini ?
                                                    <br />Jawaban Tes yang sudah selesai tidak dapat diubah.
                                                </p>

                                            </div>
                                            <div class="form-group">
                                                <label>Nama Tes</label>
                                                <input type="hidden" name="hentikan-tes-id" id="hentikan-tes-id">
                                                <input type="hidden" name="hentikan-tes-user-id"
                                                    id="hentikan-tes-user-id">
                                                <input type="text" class="form-control" id="hentikan-tes-nama"
                                                    name="hentikan-tes-nama" readonly>
                                            </div>

                                            <div class="form-group">
                                                <label>Keterangan Soal</label>
                                                <input type="text" class="form-control" id="hentikan-dijawab"
                                                    name="hentikan-dijawab" readonly>
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" id="hentikan-centang"
                                                            name="hentikan-centang" value="1"> Centang dan klik tombol
                                                        Hentikan Tes.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" id="tambah-simpan" class="btn btn-primary">Hentikan
                                        Tes</button>
                                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div><!-- /.container -->

            <script type="text/javascript">
            function zoombesar() {
                $('#isi-tes-soal').css("font-size", "140%");
                $('#isi-tes-soal').css("line-height", "140%");
            }

            function zoomnormal() {
                $('#isi-tes-soal').css("font-size", "15px");
                $('#isi-tes-soal').css("line-height", "110%");
            }

            function ragu() {
                $("#modal-proses").modal('show');

                $.ajax({
                    url: 'https://localhost/vue/quiz3/index.php/tes_kerjakan/get_tes_soal_by_tessoal/' + $(
                        '#tes-soal-id').val(),
                    type: "POST",
                    cache: false,
                    timeout: 10000,
                    success: function(respon) {
                        var data = $.parseJSON(respon);
                        if (data.data == 1) {
                            // Mengubah nilai ragu-ragu di database
                            if ($('#tes-soal-ragu').val() == 0) {
                                var ragu = 1;
                            } else {
                                var ragu = 0;
                            }
                            $.ajax({
                                url: 'https://localhost/vue/quiz3/index.php/tes_kerjakan/update_tes_soal_ragu/' +
                                    $('#tes-soal-id').val() + '/' + ragu,
                                type: "POST",
                                cache: false,
                                timeout: 5000,
                                success: function(respon) {
                                    var data = $.parseJSON(respon);
                                    if (data.data == 1) {
                                        notify_success('Jawaban Ragu-ragu berhasil diubah');
                                    }
                                },
                                error: function(xmlhttprequest, textstatus, message) {
                                    if (textstatus === "timeout") {
                                        $("#modal-proses").modal('hide');
                                        notify_error(
                                            "Gagal mengubah Soal, Silahkan Refresh Halaman");
                                    } else {
                                        $("#modal-proses").modal('hide');
                                        notify_error(textstatus);
                                    }
                                }
                            });

                            // Mengubah warna daftar soal dan checkbox pada tombol ragu-ragu
                            if (data.tessoal_dikerjakan == 1) {
                                if ($('#tes-soal-ragu').val() == 0) {
                                    // Membuat menjadi ragu-ragu
                                    $('#btn-soal-' + $('#tes-soal-nomor').val()).removeClass('btn-primary');
                                    $('#btn-soal-' + $('#tes-soal-nomor').val()).addClass('btn-warning');
                                    $('#btn-ragu-checkbox').prop("checked", true);
                                    $('#tes-soal-ragu').val(1);
                                } else {
                                    $('#btn-soal-' + $('#tes-soal-nomor').val()).removeClass('btn-warning');
                                    $('#btn-soal-' + $('#tes-soal-nomor').val()).addClass('btn-primary');
                                    $('#btn-ragu-checkbox').prop("checked", false);
                                    $('#tes-soal-ragu').val(0);
                                }
                            } else {
                                if ($('#tes-soal-ragu').val() == 0) {
                                    // Membuat menjadi ragu-ragu
                                    $('#btn-soal-' + $('#tes-soal-nomor').val()).removeClass('btn-default');
                                    $('#btn-soal-' + $('#tes-soal-nomor').val()).addClass('btn-warning');
                                    $('#btn-ragu-checkbox').prop("checked", true);
                                    $('#tes-soal-ragu').val(1);
                                } else {
                                    $('#btn-soal-' + $('#tes-soal-nomor').val()).removeClass('btn-warning');
                                    $('#btn-soal-' + $('#tes-soal-nomor').val()).addClass('btn-default');
                                    $('#btn-ragu-checkbox').prop("checked", false);
                                    $('#tes-soal-ragu').val(0);
                                }
                            }
                        }
                        $("#modal-proses").modal('hide');
                    },
                    error: function(xmlhttprequest, textstatus, message) {
                        if (textstatus === "timeout") {
                            $("#modal-proses").modal('hide');
                            notify_error("Gagal mengubah soal, Silahkan Refresh Halaman");
                        } else {
                            $("#modal-proses").modal('hide');
                            notify_error(textstatus);
                        }
                    }
                });
            }

            function soal(tessoal_id) {
                $("#modal-proses").modal('show');
                $.ajax({
                    url: 'https://localhost/vue/quiz3/index.php/tes_kerjakan/get_soal_by_tessoal/' +
                        tessoal_id + '/' + $('#tes-user-id').val(),
                    type: "POST",
                    cache: false,
                    timeout: 10000,
                    success: function(respon) {
                        var data = $.parseJSON(respon);
                        if (data.data == 1) {
                            $('#tes-soal-id').val(data.tes_soal_id);
                            $('#tes-soal-nomor').val(data.tes_soal_nomor);
                            $('#isi-tes-soal').html(data.tes_soal);
                            $('#tes-soal-ragu').val(data.tes_ragu);
                            $('#judul-soal').html('ke ' + data.tes_soal_nomor);

                            if (data.tes_ragu == 0) {
                                // Menghilangkan checkbox ragu-ragu
                                $('#btn-ragu-checkbox').prop("checked", false);
                            } else {
                                // Menambah checkbox ragu-ragu
                                $('#btn-ragu-checkbox').prop("checked", true);
                            }

                            // menghilangkan tombol sebelum jika soal di nomor1
                            // dan menghilangkan tombol selanjutnya jika disoal terakhir
                            var tes_soal_nomor = parseInt($('#tes-soal-nomor').val());
                            var tes_soal_jml = parseInt($('#tes-soal-jml').val());
                            var tes_soal_tujuan = data.tes_soal_nomor;
                            if (tes_soal_tujuan == 1) {
                                $('#btn-sebelumnya').addClass('hide');
                                $('#btn-selanjutnya').removeClass('hide');
                            } else if (tes_soal_tujuan == tes_soal_jml) {
                                $('#btn-sebelumnya').removeClass('hide');
                                $('#btn-selanjutnya').addClass('hide');
                            } else {
                                $('#btn-sebelumnya').removeClass('hide');
                                $('#btn-selanjutnya').removeClass('hide');
                            }

                        } else if (data.data == 2) {
                            window.location.reload();
                        }
                        $("#modal-proses").modal('hide');
                    },
                    error: function(xmlhttprequest, textstatus, message) {
                        if (textstatus === "timeout") {
                            $("#modal-proses").modal('hide');
                            notify_error("Gagal mengambil Soal, Silahkan Refresh Halaman");
                        } else {
                            $("#modal-proses").modal('hide');
                            notify_error(textstatus);
                        }
                    }
                });
            }

            function audio(status) {
                var audio_player_status = $('#audio-player-status').val();
                var audio_player_update = $('#audio-player-update').val();
                if (status == 1) {
                    if (audio_player_update == 0) {
                        $('#audio-player-update').val('1');
                        /**
                         * Update status audio jika pemutaran audio dibatasi
                         */
                        $.getJSON('https://localhost/vue/quiz3/index.php/tes_kerjakan/update_status_audio/' + $(
                            '#tes-soal-id').val(), function(data) {
                            if (data.data == 1) {
                                notify_success(data.pesan);
                            }
                        });
                    }
                }

                if (audio_player_status == 0) {
                    $('#audio-player-status').val('1');
                    $('#audio-player').trigger('play');
                    $('#audio-player-judul').html('Pause');
                    $('#audio-player-judul-logo').removeClass('fa-play');
                    $('#audio-player-judul-logo').addClass('fa-pause');
                } else {
                    $('#audio-player-status').val('0');
                    $('#audio-player').trigger('pause');
                    $('#audio-player-judul').html('Play');
                    $('#audio-player-judul-logo').removeClass('fa-pause');
                    $('#audio-player-judul-logo').addClass('fa-play');
                }
            }

            function audio_ended(status) {
                if (status == 1) {
                    $('#audio-control').addClass('hide');
                } else {
                    $('#audio-player-status').val('0');
                    $('#audio-player-judul').html('Play');
                    $('#audio-player-judul-logo').removeClass('fa-pause');
                    $('#audio-player-judul-logo').addClass('fa-play');
                }
            }

            function jawab() {
                $('#form-kerjakan').submit();
            }

            function hentikan_tes() {
                $("#modal-proses").modal('show');
                $('#hentikan-centang').prop("checked", false);
                $.getJSON('https://localhost/vue/quiz3/index.php/tes_kerjakan/get_tes_info/' + $('#tes-id').val(),
                    function(data) {
                        if (data.data == 1) {
                            $('#hentikan-tes-id').val(data.tes_id);
                            $('#hentikan-tes-user-id').val(data.tes_user_id);
                            $('#hentikan-tes-nama').val(data.tes_nama);
                            $('#hentikan-dijawab').val(data.tes_dijawab + " dijawab. " + data.tes_blum_dijawab +
                                " belum dijawab.");
                            $('#hentikan-belum-dijawab').val(data.tes_blum_dijawab);


                            $("#modal-hentikan").modal('show');
                        } else {
                            window.location.reload();
                        }
                        $("#modal-proses").modal('hide');
                    });
            }

            function soal_navigasi(navigasi) {
                var tes_soal_nomor = parseInt($('#tes-soal-nomor').val());
                var tes_soal_jml = parseInt($('#tes-soal-jml').val());
                var tes_soal_tujuan = tes_soal_nomor + navigasi;

                if ((tes_soal_tujuan >= 1 && tes_soal_tujuan <= tes_soal_jml)) {
                    $('#btn-soal-' + tes_soal_tujuan).trigger('click');
                }
            }

            $(function() {
                var sisa_detik = 1794;
                setInterval(function() {
                    var sisa_menit = Math.round(sisa_detik / 60);
                    var tulis_detik = Math.floor(sisa_detik % 60);
                    sisa_detik = sisa_detik - 1;
                    $("#sisa-waktu").html("Sisa Waktu : " + sisa_menit + " menit " + tulis_detik +
                        " detik");

                    if (sisa_detik < 1) {
                        window.location.reload();
                    }
                }, 1000);

                $('#btn-sebelumnya').click(function() {
                    soal_navigasi(-1);
                });

                $('#btn-selanjutnya').click(function() {
                    soal_navigasi(1);
                });

                $('#btn-hentikan').click(function() {
                    hentikan_tes();
                });
                /**
                 * Submit form soal saat sudah menjawab
                 */
                $('#form-kerjakan').submit(function() {
                    $("#modal-proses").modal('show');
                    $.ajax({
                        url: "https://localhost/vue/quiz3/index.php/tes_kerjakan/simpan_jawaban",
                        type: "POST",
                        data: $('#form-kerjakan').serialize(),
                        cache: false,
                        timeout: 10000,
                        success: function(respon) {
                            var obj = $.parseJSON(respon);
                            if (obj.status == 1) {
                                $("#modal-proses").modal('hide');
                                notify_success(obj.pesan);
                                $('#btn-soal-' + obj.nomor_soal).removeClass('btn-default');
                                $('#btn-soal-' + obj.nomor_soal).removeClass('btn-warning');
                                $('#btn-soal-' + obj.nomor_soal).addClass('btn-primary');
                            } else if (obj.status == 2) {
                                window.location.reload();
                            } else {
                                $("#modal-proses").modal('hide');
                                notify_error(obj.pesan);
                            }
                        },
                        error: function(xmlhttprequest, textstatus, message) {
                            if (textstatus === "timeout") {
                                $("#modal-proses").modal('hide');
                                notify_error(
                                    "Gagal menyimpan jawaban, Silahkan Refresh Halaman");
                            } else {
                                $("#modal-proses").modal('hide');
                                notify_error(textstatus);
                            }
                        }
                    });
                    return false;
                });

                /**
                 * Submit form hentikan tes
                 */
                $('#form-hentikan').submit(function() {
                    $("#modal-proses").modal('show');
                    $.ajax({
                        url: "https://localhost/vue/quiz3/index.php/tes_kerjakan/hentikan_tes",
                        type: "POST",
                        data: $('#form-hentikan').serialize(),
                        cache: false,
                        timeout: 10000,
                        success: function(respon) {
                            var obj = $.parseJSON(respon);
                            if (obj.status == 1) {
                                window.location.reload();
                            } else {
                                $("#modal-proses").modal('hide');
                                notify_error(obj.pesan);
                            }
                        },
                        error: function(xmlhttprequest, textstatus, message) {
                            if (textstatus === "timeout") {
                                $("#modal-proses").modal('hide');
                                notify_error(
                                    "Gagal menghentikan Tes, Silahkan Refresh Halaman");
                            } else {
                                $("#modal-proses").modal('hide');
                                notify_error(textstatus);
                            }
                        }
                    });
                    return false;
                });

                $(document).ready(function() {

                });
            });
            </script>
        </div><!-- /.content-wrapper -->
        <footer class="main-footer no-print">
            <div class="pull-right hidden-xs">
                Ccoba | <strong> <a href="https://localhost/vue/quiz3/index.php/welcome/logout">Log out</a></strong>
            </div>
            <div class="container">
                <strong>&copy; 2021 SDN Tomang 03</strong>
            </div><!-- /.container -->
        </footer>
    </div><!-- ./wrapper -->

    <div class="modal" id="modal-password" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <form action="https://localhost/vue/quiz3/index.php/tes_dashboard/password" id="form-password" method="post"
            accept-charset="utf-8">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Ubah Password</h4>
                    </div>
                    <div class="modal-body">
                        <span id="form-pesan-password"></span>
                        <div class="box-body">
                            <div class="form-group">
                                <label>Old Password</label>
                                <input type="password" class="form-control" id="password-old" name="password-old"
                                    placeholder="Old Password">
                            </div>
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control" id="password-new" name="password-new"
                                    placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id="password-confirm"
                                    name="password-confirm" placeholder="Confirm Password">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="password-submit">Ubah Password</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </form>
    </div><!-- /.modal -->

    <div class="modal" id="modal-proses" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div style="text-align: center;">
                        <img width="50" src="https://localhost/vue/quiz3/public/images/loading.gif" /> <br />Data Sedang
                        diproses...
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <script type="text/javascript">
    $(function() {
        var serverTime = 1646200364;
        var counterTime = 0;
        var date;

        setInterval(function() {
            date = new Date();

            serverTime = serverTime + 1;

            date.setTime(serverTime * 1000);
            time = date.toLocaleTimeString();
            $("#timestamp").html(time);
        }, 1000);

        $('#modal-password').on('shown.bs.modal', function(e) {
            $('#form-pesan-password').html('');
            $('#password-old').val('');
            $('#password-new').val('');
            $('#password-confirm').val('');
            $('#password-old').focus();
        });

        $('#form-password').submit(function() {
            $.ajax({
                url: "https://localhost/vue/quiz3/index.php/tes_dashboard/password",
                type: "POST",
                data: $('#form-password').serialize(),
                cache: false,
                success: function(respon) {
                    var obj = $.parseJSON(respon);
                    if (obj.status == 1) {
                        $('#form-pesan-password').html('');
                        $('#modal-password').modal('hide');
                        notify_success('Password berhasil diubah');
                    } else {
                        $('#form-pesan-password').html(pesan_err(obj.error));
                    }
                }
            });
            return false;
        });
    });
    </script>


</body>

</html>