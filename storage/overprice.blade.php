@extends('layouts.app')
@section('content')
<h2 class="page-header">Fios Ajuste de Valores</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Altera em LOTE o preço dos Fios (use com CUIDADO)
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
        <form action="{{ url('/rawmaterials/overprice') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            @if (isset($model))
                <input type="hidden" name="_method" value="PATCH">
            @endif
            <div class="form-group">
                <label for="basecom" class="col-sm-3 control-label">Componente</label>
                <div class="col-sm-2">
                <select id="basecom" name="basecom" class="form-control" >
                    @foreach($baselist as $key => $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="form-group {{ $errors->has('percent') ? 'has-error' : '' }}">
                <label for="finishing" class="col-sm-3 control-label">Adicionar Percentual</label>
                <div class="col-sm-2">
                    <input type="float" name="percent" id="percent" class="form-control" value="">
                    @if($errors->has('percent'))
                        <span class="help-block">{{ $errors->first('percent') }}</span>
                    @endif
                    
                </div>
                <i>Ex. use numeros maiores que 1 para adicionar e menores que 1 para reduzir. 1,20 irá adicionar 20% ao valor e 0,80 ira tirar 20% do valor.</i>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Aplicar
                    </button> 
                    <a class="btn btn-default" href="{{ url('/rawmaterials') }}"><i class="glyphicon glyphicon-chevron-left"></i> Retornar</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection