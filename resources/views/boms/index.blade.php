@extends('layouts.app')
@section('content')
<h2 class="page-header">Produtos</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Produtos (BOM Lista de Materiais) <a class="pull-right" href="{{ route('home') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
    </div>
    @if (session()->has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>{{session()->get('success')}}</strong>
    </div>    
    @endif
    <div class="panel-body">
        <div class="">
            <table class="table table-striped" id="thegrid">
              <thead>
                <tr>
                    <th>Id</th>
                    <th>Artigo</th>
                    <th>Descrição</th>
                    <th>Composição</th>
                    <th>Malharia</th>
                    <th>Fio 1</th>
                    <th>%1</th>
                    <th>Fio 2</th>
                    <th>%2</th>
                    <th>Fio 3</th>
                    <th>%3</th>
                    <th>Perdas</th>
                    <th style="width:50px"></th>
                    <th style="width:50px"></th>
                </tr>
              </thead>
              <tbody>
              @foreach($boms as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td class="text-center"><strong>{{ $value->article }}</strong></td>
                    <td>{{ $value->description }}</td>
                    <td><small>{{ $value->composition }}</small></td>
                    <td><small>{{ $value->knittings_cod }}</small></td>
                    <td class="text-center"><small>{{ $value->raw1 }}</small></td>
                    <td class="text-right"><small>{{ $value->perc1 * 100 }}%</small></td>
                    <td class="text-center"><small>{{ $value->raw2 }}</small></td>
                    <td class="text-right"><small>{{ $value->perc2 * 100 }}%</small></td>
                    <td class="text-center"><small>{{ $value->raw3 }}</small></td>
                    <td class="text-right"><small>{{ $value->perc3 * 100 }}%</small></td>
                    <td class="text-right">{{ $value->losses * 100 }}%</td>
                    <td><a href="{{ url('boms') }}/{{ $value->id }}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#3978A7"></i></a></td>
                    <td>
                        {!! Btn::delete($value->id, $value->article)!!}
                    </td>
                </tr>
              @endforeach                    
              </tbody>
            </table>
        </div>
        <a href="{{url('boms/create')}}" class="btn btn-primary" role="button">Add bom</a>
    </div>
</div>
@endsection
