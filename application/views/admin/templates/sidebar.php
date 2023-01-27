<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/TPE_admin.png" />
        <title>Ageman || Dashboard</title>

        <!-- Custom fonts for this template-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">        <!-- <link href="<?php echo base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">


        <!-- Custom styles for this template-->
        <link href="<?php echo base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    </head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('dashboard/dashboard_admin')?>">
                <div class="sidebar-brand-icon">
                    <img src="<?php echo base_url()?>/assets/images/TPE_admin.png" alt="Logo" width="50" class="d-inline-block align-text-top">
                </div>
                <div class="sidebar-brand-text mx-3">Ageman</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('dashboard/dashboard_admin')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('kategori')?>">
                <i class="fas fa-th"></i>
                    <span>Kategori</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('kostum')?>">
                <i class="fas fa-shirt"></i>
                    <span>Kostum</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('member')?>">
                <i class="fas fa-fw-duotone fa-users"></i>
                    <span>User</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Sewa</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Login Screens:</h6> -->
                        <a class="collapse-item" href="<?php echo site_url('sewa')?>">Sewa</a>
                        <a class="collapse-item" href="<?php echo site_url('detailSewa')?>">Detail Sewa</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#"data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fad fa-sign-out"></i>
                    <span>Logout</span>
                </a>
            </li>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Klik "Logout" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="<?php echo site_url('login_admin/logout')?>">Logout</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
       

        </ul>
        <!-- End of Sidebar -->