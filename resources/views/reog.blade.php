@include('layout.header')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Berita Section -->
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden text-center border border-gray-200">
        <!-- Gambar Berita -->
        <img src="img/reog1.jpg" class="img-fluid rounded-t-lg w-full h-64 object-cover" alt="Image">
        
        <!-- Konten Berita -->
        <div class="p-6"> <!-- Tambahkan padding -->
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Reog Mingguan</h1>
            <p class="text-gray-600 text-base leading-relaxed text-justify mb-4">
            Tradisi Reog mingguan di Telaga Ngebel, Ponorogo, merupakan pertunjukan seni yang rutin digelar setiap akhir pekan. Acara ini menampilkan kesenian Reog Ponorogo yang khas, dengan barongan, jathil, warok, dan musik gamelan yang energik. Pertunjukan ini tidak hanya menjadi sarana pelestarian budaya lokal, tetapi juga menarik minat wisatawan untuk berkunjung ke Telaga Ngebel. Dengan latar belakang keindahan alam telaga, pertunjukan Reog ini memberikan pengalaman budaya yang unik bagi para pengunjung.
            </p>
            <p class="text-gray-600 text-base leading-relaxed text-justify mb-4">
            Tradisi Reog mingguan di Telaga Ngebel, Ponorogo, merupakan pertunjukan seni yang rutin digelar setiap akhir pekan. Acara ini menampilkan kesenian Reog Ponorogo yang khas, dengan barongan, jathil, warok, dan musik gamelan yang energik. Pertunjukan ini tidak hanya menjadi sarana pelestarian budaya lokal, tetapi juga menarik minat wisatawan untuk berkunjung ke Telaga Ngebel. Dengan latar belakang keindahan alam telaga, pertunjukan Reog ini memberikan pengalaman budaya yang unik bagi para pengunjung.
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