@extends('layouts.app')

@section('content')


<h2 class="page-header">Destination</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        Add/Modify Destination    </div>

    <div class="panel-body">
                
        <form action="{{ url('/destinations'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
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
                <label for="destination" class="col-sm-3 control-label">Destination</label>
                <div class="col-sm-6">
                    <input type="text" name="destination" id="destination" class="form-control" value="{{$model['destination'] or ''}}">
                </div>
            </div>
                                                                                                                                    <div class="form-group">
                <label for="icms" class="col-sm-3 control-label">Icms</label>
                <div class="col-sm-6">
                    <input type="text" name="icms" id="icms" class="form-control" value="{{$model['icms'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="created_at" class="col-sm-3 control-label">Created At</label>
                <div class="col-sm-6">
                    <input type="text" name="created_at" id="created_at" class="form-control" value="{{$model['created_at'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="updated_at" class="col-sm-3 control-label">Updated At</label>
                <div class="col-sm-6">
                    <input type="text" name="updated_at" id="updated_at" class="form-control" value="{{$model['updated_at'] or ''}}">
                </div>
            </div>
                        
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Save
                    </button> 
                    <a class="btn btn-default" href="{{ url('/destinations') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
                </div>
            </div>
        </form>

    </div>
</div>






@endsection