<?php

$destinasi = [
    [
        "nama" => "Kawah Putih Ciwidey",
        "deskripsi" => "Sebuah pesona alam kawah vulkanik dengan danau berwarna putih kehijauan yang memukau. Destinasi ini merupakan aset pariwisata unggulan yang dikelola dengan komitmen pelestarian ekosistem alam yang berkelanjutan.",
        "alamat" => "Jl. Raya Soreang Ciwidey, Kabupaten Bandung, Jawa Barat",
        "gambar" => "asset/Kawah_Putih.jpg",
        "link_ig" => "https://www.instagram.com/wisatakawahputih/"
    ],
    [
        "nama" => "Farmhouse Lembang",
        "deskripsi" => "Area rekreasi tematik berkonsep Eropa klasik yang menawarkan edukasi kultural serta pengalaman wisata keluarga. Fasilitas ini didedikasikan untuk meningkatkan sektor ekonomi kreatif di kawasan Lembang.",
        "alamat" => "Jl. Raya Lembang No.108, Gudangkahuripan, Lembang, Kabupaten Bandung Barat",
        "gambar" => "asset/FarmHouse_Lembang.jpg",
        "link_ig" => "https://www.instagram.com/farmhouselembang/"
    ],
    [
        "nama" => "Dusun Bambu",
        "deskripsi" => "Destinasi ekowisata percontohan yang memadukan keindahan alam pegunungan dengan budaya tradisional Sunda. Kami mengedepankan prinsip pariwisata hijau demi menjaga harmoni antara manusia dan alam.",
        "alamat" => "Jl. Kolonel Masturi KM. 11, Kertawangi, Cisarua, Kabupaten Bandung Barat",
        "gambar" => "asset/Dusun_Bambu_Lembang.jpg",
        "link_ig" => "https://www.instagram.com/dusun_bambu/"
    ],
    [
        "nama" => "Orchid Forest Cikole",
        "deskripsi" => "Pusat konservasi dan budidaya anggrek terbesar di Indonesia yang terletak di tengah hutan pinus. Tempat ini berfungsi ganda sebagai sarana rekreasi edukatif dan pelestarian flora endemik nusantara.",
        "alamat" => "Genteng, Cikole, Lembang, Kabupaten Bandung Barat",
        "gambar" => "asset/Orchid_Forest_Cikole.jpg",
        "link_ig" => "https://www.instagram.com/orchidforestcikole/"
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Dinas Pariwisata</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-navy sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="bi bi-tree-fill me-2"></i>Dinas Pariwisata</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#destinasi">Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#video">Dokumentasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="beranda">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="4"></button>
            </div>
            
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4000">
                    <img src="asset/Bumi_Parahyangan.jpg" class="d-block w-100" alt="Panorama Kawah Putih">
                    <div class="carousel-caption">
                        <h1>Pesona Bumi Parahyangan</h1>
                        <p class="d-none d-md-block">Jelajahi keindahan alam Bandung yang menyimpan sejuta cerita dan memori tak terlupakan.</p>
                        <a href="#destinasi" class="btn btn-primary btn-lg mt-3 shadow" style="background-color: #e56b6f; border:none;">Eksplorasi Sekarang</a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="asset/FarmHouse_Lembang.jpg" class="d-block w-100" alt="Panorama Lembang">
                    <div class="carousel-caption">
                        <h1>Harmoni Budaya dan Alam</h1>
                        <p class="d-none d-md-block">Dinas Pariwisata Bandung berkomitmen memajukan pariwisata yang berkelanjutan, lestari, dan memberdayakan.</p>
                        <a href="#destinasi" class="btn btn-primary btn-lg mt-3 shadow" style="background-color: #e56b6f; border:none;">Eksplorasi Sekarang</a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="asset/Orchid_Forest_Cikole.jpg" class="d-block w-100" alt="Panorama Orchid Forest">
                    <div class="carousel-caption">
                        <h1>Pariwisata Ramah Lingkungan</h1>
                        <p class="d-none d-md-block">Nikmati kesejukan pegunungan dengan beragam fasilitas rekreasi edukatif yang tertata modern.</p>
                        <a href="#destinasi" class="btn btn-primary btn-lg mt-3 shadow" style="background-color: #e56b6f; border:none;">Eksplorasi Sekarang</a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="asset/Kawah_Putih.jpg" class="d-block w-100" alt="Panorama Orchid Forest">
                    <div class="carousel-caption">
                        <h1>Pesona Keajaiban Alam</h1>
                        <p class="d-none d-md-block">Saksikan kemegahan kawah vulkanik ikonik dengan gradasi air pirus yang memanjakan mata.</p>
                        <a href="#destinasi" class="btn btn-primary btn-lg mt-3 shadow" style="background-color: #e56b6f; border:none;">Eksplorasi Sekarang</a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="asset/Dusun_Bambu_Lembang.jpg" class="d-block w-100" alt="Panorama Orchid Forest">
                    <div class="carousel-caption">
                        <h1>Ekowisata Keluarga Modern</h1>
                        <p class="d-none d-md-block">Destinasi wisata berkelanjutan dengan fasilitas lengkap untuk momen berharga bersama orang tercinta.</p>
                        <a href="#destinasi" class="btn btn-primary btn-lg mt-3 shadow" style="background-color: #e56b6f; border:none;">Eksplorasi Sekarang</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Selanjutnya</span>
            </button>
        </div>
    </header>

    <section id="destinasi" class="container py-5 mt-4">
        <div class="text-center">
            <h2 class="section-title">Destinasi Unggulan</h2>
            <p class="text-muted mb-5">Program inisiasi pengembangan sektor pariwisata daerah tahun 2026.</p>
        </div>
        
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php 
            foreach ($destinasi as $item): 
            ?>
            <div class="col">
                <div class="card h-100">
                    <img src="<?= htmlspecialchars($item['gambar']); ?>" class="card-img-top" alt="<?= htmlspecialchars($item['nama']); ?>">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title fw-bold" style="color: #0b2545;"><?= htmlspecialchars($item['nama']); ?></h4>
                        <p class="card-text text-muted mb-4"><?= htmlspecialchars($item['deskripsi']); ?></p>
                        
                        <div class="mt-auto">
                            <p class="mb-3 small">
                                <strong><i class="bi bi-geo-alt-fill text-danger me-1"></i> Alamat:</strong><br>
                                <?= htmlspecialchars($item['alamat']); ?>
                            </p>
                            <a href="<?= htmlspecialchars($item['link_ig']); ?>" target="_blank" class="btn btn-navy w-100 fw-medium">
                                <i class="bi bi-instagram me-2"></i>Lihat Detail Instagram
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="video" class="bg-light py-5 mt-5">
        <div class="container py-4">
            <div class="text-center">
                <h2 class="section-title">Video Dokumentasi</h2>
                <p class="text-muted mb-4">Mengenal lebih dekat keindahan alam dan pelestarian budaya lokal Jawa Barat.</p>
            </div>
            
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card border-0 shadow-sm p-3 rounded-4 bg-white h-100">
                        <div class="ratio ratio-16x9 rounded-3 overflow-hidden">
                            <video controls preload="metadata" style="object-fit: cover; width: 100%; height: 100%;">
                                <source src="asset/Kawah_Putih.mp4" type="video/mp4">
                                Browser Anda tidak mendukung pemutar video.
                            </video>
                        </div>
                        <h5 class="mt-3 text-center fw-bold text-navy" style="color: #0b2545;">Kawah Putih Ciwidey</h5>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-sm p-3 rounded-4 bg-white h-100">
                        <div class="ratio ratio-16x9 rounded-3 overflow-hidden">
                            <video controls preload="metadata" style="object-fit: cover; width: 100%; height: 100%;">
                                <source src="asset/Farm_House.mp4" type="video/mp4">
                                Browser Anda tidak mendukung pemutar video.
                            </video>
                        </div>
                        <h5 class="mt-3 text-center fw-bold text-navy" style="color: #0b2545;">Farmhouse Lembang</h5>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-sm p-3 rounded-4 bg-white h-100">
                        <div class="ratio ratio-16x9 rounded-3 overflow-hidden">
                            <video controls preload="metadata" style="object-fit: cover; width: 100%; height: 100%;">
                                <source src="asset/Orchid_Forest.mp4" type="video/mp4">
                                Browser Anda tidak mendukung pemutar video.
                            </video>
                        </div>
                        <h5 class="mt-3 text-center fw-bold text-navy" style="color: #0b2545;">Orchid Forest Cikole</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section id="kontak" class="py-5 bg-light">
            <div class="container text-center">
                <h2 class="section-title">Ingin Liburan ke Sini?</h2>
                <p class="mb-4">Hubungi kami melalui WhatsApp untuk merencanakan perjalanan Anda.</p>
                <a href="https://wa.me/6281234567890?text=Halo%20Dinas%20Pariwisata%2C%20saya%20ingin%20merencanakan%20liburan%20ke%20Bandung."
                    target="_blank" class="btn btn-success btn-lg btn-custom px-5 py-3 shadow">
                    <i class="bi bi-whatsapp me-2"></i>Hubungi via WhatsApp
                </a>
            </div>
        </section>

    <footer class="footer-custom py-5 mt-auto">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 mb-3 mb-lg-0">
                    <h5 class="fw-bold d-flex align-items-center">
                        <i class="bi bi-shield-check text-primary me-2 fs-4"></i> Dinas Pariwisata & Kebudayaan
                    </h5>
                    <p class="mb-2 text-white-50"><i class="bi bi-geo-alt text-primary me-2"></i> Jl. L. L. R.E.
                        Martadinata No.209, Cihapit<br>Kec. Bandung Wetan, Kota Bandung 40114</p>
                    <p class="mb-0 text-white-50"><i class="bi bi-envelope text-primary me-2"></i> <a
                            href="mailto:disparbud@jabarprov.go.id" class="footer-link">disparbud@jabarprov.go.id</a>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 mb-lg-0">
                    <h5 class="fw-bold">Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#beranda" class="footer-link">Beranda</a></li>
                        <li class="mb-2"><a href="#destinasi" class="footer-link">Destinasi</a></li>
                        <li class="mb-0"><a href="#kontak" class="footer-link">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="fw-bold">Ikuti Kami</h5>
                    <p class="small mb-3 text-white-50">Temukan pesona pariwisata Jawa Barat selengkapnya di media
                        sosial resmi kami.</p>
                    <div class="d-flex gap-2">
                        <a href="https://www.facebook.com/disparbudjabarprov/?locale=id_ID" target="_blank"
                            class="social-icon" title="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/disparbudjabar/" target="_blank" class="social-icon"
                            title="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/@disparbudjabar9265" target="_blank" class="social-icon"
                            title="YouTube">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <hr class="border-secondary my-4 opacity-50">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 small text-white-50">&copy; 2026 Dinas Pariwisata dan Kebudayaan Provinsi Jawa Barat.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                    <p class="mb-0 small text-white-50">All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
