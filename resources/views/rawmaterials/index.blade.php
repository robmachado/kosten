@extends('layouts.app')
@section('content')
<h2 class="page-header">Materiais</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Fios (Matérias-Primas)  <a class="pull-right" href="{{ route('home') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
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
                    <th>Referencia</th>
                    <th>Valor s/ICMS</th>
                    <th>Valor c/ICMS</th>
                    <th>Cod Fornecedor</th>
                    <th>Descrição</th>
                    <th>Componente Base</th>
                    <th>Cabos</th>
                    <th>Dtex</th>
                    <th>Filamentos</th>
                    <th>Acabamento</th>
                    <th>Atualizado</th>
                    <th style="width:50px"></th>
                    <th style="width:50px"></th>
                </tr>
              </thead>
              <tbody>
              @foreach($raws as $key => $value)
                <tr
                    @if ($value->value >= $value->valueicms) 
                        class="alert-danger"
                    @endif
                    >
                    <td class="text-center">{{ $value->id }}</td>
                    <td>{{ $value->reference }}</td>
                    <td><small>R$ {{ $value->value_formatted }}</small></td>
                    <td><small>R$ {{ $value->valueicms_formatted }}</small></td>
                    <td><small>{{ $value->provider_cod }}</small></td>
                    <td><small>{{ $value->description }}</small></td>
                    <td><small>{{ $value->basecomponent }}</small></td>
                    <td><small>{{ $value->cables }}</small></td>
                    <td><small>{{ $value->dtex }}</small></td>
                    <td><small>{{ $value->filaments }}</small></td>
                    <td><small>{{ $value->finishing }}</small></td>
                    <td><small>{{ $value->updated_at }}</small></td>
                    <td><a href="{{ url('rawmaterials') }}/{{ $value->id }}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#3978A7"></i></a></td>
                    <td>
                        {!! Btn::delete($value->id, $value->reference)!!}
                    </td>
                </tr>
              @endforeach      
              </tbody>
            </table>
        </div>
        <a href="{{url('rawmaterials/create')}}" class="btn btn-primary" role="button">Adiciona FIO</a>
    </div>
</div>
@endsection
