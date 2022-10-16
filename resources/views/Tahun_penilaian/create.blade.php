@extends('template/layout')

@section('content')

<div class='row'>
    <div class='col-xs-12'>
    <div class='widget-box'>
    <div class='widget-header'>
    <h4 class='widget-title'>FORM TAMBAH DATA TAHUN PENILAIAN</h4>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class='widget-toolbar'>
    <a href='#' data-action='collapse'>
    <i class='ace-icon fa fa-chevron-up'></i>
    </a>
    </div>
    </div>

    <div class='widget-body'>
    <div class='widget-main'>
    <form class='form-horizontal' method="POST" action="{{ route('save-tahun-penilaian') }}">
    {{ csrf_field() }}

    <div class='form-group'>
        <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Kode Penilaian :</label>
	        <div class='col-xs-12 col-sm-9'>
                <div class='clearfix'>
                <input type='text' id='kode_tahun_penilaian' name='kode_tahun_penilaian' class="input-sm col-xs-12 col-sm-8 @error('kode_tahun_penilaian') is-invalid @enderror" maxlength='100' value="{{ old('kode_tahun_penilaian') }}"/>
                </div>
            </div>
    @error('kode_tahun_penilaian')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    </div>

    <div class='form-group'>
        <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Tahun Penilaian :</label>
	        <div class='col-xs-12 col-sm-9'>
                <div class='clearfix'>
                <input type='text' id='nama_tahun_penilaian' name='nama_tahun_penilaian' class="input-sm col-xs-12 col-sm-8 @error('nama_tahun_penilaian') is-invalid @enderror" maxlength='100' value="{{ old('nama_tahun_penilaian') }}"/>
                </div>
            </div>
    @error('nama_tahun_penilaian')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    </div>
    
    <div class='form-group'>
    <label class='control-label col-xs-12 col-sm-3 no-padding-right' for='name'>Keterangan:</label>
	<div class='col-xs-12 col-sm-9'>
                <div class='clearfix'>
                <input type='text' id='keterangan' name='keterangan' class="input-sm col-xs-12 col-sm-8 @error('keterangan') is-invalid @enderror" maxlength='100' value="{{ old('keterangan') }}"/>
                </div>
            </div>
    @error('keterangan')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
    </div>
    
    <div class='form-actions'>
    <button class='btn btn-info' type='submit'>
    <i class='ace-icon fa fa-check bigger-110'></i>
    Submit
    </button>
	
	&nbsp; &nbsp; &nbsp;
    <button class='btn' type='reset' onclick="self.history.back()">
    <i class='ace-icon fa fa-undo bigger-110'></i>
    Reset
    </button>
                               
    </div>
    </form>

    </div>
    </div>
    </div>
    </div><!-- /.span -->
    </div>
                <!-- PAGE CONTENT ENDS -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.page-content -->
        </div>
      </div><!-- /.main-content -->
      <!--Akhir isi dari halaman conten -->
@endsection