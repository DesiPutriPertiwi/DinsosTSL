@extends('user.layout.master')

<!--Modal bootstrap-->
    <script src='frontEnd/modal/jquery.min.js'></script>
    <script src='frontEnd/modal/popper.min.js'></script>
    <script src='frontEnd/modal/bootstrap.min.js'></script>
<!--.Modal bootstrap-->


<!--Header-->
@include('user.includes.header');
<!--.Header-->

<div class="contents-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-10" style="margin-top:20%; margin-left:20%">   
                <div class="container">
                    <div class="header">
                        <div class="entry-title" style="color:goldenrod">
                            <h2 style="text-shadow: 2px 2px 5px #ffc107">Karakteristik Kemiskinan di Kota Tangerang Selatan</h2>
                            <p style="padding-top:30px">
                                Berupa data total kemiskinan dari berbagai kelurahan maupun kecamatan di Kota Tangerang Selatan. 
                            </p>
                        </div><!-- entry-title -->
                    </div><!-- header -->


                    <!--Home page row 1-->
                    <div class="home-page-last-news-wrap">
                        <div class="row">

                            <!--Box 1.1-->
                            <div class="col-12 col-md-6">
                                <figure class="featured-image">
                                    <a href="#" data-toggle="modal" data-target="#myModal"> <img src="data/resos/resos-kemiskinan.png" alt="fesival+celebration"> </a>
                                </figure><!-- featured-image -->

                                <div class="content-wrapper">
                                    <div class="entry-content">
                                        <div class="entry-header" data-toggle="modal" data-target="#myModal">
                                            <h2>Kemiskinan Berdasarkan Kecamatan di Kota Tanggerang Selatan 2017</h2>
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
                                        <h4 class="modal-title">Kemiskinan Berdasarkan Kecamatan di Kota Tanggerang Selatan 2017</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <p>
                                            Sumber: Hasil Pendataan PMKS Tahun 2017
                                        </p>
                                        <figure class="featured-image">
                                            <img src="data/resos/resos-kemiskinan.png" alt="fesival+celebration" style="center">
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
                                    <a href="#"> <img src="data/resos/resos-fakirmiskin.png" alt="fesival+celebration"> </a>
                                </figure><!-- featured-image -->

                                <div class="content-wrapper">
                                    <div class="entry-content">
                                        <div class="entry-header" data-toggle="modal" data-target="#myModal1">
                                            <br><br>
                                            <h2>Kemiskinan Berdasarkan Kecamatan di Kota Tanggerang Selatan 2016</h2><br>
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
                                            <h4 class="modal-title">Kemiskinan Berdasarkan Kecamatan di Kota Tanggerang Selatan 2016</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p>
                                                Hasil ...........
                                            </p>
                                            <figure class="featured-image">
                                                <img src="data/resos/resos-fakirmiskin.png" alt="fesival+celebration">
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

                </div><!-- container -->
            </div><!-- .col-sm-10 -->
        </div> <!--.row-->
    </div> <!--.container-->
</div> <!--.content-section-->