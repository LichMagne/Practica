@extends('adminlte::page');
@section('content')

@livewire('productos')

@endsection
@section('css')
@vite(['resources/sass/app.scss'])

@endsection

@section('js')
@vite(['resources/js/app.js'])
@endsection

