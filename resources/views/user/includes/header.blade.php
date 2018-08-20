
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
