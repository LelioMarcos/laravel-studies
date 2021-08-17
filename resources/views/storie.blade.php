@extends('template.all')

@section('st')
    <div class="post">
        <h2>{{$story->title}}</h2>
        <a href="/user/{{$story->user->id}}">{{$story->user->name}}</a>
        <p>{{$story->content}}</p>
    </div>

    @auth
        @if(Auth::user()->id == $story->user->id)
            <form action="{{route('story', ['story' => $story->id])}}" method="post">
                <input class="btn btn-default" type="submit" value="Delete"/>
                @method('delete')
                @csrf
            </form>
        @endif
    @endauth
@endsection

@section('exit')
    <p><b><a href="{{ route('main')}}">Back to HOME</a></b></p>
@endsection