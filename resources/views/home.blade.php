@extends('layouts.app')
@section('title')
    Users
@endsection
@section('header')
    <h1 class="font-semibold">
    {{ __('Users Management') }}
    </h1>
@endsection
@section('breadcrumbs')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Users</li>
        </ol>
    </div>
@endsection
@section('page-body')
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
        </div>
    </div>
@endsection
@push('scripts')
@endpush