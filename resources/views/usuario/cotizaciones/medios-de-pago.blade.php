@extends('usuario.layouts.app')

@section('title')
Medios de pago
@endsection

@section('medios')
active
@endsection

@section('content')

<div class="row">
    <div class="col-sm-12">

        @include('usuario.include.medios-de-pago')

    </div>

</div>
@endsection
