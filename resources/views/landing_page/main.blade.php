@extends('layouts.app')

@section('title', '- Home')

@section('content')
    <p class="fs-1">Selamat datang di halaman utama</p>
    <div id="example">Contoh jQuery</div>
@endsection

@section('script')
  $(document).ready(function() {
    $('#example').click(function() {
      $(this).text('Anda mengklik contoh jQuery');
    });
  });
@endsection