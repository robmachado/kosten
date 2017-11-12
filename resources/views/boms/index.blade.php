@extends('layouts.app')
@section('content')
<h2 class="page-header">Produtos</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Produtos (BOM Lista de Materiais) <a class="btn btn-default" href="{{ route('home') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
    </div>
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
                    <td><i class="fa fa-trash-o" aria-hidden="true" style="color:red"></i></td>
                </tr>
              @endforeach                    
              </tbody>
            </table>
        </div>
        <a href="{{url('boms/create')}}" class="btn btn-primary" role="button">Add bom</a>
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
                "ajax": "{{url('boms/grid')}}",
                "columnDefs": [
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/boms') }}/'+row[0]+'">'+data+'</a>';
                        },
                        "targets": 1
                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/boms') }}/'+row[0]+'/edit" class="btn btn-default">Update</a>';
                        },
                        "targets": 14                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="#" onclick="return doDelete('+row[0]+')" class="btn btn-danger">Delete</a>';
                        },
                        "targets": 14+1
                    },
                ]
            });
        });
        function doDelete(id) {
            if(confirm('You really want to delete this record?')) {
               $.ajax({ url: '{{ url('/boms') }}/' + id, type: 'DELETE'}).success(function() {
                theGrid.ajax.reload();
               });
            }
            return false;
        }
    </script>
@endsection