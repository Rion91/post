@extends('MasterLayout.layout')
@section('body')
    
    <h1>
        {{ $post->creater }}
    </h1>
    <p>
        {{ $post->detail }}
    </p>

    <a href="{{ route('posts.edit',$post->id) }}">
        <button>
            Edit
        </button>
    </a>
    <form action="{{ route('posts.delete',$post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">
            Delete
        </button>
        
    </form>
    <a href="{{ route('index') }}">
        <button>
            Back
        </button>
    </a>

@endsection