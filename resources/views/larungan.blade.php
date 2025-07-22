@include('layout.header')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Berita Section -->
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden text-center border border-gray-200">
        <!-- Gambar Berita -->
        <img src="img/larungan.jpeg" class="img-fluid rounded-t-lg w-full h-64 object-cover" alt="Image">
        
        <!-- Konten Berita -->
        <div class="p-6"> <!-- Tambahkan padding -->
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Larungan</h1>
            <p class="text-gray-600 text-base leading-relaxed text-justify mb-4">
                Ini adalah isi berita. Anda dapat memasukkan informasi detail terkait berita di sini.
                Larungan Telaga Ngebel adalah tradisi syukur tahunan di Ponorogo yang memadukan budaya lokal dan keindahan alam.
            </p>
            <p class="text-gray-600 text-base leading-relaxed text-justify mb-4">
                Tradisi ini telah menjadi daya tarik wisata utama yang mendatangkan banyak pengunjung setiap tahunnya.
                Acara ini biasanya disertai dengan prosesi budaya dan upacara adat yang sangat menarik.
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