<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .bg_menu{
                background-image: linear-gradient(#C70909, #F0BF0F);
            }
        </style>
    </head>
    <body>
 
        <ul class="navbar-nav  bg_menu bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url()?>dashboardrakha">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Laundry <sup>Online</sup></div>
            </a>

            <hr class="sidebar-divider my-0">


            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url()?>dashboardrakha">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>konsumenrakha">
                <i class="fas fa-users"></i><span>Data Konsumen</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>paketrakha">
                <i class="fas fa-box-open"></i><span>Data Paket</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>transaksirakha/tambah ">
                    <i class="fas fa-dollar-sign"></i><span>Tambah Transaksi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>transaksirakha/riwayat">
                <i class="fas fa-history"></i><span>Riwayat Transaksi</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>loginrakha/logout">
                <i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
            </li>

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
    </body>
</html>



</ul>
<!-- End of Sidebar -->