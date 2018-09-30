@extends('layouts.app')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title col-lg-10 col-md-10 col-sm-12 col-lg-offset-1 col-md-offset-1">
              <div class="title_left page-title_matalomba">
                <h3>Rekapitulasi | {{ \Auth::user()->nama_lengkap }}</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-lg-10 col-sm-10 col-xs-12 col-lg-offset-1 col-sm-offset-1">
                <div class="x_panel">
                  <div class="x_title">
                    
                  </div>
                  <div class="x_content">
                      <b>Nama :</b> {{ \Auth::user()->nama_lengkap }}
                      <br>
                      <b>Pangkalan :</b> {{ \Auth::user()->pangkalan }}
                      <br>
                      <b>Kota :</b> {{ \Auth::user()->asal_kota }}
                      <hr>
                      <table border="1" class="table">
                        <thead style="font-weight:bold;text-transform:uppercase;">
                            <tr>
                                <td>Matalomba</td>
                                <td>Nilai</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($result as $row)
                            <tr>
                                <td>{{ $row->nama_matalomba }}</td>
                                <td>{{ $row->nilai }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection
