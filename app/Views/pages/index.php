<?= $this->extend('layouts/template'); ?>


<?= $this->section('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="col-lg-12" style="background-color:white;">
        <h1 align="center">SELAMAT DATANG</h1><br />
        <h3 align="center">Sistem Antrian Rumah Sakit Kita Bersama</h3><br />
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading" align="center">
            <H1>PILIH KATEGORI</H1>
        </div>
        <br>
        <div class="container">
        <div class="row">
            <div class="col-sm">
            <a href="<?= base_url('pelayanan'); ?>">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-2">
                        <div class="widget orange-bg p-lg text-center">
                            <div class="m-b-md">
                                <i class="fa fa-user-md fa-4x"></i>
                                <h1 class="m-xs"><br /></h1>
                                <h3 class="font-bold no-margins">
                                    ANTRIAN
                                </h3>

                            </div>
                        </div>
                    </div>
                </a>            </div>
            <div class="col-sm">
            <a href="<?= base_url('pelayanan'); ?>">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-2">
                        <div class="widget orange-bg p-lg text-center">
                            <div class="m-b-md">
                                <i class="fa fa-wheelchair fa-4x"></i>
                                <h1 class="m-xs"><br /></h1>
                                <h3 class="font-bold no-margins">
                                    LOKET
                                </h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm">
            <a href="<?php echo base_url('pelayanan'); ?>">
                    <div class="col-lg-2">
                        <div class="widget orange-bg p-lg text-center">
                            <div class="m-b-md">
                                <i class="fa fa-users fa-4x"></i>
                                <h1 class="m-xs"><br /></h1>
                                <h3 class="font-bold no-margins">
                                    PELAYANAN
                                </h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        </div>
    </div>
</div>
    
<?= $this->endSection(); ?>
