@extends('layouts.app')
@section('content')
<h2 class="page-header">Análise de Preço de Venda</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4> {{ $tab['artigo'] }} - {{ $tab['descricao'] }} ({{ $tab['composition'] }})</h4>
        <p>Parâmetros <i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#3978A7" data-toggle="modal" data-target="#{{ $tab['artigo'] }}"></i></p>
        <p><strong>FOB</strong> (gde SP) <strong>{{ $params['destino'] }}</strong> <strong> {{ 'ICMS: ' . number_format($params['icms']*100,0,'','') }}% </strong> Tingimento: <strong>{{ $params['tingimento'] }}</strong> Embalagem: <strong>{{ $params['embalagem'] }}</strong></p>
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
                    <td width="170px">R$ {{ number_format($tab['custo'][0],2,',','') }}/kg</td>
                    <td width="170px">R$ {{ number_format($tab['custo'][15],2,',','') }}/kg</td>
                    <td width="170px">R$ {{ number_format($tab['custo'][30],2,',','') }}/kg</td>
                    <td width="170px">R$ {{ number_format($tab['custo'][45],2,',','') }}/kg</td>
                    <td width="170px">R$ {{ number_format($tab['custo'][60],2,',','') }}/kg</td>
                </tr>
            </tbody>
        </table>
        </div>    
    </div>
</div>
    <br/>
    <div>
        <form>
            <input type="hidden" name="custoprod" id="custoprod" value="{{ $params['custoprod'] }}">
            <input type="hidden" name="markup" id="markup" value="{{ $params['markup'] }}">
            <div class="col-sm-4">
                <label for="preco" class="control-label">Preço de Referência <i>(digite e tecle ENTER)</i></label>
                <input type="text" name="preco" id="preco" class="form-control" value="" placeholder="digite valor sugerido e tecle ENTER" onkeypress="return onEnter(event)">
            </div>
            <div class="col-sm-4">
                <label for="margem" class="control-label" id="lblMargem">Margem Real (%)</label>
                <input type="text" name="margem" id="margem" class="form-control" value="" readonly>
            </div>
            <div class="col-sm-4">
                <label for="desconto" class="control-label" id="lblMargem">Desonto (%)</label>
                <input type="text" name="desconto" id="desconto" class="form-control" value="" readonly>
            </div>
        </form>
    </div>    

{!! html_entity_decode($tab['explain']) !!}<br>
@endsection
@section('page-scripts')
<script>
    var fntS = document.getElementById("margem").style.fontSize;
    var lblC = document.getElementById('lblMargem').style.color;
    
    function onEnter(e) {
        if (e.which == 13 || e.keyCode == 13) {
            calc();
            return false;
        }
        return true;
    }
    
    function calc() {
        var custoprod = document.getElementById('custoprod').value;
        var markup = document.getElementById('markup').value;
        var preco = document.getElementById('preco').value;
        var impostos = markup-0.1;
        custoprod = Math.round(custoprod * 100) / 100
        var tabela = custoprod/(1-markup);
        var margem = 0;
        var desconto = 0;
        var valorliquido = 0;
        tabela = Math.round(tabela * 100) / 100
        preco = preco.replace(",", ".");
        valorliquido = preco * (1-impostos);
        margem = (valorliquido - custoprod)/preco * 100; 
        desconto = ((tabela-preco)/tabela) * 100;
        if (margem > 0) {
            document.getElementById('lblMargem').innerHTML = "Margem Real Real (%)"
            document.getElementById('lblMargem').style.color = lblC;
            document.getElementById("margem").style.color = 'blue';
            document.getElementById("margem").style.fontSize = fntS;
        } else {
            document.getElementById('lblMargem').innerHTML = "Prejuizo Real (%)"
            document.getElementById('lblMargem').style.color = 'red';
            document.getElementById("margem").style.color = 'red';
            document.getElementById("margem").style.fontSize = '24px';
        }
        document.getElementById('margem').value = margem.toFixed(2);
        document.getElementById('desconto').value = desconto.toFixed(2);
    }
</script>
@endsection