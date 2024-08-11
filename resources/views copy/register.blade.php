@include('layout')
<header id="register">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ url('/images/logo.png') }}" alt="Logo">
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

    <div>
        <div class="title">Registrasi</div>
        <div class="subtitle">Lengkapi data diri kamu dengan benar</div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="namaLengkap" placeholder="Nama lengkap*" required>
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Email*" required>
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" id="nomorTelepon" placeholder="Nomor Telepon*" required>
                        <small class="form-text angka">Isi hanya angka</small>
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control" id="alasan" rows="3"
                            placeholder="Alasan mengikuti program “Explore Thailand by Detiktravel”*"
                            required></textarea>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <div class="custom-file-input-wrapper">
                                    <img src="{{ url('/images/upload-file.png') }}" alt=""
                                        class="img-fluid img-upload-file">
                                    <input type="file" class="custom-file-input" id="uploadFile"
                                        accept=".png, .jpg, .jpeg" required>
                                </div>

                            </div>
                            <div class="ml-upload">
                                <p class="mb-0">1. Format file: .png, .jpg, .jpeg</p>
                                <p class="mb-0">2. Maksimal ukuran file 1MB</p>
                                <p class="mb-0">3. Disarankan foto mencakup 3/4 badan</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <input type="url" class="form-control" id="linkInstagram" placeholder="Link Instagram*"
                            required>
                        <small class="form-text angka">Contoh: https://www.instagram.com/yourusername</small>
                    </div>

                    <div class="form-check mb-3 ">
                        <input type="checkbox" class="form-check-input" id="syaratKetentuan" required>
                        <label class="form-check-label" for="syaratKetentuan">
                            Dengan menekan tombol "Daftar", Saya menyetujui <a href="#"
                                style="color: #00D1FF;text-decoration: none;">syarat
                                dan ketentuan</a> yang berlaku
                        </label>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn-daftar">Daftar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</header>

<button id="backToTopBtn" class="back-to-top">
    ↑
</button>

@include('footer')