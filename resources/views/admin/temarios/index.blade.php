@extends('admin.layouts.app')

@section('title')
Temarios
@endsection

@section('temarios')
active
@endsection

@section('content')
@php
    use Carbon\Carbon;
@endphp

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>@yield('title')</h5>
                <div class="card-header-right">
                    <a href="{{ url('/admin/temarios/create') }}" class="btn waves-effect waves-light btn-primary btn-outline-primary btn-sm"> <i class="icofont icofont-ui-add" style="color:#4680ff;"></i> Agregar temario</a>
                </div>
            </div>
            <div class="card-block">

                <div class="table-responsive">
                    <table id="tacnatelTable" class="table table-striped table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Última actualización</th>
                                <th>Temario</th>
                                <th class="text-center">Tipo</th>
                                <th class="text-center">Estado</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($temarios)>0)
                            @foreach ($temarios as $temario)
                            <tr>
                                <td>{{ Carbon::parse($temario->updated_at)->format('d \d\e M Y \a \l\a\s h:i:s a') }}</td>
                                <td>{{ $temario->titulo }}</td>
                                <td>
                                    @switch($temario->tipo_temario)
                                        @case(1)
                                            Curso de certificación
                                            @break
                                        @case(2)
                                            Taller
                                            @break
                                        @case(3)
                                            Seminario
                                            @break
                                        @case(4)
                                            Webinar
                                            @break
                                        @default
                                            No definido
                                            @break
                                    @endswitch

                                </td>
                                <td class="text-center">
                                    @if ($temario->estado==0)
                                    <label class="label label-warning">Borrador</label>
                                    @elseif ($temario->estado==1)
                                    <label class="label label-success">Publicado</label>
                                    @else
                                    <label class="label label-danger">En papelera</label>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ url('/admin/temarios/'.$temario->id.'/edit') }}">
                                        <i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-blue" data-toggle="tooltip" data-placement="left" data-original-title="Editar"></i>
                                    </a>
                                    <a href="#" onclick="eliminarModal({{ $temario->id }})" data-toggle="modal" data-target="#eliminarModal">
                                        <i class="feather icon-trash-2 f-w-600 f-16 text-c-red" data-toggle="tooltip" data-placement="left" data-original-title="Eliminar"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            <div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">¡Alto!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="" method="POST" id="form-modal">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-body">
                                                <p>Esta acción no podrá deshacerse. ¿Quieres continuar?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger btn-round">
                                                    <i class="icofont icofont-ui-delete"></i> Sí, eliminar registro
                                                </button>
                                                <button class="btn btn-outline-primary btn-round" data-dismiss="modal">
                                                    <i class="icofont icofont-circled-left"></i> Cancelar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready( function () {
        $('#tacnatelTable').DataTable({
            "paging":    false,
            "info":      false,
            // "searching": false,
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
    function eliminarModal(id){
        var formModal=$("#form-modal");
        var url=location.origin;
        var path=location.pathname
        formModal.attr('action',url+path+'/'+id);
    }
</script>
@endsection
