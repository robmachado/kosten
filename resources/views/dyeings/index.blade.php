@extends('layouts.app')
@section('content')
<h2 class="page-header">Tingimento</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Processos de Tingimento  <a class="btn btn-default" href="{{ route('home') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
    </div>
    <div class="panel-body" style="width:600px;">
        <div class="">
            <table class="table table-striped" id="thegrid">
              <thead>
                <tr bgcolor="#AAAAAA">
                    <th class="text-center">Id</th>
                    <th class="text-center">Tipo</th>
                    <th class="text-center">Custo</th>
                    <th style="width:5%"></th>
                    <th style="width:5%"></th>
                </tr>
              </thead>
              <tbody>
              @foreach($dyes as $key => $value)
                <tr>
                    <td class="text-center" style="width:10%">{{ $value->id }}</td>
                    <td style="width:60%">{{ $value->class }}</td>
                    <td class="text-right" style="width:20%">R$ {{ number_format($value->value, 2, ',', '.') }}</td>
                    <td style="width:5%">
                        <a href="{{ url('dyeings') }}/{{ $value->id }}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td style="width:5%">
                        <button style="border:none; background:none; width:25px; color:#428bca;" class="glyphicon glyphicon-trash" id="confirm" data-toggle="modal" href="#" data-target="#dyeing.destroy" data-id="{{$value->id}}"></button>
                        <a href="{{ url('dyeings') }}/{{ $value->id }}/delete" onclick="doDelete();"><i class="fa fa-trash-o" aria-hidden="true" style="color:red" onclick="doDelete({{ $value->id }})"></i></i></a>
                    </td>
                </tr>
              @endforeach      
              </tbody>
            </table>
        </div>
        <a href="{{url('dyeings/create')}}" class="btn btn-primary" role="button">Adiciona tingimento</a>
    </div>
    <div id="confirm" class="modal hide fade">
        <div class="modal-body">
            Are you sure?
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
            <button type="button" data-dismiss="modal" class="btn">Cancel</button>
        </div>
    </div>
</div>
@endsection
@section('page-scripts')
    <script type="text/javascript">
        $('#confirm').click(function(event){
            alert("Aqui");
            event.preventDefault();
            var id = $(this).data('id');
        //console.log(id);
        // pass id to appropriate element here	
        });
    </script>
@endsection