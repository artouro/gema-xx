@extends('layouts.app')
@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              <!-- <i class="fa fa-chevron-left"></i> -->
                <a href="{{ url('/kematerian') }}" class="btn btn-info" > Back</a>
              </div>
              <div class="title_right text-right">
              <!-- <i class="fa fa-plus"></i> -->
              <a href="{{ url('/kematerian/'. $check->id_matalomba .'/add') }}" class="btn btn-danger"> Tambah Soal</a>
              </div>
            </div>

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
                    <b style="font-size:1.2em;">Draf Soal {{ $check->nama_matalomba }}</b>
                  </div>
                  <hr>
                  <div class="x_content">
                  @if(count($result) != 0)
                  <form>
                    @php 
                      $i = 1; 
                      $alphabet = ['A', 'B', 'C', 'D', 'E'];
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
                            <input type="radio" class="form-check-input" name="jawaban"> {{ $opsi->teks_opsi }}
                          </label><br>
                          @endforeach
                        </div>
                      Jawaban Benar : <u>{{ $collection[$row->jawaban_benar - 1]->teks_opsi }}</u>
                      <br>
                      <br>
                      <a href="{{ url('/kematerian/' . $row->id_matalomba . '/edit/' . $row->id_soal) }}" class="btn btn-warning">Edit</a>
                      <a href="{{ url('/kematerian/' . $row->id_matalomba . '/delete/' . $row->id_soal) }}" class="btn btn-danger">Delete</a>
                      <hr>
                      @php 
                      $i++;
                      @endphp
                    @endforeach
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
