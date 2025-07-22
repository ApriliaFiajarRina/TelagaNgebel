@include('layout.header')
@php
    use Carbon\Carbon;
@endphp

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Blog</h4>
            <h1 class="display-5 mb-4">Blog & Artikel Terbaru</h1>
            <p class="mb-0">
                Temukan petualangan seru di Telaga Ngebel. Jelajahi artikel-artikel terbaru yang penuh dengan tips wisata, kuliner lezat, dan pengalaman tak terlupakan yang akan membuat segera berkunjung.
            </p>
        </div>
        <div class="row g-4">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.{{ $loop->iteration * 2 }}s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <a href="#">
                                <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid w-100 rounded-top" alt="Image">
                            </a>
                            <div class="blog-category py-2 px-4">{{ $blog->category }}</div>
                            <div class="blog-date">
                                <i class="fas fa-clock me-2"></i>{{ Carbon::parse($blog->published_at)->format('d F Y') }}
                            </div>
                        </div>
                        <div class="blog-content p-4">
                            <a href="#" class="h4 d-inline-block mb-4">{{ $blog->title }}</a>
                            <p class="mb-4">
                                {{ Str::limit($blog->content, 120) }}
                            </p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Selengkapnya <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog End -->

@include('layout.footer')
