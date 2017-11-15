@extends('layouts.app')
@section('content')
<h2 class="page-header">Tabela de Preços</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        <p>Parâmetros</p>
        <p>{{ $params['destino'] }}  <strong>{{ 'ICMS: ' . number_format($params['icms'],0,'','') }}% </strong> Tingimento: {{ $params['tingimento'] }} Embalagem: {{ $params['embalagem'] }}</p>    
    </div>
    <div class="panel-body">
        <div class="">
            <table class="table table-striped" id="thegrid">
              <thead>
                <tr>
                    <th>Artigo</th>
                    <th>Descrição</th>
                    <th>Composição</th>
                    <th>A vista</th>
                    <th>15 dd</th>
                    <th>30 dd</th>
                    <th>45 dd</th>
                    <th>60 dd</th>
                    <th></th>
                </tr>
              </thead>
              <tbody>
                    @foreach($tab as $key => $value)
                    <tr>
                        <td>{{ $value['artigo'] }}</td>
                        <td>{{ $value['descricao'] }}</td>
                        <td>{{ $value['composicao'] }}</td>
                        <td>R$ {{ number_format($value['custo'][0],2,',','') }}</td>
                        <td>R$ {{ number_format($value['custo'][15],2,',','') }}</td>
                        <td>R$ {{ number_format($value['custo'][30],2,',','') }}</td>
                        <td>R$ {{ number_format($value['custo'][45],2,',','') }}</td>
                        <td>R$ {{ number_format($value['custo'][60],2,',','') }}</td>
                        <td>
                            <i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#3978A7" data-toggle="modal" data-target="#{{ $value['artigo'] }}"></i>
                        </td>
                    <tr>  
                    @endforeach  
              </tbody>    
            </table>
        </div>
        <a href="{{ route('analise.index') }}" class="btn btn-primary" role="button">Analise</a>
    </div>
</div>
@foreach($tab as $key => $value)
    {!! html_entity_decode($value['explain']) !!}<br>
@endforeach
@endsection