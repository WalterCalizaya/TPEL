@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Moderar calificación
@endsection

{{-- @section('membresias')
    open
@endsection

@section('aprobar-pedidos')
    active
@endsection --}}

@section('contenido')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="card">
        <div class="card-header">
            Moderar calificación
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="entacnaTable" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Usuario</th>
                            <th>Calificación</th>
                            <th>Empresa</th>
                            <th>¿Aprobar?</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($calificacion)
                            <tr>
                                <td>
                                    {{ Carbon::parse($calificacion->created_at)->format('d/m/Y h:i a') }}
                                </td>
                                <td>
                                    @php
                                        $user = $calificacion->user()->first();
                                    @endphp
                                	{{ $user->username }}
                                </td>
                                <td>
                                    <i class="fa fa-star" style="font-size:24px; {{ $calificacion->estrella_id >= 1 ? 'color: orange' : '' }}"></i>
                                    <i class="fa fa-star" style="font-size:24px; {{ $calificacion->estrella_id >= 2 ? 'color: orange' : '' }}"></i>
                                    <i class="fa fa-star" style="font-size:24px; {{ $calificacion->estrella_id >= 3 ? 'color: orange' : '' }}"></i>
                                    <i class="fa fa-star" style="font-size:24px; {{ $calificacion->estrella_id >= 4 ? 'color: orange' : '' }}"></i>
                                    <i class="fa fa-star" style="font-size:24px; {{ $calificacion->estrella_id == 5 ? 'color: orange' : '' }}"></i>
                                </td>
                                <td>
                                    <a href="{{ url('/'.$calificacion->empresa->rubro->categoria->slug.'/'.$calificacion->empresa->rubro->slug.'/'.$calificacion->empresa->slug) }}" target="_blank">{{ $calificacion->empresa->razon_social }}</a>
                                </td>
                                <td>
                                    @if ($calificacion->estado==0)
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Seleccione
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#" onclick="estadoModal({{ $calificacion->id }},1)" data-toggle="modal" data-target="#eliminarModal"><i class="fa fa-check"></i> Si</a>
                                                <a class="dropdown-item" href="#" onclick="estadoModal({{ $calificacion->id }},2)" data-toggle="modal" data-target="#eliminarModal"><i class="fa fa-close"></i> No</a>
                                            </div>
                                        </div>
                                    @elseif($calificacion->estado==1)
                                        <button type="button" class="btn btn-sm btn-block btn-success">Aprobado</button>
                                    @elseif($calificacion->estado==2)
                                        <button type="button" class="btn btn-sm btn-block btn-danger">Rechazado</button>
                                    @endif
                                </td>
                            </tr>
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
                            <th>Calificación</th>
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

        });
        function estadoModal(id,estado){
            var formModal=$("#form-modal");
            var url=location.origin;
            var path='/admin/calificacion-aprobar/'+id+'/'+estado
            formModal.attr('action',url+path);
            if(estado==1){
                $("#msm").html('¿Esta seguro que desea aprobar la calificación?');
            }
            else $("#msm").html('Rechazar calificación. ¿Desea continuar?');
        }
    </script>
@endsection