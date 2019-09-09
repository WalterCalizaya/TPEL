@extends('usuario.layouts.app')

@section('title')
¡Error!
@endsection

@section('content')
<section class="login-block offline-404">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <div class="card auth-box">
                    <div class="card-block text-center">
                        <form>
                            <h1>🚫</h1>
                            <h2 class="m-b-15 text-muted">No tienes permiso para acceder a esta sección</h2>
                            {{-- <button onclick="history.back()" class="btn btn-inverse m-t-30">Regresar</button> --}}
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
