@extends('layouts.app')
@section('content')
<h2 class="page-header">Produtos</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Adiciona/Modifica Lista de Materiais dos Produtos (Bom)
    </div>
    <div class="panel-body">
        <form action="{{ url('/boms'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
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
                <label for="article" class="col-sm-3 control-label">Artigo</label>
                <div class="col-sm-6">
                    <input type="text" name="article" id="article" class="form-control" value="{{$model['article'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Descrição</label>
                <div class="col-sm-6">
                    <input type="text" name="description" id="description" class="form-control" value="{{$model['description'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="composition" class="col-sm-3 control-label">Composição</label>
                <div class="col-sm-6">
                    <input type="text" name="composition" id="composition" class="form-control" value="{{$model['composition'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="knittings_cod" class="col-sm-3 control-label">Malharia</label>
                <div class="col-sm-6">
                    <input type="text" name="knittings_cod" id="knittings_cod" class="form-control" value="{{$model['knittings_cod'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="raw1" class="col-sm-3 control-label">MP (FIO) 1</label>
                <div class="col-sm-6">
                    <input type="text" name="raw1" id="raw1" class="form-control" value="{{$model['raw1'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="perc1" class="col-sm-3 control-label">Qtd %1</label>
                <div class="col-sm-6">
                    <input type="text" name="perc1" id="perc1" class="form-control" value="{{$model['perc1'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="raw2" class="col-sm-3 control-label">MP (FIO) 2</label>
                <div class="col-sm-6">
                    <input type="text" name="raw2" id="raw2" class="form-control" value="{{$model['raw2'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="perc2" class="col-sm-3 control-label">Qtd %2</label>
                <div class="col-sm-6">
                    <input type="text" name="perc2" id="perc2" class="form-control" value="{{$model['perc2'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="raw3" class="col-sm-3 control-label">MP (FIO) 3</label>
                <div class="col-sm-6">
                    <input type="text" name="raw3" id="raw3" class="form-control" value="{{$model['raw3'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="perc3" class="col-sm-3 control-label">Qtd %3</label>
                <div class="col-sm-6">
                    <input type="text" name="perc3" id="perc3" class="form-control" value="{{$model['perc3'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="losses" class="col-sm-3 control-label">Perdas</label>
                <div class="col-sm-6">
                    <input type="text" name="losses" id="losses" class="form-control" value="{{$model['losses'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Gravar
                    </button> 
                    <a class="btn btn-default" href="{{ url('/boms') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection