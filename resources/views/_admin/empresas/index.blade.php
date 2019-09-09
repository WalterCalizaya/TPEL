@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Listado de Empresas
@endsection

@section('lista-empresa')
    active
@endsection

{{-- @section('lista-administrador')
    active
@endsection --}}

@section('contenido')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="card">
        <div class="card-header">
            Lista de Empresas
        </div>
        <div class="card-body">
            {{-- <a href="{{ url('/admin/lista-empresa/create') }}" class="btn btn-lg btn-info">
                <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Agregar nueva Empresa
            </a>
            <hr> --}}
            <div class="table-responsive">
                <table id="entacnaTable" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Última actualizacón</th>
                            <th>Empresa / Usuario</th>
                            <th>Rubro</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($empresas) > 0)
                            @foreach ($empresas as $empresa)
                                <tr>
                                    {{-- <td>{{ Carbon::parse($empresa->created_at)->format('d/m/Y h:i:s A') }}</td> --}}
                                    <td>{{ Carbon::parse($empresa->updated_at)->format('d/m/Y h:i a') }}</td>
                                    <td>
                                        <a href="{{ url('/'.$empresa->rubro->categoria->slug.'/'.$empresa->rubro->slug.'/'.$empresa->slug) }}" target="_blank">{{ $empresa->razon_social }}</a> <i>({{ $empresa->user->username }})</i>
                                    </td>
                                    <td>
                                        {{ $empresa->rubro->rubro }}
                                    </td>
                                    <td>
                                    		@if ($empresa->menbresia == 1)
                                    			<span class="badge badge-warning">Empresa premium</span>
                                    		@else
                                    			<span class="badge badge-info">Empresa gratuita</span>
                                    		@endif
                                    </td>
                                    <td>
                                        @if ($empresa->aprobado==1)
                                            @if ($empresa->banneado==1)
                                                <button type="button" class="btn btn-sm btn-block btn-danger">Eliminada</button>
                                            @else
                                                <button type="button" class="btn btn-sm btn-block btn-success">Publicada</button>
                                            @endif
                                        @else
                                            <button type="button" class="btn btn-sm btn-block btn-warning">En moderación</button>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Acciones
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{ url('/admin/lista-empresa/'.$empresa->id.'/edit') }}"><i class="fa fa-edit"></i> Editar</a>
                                                <a class="dropdown-item" href="#" onclick="eliminarModal({{ $empresa->id }})" data-toggle="modal" data-target="#eliminarModal"><i class="fa fa-trash-o"></i> Eliminar</a>
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
                                                <p>Esta acción no podrá deshacerse. ¿Quieres continuar?</p>
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
                            <th>Última actualizacón</th>
                            <th>Empresa / Usuario</th>
                            <th>Rubro</th>
                            <th>Tipo</th>
                            <th>Estado</th>
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
        function eliminarModal(id){
            var formModal=$("#form-modal");
            var url=location.origin;
            var path=location.pathname
            formModal.attr('action',url+path+'/'+id);
        }
	</script>
@endsection