@extends('layouts.app')
@section('content')
<h2 class="page-header">Bom</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        View Bom    </div>
    <div class="panel-body">
        <form action="{{ url('/boms') }}" method="POST" class="form-horizontal">
        <div class="form-group">
            <label for="id" class="col-sm-3 control-label">Id</label>
            <div class="col-sm-6">
                <input type="text" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="article" class="col-sm-3 control-label">Article</label>
            <div class="col-sm-6">
                <input type="text" name="article" id="article" class="form-control" value="{{$model['article'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="description" class="col-sm-3 control-label">Description</label>
            <div class="col-sm-6">
                <input type="text" name="description" id="description" class="form-control" value="{{$model['description'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="composition" class="col-sm-3 control-label">Composition</label>
            <div class="col-sm-6">
                <input type="text" name="composition" id="composition" class="form-control" value="{{$model['composition'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="knittings_cod" class="col-sm-3 control-label">Knittings Cod</label>
            <div class="col-sm-6">
                <input type="text" name="knittings_cod" id="knittings_cod" class="form-control" value="{{$model['knittings_cod'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="raw1" class="col-sm-3 control-label">Raw1</label>
            <div class="col-sm-6">
                <input type="text" name="raw1" id="raw1" class="form-control" value="{{$model['raw1'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="raw2" class="col-sm-3 control-label">Raw2</label>
            <div class="col-sm-6">
                <input type="text" name="raw2" id="raw2" class="form-control" value="{{$model['raw2'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="raw3" class="col-sm-3 control-label">Raw3</label>
            <div class="col-sm-6">
                <input type="text" name="raw3" id="raw3" class="form-control" value="{{$model['raw3'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="perc1" class="col-sm-3 control-label">Perc1</label>
            <div class="col-sm-6">
                <input type="text" name="perc1" id="perc1" class="form-control" value="{{$model['perc1'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="perc2" class="col-sm-3 control-label">Perc2</label>
            <div class="col-sm-6">
                <input type="text" name="perc2" id="perc2" class="form-control" value="{{$model['perc2'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="perc3" class="col-sm-3 control-label">Perc3</label>
            <div class="col-sm-6">
                <input type="text" name="perc3" id="perc3" class="form-control" value="{{$model['perc3'] or ''}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="losses" class="col-sm-3 control-label">Losses</label>
            <div class="col-sm-6">
                <input type="text" name="losses" id="losses" class="form-control" value="{{$model['losses'] or ''}}" readonly="readonly">
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
                <a class="btn btn-default" href="{{ url('/boms') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection