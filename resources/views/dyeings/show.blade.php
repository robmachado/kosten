@extends('layouts.app')
@section('content')
<h2 class="page-header">Dyeing</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        View Dyeing    </div>
    <div class="panel-body">
        <form action="{{ url('/dyeings') }}" method="POST" class="form-horizontal">
        <div class="form-group">
            <label for="id" class="col-sm-3 control-label">Id</label>
            <div class="col-sm-6">
                <input type="text" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="class" class="col-sm-3 control-label">Class</label>
            <div class="col-sm-6">
                <input type="text" name="class" id="class" class="form-control" value="{{$model['class'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="value" class="col-sm-3 control-label">Value</label>
            <div class="col-sm-6">
                <input type="text" name="value" id="value" class="form-control" value="{{$model['value'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <a class="btn btn-default" href="{{ url('/dyeings') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection