@extends('layouts.app')

@section('title', 'Forum Umum')
@section('menuForumUmum', 'active')

@section('content')
    @livewire('admin.forum-umum.index')
@endsection
