@extends('admin.layouts.app')

@section('css')

@endsection

@section('title')
    Modificar Empresa
@endsection

@section('contenido')
    @php
        use Carbon\Carbon;
    @endphp
    <form action="{{ url('/admin/lista-empresa/'.$empresa->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Información básica
                    </div>
                    <div class="card-body">
                        <div class="form-horizontal col-sm-8 offset-sm-2">
                            <h2>Estás editando la empresa: <strong>{{ $empresa->razon_social }}</strong></h2>
                            <br>
                            {{-- <div class="form-group row">
                                <label class="col-md-3 col-form-label">Tipo de empresa</label>
                                <div class="col-md-9 col-form-label">
                                    <div class="form-check form-check-inline mr-1">
                                        <input class="form-check-input" type="radio" id="menbresia" value="0" {{ $empresa->menbresia==0 ? 'checked' : '' }} name="menbresia" required="">
                                        <label class="form-check-label" for="menbresia">Empresa gratuita</label>
                                    </div>
                                    <div class="form-check form-check-inline mr-1">
                                        <input class="form-check-input" type="radio" id="menbresia2" value="1" {{ $empresa->menbresia==1 ? 'checked' : '' }} name="menbresia" required="">
                                        <label class="form-check-label" for="activo2">Empresa premiun</label>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="razon_comercial">
                                		Nombre comercial <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control {{ $errors->has('razon_comercial') ? ' is-invalid' : '' }}" id="razon_comercial" name="razon_comercial" value="{{ $empresa->razon_comercial }}" required placeholder="Ingrese el nombre comercial o corto de la empresa">
                                    @if ($errors->has('razon_comercial'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('razon_comercial') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row" id="razon_social_div">
                                <label class="col-md-3 col-form-label" for="razon_social">
                                		Razón Social <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control {{ $errors->has('razon_social') ? ' is-invalid' : '' }}" value="{{ $empresa->razon_social }}" id="razon_social" name="razon_social" required>
                                    @if ($errors->has('razon_social'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('razon_social') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="ruc">
                                		RUC/DNI <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control {{ $errors->has('ruc') ? ' is-invalid' : '' }}" value="{{ $empresa->ruc }}" id="ruc" name="ruc" required>
                                    @if ($errors->has('ruc'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('ruc') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="categoria_id">
                                		Categoría <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    @php
                                        $er=$errors->has('categoria_id') ? ' is-invalid' : '';
                                    @endphp
                                    {!! Form::select('categoria_id',$categorias,$cat,["class"=>"form-control select2 ".$er,"required"=>"","id"=>"categoria_id"]) !!}
                                    @if ($errors->has('categoria_id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('categoria_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="rubro_id">
                                		Rubro <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    @php
                                        $er=$errors->has('rubro_id') ? ' is-invalid' : '';
                                    @endphp
                                    {!! Form::select('rubro_id',$rubros,$empresa->rubro_id,["class"=>"form-control select2 ".$er,"required"=>"","id"=>"rubro_id"]) !!}
                                    @if ($errors->has('rubro_id'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('rubro_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="perfil">
                                		Imagen de perfil <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="file" id="perfil" name="perfil" class="form-control file" accept=".jpg, .png, .jpeg">
                                    <br>
                                    <span class="help-block">Una imagen que será mostrada en el perfil de la empresa. <i style="color: red;">Se recomienda el tamaño 550px x 500px</i></span>
                                    <br><br>
                                    <h6>Previsualización:</h6><img id="img-perfil" src="{{ $empresa->perfil ? $empresa->perfil : '/assets/img/avatars/img.jpg' }}" style="width:305px; height:277px;" alt="Previsualización" class="img-responsive">
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="portada">
                                		Imagen de portada <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="file" id="portada" name="portada" class="form-control file" accept=".jpg, .png, .jpeg">
                                    <br>
                                    <span class="help-block">Una imagen que será mostrada en el perfil empresarial. <i style="color: red;">Se recomienda el tamaño 1200px x 600px</i></span>
                                    <br><br>
                                    <h6>Previsualización:</h6><img id="img-portada" src="{{ $empresa->portada ? $empresa->portada : '/assets/img/avatars/img.jpg' }}" style="width:400px; height: 200px;" alt="Previsualización" class="img-responsive">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="url">Contacto (URL)</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="url" name="url">
                                    <span class="help-block">Ej: https://entacna.org/contacto <i style="color: red;">No e-mail, no teléfono</i>.</span>
                                </div>
                            </div>

                            <hr>

                            <h5>Redes sociales</h5>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="facebook">
                                			Facebook <span class="pull-right text-danger">(*)</span>
                              		</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control {{ $errors->has('facebook') ? ' is-invalid' : '' }}" value="{{ $empresa->facebook }}" id="facebook" name="facebook" required>
                                    @if ($errors->has('facebook'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('facebook') }}</strong>
                                        </span>
                                    @endif
                                    <span class="help-block">Ej: https://www.facebook.com/EnTacna</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="twitter">Twitter</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{ $empresa->twitter }}" id="twitter" name="twitter">
                                    <span class="help-block">Ej: https://www.twitter.com/EnTacna</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="instagram">Instagram</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{ $empresa->instagram }}" id="instagram" name="instagram">
                                    <span class="help-block">Ej: https://www.instagram.com/EnTacna</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="youtube">Youtube</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{ $empresa->youtube }}" id="youtube" name="youtube">
                                    <span class="help-block">Ej: https://www.youtube.com/EnTacna</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="google">Google</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{ $empresa->google }}" id="google" name="google">
                                    <span class="help-block">Ej: https://www.google-plus.com/EnTacna</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        Información de la empresa
                    </div>
                    <div class="card-body">
                        <div class="form-horizontal col-sm-8 offset-sm-2">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="inicio">
                                			Hora de apertura <span class="pull-right text-danger">(*)</span>
                              		</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control {{ $errors->has('inicio') ? ' is-invalid' : '' }}" value="{{ $empresa->inicio }}" id="inicio" name="inicio" required>
                                    @if ($errors->has('inicio'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('inicio') }}</strong>
                                        </span>
                                    @endif
                                    <span class="help-block">Ej: 9:00 hrs</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="fin">
                                			Hora de cierre <span class="pull-right text-danger">(*)</span>
                              		</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control {{ $errors->has('fin') ? ' is-invalid' : '' }}" value="{{ $empresa->fin }}" id="fin" name="fin" required>
                                    @if ($errors->has('fin'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('fin') }}</strong>
                                        </span>
                                    @endif
                                    <span class="help-block">Ej: 17:00 hrs</span>
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="fundacion">Se fundó</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control {{ $errors->has('fundacion') ? ' is-invalid' : '' }}" value="{{ $empresa->fundacion }}" id="fundacion" name="fundacion">
                                    @if ($errors->has('fundacion'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('fundacion') }}</strong>
                                        </span>
                                    @endif
                                    <span class="help-block">Ej: 20/02/2010</span>
                                </div>
                            </div> --}}

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="pais">
                                			País <span class="pull-right text-danger">(*)</span>
                              		</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control {{ $errors->has('pais') ? ' is-invalid' : '' }}" value="{{ $empresa->pais }}" id="pais" name="pais" required>
                                    @if ($errors->has('pais'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('pais') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="ciudad">
                                		Ciudad <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{ $empresa->ciudad }}" id="ciudad" name="ciudad">
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="mision">Misión</label>
                                <div class="col-md-9">
                                    <textarea id="mision" name="mision" rows="3" class="form-control {{ $errors->has('mision') ? ' is-invalid' : '' }}">{{ $empresa->mision }}</textarea>
                                    @if ($errors->has('mision'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('mision') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="vision">Visión</label>
                                <div class="col-md-9">
                                    <textarea id="vision" name="vision" rows="3" class="form-control {{ $errors->has('vision') ? ' is-invalid' : '' }}">{{ $empresa->vision }}</textarea>
                                    @if ($errors->has('vision'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('vision') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div> --}}

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="fijo">
                                		Celular/Teléfono <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control {{ $errors->has('fijo') ? ' is-invalid' : '' }}" value="{{ $empresa->fijo }}" id="fijo" name="fijo" required>
                                    @if ($errors->has('fijo'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('fijo') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="fijo2">
                                		Teléfono alternativo <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" value="{{ $empresa->fijo2 }}" id="fijo2" name="fijo2">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="direccion">
                                		Dirección <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control {{ $errors->has('direccion') ? ' is-invalid' : '' }}" value="{{ $empresa->direccion }}" id="direccion" name="direccion" required>
                                    @if ($errors->has('direccion'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('direccion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="descripcion">
                                		Descripción <span class="pull-right text-danger">(*)</span>
                              	</label>
                                <div class="col-md-9">
                                    <textarea id="descripcion" name="descripcion" rows="6" class="form-control {{ $errors->has('descripcion') ? ' is-invalid' : '' }}" required>{{ $empresa->descripcion }}</textarea>
                                    @if ($errors->has('descripcion'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('descripcion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            @if ($empresa->menbresia==1)
                                <div class="row form-group">
                                    <label class="col-md-3 col-form-label" for="en_oferta">
                                        ¿Incluir oferta?
                                    </label>
                                    <div class="col-md-9">
                                        <input type="checkbox" name="en_oferta" id="en_oferta" {{ $empresa->ofertas->where('estado',1)->first() ? 'checked' : '' }} value="{{ $empresa->en_oferta }}" class="form-check-input" style="transform: scale(1.5); margin-top:15px;">
                                        <label for="en_oferta" style="margin-top: 10px;"><i>Selecciona esta opción para crear una oferta/promoción en tu empresa.</i></label>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @if ($empresa->menbresia==1)
                @php
                    $objeto=$empresa->ofertas->where('estado',1)->first();
                @endphp
                <div class="col-md-12 {{ $empresa->en_oferta==0 ? 'd-none' : '' }}" id="enoferta">
                    <div class="card">
                        <div class="card-header">
                            Oferta
                        </div>
                        <div class="card-body">
                            <div class="form-horizontal col-sm-8 offset-sm-2">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="oferta">Nombre de la oferta</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{ $objeto ? $objeto->oferta : '' }}" id="oferta" name="oferta" {{ $empresa->en_oferta==1 ? 'required' : '' }}>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="valor">Descuento</label>
                                    <div class="col-md-9">
                                        <span>0%</span>
                                        <input id="valor" name="valor" value="{{ $objeto ? $objeto->valor : '' }}" {{ $empresa->en_oferta==1 ? 'required' : '' }} data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="{{ $objeto ? $objeto->valor : '' }}"/>
                                        <span>100%</span>
                                        <div style="width: 252px">
                                            <span style="margin-left: 10px;"></span>
                                            <span id="valor-span" style="margin-left: {{ $objeto ? ($objeto->valor>=35 ? ($objeto->valor-18) : $objeto->valor) : '0' }}%">{{ $objeto ? $objeto->valor : '0' }}%</span><br />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="finalizacion">La oferta vence el</label>
                                    <div class="col-md-9">
                                        <input type="date" class="form-control" {{ $empresa->en_oferta==1 ? 'required' : '' }} value="{{ $objeto ? $objeto->finalizacion : Carbon::now()->format('Y-m-d') }}" min="{{ Carbon::now()->format('Y-m-d') }}" id="finalizacion" name="finalizacion">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="descripcion_">Descripción</label>
                                    <div class="col-md-9">
                                        <textarea id="descripcion_" name="descripcion_" rows="6" {{ $empresa->en_oferta==1 ? 'required' : '' }} class="form-control">{{ $objeto ? $objeto->descripcion_ : '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Ubicación
                        </div>
                        <div class="card-body">
                            <div class="form-horizontal">

                                <h4>Elija la ubicación de su empresa en el mapa</h4>

                                <div class="form-group col-md-8 offset-md-2 row">
                                    <label class="col-md-3 col-form-label" for="latitud">Latitud: </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="text" value="{{ $empresa->latitud }}" id="latitud" name="latitud" class="form-control" readonly/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-8 offset-md-2 row">
                                    <label class="col-md-3 col-form-label" for="longitud">Longitud: </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="text" value="{{ $empresa->longetud }}" id="longitud" name="longitud" class="form-control" readonly/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div id="mapa"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="col-md-12">
                <div class="row">
                    <div class="form-actions col-sm-6">
                        <button type="submit" class="btn btn-block btn-primary">Modificar</button>
                        <br>
                    </div>
                    <div class="form-actions col-sm-6">
                        <button type="reset" class="btn btn-block btn-secondary">Limpiar campos</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <hr>
    <br>
    @if ($empresa->menbresia==1)
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Servicios de la empresa
                    </div>
                    <div class="card-body">
                        <div class="form-horizontal">

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="servicio">Añadir servicio</label>
                                <div class="col-md-9">
                                    <form id="form-servicio" onsubmit="return false">
                                        @csrf
                                        <div class="input-group">
                                            <input type="text" id="servicio" name="servicio" class="form-control">
                                            <span class="input-group-append">
                                                <button type="button" id="btn-servicio" class="btn btn-primary">Añadir</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-12">
                                    <div>
                                        <ul class="service-list">
                                            @if(count($servicios)>0)
                                                @foreach ($servicios as $servicio)
                                                    <li id="list-{{ $servicio->id }}">{{ $servicio->servicio }} <span class="delete-service" onclick="deleteServicio({{ $servicio->id }})" style="cursor:pointer" ><i class="fa fa-times-circle"></i></span></li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Galería de imágenes
                    </div>
                    <div class="card-body">
                        <div class="form-horizontal">
                            <form id="form-galeria" onsubmit="return false" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group col-md-12 row">
                                    <label class="col-md-3 col-form-label" for="titulo">Titulo: </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="text" id="titulo" name="titulo" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 row">
                                    <label class="col-md-3 col-form-label" for="imagen">Añadir imagen: </label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="imagen" name="imagen" class="form-control" accept=".png, .jpg, .jpeg"/>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="form-group col-md-12 row">
                                <button type="button" class="btn btn-sm btn-primary btn-block" id="btn-galeria">Publicar</button>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="img-galeria">
                                        <div class="row galeria-add">
                                            @if (count($galerias)>0)
                                                @foreach ($galerias as $galeria)
                                                    <div class="col-xs-3" id="galeria-{{ $galeria->id }}">
                                                        <center>
                                                            <img src="{{ $galeria->imagen }}" title="{{ $galeria->titulo }}">
                                                            <button class="btn btn-eliminar" id="btn-eliminar-galeria-{{ $galeria->id }}" onclick="deleteGaleria({{ $galeria->id }})">Eliminar</button>
                                                        </center>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection

@section('js')
    <script>
        var latitud = parseFloat(document.getElementById('latitud').value);
        var longitud = parseFloat(document.getElementById('longitud').value);

        if (isNaN(latitud)) { latitud = {{ $empresa->latitud ? $empresa->latitud : -18.013688 }};}
        if (isNaN(longitud)) { longitud = {{ $empresa->longetud ? $empresa->longetud : -70.250805 }};}

        //console.log(latitud);

        function initMap() {
            var latLng = {
                lat: latitud,
                lng: longitud
            }

            var styles = [{
				featureType: "poi",
				elementType: "labels",
				stylers: [{ visibility: "off" }]
			}];

			var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

            var map = new google.maps.Map(document.getElementById('mapa'), {
                center: latLng,
                zoom: 17
            });

            map.mapTypes.set('map_style', styledMap);
			map.setMapTypeId('map_style');

            var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                icon: '{{ url('/assets/img/defecto.png') }}',
            });

            marker.addListener('click', toggleBounce);
            marker.addListener( 'dragend', function (event){
                document.getElementById("latitud").value = this.getPosition().lat();
                document.getElementById("longitud").value = this.getPosition().lng();
            });
        }

        function toggleBounce() {
            if (marker.getAnimation() !== null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAin7CPd7GEi2ZxrEOAAuF1eH3iI2gF4tk&callback=initMap"></script>

    <script>
        $("#valor").slider({
            tooltip: 'always'
        });

        $("#valor").change(function(event) {
            $("#valor-span").html(event.value.newValue+'%');
            if (event.value.newValue>=35) var size=event.value.newValue-18;
            else var size=event.value.newValue;
            $("#valor-span").css('margin-left', size+'%');
        });

        $("#en_oferta").change(function(event) {
            if (this.value==0) {
                $(this).prop('checked', true);
                this.value=1;
                $("#enoferta").removeClass('d-none');
                $("#enoferta").find('input,textarea').each(function(a,b){
                    $(this).attr('required',true);
                });
            }
            else{
                $(this).prop('checked', false);
                this.value=0;
                $("#enoferta").addClass('d-none');
                $("#enoferta").find('input,textarea').each(function(a,b){
                    $(this).attr('required',false);
                });
            }
        });

        $( ".select2" ).select2({
            theme: "bootstrap4"
        });
        $("#descripcion").hashtags();
        $(document).ready(function () {
            //rubros por categoria
            $("#categoria_id").change(function(){
                changeCategoria(this);
            });
            $("#btn-servicio").click(function(){
                agregarServicio();
            });
            $('#servicio').keyup(function(e) {
                if(e.keyCode == 13) {
                    agregarServicio();
                }
            });
            $("#btn-galeria").click(function(){
                agregarGaleria();
            });
        });

        function agregarGaleria(){
            if($("#titulo").val() && $("#imagen").val()){
                var form=$("#form-galeria");
                var formData  = new FormData(form[0]);
                var id=location.pathname.split('/')[3];
                var route='/admin/agregar-galeria-empresa/'+id;
                $("#btn-galeria").html('<i class="fa fa-refresh fa-lg fa-spin" aria-hidden="true"></i> Publicando');
                sendRequestFile(route,formData,'POST',function(data,textStatus){
                    form[0].reset();
                    $("#btn-galeria").html('Publicar');
                    if(data.status==201){
                        var objeto=JSON.parse(data.responseText);
                        var img='<div class="col-xs-3" id="galeria-'+objeto.id+'">'+
                                    '<center>'+
                                        '<img src="'+objeto.imagen+'" title="'+objeto.titulo+'">'+
                                        '<button class="btn btn-eliminar" id="btn-eliminar-galeria-'+objeto.id+'" onclick="deleteGaleria('+objeto.id+')">Eliminar</button>'+
                                    '</center>'+
                                '</div>';
                        $(".galeria-add").prepend(img);
                        swal({"timer":4000,"title":"La imagen se agregó a la galería satisfactoriamente","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"success","position":"bottom-center"});
                    }
                    else alert('error!')
                });
            }
            else{
                swal({"timer":4000,"title":"Ingrese titulo y seleccione imagen para publicar la galería","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"warning","position":"bottom-center"});
            }
        }

        function deleteGaleria(id){
            var token=$("#form-galeria").find('input[name=_token]').val();
            var route='/admin/eliminar-galeria-empresa/'+id;
            $("#btn-eliminar-galeria-"+id).html('<i class="fa fa-refresh fa-lg fa-spin" aria-hidden="true"></i> Eliminando');
            sendRequest(route,'_token='+token,'DELETE',function(data,textStatus){
                $("#btn-eliminar-galeria-"+id).html('Eliminar');
                if(data.status==200){
                    $("#galeria-"+id).remove();
                    swal({"timer":4000,"title":"La imagen se eliminó de la galería satisfactoriamente","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"success","position":"bottom-center"});
                }
                else alert('error!')
            });
        }

        function agregarServicio(){
            if($("#servicio").val()){
                var form=$("#form-servicio");
                var id=location.pathname.split('/')[3];
                var route='/admin/agregar-servicio-empresa/'+id;
                var formData=form.serialize();
                sendRequest(route,formData,'POST',function(data,textStatus){
                    form[0].reset();
                    if(data.status==201){
                        var objeto=JSON.parse(data.responseText);
                        $(".service-list").prepend('<li id="list-'+objeto.id+'">'+objeto.servicio+' <span class="delete-service" onclick="deleteServicio('+objeto.id+')" style="cursor:pointer"><i class="fa fa-times-circle"></i></span></li>');
                        swal({"timer":4000,"title":"El servicio se agregó satisfactoriamente","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"success","position":"bottom-center"});
                    }
                    else alert('error!')
                });
            }
        }

        function deleteServicio(id){
            var token=$("#form-servicio").find('input[name=_token]').val();
            var route='/admin/eliminar-servicio-empresa/'+id;
            sendRequest(route,'_token='+token,'DELETE',function(data,textStatus){
                if(data.status==200){
                    $("#list-"+id).remove();
                    swal({"timer":4000,"title":"El servicio se eliminó satisfactoriamente","text":"","showConfirmButton":false,"toast":true,"showCloseButton":true,"type":"success","position":"bottom-center"});
                }
            });
        }

        function changeCategoria(a){
            if(a.value){
                var route='/admin/lista-empresa-rubros/'+a.value;
                sendRequest(route,null,'GET',function(data,textStatus){
                    if(data.status==200){
                        var option='';
                        $.each(JSON.parse(data.responseText),function(id,rubro){
                            option=option+'<option value="'+id+'">'+rubro+'</option>';
                        });
                        $("#rubro_id").html(option);
                    }
                    else{
                        alert('error');
                    }
                });
            }
            else{
                $("#rubro_id").html('<option>-- SELECCIONE --</option>');
            }
        }

        function archivoFile(evt) {
            var files = evt.target.files; // FileList object
            var frame=$("#img-"+evt.target.name);
            if (files.length==0) {
                frame.attr('src','/assets/img/avatars/img.jpg');
            }
            else{
                pdffile_url=URL.createObjectURL(files[0]);
                frame.attr('src',pdffile_url);
            }
        }

        document.getElementById('perfil').addEventListener('change', archivoFile, false);
        document.getElementById('portada').addEventListener('change', archivoFile, false);
    </script>
@endsection



