@include('layout.header')
@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Berita Section -->
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden text-center border border-gray-200">
        <!-- Gambar Berita -->
        <img src="img/viewngebell.jpg" class="img-fluid rounded-t-lg w-full h-64 object-cover" alt="Image">
        
        <!-- Konten Berita -->
        <div class="p-6"> <!-- Tambahkan padding -->
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Gazebo Pinggir Telaga</h1>
            <p class="text-gray-600 text-base leading-relaxed text-justify mb-4">
            Nikmati keindahan Telaga Ngebel dengan gazebo yang nyaman di tepi Telaga.
            </p>
            <p class="text-gray-600 text-base leading-relaxed text-justify mb-4">
            Gazebo pinggir Telaga Ngebel menjadi salah satu fasilitas favorit wisatawan untuk bersantai menikmati keindahan alam. Terletak di sepanjang tepian telaga, gazebo-gazebo ini menawarkan pemandangan langsung ke air telaga yang tenang, dikelilingi pepohonan hijau yang menyejukkan mata. Dibangun dengan desain sederhana dari kayu atau bahan alami, gazebo ini menciptakan suasana akrab dan nyaman, cocok untuk melepas lelah setelah berkeliling kawasan wisata.  
            Suasana yang ditawarkan gazebo begitu menenangkan, dengan udara pegunungan yang segar dan suara gemericik air yang merelaksasi. Wisatawan sering memanfaatkannya untuk bersantai, berbincang, atau menikmati bekal makanan sambil menikmati pemandangan. Tak jarang, gazebo ini juga menjadi spot favorit untuk berfoto, mengabadikan momen indah bersama keluarga atau teman dengan latar belakang Telaga Ngebel yang memesona.  
            Untuk pengalaman terbaik, pengunjung disarankan datang lebih awal, terutama saat akhir pekan atau musim liburan, karena gazebo sering cepat terisi. Pastikan juga untuk menjaga kebersihan lingkungan sekitar agar keindahan alam tetap terjaga. Gazebo di pinggir Telaga Ngebel bukan hanya sekadar tempat istirahat, tetapi juga cara sempurna menikmati pesona alam Ponorogo yang memikat hati.
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