@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Lista de comentarios
@endsection

{{-- @section('membresias')
    open
@endsection --}}

@section('lista-comentarios')
    active
@endsection

@section('contenido')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="card">
        <div class="card-header">
            Listado de comentarios
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="entacnaTable" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Usuario</th>
                            <th>Comentó en:</th>
                            <th>Comentario</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($comentarios)>0)
                            @foreach ($comentarios as $comentario)
                                <tr>
                                    <td>
                                        {{ Carbon::parse($comentario->updated_at)->format('d/m/Y h:i a') }}
                                    </td>
                                    <td>
                                        @php
                                            $user = $comentario->user()->first();
                                        @endphp
                                        {{ $user->username }}
                                    </td>
                                    <td>
                                        <a href="{{ url('/'.$comentario->empresa->rubro->categoria->slug.'/'.$comentario->empresa->rubro->slug.'/'.$comentario->empresa->slug) }}" target="_blank">{{ $comentario->empresa->razon_social }}</a>
                                    </td>
                                    <td>
                                        <span>{{ $comentario->comentario }}</span>
                                    </td>
                                    <td>
                                        @if($comentario->estado==1)
                                            <button type="button" class="btn btn-sm btn-block btn-success">Aprobado</button>
                                        @elseif($comentario->estado==2)
                                            <button type="button" class="btn btn-sm btn-block btn-danger">Rechazado</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Fecha</th>
                            <th>Usuario</th>
                            <th>Comentó en:</th>
                            <th>Comentario</th>
                            <th>Estado</th>
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
    </script>
@endsection