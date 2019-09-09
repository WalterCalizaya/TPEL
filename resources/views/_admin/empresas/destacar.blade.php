@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Listado de Empresas Destacadas
@endsection

@section('destacar-empresa')
    active
@endsection

@section('contenido')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="card">
		<div class="card-header">
			Destacar empresas
		</div>
		<div class="card-body">
			<form action="{{ url('/admin/destacar-empresa') }}" method="post">
				@csrf
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<div class="form-group row">
							<label class="col-md-3 col-form-label" for="rubro_id">Rubro</label>
							<div class="col-md-9">
								<select id="rubro_id" name="rubro_id" class="form-control" required="">
									<option value="">--- Seleccionar---</option>
									@if (count($categorias)>0)
										@foreach ($categorias as $categoria)
											@if (count($categoria->rubros)>0)
												<optgroup label="{{ $categoria->categoria }}">
													@foreach ($categoria->rubros as $rubro)
														<option value="{{ $rubro->id }}">{{ $rubro->rubro }}</option>
													@endforeach
												</optgroup>
											@endif
										@endforeach
									@endif
								</select>
								<span class="help-block">Elije el rubro.</span>
							</div>
						</div>
					</div><!-- /.col-sm-6 -->
					<div class="col-sm-6 col-xs-12">
						<div class="form-group row">
							<label class="col-md-3 col-form-label" for="empresa_id">Empresa</label>
							<div class="col-md-9">
								<select id="empresa_id" name="empresa_id" class="form-control" required="">
									<option value="">--- Seleccionar---</option>
								</select>
								<span class="help-block">Elije la empresa a destacar.</span>
							</div>
						</div>
					</div><!-- /.col-sm-6 col-xs-12 -->

				</div><!-- /.row -->

				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<button type="submit" class="btn btn-primary btn-block">Asignar</button>
					</div>
					<div class="col-sm-6 col-xs-12">
						<button type="reset" class="btn btn-secondary btn-block">Limpiar campos</button>
					</div>
					<br>
					<br>
					<br>
				</div>
			</form>

			<table id="entacnaTable" class="table table-responsive-sm table-hover table-outline mb-0">
				<thead class="thead-light">
					<tr class="text-center">
						<th>Destacado desde</th>
						<th>Rubro</th>
						<th>Empresa</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@if (count($empresas) > 0)
                        @foreach ($empresas as $empresa)
							<tr class="text-center">
								<td>{{ Carbon::parse($empresa->fecha_destacada)->format('d/m/Y') }}</td>
								<td>{{ $empresa->rubro->rubro }}</td>
								<td><a href="{{ url('/'.$empresa->rubro->categoria->slug.'/'.$empresa->rubro->slug.'/'.$empresa->slug) }}" target="_blank">{{ $empresa->razon_social }}</a></td>
								<td>
									<a class="btn btn-danger" href="#" onclick="eliminarModal({{ $empresa->id }})" data-toggle="modal" data-target="#eliminarModal">
										<i class="fa fa-trash-o"></i> Quitar destacada
									</a>
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
	                                        <button type="submit" class="btn btn-danger">Sí, Quitar destacada</button>
	                                        <a class="btn btn-secondary" data-dismiss="modal">No</a>
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


    {{-- <div class="card">
        <div class="card-header">
            Lista de Empresas
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="entacnaTable" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Usuario</th>
                            <th>Empresa</th>
                            <th>Rubro</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($empresas) > 0)
                            @foreach ($empresas as $empresa)
                                <tr>
                                    <td>{{ Carbon::parse($empresa->updated_at)->format('d/m/Y h:i A') }}</td>
                                    <td>
                                        {{ $empresa->user->username }}
                                    </td>
                                    <td>
                                        <a href="#" target="_blank">{{ $empresa->razon_social }}</a>
                                    </td>
                                    <td>
                                        {{ $empresa->rubro->rubro }}
                                    </td>
                                    <td>
                                        @if ($empresa->aprobado==1)
                                            @if ($empresa->banneado==1)
                                                <button type="button" class="btn btn-sm btn-block btn-danger">Eliminado</button>
                                            @else
                                                <button type="button" class="btn btn-sm btn-block btn-success">Publicado</button>
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

                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Fecha</th>
                            <th>Usuario</th>
                            <th>Empresa</th>
                            <th>Rubro</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div> --}}
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
                    },
                    "order":[]
				}
			});
        });
        function eliminarModal(id){
            var formModal=$("#form-modal");
            var url=location.origin;
            // var path=location.pathname
            formModal.attr('action',url+'/admin/destacar-empresa/'+id);
        }

        $("#rubro_id").change(function(event) {
        	if (this.value) {
	        	var route='/admin/obtener-empresa-rubro/'+this.value;
	        	sendRequest(route,null,'GET',function (data,textStatus) {
	        		if (data.status==200) {
	        			debugger;
	        			var objeto=JSON.parse(data.responseText);
	        			$("#empresa_id").html('');
	        			$("#empresa_id").append('<option value="">--- Seleccionar---</option>');
	        			for (var i = 0; i < objeto.length; i++) {
	        				$("#empresa_id").append('<option value="'+objeto[i].id+'">'+objeto[i].razon_social+'</option>');
	        			}
	        		}
	        		else{
	        			alert('error');
	        		}
	        	})
        	}
        	else{
        		$("#empresa_id").html('');
	        	$("#empresa_id").append('<option value="">--- Seleccionar---</option>');
        	}
        });
	</script>
@endsection