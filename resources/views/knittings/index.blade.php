@extends('layouts.app')
@section('content')
<h2 class="page-header">Malharia</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Processos de Malharias  <a class="pull-right" href="{{ route('home') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
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
                    <th>Id</th>
                    <th>Codigo</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th style="width:50px"></th>
                    <th style="width:50px"></th>
                </tr>
              </thead>
              <tbody>
              @foreach($knittings as $key => $value)
                <tr>
                    <td class="text-center" style="width:10%">{{ $value->id }}</td>
                    <td style="width:20%">{{ $value->cod }}</td>
                    <td style="width:40%">{{ $value->description }}</td>
                    <td style="width:20%">R$ {{ $value->price_formatted }}</td>
                    <td style="width:5%"><a href="{{ url('knittings') }}/{{ $value->id }}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#3978A7"></i></a></td>
                    <td style="width:5%">{!! Btn::delete($value->id, $value->cod)!!}</td>
                </tr>
              @endforeach      
              </tbody>
            </table>
        </div>
        <a href="{{url('knittings/create')}}" class="btn btn-primary" role="button">Adiciona Tipo de Malharia</a>
    </div>
</div>
@endsection
