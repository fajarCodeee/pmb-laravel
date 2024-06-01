@extends('admin.layouts.template')

@section('content')
    <div class="container-fluid">
        {{-- Statistik --}}
        @include('admin.menus.dashboard._statistik')
        {{-- Data Terbaru --}}
        @include('admin.menus.dashboard._dataTerbaru')
    </div>
@endsection
