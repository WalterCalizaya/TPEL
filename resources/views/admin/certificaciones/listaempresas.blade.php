@extends('admin.layouts.app')

@section('title')
Empresas certificadoras
@endsection

@section('certificaciones')
active pcoded-trigger
@endsection

@section('empresas')
active
@endsection

@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header">
				<h5>@yield('title')</h5>
				<div class="card-header-right">
					<a href="{{ url('/admin/empresas-certificadoras/create') }}" class="btn waves-effect waves-light btn-primary btn-outline-primary btn-sm"> <i class="icofont icofont-ui-add" style="color:#4680ff;"></i> Agregar empresa certificadora</a>
				</div>
			</div>
			<div class="card-block">

				<div class="table-responsive">
					<table id="tacnatelTable" class="table table-striped table-hover" style="width:100%">
						<thead>
							<tr>
								<th>Empresa certificadora</th>
								<th></th>
								<th class="text-center">Estado</th>
								<th class="text-center">Acciones</th>
							</tr>
						</thead>
						<tbody>
							@if (count($empresas)>0)
							@foreach ($empresas as $empresa)
							<tr>
								<td>{{ $empresa->tipo }}
									<a href="{{ url('/certificaciones/').'/'.$empresa->slug }}" target="_blank">
										<i class="icon feather icon-link-2 f-w-600 f-16 m-r-15" title="Ver en Frontpage"></i>
									</a>
								</td>
								<td><img src="{{ $empresa->imagen ? $empresa->imagen : '/resources/img/default.jpg' }}" class="img-100"></td>

								<td class="text-center">
									@if ($empresa->estado==0)
									<label class="label label-warning">Borrador</label>
									@elseif ($empresa->estado==1)
									<label class="label label-success">Publicado</label>
									@else
									<label class="label label-danger">En papelera</label>
									@endif
								</td>
								<td class="text-center"><a href="{{ url('/admin/empresas-certificadoras/'.$empresa->id.'/edit') }}">
										<i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-blue" title="Editar"></i>
									</a>
								</td>
							</tr>
							@endforeach
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
			// "paging":    false,
			"info":      false,
			// "searching": false,
			"lengthMenu": [[25, 50, -1], [25, 50, "Todos"]],
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
