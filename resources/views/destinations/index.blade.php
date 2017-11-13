@extends('layouts.app')
@section('content')
<h2 class="page-header">Destinos</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Destinos <a class="pull-right" href="{{ route('home') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
    </div>
    <div class="panel-body">
        <div class="">
            <table class="table table-striped" id="thegrid">
              <thead>
                <tr>
                    <th>Id</th>
                    <th>Destinos</th>
                    <th>Valor de Icms</th>
                    <th style="width:50px"></th>
                    <th style="width:50px"></th>
                </tr>
              </thead>
              <tbody>
              @foreach($destinations as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->destination }}</td>
                    <td>{{ $value->icms*100 }} %</td>
                    <td><a href="{{ url('destinations') }}/{{ $value->id }}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#3978A7"></i></a></td>
                    <td><i class="fa fa-trash-o" aria-hidden="true" style="color:red" onclick="doDelete({{ $value->id }})"></i></td>
                </tr>
              @endforeach                    
              </tbody>
            </table>
        </div>
        <a href="{{url('destinations/create')}}" class="btn btn-primary" role="button">Novo destino</a>
    </div>
</div>
@endsection
@section('scripts')
    <script type="text/javascript">
    </script>
@endsection