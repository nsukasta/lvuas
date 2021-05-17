<!DOCTYPE html>
<html lang="en">

@extends('layouts.user.default')
@section('title', 'Home | Bumdes Penglatan')
@section('content')

    <body>
        <div class="container">
            <div class="row banner">
                <div class="col-md-6">
                    <h1> Ayo kita Gerakkan<br> Desa Modern </h1>
                    <p> BUMDES membantu masyarakat, menciptakan desa yang maju, <br> modern dan tetap menjaga
                        nilai-nilai
                        budaya leluhur</p>
                    <a href="#" class="express-btn">JOIN FREE</a>
                    <a href="#">HAYUK!</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('style/img/p1.svg') }}" class="img-fluid">
                </div>
            </div>
            <section class="service">

                <h2 class="tittle">Kami menyediakan berbagai layanan!</h2>
                <p class="subtittle"> Ayo segera, daftarkan diri anda, untuk membantu desa kita tercinta</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-box">
                            <img src="{{ asset('style//img/care2.png') }}">
                            <h6>Costumer Service 24/7 </h6>
                            <p>CS kami, sedia setiap saat anda membutuhkan</p>
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box active-service">
                            <img src="{{ asset('style/img/faster.png') }}">
                            <h6>Proses Cepat </h6>
                            <p>Proses pelayanan kami sangat cepat serta dapat ditunggu </p>
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <img src="{{ asset('style/img/praying.png') }}">
                            <h6>Menjunjung Budaya </h6>
                            <p>Budaya Sopan, Santun, Ramah Tamah selalu kami tanamkan</p>
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
        </div>
        </section>

        <!---fitur--->

        <section class="fitur">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img src="{{ asset('style/img/fitur-1.png') }}">
                    </div>
                    <div class="col-md-6">
                        <h2> Cultural Heritage, Farmers, Ancestors</h2>
                        <p>Menjaga warisan budaya, ekonomi, pakem adat. <br> Petani menjadi punggung Agraria kita saat
                            ini!
                            dengan mendukung kami, anda menjadi volunteer!</p>
                        <a href="">WATCH NOW</a>
                    </div>
                </div>
            </div>
        </section>

        <!---explore--->

        <section class="explore">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2> Kunjungi kita!</h2>
                        <p> Kita tingkatkan wisata lokal, <br> potensi Cagar Budaya harus tetap dijaga!. <br>
                            Seimbangkan
                            daya tarik wsata, dengan berkunjung dan berkreasi!</p>
                        <a href="">EXPLOR NOW</a>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('style/img/explore5.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!--Testi--->

        <section class="review">
            <div class="container">
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('style/img/testi3.jpg') }}">
                                <div class="carousel-caption">
                                    <h6>Aditya Wiradarma</h6>
                                    <small>CEO Dagang Godel</small>
                                    <p>Proeses meminjam hutang sangat cepat, bisa ditunggu gais!</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('style/img/testi2.jpg') }}">
                                <div class="carousel-caption">
                                    <h6>Ngurah Surya</h6>
                                    <small>CEO & Founder Anom Jaya .Tbk</small>
                                    <p>Suku bunga rendah, pelayanan ramah</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('style/img/testi4.jpg') }}">
                                <div class="carousel-caption">
                                    <h6>Deny Surya</h6>
                                    <small>Founder Babi Guling Baturiti</small>
                                    <p>Peminjaman alat petani sangat mudah, cepat dan efisien</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

@endsection

</html>
