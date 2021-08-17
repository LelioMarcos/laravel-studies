@extends('template.all')

@section('st')
<form method="POST" action="/login">
    @csrf

    @if ($errors->any()) 
        <p>Invalid Email or Password</p>
    @endif

    <input type="text" placeholder="Email" id="email" name="email" required>

    <br>

    <input type="password" placeholder="Password" id="password" name="password" required>

    <br>

    <button type="submit">Signin</button>
</form>

<a href="/register">
<button>Register</button>
</a>
@endsection

@section('exit')
    <p><b><a href="{{route('main')}}">Back to HOME</a></b></p>
@endsection