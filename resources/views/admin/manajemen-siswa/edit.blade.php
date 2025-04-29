@extends('components.layouts.app')

@section('title', 'Edit Siswa')
{{-- @section('menuManagementSiswa', 'active') --}}

@section('content')
@livewire('admin.manajemen-siswa.edit', ['id' => $id])
@endsection
