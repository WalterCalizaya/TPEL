<?php

use Illuminate\Database\Seeder;

class InscripcionesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('inscripciones')->delete();
        
        \DB::table('inscripciones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'anio' => 2019,
                'numero' => 1,
                'usuario_id' => 8,
                'fecha' => '2019-08-03',
                'moneda' => 'S/.',
                'subtotal' => '500',
                'descuento' => '0',
                'notas_cotizacion' => '<p>Promoción de pre-venta: El descuento se aplica si su inscripción se realiza hasta con un mes de anticipación al evento</p>
<h4>Talleres</h4>
<p>
Costo por 1 taller: S/. 250 + IGV<br>
Costo por 2 talleres: S/. 450 + IGV<br>
Costo por 3 talleres: S/. 650 + IGV<br>
Costo por 4 talleres: S/. 750 + IGV
</p>
<h4>Certificaciones</h4>
<p>
Costo MTCNA: S/. 990 + IGV
</p>',
                'voucher' => NULL,
                'banco' => 1,
                'observaciones_voucher' => NULL,
                'tipo' => 0,
                'igv' => 18,
                'razon_social' => NULL,
                'ruc' => NULL,
                'domicilio' => NULL,
                'estado' => '1',
                'evaluacion' => 0,
                'evaluado_por' => 1,
                'comentario_admin' => NULL,
                'created_at' => '2019-08-03 19:43:29',
                'updated_at' => '2019-08-03 19:43:29',
            ),
            1 => 
            array (
                'id' => 2,
                'anio' => 2019,
                'numero' => 2,
                'usuario_id' => 9,
                'fecha' => '2019-08-05',
                'moneda' => 'S/.',
                'subtotal' => '1190',
                'descuento' => '0',
                'notas_cotizacion' => '<p>Promoción de pre-venta: El descuento se aplica si su inscripción se realiza hasta con un mes de anticipación al evento</p>
<h4>Talleres</h4>
<p>
Costo por 1 taller: S/. 250 + IGV<br>
Costo por 2 talleres: S/. 450 + IGV<br>
Costo por 3 talleres: S/. 650 + IGV<br>
Costo por 4 talleres: S/. 750 + IGV
</p>
<h4>Certificaciones</h4>
<p>
Costo MTCNA: S/. 990 + IGV
</p>',
                'voucher' => NULL,
                'banco' => 1,
                'observaciones_voucher' => NULL,
                'tipo' => 0,
                'igv' => 18,
                'razon_social' => NULL,
                'ruc' => NULL,
                'domicilio' => NULL,
                'estado' => '1',
                'evaluacion' => 0,
                'evaluado_por' => 1,
                'comentario_admin' => NULL,
                'created_at' => '2019-08-05 15:41:28',
                'updated_at' => '2019-08-05 15:41:28',
            ),
            2 => 
            array (
                'id' => 3,
                'anio' => 2019,
                'numero' => 3,
                'usuario_id' => 12,
                'fecha' => '2019-08-13',
                'moneda' => 'S/.',
                'subtotal' => '1190',
                'descuento' => '0',
                'notas_cotizacion' => '<p>Promoción de pre-venta: El descuento se aplica si su inscripción se realiza hasta con un mes de anticipación al evento</p>
<h4>Talleres</h4>
<p>
Costo por 1 taller: S/. 250 + IGV<br>
Costo por 2 talleres: S/. 450 + IGV<br>
Costo por 3 talleres: S/. 650 + IGV<br>
Costo por 4 talleres: S/. 750 + IGV
</p>
<h4>Certificaciones</h4>
<p>
Costo MTCNA: S/. 990 + IGV
</p>',
                'voucher' => NULL,
                'banco' => 1,
                'observaciones_voucher' => NULL,
                'tipo' => 0,
                'igv' => 18,
                'razon_social' => NULL,
                'ruc' => NULL,
                'domicilio' => NULL,
                'estado' => '1',
                'evaluacion' => 0,
                'evaluado_por' => 1,
                'comentario_admin' => NULL,
                'created_at' => '2019-08-13 12:54:43',
                'updated_at' => '2019-08-13 12:54:43',
            ),
            3 => 
            array (
                'id' => 4,
                'anio' => 2019,
                'numero' => 4,
                'usuario_id' => 19,
                'fecha' => '2019-08-25',
                'moneda' => 'S/.',
                'subtotal' => '1190',
                'descuento' => '0',
                'notas_cotizacion' => '<p>Promoción de pre-venta: El descuento se aplica si su inscripción se realiza hasta con un mes de anticipación al evento</p>
<h4>Talleres</h4>
<p>
Costo por 1 taller: S/. 250 + IGV<br>
Costo por 2 talleres: S/. 450 + IGV<br>
Costo por 3 talleres: S/. 650 + IGV<br>
Costo por 4 talleres: S/. 750 + IGV
</p>
<h4>Certificaciones</h4>
<p>
Costo MTCNA: S/. 990 + IGV
</p>',
                'voucher' => NULL,
                'banco' => 1,
                'observaciones_voucher' => NULL,
                'tipo' => 0,
                'igv' => 18,
                'razon_social' => NULL,
                'ruc' => NULL,
                'domicilio' => NULL,
                'estado' => '1',
                'evaluacion' => 0,
                'evaluado_por' => 1,
                'comentario_admin' => NULL,
                'created_at' => '2019-08-25 17:45:25',
                'updated_at' => '2019-08-25 17:45:25',
            ),
            4 => 
            array (
                'id' => 5,
                'anio' => 2019,
                'numero' => 5,
                'usuario_id' => 20,
                'fecha' => '2019-08-26',
                'moneda' => 'S/.',
                'subtotal' => '0',
                'descuento' => '0',
                'notas_cotizacion' => '<p>Promoción de pre-venta: El descuento se aplica si su inscripción se realiza hasta con un mes de anticipación al evento</p>
<h4>Talleres</h4>
<p>
Costo por 1 taller: S/. 250 + IGV<br>
Costo por 2 talleres: S/. 450 + IGV<br>
Costo por 3 talleres: S/. 650 + IGV<br>
Costo por 4 talleres: S/. 750 + IGV
</p>
<h4>Certificaciones</h4>
<p>
Costo MTCNA: S/. 990 + IGV
</p>',
                'voucher' => NULL,
                'banco' => 1,
                'observaciones_voucher' => NULL,
                'tipo' => 0,
                'igv' => 18,
                'razon_social' => NULL,
                'ruc' => NULL,
                'domicilio' => NULL,
                'estado' => '1',
                'evaluacion' => 0,
                'evaluado_por' => 1,
                'comentario_admin' => NULL,
                'created_at' => '2019-08-26 07:06:34',
                'updated_at' => '2019-08-26 07:06:34',
            ),
            5 => 
            array (
                'id' => 6,
                'anio' => 2019,
                'numero' => 6,
                'usuario_id' => 20,
                'fecha' => '2019-08-26',
                'moneda' => 'S/.',
                'subtotal' => '0',
                'descuento' => '0',
                'notas_cotizacion' => '<p>Promoción de pre-venta: El descuento se aplica si su inscripción se realiza hasta con un mes de anticipación al evento</p>
<h4>Talleres</h4>
<p>
Costo por 1 taller: S/. 250 + IGV<br>
Costo por 2 talleres: S/. 450 + IGV<br>
Costo por 3 talleres: S/. 650 + IGV<br>
Costo por 4 talleres: S/. 750 + IGV
</p>
<h4>Certificaciones</h4>
<p>
Costo MTCNA: S/. 990 + IGV
</p>',
                'voucher' => NULL,
                'banco' => 1,
                'observaciones_voucher' => NULL,
                'tipo' => 0,
                'igv' => 18,
                'razon_social' => NULL,
                'ruc' => NULL,
                'domicilio' => NULL,
                'estado' => '1',
                'evaluacion' => 0,
                'evaluado_por' => 1,
                'comentario_admin' => NULL,
                'created_at' => '2019-08-26 07:08:31',
                'updated_at' => '2019-08-26 07:08:31',
            ),
            6 => 
            array (
                'id' => 7,
                'anio' => 2019,
                'numero' => 7,
                'usuario_id' => 20,
                'fecha' => '2019-08-26',
                'moneda' => 'S/.',
                'subtotal' => '1190',
                'descuento' => '0',
                'notas_cotizacion' => '<p>Promoción de pre-venta: El descuento se aplica si su inscripción se realiza hasta con un mes de anticipación al evento</p>
<h4>Talleres</h4>
<p>
Costo por 1 taller: S/. 250 + IGV<br>
Costo por 2 talleres: S/. 450 + IGV<br>
Costo por 3 talleres: S/. 650 + IGV<br>
Costo por 4 talleres: S/. 750 + IGV
</p>
<h4>Certificaciones</h4>
<p>
Costo MTCNA: S/. 990 + IGV
</p>',
                'voucher' => NULL,
                'banco' => 1,
                'observaciones_voucher' => NULL,
                'tipo' => 0,
                'igv' => 18,
                'razon_social' => NULL,
                'ruc' => NULL,
                'domicilio' => NULL,
                'estado' => '1',
                'evaluacion' => 0,
                'evaluado_por' => 1,
                'comentario_admin' => NULL,
                'created_at' => '2019-08-26 07:16:32',
                'updated_at' => '2019-08-26 07:16:32',
            ),
            7 => 
            array (
                'id' => 8,
                'anio' => 2019,
                'numero' => 8,
                'usuario_id' => 20,
                'fecha' => '2019-08-26',
                'moneda' => 'S/.',
                'subtotal' => '1190',
                'descuento' => '0',
                'notas_cotizacion' => '<p>Promoción de pre-venta: El descuento se aplica si su inscripción se realiza hasta con un mes de anticipación al evento</p>
<h4>Talleres</h4>
<p>
Costo por 1 taller: S/. 250 + IGV<br>
Costo por 2 talleres: S/. 450 + IGV<br>
Costo por 3 talleres: S/. 650 + IGV<br>
Costo por 4 talleres: S/. 750 + IGV
</p>
<h4>Certificaciones</h4>
<p>
Costo MTCNA: S/. 990 + IGV
</p>',
                'voucher' => NULL,
                'banco' => 1,
                'observaciones_voucher' => NULL,
                'tipo' => 0,
                'igv' => 18,
                'razon_social' => NULL,
                'ruc' => NULL,
                'domicilio' => NULL,
                'estado' => '1',
                'evaluacion' => 0,
                'evaluado_por' => 1,
                'comentario_admin' => NULL,
                'created_at' => '2019-08-26 07:17:06',
                'updated_at' => '2019-08-26 07:17:06',
            ),
        ));
        
        
    }
}