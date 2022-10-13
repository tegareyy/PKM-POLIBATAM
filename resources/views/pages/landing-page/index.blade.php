<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Bootstrap demo</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
            crossorigin="anonymous"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />
        <style>
            * {
                font-family: "Poppins", sans-serif;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container py-1">
                <a class="navbar-brand" href="#">
                    <img src="/image/logo-polibatam.png" width="70" alt="" />
                    <img
                        src="/image/logo-kampus-merdeka.png"
                        width="70"
                        alt=""
                    />
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="#"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Another action</a
                                    >
                                </li>
                                <li><hr class="dropdown-divider" /></li>
                                <li>
                                    <a class="dropdown-item" href="#"
                                        >Something else here</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <button class="btn btn-info" type="submit">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <main class="">
            <section class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-5">
                        <img src="/image/logo-pkm.png" class="w-100" alt="" />
                    </div>
                    <div class="col-6">
                        <h4 class="mb-3">Apa itu PKM?</h4>
                        <p>
                            Program Kreativitas Mahasiswa adalah kegiatan untuk
                            meningkatkan mutu peserta didik (mahasiswa) di
                            perguruan tinggi agar kelak dapat menjadi anggota
                            masyarakat yang memiliki kemampuan akademik dan
                            profesional yang dapat menerapkan,mengembangkan, dan
                            menyebarluaskan ilmu pengetahuan, teknologi atau
                            kesenian serta memperkaya budaya nasional.
                        </p>
                    </div>
                </div>
            </section>

            <section style="background-color: #373e46">
                <div class="container py-3">
                    <h4 class="text-center text-white">
                        JENIS PKM YANG DI LOMBAKAN
                    </h4>
                    <p class="text-center text-white">Terdapat 8 Bidang</p>
                    <div class="row">
                        <div class="col-3 mb-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img
                                        src="/image/icon-pkm-ai.svg"
                                        height="65"
                                        alt=""
                                        class="mb-2"
                                    />
                                    <h5 class="mb-0">PKM-AI</h5>

                                    <p class="mb-0">(Artikel Ilmiah)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img
                                        src="/image/icon-pkm-gft.svg"
                                        height="65"
                                        alt=""
                                        class="mb-2"
                                    />
                                    <h5 class="mb-0">PKM-GFT</h5>

                                    <p class="mb-0">
                                        (Gagasan Futuristik Tertulis)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img
                                        src="/image/icon-pkm-k1.svg"
                                        height="65"
                                        alt=""
                                        class="mb-2"
                                    />
                                    <h5 class="mb-0">PKM-K</h5>

                                    <p class="mb-0">(Kewirausahaan)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img
                                        src="/image/icon-pkm-kc.svg"
                                        height="65"
                                        alt=""
                                        class="mb-2"
                                    />
                                    <h5 class="mb-0">PKM-KC</h5>

                                    <p class="mb-0">(Karsa Cipta)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img
                                        src="/image/icon-pkm-ki1.svg"
                                        height="65"
                                        alt=""
                                        class="mb-2"
                                    />
                                    <h5 class="mb-0">PKM-KI</h5>

                                    <p class="mb-0">(Karya Inovatif)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img
                                        src="/image/icon-pkm-pi1.svg"
                                        height="65"
                                        alt=""
                                        class="mb-2"
                                    />
                                    <h5 class="mb-0">PKM-PI</h5>

                                    <p class="mb-0">(Penerapan IPTEK)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img
                                        src="/image/icon-pkm-pm1.svg"
                                        height="65"
                                        alt=""
                                        class="mb-2"
                                    />
                                    <h5 class="mb-0">PKM-PM</h5>

                                    <p class="mb-0">(Pengabdian Masyarakat)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 mb-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img
                                        src="/image/icon-pkm-vgk1.svg"
                                        height="65"
                                        alt=""
                                        class="mb-2"
                                    />
                                    <h5 class="mb-0">PKM-VGK</h5>

                                    <p class="mb-0">
                                        (Video Gagasan Futuristik)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container py-3">
                    <h4 class="text-center text-white">TAHAPAN PENDAFTARAN</h4>

                    <div class="row">
                        <div class="col-4 mb-4">
                            <div class="">
                                <div class="text-center">
                                    <img
                                        src="/image/gambar-sosialiasi.png"
                                        height="140"
                                        alt=""
                                        class="mb-2"
                                    />
                                    <h5 class="mb-0">1.Sosialiasi</h5>

                                    <p class="mb-0">
                                        Sosialisasi yang dilakukan oleh TIM PKM
                                        Polibatam
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="">
                                <div class="text-center">
                                    <img
                                        src="/image/gambar-pengajuan-judul.png"
                                        height="140"
                                        alt=""
                                        class="mb-2"
                                    />
                                    <h5 class="mb-0">2.Pengajuan Judul</h5>

                                    <p class="mb-0">
                                        Pengajuan Judul Proposal Yang dilakuakan
                                        oleh Mahasiswa
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="">
                                <div class="text-center">
                                    <img
                                        src="/image/gambar-penilaian-judul.png"
                                        height="140"
                                        alt=""
                                        class="mb-2"
                                    />
                                    <h5 class="mb-0">3.Penilaian Judul</h5>

                                    <p class="mb-0">
                                        Penilaian Judul Proposal Yang dilakuakan
                                        oleh Dosen Pembimbing dan Tim PKM
                                        Polibatam
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="">
                                <div class="text-center">
                                    <img
                                        src="/image/gambar-pengajuan-proposal.png"
                                        height="140"
                                        alt=""
                                        class="mb-2"
                                    />
                                    <h5 class="mb-0">4.Pengajuan Proposal</h5>

                                    <p class="mb-0">
                                        Apabila Judul Disetujui Mahasiswa daoat
                                        mengajukan Proposal PKM
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="">
                                <div class="text-center">
                                    <img
                                        src="/image/gambar-penilaian-judul.png"
                                        height="140"
                                        alt=""
                                        class="mb-2"
                                    />
                                    <h5 class="mb-0">5.Penilaian Proposal</h5>

                                    <p class="mb-0">
                                        Penilaian Proposal Yang dilakukan Dosen
                                        Pembimbing dan Tim PKM Polibatam
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="">
                                <div class="text-center">
                                    <img
                                        src="/image/proposal-disetujui.png"
                                        height="140"
                                        alt=""
                                        class="mb-2"
                                    />
                                    <h5 class="mb-0">
                                        6.Propsal PKM Disetujui
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="" style="background-color: #000000">
            <div class="container py-5 text-white">
                <div class="row">
                    <div class="col-2">
                        <img
                            src="/image/gambar-polibatam-hitam.png"
                            width="100%"
                            alt=""
                        />
                    </div>
                    <div class="col">
                        <ul>
                            <li>
                                Jl. Ahmad Yani Batam Kota. Kota Batam. kepulauan
                                Riau. Indonesia
                            </li>
                            <li>+62-778-469858 Ext.1017</li>
                            <li>+62-778-463620</li>
                            <li>info@polibatam.ac.id</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"
        ></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    </body>
</html>
