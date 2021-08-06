@extends('template.story')

@section('st')
    <div class="post">
        <h2>{{$story->title}}</h2>
        <a>{{$story->user->name}}</a>
        <p>{{$story->content}}</p>
    </div>
@endsection

@section('exit')
    <p><b><a href="../hists">Back to HOME</a></b></p>
@endsection