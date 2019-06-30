@extends('layouts.app')
@section('content')
<h2 class="page-header">Critérios</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Parâmetros de Calculo  <a class="pull-right" href="{{ route('home') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
    </div>
    <div class="panel-body">
        <div class="">
            <table class="table table-striped" id="thegrid">
              <thead>
                <tr>
                    <th>Id</th>
                    <th>Custo Operacional</th>
                    <th>Custo Financieiro</th>
                    <th>Rateio</th>
                    <th>Lucro</th>
                    <th>Commissão</th>
                    <th>Juros</th>
                    <th>IPI</th>
                    <th>PIS</th>
                    <th>COFINS</th>
                    <th>CSLL</th>
                    <th>IR</th>
                    <th style="width:50px"></th>
                </tr>
              </thead>
              <tbody>
              @foreach($crits as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>R$ {{ $value->operational }}</td>
                    <td>R$ {{ $value->financial }}</td>
                    <td>{{ $value->apportionment }} ton</td>
                    <td>{{ $value->profit }} %</td>
                    <td>{{ $value->commission }} %</td>
                    <td>{{ $value->rate }} %</td>
                    <td>{{ $value->ipi }} %</td>
                    <td>{{ $value->pis }} %</td>
                    <td>{{ $value->cofins }} %</td>
                    <td>{{ $value->csll }} %</td>
                    <td>{{ $value->ir }} %</td>
                    <td><a href="{{ url('criterias') }}/{{ $value->id }}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#3978A7"></i></a></td>
                </tr>
              @endforeach                    
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script type="text/javascript">
    </script>
@endsection