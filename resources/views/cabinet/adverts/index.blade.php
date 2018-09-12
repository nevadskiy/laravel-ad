@extends('layouts.app')

@section('content')
    <div class="container">
        <ul class="nav nav-tabs mb-3">
            <li class="nav-item"><a href="{{ route('cabinet.home') }}" class="nav-link">Dashboard</a></li>
            <li class="nav-item"><a href="{{ route('cabinet.adverts.index') }}" class="nav-link active">Adverts</a></li>
            <li class="nav-item"><a href="{{ route('cabinet.profile.home') }}" class="nav-link">Profile</a></li>
        </ul>
    </div>
@endsection