@extends('layouts.app')
@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <!-- <div class="page-title col-lg-offset-1 col-sm-10">
              <i class="fa fa-chevron-left"></i>
              <a href="{{ url('/kematerian') }}" class="btn btn-info" > Back</a>
            </div> -->

            <div class="clearfix"></div>
            <div class="row">
              @include('templates.feedback')
            </div>

          <!-- End of Table Soal -->
          <div class="clearfix"></div>
            <div class="row">
              <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 col-lg-offset-1">
                <div class="x_panel">
                  <div class="x_title">
                    <b style="font-size:1.2em;">Draf Soal {{ $result[0]->nama_matalomba }}</b>
                  </div>
                  <hr>
                  <div class="x_content">
                  @if(count($result) != 0)
                  <form method="POST" action="{{ url('/kompetisi/submit') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id_matalomba" value="{{ $result->first()->id_matalomba }}">
                    @php 
                      $i = 1; 
                    @endphp
                    @foreach($result as $row)
                      @php
                        $id_soal = $row->id_soal;
                        $collection = \App\Opsi::where('id_soal', $id_soal)->get();
                      @endphp
                      @if($row->gambar != "")
                      <img src="../../storage/app/public/upload/soal/{{ $row->gambar }}" style="width:300px; max-width:100%;"/><br><br>
                      @endif
                      <p>{{ $i }}. {{ $row->soal }}</p>
                        <div class="form-check-inline">
                          @foreach($collection as $opsi)
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="{{$row->id_soal}}" value="{{ $opsi->opsi_ke }}"> {{ $opsi->teks_opsi }}
                          </label><br>
                          @endforeach
                        </div>
                      <hr>
                      @php 
                      $i++;
                      @endphp
                    @endforeach
                        <div class="text-right">
                            <button type="submit" class="btn btn-success">Selesai</button>
                        </div>
                    </form>
                    @else
                    <div class="text-center" style="color:#b0b0b0">
                     Data tidak ditemukan
                    </div>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection
