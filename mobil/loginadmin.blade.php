@extends('layout.kosong')
@section('content')
<html lang="en">
<head>
<title>Halaman Login</title>
{{  HTML::style("css/metro-bootstrap.css")  }}
{{  HTML::style("css/metro-bootstrap-responsive.css")  }}
{{  HTML::style("css/iconFont.css")  }}
{{  HTML::style("css/docs.css")  }}
{{  HTML::style("js/prettify/prettify.css")  }}
</head>
<body>
    <div class="row">
        <div class="col-lg-4 text-center">
        </div>
        <div class="col-lg-4 text-center">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{ Form::open(array('url' => 'login1')) }}
                    <h1>Login</h1>
                    <p>
                                    {{ $errors->first('email') }}
                                    {{ $errors->first('password') }}
                    </p>
                    <p>
                                    {{ Form::label('email', 'Email') }}
                                    {{ Form::text('email', Input::old('email'), array('class' => 'form-control','placeholder'=>'Masukkan Email')) }}
                    </p>
                    <p>
                                    {{ Form::label('password', 'Password') }}
                                    {{ Form::password('password', array('class' => 'form-control','placeholder'=>'Masukkan Password')) }}
                    </p>
                    <p>{{ Form::submit('Login', array('class' => 'form-control')) }}</p>
                {{ Form::close() }}
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center">
        </div>
</div>
</body>
</html>
@stop