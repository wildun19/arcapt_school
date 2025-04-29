@extends('components.layouts.app')

@section('title', 'Management Guru')
@section('menuManagementGuru', 'active')

@section('content')
    @livewire('admin.manajemen-guru.index')
@endsection
