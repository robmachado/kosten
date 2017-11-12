@extends('layouts.app')
@section('content')
<h2 class="page-header">Criterios</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Adiciona/Modifica Critários de Cálculo
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
                    <input type="text" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
            <label for="operational_cost" class="col-sm-3 control-label">Custo Operacional (R$)</label>
                <div class="col-sm-6">
                    <input type="text" name="operational_cost" id="operational_cost" class="form-control" value="{{$model['operational_cost'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="financial_cost" class="col-sm-3 control-label">Custo Financeiro  (R$)</label>
                <div class="col-sm-6">
                    <input type="text" name="financial_cost" id="financial_cost" class="form-control" value="{{$model['financial_cost'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="apportionment" class="col-sm-3 control-label">Rateio (Ton)</label>
                <div class="col-sm-6">
                    <input type="text" name="apportionment" id="apportionment" class="form-control" value="{{$model['apportionment'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="profit" class="col-sm-3 control-label">Lucro (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="profit" id="profit" class="form-control" value="{{$model['profit'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="commission" class="col-sm-3 control-label">Commissão (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="commission" id="commission" class="form-control" value="{{$model['commission'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="financial_rate" class="col-sm-3 control-label">Juros (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="financial_rate" id="financial_rate" class="form-control" value="{{$model['financial_rate'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="ipi" class="col-sm-3 control-label">IPI (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="ipi" id="ipi" class="form-control" value="{{$model['ipi'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="pis" class="col-sm-3 control-label">PIS (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="pis" id="pis" class="form-control" value="{{$model['pis'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="cofins" class="col-sm-3 control-label">COFINS (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="cofins" id="cofins" class="form-control" value="{{$model['cofins'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="csll" class="col-sm-3 control-label">CSLL (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="csll" id="csll" class="form-control" value="{{$model['csll'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="ir" class="col-sm-3 control-label">IR (%)</label>
                <div class="col-sm-6">
                    <input type="text" name="ir" id="ir" class="form-control" value="{{$model['ir'] or ''}}">
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