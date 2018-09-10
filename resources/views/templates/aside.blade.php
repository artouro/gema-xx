<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/') }}" class="site_title"> <img src="{{ asset('assets/gent') }}/images/gema-med-strokeless.png" alt="Logo GEMA XX" style="width:45px;"/> <span style="vertical-align:middle">GEMA XX</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ asset("assets/gent") }}/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Perlombaan</h3>
                <ul class="nav side-menu">
                    <li><a href="{{ url('/kematerian') }}"><i class="fa fa-archive"></i> Materi</a></li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Kepesertaan</h3>
                <ul class="nav side-menu">
                    <li><a href="{{ url('/kepesertaan') }}"><i class="fa fa-user"></i> Akun Peserta</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>