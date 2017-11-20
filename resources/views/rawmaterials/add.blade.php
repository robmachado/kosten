@extends('layouts.app')
@section('content')
<h2 class="page-header">Fios</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Adiciona/Modifica Cadastro de Fios
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
        <form action="{{ url('/rawmaterials'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
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
            <div class="form-group {{ $errors->has('reference') ? 'has-error' : '' }}">
                <label for="reference" class="col-sm-3 control-label">Referencia</label>
                <div class="col-sm-6">
                    <input type="text" name="reference" id="reference" class="form-control" value="{{ $model->reference or old('reference') }}">
                    @if($errors->has('reference'))
                        <span class="help-block">{{ $errors->first('reference') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('value') ? 'has-error' : '' }}">
                <label for="value" class="col-sm-3 control-label">Valor Sem ICMS</label>
                <div class="col-sm-6">
                    <input type="text" name="value" id="value" class="form-control" value="{{ $model->value or old('value') }}">
                    @if($errors->has('value'))
                        <span class="help-block">{{ $errors->first('value') }}</span>
                    @endif

                </div>
            </div>
            <div class="form-group {{ $errors->has('valueicms') ? 'has-error' : '' }}">
                <label for="valueicms" class="col-sm-3 control-label">Valor Com ICMS</label>
                <div class="col-sm-6">
                    <input type="text" name="valueicms" id="valueicms" class="form-control" value="{{ $model->valueicms or old('valueicms') }}">
                    @if($errors->has('valueicms'))
                        <span class="help-block">{{ $errors->first('valueicms') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('provider_cod') ? 'has-error' : '' }}">
                <label for="provider_cod" class="col-sm-3 control-label">Cod Fornecedor</label>
                <div class="col-sm-6">
                    <input type="text" name="provider_cod" id="provider_cod" class="form-control" value="{{ $model->provider_cod or old('provider_cod') }}">
                    @if($errors->has('provider_cod'))
                        <span class="help-block">{{ $errors->first('provider_cod') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description" class="col-sm-3 control-label">Descrição</label>
                <div class="col-sm-6">
                    <input type="text" name="description" id="description" class="form-control" value="{{ $model->description or old('description') }}">
                    @if($errors->has('description'))
                        <span class="help-block">{{ $errors->first('description') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('basecomponent') ? 'has-error' : '' }}">
                <label for="basecomponent" class="col-sm-3 control-label">Componente Base</label>
                <div class="col-sm-6">
                    <input type="text" name="basecomponent" id="basecomponent" class="form-control" value="{{ $model->basecomponent or old('basecomponent') }}">
                    @if($errors->has('basecomponent'))
                        <span class="help-block">{{ $errors->first('basecomponent') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('cables') ? 'has-error' : '' }}">
                <label for="cables" class="col-sm-3 control-label">Cabos</label>
                <div class="col-sm-2">
                    <input type="number" name="cables" id="cables" class="form-control" value="{{ $model->cables or old('cables') }}">
                    @if($errors->has('cables'))
                        <span class="help-block">{{ $errors->first('cables') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('dtex') ? 'has-error' : '' }}">
                <label for="dtex" class="col-sm-3 control-label">Dtex</label>
                <div class="col-sm-2">
                    <input type="number" name="dtex" id="dtex" class="form-control" value="{{ $model->dtex or old('dtex') }}">
                    @if($errors->has('dtex'))
                        <span class="help-block">{{ $errors->first('dtex') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('filaments') ? 'has-error' : '' }}">
                <label for="filaments" class="col-sm-3 control-label">Filamentos</label>
                <div class="col-sm-2">
                    <input type="number" name="filaments" id="filaments" class="form-control" value="{{ $model->filaments or old('filaments') }}">
                    @if($errors->has('filaments'))
                        <span class="help-block">{{ $errors->first('filaments') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('finishing') ? 'has-error' : '' }}">
                <label for="finishing" class="col-sm-3 control-label">Acabamento</label>
                <div class="col-sm-6">
                    <input type="text" name="finishing" id="finishing" class="form-control" value="{{ $model->finishing or old('finishing') }}">
                    @if($errors->has('finishing'))
                        <span class="help-block">{{ $errors->first('finishing') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Gravar
                    </button> 
                    <a class="btn btn-default" href="{{ url('/rawmaterials') }}"><i class="glyphicon glyphicon-chevron-left"></i> Retornar</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection