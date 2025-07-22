@include('layout.header')
        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="row g-5"> 
                    <div class="col-12 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div>
                            <div class="pb-5">
                                <h4 class="text-primary">Nikmati Keindahan Telaga Ngebel</h4>
                                <p class="mb-0">Nikmati keindahan Telaga Ngebel, surga tersembunyi di Jawa Timur. Dengan air danau jernih, udara segar, dan panorama memukau, tempat ini sempurna untuk relaksasi dan petualangan tak terlupakan.</a></p>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="contact-add-item rounded bg-light p-4">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fas fa-map-marker-alt fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Alamat</h4>
                                            <p class="mb-0">Telaga Ngebel, East Java</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-add-item rounded bg-light p-4">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fas fa-envelope fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Email Kami</h4>
                                            <p class="mb-0">ExploreNgebel@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-add-item rounded bg-light p-4">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fa fa-phone-alt fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Telepon</h4>
                                            <p class="mb-0">082228084240</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-add-item rounded bg-light p-4">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fab fa-firefox-browser fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Website</h4>
                                            <p class="mb-0">ExploreTelagaNgebel.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-around bg-light rounded p-4">
                                        <a class="btn btn-xl-square btn-primary rounded-circle" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-xl-square btn-primary rounded-circle" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-xl-square btn-primary rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-xl-square btn-primary rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="bg-light p-5 rounded h-100">
                            <h4 class="text-primary mb-4">PESAN TIKET</h4>
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
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="rounded">
                            <iframe class="rounded w-100" 
                            style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15811.721677837899!2d111.62201089406886!3d-7.797191775565268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79a5c676f9b0f5%3A0xddb87c4b50af9a50!2sTelaga%20Ngebel!5e0!3m2!1sid!2sid!4v1736483316981!5m2!1sid!2sid"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
@include('layout.footer')