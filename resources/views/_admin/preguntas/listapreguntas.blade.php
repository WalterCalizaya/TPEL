@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Listado de preguntas
@endsection

{{-- @section('membresias')
    open
@endsection --}}

@section('lista-preguntas')
    active
@endsection

@section('contenido')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="card">
        <div class="card-header">
            Listado de preguntas
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="entacnaTable" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Usuario</th>
                            <th>Pregunta</th>
                            <th>Respuesta</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($preguntas)>0)
                            @foreach ($preguntas as $pregunta)
                                <tr>
                                    <td>
                                        {{ Carbon::parse($pregunta->updated_at)->format('d/m/Y h:i a') }}
                                    </td>
                                    <td>
                                        @php
                                            $user = $pregunta->user()->first();
                                        @endphp
                                        {{ $user->username }} preguntó en <a href="{{ url('/'.$pregunta->empresa->rubro->categoria->slug.'/'.$pregunta->empresa->rubro->slug.'/'.$pregunta->empresa->slug) }}" target="_blank">{{ $pregunta->empresa->razon_social }}</a>
                                    </td>
                                    <td>
                                        <span>{{ $pregunta->pregunta }}</span>
                                    </td>
                                    <td>
                                    		@if($pregunta->estado==1)
                                            <span class="badge badge-success">Pregunta aprobada</span>
                                        @elseif($pregunta->estado==2)
                                            <span class="badge badge-danger">Pregunta rechazada</span>
                                        @endif
                                        <span>{{ $pregunta->estado ==1 ? $pregunta->respuesta : '' }}</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Seleccione
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{ url('/admin/modificar-pregunta/'.$pregunta->id) }}"><i class="fa fa-check"></i> Modificar</a>
                                                <a class="dropdown-item" href="#" onclick="estadoModal({{ $pregunta->id }})" data-toggle="modal" data-target="#eliminarModal"><i class="fa fa-close"></i> Eliminar</a>
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
                                                @method('DELETE')
                                                <p id="msm"></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger">Sí, eliminar registro</button>
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
                            <th>Pregunta</th>
                            <th>Respuesta</th>
                            <th>Acciones</th>
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
        function estadoModal(id){
            var formModal=$("#form-modal");
            var url=location.origin;
            var path='/admin/eliminar-pregunta/'+id;
            formModal.attr('action',url+path);
            $("#msm").html('Esta acción no podrá deshacerse. ¿Quieres continuar?');
        }
    </script>
@endsection