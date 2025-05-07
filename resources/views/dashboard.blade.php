@extends('components.layouts.app')

@section('title', 'Dashboard')
@section('dashboard', 'active')

@section('content')
    @livewire('admin.manajemen-siswa.index')
@endsection
