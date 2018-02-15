@extends('layouts.app')
@section('content')
<h2 class="page-header">Tinturaria</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Adiciona/Modifica Processo Tingimento
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
        <form action="{{ url('/dyeings'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            @if (isset($model))
                <input type="hidden" name="_method" value="PATCH">
            @endif
            <div class="form-group">
                <label for="id" class="col-sm-3 control-label">Id</label>
                <div class="col-sm-6">
                    <input type="text" name="id" id="id" class="form-control" value="{{ $model->id or old('id') }}" readonly="readonly">
                </div>
            </div>
            <div class="form-group {{ $errors->has('class') ? 'has-error' : '' }}">
                <label for="class" class="col-sm-3 control-label">Classificação</label>
                <div class="col-sm-6">
                    <input type="text" name="class" id="class" class="form-control" value="{{ $model->class or old('class') }}">
                    @if($errors->has('class'))
                        <span class="help-block">{{ $errors->first('class') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
                <label for="code" class="col-sm-3 control-label">Codigo</label>
                <div class="col-sm-6">
                    <input type="text" name="code" id="code" class="form-control" value="{{ $model->code or old('code') }}">
                    @if($errors->has('code'))
                        <span class="help-block">{{ $errors->first('code') }}</span>
                    @endif
                </div>
            </div>            
            <div class="form-group {{ $errors->has('value') ? 'has-error' : '' }}">
                <label for="value" class="col-sm-3 control-label">Valor Custo (R$)</label>
                <div class="col-sm-6">
                    <input type="text" name="value" id="value" class="form-control" value="{{ $model->value_formatted or old('value') }}">
                    @if($errors->has('value'))
                        <span class="help-block">{{ $errors->first('value') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Gravar
                    </button> 
                    <a class="btn btn-default" href="{{ url('/dyeings') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection