@extends('template.all')

@section('st')
    <h2>{{$user->name}}</h2>
    <img src="{{$user->icon}}" alt="Imagem de {{$user->name}}" width="200" height="200">
    <br>
    @auth
    @if(Auth::user()->id == $user->id)
            <button>Editar</button>
    @endif
    @endauth

    <h3> Histórias do usuário </h3>
    

    @foreach ($user->stories as $story)
        <div class="post">
            <h4><a href="{{route('story', ['story' => $story->id])}}">{{$story->title}}</h4>
        </div>
    @endforeach

@endsection

@section('exit')
    <p><b><a href="{{route('main')}}">Back to HOME</a></b></p>
@endsection