@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Subcategorías de la sección turística
@endsection

@section('turismo')
    open
@endsection

@section('turismo-subcategorias')
    active
@endsection

@section('contenido')
	@php
    use Carbon\Carbon;
    @endphp
    <div class="card">
        <div class="card-header">
            Lista de subcategorías de la sección turística
        </div>
        <div class="card-body">
            <a href="{{ url('/admin/subcategorias-turismo/create') }}" class="btn btn-lg btn-info">
                <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Agregar nueva subcategoría en la sección turística
            </a>
            <hr>
            <div class="table-responsive">
                <table id="entacnaTable" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Fecha de Registro</th>
                            <th>Subcategoría</th>
                            <th>Categoría</th>
                            <th>Publicaciones</th>
                            <th>Imagen</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($subcategorias)>0)
                            @foreach ($subcategorias as $subcategoria)
                            	<tr>
                            		<td>{{ Carbon::parse($subcategoria->created_at)->format('d/m/Y h:i a') }}</td>
                            		<td><a href="{{ url('/turismo/'.$subcategoria->categoria->slug.'/'.$subcategoria->slug) }}" target="_blank" title="Ver publicaciones de esta subcategoría">{{ $subcategoria->subcategoria }}</a></td>
                            		<td>{{ $subcategoria->categoria->categoria }}</td>
                            		<td>{{ count($subcategoria->turismos) }}</td>
                            		<td><img src="{{ $subcategoria->imagen }}" style="width:200px;" class="img-responsive"></td>
                                    <td>
                                        @if ($subcategoria->estado==1)
                                            <label class="badge badge-success">Activo</label>
                                        @else
                                            <label class="badge badge-danger">Inactivo</label>
                                        @endif
                                    </td>
                            		<td>
        	                            <div class="dropdown">
        	                                <a class="btn btn-sm btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        	                                    Acciones
        	                                </a>
        	                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        	                                    <a class="dropdown-item" href="{{ url('/admin/subcategorias-turismo/'.$subcategoria->id.'/edit') }}"><i class="fa fa-edit"></i> Editar</a>
        	                                    <a class="dropdown-item" href="#" onclick="eliminarModal({{ $subcategoria->id }})" data-toggle="modal" data-target="#eliminarModal"><i class="fa fa-trash-o"></i> Eliminar</a>
        	                                </div>
        	                            </div>

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
                                                @csrf
                                                @method('DELETE')
	                                            <div class="modal-body">
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
                            @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                           	<th>Fecha de Registro</th>
                            <th>Subcategoría</th>
                            <th>Categoría</th>
                            <th>Publicaciones</th>
                            <th>Imagen</th>
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