@extends('layouts.frontend')

@section('content')
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="{{ route('home') }}" rel="nofollow">beranda</a>
            <a href="#"><span></span> rekomendasi </a>
        </div>
    </div>
</div>
<article style="text-align: center; max-width: 1000px; margin: 3em auto">
    <h2>SPK Pemilihan Dosen Berprestasi Menggunakan Metode SAW</h2>
    <table width="100%">
    <tr>
        <td>Nama Dosen Berprestasi</td>
        <td>Hasil</td>
    </tr>
    <tr>
        <td>Dosen A</td>
        <td>0.81543778801843 </td>
    </tr>
    <tr>
        <td>Dosen B</td>
        <td>0.7984126984127  </td>
    </tr>
    <tr>
        <td>Dosen C</td>
        <td>0.794206349206357  </td>
    </tr>
    <tr>
        <td>Dosen D</td>
        <td>0.78869047619048  </td>
    </tr>
</table>

@endsection
