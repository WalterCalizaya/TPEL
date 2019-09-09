@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    AdSense
@endsection

@section('adsenses')
    active
@endsection

@section('contenido')
	<div class="row">
        @if (count($adsenses)>0)
            @foreach ($adsenses as $adsense)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Bloque de anuncios
                        </div>
                        <div class="card-body">
                            <form action="#" action="post" id="form-adsense{{ $adsense->id }}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="anuncio-adsense-1">Anuncio<br> {{ $adsense->dimension }}</label>
                                    <div class="col-md-9">
                                        <textarea id="anuncio-adsense-1" name="adsense" rows="9" class="form-control" placeholder="Su código Adsense aquí">{{ $adsense->adsense }}</textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <a class="btn btn-block btn-primary" id="btn-enviar-{{ $adsense->id }}" onclick="enviarAdsense({{ $adsense->id }})">
                                        <i class="fa fa-save"></i> Actualizar
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection

@section('js')
    <script>
		$(document).ready( function () {

        });

        function enviarAdsense(id) {
            var formData=$("#form-adsense"+id).serialize();
            var route='/admin/lista-adsense/'+id;
            $("#btn-enviar-"+id).html('<i class="fa fa-refresh fa-lg fa-spin"></i> Actualizar');
            sendRequest(route,formData,'PUT',function (data,textStatus) {
                $("#btn-enviar-"+id).html('<i class="fa fa-save"></i> Actualizar');
                if (data.status==200) {
                    $("#galeria-"+id).remove();
                    swal({"timer":4000,"title":"Anuncio actualizado correctamente","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"success","position":"bottom-center"});
                }
                else{
                    swal({"timer":4000,"title":"Error","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"error","position":"bottom-center"});
                }
            })
        }
	</script>
@endsection