@extends('layouts.app')
@section('content')
<h2 class="page-header">Embalagens</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Adiciona/Modifica Embalagens
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
        <form action="{{ url('/packagings'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            
            @if (isset($model))
                <input type="hidden" name="_method" value="PATCH">
            @endif
            <div class="form-group">
                <label for="id" class="col-sm-3 control-label">Id</label>
                <div class="col-sm-6">
                    <input type="text" name="id" id="id" class="form-control" value="{{ $model->id or old('id')}}" readonly="readonly">
                </div>
            </div>
            <div class="form-group {{ $errors->has('pack') ? 'has-error' : '' }}">
                <label for="pack" class="col-sm-3 control-label">Modo</label>
                <div class="col-sm-6">
                    <input type="text" name="pack" id="pack" class="form-control" value="{{ $model->pack or old('pack')}}">
                    @if($errors->has('pack'))
                        <span class="help-block">{{ $errors->first('pack') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description" class="col-sm-3 control-label">Descrição</label>
                <div class="col-sm-6">
                    <textarea name="description" id="description" rows="5" class="form-control" >{{ $model->description or old('description') }}</textarea>
                    @if($errors->has('description'))
                        <span class="help-block">{{ $errors->first('description') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('value') ? 'has-error' : '' }}">
                <label for="value" class="col-sm-3 control-label">Valor Custo (R$)</label>
                <div class="col-sm-6">
                    <input type="number" step="0.01" name="value" id="value" class="form-control" value="{{ $model->value or old('value') }}">
                    @if($errors->has('value'))
                        <span class="help-block">{{ $errors->first('value') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('quota') ? 'has-error' : '' }}">
                <label for="quota" class="col-sm-3 control-label">Parcela (%)</label>
                <div class="col-sm-6">
                    <input type="number" step="0.01" name="quota" id="quota" class="form-control" value="{{ isset($model->quota) ? $model->quota : old('quota') }}">
                    @if($errors->has('quota'))
                        <span class="help-block">{{ $errors->first('quota') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Gravar
                    </button> 
                    <a class="btn btn-default" href="{{ url('/packagings') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection