@extends('layouts.app')
@section('content')
<h2 class="page-header">Destinos</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Adiciona/Modifica Destinos
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
        <form action="{{ url('/destinations'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
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
            <div class="form-group {{ $errors->has('destination') ? 'has-error' : '' }}">
                <label for="destination" class="col-sm-3 control-label">Destino</label>
                <div class="col-sm-6">
                    <input type="text" name="destination" id="destination" class="form-control" value="{{ $model->destination or old('destination') }}">
                    @if($errors->has('destination'))
                        <span class="help-block">{{ $errors->first('destination') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('icms') ? 'has-error' : '' }}">
                <label for="icms" class="col-sm-3 control-label">Icms (saída)</label>
                <div class="col-sm-6">
                    <input type="text" name="icms" id="icms" class="form-control" value="{{ isset($model->icms_formatted) ? $model->icms_formatted : old('icms') }}">
                    @if($errors->has('icms'))
                        <span class="help-block">{{ $errors->first('icms') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Gravar
                    </button> 
                    <a class="btn btn-default" href="{{ url('/destinations') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection