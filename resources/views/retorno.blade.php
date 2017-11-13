@extends('layouts.app')
@section('content')
<h2 class="page-header">Análise de Preço de Venda</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4> {{ $tab['artigo'] }} - {{ $tab['descricao'] }} ({{ $tab['composition'] }})</h4>
        <p>Parâmetros <i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#3978A7" data-toggle="modal" data-target="#{{ $tab['artigo'] }}"></i></p>
        <p>{{ $params['destino'] }} <strong> {{ 'ICMS: ' . number_format($params['icms']*100,0,'','') }}% </strong> Tingimento: {{ $params['tingimento'] }}</p>
        <br/>
        <div>
        <table>
            <thead>
                <tr>
                    <th>À vista</th>
                    <th>15 dd</th>
                    <th>30 dd</th>
                    <th>45 dd</th>
                    <th>60 dd</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="170px">R$ {{ $tab['custo'][0] }}/kg</td>
                    <td width="170px">R$ {{ $tab['custo'][15] }}/kg</td>
                    <td width="170px">R$ {{ $tab['custo'][30] }}/kg</td>
                    <td width="170px">R$ {{ $tab['custo'][45] }}/kg</td>
                    <td width="170px">R$ {{ $tab['custo'][60] }}/kg</td>
                </tr>
            </tbody>
        </table>
        </div>    
    </div>
</div>
{!! html_entity_decode($tab['explain']) !!}<br>
@endsection