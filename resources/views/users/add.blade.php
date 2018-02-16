@extends('layouts.app')
@section('content')
<h2 class="page-header">Usuários</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Modifica Usuário
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="panel-body">
        <form action="{{ url('/users'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
            @if (isset($model))
                <input type="hidden" name="_method" value="PATCH">
            @endif
            <div class="form-group">
                <label for="id" class="col-sm-3 control-label">Id</label>
                <div class="col-sm-6">
                    <input type="text" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
                </div>
            </div>
            <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                <label for="username" class="col-sm-3 control-label">Username</label>
                <div class="col-sm-6">
                    <input type="text" name="username" id="username" class="form-control" value="{{ $model->username or old('username') }}">
                    @if($errors->has('username'))
                        <span class="help-block">{{ $errors->first('username') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control" value="{{ $model->name or old('name') }}">
                    @if($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email" class="col-sm-3 control-label">email</label>
                <div class="col-sm-6">
                    <input type="text" name="email" id="email" class="form-control" value="{{ $model->email or old('email') }}">
                    @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-sm-3 control-label">Senha</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="password-confirm" class="col-sm-3 control-label">Confirme Senha</label>
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Gravar
                    </button> 
                    <a class="btn btn-default" href="{{ url('/users') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection