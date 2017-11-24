@extends('layouts.app')
@section('content')
<h2 class="page-header">Embalagens</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Embalagens  <a class="pull-right" href="{{ route('home') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
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
                    <th class="text-center">Modo</th>
                    <th class="text-center">Descrição</th>
                    <th class="text-center">Custo</th>
                    <th class="text-center">Parcela</th>
                    <th style="width:5%"></th>
                    <th style="width:5%"></th>
                </tr>
              </thead>
              <tbody>
              @foreach($pack as $key => $value)
                <tr>
                    <td class="text-center" style="width:10%">{{ $value->id }}</td>
                    <td style="width:30%">{{ $value->pack }}</td>
                    <td style="width:30%">{{ $value->description }}</td>
                    <td class="text-right" style="width:15%">R$ {{ $value->value_formatted }}</td>
                    <td class="text-right" style="width:15%">{{ $value->quota_formatted }}%</td>
                    <td style="width:5%">
                        <a href="{{ url('packagings') }}/{{ $value->id }}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td style="width:5%">
                        {!! Btn::delete($value->id, $value->pack)!!}
                    </td>    
                </tr>
              @endforeach      
              </tbody>
            </table>
        </div>
        <a href="{{url('packagings/create')}}" class="btn btn-primary" role="button">Adiciona Embalagem</a>
    </div>
</div>
@endsection
