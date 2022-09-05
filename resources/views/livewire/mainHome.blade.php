@extends('adminlte::page');
@section('content')

@can('home_admin')
<h2>Administrador</h2>
@endcan

@can('home_user')
<h1>User</h1>
@endcan


@endsection
@section('css')
@vite(['resources/sass/app.scss'])

@endsection

@section('js')
@vite(['resources/js/app.js'])
@endsection

