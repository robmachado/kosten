<a href="" class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#delete-modal{{ $id }}"></a>

@php $reference = empty($reference) ? '' : $reference; @endphp

<div class="modal fade" id="delete-modal{{ $id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title">É necessária sua Confirmação</h4>
            </div>
            <div class="modal-body">
                <p>Confirma a deleção do Registro {{ $id }} {{ $reference }}?</p>
            </div>
            <div class="modal-footer">
                <form class="hidden" action="{{ url()->current().'/'.$id }}" id="delete-{{ $id }}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Voltar</button>
                <input type="submit" form="delete-{{ $id }}" value="Deletar" class="btn btn-sm btn-danger">
            </div>
        </div>
    </div>
</div>

