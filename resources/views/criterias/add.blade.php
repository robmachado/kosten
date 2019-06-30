@extends('layouts.app')
@section('content')
<h2 class="page-header">Criterios</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Adiciona/Modifica Critérios de Cálculo
    </div>
    <div class="panel-body">
        <form action="{{ url('/criterias'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
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
            <div class="form-group">
            <label for="operational" class="col-sm-3 control-label">Custo Operacional (R$)</label>
                <div class="col-sm-6">
                    <input type="number" step="0" name="operational" id="operational" class="form-control" value="{{ isset($model->operational) ? $model->operational : old('operational')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="financial" class="col-sm-3 control-label">Custo Financeiro  (R$)</label>
                <div class="col-sm-6">
                    <input type="number" step="0" name="financial" id="financial" class="form-control" value="{{ isset($model->financial) ? $model->financial : old('financial') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="apportionment" class="col-sm-3 control-label">Rateio (ton)</label>
                <div class="col-sm-6">
                    <input type="number" step="0" name="apportionment" id="apportionment" class="form-control" value="{{ isset($model->apportionment) ? $model->apportionment : old('apportionment') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="profit" class="col-sm-3 control-label">Lucro (%)</label>
                <div class="col-sm-6">
                    <input type="number" step="0.1" name="profit" id="profit" class="form-control" value="{{ isset($model->profit) ? $model->profit : old('profit') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="commission" class="col-sm-3 control-label">Commissão (%)</label>
                <div class="col-sm-6">
                    <input type="number" step="0.1" name="commission" id="commission" class="form-control" value="{{ isset($model->commission) ? $model->commission : old('commission') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="rate" class="col-sm-3 control-label">Juros (%)</label>
                <div class="col-sm-6">
                    <input type="number" step="0.01" name="rate" id="rate" class="form-control" value="{{ isset($model->rate) ? $model->rate : old('rate') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="ipi" class="col-sm-3 control-label">IPI (%)</label>
                <div class="col-sm-6">
                    <input type="number" step="0.01" name="ipi" id="ipi" class="form-control" value="{{ isset($model->ipi) ? $model->ipi : old('ipi') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="pis" class="col-sm-3 control-label">PIS (%)</label>
                <div class="col-sm-6">
                    <input type="number" step="0.01" name="pis" id="pis" class="form-control" value="{{ isset($model->pis) ? $model->pis : old('pis') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="cofins" class="col-sm-3 control-label">COFINS (%)</label>
                <div class="col-sm-6">
                    <input type="number" step="0.01" name="cofins" id="cofins" class="form-control" value="{{ isset($model->cofins) ? $model->cofins : old('cofins') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="csll" class="col-sm-3 control-label">CSLL (%)</label>
                <div class="col-sm-6">
                    <input type="number" step="0.01" name="csll" id="csll" class="form-control" value="{{ isset($model->csll) ? $model->csll : old('csll') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="ir" class="col-sm-3 control-label">IR (%)</label>
                <div class="col-sm-6">
                    <input type="number" step="0.01" name="ir" id="ir" class="form-control" value="{{ isset($model->ir) ? $model->ir : old('ir') }}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Gravar
                    </button> 
                    <a class="btn btn-default" href="{{ url('/criterias') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection