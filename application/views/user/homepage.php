
    <!-- Awal Header -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url()?>assets/images/2016_05_14_4551_1463196175._large.jpg" class="bd-placeholder-img" width="100%" height="100%" alt="Gambar Tari Topeng" />
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Tari Topeng</h1>
              <p>Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class="btn btn-outline-light" href="https://www.kompas.com/skola/read/2022/09/08/170000769/tari-topeng-cirebon--sejarah-makna-properti-dan-jenisnya?page=all">Cari tau lebih lanjut ! <i class="fa-solid fa-arrow-right"></i></a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url()?>assets/images/wayang.png" class="bd-placeholder-img" width="100%" height="100%" alt="Gambar Wayang" />
          <div class="container">
            <div class="carousel-caption">
              <h1>Wayang</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-outline-light" href="https://id.wikipedia.org/wiki/Sendratari_Ramayana_Prambanan">Cari tau lebih lanjut ! <i class="fa-solid fa-arrow-right"></i></a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url()?>assets/images/traditional-dances-from-bali-scaled.jpg" class="bd-placeholder-img" width="100%" height="100%" alt="Gambar Kebudayaan Bali" />
          
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Kebudayaan Bali</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-outline-light" href="https://www.balitoursclub.net/kebudayaan-lokal-bali/">Cari tau lebih lanjut ! <i class="fa-solid fa-arrow-right"></i></a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Akhir Header -->

    <!-- Awal Kategori -->
    <section id="kategori" class="py-5">
      <div class="container">
        <div class="title text-center">
          <h2 class="position-relative d-inline-block">Kategori</h2>
        </div>
        <div class="row ">
      
          <div class="album py-5">
            <div class="container">
              <div class="row text-center justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3">
              <div class="col ">
                  <div class="card shadow-sm" style="width: 15rem;" >
                    <a href="<?php echo site_url('user/koleksi/kategori/1'); ?>">
                      <img class="bd-placeholder-img card-img-top" src="<?php echo base_url()?>assets/images/cotume_3.png"width="80%">
                      <!-- <title>Placeholder</title>
                      <rect width="100%" height="100%" fill="#55595c" />
                      <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text> -->
                    </img>

                    <div class="card-body">
                      <div class="text-center">
                        <!-- Product name-->
                        <h4 class="fw-bolder">Wanita</h4>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>

                <div class="col">
                  <div class="card shadow-sm" style="width: 15rem;">
                    <a href="<?php echo site_url('user/koleksi/kategori/2'); ?>">
                      <img class="bd-placeholder-img card-img-top" src="<?php echo base_url()?>assets/images/costume_4.png"width="80%">
                      <!-- <title>Placeholder</title>
                      <rect width="100%" height="100%" fill="#55595c" />
                      <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text> -->
                    </img>

                    <div class="card-body">
                      <div class="text-center">
                        <!-- Product name-->
                        <h4 class="fw-bolder">Pria</h4>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm" style="width: 15rem;">
                    <a href="<?php echo site_url('user/koleksi/kategori/3'); ?>">
                      <img class="bd-placeholder-img card-img-top" src="<?php echo base_url()?>assets/images/anak.png"width="80%">
                      <!-- <title>Placeholder</title>
                      <rect width="100%" height="100%" fill="#55595c" />
                      <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text> -->
                    </img>

                    <div class="card-body">
                      <div class="text-center">
                        <!-- Product name-->
                        <h4 class="fw-bolder">Anak - anak</h4>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm" style="width: 15rem;">
                    <a href="<?php echo site_url('user/koleksi/kategori/8'); ?>">
                      <img class="bd-placeholder-img card-img-top" src="<?php echo base_url()?>assets/images/properti.png" width="80%" >
                      <!-- <title>Placeholder</title>
                      <rect width="100%" height="100%" fill="#55595c" />
                      <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text> -->
                    </img>

                    <div class="card-body">
                      <div class="text-center">
                        <!-- Product name-->
                        <h4 class="fw-bolder">Properti</h4>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm" style="width: 15rem;">
                    <a href="<?php echo site_url('user/koleksi/kategori/4'); ?>">
                      <img class="bd-placeholder-img card-img-top" src="<?php echo base_url()?>assets/images/aksesoris.png"width="80%">
                      <!-- <title>Placeholder</title>
                      <rect width="100%" height="100%" fill="#55595c" />
                      <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text> -->
                    </img>

                    <div class="card-body">
                      <div class="text-center">
                        <!-- Product name-->
                        <h4 class="fw-bolder">Aksesoris</h4>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Kategori -->

    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#cdac79" fill-opacity="1" d="M0,160L40,165.3C80,171,160,181,240,170.7C320,160,400,128,480,122.7C560,117,640,139,720,133.3C800,128,880,96,960,90.7C1040,85,1120,107,1200,106.7C1280,107,1360,85,1400,74.7L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg> -->

    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#cdac79" fill-opacity="1" d="M0,128L60,117.3C120,107,240,85,360,96C480,107,600,149,720,144C840,139,960,85,1080,64C1200,43,1320,53,1380,58.7L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg> -->

    <!-- Awal Blog -->
    <section id="blog" class="py-5">
      <div class="container">
        <div class="title text-center">
          <h2 class="position-relative d-inline-block">Blog</h2>
        </div>
        <div class="row mb-2 py-5">
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">Wayang</strong>
                <h3 class="mb-0">Gunungan Wayang</h3>
                <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="https://education.asianart.org/resources/the-history-of-indonesian-puppet-theater-wayang/" class="stretched-link mt-3">Continue reading</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img" src="<?php echo base_url()?>assets/images/gunungan.png" width="200"></img>
      
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">Baju Adat</strong>
                <h3 class="mb-0">Surjan</h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="https://id.wikipedia.org/wiki/Surjan" class="stretched-link mt-3">Continue reading</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img" src="<?php echo base_url()?>assets/images/costume_1.png" width="200" ></img>      
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Blog -->

    