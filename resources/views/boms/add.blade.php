@extends('layouts.app')
@section('content')
<h2 class="page-header">Produtos</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Adiciona/Modifica Lista de Materiais dos Produtos (Bom)
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
        <form action="{{ url('/boms'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
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
            <div class="form-group {{ $errors->has('article') ? 'has-error' : '' }}">
                <label for="article" class="col-sm-3 control-label">Artigo</label>
                <div class="col-sm-6">
                    <input type="text" name="article" id="article" class="form-control" value="{{ $model->article or old('article') }}">
                    @if($errors->has('article'))
                        <span class="help-block">{{ $errors->first('article') }}</span>
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
            <div class="form-group {{ $errors->has('composition') ? 'has-error' : '' }}">
                <label for="composition" class="col-sm-3 control-label">Composição</label>
                <div class="col-sm-6">
                    <input type="text" name="composition" id="composition" class="form-control" value="{{ $model->composition or old('composition') }}">
                    @if($errors->has('composition'))
                        <span class="help-block">{{ $errors->first('composition') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('knittings_cod') ? 'has-error' : '' }}">
                <label for="knittings_cod" class="col-sm-3 control-label">Malharia</label>
                <div class="col-sm-6">
                    <input type="text" name="knittings_cod" id="knittings_cod" class="form-control" value="{{ $model->knittings_cod or old('knittings_cod') }}">
                    @if($errors->has('knittings_cod'))
                        <span class="help-block">{{ $errors->first('knittings_cod') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('raw1') ? 'has-error' : '' }}">
                <label for="raw1" class="col-sm-3 control-label">MP (FIO) 1</label>
                <div class="col-sm-6">
                    <input type="text" name="raw1" id="raw1" class="form-control" value="{{ $model->raw1 or old('raw1') }}">
                    @if($errors->has('raw1'))
                        <span class="help-block">{{ $errors->first('raw1') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('perc1') ? 'has-error' : '' }}">
                <label for="perc1" class="col-sm-3 control-label">Qtd %1</label>
                <div class="col-sm-6">
                    <input type="text" name="perc1" id="perc1" class="form-control" value="{{ isset($model->perc1) ? $model->perc1*100 : old('perc1') }}">
                    @if($errors->has('perc1'))
                        <span class="help-block">{{ $errors->first('perc1') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('raw2') ? 'has-error' : '' }}">
                <label for="raw2" class="col-sm-3 control-label">MP (FIO) 2</label>
                <div class="col-sm-6">
                    <input type="text" name="raw2" id="raw2" class="form-control" value="{{ $model->raw2 or old('raw2') }}">
                    @if($errors->has('raw2'))
                        <span class="help-block">{{ $errors->first('raw2') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('perc2') ? 'has-error' : '' }}">
                <label for="perc2" class="col-sm-3 control-label">Qtd %2</label>
                <div class="col-sm-6">
                    <input type="text" name="perc2" id="perc2" class="form-control" value="{{ isset($model->perc2) ? $model->perc2*100 : old('perc2') }}">
                    @if($errors->has('perc2'))
                        <span class="help-block">{{ $errors->first('perc2') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('raw3') ? 'has-error' : '' }}">
                <label for="raw3" class="col-sm-3 control-label">MP (FIO) 3</label>
                <div class="col-sm-6">
                    <input type="text" name="raw3" id="raw3" class="form-control" value="{{ $model->raw3 or old('raw3') }}">
                    @if($errors->has('raw3'))
                        <span class="help-block">{{ $errors->first('raw3') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('perc3') ? 'has-error' : '' }}">
                <label for="perc3" class="col-sm-3 control-label">Qtd %3</label>
                <div class="col-sm-6">
                    <input type="text" name="perc3" id="perc3" class="form-control" value="{{ isset($model->perc3) ? $model->perc3*100 : old('perc3') }}">
                    @if($errors->has('perc3'))
                        <span class="help-block">{{ $errors->first('perc3') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group {{ $errors->has('losses') ? 'has-error' : '' }}">
                <label for="losses" class="col-sm-3 control-label">Perdas</label>
                <div class="col-sm-6">
                    <input type="text" name="losses" id="losses" class="form-control" value="{{ isset($model->losses) ? $model->losses*100 : old('losses') }}">
                    @if($errors->has('losses'))
                        <span class="help-block">{{ $errors->first('losses') }}</span>
                    @endif
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