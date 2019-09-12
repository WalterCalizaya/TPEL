@php
use Carbon\Carbon;
setlocale(LC_TIME, 'es_ES.UTF-8');
Carbon::setLocale('es');

function concatenar($numero){
    $n=strlen($numero);
    if ($n==1) {
        $a='0000'.$numero;
    }
    else if ($n==2) {
        $a='000'.$numero;
    }
    else if ($n==3) {
        $a='00'.$numero;
    }
    else if ($n==4) {
        $a='0'.$numero;
    }
    else{
        $a=$numero;
    }
    return $a;
}
@endphp
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cotización {{ $cotizacion->anio }}-{{ concatenar($cotizacion->numero) }} - Tacnatel</title>
    <style>
        /* reset */
        {
            border: 0;
            box-sizing: content-box;
            color: inherit;
            font-family: inherit;
            font-size: inherit;
            font-style: inherit;
            font-weight: inherit;
            line-height: inherit;
            list-style: none;
            margin: 0;
            padding: 0;
            text-decoration: none;
            vertical-align: top;
        }

        /* heading */

        h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

        /* table */

        table { font-size: 75%; table-layout: fixed; width: 100%; }
        table { border-collapse: separate; border-spacing: 2px; }
        th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
        th, td { border-radius: 0.25em; border-style: solid; }
        th { background: #EEE; border-color: #BBB; }
        td { border-color: #DDD; }

        /* page */

        html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
        html { background: #999; cursor: default; }

        body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
        body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

        /* header */

        header { margin: 0 0 2em; }
        header:after { clear: both; content: ""; display: table; }

        header h1 { letter-spacing: 0.5; background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em; }
        header address { float: right; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
        header address p { margin: 0 0 0.25em; }
        header span, header img { display: block; float: left; }
        header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
        header img { max-height: 100%; max-width: 100%; }

        /* article */

        article, article address, table.meta, table.inventory { margin: 0 0 2em; }
        article:after { clear: both; content: ""; display: table; }
        article h1 { clip: rect(0 0 0 0); position: absolute; }

        article address { float: left; font-size: 125%; font-weight: bold; }

        /* table meta & balance */

        table.meta, table.balance { float: right; width: 36%; }
        table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

        /* table meta */

        table.meta th { width: 40%; }
        table.meta td { width: 60%; }

        /* table items */

        table.inventory { clear: both; width: 100%; }
        table.inventory th { font-weight: bold; text-align: center; }

        table.inventory td:nth-child(1) { width: 26%; }
        table.inventory td:nth-child(2) { width: 38%; }
        table.inventory td:nth-child(3) { text-align: right; width: 12%; }
        table.inventory td:nth-child(4) { text-align: right; width: 12%; }
        table.inventory td:nth-child(5) { text-align: right; width: 12%; }

        /* table balance */

        table.balance th, table.balance td { width: 50%; }
        table.balance td { text-align: right; }

        /* aside */

        aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
        aside h1 { border-color: #999; border-bottom-style: solid; }

        /* status */
        .status{
            letter-spacing: 0.5;
            font-size: 1.2em;
            text-align: center;
            padding: 0.5em 0;
            color: #FFF;
        }
        .status_success{
            background: #2ED8B6;
        }
        .status_danger{
            background: #FF5370;
        }
        .status_warning{
            background: #FFB64D;
        }
        .status_default{
            background: #D6D6D6;
        }
        .back-list{
            margin: 0.5em 0;
        }

        @media print {
            * { -webkit-print-color-adjust: exact; }
            html { background: none; padding: 0; }
            body { box-shadow: none; margin: 0; }
            span:empty { display: none; }
            .no-print {display: none; height: 0px;}
        }

        @page { margin: 20px 50px 100px 50px; }
    </style>

</head>
<body>
    <a class="no-print back-list" href="{{ url('/admin/lista-inscritos') }}"><< Volver al listado de inscritos</a>
    <header>
        <span><img alt="Tacnatel" src="{{ url($configuracion->logo) }}"></span>
        <address>
            <h1>Recibo: {{ $cotizacion->anio }}-{{ concatenar($cotizacion->numero) }}</h1>
            @if ($configuracion->razon_social)
            <h3>{{ $configuracion->razon_social }}</h3>
            @endif
            @if ($configuracion->ruc)
            <p>R.U.C. {{ $configuracion->ruc }}</p>
            @endif
            {{-- <p>{{ $configuracion->direccion }}</p> --}}
        </address>
    </header>
    <article>
        @switch($cotizacion->estado)
            @case(0)
                <h2 class="status status_danger">Recibo no válido</h2>
                @break

            @case(1)
                <h2 class="status status_danger">No pagado</h2>
                @break

            @case(2)
                <h2 class="status status_warning">Voucher enviado</h2>
                @break

            @case(3)
                <h2 class="status status_success">Pago confirmado</h2>
                @break

            @case(4)
                <h2 class="status status_danger">Pago rechazado</h2>
                @break
            @case(5)
            	<h2 class="status status_success">Suscripción de regalo</h2>
                @break

            @default
                <h2 class="status status_default no-print">Estado no definido</h2>
        @endswitch
        <address>
            <span>En atención a:</span>
            <p>{{ $cotizacion->usuario->nombres }} {{ $cotizacion->usuario->apellidos }}
                <span style="font-size: 80%;font-weight: 500;">
                    @if ($cotizacion->usuario->telefono)
                    <br>Cel: {{ $cotizacion->usuario->telefono }}
                    @endif
                    @if ($cotizacion->usuario->email)
                    <br>E-Mail: {{ $cotizacion->usuario->email }}
                    @endif
                </span>
            </p>
        </address>
        <table class="meta">
            <tr>
                <th><span>Nro.</span></th>
                <td><span>{{ $cotizacion->anio }}-{{ concatenar($cotizacion->numero) }}</span></td>
            </tr>
            <tr>
                <th><span>Fecha de inicio</span></th>
                <td><span>{{ Carbon::parse($cotizacion->fecha)->format('d \d\e M, Y') }}</span></td>
            </tr>

            <tr>
                <th><span>Total</span></th>
                <td><span>{{ $cotizacion->moneda }} {{ $cotizacion->subtotal - $cotizacion->descuento }}</span></td>


            </tr>
        </table>
        <table class="inventory">
            <thead>
                <tr class="tex">
                    <th><span>Tipo</span></th>
                    <th colspan="2"><span>Descripción</span></th>
                    <th><span>Fecha</span></th>
                    <th><span>Precio</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cotizacion->detalles as $detalle)
                <tr>
                    <td><span>{{ $detalle->tipo }}</span></td>
                    <td colspan="2"><span>{{ $detalle->ciclo->titulo }}</span></td>
                    <td style="text-align: center; font-size: 10px;"><span>{{ Carbon::parse($detalle->ciclo->inicio)->format('d \d\e M, Y') }}</span></td>
                    <td><span>{{ $detalle->moneda }} </span><span>{{ $detalle->precio_unitario }}</span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <table class="balance">
            <tr>
                <th><span>Subtotal</span></th>
                <td><span>{{ $cotizacion->moneda }} </span><span>{{ $cotizacion->subtotal }}</span></td>
            </tr>
            <tr>
                <th><span>Descuento</span></th>
                <td><span>{{ $cotizacion->moneda }} </span><span>{{ $cotizacion->descuento }}</span></td>
            </tr>
            <tr>
                <th><span>Total</span></th>
                <td><span>{{ $cotizacion->moneda }} </span><span> {{ $cotizacion->subtotal - $cotizacion->descuento }}</span></td>
            </tr>
        </table>
    </article>
    @if ($cotizacion->notas_cotizacion)
    <aside>
        <h1><span>Notas</span></h1>
        <div>
            {!! $cotizacion->notas_cotizacion !!}
        </div>
    </aside>
    @endif
</body>
</html>
