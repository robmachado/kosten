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
                    <input type="text" name="operational" id="operational" class="form-control" value="{{ isset($model->operational_formatted) ? $model->operational_formatted : old('operational')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="financial" class="col-sm-3 control-label">Custo Financeiro  (R$)</label>
                <div class="col-sm-6">
                    <input type="text" name="financial" id="financial" class="form-control" value="{{ isset($model->financial_formatted) ? $model->financial_formatted : old('financial') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="apportionment" class="col-sm-3 control-label">Rateio (kg)</label>
                <div class="col-sm-6">
                    <input type="text" name="apportionment" id="apportionment" class="form-control" value="{{ isset($model->apportionment_formatted) ? $model->apportionment_formatted : old('apportionment') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="profit" class="col-sm-3 control-label">Lucro (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="profit" id="profit" class="form-control" value="{{ isset($model->profit_formatted) ? $model->profit_formatted : old('profit') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="commission" class="col-sm-3 control-label">Commissão (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="commission" id="commission" class="form-control" value="{{ isset($model->commission_formatted) ? $model->commission_formatted : old('commission') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="rate" class="col-sm-3 control-label">Juros (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="rate" id="rate" class="form-control" value="{{ isset($model->rate_formatted) ? $model->rate_formatted : old('rate') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="ipi" class="col-sm-3 control-label">IPI (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="ipi" id="ipi" class="form-control" value="{{ isset($model->ipi_formatted) ? $model->ipi_formatted : old('ipi') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="pis" class="col-sm-3 control-label">PIS (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="pis" id="pis" class="form-control" value="{{ isset($model->pis_formatted) ? $model->pis_formatted : old('pis') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="cofins" class="col-sm-3 control-label">COFINS (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="cofins" id="cofins" class="form-control" value="{{ isset($model->cofins_formatted) ? $model->cofins_formatted : old('cofins') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="csll" class="col-sm-3 control-label">CSLL (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="csll" id="csll" class="form-control" value="{{ isset($model->csll_formatted) ? $model->csll_formatted : old('csll') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="ir" class="col-sm-3 control-label">IR (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="ir" id="ir" class="form-control" value="{{ isset($model->ir_formatted) ? $model->ir_formatted : old('ir') }}">
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