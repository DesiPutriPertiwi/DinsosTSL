@extends('user.layout.master')
@section('content')

<!--Tabel css-->
        <link rel="stylesheet" type="text/css" href="frontEnd/tabel/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="frontEnd/tabel/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="frontEnd/tabel/vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="frontEnd/tabel/vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="frontEnd/tabel/vendor/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" type="text/css" href="frontEnd/tabel/css/util.css">
        <link rel="stylesheet" type="text/css" href="frontEnd/tabel/css/main.css">
<!--.Tabel css-->

<!--Body-->
        <div class="container">
                <div class="row">
                        <div class="col-sm-10" style="margin-top:20%; margin-left:20%">   
                                <div class="container">
                                        <div class="header">
                                                <div class="entry-title" style="color:goldenrod">
                                                        <h2 style="text-shadow: 2px 2px 5px #ffc107">Daftar Nama Penerima Bandsos Uang Anak 2018 Kota Tangerang Selatan</h2>
                                                        <p style="padding-top:30px">
                                                                Berupa daftar nama penerima bandsos uang anak Kota Tangerang Selatan.  
                                                        </p>
                                                </div><!-- entry-title -->
                                        </div><!-- header -->


                                        <div class="table100 ver2 m-b-110">
                                                <table data-vertable="ver2">
                                                        <thead>
                                                                <tr class="row100 head">
                                                                        <th class="column100 column2 text-center" data-column="column2">No.</th>
                                                                        <th class="column100 column2 text-center" data-column="column2">Nama Lengkap</th>
                                                                </tr>
                                                                <tr class="row100 head" style="color:#6c757d">
                                                                        <th class="column100 column2 text-center" data-column="column2">1</th>
                                                                        <th class="column100 column2 text-center" data-column="column2">3</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                @foreach($anak as $index=>$anaks)
                                                                        <tr class="row100">
                                                                                <td class="column100 column2 text-center" data-column="column2">{{++$index}}</td>
                                                                                <td class="column100 column2" data-column="column2">{{$anaks->nama}}</td>
                                                                        </tr>
                                                                @endforeach
                                                        </tbody>
                                                </table>
                                                {{$anak->links()}}
                                        </div> <!--.Tabel100 ver2--> 
                                </div><!--.container-->
                        </div><!--.col-sm-10-->
                </div> <!--.row-->
        </div> <!--.container-->                       
<!--.Body-->
@endsection

