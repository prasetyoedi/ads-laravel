@include('layout')
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="https://prasetyoedi.github.io/Ads/assets/images/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Tentang Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="text-decoration-none">
                            <div class="button-regis">Registrasi</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="header-content">
        <div class="row">
            <div class="col-lg-5">
                <img src="https://prasetyoedi.github.io/Ads/assets/images/explore.png" alt="gambar explore" class="img-fluid">

                <a href="#" class="text-decoration-none">
                    <div class="button mt-5">TENTANG PROGRAM</div>
                </a>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 wrap-photo">
                <div class="owl-carousel varian-pertama">
                    <img src="https://prasetyoedi.github.io/Ads/assets/images/photo/photo-1.png" alt="gambar photo 1" class="photo">
                    <img src="https://prasetyoedi.github.io/Ads/assets/images/photo/photo-2.png" alt="gambar photo 2" class="photo">
                    <img src="https://prasetyoedi.github.io/Ads/assets/images/photo/photo-3.png" alt="gambar photo 3" class="photo">
                </div>
            </div>
        </div>
    </div>
</header>

<main>
    <section id="about">
        <div class="wrap">
            <div class="row">
                <div class="col-md-6 about-space">
                    <img src="https://prasetyoedi.github.io/Ads/assets/images/about-image.png" alt="gambar about" class="about-img">
                </div>
                <div class="col-md-6 about-space">
                    <div class="title mb-2">Tentang Program</div>
                    <p>Bergabunglah dalam "Explore Thailand bersama Detiktravel"! Kompetisi ini terbuka bagi pembaca
                        Detiktravel yang ingin menikmati perjalanan ke Thailand. Kunjungi destinasi menakjubkan
                        seperti pantai Pak Bia Island dan destinasi lain di Phuket, Thailand. Jadi bagian dari
                        perjalanan kami dan menangkan hadiah jalan-jalan yang tak terlupakan!</p>
                    <a href="" class="text-decoration-none">
                        <div class="button mt-5">DAFTAR SEKARANG</div>
                    </a>
                    <div class="title mb-2 mt-5">Mekanisme</div>
                    <img src="https://prasetyoedi.github.io/Ads/assets/images/mekanisme.png" alt="gambar timeline mekanisme"
                        class="img-fluid mt-2 mekanisme">
                </div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="wrap">
            <img src="https://prasetyoedi.github.io/Ads/assets/images/blog.png" alt="logo" class="img-fluid">
            <div class="row">
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <img src="https://prasetyoedi.github.io/Ads/assets/images/doraemon.png" alt="gambar doraemon" class="img-fluid blog-img">
                        <div class="card-body">
                            <h5 class="card-title">Warga Thailand Pakai Boneka Doraemon untuk Ritual Pemanggil Hujan
                            </h5>
                            <p class="card-text">3 jam yang lalu</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="d-flex">
                        <img src="https://prasetyoedi.github.io/Ads/assets/images/blog1.png" alt="gambar ilustrasi Thailand"
                            class="img-fluid blog-img">
                        <div class="title ps-3">Thailand Ngarep Cuan Banyak dari Turis China dan Jepang
                            <br> <span class="subtitle">1 jam yang lalu</span>
                        </div>
                    </div>
                    <div class="d-flex mt-5">
                        <img src="https://prasetyoedi.github.io/Ads/assets/images/blog2.png" alt="gambar ilustrasi Cahaya Lampu"
                            class="img-fluid img-blog2 blog-img">
                        <div class="title ps-3">Cahaya Lampu Hiasi Kuil Wat Phra Dhammakaya Thailand Saat Waisak
                            <br> <span class="subtitle">1 jam yang lalu</span>
                        </div>
                    </div>
                    <div class="d-flex mt-5">
                        <img src="https://prasetyoedi.github.io/Ads/assets/images/blog3.png" alt="gambar ilustrasi Lisa" class="img-fluid blog-img">
                        <div class="title ps-3">Cantiknya Lisa BLACKPINK Berwisata Sejarah di Thailand
                            <br> <span class="subtitle">1 jam yang lalu</span>
                        </div>
                    </div>
                    <a href="#" class="text-decoration-none">
                        <div class="btn-blog mt-4">
                            Lihat Berita Lainnya <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14"
                                viewBox="0 0 17 14" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 7C0 6.73483 0.111929 6.48052 0.311164 6.29302C0.5104 6.10552 0.78062 6.00018 1.06238 6.00018H13.3711L8.80927 1.70896C8.60978 1.52122 8.49771 1.26659 8.49771 1.00108C8.49771 0.735579 8.60978 0.48095 8.80927 0.293211C9.00875 0.105471 9.27932 0 9.56143 0C9.84355 0 10.1141 0.105471 10.3136 0.293211L16.6879 6.29213C16.7868 6.385 16.8653 6.49533 16.9189 6.6168C16.9724 6.73827 17 6.86849 17 7C17 7.13151 16.9724 7.26173 16.9189 7.3832C16.8653 7.50467 16.7868 7.615 16.6879 7.70787L10.3136 13.7068C10.1141 13.8945 9.84355 14 9.56143 14C9.27932 14 9.00875 13.8945 8.80927 13.7068C8.60978 13.5191 8.49771 13.2644 8.49771 12.9989C8.49771 12.7334 8.60978 12.4788 8.80927 12.291L13.3711 7.99982H1.06238C0.78062 7.99982 0.5104 7.89448 0.311164 7.70698C0.111929 7.51948 0 7.26517 0 7Z"
                                    fill="white" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>



<button id="backToTopBtn" class="back-to-top">
    ↑
</button>

@include('footer')