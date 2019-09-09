<div class="card">
    <div class="card-header">
        <h4 class="text-center">Medios de pago en Perú</h4>
    </div>
    <div class="card-block table-border-style col-sm-10 offset-sm-1">
        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th>Banco</th>
                        <th>Cuenta</th>
                        <th>Titular</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bancos as $banco)

                    <tr>
                        <td>
                            <img src="{{ url($banco->logo) }}" alt="{{ $banco->banco }}" class="img-fluid" width="{{ $banco->ancho_img }}" />
                        </td>
                        <td class="text-left">
                            <span style="font-weight: 600;">{{ $banco->tipo_cuenta==1?'Soles: ': 'Dólares: ' }}</span>{{ $banco->nro_cuenta }}<br />

                            @if ($banco->nro_cci)
                            <span style="font-weight: 600;">CCI: </span>{{ $banco->nro_cci }}
                            @endif
                        </td>
                        <td>
                            {{ $banco->titular }}
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
