<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Logo Title -->
    <link rel="icon" type="image/x-icon" href="asset/logo.png" width="auto" height="auto">
    <title>Quran Inspirasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/navbar.css">
    <link rel="stylesheet" href="style/all.css">
    <link rel="stylesheet" href="style/home.css">
</head>

<body>
    @include('navbar')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <!-- Kolom Text -->
                <div class="col-lg-6 col-md-12 mt-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="sub-title mt-5">Daily Quran Motivation</h4>
                            <h1 class="title mt-3">Discover the Beauty of the Quran</h1>
                            <p class="ayat-hero-section mt-4 mb-4">“Agar kamu tidak putus asa atas apa yang luput darimu dan tidak bermegah atas apa yang diberikan-Nya kepadamu. Dan Allah tidak menyukai setiap orang yang sombong dan membanggakan diri” - Q.S Hadid Ayat 23</p>
                            <button class="btn btn-main" type="submit">Baca Selengkapnya</button>
                        </div>
                    </div>
                </div>
                <!-- Kolom Image -->
                <div class="col-lg-6 col-md-12 position-relative p-0">
                    <div class="card-images">
                        <a class="hero-image-container" href="#">
                            <img src="asset/gradasi-test.png" class="hero-image" alt="Hero Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Quotes Section -->
        <section class="quotes">
            <h4 class="quotes-title fw-bold">Quotes dan Motivasi Qurani</h4>
            <p class="deskripsi-quotes">Quran inspirasi menyediakan quotes dan motivasi dari ayat-ayat alquran dengan berbagai tema<br />serta pembahasan yang berbeda setiap harinya</p>
            <div class="form-outline mt-4 mb-4">
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-search" style="color: #8FAA90"></i>
                    </span>
                    <input type="search" id="form1" class="form-control" placeholder="Pencarian : Tema, Surat, Ayat" aria-label="Search" />
                </div>
            </div>

            <!-- Baris 1 -->
            <div class="row">
                <!-- Kolom 1 -->
                <div class="col-lg-6 mt-2 mb-2">
                    <div class="accordion" id="accordionExample1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <img src="asset/theme-icon.png" alt="Logo" width="35" height="35" class="me-2">
                                    <span class="content">Meluruskan Akidah</span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Ayat Al-Quran yang Berkaitan</strong>
                                    </br>Konten menyesuaikan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom 2 -->
                <div class="col-lg-6 mt-2 mb-2">
                    <div class="accordion" id="accordionExample2">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <img src="asset/theme-icon.png" alt="Logo" width="35" height="35" class="me-2">
                                    <span class="content">Mempraktikan ibadah Shahih</span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Ayat Al-Quran yang Berkaitan</strong>
                                    </br>Konten menyesuaikan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Baris 2 -->
            <div class="row">
                <!-- Kolom 1 -->
                <div class="col-lg-6 mt-2 mb-2">
                    <div class="accordion" id="accordionExample1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <img src="asset/theme-icon.png" alt="Logo" width="35" height="35" class="me-2">
                                    <span class="content">Menampilkan Akhlaq Mulia</span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Ayat Al-Quran yang Berkaitan</strong>
                                    </br>Konten menyesuaikan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom 2 -->
                <div class="col-lg-6 mt-2 mb-2">
                    <div class="accordion" id="accordionExample2">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    <img src="asset/theme-icon.png" alt="Logo" width="35" height="35" class="me-2">
                                    <span class="content">Memilih Hidup Sehat</span>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Ayat Al-Quran yang Berkaitan</strong>
                                    </br>Konten menyesuaikan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Baris 3 -->
            <div class="row">
                <!-- Kolom 1 -->
                <div class="col-lg-6 mt-2 mb-2">
                    <div class="accordion" id="accordionExample1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    <img src="asset/theme-icon.png" alt="Logo" width="35" height="35" class="me-2">
                                    <span class="content">Mengasah Potensi Berpikir</span>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Ayat Al-Quran yang Berkaitan</strong>
                                    </br>Konten menyesuaikan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom 2 -->
                <div class="col-lg-6 mt-2 mb-2">
                    <div class="accordion" id="accordionExample2">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    <img src="asset/theme-icon.png" alt="Logo" width="35" height="35" class="me-2">
                                    <span class="content">Memelihara Semangat Juang</span>
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Ayat Al-Quran yang Berkaitan</strong>
                                    </br>Konten menyesuaikan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Baris 4 -->
            <div class="row">
                <!-- Kolom 1 -->
                <div class="col-lg-6 mt-2 mb-2">
                    <div class="accordion" id="accordionExample1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                    <img src="asset/theme-icon.png" alt="Logo" width="35" height="35" class="me-2">
                                    <span class="content">Terampil Mengatur Waktu</span>
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Ayat Al-Quran yang Berkaitan</strong>
                                    </br>Konten menyesuaikan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom 2 -->
                <div class="col-lg-6 mt-2 mb-2">
                    <div class="accordion" id="accordionExample2">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                    <img src="asset/theme-icon.png" alt="Logo" width="35" height="35" class="me-2">
                                    <span class="content">Terampil Mengelola Urusan (First Think First)</span>
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Ayat Al-Quran yang Berkaitan</strong>
                                    </br>Konten menyesuaikan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Baris 5 -->
            <div class="row">
                <!-- Kolom 1 -->
                <div class="col-lg-6 mt-2 mb-2">
                    <div class="accordion" id="accordionExample1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                    <img src="asset/theme-icon.png" alt="Logo" width="35" height="35" class="me-2">
                                    <span class="content">Hidup Produktif</span>
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Ayat Al-Quran yang Berkaitan</strong>
                                    </br>Konten menyesuaikan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom 2 -->
                <div class="col-lg-6 mt-2 mb-2">
                    <div class="accordion" id="accordionExample2">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                    <img src="asset/theme-icon.png" alt="Logo" width="35" height="35" class="me-2">
                                    <span class="content">Meningkatkan Peran Sosial</span>
                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse s" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Ayat Al-Quran yang Berkaitan</strong>
                                    </br>Konten menyesuaikan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </section>

        <!-- Footer
        <section class="footer">
        </section> -->
    </div>
    <!-- FOOTER -->
    @include('footer')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>