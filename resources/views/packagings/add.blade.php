@extends('layouts.app')
@section('content')
<h2 class="page-header">Embalagens</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Adiciona/Modifica Embalagens
    </div>
    <div class="panel-body">
        <form action="{{ url('/packagings'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            @if (isset($model))
                <input type="hidden" name="_method" value="PATCH">
            @endif
            <div class="form-group">
                <label for="id" class="col-sm-3 control-label">Id</label>
                <div class="col-sm-6">
                    <input type="text" name="id" id="id" class="form-control" value="{{ $model['id'] or ''}}" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <label for="pack" class="col-sm-3 control-label">Modo</label>
                <div class="col-sm-6">
                    <input type="text" name="pack" id="pack" class="form-control" value="{{$model['pack'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Descrição</label>
                <div class="col-sm-6">
                    <textarea name="description" id="description" rows="5" class="form-control" >{{$model['description'] or ''}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="value" class="col-sm-3 control-label">Valor Custo (R$)</label>
                <div class="col-sm-6">
                    <input type="text" name="value" id="value" class="form-control" value="{{$model['value'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="quota" class="col-sm-3 control-label">Parcela (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="quota" id="quota" class="form-control" value="{{$model['quota'] or ''}}">
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