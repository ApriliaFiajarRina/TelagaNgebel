@include('layout.header')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Berita Section -->
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden text-center border border-gray-200">
        <!-- Gambar Berita -->
        <img src="img/viewngebell.jpg" class="img-fluid rounded-t-lg w-full h-64 object-cover" alt="Image">
        
        <!-- Konten Berita -->
        <div class="p-6"> <!-- Tambahkan padding -->
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Kuliner Khas Ponorogo</h1>
            <p class="text-gray-600 text-base leading-relaxed text-justify mb-4">
            Cicipi aneka kuliner khas seperti, Nasi Pecel, Sate Ponorogo, dan jajanan lokal di sekitar Telaga Ngebel.
            </p>
            <p class="text-gray-600 text-base leading-relaxed text-justify mb-4">
            Telaga Ngebel, yang terletak di Ponorogo, bukan hanya terkenal karena pemandangannya yang menawan, tetapi juga ragam kuliner khasnya yang menggoda selera. Di kawasan ini, wisatawan dapat menemukan makanan tradisional hingga hidangan modern yang disajikan di kafe atau restoran di sekitar telaga. Berikut adalah beberapa makanan dan minuman yang menjadi daya tarik bagi wisatawan: 
            1. Ikan Nila Bakar
                Ikan segar dari telaga yang dibumbui rempah tradisional, dibakar hingga menghasilkan aroma khas, disajikan dengan sambal tomat pedas, lalapan, dan nasi hangat.
            2.Bakso Kuah Hangat
                Bakso dengan cita rasa khas dan kuah bening yang kaya bumbu, cocok untuk menikmati udara  sejuk di sekitar telaga.
            3.Aneka Gorengan (Termasuk Nangka Goreng)
                Nangka goreng yang renyah dengan rasa manis alami, serta camilan lainnya seperti tempe, tahu, dan pisang goreng yang hangat.
            4.Buah Durian dan Nangka
                Durian yang legit dan aromatik, serta nangka yang bisa dinikmati segar atau dalam bentuk keripik nangka, menjadi camilan favorit di sekitar telaga.
            5.Hidangan Modern di Kafe dan Restoran
                Mi goreng spesial, ayam geprek, kopi khas daerah, dan aneka minuman segar yang bisa dinikmati di kafe atau restoran dengan pemandangan telaga.
            Kuliner-kuliner ini memberikan pengalaman kuliner yang kaya, memadukan rasa lokal dengan keindahan alam Telaga Ngebel.
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