@extends('layouts.app')

@section('content')
    <div class="container">
        @include('admin.adverts.categories._nav')

        <a href="{{ route('admin.adverts.categories.create') }}" class="btn btn-success mb-3">Add category</a>

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>
                        @for ($i = 0; $i < $category->depth; $i++) &mdash; @endfor
                        <a href="{{ route('admin.adverts.categories.show', $category) }}">{{ $category->name }}</a>
                    </td>
                    <td>{{ $category->slug }}</td>
                    <td>
                        <div class="d-flex flex-row">
                            <form action="{{ route('admin.adverts.categories.first', $category) }}" method="POST" class="mr-1">
                                @csrf
                                <button class="btn btn-sm btn-outline-primary">
                                    <span class="fa fa-angle-double-up"></span>
                                </button>
                            </form>
                            <form action="{{ route('admin.adverts.categories.up', $category) }}" method="POST" class="mr-1">
                                @csrf
                                <button class="btn btn-sm btn-outline-primary">
                                    <span class="fa fa-angle-up"></span>
                                </button>
                            </form>
                            <form action="{{ route('admin.adverts.categories.down', $category) }}" method="POST" class="mr-1">
                                @csrf
                                <button class="btn btn-sm btn-outline-primary">
                                    <span class="fa fa-angle-down"></span>
                                </button>
                            </form>
                            <form action="{{ route('admin.adverts.categories.last', $category) }}" method="POST" class="mr-1">
                                @csrf
                                <button class="btn btn-sm btn-outline-primary">
                                    <span class="fa fa-angle-double-down"></span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection