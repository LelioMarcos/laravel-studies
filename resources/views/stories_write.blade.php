@extends('template.story')

@section('st')
    <form action="/hists/post" method="POST">
        @csrf
        <input type="text" name="title"/><br>
        <textarea name="content" rows="10" cols="50"></textarea><br>
        <input type="submit" value="Postar Historia">
    </form>
@endsection

@section('exit')
    <p><b><a href="../hists">Back to HOME</a></b></p>
@endsection