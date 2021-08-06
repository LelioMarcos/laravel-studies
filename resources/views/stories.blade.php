@extends('template.story')

@section('st')
    @foreach ($stories as $story)
        <div class="post">
            <h2><a href="/hists/{{$story->id}}">{{$story->title}}</h2>
            <a>{{$story->user->name}}</a>
        </div>
    @endforeach
@endsection