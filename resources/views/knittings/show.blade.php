@extends('layouts.app')
@section('content')
<h2 class="page-header">Knitting</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        View Knitting    </div>
    <div class="panel-body">
        <form action="{{ url('/knittings') }}" method="POST" class="form-horizontal">
        <div class="form-group">
            <label for="id" class="col-sm-3 control-label">Id</label>
            <div class="col-sm-6">
                <input type="text" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="cod" class="col-sm-3 control-label">Cod</label>
            <div class="col-sm-6">
                <input type="text" name="cod" id="cod" class="form-control" value="{{$model['cod'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="price" class="col-sm-3 control-label">Price</label>
            <div class="col-sm-6">
                <input type="text" name="price" id="price" class="form-control" value="{{$model['price'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <a class="btn btn-default" href="{{ url('/knittings') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection