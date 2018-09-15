@extends('layouts.app')

@section('content')
    <div class="container">
        <ul class="nav nav-tabs mb-3">
            <li class="nav-item"><a href="{{ route('admin.home') }}" class="nav-link active">Dashboard</a></li>
            <li class="nav-item"><a href="{{ route('admin.users.index') }}" class="nav-link">Users</a></li>
            <li class="nav-item"><a href="{{ route('admin.regions.index') }}" class="nav-link">Regions</a></li>
            <li class="nav-item"><a href="{{ route('admin.adverts.categories.index') }}" class="nav-link">Categories</a></li>
        </ul>
    </div>
@endsection