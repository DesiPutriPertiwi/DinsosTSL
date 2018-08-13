@extends('user.layout.master')

<!--Modal bootstrap-->
    <script src='frontEnd/modal/jquery.min.js'></script>
    <script src='frontEnd/modal/popper.min.js'></script>
    <script src='frontEnd/modal/bootstrap.min.js'></script>
<!--.Modal bootstrap-->

<header class="site-header">
    <div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-1" style="margin-top:10px; margin-left:50px">
                    <img src="{{ asset('image/logo/dinsos.png')}}" width="80px" hight="80px"/>
                </div>
                <div class="col-md-4">
                    <span style="color:#ffffff">
                        <h1 style="text-shadow: 2px 2px 5px #040505">Dinas Sosial</h1>
                        <h4 style="text-shadow: 2px 2px 5px #040505">Kota Tangerang Selatan</h4>
                    </span>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('image/logo/pkh.png')}}" width="110px" hight="110px" style="margin-left:5px;margin-right:20px"/>
                    <img src="{{ asset('image/logo/tksk.png')}}" width="75px" hight="75px" style="margin-right:20px"/>
                    <img src="{{ asset('image/logo/tagana.png')}}" width="45px" hight="45px" />
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
            <div class="col-sm-10" style="margin-top:20%; margin-left:20%">   
            <div class="container">
                <div class="header">
                    <div class="entry-title" style="color:goldenrod">
                        <h2 style="text-shadow: 2px 2px 5px #ffc107">Rekaplitulasi VERVAL 2017 (KEC/KEL)</h2>
                        <p style="padding-top:30px">
                            Hasil rekapitulasi verifikasi dan validasi data individu, rumah tangga, dan keluarga Kota Tangerang Selatan.
                            Data bersumber dari Basis Data Terpadu oleh Kementrian Sosial RI 2017. 
                        </p>
                    </div><!-- entry-title -->
                </div><!-- header -->


                <!--Home page row 1-->
                <div class="home-page-last-news-wrap">
                    <div class="row">

                        <!--Box 1.1-->
                        <div class="col-12 col-md-6">
                            <figure class="featured-image">
                                <a href="#" data-toggle="modal" data-target="#myModal"> <img src="data/dayasos/Hasil rekap verval kel.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header" data-toggle="modal" data-target="#myModal">
                                        <h2>Rekap Hasil Verifikasi Validasi Kecamatan Kelurahan 2017</h2>
                                    </div><!-- entry-header -->
                                </div><!-- entry-content -->
                            </div><!-- content-wrapper -->
                        </div><!-- .col-6 -->

                         <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog-sm">
                            <div class="modal-content">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Rekap Hasil Verifikasi Validasi Kecamatan Kelurahan 2017</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p>
                                          Hasil rekapitulasi verifikasi dan validasi data individu, rumah tangga, dan keluarga Kota Tangerang Selatan.
                                    </p>
                                    <figure class="featured-image">
                                        <img src="data/dayasos/Hasil rekap verval kel.jpg" alt="fesival+celebration">
                                    </figure> <!--featured-image -->
                                    
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                        <!--.Box 1.1-->

                        <!--Box 1.2-->
                        <div class="col-12 col-md-6">
                            <figure class="featured-image" data-toggle="modal" data-target="#myModal1">
                                <a href="#"> <img src="data/dayasos/Hasil rekap verval kec.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header" data-toggle="modal" data-target="#myModal1">
                                        <h2>Rekap Hasil Verifikasi Validasi Kecamatan 2017</h2> <br><br>
                                    </div><!-- entry-header -->
                                </div><!-- entry-content -->
                            </div><!-- content-wrapper -->
                        </div><!-- .col-6 -->

                        <!-- The Modal -->
                        <div class="modal" id="myModal1">
                            <div class="modal-dialog-sm">
                            <div class="modal-content">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Rekap Hasil Verifikasi Validasi Kecamatan 2017</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p>
                                          Hasil rekapitulasi verifikasi dan validasi data individu, rumah tangga, dan keluarga Kota Tangerang Selatan.
                                    </p>
                                    <figure class="featured-image">
                                        <img src="data/dayasos/Hasil rekap verval kec.jpg" alt="fesival+celebration">
                                    </figure> <!--featured-image -->
                                    
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                        <!--.Box 1.2-->
                    </div><!-- row -->
                </div><!-- home-page-last-news-wrap -->
                <!--.Home page row 1-->


                <!--Home page row 2-->
                <div class="home-page-last-news-wrap" style="margin-top:10%">
                    <div class="row">

                        <!--Box 2.1-->
                        <div class="col-12 col-md-4">
                            <figure class="featured-image" data-toggle="modal" data-target="#myModal2">
                                <a href="#"> <img src="data/dayasos/Hasil rekap verval kel.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header" data-toggle="modal" data-target="#myModal2">
                                        <h2>Rincian Hasil Verifikasi Validasi Kecamatan Kelurahan 2017</h2>
                                    </div><!-- entry-header -->
                                </div><!-- entry-content -->
                            </div><!-- content-wrapper -->
                        </div><!-- .col-4 -->

                         <!-- The Modal -->
                        <div class="modal" id="myModal2">
                            <div class="modal-dialog-sm">
                            <div class="modal-content">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Rincian Hasil Verifikasi Validasi Kecamatan Kelurahan 2017</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p>
                                          Hasil rekapitulasi verifikasi dan validasi data individu, rumah tangga, dan keluarga Kota Tangerang Selatan.
                                    </p>
                                    <figure class="featured-image">
                                        <img src="data/dayasos/Hasil rekap verval kec.jpg" alt="fesival+celebration">
                                    </figure> <!--featured-image -->
                                    
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                        <!--.Box 2.1-->

                        <!--Box 2.2-->
                        <div class="col-12 col-md-4">
                            <figure class="featured-image">
                                <a href="#" data-toggle="modal" data-target="#myModal3"> <img src="data/dayasos/Hasil rekap verval kec.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header" data-toggle="modal" data-target="#myModal3">
                                        <h2>Rincian Hasil Verifikasi Validasi Kecamatan 2017</h2>
                                    </div><!-- entry-header -->
                                </div><!-- entry-content -->
                            </div><!-- content-wrapper -->
                        </div><!-- .col-4 -->

                         <!-- The Modal -->
                        <div class="modal" id="myModal3">
                            <div class="modal-dialog-sm">
                            <div class="modal-content">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Rincian Hasil Verifikasi Validasi Kecamatan 2017</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p>
                                          Hasil rekapitulasi verifikasi dan validasi data individu, rumah tangga, dan keluarga Kota Tangerang Selatan.
                                    </p>
                                    <figure class="featured-image">
                                        <img src="data/dayasos/Hasil rekap verval kec.jpg" alt="fesival+celebration">
                                    </figure> <!--featured-image -->
                                    
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                        <!--.Box 2.2-->

                        <!--Box 2.3-->
                        <div class="col-12 col-md-4">
                            <figure class="featured-image">
                                <a href="#" data-toggle="modal" data-target="#myModal4"> <img src="data/dayasos/Hasil rekap verval kec.jpg" alt="fesival+celebration"> </a>
                            </figure><!-- featured-image -->

                            <div class="content-wrapper">
                                <div class="entry-content">
                                    <div class="entry-header" data-toggle="modal" data-target="#myModal4">
                                        <h2>Rincian Hasil Verifikasi Validasi KK 2017</h2>
                                    </div><!-- entry-header -->
                                </div><!-- entry-content -->
                            </div><!-- content-wrapper -->
                        </div><!-- .col-4 -->

                         <!-- The Modal -->
                        <div class="modal" id="myModal4">
                            <div class="modal-dialog-sm">
                            <div class="modal-content">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Rincian Hasil Verifikasi Validasi KK 2017</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p>
                                          Hasil rekapitulasi verifikasi dan validasi data individu, rumah tangga, dan keluarga Kota Tangerang Selatan.
                                    </p>
                                    <figure class="featured-image">
                                        <img src="data/dayasos/Hasil rekap verval kec.jpg" alt="fesival+celebration">
                                    </figure> <!--featured-image -->
                                    
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                        <!--.Box 2.3-->

                    </div><!-- row -->
                </div><!-- home-page-last-news-wrap -->
                <!--.Home Page Row 2-->


            </div><!-- container -->
        </div><!-- home-page-last-news -->
            </div>
        </div>
    </div>
</div>