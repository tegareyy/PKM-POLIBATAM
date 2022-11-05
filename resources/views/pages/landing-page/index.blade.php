@extends('layouts.landing') @section('content')
    <main class="">
        <section class="container">
            <div class="row align-items-center justify-content-between py-5">
                <div class="col-md-5 mb-3 mb-md-0">
                    <img src="/image/logo-pkm.png" class="w-100" alt="" />
                </div>
                <div class="col-md-6">
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
                    <a href="#" class="btn btn-success">Lihat Panduan PKM</a>
                </div>
            </div>
        </section>
        <section style="background-color: #373e46">
            <div class="container py-5">
                <div class="mb-5">
                    <h4 class="text-center text-white">
                        JENIS PKM YANG DI LOMBAKAN
                    </h4>
                    <p class="text-center text-white">Terdapat 8 Bidang</p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="/image/icon-pkm-ai.svg" height="65" alt="" class="mb-2" />
                                <h5 class="mb-0">PKM-AI</h5>

                                <p class="mb-0">(Artikel Ilmiah)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="/image/icon-pkm-gft.svg" height="65" alt="" class="mb-2" />
                                <h5 class="mb-0">PKM-GFT</h5>

                                <p class="mb-0">
                                    (Gagasan Futuristik Tertulis)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="/image/icon-pkm-k1.svg" height="65" alt="" class="mb-2" />
                                <h5 class="mb-0">PKM-K</h5>

                                <p class="mb-0">(Kewirausahaan)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="/image/icon-pkm-kc.svg" height="65" alt="" class="mb-2" />
                                <h5 class="mb-0">PKM-KC</h5>

                                <p class="mb-0">(Karsa Cipta)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="/image/icon-pkm-ki1.svg" height="65" alt="" class="mb-2" />
                                <h5 class="mb-0">PKM-KI</h5>

                                <p class="mb-0">(Karya Inovatif)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="/image/icon-pkm-pi1.svg" height="65" alt="" class="mb-2" />
                                <h5 class="mb-0">PKM-PI</h5>

                                <p class="mb-0">(Penerapan IPTEK)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="/image/icon-pkm-pm1.svg" height="65" alt="" class="mb-2" />
                                <h5 class="mb-0">PKM-PM</h5>

                                <p class="mb-0">(Pengabdian Masyarakat)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="/image/icon-pkm-vgk1.svg" height="65" alt="" class="mb-2" />
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
            <div class="container py-5 my-5">
                <h4 class="text-center mb-5">TAHAPAN PENDAFTARAN</h4>

                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="">
                            <div class="text-center">
                                <img src="/image/gambar-sosialiasi.png" height="140" alt="" class="mb-2" />
                                <h5 class="mb-0">1.Sosialiasi</h5>

                                <p class="mb-0">
                                    Sosialisasi yang dilakukan oleh TIM PKM
                                    Polibatam
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="">
                            <div class="text-center">
                                <img src="/image/gambar-pengajuan-judul.png" height="140" alt=""
                                    class="mb-2" />
                                <h5 class="mb-0">2.Pengajuan Judul</h5>

                                <p class="mb-0">
                                    Pengajuan Judul Proposal Yang dilakuakan
                                    oleh Mahasiswa
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="">
                            <div class="text-center">
                                <img src="/image/gambar-penilaian-judul.png" height="140" alt=""
                                    class="mb-2" />
                                <h5 class="mb-0">3.Penilaian Judul</h5>

                                <p class="mb-0">
                                    Penilaian Judul Proposal Yang dilakuakan
                                    oleh Dosen Pembimbing dan Tim PKM
                                    Polibatam
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="">
                            <div class="text-center">
                                <img src="/image/gambar-pengajuan-proposal.png" height="140" alt=""
                                    class="mb-2" />
                                <h5 class="mb-0">4.Pengajuan Proposal</h5>

                                <p class="mb-0">
                                    Apabila Judul Disetujui Mahasiswa daoat
                                    mengajukan Proposal PKM
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="">
                            <div class="text-center">
                                <img src="/image/gambar-penilaian-judul.png" height="140" alt=""
                                    class="mb-2" />
                                <h5 class="mb-0">5.Penilaian Proposal</h5>

                                <p class="mb-0">
                                    Penilaian Proposal Yang dilakukan Dosen
                                    Pembimbing dan Tim PKM Polibatam
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="">
                            <div class="text-center">
                                <img src="/image/proposal-disetujui.png" height="140" alt="" class="mb-2" />
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
@endsection
