@include('layout.header')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Berita Section -->
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden text-center border border-gray-200">
        <!-- Gambar Berita -->
        <img src="img/spd.jpg" class="img-fluid rounded-t-lg w-full h-64 object-cover" alt="Image">
        
        <!-- Konten Berita -->
        <div class="p-6"> <!-- Tambahkan padding -->
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Balap</h1>
            <p class="text-gray-600 text-base leading-relaxed text-justify mb-4">
            Balap perahu di Telaga Ngebel menyajikan adrenalin tinggi dengan perahu yang berpacu cepat di telaga yang indah.
            </p>
            <p class="text-gray-600 text-base leading-relaxed text-justify mb-4">
            Balap perahu di Telaga Ngebel, Ponorogo, adalah kegiatan seru yang sering diadakan untuk memeriahkan acara tertentu, seperti perayaan tradisional atau hari jadi Ponorogo. Kompetisi ini melibatkan perahu dayung atau perahu mesin, dengan peserta dari warga lokal hingga wisatawan. Balap perahu menjadi hiburan yang menarik, menampilkan persaingan sengit di tengah keindahan telaga yang asri. Selain itu, acara ini juga disertai hiburan tambahan seperti pertunjukan seni tradisional dan pasar kuliner. Dengan suasana meriah dan pemandangan alam yang indah, balap perahu menjadi atraksi wisata unggulan di Telaga Ngebel.
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