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
                    <input type="text" name="operational" id="operational" class="form-control" value="{{ isset($model->operational) ? number_format($model->operational, 0, '', '') : old('operational')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="financial" class="col-sm-3 control-label">Custo Financeiro  (R$)</label>
                <div class="col-sm-6">
                    <input type="text" name="financial" id="financial" class="form-control" value="{{ isset($model->financial) ? number_format($model->financial, 0, '', '') : old('financial') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="apportionment" class="col-sm-3 control-label">Rateio (kg)</label>
                <div class="col-sm-6">
                    <input type="text" name="apportionment" id="apportionment" class="form-control" value="{{ isset($model->apportionment) ? number_format($model->apportionment, 0, '', '') : old('apportionment') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="profit" class="col-sm-3 control-label">Lucro (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="profit" id="profit" class="form-control" value="{{ isset($model->profit) ? $model->profit*100 : old('profit') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="commission" class="col-sm-3 control-label">Commissão (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="commission" id="commission" class="form-control" value="{{ isset($model->commission) ? $model->commission*100 : old('commission') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="rate" class="col-sm-3 control-label">Juros (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="rate" id="rate" class="form-control" value="{{ isset($model->rate) ? $model->rate*100 : old('rate') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="ipi" class="col-sm-3 control-label">IPI (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="ipi" id="ipi" class="form-control" value="{{ isset($model->ipi) ? $model->ipi*100 : old('ipi') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="pis" class="col-sm-3 control-label">PIS (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="pis" id="pis" class="form-control" value="{{ isset($model->pis) ? $model->pis*100 : old('pis') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="cofins" class="col-sm-3 control-label">COFINS (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="cofins" id="cofins" class="form-control" value="{{ isset($model->cofins) ? $model->cofins*100 : old('cofins') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="csll" class="col-sm-3 control-label">CSLL (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="csll" id="csll" class="form-control" value="{{ isset($model->csll) ? $model->csll*100 : old('csll') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="ir" class="col-sm-3 control-label">IR (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="ir" id="ir" class="form-control" value="{{ isset($model->ir) ? $model->ir*100 : old('ir') }}">
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