<!--Header-->
<header class="site-header">
    <div class="header-bar">
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-1" style="margin-top:10px;">
                        <img src="{{ asset('image/logo/dinsos.png')}}" width="80px" hight="80px"/>
                    </div>
                    <div class="col-md-3">
                        <span style="color:#ffffff">
                            <h1 style="text-shadow: 2px 2px 5px #007bff">Dinas Sosial</h1>
                            <h4 style="text-shadow: 2px 2px 5px #007bff">Kota Tangerang Selatan</h4>
                        </span>
                    </div>
                    <div class="col-md-8">
                        <div class="col-md-4" style="margin-left:60%">
                            <div class="row">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Search" type="search" name="search"/>
                                    <button type="button" class="btn btn-primary fas fa-search"> </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                @include('user.includes.menu')
                            </div> <!-- .row --> 
                        </div>
                    </div>
                </div>
            </div><!-- .row -->
            
        </div><!-- container-fluid -->
    </div><!-- header-bar -->
</header><!-- .site-header -->
