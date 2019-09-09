@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Lista de pedidos
@endsection

@section('membresias')
    open
@endsection

@section('lista-pedidos')
    active
@endsection

@section('contenido')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="card">
        <div class="card-header">
            Lista pedidos
        </div>
        <div class="card-body">
            <a href="{{ url('/admin/agregar-pedido-membresia') }}" class="btn btn-lg btn-info">
                <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Asignar membresía a una empresa
            </a>
            <hr>
            <div class="table-responsive">
                <table id="entacnaTable" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Fecha de compra</th>
                            <th>Membresía</th>
                            <th>Voucher</th>
                            <th>Empresa / Usuario</th>
                            <th>Estado</th>
                            <th>Motivo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($compras) > 0)
                            @foreach ($compras as $compra)
                                <tr>
                                    <td>
                                        Envío: <i> {{ Carbon::parse($compra->created_at)->format('d/m/Y h:i a') }}</i> <br> De alta: <strong>{{ $compra->fecha_inicio ? Carbon::parse($compra->fecha_inicio)->format('d/m/Y') :'Rechazado' }}</strong>
                                    </td>
                                    {{-- <td>
                                        {{ $compra->empresa->user()->first()->username }}
                                    </td> --}}
                                    <td>
                                        {{-- {{ $compra->membresia->duracion >=2 ? ($compra->membresia->duracion == 12 ? '1 Año':($compra->membresia->duracion==24?'2 Años' :($compra->membresia->duracion==36? '3 Años':$compra->membresia->duracion.' Meses'))) : '1 Mes' }} de membresía <br> --}} <span class="badge badge-warning">{{ $compra->membresia->membresia }}</span> <i> S/. {{ $compra->membresia->precio }}</i> <br> Vencimiento: <strong>{{ $compra->fecha_fin ? Carbon::parse($compra->fecha_fin)->format('d/m/Y') : 'Rechazado' }}</strong>
                                    </td>
                                    <td>
                                        @if ($compra->voucher)
                                            <a class="btn btn-sm btn-success" href="{{ $compra->voucher }}" target="_blank">Ver voucher</a>
                                        @else
                                            Sin Voucher
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('/'.$compra->empresa->rubro->categoria->slug.'/'.$compra->empresa->rubro->slug.'/'.$compra->empresa->slug) }}" target="_blank">{{ $compra->empresa->razon_social }}</a> ({{ $compra->empresa->user()->first()->username }})
                                    </td>
                                    <td>
                                        @if($compra->status==1)
                                            <button type="button" class="btn btn-sm btn-block btn-success">Aprobado</button>
                                        @elseif($compra->status==2)
                                            <button type="button" class="btn btn-sm btn-block btn-danger">Rechazado</button>
                                        @else
                                            <button type="button" class="btn btn-sm btn-block btn-secondary">Vencido</button>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($compra->status == 2 && $compra->rechazado==1)
                                            Depósito no recibido
                                        @elseif($compra->asignado==1)
                                            Asignado por administrador
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Fecha de compra</th>
                            <th>Membresía</th>
                            <th>Voucher</th>
                            <th>Empresa / Usuario</th>
                            <th>Estado</th>
                            <th>Motivo</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready( function () {
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
        // function estadoModal(id,estado){
        //     var formModal=$("#form-modal");
        //     var url=location.origin;
        //     var path='/admin/membresia-aprobar/'+id+'/'+estado
        //     formModal.attr('action',url+path);
        //     if(estado==1){
        //         $("#msm").html('¿Esta seguro que desea aprobar membresía?');
        //     }
        //     else $("#msm").html('Rechazar membresía. ¿Desea continuar?');
        // }
    </script>
@endsection