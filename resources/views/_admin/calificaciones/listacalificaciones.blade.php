@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Listado de calificaciones
@endsection

{{-- @section('membresias')
    open
@endsection --}}

@section('lista-califi')
    active
@endsection

@section('contenido')
    @php
        use Carbon\Carbon;
    @endphp
    <div class="card">
        <div class="card-header">
            Listado de calificaciones
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
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($calificaciones)>0)
                            @foreach ($calificaciones as $calificacion)
                                <tr>
                                    <td>
                                        {{ Carbon::parse($calificacion->updated_at)->format('d/m/Y h:i A') }}
                                    </td>
                                    <td>
                                    	@php
                                            $user = $calificacion->user()->first();
                                        @endphp
                                    	{{ $user->username }}
                                        {{--
                                        @if ($user->id==2)
		                                    	<strong>{{ $user->username }}</strong> <span class="badge badge-danger">(Super Administrador)</span>
		                                    @else
		                                    	@switch($user->tipo)
		                                    	    @case($user->tipo==1)
		                                    	        <strong>{{ $user->username }}</strong> <span class="badge badge-danger">(Administrador)</span>
		                                    	    @break
		                                    	    @case($user->tipo==2)
		                                    	        <strong>{{ $user->username }}</strong> <span class="badge badge-warning">(Usuario normal)</span>
		                                    	    @break
		                                    	    @case($user->tipo==3)
		                                    	    		<strong>{{ $user->username }}</strong> <span class="badge badge-success">(Empresa: {{ $user->empresa->razon_social }} )</span>
		                                    	    @break
		                                    	    @default
		                                    	        <strong>{{ $user->username }}</strong> <span class="badge badge-info">(No definido)</span>
		                                    	@endswitch
		                                    @endif --}}
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
                                        @if($calificacion->estado==1)
                                            <button type="button" class="btn btn-sm btn-block btn-success">Calificación aprobada</button>
                                        @elseif($calificacion->estado==2)
                                            <button type="button" class="btn btn-sm btn-block btn-danger">Calificación rechazada</button>
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
                            <th>Calificación</th>
                            <th>Empresa</th>
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