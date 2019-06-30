@extends('web/layout')

@section('title')
Edit Data Buku
@endsection

@section('content')
<div class="row">
  <!-- Horizontal Form -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Formulir Editing Buku</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{ route('update_buku') }}" method="POST">
      @csrf
      <div class="box-body">
        <div class="form-group">
          <label for="inputJudulBuku3" class="col-sm-2 control-label">Judul Buku</label>

          <div class="col-sm-10">
            <input type="hidden" name="id" value="{{ $data->id }}">
            <input type="text" class="form-control" id="inputJudulBuku3" name="judul_buku" value="{{ $data->judul_buku }}" placeholder="Judul Buku">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPenerbit3" class="col-sm-2 control-label">Penerbit</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPenerbit3" name="penerbit" value="{{ $data->penerbit }}" placeholder="Penerbit">
          </div>
        </div>
        <div class="form-group">
          <label for="inputJumlahHalaman3" class="col-sm-2 control-label">Jumlah Halaman</label>

          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputJumlahHalaman3" name="jumlah_halaman" value="{{ $data->jumlah_halaman }}" placeholder="Jumlah Halaman">
          </div>
        </div>
        <div class="form-group">
          <label for="inputUserHave3" class="col-sm-2 control-label">User Have</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputJumlahHalaman3" name="user_have" value="{{ $data->id }}" readonly>
          </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-info pull-right">Edit</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
  <!-- /.box -->
</div>
@endsection