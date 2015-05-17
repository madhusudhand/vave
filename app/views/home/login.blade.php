<h1 class="text-center">Vave Login</h1>

<div style="width:400px;margin:0 auto;">
    {{ Form::open(['route'=>'login.check']) }}
    {{ Form::label('Email') }}
    {{ Form::email('email','',['class'=>'form-control']) }}
    <br>
    {{ Form::label('Password') }}
    {{ Form::password('password',['class'=>'form-control']) }}
    <br>
    {{ Form::submit('Login',['class'=>'btn btn-primary']) }}
    {{ Form::close() }}
</div>