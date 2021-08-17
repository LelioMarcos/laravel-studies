@extends('template.all')

@section('st')
    @foreach ($stories as $story)
        <div class="post">
            <h2><a href="{{route('story', ['story' => $story->id])}}">{{$story->title}}</h2>
            <a href="/user/{{$story->user->id}}">{{$story->user->name}}</a>
        </div>
    @endforeach
@endsection