@extends('layouts.app')
@section('content')
<h2 class="page-header">Tingimento</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Processos de Tingimento  <a class="pull-right" href="{{ route('home') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
    </div>
    @if (session()->has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>{{session()->get('success')}}</strong>
    </div>    
    @endif
    <div class="panel-body" style="width:600px;">
        <div class="">
            <table class="table table-striped" id="thegrid">
              <thead>
                <tr bgcolor="#AAAAAA">
                    <th class="text-center">Id</th>
                    <th class="text-left">Tipo</th>
                    <th class="text-left">Código</th>
                    <th class="text-center">Custo</th>
                    <th style="width:5%"></th>
                    <th style="width:5%"></th>
                </tr>
              </thead>
              <tbody>
              @foreach($dyes as $key => $value)
                <tr>
                    <td class="text-center" style="width:10%">{{ $value->id }}</td>
                    <td style="width:50%">{{ $value->class }}</td>
                    <td style="width:10%">{{ $value->code }}</td>
                    <td class="text-right" style="width:20%">R$ {{ $value->value_formatted }}</td>
                    <td style="width:5%">
                        <a href="{{ url('dyeings') }}/{{ $value->id }}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td style="width:5%">
                        {!! Btn::delete($value->id, $value->class)!!}
                    </td>
                </tr>
              @endforeach      
              </tbody>
            </table>
        </div>
        <a href="{{url('dyeings/create')}}" class="btn btn-primary" role="button">Adiciona tingimento</a>
    </div>
@endsection
