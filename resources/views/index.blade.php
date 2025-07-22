@include('layout.header')
@php
    use Carbon\Carbon;
@endphp
        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
    <div class="header-carousel-item" style="position: relative;">
        <img src="img/viewngebell.jpg" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container py-4" style="position: relative;">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s">
                        <div class="text-start">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Selamat Datang Di Explore Telaga Ngebel</h4>
                            <h2 class="display-4 text-uppercase text-white mb-4">Telaga Ngebel: Jelajahi Keindahan, Rasakan Kedamaian</h2>
                            <p class="mb-4 fs-5">Telaga Ngebel menawarkan pengalaman tak terlupakan, jelajahi keindahan alamnya yang mempesona dan rasakan kedamaian sejati di Ponorogo.</p>
                            <div class="d-flex flex-shrink-0">
                                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Selengkapnya..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 fadeInRight animated" data-animation="fadeInRight" data-delay="1s">
                        <div class="ticket-form p-5">
                            <h2 class="text-dark text-uppercase mb-4">Pesan Tiket</h2>
                            <form id="ticket-form" action="/tickets" method="POST">
                             @csrf <!-- CSRF token untuk keamanan -->
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <input 
                                                    type="text" 
                                                    class="form-control border-0 py-2" 
                                                    id="name" 
                                                    name="name" 
                                                    placeholder="Nama Anda" 
                                                    required
                                                >
                                            </div>
                                            <div class="col-12 col-xl-6">
                                                <input 
                                                    type="email" 
                                                    class="form-control border-0 py-2" 
                                                    id="email" 
                                                    name="email" 
                                                    placeholder="Email" 
                                                    required
                                                >
                                            </div>
                                            <div class="col-12 col-xl-6">
                                                <input 
                                                    type="tel" 
                                                    class="form-control border-0 py-2" 
                                                    id="phone" 
                                                    name="phone" 
                                                    placeholder="Nomor HP" 
                                                    required
                                                >
                                            </div>
                                            <div class="col-12">
                                                <select 
                                                    id="package" 
                                                    name="package" 
                                                    class="form-select border-0 py-2" 
                                                    required
                                                >
                                                    <option selected value="">Pilih Paket</option>
                                                    <option value="1">Paket Biasa</option>
                                                    <option value="2">Paket Keluarga</option>
                                                    <option value="3">Paket Premium</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <input 
                                                    id="date" 
                                                    name="date" 
                                                    class="form-control border-0 py-2" 
                                                    type="date" 
                                                    required
                                                >
                                            </div>
                                            <div class="col-12">
                                                <button 
                                                    type="submit" 
                                                    class="btn btn-primary w-100 py-2 px-5"
                                                >
                                                    Pesan Sekarang
                                                </button>
                                            </div>
                                        </div>
                            </form>
                            <div id="success-message" style="display: none; color: green; margin-top: 10px;">Tiket berhasil dipesan!</div>
                            <div id="error-message" style="display: none; color: red; margin-top: 10px;">Gagal memesan tiket. Silakan coba lagi.</div>
                        </div>
                    </div>
                </div>
                @if(session('success'))
                <div style="color: white; font-weight: bold; font-size: 32px; border: 2px solid black; position: absolute; left: 0; right: 0; background-color: #3CBEEE; border-radius: 20px; text-align: center; padding: 5px 0">
                    <span>Ticket ini berhasil dipesan. Silahkan sebutkan nama bila didepan loket</span>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

        <!-- Carousel End -->


        <!-- Feature Start -->
        <div class="container-fluid feature py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item">
                            <img src="img/larungan.jpeg" class="img-fluid rounded w-100" alt="Image">
                            <div class="feature-content p-4">
                                <div class="feature-content-inner">
                                    <h4 class="text-white">Larungan</h4>
                                    <p class="text-white">Larungan Telaga Ngebel, tradisi syukur tahunan di Ponorogo, memadukan budaya dan keindahan alam.
                                    </p>
                                    <a href="\larungan" class="btn btn-primary rounded-pill py-2 px-4">Selengkapnya <i class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item">
                            <img src="img/reog.jpg" class="img-fluid rounded w-100" alt="Image">
                            <div class="feature-content p-4">
                                <div class="feature-content-inner">
                                    <h4 class="text-white">Reog setiap minggu</h4>
                                    <p class="text-white">Penampilan Reog Ponorogo hadir setiap minggu, menampilkan seni budaya khas yang megah dan memukau.
                                    </p>
                                    <a href="\reog" class="btn btn-primary rounded-pill py-2 px-4">Selengkapnya <i class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item">
                            <img src="img/spd.jpg" class="img-fluid rounded w-100" alt="Image">
                            <div class="feature-content p-4">
                                <div class="feature-content-inner">
                                    <h4 class="text-white">Balap</h4>
                                    <p class="text-white">Balap perahu di Telaga Ngebel menyajikan adrenalin tinggi dengan perahu yang berpacu cepat di telaga yang indah.
                                    </p>
                                    <a href="\balap" class="btn btn-primary rounded-pill py-2 px-4">Selengkapnya <i class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->

        <!-- About Start -->
        <div class="container-fluid about pb-5">
            <div class="container pb-5">
                <div class="row g-5"> 
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div>
                            <h4 class="text-primary">Jelajahi Telaga Ngebel</h4>
                            <h1 class="display-5 mb-4">Telaga Ngebel: Wisata Keluarga, Harmoni Alam Lestari.</h1>
                            <p class="mb-5">"Telaga Ngebel adalah destinasi wisata keluarga yang sempurna, menawarkan keindahan alam yang memukau, udara segar yang menenangkan, dan suasana yang harmonis. Dengan berbagai aktivitas menarik dan pemandangan yang memanjakan mata, tempat ini cocok untuk menciptakan momen kebersamaan yang tak terlupakan bersama orang-orang tercinta."
                            </p>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <div class="me-3"><i class="fas fa-glass-cheers fa-3x text-primary"></i></div>
                                        <div>
                                            <h4>Keindahan Alam</h4>
                                            <p>Telaga Ngebel dikelilingi oleh perbukitan hijau dan udara sejuk, menciptakan suasana yang tenang dan menyegarkan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <div class="me-3"><i class="fas fa-dot-circle fa-3x text-primary"></i></div>
                                        <div>
                                            <h4>Wisata Keluarga</h4>
                                            <p>Tempat ini menawarkan ruang yang nyaman untuk berkumpul, bermain, dan menikmati kebersamaan dengan keluarga.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <div class="me-3"><i class="fas fa-hand-holding-usd fa-3x text-primary"></i></div>
                                        <div>
                                            <h4>Aktivitas Rekreasi</h4>
                                            <p>Pengunjung dapat menikmati berbagai kegiatan seperti berperahu, memancing, atau sekadar berjalan-jalan santai di tepi telaga.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex">
                                        <div class="me-3"><i class="fas fa-lock fa-3x text-primary"></i></div>
                                        <div>
                                            <h4>Kuliner Lokal</h4>
                                            <p>Telaga Ngebel juga menjadi tempat untuk menikmati kuliner khas Ponorogo seperti ikan bakar dan jajanan lokal, serta mengenal budaya setempat.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="position-relative rounded">
                            <div class="rounded" style="margin-top: 40px;">
                                <div class="row g-0">
                                    <div class="col-lg-12">
                                        <div class="rounded mb-4">
                                            <img src="img/viewww.jpg" class="img-fluid rounded w-100" alt="">
                                        </div>
                                        <div class="row gx-4 gy-0">
                                            <div class="col-6">
                                                <div class="counter-item bg-primary rounded text-center p-4 h-100">
                                                    <div class="counter-item-icon mx-auto mb-3">
                                                        <i class="fas fa-thumbs-up fa-3x text-white"></i>
                                                    </div>
                                                    <div class="counter-counting mb-3">
                                                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">150</span>
                                                        <span class="h1 fw-bold text-white">K +</span>
                                                    </div>
                                                    <h5 class="text-white mb-0">Happy Visitors</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="counter-item bg-dark rounded text-center p-4 h-100">
                                                    <div class="counter-item-icon mx-auto mb-3">
                                                        <i class="fas fa-certificate fa-3x text-white"></i>
                                                    </div>
                                                    <div class="counter-counting mb-3">
                                                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">122</span>
                                                        <span class="h1 fw-bold text-white"> +</span>
                                                    </div>
                                                    <h5 class="text-white mb-0">Awwards Winning</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded bg-primary p-4 position-absolute d-flex justify-content-center" style="width: 90%; height: 80px; top: -40px; left: 50%; transform: translateX(-50%);">
                                <h3 class="mb-0 text-white">Ngebel Ayem</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="container-fluid service py-5">
            <div class="container service-section py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Service</h4>
                    <h1 class="display-5 text-white mb-4">Explore Telaga Ngebel</h1>
                    <p class="mb-0 text-white">Telaga ngebel memiliki penampilan eksotis, diantaranya adalah air mancur menari, destinasi ini direakisasikan pada kepemimpinan bapak bupati sugiri sancoko, jadwal air mancur diantaranya
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>
                    <div class="col-md-10 col-lg-8 col-xl-8 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-days p-4">
                            <div class="py-2 border-bottom border-top d-flex align-items-center justify-content-between flex-wrap"><h4 class="mb-0 pb-2 pb-sm-0">Monday - Friday</h4> <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>17.00 - 20.00 WIB</p></div>
                            <div class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap"><h4 class="mb-0 pb-2 pb-sm-0">Saturday - Sunday</h4> <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>17.00 - 21.00 WIB</p></div>
                            <div class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap"><h4 class="mb-0">Holiday</h4> <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>17.00 - 22.00 WIB</p></div>
                        </div>
                    </div>
                    <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>

                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item p-4">
                            <div class="service-content">
                                <div class="mb-4">
                                    <i class="fas fa-home fa-4x"></i>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">Gazebo Pinggir Telaga</a>
                                <p class="mb-0">Nikmati keindahan Telaga Ngebel dengan gazebo yang nyaman di tepi telaga
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item p-4">
                            <div class="service-content">
                                <div class="mb-4">
                                    <i class="fas fa-utensils fa-4x"></i>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">Kuliner Khas Ponorogo</a>
                                <p class="mb-0">Cicipi aneka kuliner khas, seperti nasi pecel, sate Ponorogo, dan jajanan lokal di sekitar Telaga Ngebel.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item p-4">
                            <div class="service-content">
                                <div class="mb-4">
                                    <i class="fas fa-door-closed fa-4x"></i>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">Pusat Oleh-Oleh</a>
                                <p class="mb-0">Bawa pulang kenangan dari Telaga Ngebel dengan membeli oleh-oleh khas Ponorogo
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item p-4">
                            <div class="service-content">
                                <div class="mb-4">
                                    <i class="fas fa-swimming-pool fa-4x"></i>
                                </div>
                                <a href="#" class="h4 d-inline-block mb-3">Berlayar di Telaga</a>
                                <p class="mb-0">Rasakan pengalaman menyenangkan berlayar di permukaan Telaga Ngebel.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Ticket Packages Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="packages-item h-100">
                            <h4 class="text-primary">Paket Tiket Telaga Ngebel </h4>
                            <h1 class="display-5 mb-4">Pilih Paket Terbaik untuk Keluarga Anda</h1>
                            <p class="mb-4">"Rasakan keindahan Telaga Ngebel dengan berbagai pilihan paket wisata yang sesuai untuk Anda dan keluarga. Kami menawarkan pengalaman yang menyenangkan dengan fasilitas terbaik."
                            </p>
                            <p><i class="fa fa-check text-primary me-2"></i>Keindahan alami Telaga Ngebel.</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Beragam paket wisata menarik untuk keluarga.</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Nikmati fasilitas eksklusif.</p>
                            <p class="mb-5"><i class="fa fa-check text-primary me-2"></i>Kesempatan memenangkan voucher gratis.</p>
                            <a href="#" class="btn btn-primary rounded-pill py-3 px-5"> Pesan Sekarang</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="pricing-item bg-dark rounded text-center p-5 h-100">
                            <div class="pb-4 border-bottom">
                                <h2 class="mb-4 text-primary">Paket Keluarga</h2>
                                <h3 class="mb-0 text-primary">Rp 200.000<span class="text-body fs-5 fw-normal">/ keluarga</span></h3>
                            </div>
                            <div class="py-4">
                                <p class="mb-4"><i class="fa fa-check text-primary me-2"></i>Akses ke seluruh area Telaga Ngebel.</p>
                                <p class="mb-4"><i class="fa fa-check text-primary me-2"></i>Sewa 1 Gazebo Besar.</p>
                                <p class="mb-4"><i class="fa fa-check text-primary me-2"></i>Gratis minuman ringan.</p>
                                <p class="mb-4"><i class="fa fa-check text-primary me-2"></i>bebas biaya parkir</p>
                            </div>
                            <a href="#" class="btn btn-light rounded-pill py-3 px-5">Pesan Sekarang</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="pricing-item bg-primary rounded text-center p-5 h-100">
                            <div class="pb-4 border-bottom">
                                <h2 class="text-dark mb-4">Paket Individu</h2>
                                <h2 class="text-dark mb-0">Rp 50.000<span class="text-white fs-5 fw-normal">/orang</span></h2>
                            </div>
                            <div class="text-white py-4">
                                <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Sewa 1 Gazebo Kecil.</p>
                                <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Gratis minuman ringan.</p>
                                <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>bebas biaya parkir</p>
                            </div>
                            <a href="#" class="btn btn-dark rounded-pill py-3 px-5"> Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ticket Packages End -->


        <!-- Attractions Start -->
        <div class="container-fluid attractions py-5">
            <div class="container attractions-section py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary"></h4>
                    <h1 class="display-5 text-white mb-4">Jelajahi Layanan Explore Telaga Ngebel</h1>
                    <p class="text-white mb-0">Temukan berbagai layanan terbaik yang dirancang untuk memaksimalkan pengalaman Anda di Telaga Ngebel. Mulai dari panduan wisata yang informatif, pilihan aktivitas rekreasi menarik, hingga rekomendasi kuliner lokal khas Ponorogo. Nikmati kenyamanan fasilitas keluarga, paket wisata lengkap, dan informasi terkini untuk menjadikan kunjungan Anda lebih menyenangkan. Explore Telaga Ngebel hadir untuk membantu Anda menciptakan momen berharga bersama orang-orang tercinta di tengah keindahan alam yang memukau.
                    </p>
                </div>
                <div class="owl-carousel attractions-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="attractions-item wow fadeInUp" data-wow-delay="0.2s">
                        <img src="img/mancur1.jpg" class="img-fluid rounded w-100" alt="">
                        <a href="#" class="attractions-name">Air mancur</a>
                    </div>
                    <div class="attractions-item wow fadeInUp" data-wow-delay="0.4s">
                        <img src="img/reog.jpg" class="img-fluid rounded w-100" alt="">
                        <a href="#" class="attractions-name">Orkestra</a>
                    </div>
                    <div class="attractions-item wow fadeInUp" data-wow-delay="0.6s">
                        <img src="img/spd.jpg" class="img-fluid rounded w-100" alt="">
                        <a href="#" class="attractions-name">Speedbot</a>
                    </div>
                    <div class="attractions-item wow fadeInUp" data-wow-delay="0.8s">
                        <img src="img/view.jpg" class="img-fluid rounded w-100" alt="">
                        <a href="#" class="attractions-name">Area Camping</a>
                    </div>
                    <div class="attractions-item wow fadeInUp" data-wow-delay="1s">
                        <img src="img/viewngebel.jpg" class="img-fluid rounded w-100" alt="">
                        <a href="#" class="attractions-name">Naik Kuda</a>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Attractions End -->

        <!-- Gallery Start -->
        <div class="container-fluid gallery pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Gallery</h4>
                    <h1 class="display-5 mb-4">Moment terbaik Explore Telaga Ngebel</h1>
                    <p class="mb-0">Nikmati pengalaman tak terlupakan di Telaga Ngebel, tempat di mana alam dan kebersamaan bertemu. Setiap momen yang Anda habiskan di sini, mulai dari menikmati pemandangan indah telaga yang dikelilingi perbukitan hijau hingga berbagi tawa bersama keluarga saat berperahu atau memancing, akan menjadi kenangan berharga. Dengan udara sejuk dan atmosfer yang damai, Telaga Ngebel adalah destinasi yang tepat untuk meluangkan waktu berkualitas, menikmati kuliner khas, dan merasakan kedamaian alami yang hanya bisa Anda temui di Ponorogo.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="gallery-item">
                            <img src="img/viewww.jpg" class="img-fluid rounded w-100 h-100" alt="">
                            <div class="search-icon">
                                <a href="img/viewww.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-1"><i class="fas fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="gallery-item">
                            <img src="img/spd.jpg" class="img-fluid rounded w-100 h-100" alt="">
                            <div class="search-icon">
                                <a href="img/spd.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-2"><i class="fas fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="gallery-item">
                            <img src="img/spd1.jpeg" class="img-fluid rounded w-100 h-100" alt="">
                            <div class="search-icon">
                                <a href="img/spd1.jpeg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-3"><i class="fas fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="gallery-item">
                            <img src="img/spd3.jpg" class="img-fluid rounded w-100 h-100" alt="">
                            <div class="search-icon">
                                <a href="img/spd3.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-4"><i class="fas fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="gallery-item">
                            <img src="img/reog1.jpg" class="img-fluid rounded w-100 h-100" alt="">
                            <div class="search-icon">
                                <a href="img/reog1.jpg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-5"><i class="fas fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="gallery-item">
                            <img src="img/reog2.jpeg" class="img-fluid rounded w-100 h-100" alt="">
                            <div class="search-icon">
                                <a href="img/reog2.jpeg" class="btn btn-light btn-lg-square rounded-circle" data-lightbox="Gallery-6"><i class="fas fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery End -->

  <!-- Team Start -->
  <div class="container-fluid team pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Meet Our Team</h4>
                    <h1 class="display-5 mb-4">Tim Profesional Telaga Ngebel</h1>
                    <p class="mb-0">"Tim kami siap memberikan pengalaman wisata terbaik di Telaga Ngebel. Dari pelayanan hingga kebersihan, kami berdedikasi penuh untuk kenyamanan Anda.
                    </p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item p-4">
                            <div class="team-content">
                                <div class="d-flex justify-content-between border-bottom pb-4">
                                    <div class="text-start">
                                        <h4 class="mb-0">Zulfiqli Kurniawan</h4>
                                        <p class="mb-0">Pemandu Wisata</p>
                                    </div>
                                    <div>
                                        <img src="img/zul.png" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                    </div>
                                </div>
                                <div class="team-icon rounded-pill my-4 p-3">
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                                <p class="text-center mb-0">Memberikan informasi menarik tentang sejarah dan keindahan Telaga Ngebel sambil menemani Anda berwisata
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item p-4">
                            <div class="team-content">
                                <div class="d-flex justify-content-between border-bottom pb-4">
                                    <div class="text-start">
                                        <h4 class="mb-0">Jalu Sena Purwa Andika</h4>
                                        <p class="mb-0">Koordinator Sarana</p>
                                    </div>
                                    <div>
                                        <img src="img/jalu.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                    </div>
                                </div>
                                <div class="team-icon rounded-pill my-4 p-3">
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                                <p class="text-center mb-0">Bertanggung jawab atas pengelolaan fasilitas, seperti perahu, gazebo, dan layanan lainnya untuk kenyamanan wisatawan
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item p-4">
                            <div class="team-content">
                                <div class="d-flex justify-content-between border-bottom pb-4">
                                    <div class="text-start">
                                        <h4 class="mb-0"> Shella
                                        </h4>
                                        <p class="mb-0">Koordinator Kebersihan</p>
                                    </div>
                                    <div>
                                        <img src="img/shella.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                    </div>
                                </div>
                                <div class="team-icon rounded-pill my-4 p-3">
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                                <p class="text-center mb-0">Memastikan Telaga Ngebel tetap bersih dan nyaman untuk pengunjung dengan pelayanan kebersihan terbaik."
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item p-4">
                            <div class="team-content">
                                <div class="d-flex justify-content-between border-bottom pb-4">
                                    <div class="text-start">
                                        <h4 class="mb-0"> Helvy
                                        </h4>
                                        <p class="mb-0">Koordinator Keamanan</p>
                                    </div>
                                    <div>
                                        <img src="img/helvy.JPG" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                    </div>
                                </div>
                                <div class="team-icon rounded-pill my-4 p-3">
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                                <p class="text-center mb-0">Menjaga keamanan area Telaga Ngebel untuk memberikan rasa tenang dan aman bagi setiap pengunjung.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item p-4">
                            <div class="team-content">
                                <div class="d-flex justify-content-between border-bottom pb-4">
                                    <div class="text-start">
                                        <h4 class="mb-0"> Fernada
                                        </h4>
                                        <p class="mb-0">Koordinator Keamanan</p>
                                    </div>
                                    <div>
                                        <img src="#" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                    </div>
                                </div>
                                <div class="team-icon rounded-pill my-4 p-3">
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                                <p class="text-center mb-0">Menjaga keamanan area Telaga Ngebel untuk memberikan rasa tenang dan aman bagi setiap pengunjung.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
       <!-- <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Testimoni</h4>
                    <h1 class="display-5 text-white mb-4">review pengunjung</h1>
                    </p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item p-4">
                        <p class="text-white fs-4 mb-4">"Telaga Ngebel adalah tempat yang sempurna untuk berlibur bersama keluarga. Keindahan alamnya sangat memukau, udara segarnya membuat kami merasa begitu rileks. Kami menikmati berperahu di telaga dan makan ikan bakar yang lezat. Pengalaman yang tak terlupakan!"
                        </p>
                        <div class="testimonial-inner">
                            <div class="testimonial-img">
                                <img src="img/testimonial-1.jpg" class="img-fluid" alt="Image">
                                <div class="testimonial-quote btn-lg-square rounded-circle"><i class="fa fa-quote-right fa-2x"></i>
                                </div>
                            </div>
                            <div class="ms-4">
                                <h4>Lugas</h4>
                                <p class="text-start text-white">Pengunjung</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item p-4">
                        <p class="text-white fs-4 mb-4"> "Saya sangat menikmati kuliner khas Ponorogo yang disajikan di Telaga Ngebel. Ikan bakarnya segar dan lezat, sambil menikmati pemandangan telaga yang menakjubkan. Tempat ini bukan hanya indah, tapi juga menyajikan pengalaman kuliner yang tak kalah istimewa!"
                        </p>
                        <div class="testimonial-inner">
                            <div class="testimonial-img">
                                <img src="img/testimonial-2.jpg" class="img-fluid" alt="Image">
                                <div class="testimonial-quote btn-lg-square rounded-circle"><i class="fa fa-quote-right fa-2x"></i>
                                </div>
                            </div>
                            <div class="ms-4">
                                <h4>Afigo</h4>
                                <p class="text-start text-white">Pengunjung</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item p-4">
                        <p class="text-white fs-4 mb-4"> "Telaga Ngebel adalah tempat yang sempurna untuk berlibur bersama keluarga. Keindahan alamnya sangat memukau, udara segarnya membuat kami merasa begitu rileks. Kami menikmati berperahu di telaga dan makan ikan bakar yang lezat. Pengalaman yang tak terlupakan!"
                        </p>
                        <div class="testimonial-inner">
                            <div class="testimonial-img">
                                <img src="img/testimonial-3.jpg" class="img-fluid" alt="Image">
                                <div class="testimonial-quote btn-lg-square rounded-circle"><i class="fa fa-quote-right fa-2x"></i>
                                </div>
                            </div>
                            <div class="ms-4">
                                <h4>Titanic</h4>
                                <p class="text-start text-white">Pengunjung</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

       @include('layout.footer')