@extends('layouts.app')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title col-lg-10 col-sm-12 col-lg-offset-1">
              <div class="title_left page-title_matalomba">
                <h3>Daftar Materi | <b>{{ $tingkat }}</b></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
              @php
              $colours = ['before--red', 'before--yellow', 'before--blue', 'before--green', 'before--purple'];
              $i = 0;
              @endphp
                @foreach($result as $row)
                @php
                  if($i > 4) $i = 0;
                @endphp
                <div class="x_panel panel_matalomba {{ $colours[$i] }}">
                  <div class="x_content">
                      <div class="col-sm-6 col-xs-6 text-left x_content__matalomba">{{ $row->nama_matalomba }}</div>
                      <div class="col-sm-6 col-xs-6 text-right x_content__matalomba__btn"><a class="btn2 btn-info" href="{{ url('/kompetisi/' . $row->id_matalomba) }}">View Details</a></div>
                  </div>
                </div>
                  @php
                    $i++;  
                  @endphp
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection
