@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Moderar comentarios
@endsection

@section('moderar-comentarios')
    active
@endsection

@section('contenido')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="card">
        <div class="card-header">
            Moderar comentarios
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="entacnaTable" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Usuario</th>
                            <th>Comentario</th>
                            <th>Empresa</th>
                            <th>¿Aprobar?</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($comentarios)>0)
                            @foreach ($comentarios as $comentario)
                                <tr>
                                    <td>
                                        {{ Carbon::parse($comentario->created_at)->format('d/m/Y h:i a') }}
                                    </td>
                                    <td>
                                        @php
                                            $user = $comentario->user()->first();
                                        @endphp
                                        {{ $user->username }}
                                    </td>
                                    <td>
                                        <span>{{ $comentario->comentario }}</span>
                                    </td>
                                    <td>
                                        <a href="{{ url('/'.$comentario->empresa->rubro->categoria->slug.'/'.$comentario->empresa->rubro->slug.'/'.$comentario->empresa->slug) }}" target="_blank">{{ $comentario->empresa->razon_social }}</a>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Seleccione
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#" onclick="estadoModal({{ $comentario->id }},1)" data-toggle="modal" data-target="#eliminarModal"><i class="fa fa-check"></i> Si</a>
                                                <a class="dropdown-item" href="#" onclick="estadoModal({{ $comentario->id }},2)" data-toggle="modal" data-target="#eliminarModal"><i class="fa fa-close"></i> No</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            <div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-dialog-centered modal-warning" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">¡Alto!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="" method="POST" id="form-modal">
                                            <div class="modal-body">
                                                @csrf
                                                <p id="msm"></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger">Sí, Ejecutar</button>
                                                <a class="btn btn-secondary" data-dismiss="modal">No</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Fecha</th>
                            <th>Usuario</th>
                            <th>Comentario</th>
                            <th>Empresa</th>
                            <th>¿Aprobar?</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#entacnaTable').DataTable({
                "language": {
                    "lengthMenu": "Mostrar  _MENU_  registros por página",
                    "zeroRecords": "Ningún registro encontrado",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "Sin registros",
                    "infoFiltered": "(búsqueda realizada en _MAX_  registros)",
                    "search": "Buscar: ",
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Siguiente"
                    }
                },
                "order":[]
            });
        });
        function estadoModal(id,estado){
            var formModal=$("#form-modal");
            var url=location.origin;
            var path='/admin/comentario-aprobar/'+id+'/'+estado
            formModal.attr('action',url+path);
            if(estado==1){
                $("#msm").html('¿Esta seguro que desea aprobar el comentario?');
            }
            else $("#msm").html('Rechazar comentario. ¿Desea continuar?');
        }
    </script>
@endsection