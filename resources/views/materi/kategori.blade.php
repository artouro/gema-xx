@extends('layouts.app')
@section('content')
        
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>
            </div>
            
            <div class="clearfix"></div>
            <div class="row">
              @include('templates.feedback')
            </div>

            <!-- Modal -->
            <div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title custom-title custom-title-warning"><i class="fa fa-warning"></i> Peringatan!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Apa anda yakin ingin menghapus kategori <kbd id="kategoriModal"></kbd> tingkat <kbd id="tingkatModal"></kbd> ?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="modal-true-btn" data-location=""><i class="fa fa-trash"></i> Hapus</button>
                    <button type="button" class="btn custom-secondary" data-dismiss="modal"><i class="fa fa-ban"></i> Batal</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Add Category -->
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12" id="form_panel">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="glyphicon glyphicon-th"></i> <span id="form_title">Form Kategori</span><!-- <small>Form Kategori</small> --></h2>
                    <ul class="nav navbar-right panel_toolbox panel_right">
                      <li><a class="collapse-link"><i class="fa fa-chevron-down"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="display:none;">
                    <br />
                    <form id="form_kategori" method="post" action="{{ url('/materi/category/add') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      {{ csrf_field() }}
                      <input id="method_field" type="hidden" name="_method" value="">
                      <input type="hidden" name="id" value="" id="input--id">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Kategori <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="input--kategori" type="text" placeholder="Contoh : Sandi, Menaksir, ..." name="category" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tingkat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="input--tingkat" name="tingkat" required="required" class="form-control col-md-7 col-xs-12">
                            <option value="">- Pilih Tingkat -</option>
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="sma">SMA</option>
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
            <!-- Category List -->
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kategori<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox panel_right">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a class="manage-link"><i class="fa fa-edit"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <h3>&nbsp;&nbsp;SD</h3>
                    <div class="category-list"> 
                      <ul>
                        @foreach($sd as $row)
                          <li class="col-lg-2 col-sm-3 col-xs-6">
                            <div class="category-box box-link" data-location="{{ url('/materi/category/' . $row->id) }}"><span>{{ $row->category }}</span></div>
                            <div class="category-box__manage row">
                              <div class="col-lg-6 col-xs-6 category-box__manage__wrapper box-edit" data-id="{{ $row->id }}" data-name="{{ $row->category }}" data-level="{{ $row->tingkat }}">
                                <div class="category-box__manage__btn-edit">
                                  <span><i class="fa fa-pencil"></i><br> <small>Edit</small></span>
                                </div>
                              </div>
                              <div class="col-lg-6 col-xs-6 category-box__manage__wrapper" data-toggle="modal" data-target="#deleteModal">
                                <div class="category-box__manage__btn-delete box-delete" data-location="{{ url('/materi/category/' . $row->id . '/delete') }}">
                                  <span><i class="fa fa-trash"></i><br> <small>Delete</small></span>
                                </div>
                              </div>
                            </div>
                          </li>
                        @endforeach
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <h3>&nbsp;&nbsp;SMP</h3>
                    <div class="category-list"> 
                      <ul>
                        @foreach($smp as $row)
                          <li class="col-lg-2 col-sm-3 col-xs-6">
                            <div class="category-box box-link" data-location="{{ url('/materi/category/' . $row->id) }}"><span>{{ $row->category }}</span></div>
                            <div class="category-box__manage row">
                              <div class="col-lg-6 col-xs-6 category-box__manage__wrapper box-edit" data-id="{{ $row->id }}" data-name="{{ $row->category }}" data-level="{{ $row->tingkat }}">
                                <div class="category-box__manage__btn-edit">
                                  <span><i class="fa fa-pencil"></i><br> <small>Edit</small></span>
                                </div>
                              </div>
                              <!-- <div class="col-lg-6 col-xs-6 category-box__manage__wrapper box-link" data-location="{{ url('/materi/category/' . $row->id . '/delete') }}"> -->
                              <div class="col-lg-6 col-xs-6 category-box__manage__wrapper" data-toggle="modal" data-target="#deleteModal">
                                <div class="category-box__manage__btn-delete box-delete" data-location="{{ url('/materi/category/' . $row->id . '/delete') }}">
                                  <span><i class="fa fa-trash"></i><br> <small>Delete</small></span>
                                </div>
                              </div>
                            </div>
                          </li>
                        @endforeach
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <h3>&nbsp;&nbsp;SMA</h3>
                    <div class="category-list"> 
                      <ul>
                        @foreach($sma as $row)
                          <li class="col-lg-2 col-sm-3 col-xs-6">
                            <div class="category-box box-link" data-location="{{ url('/materi/category/' . $row->id) }}"><span>{{ $row->category }}</span></div>
                            <div class="category-box__manage row">
                              <div class="col-lg-6 col-xs-6 category-box__manage__wrapper box-edit" data-id="{{ $row->id }}" data-name="{{ $row->category }}" data-level="{{ $row->tingkat }}">
                                <div class="category-box__manage__btn-edit">
                                  <span><i class="fa fa-pencil"></i><br> <small>Edit</small></span>
                                </div>
                              </div>
                              <div class="col-lg-6 col-xs-6 category-box__manage__wrapper" data-toggle="modal" data-target="#deleteModal">
                                <div class="category-box__manage__btn-delete box-delete" data-location="{{ url('/materi/category/' . $row->id . '/delete') }}">
                                  <span><i class="fa fa-trash"></i><br> <small>Delete</small></span>
                                </div>
                              </div>
                            </div>
                          </li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /page content -->
@endsection

@push('js')
  <script type='text/javascript'>
    $(function(){
      //Passing all the values from the list to the form ..
      $('.box-edit').click(function(){
        $('#form_panel .x_content').slideDown();
        $('#input--kategori').val($(this).data('name'));
        $('#input--tingkat').val($(this).data('level'));
        $('#input--id').val($(this).data('id'));
        $('#method_field').val('PATCH');
        $('#form_kategori').attr("action", "{{ url('/materi/category/' . $row->id . '/edit') }}");
        $('#form_title').html('Form Edit');
        $('html, body').animate({scrollTop : $('html').offset().top}, 'slow');
      });

      //Reset all attributes when button reset clicked ..
      $('#btn--reset').click(function(){
        $('#form_kategori').attr("action", "{{ url('/materi/category/add') }}");
        $('#form_title').html('Form Kategori');
        $('#method_field').val("");
        $('#input--id').val("");
      });

      //Passing data-location from category list delete button to modal delete button ..
      $('.box-delete').click(function(){
        $('#modal-true-btn').attr('data-location', $(this).data('location'));
        $('#tingkatModal').html($(this).parent().siblings('.box-edit').data('level')); 
        $('#kategoriModal').html($(this).parent().siblings('.box-edit').data('name')); 
      });

      //Deleting when modal delete button clicked ..
      $('#modal-true-btn').click(function(){
        window.location = $(this).data('location');
        return false;
      });
    });
  </script>
@endpush
