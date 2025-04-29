@extends('components.layouts.app')

@section('title', 'Management Siswa')
@section('menuManagementSiswa', 'active')

@section('content')
    @livewire('admin.manajemen-siswa.index')
@endsection
