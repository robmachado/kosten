@extends('layouts.app')
@section('content')
<h2 class="page-header">Materiais</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Fios (Matérias-Primas)  <a class="btn btn-default" href="{{ route('home') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
    </div>
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
                    <th style="width:50px"></th>
                    <th style="width:50px"></th>
                </tr>
              </thead>
              <tbody>
              @foreach($raws as $key => $value)
                <tr>
                    <td class="text-center">{{ $value->id }}</td>
                    <td>{{ $value->reference }}</td>
                    <td>R$ {{ number_format($value->value, 2, ',', '.') }}</td>
                    <td>R$ {{ number_format($value->valueicms, 2, ',', '.') }}</td>
                    <td>{{ $value->provider_cod }}</td>
                    <td>{{ $value->description }}</td>
                    <td>{{ $value->basecomponent }}</td>
                    <td>{{ $value->cables }}</td>
                    <td>{{ $value->dtex }}</td>
                    <td>{{ $value->filaments }}</td>
                    <td>{{ $value->finishing }}</td>
                    <td><a href="{{ url('rawmaterials') }}/{{ $value->id }}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#3978A7"></i></a></td>
                    <td><i class="fa fa-trash-o" aria-hidden="true" style="color:red"></i></td>
                </tr>
              @endforeach      
              </tbody>
            </table>
        </div>
        <a href="{{url('rawmaterials/create')}}" class="btn btn-primary" role="button">Adiciona FIO</a>
    </div>
</div>
@endsection
@section('scripts')
    <script type="text/javascript">
        var theGrid = null;
        $(document).ready(function(){
            theGrid = $('#thegrid').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "responsive": true,
                "ajax": "{{url('rawmaterials/grid')}}",
                "columnDefs": [
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/rawmaterials') }}/'+row[0]+'">'+data+'</a>';
                        },
                        "targets": 1
                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/rawmaterials') }}/'+row[0]+'/edit" class="btn btn-default">Update</a>';
                        },
                        "targets": 13                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="#" onclick="return doDelete('+row[0]+')" class="btn btn-danger">Delete</a>';
                        },
                        "targets": 13+1
                    },
                ]
            });
        });
        function doDelete(id) {
            if(confirm('You really want to delete this record?')) {
               $.ajax({ url: '{{ url('/rawmaterials') }}/' + id, type: 'DELETE'}).success(function() {
                theGrid.ajax.reload();
               });
            }
            return false;
        }
    </script>
@endsection