@include('layout.header')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Berita Section -->
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden text-center border border-gray-200">
        <!-- Gambar Berita -->
        <img src="img/viewngebell.jpg" class="img-fluid rounded-t-lg w-full h-64 object-cover" alt="Image">
        
        <!-- Konten Berita -->
        <div class="p-6"> <!-- Tambahkan padding -->
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Berlayar di Telaga</h1>
            <p class="text-gray-600 text-base leading-relaxed text-justify mb-4">
            Rasakan pengalaman menyenangkan berlayar di permukaan Telaga Ngebel.
            </p>
            <p class="text-gray-600 text-base leading-relaxed text-justify mb-4">
            *Berlayar Naik Speedboat di Telaga Ngebel*  

            Telaga Ngebel menawarkan pengalaman seru berlayar menggunakan speedboat, sebuah aktivitas yang digemari wisatawan untuk menikmati keindahan telaga dari sudut pandang berbeda. Dengan menggunakan speedboat, pengunjung dapat merasakan sensasi melaju di atas air yang tenang, dikelilingi pemandangan perbukitan hijau dan udara segar khas pegunungan. Aktivitas ini sangat cocok bagi mereka yang ingin mencoba sesuatu yang menyenangkan dan memacu adrenalin ringan di tengah suasana alam.  

            Pengelola wisata menyediakan speedboat yang aman dan terawat, dilengkapi dengan jaket pelampung untuk memastikan keselamatan penumpang. Tarif yang ditawarkan pun cukup bervariasi tergantung rute yang dipilih. Untuk *Paket Tengah Telaga, biayanya Rp75.000 per putaran, sementara **Paket Tepi Telaga* seharga Rp100.000 per putaran. Jika ingin rute lebih lengkap, tersedia *Paket Komplet* dengan tarif Rp160.000 per putaran. Tarif ini berlaku untuk satu perahu yang dapat menampung hingga tiga orang, menjadikannya pilihan yang ekonomis untuk berkelompok.  

            Wisatawan dapat memulai perjalanan dari dermaga kecil di sekitar telaga, menikmati keindahan panorama sambil merasakan sensasi melaju di atas air. Aktivitas ini sangat direkomendasikan untuk keluarga, pasangan, atau kelompok teman yang ingin menambah keseruan liburan mereka. Jangan lupa membawa kamera untuk mengabadikan momen spesial dengan latar belakang Telaga Ngebel yang memukau.
            </p>
        </div>

        <div class="bg-gray-100 p-4 rounded-b-lg"> <!-- Tambahkan background dan padding -->
            <a href="\service" class="btn btn-primary rounded-full py-2 px-6 text-white bg-blue-600 hover:bg-blue-700 transition duration-300">
                Kembali Ke Halaman Utama <i class="fa fa-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
</div>
@include('layout.footer')