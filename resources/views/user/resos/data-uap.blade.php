@extends('user.layout.master')

<!--Tabel css-->
        <link rel="stylesheet" type="text/css" href="frontEnd/tabel/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="frontEnd/tabel/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="frontEnd/tabel/vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="frontEnd/tabel/vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="frontEnd/tabel/vendor/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" type="text/css" href="frontEnd/tabel/css/util.css">
        <link rel="stylesheet" type="text/css" href="frontEnd/tabel/css/main.css">
<!--.Tabel css-->

<!--Header-->
@include('user.includes.header')
<!--.Header-->


<!--Body-->
<div class="contents-section">
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
                                                                        <th class="column100 column1" data-column="column1">No.</th>
                                                                        <th class="column100 column2" data-column="column2">Nama Lengkap</th>
                                                                        <th class="column100 column3" data-column="column3">NIK E-KTP</th>
                                                                        <th class="column100 column4" data-column="column4">Alamat Lengkap</th>
                                                                        <th class="column100 column5" data-column="column5">Tempat Tanggal Lahir</th>
                                                                        <th class="column100 column6" data-column="column6">Jenis Kelamin</th>
                                                                        <th class="column100 column7" data-column="column7">Usaha yang Dimiliki</th>
                                                                </tr>
                                                                <tr class="row100 head" style="color:#6c757d">
                                                                        <th class="column100 column1" data-column="column1">1</th>
                                                                        <th class="column100 column2" data-column="column2">2</th>
                                                                        <th class="column100 column3" data-column="column3">3</th>
                                                                        <th class="column100 column4" data-column="column4">4</th>
                                                                        <th class="column100 column5" data-column="column5">5</th>
                                                                        <th class="column100 column6" data-column="column6">6</th>
                                                                        <th class="column100 column7" data-column="column7">7</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                <tr class="row100">
                                                                        <td class="column100 column1" data-column="column1">Lawrence Scott</td>
                                                                        <td class="column100 column2" data-column="column2">8:00 AM</td>
                                                                        <td class="column100 column3" data-column="column3">--</td>
                                                                        <td class="column100 column4" data-column="column4">--</td>
                                                                        <td class="column100 column5" data-column="column5">8:00 AM</td>
                                                                        <td class="column100 column6" data-column="column6">--</td>
                                                                        <td class="column100 column7" data-column="column7">5:00 PM</td>
                                                                </tr>

                                                                <tr class="row100">
                                                                        <td class="column100 column1" data-column="column1">Jane Medina</td>
                                                                        <td class="column100 column2" data-column="column2">--</td>
                                                                        <td class="column100 column3" data-column="column3">5:00 PM</td>
                                                                        <td class="column100 column4" data-column="column4">5:00 PM</td>
                                                                        <td class="column100 column5" data-column="column5">--</td>
                                                                        <td class="column100 column6" data-column="column6">9:00 AM</td>
                                                                        <td class="column100 column7" data-column="column7">--</td>
                                                                </tr>

                                                                
                                                        </tbody>
                                                </table>
                                        </div> <!--.Tabel100 ver2--> 
        
                                </div><!--.container-->
                        </div><!--.col-sm-10-->
                </div> <!--.row-->
        </div> <!--.container-->                        
</div> <!--.Content-section-->
<!--.Section-->