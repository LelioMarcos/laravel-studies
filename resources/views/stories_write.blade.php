@extends('template.all')

@section('st')
    <form action="/story" method="POST">
        @csrf
        <input type="text" name="title"/><br>
        <textarea name="content" rows="10" cols="50"></textarea><br>
        <input type="submit" value="Postar Historia">
    </form>
@endsection

@section('exit')
    <p><b><a href="{{route('main')}}">Back to HOME</a></b></p>
@endsection