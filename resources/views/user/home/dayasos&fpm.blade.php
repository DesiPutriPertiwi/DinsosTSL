@extends('user.layout.master')

<header class="site-header">
    <div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-1" style="margin-top:10px; margin-left:50px">
                    <img src="{{ asset('image/logo/dinsos.png')}}" width="80px" hight="80px"/>
                </div>
                <div class="col-md-4">
                    <span style="color:#ffffff">
                        <h1>Dinas Sosial</h1>
                        <h4>Kota Tangerang Selatan</h4>
                    </span>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('image/logo/pkh.png')}}" width="110px" hight="110px" style="margin-left:5px;margin-right:20px"/>
                    <img src="{{ asset('image/logo/tksk.png')}}" width="75px" hight="75px" style="margin-right:20px"/>
                    <img src="{{ asset('image/logo/tagana.png')}}" width="45px" hight="45px"/>
                </div>
                <div class="col-md-3 input-group" style="margin-left:20px">
                    <input class="form-control" placeholder="Search" type="search" name="search"/>
                    <button type="button" class="btn btn-primary fas fa-search"> </button>
                </div>
            </div><!-- .row -->
            <div class="row">
                @include('user.includes.menu')
            </div> <!-- .row --> 

        </div><!-- container-fluid -->
    </div><!-- header-bar -->
</header><!-- .site-header -->

<div class="contents-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-9" style="margin-top:20%; margin-left:30%">   
            <div class="container">
                <div class="header">
                    <div class="entry-title" style="color:goldenrod">
                        <h2>Rekaplitulasi VERVAL 2017 (KEC/KEL)</h2>
                        <p style="padding-top:30px">
                            Hasil rekapitulasi verifikasi dan validasi data individu, rumah tangga, dan keluarga Kota Tangerang Selatan.
                            Data bersumber dari Basis Data Terpadu oleh Kementrian Sosial RI 2017. 
                        </p>
                    </div><!-- entry-title -->
                </div><!-- header -->

                <div class="home-page-last-news-wrap">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <figure class="featured-image">
                                <a href="#"> <img src="data/dayasos/Hasil VERVAL all.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header">
                                        <h2>Rekap Hasil Verifikasi Validasi Kecamatan 2017</h2>
                                        <p>
                                              Hasil rekapitulasi verifikasi dan validasi data individu, rumah tangga, dan keluarga Kota Tangerang Selatan.
                                              Data bersumber dari Basis Data Terpadu oleh Kementrian Sosial RI 2017.      
                                        </p>
                                    </div><!-- entry-header -->

                                    <!--<div class="entry-meta">
                                        <span class="author-name"><a href="#"> By James Williams</a></span>
                                        <span class="space">|</span>
                                        <span class="comments-count"><a href="#">3 comments</a></span>
                                    </div> entry-meta -->

                                    <!--<div class="entry-description">
                                        <p>Quisque at erat eu libero consequat tempus.
                                            Quisque mole stie convallis tempus.
                                            Ut semper purus metus, a euismod sapien sodales ac.
                                            Duis viverra eleifend fermentum.</p>
                                    </div> entry-description -->
                                </div><!-- entry-content -->
                            </div><!-- content-wrapper -->
                        </div><!-- .col-6 -->

                        <div class="col-12 col-md-6">
                            <figure class="featured-image">
                                <a href="#"> <img src="data/dayasos/Hasil VERVAL all.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header">
                                        <h2>Rekap Hasil Verifikasi Validasi Kecamatan 2017</h2>
                                        <p>
                                              Hasil rekapitulasi verifikasi dan validasi data individu, rumah tangga, dan keluarga Kota Tangerang Selatan.
                                              Data bersumber dari Basis Data Terpadu oleh Kementrian Sosial RI 2017.      
                                        </p>
                                    </div><!-- entry-header -->

                                    <!--<div class="entry-meta">
                                        <span class="author-name"><a href="#"> By James Williams</a></span>
                                        <span class="space">|</span>
                                        <span class="comments-count"><a href="#">3 comments</a></span>
                                    </div> entry-meta -->

                                    <!--<div class="entry-description">
                                        <p>Quisque at erat eu libero consequat tempus.
                                            Quisque mole stie convallis tempus.
                                            Ut semper purus metus, a euismod sapien sodales ac.
                                            Duis viverra eleifend fermentum.</p>
                                    </div> entry-description -->
                                </div><!-- entry-content -->
                            </div><!-- content-wrapper -->
                        </div><!-- .col-6 -->
                    </div><!-- row -->
                </div><!-- home-page-last-news-wrap -->


            </div><!-- container -->
        </div><!-- home-page-last-news -->
            </div>
        </div>
    </div>
</div>