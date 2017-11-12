@extends('layouts.app')
@section('content')
<h2 class="page-header">Criteria</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        View Criteria    </div>
    <div class="panel-body">
        <form action="{{ url('/criterias') }}" method="POST" class="form-horizontal">
        <div class="form-group">
            <label for="id" class="col-sm-3 control-label">Id</label>
            <div class="col-sm-6">
                <input type="text" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="operational_cost" class="col-sm-3 control-label">Operational Cost</label>
            <div class="col-sm-6">
                <input type="text" name="operational_cost" id="operational_cost" class="form-control" value="{{$model['operational_cost'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="financial_cost" class="col-sm-3 control-label">Financial Cost</label>
            <div class="col-sm-6">
                <input type="text" name="financial_cost" id="financial_cost" class="form-control" value="{{$model['financial_cost'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="apportionment" class="col-sm-3 control-label">Apportionment</label>
            <div class="col-sm-6">
                <input type="text" name="apportionment" id="apportionment" class="form-control" value="{{$model['apportionment'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="profit" class="col-sm-3 control-label">Profit</label>
            <div class="col-sm-6">
                <input type="text" name="profit" id="profit" class="form-control" value="{{$model['profit'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="commission" class="col-sm-3 control-label">Commission</label>
            <div class="col-sm-6">
                <input type="text" name="commission" id="commission" class="form-control" value="{{$model['commission'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="financial_rate" class="col-sm-3 control-label">Financial Rate</label>
            <div class="col-sm-6">
                <input type="text" name="financial_rate" id="financial_rate" class="form-control" value="{{$model['financial_rate'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="ipi" class="col-sm-3 control-label">Ipi</label>
            <div class="col-sm-6">
                <input type="text" name="ipi" id="ipi" class="form-control" value="{{$model['ipi'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="pis" class="col-sm-3 control-label">Pis</label>
            <div class="col-sm-6">
                <input type="text" name="pis" id="pis" class="form-control" value="{{$model['pis'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="cofins" class="col-sm-3 control-label">Cofins</label>
            <div class="col-sm-6">
                <input type="text" name="cofins" id="cofins" class="form-control" value="{{$model['cofins'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="csll" class="col-sm-3 control-label">Csll</label>
            <div class="col-sm-6">
                <input type="text" name="csll" id="csll" class="form-control" value="{{$model['csll'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="ir" class="col-sm-3 control-label">Ir</label>
            <div class="col-sm-6">
                <input type="text" name="ir" id="ir" class="form-control" value="{{$model['ir'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="created_at" class="col-sm-3 control-label">Created At</label>
            <div class="col-sm-6">
                <input type="text" name="created_at" id="created_at" class="form-control" value="{{$model['created_at'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="updated_at" class="col-sm-3 control-label">Updated At</label>
            <div class="col-sm-6">
                <input type="text" name="updated_at" id="updated_at" class="form-control" value="{{$model['updated_at'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <a class="btn btn-default" href="{{ url('/criterias') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection