@extends('MasterLayout.layout')
@section('body')
    <h1>News</h1>

    @foreach ($posts as $post)
    <h4>
        <span>
            {{ $loop->iteration }}
        </span>

        <a href="{{ route('posts.show',$post->id) }}">
            <button>{{ $post->creater }}</button>
        </a>
    </h4>

    @endforeach

    <a href="{{ route('posts.create') }}"><button>Create</button></a>
@endsection