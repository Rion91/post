@extends('MasterLayout.layout')
@section('body')
    
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="">Creator Name</label>
        <input type="text" name="creater"><br>

        <label for="">Detail</label>
        <input type="text" name="detail" style="margin-top: 15px"><br>

        <button type="submit" style="margin-top: 15px" >Save</button>
    </form>
    <a href="{{ route('index') }}"><button type="submit" style="margin-top: 10px">Back</button></a>

@endsection