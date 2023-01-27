<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/TPE_admin.png" />
    <title>Ageman</title>

    <!-- font awsome cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- bootstrap css -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Sweet Alert -->
    <link href="<?php echo base_url()?>assets/@sweetalert/theme-bootstrap-4/bootstrap-4.min.css" rel="stylesheet" />

    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css" />
  
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  </head>

  <body>
    <!-- Awal Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #1b4b43">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url('user/home')?>">
          <img src="<?php echo base_url()?>assets/images/Logo TPE.png" alt="Logo" width="120" class="d-inline-block align-text-top" />
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
          <ul class="navbar-nav ms-auto text-center">
            <li class="nav-item p-2">
              <a class="nav-link text-uppercase" href="<?php echo site_url('user/home')?>">Home</a>
            </li>
            <li class="nav-item p-2">
              <a class="nav-link text-uppercase" href="<?php echo site_url('user/koleksi') ?>">Koleksi</a>
            </li>
            <!-- <li class="nav-item p-2">
              <a class="nav-link text-uppercase" href="#blog">Blog</a>
            </li> -->
            <li class="nav-item p-2">
              <a class="nav-link text-uppercase border-0" href="https://www.linkedin.com/in/ainnadias/">Tentang Kami</a>
            </li>
            <li class="nav-item py-2">
            <?php
                // $keranjang = '<div class="nav-link text-uppercase" href="">Keranjang  '.$this->cart->total_items().'</div>'
                $keranjang = '<div type="button" class="btn position-relative" aria-expanded="false">
                <i class="fa fa-shopping-cart" style="color: white"></i>'. '<span class="position-absolute top-0 start-100 translate-middle badge bg-primary">'.$this->cart->total_items().'</span></div>'?>
              
              <?php echo anchor ('user/koleksi/detail_keranjang', $keranjang)?>
              
            </li>
            <!-- <li class="nav-item py-2">
              <div type="button" class="btn position-relative">
                <i class="fa fa-bell" style="color: white"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge bg-primary">5</span>
              </div>
            </li> -->

            <?php if (!empty($this->session->userdata('id'))) { ?>
              <li class="nav-item py-2">
              <div class="dropdown">
                <a class="btn dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-user" style="color: white;"></i>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item disabled" >Profil</a></li>
                    <li><a class="dropdown-item disabled" href="#">Sewa</a></li>
                  <li><button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#logoutModal" href="#">Logout</button></li>
                </ul>
              </div>
            </li>
            <?php } else { ?>
              <li class="nav-item ms-3 py-2">
              <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Login</button>
              <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#modalRegister" href="#" id="registrasi-data">Register</button>
              </li>
              <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- Akhir Navbar -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
          <div class="modal-header bg-success text-light">
            <h1 class="modal-title fs-5 " id="exampleModalLabel">Login dulu Yuk! </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo base_url().'user/home/login'?>">
              <div class="mb-3">
                <label for="username" class="col-form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>
              <div class="mb-3">
                <label for="password-login" class="col-form-label">Password</label>
                <input type="password" class="form-control" id="password-login" name="password" required>
              </div>
              <div class="text-center text-lg-start">
                <p class="small fw-bold mt-2 pt-1 mb-0">Tidak punya akun? <a href="#modalRegister"
                  data-bs-toggle="modal" data-bs-target="#modalRegister"   class="link-danger">Daftar</a></p>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>    
    <!-- Akhir Modal -->

    <!-- Modal Register -->
    <div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="modalRegisterLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-success text-light">
            <h1 class="modal-title fs-5 " id="modalRegisterLabel">Register dulu Yuk! </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo base_url().'user/home/registrasi'?>">
              <div class="mb-3">
                <label for="nama" class="col-form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="namaUser" required>
              </div>
              <div class="mb-3">
                <label for="username" class="col-form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>
              <div class="mb-3">
                <label for="email" class="col-form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="alamat" class="col-form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
              </div>
              <div class="mb-3">
                <label for="no_hp" class="col-form-label">No Hp</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" required>
              </div>
              <div class="mb-3">
                <label for="password" class="col-form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              
              <div class="text-center text-lg-start">
                <p class="small fw-bold mt-2 pt-1 mb-0">Sudah punya akun? <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                  href="#" class="link-danger">Login</a></p>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Daftar</button>
            </div>
          </form>
        </div>
      </div>
    </div>    
    <!-- Akhir Modal -->

     <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Klik "Logout" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <a class="btn btn-primary" href="<?php echo site_url('user/home/logout')?>">Logout</a>
            </div>
          </div>
        </div>
      </div>

