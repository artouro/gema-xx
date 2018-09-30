@extends('layouts.app')
@if($title = empty($result->id_soal) ? 'add' : 'edit')
@endif
@section('title', $title)
@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="clearfix"></div>
                <div class="row">
                  @include('templates.feedback')
            </div>
            <div class="page-title col-lg-10 col-md-12 col-lg-offset-1">
              <div class="title_left">
                <a href="{{ url('/kematerian/' . $result->id_matalomba . '') }}" class="btn btn-info"> Back</a>
              </div>
            </div>

            
            <!-- Add matalomba -->
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-lg-10 col-md-12 col-lg-offset-1" id="form_panel">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 class="form_title"><i class="glyphicon glyphicon-th"></i> <span id="form_title">Form Soal {{ $result->nama_matalomba }} </span></h2>
                    <ul class="nav navbar-right panel_toolbox panel_right">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="display:block;">
                    <form id="form_matalomba" method="post" action="{{ empty($result->id_soal) ? url('/kematerian/' . $result->id_matalomba . '/add_submit') : url('/kematerian/' . $result->id_matalomba . '/update/' . $result->id_soal)  }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <input id="method_field" type="hidden" name="_method" value="{{ empty($result->id_soal) ? '' : 'PATCH' }}">
                      <input type="hidden" name="id_matalomba" value="{{ @$result->id_matalomba }}"  id="input--id">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Deskripsi Soal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="input--soal" placeholder="Contoh : Siapakah nama ayah kandung Baden Powell ?" name="soal" required="required" class="form-control col-md-7 col-xs-12">{{ $result->soal }}</textarea>
                        </div>
                      </div>
                      @if($result->gambar != '')
                      <div class="text-center">
                        <img src="{{ url('../storage/app/public/upload/soal/'. $result->gambar) }}" alt="Gambar Soal" width="300" />
                      </div>
                        @endif
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gambar Soal</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="input--soal" name="gambar" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Opsi Jawaban 1 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="input--opsi1" placeholder="" name="opsi1" required="required" class="form-control col-md-7 col-xs-12" value="{{ @$options[0]->teks_opsi }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Opsi Jawaban 2 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="input--opsi1" placeholder="" name="opsi2" required="required" class="form-control col-md-7 col-xs-12" value="{{ @$options[1]->teks_opsi }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Opsi Jawaban 3 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="input--opsi1" placeholder="" name="opsi3" required="required" class="form-control col-md-7 col-xs-12" value="{{ @$options[2]->teks_opsi }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Opsi Jawaban 4 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="input--opsi1" placeholder="" name="opsi4" required="required" class="form-control col-md-7 col-xs-12" value="{{ @$options[3]->teks_opsi }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Opsi Jawaban 5 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="input--opsi1" placeholder="" name="opsi5" required="required" class="form-control col-md-7 col-xs-12" value="{{ @$options[4]->teks_opsi }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Jawaban Benar <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="input--jawaban_benar" name="jawaban_benar" required="required" class="form-control col-md-7 col-xs-12">
                            <option value="">- Pilih Opsi Jawaban yang Benar -</option>
                            <option value="1">Opsi 1</option>
                            <option value="2">Opsi 2</option>
                            <option value="3">Opsi 3</option>
                            <option value="4">Opsi 4</option>
                            <option value="5">Opsi 5</option>
                          </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                           <button id="btn--reset" class="btn custom-secondary" type="reset"><i class="fa fa-refresh"></i> Reset</button>
                          <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Save</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <!-- End of Add Soal -->
        </div>
    <!-- End of Page Content -->
    @endsection
    @push('js')
    <script type="text/javascript">
    $(document).ready(function(){
      var id_soal = {{ @$result->id_soal }};
      if(id_soal != ""){
        var jawaban = {{ @$result->jawaban_benar }};
        if(jawaban != ''){
          $("#input--jawaban_benar option[value='"+ jawaban +"']").attr('selected', 'selected');
        }
      }
    });
    </script>
    @endpush