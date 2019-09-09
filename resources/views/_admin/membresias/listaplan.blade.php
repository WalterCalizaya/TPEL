@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Listado de Usuarios
@endsection

@section('membresias')
    open
@endsection

@section('lista-plan')
    active
@endsection

@section('contenido')
		@php
        use Carbon\Carbon;
    @endphp
    <div class="card">
        <div class="card-header">
            Lista de rubros
        </div>
        <div class="card-body">
            <a href="{{ url('/admin/lista-membresia/create') }}" class="btn btn-lg btn-info">
                <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Agregar un nuevo plan
            </a>
            <hr>
            <div class="table-responsive">
                <table id="entacnaTable" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                        		<th>Disponible desde</th>
                            <th>Membresía</th>
                            <th>Precio</th>
                            <th>Estado</th>
                            <th>Empresas</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($membresias) > 0)
                            @foreach ($membresias as $membresia)
                                <tr>
                                		<td>{{ Carbon::parse($membresia->created_at)->format('d/m/Y h:i a') }}</td>
                                    <td><strong>
                                        {{ $membresia->membresia }} <span class="badge badge-primary">( {{ $membresia->duracion >=2 ? ($membresia->duracion == 12 ? '1 Año':($membresia->duracion==24?'2 Años' :($membresia->duracion==36? '3 Años':$membresia->duracion.' Meses'))) : '1 Mes' }})</span><strong>
                                    </td>
                                    <td>
                                        S/. {{ $membresia->precio }} soles
                                    </td>
                                    <td>
                                        @if ($membresia->estado==1)
                                            @if ($membresia->visible==1)
                                                <button type="button" class="btn btn-sm btn-block btn-success">Disponible para todos</button>
                                            @else
                                                <button type="button" class="btn btn-sm btn-block btn-warning">Sólo disponible para el administrador</button>
                                            @endif
                                        @else
                                            <button type="button" class="btn btn-sm btn-block btn-secondary">Plan eliminado</button>
                                        @endif
                                    </td>
                                    <td>
                                        {{ count($membresia->planes) }}
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Acciones
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="{{ url('/admin/lista-membresia/'.$membresia->id.'/edit') }}"><i class="fa fa-edit"></i> Editar</a>
                                                <a class="dropdown-item" href="#" onclick="eliminarModal({{ $membresia->id }})" data-toggle="modal" data-target="#eliminarModal"><i class="fa fa-trash-o"></i> Eliminar</a>
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
                        		<th>Disponible desde</th>
                            <th>Membresía</th>
                            <th>Precio</th>
                            <th>Estado</th>
                            <th>Empresas</th>
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