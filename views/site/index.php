<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\web\View;
use yii\widgets\Pjax;

$this->title = 'Dashboard';
// instantiate the barcode class
// $barcode = new Barcode;
$barcode = new \Com\Tecnick\Barcode\Barcode();
// generate a barcode
$bobj = $barcode->getBarcodeObj(
    'QRCODE,H',                     // barcode type and additional comma-separated parameters
    'https://rsudarifinachmad.riau.go.id',          // data string to encode
    -4,                             // bar width (use absolute or negative value as multiplication factor)
    -4,                             // bar height (use absolute or negative value as multiplication factor)
    'black',                        // foreground color
    array(-2, -2, -2, -2)           // padding (use absolute or negative values as multiplication factors)
)->setBackgroundColor('white')
    ->setSize(270, 270); // background color

// output the barcode as HTML div (see other output formats in the documentation and examples)

?>
<style type="text/css">
    /* .mcu-spesialis-audiometri-form {
        font-size: 10px;
    } */

    table {
        /* border-collapse: collapse; */
        font-size: 12px;
    }

    table td {
        padding: 4.800;
    }

    /* 
    .form-group {
        margin-bottom: 0px !important;
    }

    .tabel-tht label {
        margin-bottom: 0px !important;
    } */


    .tbl-mata tr th,
    .tbl-mata tr.td-garis td {
        border: 1px solid #000000;
        vertical-align: top;
    }

    .tbl-mata tr td {
        vertical-align: top;
    }

    .tabel-penata tr th,
    .tabel-penata tr td {
        border: 1px solid #000000;
        vertical-align: top;
    }

    /* .tbl-gigi .angka-gigi {
        text-align: center;
    } */

    /* .tbl-oklusi tr td.col-1 {
        width: 35%;
        border-left: 1px solid #000000;
        border-bottom: 1px solid #000000;
    }

    .tbl-oklusi tr td.col-2 {
        width: 1%;
        text-align: left;
        border-bottom: 1px solid #000000;
    }

    .tbl-oklusi tr td.col-3 {
        width: 64%;
        text-align: left !important;
        border-bottom: 1px solid #000000;
        border-right: 1px solid #000000;
    } */

    .tbl-ttd tr td.col-1 {
        border-left: 1px solid #000000;
        border-bottom: 1px solid #000000;
    }

    .tbl-ttd tr td.col-2 {
        border-bottom: 1px solid #000000;
    }

    .tbl-ttd tr td.col-3 {
        border-bottom: 1px solid #000000;
        border-right: 1px solid #000000;
    }
</style>

<?php Pjax::begin(['id' => 'pjax-absensi']); ?>
<div class="row">
    <div class="col-xl-4">
        <div class="card-box">
            <div class="dropdown pull-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>

            <h4 class="header-title mt-0 m-b-30">Lima Urutan Absen Terakhir</h4>

            <div class="inbox-widget nicescroll" style="height: 315px;">
                <a href="#">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="<?= Url::to('@web/img/user.png') ?>" class="rounded-circle" alt=""></div>
                        <p class="inbox-item-author">Wahid Admin , ST</p>
                        <p class="inbox-item-text">Tepat Waktu</p>
                        <p class="inbox-item-date">21:30 PM</p>
                    </div>
                </a>
                <a href="#">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="<?= Url::to('@web/img/user.png') ?>" class="rounded-circle" alt=""></div>
                        <p class="inbox-item-author">Anas Kayrunas , ST</p>
                        <p class="inbox-item-text">Tepat Waktu</p>
                        <p class="inbox-item-date">21:30 PM</p>
                    </div>
                </a>
                <a href="#">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="<?= Url::to('@web/img/user.png') ?>" class="rounded-circle" alt=""></div>
                        <p class="inbox-item-author">Dicky Ermawan , ST</p>
                        <p class="inbox-item-text">Tepat Waktu</p>
                        <p class="inbox-item-date">21:30 PM</p>
                    </div>
                </a>
                <a href="#">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="<?= Url::to('@web/img/user.png') ?>" class="rounded-circle" alt=""></div>
                        <p class="inbox-item-author">Khairul Anwar , ST</p>
                        <p class="inbox-item-text">Tepat Waktu</p>
                        <p class="inbox-item-date">21:30 PM</p>
                    </div>
                </a>
                <a href="#">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="<?= Url::to('@web/img/user.png') ?>" class="rounded-circle" alt=""></div>
                        <p class="inbox-item-author">Ahmad Fauzi Rahman , ST</p>
                        <p class="inbox-item-text">Tepat Waktu</p>
                        <p class="inbox-item-date">21:30 PM</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="card-box">
            <div class="dropdown pull-right">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                </div>
            </div>

            <h4 class="header-title mt-0 m-b-30 text-center">Sistem Informasi Presensi dan Absensi</h4>

            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Hari & Tanggal</th>
                            <th>Nama</th>
                            <th>Jam Masuk [Lokasi]</th>
                            <th>Jam Pulang [Lokasi]</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i <= 30; $i++) { ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td>Senin , 16 November 2020</td>
                                <td>Wahid Admin ,ST</td>
                                <td>07:30:00 WIB</td>
                                <td><span class="badge badge-success">Tepat Waktu</span></td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php Pjax::end(); ?>

