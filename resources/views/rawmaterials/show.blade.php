@extends('layouts.app')

@section('content')



<h2 class="page-header">Rawmaterial</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        View Rawmaterial    </div>

    <div class="panel-body">
                

        <form action="{{ url('/rawmaterials') }}" method="POST" class="form-horizontal">


                
        <div class="form-group">
            <label for="id" class="col-sm-3 control-label">Id</label>
            <div class="col-sm-6">
                <input type="text" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="reference" class="col-sm-3 control-label">Reference</label>
            <div class="col-sm-6">
                <input type="text" name="reference" id="reference" class="form-control" value="{{$model['reference'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="value" class="col-sm-3 control-label">Value</label>
            <div class="col-sm-6">
                <input type="text" name="value" id="value" class="form-control" value="{{$model['value'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="value_icms" class="col-sm-3 control-label">Value Icms</label>
            <div class="col-sm-6">
                <input type="text" name="value_icms" id="value_icms" class="form-control" value="{{$model['value_icms'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="provider_cod" class="col-sm-3 control-label">Provider Cod</label>
            <div class="col-sm-6">
                <input type="text" name="provider_cod" id="provider_cod" class="form-control" value="{{$model['provider_cod'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="description" class="col-sm-3 control-label">Description</label>
            <div class="col-sm-6">
                <input type="text" name="description" id="description" class="form-control" value="{{$model['description'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="base_component" class="col-sm-3 control-label">Base Component</label>
            <div class="col-sm-6">
                <input type="text" name="base_component" id="base_component" class="form-control" value="{{$model['base_component'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="cables" class="col-sm-3 control-label">Cables</label>
            <div class="col-sm-6">
                <input type="text" name="cables" id="cables" class="form-control" value="{{$model['cables'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="dtex" class="col-sm-3 control-label">Dtex</label>
            <div class="col-sm-6">
                <input type="text" name="dtex" id="dtex" class="form-control" value="{{$model['dtex'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="filaments" class="col-sm-3 control-label">Filaments</label>
            <div class="col-sm-6">
                <input type="text" name="filaments" id="filaments" class="form-control" value="{{$model['filaments'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="finishing" class="col-sm-3 control-label">Finishing</label>
            <div class="col-sm-6">
                <input type="text" name="finishing" id="finishing" class="form-control" value="{{$model['finishing'] or ''}}" readonly="readonly">
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
                <a class="btn btn-default" href="{{ url('/rawmaterials') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
            </div>
        </div>


        </form>

    </div>
</div>







@endsection