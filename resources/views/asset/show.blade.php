@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data asset')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Asset</a></li>
        <li class="active">Lihat Asset</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Asset</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Asset {{ $asset->asset_id }}</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th><th> Kode </th><th> Nama </th><th> Jumlah </th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $asset->asset_id }}</td> %%formBodyHtml%%
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
