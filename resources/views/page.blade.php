@extends('layouts.app')

@section('meta')
    <meta name="description" content="{{ $page->description }}">
@endsection

@section('content')
    <div class="container">
        <h1 class="mb-3">{{ $page->title }}</h1>
        @if ($page->children)
            <ul class="list-unstyled">
                @foreach ($page->children as $child)
                    <li><a href="{{ route('page', page_path($child)) }}">{{ $child->title }}</a></li>
                @endforeach
            </ul>
        @endif
        {!! nl2br(e($page->content)) !!}
    </div>
@endsection