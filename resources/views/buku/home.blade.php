@extends('web/layout')

@section('title')
Buku
@endsection

@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Buku</h3>
          <div align="right" class="float">
            <a href="{{ route('tambah_buku') }}" class="btn btn-info"><li class="fa fa-plus"> </li> Add Data</a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form id="formDelete" action="{{ route('hapus_buku') }}" method="POST">
            @csrf
          </form>
          <table id="example2" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nama Buku</th>
                <th>Penerbit Buku</th>
                <th>Jumlah Halaman</th>
                <th>User Have</th>
                <th style="text-align: right;">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $rows)
              <tr>
                <td>{{ $rows->judul_buku }}</td>
                <td>{{ $rows->penerbit }}</td>
                <td>{{ $rows->jumlah_halaman }}</td>
                <td>{{ $rows->user_have }}</td>
                <td style="text-align: right;">
                  <a href="{{ route('edit_buku', ['id' => $rows->id]) }}" class="btn btn-primary">Edit</a>
                  <button form="formDelete" type="submit" class="btn btn-danger" name="id" value="{{ $rows->id }}">Delete</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection