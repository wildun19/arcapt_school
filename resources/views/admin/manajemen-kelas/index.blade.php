@extends('components.layouts.app')

@section('title', 'Management Kelas')
@section('menuManagementKelas', 'active')

@section('content')
    @livewire('admin.manajemen-kelas.index')
@endsection
