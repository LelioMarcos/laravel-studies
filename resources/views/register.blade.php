@extends('template.story')

@section('st')
    <form action="/register" method="POST">
        @csrf
        <input type="text" placeholder="Name" id="name" name="name" required>
        @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif

        <br>

        <input type="text" placeholder="Email" id="email_address" class="form-control"
            name="email" required autofocus>
        @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
        
        <br>

        <input type="password" placeholder="Password" id="password" name="password" required>
        @if ($errors->has('password'))
        <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif

        <br>

        <label><input type="checkbox" name="remember"> Remember Me</label>

        <button type="submit">Sign up</button>
    </form>
@endsection

@section('exit')
    <p><b><a href="../hists">Back to HOME</a></b></p>
@endsection