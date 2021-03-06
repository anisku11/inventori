<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get(Auth::user()->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Inventori App</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Home</span></a></li>
            <li><a href="{{ url('staff') }}"><i class='fa fa-users'></i> <span>Staff</span></a></li>
            <li><a href="{{ url('rekanan') }}"><i class='fa fa-thumbs-o-up'></i> <span>Rekanan</span></a></li>
            <li><a href="{{ url('produk') }}"><i class='fa fa-diamond'></i> <span>Produk</span></a></li>
            <li><a href="{{ url('supplaier') }}"><i class='fa fa-truck'></i> <span>Supplaier</span></a></li>
            <li><a href="{{ url('asset') }}"><i class='fa fa-tasks'></i> <span>Asset Barang</span></a></li>


        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
