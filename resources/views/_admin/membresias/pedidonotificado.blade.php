@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Aprobar pedidos
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
            Aprobar pedidos
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="entacnaTable" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Fecha envio</th>
                            <th>Usuario</th>
                            <th>Membresía</th>
                            <th>Voucher</th>
                            <th>Empresa</th>
                            <th>¿Aprobar?</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($compra)
                            <tr>
                                <td>{{ Carbon::parse($compra->created_at)->format('d/m/Y h:i A') }}</td>
                                <td>
                                    {{ $compra->empresa->user()->first()->username }}
                                </td>
                                <td>
                                    {{ $compra->membresia->duracion >=2 ? ($compra->membresia->duracion == 12 ? '1 Año':($compra->membresia->duracion==24?'2 Años' :($compra->membresia->duracion==36? '3 Años':$compra->membresia->duracion.' Meses'))) : '1 Mes' }} de membresía <br> <span class="badge badge-success">{{ $compra->membresia->membresia }}</span> <strong> S/. {{ $compra->membresia->precio }}</strong>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-success" href="{{ $compra->voucher }}" target="_blank">Voucher</a>
                                </td>
                                <td>
                                    <a href="#">{{ $compra->empresa->razon_social }}</a>
                                </td>
                                <td>
                                    @if ($compra->status==0)
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Seleccione
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#" onclick="estadoModal({{ $compra->id }},1)" data-toggle="modal" data-target="#eliminarModal"><i class="fa fa-check"></i> Si</a>
                                                <a class="dropdown-item" href="#" onclick="estadoModal({{ $compra->id }},2)" data-toggle="modal" data-target="#eliminarModal"><i class="fa fa-close"></i> No</a>
                                            </div>
                                        </div>
                                    @elseif($compra->status==1)
                                        <button type="button" class="btn btn-sm btn-block btn-success">Aprobado</button>
                                    @elseif($compra->status==2)
                                        <button type="button" class="btn btn-sm btn-block btn-danger">Rechazado</button>
                                    @else
                                        <button type="button" class="btn btn-sm btn-block btn-secondary">Vencido</button>
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
                            <th>Fecha envio</th>
                            <th>Usuario</th>
                            <th>Membresía</th>
                            <th>Voucher</th>
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
            var path='/admin/membresia-aprobar/'+id+'/'+estado
            formModal.attr('action',url+path);
            if(estado==1){
                $("#msm").html('¿Esta seguro que desea aprobar membresía?');
            }
            else $("#msm").html('Rechazar membresía. ¿Desea continuar?');
        }
    </script>
@endsection