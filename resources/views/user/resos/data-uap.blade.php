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
                                                        <h2 style="text-shadow: 2px 2px 5px #ffc107">Data Form ABC Bansos TASA 2018 Kota Tangerang Selatan</h2>
                                                        <p style="padding-top:30px">
                                                                Berupa data nama yang terdata pada Form ABC Bansos TASA Kota Tangerang Selatan.  
                                                        </p>
                                                </div><!-- entry-title -->
                                        </div><!-- header -->


                                        <div class="table100 ver2 m-b-110">
                                                <table data-vertable="ver2">
                                                        <thead>
                                                                <tr class="row100 head">
                                                                        <th class="column100 column2 text-center" data-column="column2">No.</th>
                                                                        <th class="column100 column2 text-center" data-column="column2">Nama Lengkap</th>
                                                                        <th class="column100 column6 text-center" data-column="column6">Jenis Kelamin</th>
                                                                        <th class="column100 column7 text-center" data-column="column7">Usaha yang Dimiliki</th>
                                                                </tr>
                                                                <tr class="row100 head" style="color:#6c757d">
                                                                        <th class="column100 column2 text-center" data-column="column2">1</th>
                                                                        <th class="column100 column2 text-center" data-column="column2">2</th>
                                                                        <th class="column100 column6 text-center" data-column="column6">6</th>
                                                                        <th class="column100 column7 text-center" data-column="column7">7</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                @foreach($uep as $index=>$ueps)
                                                                        <tr class="row100">
                                                                                <td class="column100 column2 text-center" data-column="column2">{{++$index}}</td>
                                                                                <td class="column100 column2" data-column="column2">{{$ueps->nama}}</td>
                                                                                <td class="column100 column3" data-column="column3">
                                                                                        @if($ueps->jenis_kelamin == '0')
                                                                                                {{"Perempuan"}}
                                                                                        @else
                                                                                                {{"Laki-Laki"}}
                                                                                        @endif                                                         
                                                                                </td>
                                                                                <td class="column100 column4" data-column="column4">{{$ueps->usaha}}</td>
                                                                        </tr>
                                                                @endforeach
                                                        </tbody>
                                                </table>
                                                <div class="pagination">
                                                        {{$uep->links()}}
                                                </div>
                                                
                                        </div> <!--.Tabel100 ver2--> 
        
                                </div><!--.container-->
                        </div><!--.col-sm-10-->
                </div> <!--.row-->
        </div> <!--.container-->                        
@endsection
<!--.Section-->
