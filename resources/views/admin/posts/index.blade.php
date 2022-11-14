@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <a href="{{ route('admin.posts.create') }}">New</a>
        </div>
    </div>
    <div class="row mt-5">
        @foreach ($posts as $post)
            <div class="col-12">
                <a href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a>
            </div>
        @endforeach
    </div>
@endsection
