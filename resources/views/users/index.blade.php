@extends('layouts.app')
@section('content')
<h2 class="page-header">Usuários</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Lista de Usuários <a class="pull-right" href="{{ route('home') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
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
                    <th>UserName</th>
                    <th>Name</th>
                    <th>email</th>
                    <th></th>
                </tr>
              </thead>
              <tbody>
              @foreach($users as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->username }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td><a href="{{ url('users') }}/{{ $value->id }}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:#3978A7"></i></a></td>
                    <td>
                        @if ($value->username !== 'admin') 
                        {!! Btn::delete($value->id, $value->username)!!}
                        @endif
                    </td>
                </tr>
              @endforeach                    
              </tbody>
            </table>
        </div>
        <a href="{{ route('register') }}" class="btn btn-primary" role="button">Novo Usuário</a>
    </div>
</div>
@endsection
