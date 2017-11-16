@extends('layouts.app')
@section('content')
<h2 class="page-header">Fios</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Adiciona/Modifica Cadastro de Fios
    </div>
    <div class="panel-body">
        <form action="{{ url('/rawmaterials'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
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
            <div class="form-group">
                <label for="reference" class="col-sm-3 control-label">Referencia</label>
                <div class="col-sm-6">
                    <input type="text" name="reference" id="reference" class="form-control" value="{{$model['reference'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="value" class="col-sm-3 control-label">Valor Sem ICMS</label>
                <div class="col-sm-6">
                    <input type="text" name="value" id="value" class="form-control" value="{{$model['value'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="valueicms" class="col-sm-3 control-label">Valor Com ICMS</label>
                <div class="col-sm-6">
                    <input type="text" name="valueicms" id="valueicms" class="form-control" value="{{$model['valueicms'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="provider_cod" class="col-sm-3 control-label">Cod Fornecedor</label>
                <div class="col-sm-6">
                    <input type="text" name="provider_cod" id="provider_cod" class="form-control" value="{{$model['provider_cod'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Descrição</label>
                <div class="col-sm-6">
                    <input type="text" name="description" id="description" class="form-control" value="{{$model['description'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="base_component" class="col-sm-3 control-label">Componente Base</label>
                <div class="col-sm-6">
                    <input type="text" name="base_component" id="base_component" class="form-control" value="{{$model['base_component'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="cables" class="col-sm-3 control-label">Cabos</label>
                <div class="col-sm-2">
                    <input type="number" name="cables" id="cables" class="form-control" value="{{$model['cables'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="dtex" class="col-sm-3 control-label">Dtex</label>
                <div class="col-sm-2">
                    <input type="number" name="dtex" id="dtex" class="form-control" value="{{$model['dtex'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="filaments" class="col-sm-3 control-label">Filamentos</label>
                <div class="col-sm-2">
                    <input type="number" name="filaments" id="filaments" class="form-control" value="{{$model['filaments'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="finishing" class="col-sm-3 control-label">Acabamento</label>
                <div class="col-sm-6">
                    <input type="text" name="finishing" id="finishing" class="form-control" value="{{$model['finishing'] or ''}}">
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