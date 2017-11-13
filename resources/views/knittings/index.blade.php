@extends('layouts.app')
@section('content')
<h2 class="page-header">Malharia</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Processos de Malharias  <a class="pull-right" href="{{ route('home') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
    </div>
    <div class="panel-body" style="width:600px;">
        <div class="">
            <table class="table table-striped" id="thegrid">
              <thead>
                <tr bgcolor="#AAAAAA">
                    <th>Id</th>
                    <th>Codigo</th>
                    <th>Preço</th>
                    <th style="width:50px"></th>
                    <th style="width:50px"></th>
                </tr>
              </thead>
              <tbody>
              @foreach($knittings as $key => $value)
                <tr>
                    <td class="text-center" style="width:10%">{{ $value->id }}</td>
                    <td style="width:60%">{{ $value->cod }}</td>
                    <td style="width:20%">R$ {{ number_format($value->price, 2, ',', '.') }}</td>
                    <td style="width:5%"><a href="{{ url('knittings') }}/{{ $value->id }}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#3978A7"></i></a></td>
                    <td style="width:5%"><i class="fa fa-trash-o" aria-hidden="true" style="color:red"></i></td>
                </tr>
              @endforeach      
              </tbody>
            </table>
        </div>
        <a href="{{url('knittings/create')}}" class="btn btn-primary" role="button">Adiciona Tipo de Malharia</a>
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
                "ajax": "{{url('knittings/grid')}}",
                "columnDefs": [
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/knittings') }}/'+row[0]+'">'+data+'</a>';
                        },
                        "targets": 1
                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/knittings') }}/'+row[0]+'/edit" class="btn btn-default">Update</a>';
                        },
                        "targets": 5                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="#" onclick="return doDelete('+row[0]+')" class="btn btn-danger">Delete</a>';
                        },
                        "targets": 5+1
                    },
                ]
            });
        });
        function doDelete(id) {
            if(confirm('You really want to delete this record?')) {
               $.ajax({ url: '{{ url('/knittings') }}/' + id, type: 'DELETE'}).success(function() {
                theGrid.ajax.reload();
               });
            }
            return false;
        }
    </script>
@endsection