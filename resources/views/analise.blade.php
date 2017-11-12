@extends('layouts.app')
@section('content')
<h2 class="page-header">Preços de Venda</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        Análise de Formação de Preço
    </div>
    <div class="panel-body">
        <form action="{{ route('analise.calcular') }}" method="post" class="form-horizontal">
            {{ csrf_field() }}
            
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="artigo">Artigo</label>
                        <select id="artigo" name="artigo" class="form-control">
                            @foreach($artigos as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="destino">Destino</label>
                        <select id="destino" name="destino" class="form-control">
                            @foreach($destinos as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>    
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" id="tabela" name="tabela" type="checkbox" value="1">
                                    Gerar Tabela com produtos
                            </label>
                        </div>
                    </div>    
                </div>    
            </div>    
            <div class="row">    
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="tingimento">Tingimento</label>
                        <select id="tingimento" name="tingimento" class="form-control">
                            @foreach($dyes as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach       
                        </select>    
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="pagamento">Pagamento</label>
                        <select id="pagamento" name="pagamento" class="form-control">
                            <option value="0">À Vista Antecipado</option>
                            <option value="15">15 dd</option>
                            <option value="30">30 dd</option>
                            <option value="45">45 dd</option>
                            <option value="60">60 dd</option>
                        </select>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-calculator"></i> Calcular
                            </button> 
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <a class="btn btn-default" href="{{ route('home') }}"><i class="glyphicon glyphicon-chevron-left"></i> Voltar</a>
                        </div>
                    </div>
                </div>
            </div>    
        </form>
    </div>
</div>        
@endsection