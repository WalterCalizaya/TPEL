<?php

use Illuminate\Database\Seeder;

class DistritosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('distritos')->delete();

        \DB::table('distritos')->insert(array (
            0 =>
            array (
                'id' => 10101,
                'nombre' => 'Chachapoyas',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 10102,
                'nombre' => 'Asunción',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 10103,
                'nombre' => 'Balsas',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 10104,
                'nombre' => 'Cheto',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 10105,
                'nombre' => 'Chiliquin',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 10106,
                'nombre' => 'Chuquibamba',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array (
                'id' => 10107,
                'nombre' => 'Granada',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array (
                'id' => 10108,
                'nombre' => 'Huancas',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array (
                'id' => 10109,
                'nombre' => 'La Jalca',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10110,
                'nombre' => 'Leimebamba',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 =>
            array (
                'id' => 10111,
                'nombre' => 'Levanto',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 =>
            array (
                'id' => 10112,
                'nombre' => 'Magdalena',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 =>
            array (
                'id' => 10113,
                'nombre' => 'Mariscal Castilla',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 =>
            array (
                'id' => 10114,
                'nombre' => 'Molinopampa',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 =>
            array (
                'id' => 10115,
                'nombre' => 'Montevideo',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 =>
            array (
                'id' => 10116,
                'nombre' => 'Olleros',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 =>
            array (
                'id' => 10117,
                'nombre' => 'Quinjalca',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 =>
            array (
                'id' => 10118,
                'nombre' => 'San Francisco de Daguas',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 =>
            array (
                'id' => 10119,
                'nombre' => 'San Isidro de Maino',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 =>
            array (
                'id' => 10120,
                'nombre' => 'Soloco',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 =>
            array (
                'id' => 10121,
                'nombre' => 'Sonche',
                'region_id' => 10000,
                'provincia_id' => 10100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 =>
            array (
                'id' => 10201,
                'nombre' => 'Bagua',
                'region_id' => 10000,
                'provincia_id' => 10200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 =>
            array (
                'id' => 10202,
                'nombre' => 'Aramango',
                'region_id' => 10000,
                'provincia_id' => 10200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 =>
            array (
                'id' => 10203,
                'nombre' => 'Copallin',
                'region_id' => 10000,
                'provincia_id' => 10200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 =>
            array (
                'id' => 10204,
                'nombre' => 'El Parco',
                'region_id' => 10000,
                'provincia_id' => 10200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 =>
            array (
                'id' => 10205,
                'nombre' => 'Imaza',
                'region_id' => 10000,
                'provincia_id' => 10200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 =>
            array (
                'id' => 10206,
                'nombre' => 'La Peca',
                'region_id' => 10000,
                'provincia_id' => 10200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 =>
            array (
                'id' => 10301,
                'nombre' => 'Jumbilla',
                'region_id' => 10000,
                'provincia_id' => 10300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 =>
            array (
                'id' => 10302,
                'nombre' => 'Chisquilla',
                'region_id' => 10000,
                'provincia_id' => 10300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 =>
            array (
                'id' => 10303,
                'nombre' => 'Churuja',
                'region_id' => 10000,
                'provincia_id' => 10300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 =>
            array (
                'id' => 10304,
                'nombre' => 'Corosha',
                'region_id' => 10000,
                'provincia_id' => 10300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 =>
            array (
                'id' => 10305,
                'nombre' => 'Cuispes',
                'region_id' => 10000,
                'provincia_id' => 10300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 =>
            array (
                'id' => 10306,
                'nombre' => 'Florida',
                'region_id' => 10000,
                'provincia_id' => 10300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 =>
            array (
                'id' => 10307,
                'nombre' => 'Jazan',
                'region_id' => 10000,
                'provincia_id' => 10300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 =>
            array (
                'id' => 10308,
                'nombre' => 'Recta',
                'region_id' => 10000,
                'provincia_id' => 10300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 =>
            array (
                'id' => 10309,
                'nombre' => 'San Carlos',
                'region_id' => 10000,
                'provincia_id' => 10300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 =>
            array (
                'id' => 10310,
                'nombre' => 'Shipasbamba',
                'region_id' => 10000,
                'provincia_id' => 10300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 =>
            array (
                'id' => 10311,
                'nombre' => 'Valera',
                'region_id' => 10000,
                'provincia_id' => 10300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 =>
            array (
                'id' => 10312,
                'nombre' => 'Yambrasbamba',
                'region_id' => 10000,
                'provincia_id' => 10300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 =>
            array (
                'id' => 10401,
                'nombre' => 'Nieva',
                'region_id' => 10000,
                'provincia_id' => 10400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 =>
            array (
                'id' => 10402,
                'nombre' => 'El Cenepa',
                'region_id' => 10000,
                'provincia_id' => 10400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 =>
            array (
                'id' => 10403,
                'nombre' => 'Río Santiago',
                'region_id' => 10000,
                'provincia_id' => 10400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 =>
            array (
                'id' => 10501,
                'nombre' => 'Lamud',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 =>
            array (
                'id' => 10502,
                'nombre' => 'Camporredondo',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 =>
            array (
                'id' => 10503,
                'nombre' => 'Cocabamba',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 =>
            array (
                'id' => 10504,
                'nombre' => 'Colcamar',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 =>
            array (
                'id' => 10505,
                'nombre' => 'Conila',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 =>
            array (
                'id' => 10506,
                'nombre' => 'Inguilpata',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 =>
            array (
                'id' => 10507,
                'nombre' => 'Longuita',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 =>
            array (
                'id' => 10508,
                'nombre' => 'Lonya Chico',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 =>
            array (
                'id' => 10509,
                'nombre' => 'Luya',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 =>
            array (
                'id' => 10510,
                'nombre' => 'Luya Viejo',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 =>
            array (
                'id' => 10511,
                'nombre' => 'María',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 =>
            array (
                'id' => 10512,
                'nombre' => 'Ocalli',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 =>
            array (
                'id' => 10513,
                'nombre' => 'Ocumal',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 =>
            array (
                'id' => 10514,
                'nombre' => 'Pisuquia',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 =>
            array (
                'id' => 10515,
                'nombre' => 'Providencia',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 =>
            array (
                'id' => 10516,
                'nombre' => 'San Cristóbal',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 =>
            array (
                'id' => 10517,
                'nombre' => 'San Francisco de Yeso',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 =>
            array (
                'id' => 10518,
                'nombre' => 'San Jerónimo',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 =>
            array (
                'id' => 10519,
                'nombre' => 'San Juan de Lopecancha',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 =>
            array (
                'id' => 10520,
                'nombre' => 'Santa Catalina',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 =>
            array (
                'id' => 10521,
                'nombre' => 'Santo Tomas',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 =>
            array (
                'id' => 10522,
                'nombre' => 'Tingo',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 =>
            array (
                'id' => 10523,
                'nombre' => 'Trita',
                'region_id' => 10000,
                'provincia_id' => 10500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 =>
            array (
                'id' => 10601,
                'nombre' => 'San Nicolás',
                'region_id' => 10000,
                'provincia_id' => 10600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 =>
            array (
                'id' => 10602,
                'nombre' => 'Chirimoto',
                'region_id' => 10000,
                'provincia_id' => 10600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 =>
            array (
                'id' => 10603,
                'nombre' => 'Cochamal',
                'region_id' => 10000,
                'provincia_id' => 10600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 =>
            array (
                'id' => 10604,
                'nombre' => 'Huambo',
                'region_id' => 10000,
                'provincia_id' => 10600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 =>
            array (
                'id' => 10605,
                'nombre' => 'Limabamba',
                'region_id' => 10000,
                'provincia_id' => 10600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 =>
            array (
                'id' => 10606,
                'nombre' => 'Longar',
                'region_id' => 10000,
                'provincia_id' => 10600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 =>
            array (
                'id' => 10607,
                'nombre' => 'Mariscal Benavides',
                'region_id' => 10000,
                'provincia_id' => 10600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 =>
            array (
                'id' => 10608,
                'nombre' => 'Milpuc',
                'region_id' => 10000,
                'provincia_id' => 10600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 =>
            array (
                'id' => 10609,
                'nombre' => 'Omia',
                'region_id' => 10000,
                'provincia_id' => 10600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 =>
            array (
                'id' => 10610,
                'nombre' => 'Santa Rosa',
                'region_id' => 10000,
                'provincia_id' => 10600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 =>
            array (
                'id' => 10611,
                'nombre' => 'Totora',
                'region_id' => 10000,
                'provincia_id' => 10600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 =>
            array (
                'id' => 10612,
                'nombre' => 'Vista Alegre',
                'region_id' => 10000,
                'provincia_id' => 10600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 =>
            array (
                'id' => 10701,
                'nombre' => 'Bagua Grande',
                'region_id' => 10000,
                'provincia_id' => 10700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 =>
            array (
                'id' => 10702,
                'nombre' => 'Cajaruro',
                'region_id' => 10000,
                'provincia_id' => 10700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 =>
            array (
                'id' => 10703,
                'nombre' => 'Cumba',
                'region_id' => 10000,
                'provincia_id' => 10700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 =>
            array (
                'id' => 10704,
                'nombre' => 'El Milagro',
                'region_id' => 10000,
                'provincia_id' => 10700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 =>
            array (
                'id' => 10705,
                'nombre' => 'Jamalca',
                'region_id' => 10000,
                'provincia_id' => 10700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 =>
            array (
                'id' => 10706,
                'nombre' => 'Lonya Grande',
                'region_id' => 10000,
                'provincia_id' => 10700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 =>
            array (
                'id' => 10707,
                'nombre' => 'Yamon',
                'region_id' => 10000,
                'provincia_id' => 10700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 =>
            array (
                'id' => 20101,
                'nombre' => 'Huaraz',
                'region_id' => 20000,
                'provincia_id' => 20100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 =>
            array (
                'id' => 20102,
                'nombre' => 'Cochabamba',
                'region_id' => 20000,
                'provincia_id' => 20100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 =>
            array (
                'id' => 20103,
                'nombre' => 'Colcabamba',
                'region_id' => 20000,
                'provincia_id' => 20100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 =>
            array (
                'id' => 20104,
                'nombre' => 'Huanchay',
                'region_id' => 20000,
                'provincia_id' => 20100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 =>
            array (
                'id' => 20105,
                'nombre' => 'Independencia',
                'region_id' => 20000,
                'provincia_id' => 20100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 =>
            array (
                'id' => 20106,
                'nombre' => 'Jangas',
                'region_id' => 20000,
                'provincia_id' => 20100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 =>
            array (
                'id' => 20107,
                'nombre' => 'La Libertad',
                'region_id' => 20000,
                'provincia_id' => 20100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 =>
            array (
                'id' => 20108,
                'nombre' => 'Olleros',
                'region_id' => 20000,
                'provincia_id' => 20100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 =>
            array (
                'id' => 20109,
                'nombre' => 'Pampas Grande',
                'region_id' => 20000,
                'provincia_id' => 20100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 =>
            array (
                'id' => 20110,
                'nombre' => 'Pariacoto',
                'region_id' => 20000,
                'provincia_id' => 20100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 =>
            array (
                'id' => 20111,
                'nombre' => 'Pira',
                'region_id' => 20000,
                'provincia_id' => 20100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 =>
            array (
                'id' => 20112,
                'nombre' => 'Tarica',
                'region_id' => 20000,
                'provincia_id' => 20100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 =>
            array (
                'id' => 20201,
                'nombre' => 'Aija',
                'region_id' => 20000,
                'provincia_id' => 20200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 =>
            array (
                'id' => 20202,
                'nombre' => 'Coris',
                'region_id' => 20000,
                'provincia_id' => 20200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 =>
            array (
                'id' => 20203,
                'nombre' => 'Huacllan',
                'region_id' => 20000,
                'provincia_id' => 20200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 =>
            array (
                'id' => 20204,
                'nombre' => 'La Merced',
                'region_id' => 20000,
                'provincia_id' => 20200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 =>
            array (
                'id' => 20205,
                'nombre' => 'Succha',
                'region_id' => 20000,
                'provincia_id' => 20200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 =>
            array (
                'id' => 20301,
                'nombre' => 'Llamellin',
                'region_id' => 20000,
                'provincia_id' => 20300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 =>
            array (
                'id' => 20302,
                'nombre' => 'Aczo',
                'region_id' => 20000,
                'provincia_id' => 20300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 =>
            array (
                'id' => 20303,
                'nombre' => 'Chaccho',
                'region_id' => 20000,
                'provincia_id' => 20300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 =>
            array (
                'id' => 20304,
                'nombre' => 'Chingas',
                'region_id' => 20000,
                'provincia_id' => 20300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 =>
            array (
                'id' => 20305,
                'nombre' => 'Mirgas',
                'region_id' => 20000,
                'provincia_id' => 20300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 =>
            array (
                'id' => 20306,
                'nombre' => 'San Juan de Rontoy',
                'region_id' => 20000,
                'provincia_id' => 20300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 =>
            array (
                'id' => 20401,
                'nombre' => 'Chacas',
                'region_id' => 20000,
                'provincia_id' => 20400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 =>
            array (
                'id' => 20402,
                'nombre' => 'Acochaca',
                'region_id' => 20000,
                'provincia_id' => 20400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 =>
            array (
                'id' => 20501,
                'nombre' => 'Chiquian',
                'region_id' => 20000,
                'provincia_id' => 20500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 =>
            array (
                'id' => 20502,
                'nombre' => 'Abelardo Pardo Lezameta',
                'region_id' => 20000,
                'provincia_id' => 20500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 =>
            array (
                'id' => 20503,
                'nombre' => 'Antonio Raymondi',
                'region_id' => 20000,
                'provincia_id' => 20500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 =>
            array (
                'id' => 20504,
                'nombre' => 'Aquia',
                'region_id' => 20000,
                'provincia_id' => 20500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 =>
            array (
                'id' => 20505,
                'nombre' => 'Cajacay',
                'region_id' => 20000,
                'provincia_id' => 20500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 =>
            array (
                'id' => 20506,
                'nombre' => 'Canis',
                'region_id' => 20000,
                'provincia_id' => 20500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 =>
            array (
                'id' => 20507,
                'nombre' => 'Colquioc',
                'region_id' => 20000,
                'provincia_id' => 20500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 =>
            array (
                'id' => 20508,
                'nombre' => 'Huallanca',
                'region_id' => 20000,
                'provincia_id' => 20500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 =>
            array (
                'id' => 20509,
                'nombre' => 'Huasta',
                'region_id' => 20000,
                'provincia_id' => 20500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 =>
            array (
                'id' => 20510,
                'nombre' => 'Huayllacayan',
                'region_id' => 20000,
                'provincia_id' => 20500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 =>
            array (
                'id' => 20511,
                'nombre' => 'La Primavera',
                'region_id' => 20000,
                'provincia_id' => 20500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 =>
            array (
                'id' => 20512,
                'nombre' => 'Mangas',
                'region_id' => 20000,
                'provincia_id' => 20500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 =>
            array (
                'id' => 20513,
                'nombre' => 'Pacllon',
                'region_id' => 20000,
                'provincia_id' => 20500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 =>
            array (
                'id' => 20514,
                'nombre' => 'San Miguel de Corpanqui',
                'region_id' => 20000,
                'provincia_id' => 20500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 =>
            array (
                'id' => 20515,
                'nombre' => 'Ticllos',
                'region_id' => 20000,
                'provincia_id' => 20500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 =>
            array (
                'id' => 20601,
                'nombre' => 'Carhuaz',
                'region_id' => 20000,
                'provincia_id' => 20600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 =>
            array (
                'id' => 20602,
                'nombre' => 'Acopampa',
                'region_id' => 20000,
                'provincia_id' => 20600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 =>
            array (
                'id' => 20603,
                'nombre' => 'Amashca',
                'region_id' => 20000,
                'provincia_id' => 20600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 =>
            array (
                'id' => 20604,
                'nombre' => 'Anta',
                'region_id' => 20000,
                'provincia_id' => 20600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 =>
            array (
                'id' => 20605,
                'nombre' => 'Ataquero',
                'region_id' => 20000,
                'provincia_id' => 20600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 =>
            array (
                'id' => 20606,
                'nombre' => 'Marcara',
                'region_id' => 20000,
                'provincia_id' => 20600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 =>
            array (
                'id' => 20607,
                'nombre' => 'Pariahuanca',
                'region_id' => 20000,
                'provincia_id' => 20600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 =>
            array (
                'id' => 20608,
                'nombre' => 'San Miguel de Aco',
                'region_id' => 20000,
                'provincia_id' => 20600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 =>
            array (
                'id' => 20609,
                'nombre' => 'Shilla',
                'region_id' => 20000,
                'provincia_id' => 20600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 =>
            array (
                'id' => 20610,
                'nombre' => 'Tinco',
                'region_id' => 20000,
                'provincia_id' => 20600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 =>
            array (
                'id' => 20611,
                'nombre' => 'Yungar',
                'region_id' => 20000,
                'provincia_id' => 20600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 =>
            array (
                'id' => 20701,
                'nombre' => 'San Luis',
                'region_id' => 20000,
                'provincia_id' => 20700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 =>
            array (
                'id' => 20702,
                'nombre' => 'San Nicolás',
                'region_id' => 20000,
                'provincia_id' => 20700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 =>
            array (
                'id' => 20703,
                'nombre' => 'Yauya',
                'region_id' => 20000,
                'provincia_id' => 20700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 =>
            array (
                'id' => 20801,
                'nombre' => 'Casma',
                'region_id' => 20000,
                'provincia_id' => 20800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 =>
            array (
                'id' => 20802,
                'nombre' => 'Buena Vista Alta',
                'region_id' => 20000,
                'provincia_id' => 20800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 =>
            array (
                'id' => 20803,
                'nombre' => 'Comandante Noel',
                'region_id' => 20000,
                'provincia_id' => 20800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 =>
            array (
                'id' => 20804,
                'nombre' => 'Yautan',
                'region_id' => 20000,
                'provincia_id' => 20800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 =>
            array (
                'id' => 20901,
                'nombre' => 'Corongo',
                'region_id' => 20000,
                'provincia_id' => 20900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 =>
            array (
                'id' => 20902,
                'nombre' => 'Aco',
                'region_id' => 20000,
                'provincia_id' => 20900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 =>
            array (
                'id' => 20903,
                'nombre' => 'Bambas',
                'region_id' => 20000,
                'provincia_id' => 20900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 =>
            array (
                'id' => 20904,
                'nombre' => 'Cusca',
                'region_id' => 20000,
                'provincia_id' => 20900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 =>
            array (
                'id' => 20905,
                'nombre' => 'La Pampa',
                'region_id' => 20000,
                'provincia_id' => 20900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 =>
            array (
                'id' => 20906,
                'nombre' => 'Yanac',
                'region_id' => 20000,
                'provincia_id' => 20900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 =>
            array (
                'id' => 20907,
                'nombre' => 'Yupan',
                'region_id' => 20000,
                'provincia_id' => 20900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 =>
            array (
                'id' => 21001,
                'nombre' => 'Huari',
                'region_id' => 20000,
                'provincia_id' => 21000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 =>
            array (
                'id' => 21002,
                'nombre' => 'Anra',
                'region_id' => 20000,
                'provincia_id' => 21000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 =>
            array (
                'id' => 21003,
                'nombre' => 'Cajay',
                'region_id' => 20000,
                'provincia_id' => 21000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 =>
            array (
                'id' => 21004,
                'nombre' => 'Chavin de Huantar',
                'region_id' => 20000,
                'provincia_id' => 21000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 =>
            array (
                'id' => 21005,
                'nombre' => 'Huacachi',
                'region_id' => 20000,
                'provincia_id' => 21000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 =>
            array (
                'id' => 21006,
                'nombre' => 'Huacchis',
                'region_id' => 20000,
                'provincia_id' => 21000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 =>
            array (
                'id' => 21007,
                'nombre' => 'Huachis',
                'region_id' => 20000,
                'provincia_id' => 21000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 =>
            array (
                'id' => 21008,
                'nombre' => 'Huantar',
                'region_id' => 20000,
                'provincia_id' => 21000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 =>
            array (
                'id' => 21009,
                'nombre' => 'Masin',
                'region_id' => 20000,
                'provincia_id' => 21000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 =>
            array (
                'id' => 21010,
                'nombre' => 'Paucas',
                'region_id' => 20000,
                'provincia_id' => 21000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 =>
            array (
                'id' => 21011,
                'nombre' => 'Ponto',
                'region_id' => 20000,
                'provincia_id' => 21000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 =>
            array (
                'id' => 21012,
                'nombre' => 'Rahuapampa',
                'region_id' => 20000,
                'provincia_id' => 21000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 =>
            array (
                'id' => 21013,
                'nombre' => 'Rapayan',
                'region_id' => 20000,
                'provincia_id' => 21000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 =>
            array (
                'id' => 21014,
                'nombre' => 'San Marcos',
                'region_id' => 20000,
                'provincia_id' => 21000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 =>
            array (
                'id' => 21015,
                'nombre' => 'San Pedro de Chana',
                'region_id' => 20000,
                'provincia_id' => 21000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 =>
            array (
                'id' => 21016,
                'nombre' => 'Uco',
                'region_id' => 20000,
                'provincia_id' => 21000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 =>
            array (
                'id' => 21101,
                'nombre' => 'Huarmey',
                'region_id' => 20000,
                'provincia_id' => 21100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 =>
            array (
                'id' => 21102,
                'nombre' => 'Cochapeti',
                'region_id' => 20000,
                'provincia_id' => 21100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 =>
            array (
                'id' => 21103,
                'nombre' => 'Culebras',
                'region_id' => 20000,
                'provincia_id' => 21100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 =>
            array (
                'id' => 21104,
                'nombre' => 'Huayan',
                'region_id' => 20000,
                'provincia_id' => 21100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 =>
            array (
                'id' => 21105,
                'nombre' => 'Malvas',
                'region_id' => 20000,
                'provincia_id' => 21100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 =>
            array (
                'id' => 21201,
                'nombre' => 'Caraz',
                'region_id' => 20000,
                'provincia_id' => 21200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 =>
            array (
                'id' => 21202,
                'nombre' => 'Huallanca',
                'region_id' => 20000,
                'provincia_id' => 21200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 =>
            array (
                'id' => 21203,
                'nombre' => 'Huata',
                'region_id' => 20000,
                'provincia_id' => 21200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 =>
            array (
                'id' => 21204,
                'nombre' => 'Huaylas',
                'region_id' => 20000,
                'provincia_id' => 21200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 =>
            array (
                'id' => 21205,
                'nombre' => 'Mato',
                'region_id' => 20000,
                'provincia_id' => 21200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 =>
            array (
                'id' => 21206,
                'nombre' => 'Pamparomas',
                'region_id' => 20000,
                'provincia_id' => 21200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 =>
            array (
                'id' => 21207,
                'nombre' => 'Pueblo Libre',
                'region_id' => 20000,
                'provincia_id' => 21200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 =>
            array (
                'id' => 21208,
                'nombre' => 'Santa Cruz',
                'region_id' => 20000,
                'provincia_id' => 21200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 =>
            array (
                'id' => 21209,
                'nombre' => 'Santo Toribio',
                'region_id' => 20000,
                'provincia_id' => 21200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 =>
            array (
                'id' => 21210,
                'nombre' => 'Yuracmarca',
                'region_id' => 20000,
                'provincia_id' => 21200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 =>
            array (
                'id' => 21301,
                'nombre' => 'Piscobamba',
                'region_id' => 20000,
                'provincia_id' => 21300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 =>
            array (
                'id' => 21302,
                'nombre' => 'Casca',
                'region_id' => 20000,
                'provincia_id' => 21300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 =>
            array (
                'id' => 21303,
                'nombre' => 'Eleazar Guzmán Barron',
                'region_id' => 20000,
                'provincia_id' => 21300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 =>
            array (
                'id' => 21304,
                'nombre' => 'Fidel Olivas Escudero',
                'region_id' => 20000,
                'provincia_id' => 21300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 =>
            array (
                'id' => 21305,
                'nombre' => 'Llama',
                'region_id' => 20000,
                'provincia_id' => 21300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 =>
            array (
                'id' => 21306,
                'nombre' => 'Llumpa',
                'region_id' => 20000,
                'provincia_id' => 21300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 =>
            array (
                'id' => 21307,
                'nombre' => 'Lucma',
                'region_id' => 20000,
                'provincia_id' => 21300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 =>
            array (
                'id' => 21308,
                'nombre' => 'Musga',
                'region_id' => 20000,
                'provincia_id' => 21300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 =>
            array (
                'id' => 21401,
                'nombre' => 'Ocros',
                'region_id' => 20000,
                'provincia_id' => 21400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 =>
            array (
                'id' => 21402,
                'nombre' => 'Acas',
                'region_id' => 20000,
                'provincia_id' => 21400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 =>
            array (
                'id' => 21403,
                'nombre' => 'Cajamarquilla',
                'region_id' => 20000,
                'provincia_id' => 21400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 =>
            array (
                'id' => 21404,
                'nombre' => 'Carhuapampa',
                'region_id' => 20000,
                'provincia_id' => 21400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 =>
            array (
                'id' => 21405,
                'nombre' => 'Cochas',
                'region_id' => 20000,
                'provincia_id' => 21400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 =>
            array (
                'id' => 21406,
                'nombre' => 'Congas',
                'region_id' => 20000,
                'provincia_id' => 21400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 =>
            array (
                'id' => 21407,
                'nombre' => 'Llipa',
                'region_id' => 20000,
                'provincia_id' => 21400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 =>
            array (
                'id' => 21408,
                'nombre' => 'San Cristóbal de Rajan',
                'region_id' => 20000,
                'provincia_id' => 21400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 =>
            array (
                'id' => 21409,
                'nombre' => 'San Pedro',
                'region_id' => 20000,
                'provincia_id' => 21400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 =>
            array (
                'id' => 21410,
                'nombre' => 'Santiago de Chilcas',
                'region_id' => 20000,
                'provincia_id' => 21400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 =>
            array (
                'id' => 21501,
                'nombre' => 'Cabana',
                'region_id' => 20000,
                'provincia_id' => 21500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 =>
            array (
                'id' => 21502,
                'nombre' => 'Bolognesi',
                'region_id' => 20000,
                'provincia_id' => 21500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 =>
            array (
                'id' => 21503,
                'nombre' => 'Conchucos',
                'region_id' => 20000,
                'provincia_id' => 21500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 =>
            array (
                'id' => 21504,
                'nombre' => 'Huacaschuque',
                'region_id' => 20000,
                'provincia_id' => 21500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 =>
            array (
                'id' => 21505,
                'nombre' => 'Huandoval',
                'region_id' => 20000,
                'provincia_id' => 21500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 =>
            array (
                'id' => 21506,
                'nombre' => 'Lacabamba',
                'region_id' => 20000,
                'provincia_id' => 21500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 =>
            array (
                'id' => 21507,
                'nombre' => 'Llapo',
                'region_id' => 20000,
                'provincia_id' => 21500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 =>
            array (
                'id' => 21508,
                'nombre' => 'Pallasca',
                'region_id' => 20000,
                'provincia_id' => 21500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 =>
            array (
                'id' => 21509,
                'nombre' => 'Pampas',
                'region_id' => 20000,
                'provincia_id' => 21500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 =>
            array (
                'id' => 21510,
                'nombre' => 'Santa Rosa',
                'region_id' => 20000,
                'provincia_id' => 21500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 =>
            array (
                'id' => 21511,
                'nombre' => 'Tauca',
                'region_id' => 20000,
                'provincia_id' => 21500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 =>
            array (
                'id' => 21601,
                'nombre' => 'Pomabamba',
                'region_id' => 20000,
                'provincia_id' => 21600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 =>
            array (
                'id' => 21602,
                'nombre' => 'Huayllan',
                'region_id' => 20000,
                'provincia_id' => 21600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 =>
            array (
                'id' => 21603,
                'nombre' => 'Parobamba',
                'region_id' => 20000,
                'provincia_id' => 21600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 =>
            array (
                'id' => 21604,
                'nombre' => 'Quinuabamba',
                'region_id' => 20000,
                'provincia_id' => 21600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 =>
            array (
                'id' => 21701,
                'nombre' => 'Recuay',
                'region_id' => 20000,
                'provincia_id' => 21700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 =>
            array (
                'id' => 21702,
                'nombre' => 'Catac',
                'region_id' => 20000,
                'provincia_id' => 21700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 =>
            array (
                'id' => 21703,
                'nombre' => 'Cotaparaco',
                'region_id' => 20000,
                'provincia_id' => 21700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 =>
            array (
                'id' => 21704,
                'nombre' => 'Huayllapampa',
                'region_id' => 20000,
                'provincia_id' => 21700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 =>
            array (
                'id' => 21705,
                'nombre' => 'Llacllin',
                'region_id' => 20000,
                'provincia_id' => 21700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 =>
            array (
                'id' => 21706,
                'nombre' => 'Marca',
                'region_id' => 20000,
                'provincia_id' => 21700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 =>
            array (
                'id' => 21707,
                'nombre' => 'Pampas Chico',
                'region_id' => 20000,
                'provincia_id' => 21700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 =>
            array (
                'id' => 21708,
                'nombre' => 'Pararin',
                'region_id' => 20000,
                'provincia_id' => 21700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 =>
            array (
                'id' => 21709,
                'nombre' => 'Tapacocha',
                'region_id' => 20000,
                'provincia_id' => 21700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 =>
            array (
                'id' => 21710,
                'nombre' => 'Ticapampa',
                'region_id' => 20000,
                'provincia_id' => 21700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 =>
            array (
                'id' => 21801,
                'nombre' => 'Chimbote',
                'region_id' => 20000,
                'provincia_id' => 21800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 =>
            array (
                'id' => 21802,
                'nombre' => 'Cáceres del Perú',
                'region_id' => 20000,
                'provincia_id' => 21800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 =>
            array (
                'id' => 21803,
                'nombre' => 'Coishco',
                'region_id' => 20000,
                'provincia_id' => 21800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 =>
            array (
                'id' => 21804,
                'nombre' => 'Macate',
                'region_id' => 20000,
                'provincia_id' => 21800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 =>
            array (
                'id' => 21805,
                'nombre' => 'Moro',
                'region_id' => 20000,
                'provincia_id' => 21800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 =>
            array (
                'id' => 21806,
                'nombre' => 'Nepeña',
                'region_id' => 20000,
                'provincia_id' => 21800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 =>
            array (
                'id' => 21807,
                'nombre' => 'Samanco',
                'region_id' => 20000,
                'provincia_id' => 21800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 =>
            array (
                'id' => 21808,
                'nombre' => 'Santa',
                'region_id' => 20000,
                'provincia_id' => 21800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 =>
            array (
                'id' => 21809,
                'nombre' => 'Nuevo Chimbote',
                'region_id' => 20000,
                'provincia_id' => 21800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 =>
            array (
                'id' => 21901,
                'nombre' => 'Sihuas',
                'region_id' => 20000,
                'provincia_id' => 21900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 =>
            array (
                'id' => 21902,
                'nombre' => 'Acobamba',
                'region_id' => 20000,
                'provincia_id' => 21900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 =>
            array (
                'id' => 21903,
                'nombre' => 'Alfonso Ugarte',
                'region_id' => 20000,
                'provincia_id' => 21900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 =>
            array (
                'id' => 21904,
                'nombre' => 'Cashapampa',
                'region_id' => 20000,
                'provincia_id' => 21900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 =>
            array (
                'id' => 21905,
                'nombre' => 'Chingalpo',
                'region_id' => 20000,
                'provincia_id' => 21900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 =>
            array (
                'id' => 21906,
                'nombre' => 'Huayllabamba',
                'region_id' => 20000,
                'provincia_id' => 21900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 =>
            array (
                'id' => 21907,
                'nombre' => 'Quiches',
                'region_id' => 20000,
                'provincia_id' => 21900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 =>
            array (
                'id' => 21908,
                'nombre' => 'Ragash',
                'region_id' => 20000,
                'provincia_id' => 21900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 =>
            array (
                'id' => 21909,
                'nombre' => 'San Juan',
                'region_id' => 20000,
                'provincia_id' => 21900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 =>
            array (
                'id' => 21910,
                'nombre' => 'Sicsibamba',
                'region_id' => 20000,
                'provincia_id' => 21900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 =>
            array (
                'id' => 22001,
                'nombre' => 'Yungay',
                'region_id' => 20000,
                'provincia_id' => 22000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 =>
            array (
                'id' => 22002,
                'nombre' => 'Cascapara',
                'region_id' => 20000,
                'provincia_id' => 22000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 =>
            array (
                'id' => 22003,
                'nombre' => 'Mancos',
                'region_id' => 20000,
                'provincia_id' => 22000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 =>
            array (
                'id' => 22004,
                'nombre' => 'Matacoto',
                'region_id' => 20000,
                'provincia_id' => 22000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 =>
            array (
                'id' => 22005,
                'nombre' => 'Quillo',
                'region_id' => 20000,
                'provincia_id' => 22000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 =>
            array (
                'id' => 22006,
                'nombre' => 'Ranrahirca',
                'region_id' => 20000,
                'provincia_id' => 22000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 =>
            array (
                'id' => 22007,
                'nombre' => 'Shupluy',
                'region_id' => 20000,
                'provincia_id' => 22000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 =>
            array (
                'id' => 22008,
                'nombre' => 'Yanama',
                'region_id' => 20000,
                'provincia_id' => 22000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 =>
            array (
                'id' => 30101,
                'nombre' => 'Abancay',
                'region_id' => 30000,
                'provincia_id' => 30100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 =>
            array (
                'id' => 30102,
                'nombre' => 'Chacoche',
                'region_id' => 30000,
                'provincia_id' => 30100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 =>
            array (
                'id' => 30103,
                'nombre' => 'Circa',
                'region_id' => 30000,
                'provincia_id' => 30100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 =>
            array (
                'id' => 30104,
                'nombre' => 'Curahuasi',
                'region_id' => 30000,
                'provincia_id' => 30100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 =>
            array (
                'id' => 30105,
                'nombre' => 'Huanipaca',
                'region_id' => 30000,
                'provincia_id' => 30100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 =>
            array (
                'id' => 30106,
                'nombre' => 'Lambrama',
                'region_id' => 30000,
                'provincia_id' => 30100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 =>
            array (
                'id' => 30107,
                'nombre' => 'Pichirhua',
                'region_id' => 30000,
                'provincia_id' => 30100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 =>
            array (
                'id' => 30108,
                'nombre' => 'San Pedro de Cachora',
                'region_id' => 30000,
                'provincia_id' => 30100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 =>
            array (
                'id' => 30109,
                'nombre' => 'Tamburco',
                'region_id' => 30000,
                'provincia_id' => 30100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 =>
            array (
                'id' => 30201,
                'nombre' => 'Andahuaylas',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 =>
            array (
                'id' => 30202,
                'nombre' => 'Andarapa',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 =>
            array (
                'id' => 30203,
                'nombre' => 'Chiara',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 =>
            array (
                'id' => 30204,
                'nombre' => 'Huancarama',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 =>
            array (
                'id' => 30205,
                'nombre' => 'Huancaray',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 =>
            array (
                'id' => 30206,
                'nombre' => 'Huayana',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 =>
            array (
                'id' => 30207,
                'nombre' => 'Kishuara',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 =>
            array (
                'id' => 30208,
                'nombre' => 'Pacobamba',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 =>
            array (
                'id' => 30209,
                'nombre' => 'Pacucha',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 =>
            array (
                'id' => 30210,
                'nombre' => 'Pampachiri',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 =>
            array (
                'id' => 30211,
                'nombre' => 'Pomacocha',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 =>
            array (
                'id' => 30212,
                'nombre' => 'San Antonio de Cachi',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 =>
            array (
                'id' => 30213,
                'nombre' => 'San Jerónimo',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 =>
            array (
                'id' => 30214,
                'nombre' => 'San Miguel de Chaccrampa',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 =>
            array (
                'id' => 30215,
                'nombre' => 'Santa María de Chicmo',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 =>
            array (
                'id' => 30216,
                'nombre' => 'Talavera',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 =>
            array (
                'id' => 30217,
                'nombre' => 'Tumay Huaraca',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 =>
            array (
                'id' => 30218,
                'nombre' => 'Turpo',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 =>
            array (
                'id' => 30219,
                'nombre' => 'Kaquiabamba',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 =>
            array (
                'id' => 30220,
                'nombre' => 'José María Arguedas',
                'region_id' => 30000,
                'provincia_id' => 30200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 =>
            array (
                'id' => 30301,
                'nombre' => 'Antabamba',
                'region_id' => 30000,
                'provincia_id' => 30300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 =>
            array (
                'id' => 30302,
                'nombre' => 'El Oro',
                'region_id' => 30000,
                'provincia_id' => 30300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 =>
            array (
                'id' => 30303,
                'nombre' => 'Huaquirca',
                'region_id' => 30000,
                'provincia_id' => 30300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 =>
            array (
                'id' => 30304,
                'nombre' => 'Juan Espinoza Medrano',
                'region_id' => 30000,
                'provincia_id' => 30300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 =>
            array (
                'id' => 30305,
                'nombre' => 'Oropesa',
                'region_id' => 30000,
                'provincia_id' => 30300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 =>
            array (
                'id' => 30306,
                'nombre' => 'Pachaconas',
                'region_id' => 30000,
                'provincia_id' => 30300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 =>
            array (
                'id' => 30307,
                'nombre' => 'Sabaino',
                'region_id' => 30000,
                'provincia_id' => 30300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 =>
            array (
                'id' => 30401,
                'nombre' => 'Chalhuanca',
                'region_id' => 30000,
                'provincia_id' => 30400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 =>
            array (
                'id' => 30402,
                'nombre' => 'Capaya',
                'region_id' => 30000,
                'provincia_id' => 30400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 =>
            array (
                'id' => 30403,
                'nombre' => 'Caraybamba',
                'region_id' => 30000,
                'provincia_id' => 30400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 =>
            array (
                'id' => 30404,
                'nombre' => 'Chapimarca',
                'region_id' => 30000,
                'provincia_id' => 30400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 =>
            array (
                'id' => 30405,
                'nombre' => 'Colcabamba',
                'region_id' => 30000,
                'provincia_id' => 30400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 =>
            array (
                'id' => 30406,
                'nombre' => 'Cotaruse',
                'region_id' => 30000,
                'provincia_id' => 30400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 =>
            array (
                'id' => 30407,
                'nombre' => 'Ihuayllo',
                'region_id' => 30000,
                'provincia_id' => 30400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 =>
            array (
                'id' => 30408,
                'nombre' => 'Justo Apu Sahuaraura',
                'region_id' => 30000,
                'provincia_id' => 30400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 =>
            array (
                'id' => 30409,
                'nombre' => 'Lucre',
                'region_id' => 30000,
                'provincia_id' => 30400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 =>
            array (
                'id' => 30410,
                'nombre' => 'Pocohuanca',
                'region_id' => 30000,
                'provincia_id' => 30400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 =>
            array (
                'id' => 30411,
                'nombre' => 'San Juan de Chacña',
                'region_id' => 30000,
                'provincia_id' => 30400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 =>
            array (
                'id' => 30412,
                'nombre' => 'Sañayca',
                'region_id' => 30000,
                'provincia_id' => 30400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 =>
            array (
                'id' => 30413,
                'nombre' => 'Soraya',
                'region_id' => 30000,
                'provincia_id' => 30400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 =>
            array (
                'id' => 30414,
                'nombre' => 'Tapairihua',
                'region_id' => 30000,
                'provincia_id' => 30400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 =>
            array (
                'id' => 30415,
                'nombre' => 'Tintay',
                'region_id' => 30000,
                'provincia_id' => 30400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 =>
            array (
                'id' => 30416,
                'nombre' => 'Toraya',
                'region_id' => 30000,
                'provincia_id' => 30400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 =>
            array (
                'id' => 30417,
                'nombre' => 'Yanaca',
                'region_id' => 30000,
                'provincia_id' => 30400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 =>
            array (
                'id' => 30501,
                'nombre' => 'Tambobamba',
                'region_id' => 30000,
                'provincia_id' => 30500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 =>
            array (
                'id' => 30502,
                'nombre' => 'Cotabambas',
                'region_id' => 30000,
                'provincia_id' => 30500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 =>
            array (
                'id' => 30503,
                'nombre' => 'Coyllurqui',
                'region_id' => 30000,
                'provincia_id' => 30500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 =>
            array (
                'id' => 30504,
                'nombre' => 'Haquira',
                'region_id' => 30000,
                'provincia_id' => 30500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 =>
            array (
                'id' => 30505,
                'nombre' => 'Mara',
                'region_id' => 30000,
                'provincia_id' => 30500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 =>
            array (
                'id' => 30506,
                'nombre' => 'Challhuahuacho',
                'region_id' => 30000,
                'provincia_id' => 30500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 =>
            array (
                'id' => 30601,
                'nombre' => 'Chincheros',
                'region_id' => 30000,
                'provincia_id' => 30600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 =>
            array (
                'id' => 30602,
                'nombre' => 'Anco_Huallo',
                'region_id' => 30000,
                'provincia_id' => 30600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 =>
            array (
                'id' => 30603,
                'nombre' => 'Cocharcas',
                'region_id' => 30000,
                'provincia_id' => 30600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 =>
            array (
                'id' => 30604,
                'nombre' => 'Huaccana',
                'region_id' => 30000,
                'provincia_id' => 30600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 =>
            array (
                'id' => 30605,
                'nombre' => 'Ocobamba',
                'region_id' => 30000,
                'provincia_id' => 30600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 =>
            array (
                'id' => 30606,
                'nombre' => 'Ongoy',
                'region_id' => 30000,
                'provincia_id' => 30600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 =>
            array (
                'id' => 30607,
                'nombre' => 'Uranmarca',
                'region_id' => 30000,
                'provincia_id' => 30600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 =>
            array (
                'id' => 30608,
                'nombre' => 'Ranracancha',
                'region_id' => 30000,
                'provincia_id' => 30600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 =>
            array (
                'id' => 30609,
                'nombre' => 'Rocchacc',
                'region_id' => 30000,
                'provincia_id' => 30600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 =>
            array (
                'id' => 30610,
                'nombre' => 'El Porvenir',
                'region_id' => 30000,
                'provincia_id' => 30600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 =>
            array (
                'id' => 30611,
                'nombre' => 'Los Chankas',
                'region_id' => 30000,
                'provincia_id' => 30600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 =>
            array (
                'id' => 30701,
                'nombre' => 'Chuquibambilla',
                'region_id' => 30000,
                'provincia_id' => 30700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 =>
            array (
                'id' => 30702,
                'nombre' => 'Curpahuasi',
                'region_id' => 30000,
                'provincia_id' => 30700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 =>
            array (
                'id' => 30703,
                'nombre' => 'Gamarra',
                'region_id' => 30000,
                'provincia_id' => 30700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 =>
            array (
                'id' => 30704,
                'nombre' => 'Huayllati',
                'region_id' => 30000,
                'provincia_id' => 30700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 =>
            array (
                'id' => 30705,
                'nombre' => 'Mamara',
                'region_id' => 30000,
                'provincia_id' => 30700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 =>
            array (
                'id' => 30706,
                'nombre' => 'Micaela Bastidas',
                'region_id' => 30000,
                'provincia_id' => 30700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 =>
            array (
                'id' => 30707,
                'nombre' => 'Pataypampa',
                'region_id' => 30000,
                'provincia_id' => 30700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 =>
            array (
                'id' => 30708,
                'nombre' => 'Progreso',
                'region_id' => 30000,
                'provincia_id' => 30700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 =>
            array (
                'id' => 30709,
                'nombre' => 'San Antonio',
                'region_id' => 30000,
                'provincia_id' => 30700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 =>
            array (
                'id' => 30710,
                'nombre' => 'Santa Rosa',
                'region_id' => 30000,
                'provincia_id' => 30700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 =>
            array (
                'id' => 30711,
                'nombre' => 'Turpay',
                'region_id' => 30000,
                'provincia_id' => 30700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 =>
            array (
                'id' => 30712,
                'nombre' => 'Vilcabamba',
                'region_id' => 30000,
                'provincia_id' => 30700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 =>
            array (
                'id' => 30713,
                'nombre' => 'Virundo',
                'region_id' => 30000,
                'provincia_id' => 30700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 =>
            array (
                'id' => 30714,
                'nombre' => 'Curasco',
                'region_id' => 30000,
                'provincia_id' => 30700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 =>
            array (
                'id' => 40101,
                'nombre' => 'Arequipa',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 =>
            array (
                'id' => 40102,
                'nombre' => 'Alto Selva Alegre',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 =>
            array (
                'id' => 40103,
                'nombre' => 'Cayma',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 =>
            array (
                'id' => 40104,
                'nombre' => 'Cerro Colorado',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 =>
            array (
                'id' => 40105,
                'nombre' => 'Characato',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 =>
            array (
                'id' => 40106,
                'nombre' => 'Chiguata',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 =>
            array (
                'id' => 40107,
                'nombre' => 'Jacobo Hunter',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 =>
            array (
                'id' => 40108,
                'nombre' => 'La Joya',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 =>
            array (
                'id' => 40109,
                'nombre' => 'Mariano Melgar',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 =>
            array (
                'id' => 40110,
                'nombre' => 'Miraflores',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 =>
            array (
                'id' => 40111,
                'nombre' => 'Mollebaya',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 =>
            array (
                'id' => 40112,
                'nombre' => 'Paucarpata',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 =>
            array (
                'id' => 40113,
                'nombre' => 'Pocsi',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 =>
            array (
                'id' => 40114,
                'nombre' => 'Polobaya',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 =>
            array (
                'id' => 40115,
                'nombre' => 'Quequeña',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 =>
            array (
                'id' => 40116,
                'nombre' => 'Sabandia',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 =>
            array (
                'id' => 40117,
                'nombre' => 'Sachaca',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 =>
            array (
                'id' => 40118,
                'nombre' => 'San Juan de Siguas',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 =>
            array (
                'id' => 40119,
                'nombre' => 'San Juan de Tarucani',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 =>
            array (
                'id' => 40120,
                'nombre' => 'Santa Isabel de Siguas',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 =>
            array (
                'id' => 40121,
                'nombre' => 'Santa Rita de Siguas',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 =>
            array (
                'id' => 40122,
                'nombre' => 'Socabaya',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 =>
            array (
                'id' => 40123,
                'nombre' => 'Tiabaya',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 =>
            array (
                'id' => 40124,
                'nombre' => 'Uchumayo',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 =>
            array (
                'id' => 40125,
                'nombre' => 'Vitor',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 =>
            array (
                'id' => 40126,
                'nombre' => 'Yanahuara',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 =>
            array (
                'id' => 40127,
                'nombre' => 'Yarabamba',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 =>
            array (
                'id' => 40128,
                'nombre' => 'Yura',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 =>
            array (
                'id' => 40129,
                'nombre' => 'José Luis Bustamante Y Rivero',
                'region_id' => 40000,
                'provincia_id' => 40100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 =>
            array (
                'id' => 40201,
                'nombre' => 'Camaná',
                'region_id' => 40000,
                'provincia_id' => 40200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 =>
            array (
                'id' => 40202,
                'nombre' => 'José María Quimper',
                'region_id' => 40000,
                'provincia_id' => 40200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 =>
            array (
                'id' => 40203,
                'nombre' => 'Mariano Nicolás Valcárcel',
                'region_id' => 40000,
                'provincia_id' => 40200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 =>
            array (
                'id' => 40204,
                'nombre' => 'Mariscal Cáceres',
                'region_id' => 40000,
                'provincia_id' => 40200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 =>
            array (
                'id' => 40205,
                'nombre' => 'Nicolás de Pierola',
                'region_id' => 40000,
                'provincia_id' => 40200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 =>
            array (
                'id' => 40206,
                'nombre' => 'Ocoña',
                'region_id' => 40000,
                'provincia_id' => 40200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 =>
            array (
                'id' => 40207,
                'nombre' => 'Quilca',
                'region_id' => 40000,
                'provincia_id' => 40200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 =>
            array (
                'id' => 40208,
                'nombre' => 'Samuel Pastor',
                'region_id' => 40000,
                'provincia_id' => 40200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 =>
            array (
                'id' => 40301,
                'nombre' => 'Caravelí',
                'region_id' => 40000,
                'provincia_id' => 40300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 =>
            array (
                'id' => 40302,
                'nombre' => 'Acarí',
                'region_id' => 40000,
                'provincia_id' => 40300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 =>
            array (
                'id' => 40303,
                'nombre' => 'Atico',
                'region_id' => 40000,
                'provincia_id' => 40300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 =>
            array (
                'id' => 40304,
                'nombre' => 'Atiquipa',
                'region_id' => 40000,
                'provincia_id' => 40300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 =>
            array (
                'id' => 40305,
                'nombre' => 'Bella Unión',
                'region_id' => 40000,
                'provincia_id' => 40300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 =>
            array (
                'id' => 40306,
                'nombre' => 'Cahuacho',
                'region_id' => 40000,
                'provincia_id' => 40300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 =>
            array (
                'id' => 40307,
                'nombre' => 'Chala',
                'region_id' => 40000,
                'provincia_id' => 40300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 =>
            array (
                'id' => 40308,
                'nombre' => 'Chaparra',
                'region_id' => 40000,
                'provincia_id' => 40300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 =>
            array (
                'id' => 40309,
                'nombre' => 'Huanuhuanu',
                'region_id' => 40000,
                'provincia_id' => 40300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 =>
            array (
                'id' => 40310,
                'nombre' => 'Jaqui',
                'region_id' => 40000,
                'provincia_id' => 40300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 =>
            array (
                'id' => 40311,
                'nombre' => 'Lomas',
                'region_id' => 40000,
                'provincia_id' => 40300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 =>
            array (
                'id' => 40312,
                'nombre' => 'Quicacha',
                'region_id' => 40000,
                'provincia_id' => 40300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 =>
            array (
                'id' => 40313,
                'nombre' => 'Yauca',
                'region_id' => 40000,
                'provincia_id' => 40300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 =>
            array (
                'id' => 40401,
                'nombre' => 'Aplao',
                'region_id' => 40000,
                'provincia_id' => 40400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 =>
            array (
                'id' => 40402,
                'nombre' => 'Andagua',
                'region_id' => 40000,
                'provincia_id' => 40400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 =>
            array (
                'id' => 40403,
                'nombre' => 'Ayo',
                'region_id' => 40000,
                'provincia_id' => 40400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 =>
            array (
                'id' => 40404,
                'nombre' => 'Chachas',
                'region_id' => 40000,
                'provincia_id' => 40400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 =>
            array (
                'id' => 40405,
                'nombre' => 'Chilcaymarca',
                'region_id' => 40000,
                'provincia_id' => 40400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 =>
            array (
                'id' => 40406,
                'nombre' => 'Choco',
                'region_id' => 40000,
                'provincia_id' => 40400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 =>
            array (
                'id' => 40407,
                'nombre' => 'Huancarqui',
                'region_id' => 40000,
                'provincia_id' => 40400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 =>
            array (
                'id' => 40408,
                'nombre' => 'Machaguay',
                'region_id' => 40000,
                'provincia_id' => 40400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 =>
            array (
                'id' => 40409,
                'nombre' => 'Orcopampa',
                'region_id' => 40000,
                'provincia_id' => 40400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 =>
            array (
                'id' => 40410,
                'nombre' => 'Pampacolca',
                'region_id' => 40000,
                'provincia_id' => 40400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 =>
            array (
                'id' => 40411,
                'nombre' => 'Tipan',
                'region_id' => 40000,
                'provincia_id' => 40400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 =>
            array (
                'id' => 40412,
                'nombre' => 'Uñon',
                'region_id' => 40000,
                'provincia_id' => 40400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 =>
            array (
                'id' => 40413,
                'nombre' => 'Uraca',
                'region_id' => 40000,
                'provincia_id' => 40400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 =>
            array (
                'id' => 40414,
                'nombre' => 'Viraco',
                'region_id' => 40000,
                'provincia_id' => 40400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 =>
            array (
                'id' => 40501,
                'nombre' => 'Chivay',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 =>
            array (
                'id' => 40502,
                'nombre' => 'Achoma',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 =>
            array (
                'id' => 40503,
                'nombre' => 'Cabanaconde',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 =>
            array (
                'id' => 40504,
                'nombre' => 'Callalli',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 =>
            array (
                'id' => 40505,
                'nombre' => 'Caylloma',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 =>
            array (
                'id' => 40506,
                'nombre' => 'Coporaque',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 =>
            array (
                'id' => 40507,
                'nombre' => 'Huambo',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 =>
            array (
                'id' => 40508,
                'nombre' => 'Huanca',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 =>
            array (
                'id' => 40509,
                'nombre' => 'Ichupampa',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 =>
            array (
                'id' => 40510,
                'nombre' => 'Lari',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 =>
            array (
                'id' => 40511,
                'nombre' => 'Lluta',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 =>
            array (
                'id' => 40512,
                'nombre' => 'Maca',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 =>
            array (
                'id' => 40513,
                'nombre' => 'Madrigal',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 =>
            array (
                'id' => 40514,
                'nombre' => 'San Antonio de Chuca',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 =>
            array (
                'id' => 40515,
                'nombre' => 'Sibayo',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 =>
            array (
                'id' => 40516,
                'nombre' => 'Tapay',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 =>
            array (
                'id' => 40517,
                'nombre' => 'Tisco',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 =>
            array (
                'id' => 40518,
                'nombre' => 'Tuti',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 =>
            array (
                'id' => 40519,
                'nombre' => 'Yanque',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 =>
            array (
                'id' => 40520,
                'nombre' => 'Majes',
                'region_id' => 40000,
                'provincia_id' => 40500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 =>
            array (
                'id' => 40601,
                'nombre' => 'Chuquibamba',
                'region_id' => 40000,
                'provincia_id' => 40600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 =>
            array (
                'id' => 40602,
                'nombre' => 'Andaray',
                'region_id' => 40000,
                'provincia_id' => 40600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 =>
            array (
                'id' => 40603,
                'nombre' => 'Cayarani',
                'region_id' => 40000,
                'provincia_id' => 40600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 =>
            array (
                'id' => 40604,
                'nombre' => 'Chichas',
                'region_id' => 40000,
                'provincia_id' => 40600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 =>
            array (
                'id' => 40605,
                'nombre' => 'Iray',
                'region_id' => 40000,
                'provincia_id' => 40600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 =>
            array (
                'id' => 40606,
                'nombre' => 'Río Grande',
                'region_id' => 40000,
                'provincia_id' => 40600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 =>
            array (
                'id' => 40607,
                'nombre' => 'Salamanca',
                'region_id' => 40000,
                'provincia_id' => 40600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 =>
            array (
                'id' => 40608,
                'nombre' => 'Yanaquihua',
                'region_id' => 40000,
                'provincia_id' => 40600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 =>
            array (
                'id' => 40701,
                'nombre' => 'Mollendo',
                'region_id' => 40000,
                'provincia_id' => 40700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 =>
            array (
                'id' => 40702,
                'nombre' => 'Cocachacra',
                'region_id' => 40000,
                'provincia_id' => 40700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 =>
            array (
                'id' => 40703,
                'nombre' => 'Dean Valdivia',
                'region_id' => 40000,
                'provincia_id' => 40700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 =>
            array (
                'id' => 40704,
                'nombre' => 'Islay',
                'region_id' => 40000,
                'provincia_id' => 40700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 =>
            array (
                'id' => 40705,
                'nombre' => 'Mejia',
                'region_id' => 40000,
                'provincia_id' => 40700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 =>
            array (
                'id' => 40706,
                'nombre' => 'Punta de Bombón',
                'region_id' => 40000,
                'provincia_id' => 40700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 =>
            array (
                'id' => 40801,
                'nombre' => 'Cotahuasi',
                'region_id' => 40000,
                'provincia_id' => 40800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 =>
            array (
                'id' => 40802,
                'nombre' => 'Alca',
                'region_id' => 40000,
                'provincia_id' => 40800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 =>
            array (
                'id' => 40803,
                'nombre' => 'Charcana',
                'region_id' => 40000,
                'provincia_id' => 40800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 =>
            array (
                'id' => 40804,
                'nombre' => 'Huaynacotas',
                'region_id' => 40000,
                'provincia_id' => 40800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 =>
            array (
                'id' => 40805,
                'nombre' => 'Pampamarca',
                'region_id' => 40000,
                'provincia_id' => 40800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 =>
            array (
                'id' => 40806,
                'nombre' => 'Puyca',
                'region_id' => 40000,
                'provincia_id' => 40800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 =>
            array (
                'id' => 40807,
                'nombre' => 'Quechualla',
                'region_id' => 40000,
                'provincia_id' => 40800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 =>
            array (
                'id' => 40808,
                'nombre' => 'Sayla',
                'region_id' => 40000,
                'provincia_id' => 40800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 =>
            array (
                'id' => 40809,
                'nombre' => 'Tauria',
                'region_id' => 40000,
                'provincia_id' => 40800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 =>
            array (
                'id' => 40810,
                'nombre' => 'Tomepampa',
                'region_id' => 40000,
                'provincia_id' => 40800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 =>
            array (
                'id' => 40811,
                'nombre' => 'Toro',
                'region_id' => 40000,
                'provincia_id' => 40800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 =>
            array (
                'id' => 50101,
                'nombre' => 'Ayacucho',
                'region_id' => 50000,
                'provincia_id' => 50100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 =>
            array (
                'id' => 50102,
                'nombre' => 'Acocro',
                'region_id' => 50000,
                'provincia_id' => 50100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 =>
            array (
                'id' => 50103,
                'nombre' => 'Acos Vinchos',
                'region_id' => 50000,
                'provincia_id' => 50100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 =>
            array (
                'id' => 50104,
                'nombre' => 'Carmen Alto',
                'region_id' => 50000,
                'provincia_id' => 50100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 =>
            array (
                'id' => 50105,
                'nombre' => 'Chiara',
                'region_id' => 50000,
                'provincia_id' => 50100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 =>
            array (
                'id' => 50106,
                'nombre' => 'Ocros',
                'region_id' => 50000,
                'provincia_id' => 50100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 =>
            array (
                'id' => 50107,
                'nombre' => 'Pacaycasa',
                'region_id' => 50000,
                'provincia_id' => 50100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 =>
            array (
                'id' => 50108,
                'nombre' => 'Quinua',
                'region_id' => 50000,
                'provincia_id' => 50100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 =>
            array (
                'id' => 50109,
                'nombre' => 'San José de Ticllas',
                'region_id' => 50000,
                'provincia_id' => 50100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 =>
            array (
                'id' => 50110,
                'nombre' => 'San Juan Bautista',
                'region_id' => 50000,
                'provincia_id' => 50100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 =>
            array (
                'id' => 50111,
                'nombre' => 'Santiago de Pischa',
                'region_id' => 50000,
                'provincia_id' => 50100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 =>
            array (
                'id' => 50112,
                'nombre' => 'Socos',
                'region_id' => 50000,
                'provincia_id' => 50100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 =>
            array (
                'id' => 50113,
                'nombre' => 'Tambillo',
                'region_id' => 50000,
                'provincia_id' => 50100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 =>
            array (
                'id' => 50114,
                'nombre' => 'Vinchos',
                'region_id' => 50000,
                'provincia_id' => 50100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 =>
            array (
                'id' => 50115,
                'nombre' => 'Jesús Nazareno',
                'region_id' => 50000,
                'provincia_id' => 50100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 =>
            array (
                'id' => 50116,
                'nombre' => 'Andrés Avelino Cáceres Dorregaray',
                'region_id' => 50000,
                'provincia_id' => 50100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 =>
            array (
                'id' => 50201,
                'nombre' => 'Cangallo',
                'region_id' => 50000,
                'provincia_id' => 50200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 =>
            array (
                'id' => 50202,
                'nombre' => 'Chuschi',
                'region_id' => 50000,
                'provincia_id' => 50200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 =>
            array (
                'id' => 50203,
                'nombre' => 'Los Morochucos',
                'region_id' => 50000,
                'provincia_id' => 50200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 =>
            array (
                'id' => 50204,
                'nombre' => 'María Parado de Bellido',
                'region_id' => 50000,
                'provincia_id' => 50200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 =>
            array (
                'id' => 50205,
                'nombre' => 'Paras',
                'region_id' => 50000,
                'provincia_id' => 50200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 =>
            array (
                'id' => 50206,
                'nombre' => 'Totos',
                'region_id' => 50000,
                'provincia_id' => 50200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 =>
            array (
                'id' => 50301,
                'nombre' => 'Sancos',
                'region_id' => 50000,
                'provincia_id' => 50300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 =>
            array (
                'id' => 50302,
                'nombre' => 'Carapo',
                'region_id' => 50000,
                'provincia_id' => 50300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 =>
            array (
                'id' => 50303,
                'nombre' => 'Sacsamarca',
                'region_id' => 50000,
                'provincia_id' => 50300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 =>
            array (
                'id' => 50304,
                'nombre' => 'Santiago de Lucanamarca',
                'region_id' => 50000,
                'provincia_id' => 50300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 =>
            array (
                'id' => 50401,
                'nombre' => 'Huanta',
                'region_id' => 50000,
                'provincia_id' => 50400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 =>
            array (
                'id' => 50402,
                'nombre' => 'Ayahuanco',
                'region_id' => 50000,
                'provincia_id' => 50400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 =>
            array (
                'id' => 50403,
                'nombre' => 'Huamanguilla',
                'region_id' => 50000,
                'provincia_id' => 50400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 =>
            array (
                'id' => 50404,
                'nombre' => 'Iguain',
                'region_id' => 50000,
                'provincia_id' => 50400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 =>
            array (
                'id' => 50405,
                'nombre' => 'Luricocha',
                'region_id' => 50000,
                'provincia_id' => 50400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 =>
            array (
                'id' => 50406,
                'nombre' => 'Santillana',
                'region_id' => 50000,
                'provincia_id' => 50400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 =>
            array (
                'id' => 50407,
                'nombre' => 'Sivia',
                'region_id' => 50000,
                'provincia_id' => 50400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 =>
            array (
                'id' => 50408,
                'nombre' => 'Llochegua',
                'region_id' => 50000,
                'provincia_id' => 50400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 =>
            array (
                'id' => 50409,
                'nombre' => 'Canayre',
                'region_id' => 50000,
                'provincia_id' => 50400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 =>
            array (
                'id' => 50410,
                'nombre' => 'Uchuraccay',
                'region_id' => 50000,
                'provincia_id' => 50400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 =>
            array (
                'id' => 50411,
                'nombre' => 'Pucacolpa',
                'region_id' => 50000,
                'provincia_id' => 50400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 =>
            array (
                'id' => 50412,
                'nombre' => 'Chaca',
                'region_id' => 50000,
                'provincia_id' => 50400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 =>
            array (
                'id' => 50501,
                'nombre' => 'San Miguel',
                'region_id' => 50000,
                'provincia_id' => 50500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 =>
            array (
                'id' => 50502,
                'nombre' => 'Anco',
                'region_id' => 50000,
                'provincia_id' => 50500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 =>
            array (
                'id' => 50503,
                'nombre' => 'Ayna',
                'region_id' => 50000,
                'provincia_id' => 50500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 =>
            array (
                'id' => 50504,
                'nombre' => 'Chilcas',
                'region_id' => 50000,
                'provincia_id' => 50500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 =>
            array (
                'id' => 50505,
                'nombre' => 'Chungui',
                'region_id' => 50000,
                'provincia_id' => 50500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 =>
            array (
                'id' => 50506,
                'nombre' => 'Luis Carranza',
                'region_id' => 50000,
                'provincia_id' => 50500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 =>
            array (
                'id' => 50507,
                'nombre' => 'Santa Rosa',
                'region_id' => 50000,
                'provincia_id' => 50500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 =>
            array (
                'id' => 50508,
                'nombre' => 'Tambo',
                'region_id' => 50000,
                'provincia_id' => 50500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 =>
            array (
                'id' => 50509,
                'nombre' => 'Samugari',
                'region_id' => 50000,
                'provincia_id' => 50500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 =>
            array (
                'id' => 50510,
                'nombre' => 'Anchihuay',
                'region_id' => 50000,
                'provincia_id' => 50500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 =>
            array (
                'id' => 50511,
                'nombre' => 'Oronccoy',
                'region_id' => 50000,
                'provincia_id' => 50500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 =>
            array (
                'id' => 50601,
                'nombre' => 'Puquio',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 =>
            array (
                'id' => 50602,
                'nombre' => 'Aucara',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 =>
            array (
                'id' => 50603,
                'nombre' => 'Cabana',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 =>
            array (
                'id' => 50604,
                'nombre' => 'Carmen Salcedo',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 =>
            array (
                'id' => 50605,
                'nombre' => 'Chaviña',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 =>
            array (
                'id' => 50606,
                'nombre' => 'Chipao',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 =>
            array (
                'id' => 50607,
                'nombre' => 'Huac-Huas',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 =>
            array (
                'id' => 50608,
                'nombre' => 'Laramate',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('distritos')->insert(array (
            0 =>
            array (
                'id' => 50609,
                'nombre' => 'Leoncio Prado',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 50610,
                'nombre' => 'Llauta',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 50611,
                'nombre' => 'Lucanas',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 50612,
                'nombre' => 'Ocaña',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 50613,
                'nombre' => 'Otoca',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 50614,
                'nombre' => 'Saisa',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array (
                'id' => 50615,
                'nombre' => 'San Cristóbal',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array (
                'id' => 50616,
                'nombre' => 'San Juan',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array (
                'id' => 50617,
                'nombre' => 'San Pedro',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array (
                'id' => 50618,
                'nombre' => 'San Pedro de Palco',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 =>
            array (
                'id' => 50619,
                'nombre' => 'Sancos',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 =>
            array (
                'id' => 50620,
                'nombre' => 'Santa Ana de Huaycahuacho',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 =>
            array (
                'id' => 50621,
                'nombre' => 'Santa Lucia',
                'region_id' => 50000,
                'provincia_id' => 50600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 =>
            array (
                'id' => 50701,
                'nombre' => 'Coracora',
                'region_id' => 50000,
                'provincia_id' => 50700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 =>
            array (
                'id' => 50702,
                'nombre' => 'Chumpi',
                'region_id' => 50000,
                'provincia_id' => 50700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 =>
            array (
                'id' => 50703,
                'nombre' => 'Coronel Castañeda',
                'region_id' => 50000,
                'provincia_id' => 50700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 =>
            array (
                'id' => 50704,
                'nombre' => 'Pacapausa',
                'region_id' => 50000,
                'provincia_id' => 50700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 =>
            array (
                'id' => 50705,
                'nombre' => 'Pullo',
                'region_id' => 50000,
                'provincia_id' => 50700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 =>
            array (
                'id' => 50706,
                'nombre' => 'Puyusca',
                'region_id' => 50000,
                'provincia_id' => 50700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 =>
            array (
                'id' => 50707,
                'nombre' => 'San Francisco de Ravacayco',
                'region_id' => 50000,
                'provincia_id' => 50700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 =>
            array (
                'id' => 50708,
                'nombre' => 'Upahuacho',
                'region_id' => 50000,
                'provincia_id' => 50700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 =>
            array (
                'id' => 50801,
                'nombre' => 'Pausa',
                'region_id' => 50000,
                'provincia_id' => 50800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 =>
            array (
                'id' => 50802,
                'nombre' => 'Colta',
                'region_id' => 50000,
                'provincia_id' => 50800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 =>
            array (
                'id' => 50803,
                'nombre' => 'Corculla',
                'region_id' => 50000,
                'provincia_id' => 50800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 =>
            array (
                'id' => 50804,
                'nombre' => 'Lampa',
                'region_id' => 50000,
                'provincia_id' => 50800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 =>
            array (
                'id' => 50805,
                'nombre' => 'Marcabamba',
                'region_id' => 50000,
                'provincia_id' => 50800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 =>
            array (
                'id' => 50806,
                'nombre' => 'Oyolo',
                'region_id' => 50000,
                'provincia_id' => 50800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 =>
            array (
                'id' => 50807,
                'nombre' => 'Pararca',
                'region_id' => 50000,
                'provincia_id' => 50800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 =>
            array (
                'id' => 50808,
                'nombre' => 'San Javier de Alpabamba',
                'region_id' => 50000,
                'provincia_id' => 50800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 =>
            array (
                'id' => 50809,
                'nombre' => 'San José de Ushua',
                'region_id' => 50000,
                'provincia_id' => 50800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 =>
            array (
                'id' => 50810,
                'nombre' => 'Sara Sara',
                'region_id' => 50000,
                'provincia_id' => 50800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 =>
            array (
                'id' => 50901,
                'nombre' => 'Querobamba',
                'region_id' => 50000,
                'provincia_id' => 50900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 =>
            array (
                'id' => 50902,
                'nombre' => 'Belén',
                'region_id' => 50000,
                'provincia_id' => 50900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 =>
            array (
                'id' => 50903,
                'nombre' => 'Chalcos',
                'region_id' => 50000,
                'provincia_id' => 50900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 =>
            array (
                'id' => 50904,
                'nombre' => 'Chilcayoc',
                'region_id' => 50000,
                'provincia_id' => 50900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 =>
            array (
                'id' => 50905,
                'nombre' => 'Huacaña',
                'region_id' => 50000,
                'provincia_id' => 50900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 =>
            array (
                'id' => 50906,
                'nombre' => 'Morcolla',
                'region_id' => 50000,
                'provincia_id' => 50900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 =>
            array (
                'id' => 50907,
                'nombre' => 'Paico',
                'region_id' => 50000,
                'provincia_id' => 50900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 =>
            array (
                'id' => 50908,
                'nombre' => 'San Pedro de Larcay',
                'region_id' => 50000,
                'provincia_id' => 50900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 =>
            array (
                'id' => 50909,
                'nombre' => 'San Salvador de Quije',
                'region_id' => 50000,
                'provincia_id' => 50900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 =>
            array (
                'id' => 50910,
                'nombre' => 'Santiago de Paucaray',
                'region_id' => 50000,
                'provincia_id' => 50900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 =>
            array (
                'id' => 50911,
                'nombre' => 'Soras',
                'region_id' => 50000,
                'provincia_id' => 50900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 =>
            array (
                'id' => 51001,
                'nombre' => 'Huancapi',
                'region_id' => 50000,
                'provincia_id' => 51000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 =>
            array (
                'id' => 51002,
                'nombre' => 'Alcamenca',
                'region_id' => 50000,
                'provincia_id' => 51000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 =>
            array (
                'id' => 51003,
                'nombre' => 'Apongo',
                'region_id' => 50000,
                'provincia_id' => 51000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 =>
            array (
                'id' => 51004,
                'nombre' => 'Asquipata',
                'region_id' => 50000,
                'provincia_id' => 51000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 =>
            array (
                'id' => 51005,
                'nombre' => 'Canaria',
                'region_id' => 50000,
                'provincia_id' => 51000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 =>
            array (
                'id' => 51006,
                'nombre' => 'Cayara',
                'region_id' => 50000,
                'provincia_id' => 51000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 =>
            array (
                'id' => 51007,
                'nombre' => 'Colca',
                'region_id' => 50000,
                'provincia_id' => 51000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 =>
            array (
                'id' => 51008,
                'nombre' => 'Huamanquiquia',
                'region_id' => 50000,
                'provincia_id' => 51000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 =>
            array (
                'id' => 51009,
                'nombre' => 'Huancaraylla',
                'region_id' => 50000,
                'provincia_id' => 51000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 =>
            array (
                'id' => 51010,
                'nombre' => 'Huaya',
                'region_id' => 50000,
                'provincia_id' => 51000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 =>
            array (
                'id' => 51011,
                'nombre' => 'Sarhua',
                'region_id' => 50000,
                'provincia_id' => 51000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 =>
            array (
                'id' => 51012,
                'nombre' => 'Vilcanchos',
                'region_id' => 50000,
                'provincia_id' => 51000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 =>
            array (
                'id' => 51101,
                'nombre' => 'Vilcas Huaman',
                'region_id' => 50000,
                'provincia_id' => 51100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 =>
            array (
                'id' => 51102,
                'nombre' => 'Accomarca',
                'region_id' => 50000,
                'provincia_id' => 51100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 =>
            array (
                'id' => 51103,
                'nombre' => 'Carhuanca',
                'region_id' => 50000,
                'provincia_id' => 51100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 =>
            array (
                'id' => 51104,
                'nombre' => 'Concepción',
                'region_id' => 50000,
                'provincia_id' => 51100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 =>
            array (
                'id' => 51105,
                'nombre' => 'Huambalpa',
                'region_id' => 50000,
                'provincia_id' => 51100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 =>
            array (
                'id' => 51106,
                'nombre' => 'Independencia',
                'region_id' => 50000,
                'provincia_id' => 51100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 =>
            array (
                'id' => 51107,
                'nombre' => 'Saurama',
                'region_id' => 50000,
                'provincia_id' => 51100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 =>
            array (
                'id' => 51108,
                'nombre' => 'Vischongo',
                'region_id' => 50000,
                'provincia_id' => 51100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 =>
            array (
                'id' => 60101,
                'nombre' => 'Cajamarca',
                'region_id' => 60000,
                'provincia_id' => 60100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 =>
            array (
                'id' => 60102,
                'nombre' => 'Asunción',
                'region_id' => 60000,
                'provincia_id' => 60100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 =>
            array (
                'id' => 60103,
                'nombre' => 'Chetilla',
                'region_id' => 60000,
                'provincia_id' => 60100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 =>
            array (
                'id' => 60104,
                'nombre' => 'Cospan',
                'region_id' => 60000,
                'provincia_id' => 60100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 =>
            array (
                'id' => 60105,
                'nombre' => 'Encañada',
                'region_id' => 60000,
                'provincia_id' => 60100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 =>
            array (
                'id' => 60106,
                'nombre' => 'Jesús',
                'region_id' => 60000,
                'provincia_id' => 60100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 =>
            array (
                'id' => 60107,
                'nombre' => 'Llacanora',
                'region_id' => 60000,
                'provincia_id' => 60100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 =>
            array (
                'id' => 60108,
                'nombre' => 'Los Baños del Inca',
                'region_id' => 60000,
                'provincia_id' => 60100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 =>
            array (
                'id' => 60109,
                'nombre' => 'Magdalena',
                'region_id' => 60000,
                'provincia_id' => 60100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 =>
            array (
                'id' => 60110,
                'nombre' => 'Matara',
                'region_id' => 60000,
                'provincia_id' => 60100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 =>
            array (
                'id' => 60111,
                'nombre' => 'Namora',
                'region_id' => 60000,
                'provincia_id' => 60100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 =>
            array (
                'id' => 60112,
                'nombre' => 'San Juan',
                'region_id' => 60000,
                'provincia_id' => 60100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 =>
            array (
                'id' => 60201,
                'nombre' => 'Cajabamba',
                'region_id' => 60000,
                'provincia_id' => 60200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 =>
            array (
                'id' => 60202,
                'nombre' => 'Cachachi',
                'region_id' => 60000,
                'provincia_id' => 60200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 =>
            array (
                'id' => 60203,
                'nombre' => 'Condebamba',
                'region_id' => 60000,
                'provincia_id' => 60200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 =>
            array (
                'id' => 60204,
                'nombre' => 'Sitacocha',
                'region_id' => 60000,
                'provincia_id' => 60200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 =>
            array (
                'id' => 60301,
                'nombre' => 'Celendín',
                'region_id' => 60000,
                'provincia_id' => 60300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 =>
            array (
                'id' => 60302,
                'nombre' => 'Chumuch',
                'region_id' => 60000,
                'provincia_id' => 60300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 =>
            array (
                'id' => 60303,
                'nombre' => 'Cortegana',
                'region_id' => 60000,
                'provincia_id' => 60300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 =>
            array (
                'id' => 60304,
                'nombre' => 'Huasmin',
                'region_id' => 60000,
                'provincia_id' => 60300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 =>
            array (
                'id' => 60305,
                'nombre' => 'Jorge Chávez',
                'region_id' => 60000,
                'provincia_id' => 60300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 =>
            array (
                'id' => 60306,
                'nombre' => 'José Gálvez',
                'region_id' => 60000,
                'provincia_id' => 60300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 =>
            array (
                'id' => 60307,
                'nombre' => 'Miguel Iglesias',
                'region_id' => 60000,
                'provincia_id' => 60300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 =>
            array (
                'id' => 60308,
                'nombre' => 'Oxamarca',
                'region_id' => 60000,
                'provincia_id' => 60300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 =>
            array (
                'id' => 60309,
                'nombre' => 'Sorochuco',
                'region_id' => 60000,
                'provincia_id' => 60300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 =>
            array (
                'id' => 60310,
                'nombre' => 'Sucre',
                'region_id' => 60000,
                'provincia_id' => 60300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 =>
            array (
                'id' => 60311,
                'nombre' => 'Utco',
                'region_id' => 60000,
                'provincia_id' => 60300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 =>
            array (
                'id' => 60312,
                'nombre' => 'La Libertad de Pallan',
                'region_id' => 60000,
                'provincia_id' => 60300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 =>
            array (
                'id' => 60401,
                'nombre' => 'Chota',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 =>
            array (
                'id' => 60402,
                'nombre' => 'Anguia',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 =>
            array (
                'id' => 60403,
                'nombre' => 'Chadin',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 =>
            array (
                'id' => 60404,
                'nombre' => 'Chiguirip',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 =>
            array (
                'id' => 60405,
                'nombre' => 'Chimban',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 =>
            array (
                'id' => 60406,
                'nombre' => 'Choropampa',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 =>
            array (
                'id' => 60407,
                'nombre' => 'Cochabamba',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 =>
            array (
                'id' => 60408,
                'nombre' => 'Conchan',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 =>
            array (
                'id' => 60409,
                'nombre' => 'Huambos',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 =>
            array (
                'id' => 60410,
                'nombre' => 'Lajas',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 =>
            array (
                'id' => 60411,
                'nombre' => 'Llama',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 =>
            array (
                'id' => 60412,
                'nombre' => 'Miracosta',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 =>
            array (
                'id' => 60413,
                'nombre' => 'Paccha',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 =>
            array (
                'id' => 60414,
                'nombre' => 'Pion',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 =>
            array (
                'id' => 60415,
                'nombre' => 'Querocoto',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 =>
            array (
                'id' => 60416,
                'nombre' => 'San Juan de Licupis',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 =>
            array (
                'id' => 60417,
                'nombre' => 'Tacabamba',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 =>
            array (
                'id' => 60418,
                'nombre' => 'Tocmoche',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 =>
            array (
                'id' => 60419,
                'nombre' => 'Chalamarca',
                'region_id' => 60000,
                'provincia_id' => 60400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 =>
            array (
                'id' => 60501,
                'nombre' => 'Contumaza',
                'region_id' => 60000,
                'provincia_id' => 60500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 =>
            array (
                'id' => 60502,
                'nombre' => 'Chilete',
                'region_id' => 60000,
                'provincia_id' => 60500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 =>
            array (
                'id' => 60503,
                'nombre' => 'Cupisnique',
                'region_id' => 60000,
                'provincia_id' => 60500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 =>
            array (
                'id' => 60504,
                'nombre' => 'Guzmango',
                'region_id' => 60000,
                'provincia_id' => 60500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 =>
            array (
                'id' => 60505,
                'nombre' => 'San Benito',
                'region_id' => 60000,
                'provincia_id' => 60500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 =>
            array (
                'id' => 60506,
                'nombre' => 'Santa Cruz de Toledo',
                'region_id' => 60000,
                'provincia_id' => 60500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 =>
            array (
                'id' => 60507,
                'nombre' => 'Tantarica',
                'region_id' => 60000,
                'provincia_id' => 60500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 =>
            array (
                'id' => 60508,
                'nombre' => 'Yonan',
                'region_id' => 60000,
                'provincia_id' => 60500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 =>
            array (
                'id' => 60601,
                'nombre' => 'Cutervo',
                'region_id' => 60000,
                'provincia_id' => 60600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 =>
            array (
                'id' => 60602,
                'nombre' => 'Callayuc',
                'region_id' => 60000,
                'provincia_id' => 60600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 =>
            array (
                'id' => 60603,
                'nombre' => 'Choros',
                'region_id' => 60000,
                'provincia_id' => 60600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 =>
            array (
                'id' => 60604,
                'nombre' => 'Cujillo',
                'region_id' => 60000,
                'provincia_id' => 60600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 =>
            array (
                'id' => 60605,
                'nombre' => 'La Ramada',
                'region_id' => 60000,
                'provincia_id' => 60600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 =>
            array (
                'id' => 60606,
                'nombre' => 'Pimpingos',
                'region_id' => 60000,
                'provincia_id' => 60600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 =>
            array (
                'id' => 60607,
                'nombre' => 'Querocotillo',
                'region_id' => 60000,
                'provincia_id' => 60600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 =>
            array (
                'id' => 60608,
                'nombre' => 'San Andrés de Cutervo',
                'region_id' => 60000,
                'provincia_id' => 60600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 =>
            array (
                'id' => 60609,
                'nombre' => 'San Juan de Cutervo',
                'region_id' => 60000,
                'provincia_id' => 60600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 =>
            array (
                'id' => 60610,
                'nombre' => 'San Luis de Lucma',
                'region_id' => 60000,
                'provincia_id' => 60600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 =>
            array (
                'id' => 60611,
                'nombre' => 'Santa Cruz',
                'region_id' => 60000,
                'provincia_id' => 60600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 =>
            array (
                'id' => 60612,
                'nombre' => 'Santo Domingo de la Capilla',
                'region_id' => 60000,
                'provincia_id' => 60600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 =>
            array (
                'id' => 60613,
                'nombre' => 'Santo Tomas',
                'region_id' => 60000,
                'provincia_id' => 60600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 =>
            array (
                'id' => 60614,
                'nombre' => 'Socota',
                'region_id' => 60000,
                'provincia_id' => 60600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 =>
            array (
                'id' => 60615,
                'nombre' => 'Toribio Casanova',
                'region_id' => 60000,
                'provincia_id' => 60600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 =>
            array (
                'id' => 60701,
                'nombre' => 'Bambamarca',
                'region_id' => 60000,
                'provincia_id' => 60700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 =>
            array (
                'id' => 60702,
                'nombre' => 'Chugur',
                'region_id' => 60000,
                'provincia_id' => 60700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 =>
            array (
                'id' => 60703,
                'nombre' => 'Hualgayoc',
                'region_id' => 60000,
                'provincia_id' => 60700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 =>
            array (
                'id' => 60801,
                'nombre' => 'Jaén',
                'region_id' => 60000,
                'provincia_id' => 60800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 =>
            array (
                'id' => 60802,
                'nombre' => 'Bellavista',
                'region_id' => 60000,
                'provincia_id' => 60800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 =>
            array (
                'id' => 60803,
                'nombre' => 'Chontali',
                'region_id' => 60000,
                'provincia_id' => 60800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 =>
            array (
                'id' => 60804,
                'nombre' => 'Colasay',
                'region_id' => 60000,
                'provincia_id' => 60800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 =>
            array (
                'id' => 60805,
                'nombre' => 'Huabal',
                'region_id' => 60000,
                'provincia_id' => 60800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 =>
            array (
                'id' => 60806,
                'nombre' => 'Las Pirias',
                'region_id' => 60000,
                'provincia_id' => 60800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 =>
            array (
                'id' => 60807,
                'nombre' => 'Pomahuaca',
                'region_id' => 60000,
                'provincia_id' => 60800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 =>
            array (
                'id' => 60808,
                'nombre' => 'Pucara',
                'region_id' => 60000,
                'provincia_id' => 60800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 =>
            array (
                'id' => 60809,
                'nombre' => 'Sallique',
                'region_id' => 60000,
                'provincia_id' => 60800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 =>
            array (
                'id' => 60810,
                'nombre' => 'San Felipe',
                'region_id' => 60000,
                'provincia_id' => 60800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 =>
            array (
                'id' => 60811,
                'nombre' => 'San José del Alto',
                'region_id' => 60000,
                'provincia_id' => 60800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 =>
            array (
                'id' => 60812,
                'nombre' => 'Santa Rosa',
                'region_id' => 60000,
                'provincia_id' => 60800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 =>
            array (
                'id' => 60901,
                'nombre' => 'San Ignacio',
                'region_id' => 60000,
                'provincia_id' => 60900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 =>
            array (
                'id' => 60902,
                'nombre' => 'Chirinos',
                'region_id' => 60000,
                'provincia_id' => 60900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 =>
            array (
                'id' => 60903,
                'nombre' => 'Huarango',
                'region_id' => 60000,
                'provincia_id' => 60900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 =>
            array (
                'id' => 60904,
                'nombre' => 'La Coipa',
                'region_id' => 60000,
                'provincia_id' => 60900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 =>
            array (
                'id' => 60905,
                'nombre' => 'Namballe',
                'region_id' => 60000,
                'provincia_id' => 60900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 =>
            array (
                'id' => 60906,
                'nombre' => 'San José de Lourdes',
                'region_id' => 60000,
                'provincia_id' => 60900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 =>
            array (
                'id' => 60907,
                'nombre' => 'Tabaconas',
                'region_id' => 60000,
                'provincia_id' => 60900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 =>
            array (
                'id' => 61001,
                'nombre' => 'Pedro Gálvez',
                'region_id' => 60000,
                'provincia_id' => 61000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 =>
            array (
                'id' => 61002,
                'nombre' => 'Chancay',
                'region_id' => 60000,
                'provincia_id' => 61000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 =>
            array (
                'id' => 61003,
                'nombre' => 'Eduardo Villanueva',
                'region_id' => 60000,
                'provincia_id' => 61000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 =>
            array (
                'id' => 61004,
                'nombre' => 'Gregorio Pita',
                'region_id' => 60000,
                'provincia_id' => 61000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 =>
            array (
                'id' => 61005,
                'nombre' => 'Ichocan',
                'region_id' => 60000,
                'provincia_id' => 61000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 =>
            array (
                'id' => 61006,
                'nombre' => 'José Manuel Quiroz',
                'region_id' => 60000,
                'provincia_id' => 61000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 =>
            array (
                'id' => 61007,
                'nombre' => 'José Sabogal',
                'region_id' => 60000,
                'provincia_id' => 61000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 =>
            array (
                'id' => 61101,
                'nombre' => 'San Miguel',
                'region_id' => 60000,
                'provincia_id' => 61100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 =>
            array (
                'id' => 61102,
                'nombre' => 'Bolívar',
                'region_id' => 60000,
                'provincia_id' => 61100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 =>
            array (
                'id' => 61103,
                'nombre' => 'Calquis',
                'region_id' => 60000,
                'provincia_id' => 61100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 =>
            array (
                'id' => 61104,
                'nombre' => 'Catilluc',
                'region_id' => 60000,
                'provincia_id' => 61100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 =>
            array (
                'id' => 61105,
                'nombre' => 'El Prado',
                'region_id' => 60000,
                'provincia_id' => 61100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 =>
            array (
                'id' => 61106,
                'nombre' => 'La Florida',
                'region_id' => 60000,
                'provincia_id' => 61100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 =>
            array (
                'id' => 61107,
                'nombre' => 'Llapa',
                'region_id' => 60000,
                'provincia_id' => 61100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 =>
            array (
                'id' => 61108,
                'nombre' => 'Nanchoc',
                'region_id' => 60000,
                'provincia_id' => 61100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 =>
            array (
                'id' => 61109,
                'nombre' => 'Niepos',
                'region_id' => 60000,
                'provincia_id' => 61100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 =>
            array (
                'id' => 61110,
                'nombre' => 'San Gregorio',
                'region_id' => 60000,
                'provincia_id' => 61100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 =>
            array (
                'id' => 61111,
                'nombre' => 'San Silvestre de Cochan',
                'region_id' => 60000,
                'provincia_id' => 61100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 =>
            array (
                'id' => 61112,
                'nombre' => 'Tongod',
                'region_id' => 60000,
                'provincia_id' => 61100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 =>
            array (
                'id' => 61113,
                'nombre' => 'Unión Agua Blanca',
                'region_id' => 60000,
                'provincia_id' => 61100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 =>
            array (
                'id' => 61201,
                'nombre' => 'San Pablo',
                'region_id' => 60000,
                'provincia_id' => 61200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 =>
            array (
                'id' => 61202,
                'nombre' => 'San Bernardino',
                'region_id' => 60000,
                'provincia_id' => 61200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 =>
            array (
                'id' => 61203,
                'nombre' => 'San Luis',
                'region_id' => 60000,
                'provincia_id' => 61200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 =>
            array (
                'id' => 61204,
                'nombre' => 'Tumbaden',
                'region_id' => 60000,
                'provincia_id' => 61200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 =>
            array (
                'id' => 61301,
                'nombre' => 'Santa Cruz',
                'region_id' => 60000,
                'provincia_id' => 61300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 =>
            array (
                'id' => 61302,
                'nombre' => 'Andabamba',
                'region_id' => 60000,
                'provincia_id' => 61300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 =>
            array (
                'id' => 61303,
                'nombre' => 'Catache',
                'region_id' => 60000,
                'provincia_id' => 61300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 =>
            array (
                'id' => 61304,
                'nombre' => 'Chancaybaños',
                'region_id' => 60000,
                'provincia_id' => 61300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 =>
            array (
                'id' => 61305,
                'nombre' => 'La Esperanza',
                'region_id' => 60000,
                'provincia_id' => 61300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 =>
            array (
                'id' => 61306,
                'nombre' => 'Ninabamba',
                'region_id' => 60000,
                'provincia_id' => 61300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 =>
            array (
                'id' => 61307,
                'nombre' => 'Pulan',
                'region_id' => 60000,
                'provincia_id' => 61300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 =>
            array (
                'id' => 61308,
                'nombre' => 'Saucepampa',
                'region_id' => 60000,
                'provincia_id' => 61300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 =>
            array (
                'id' => 61309,
                'nombre' => 'Sexi',
                'region_id' => 60000,
                'provincia_id' => 61300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 =>
            array (
                'id' => 61310,
                'nombre' => 'Uticyacu',
                'region_id' => 60000,
                'provincia_id' => 61300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 =>
            array (
                'id' => 61311,
                'nombre' => 'Yauyucan',
                'region_id' => 60000,
                'provincia_id' => 61300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 =>
            array (
                'id' => 70101,
                'nombre' => 'Callao',
                'region_id' => 70000,
                'provincia_id' => 70100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 =>
            array (
                'id' => 70102,
                'nombre' => 'Bellavista',
                'region_id' => 70000,
                'provincia_id' => 70100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 =>
            array (
                'id' => 70103,
                'nombre' => 'Carmen de la Legua Reynoso',
                'region_id' => 70000,
                'provincia_id' => 70100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 =>
            array (
                'id' => 70104,
                'nombre' => 'La Perla',
                'region_id' => 70000,
                'provincia_id' => 70100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 =>
            array (
                'id' => 70105,
                'nombre' => 'La Punta',
                'region_id' => 70000,
                'provincia_id' => 70100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 =>
            array (
                'id' => 70106,
                'nombre' => 'Ventanilla',
                'region_id' => 70000,
                'provincia_id' => 70100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 =>
            array (
                'id' => 70107,
                'nombre' => 'Mi Perú',
                'region_id' => 70000,
                'provincia_id' => 70100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 =>
            array (
                'id' => 80101,
                'nombre' => 'Cusco',
                'region_id' => 80000,
                'provincia_id' => 80100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 =>
            array (
                'id' => 80102,
                'nombre' => 'Ccorca',
                'region_id' => 80000,
                'provincia_id' => 80100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 =>
            array (
                'id' => 80103,
                'nombre' => 'Poroy',
                'region_id' => 80000,
                'provincia_id' => 80100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 =>
            array (
                'id' => 80104,
                'nombre' => 'San Jerónimo',
                'region_id' => 80000,
                'provincia_id' => 80100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 =>
            array (
                'id' => 80105,
                'nombre' => 'San Sebastian',
                'region_id' => 80000,
                'provincia_id' => 80100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 =>
            array (
                'id' => 80106,
                'nombre' => 'Santiago',
                'region_id' => 80000,
                'provincia_id' => 80100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 =>
            array (
                'id' => 80107,
                'nombre' => 'Saylla',
                'region_id' => 80000,
                'provincia_id' => 80100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 =>
            array (
                'id' => 80108,
                'nombre' => 'Wanchaq',
                'region_id' => 80000,
                'provincia_id' => 80100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 =>
            array (
                'id' => 80201,
                'nombre' => 'Acomayo',
                'region_id' => 80000,
                'provincia_id' => 80200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 =>
            array (
                'id' => 80202,
                'nombre' => 'Acopia',
                'region_id' => 80000,
                'provincia_id' => 80200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 =>
            array (
                'id' => 80203,
                'nombre' => 'Acos',
                'region_id' => 80000,
                'provincia_id' => 80200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 =>
            array (
                'id' => 80204,
                'nombre' => 'Mosoc Llacta',
                'region_id' => 80000,
                'provincia_id' => 80200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 =>
            array (
                'id' => 80205,
                'nombre' => 'Pomacanchi',
                'region_id' => 80000,
                'provincia_id' => 80200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 =>
            array (
                'id' => 80206,
                'nombre' => 'Rondocan',
                'region_id' => 80000,
                'provincia_id' => 80200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 =>
            array (
                'id' => 80207,
                'nombre' => 'Sangarara',
                'region_id' => 80000,
                'provincia_id' => 80200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 =>
            array (
                'id' => 80301,
                'nombre' => 'Anta',
                'region_id' => 80000,
                'provincia_id' => 80300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 =>
            array (
                'id' => 80302,
                'nombre' => 'Ancahuasi',
                'region_id' => 80000,
                'provincia_id' => 80300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 =>
            array (
                'id' => 80303,
                'nombre' => 'Cachimayo',
                'region_id' => 80000,
                'provincia_id' => 80300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 =>
            array (
                'id' => 80304,
                'nombre' => 'Chinchaypujio',
                'region_id' => 80000,
                'provincia_id' => 80300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 =>
            array (
                'id' => 80305,
                'nombre' => 'Huarocondo',
                'region_id' => 80000,
                'provincia_id' => 80300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 =>
            array (
                'id' => 80306,
                'nombre' => 'Limatambo',
                'region_id' => 80000,
                'provincia_id' => 80300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 =>
            array (
                'id' => 80307,
                'nombre' => 'Mollepata',
                'region_id' => 80000,
                'provincia_id' => 80300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 =>
            array (
                'id' => 80308,
                'nombre' => 'Pucyura',
                'region_id' => 80000,
                'provincia_id' => 80300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 =>
            array (
                'id' => 80309,
                'nombre' => 'Zurite',
                'region_id' => 80000,
                'provincia_id' => 80300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 =>
            array (
                'id' => 80401,
                'nombre' => 'Calca',
                'region_id' => 80000,
                'provincia_id' => 80400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 =>
            array (
                'id' => 80402,
                'nombre' => 'Coya',
                'region_id' => 80000,
                'provincia_id' => 80400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 =>
            array (
                'id' => 80403,
                'nombre' => 'Lamay',
                'region_id' => 80000,
                'provincia_id' => 80400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 =>
            array (
                'id' => 80404,
                'nombre' => 'Lares',
                'region_id' => 80000,
                'provincia_id' => 80400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 =>
            array (
                'id' => 80405,
                'nombre' => 'Pisac',
                'region_id' => 80000,
                'provincia_id' => 80400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 =>
            array (
                'id' => 80406,
                'nombre' => 'San Salvador',
                'region_id' => 80000,
                'provincia_id' => 80400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 =>
            array (
                'id' => 80407,
                'nombre' => 'Taray',
                'region_id' => 80000,
                'provincia_id' => 80400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 =>
            array (
                'id' => 80408,
                'nombre' => 'Yanatile',
                'region_id' => 80000,
                'provincia_id' => 80400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 =>
            array (
                'id' => 80501,
                'nombre' => 'Yanaoca',
                'region_id' => 80000,
                'provincia_id' => 80500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 =>
            array (
                'id' => 80502,
                'nombre' => 'Checca',
                'region_id' => 80000,
                'provincia_id' => 80500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 =>
            array (
                'id' => 80503,
                'nombre' => 'Kunturkanki',
                'region_id' => 80000,
                'provincia_id' => 80500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 =>
            array (
                'id' => 80504,
                'nombre' => 'Langui',
                'region_id' => 80000,
                'provincia_id' => 80500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 =>
            array (
                'id' => 80505,
                'nombre' => 'Layo',
                'region_id' => 80000,
                'provincia_id' => 80500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 =>
            array (
                'id' => 80506,
                'nombre' => 'Pampamarca',
                'region_id' => 80000,
                'provincia_id' => 80500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 =>
            array (
                'id' => 80507,
                'nombre' => 'Quehue',
                'region_id' => 80000,
                'provincia_id' => 80500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 =>
            array (
                'id' => 80508,
                'nombre' => 'Tupac Amaru',
                'region_id' => 80000,
                'provincia_id' => 80500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 =>
            array (
                'id' => 80601,
                'nombre' => 'Sicuani',
                'region_id' => 80000,
                'provincia_id' => 80600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 =>
            array (
                'id' => 80602,
                'nombre' => 'Checacupe',
                'region_id' => 80000,
                'provincia_id' => 80600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 =>
            array (
                'id' => 80603,
                'nombre' => 'Combapata',
                'region_id' => 80000,
                'provincia_id' => 80600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 =>
            array (
                'id' => 80604,
                'nombre' => 'Marangani',
                'region_id' => 80000,
                'provincia_id' => 80600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 =>
            array (
                'id' => 80605,
                'nombre' => 'Pitumarca',
                'region_id' => 80000,
                'provincia_id' => 80600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 =>
            array (
                'id' => 80606,
                'nombre' => 'San Pablo',
                'region_id' => 80000,
                'provincia_id' => 80600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 =>
            array (
                'id' => 80607,
                'nombre' => 'San Pedro',
                'region_id' => 80000,
                'provincia_id' => 80600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 =>
            array (
                'id' => 80608,
                'nombre' => 'Tinta',
                'region_id' => 80000,
                'provincia_id' => 80600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 =>
            array (
                'id' => 80701,
                'nombre' => 'Santo Tomas',
                'region_id' => 80000,
                'provincia_id' => 80700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 =>
            array (
                'id' => 80702,
                'nombre' => 'Capacmarca',
                'region_id' => 80000,
                'provincia_id' => 80700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 =>
            array (
                'id' => 80703,
                'nombre' => 'Chamaca',
                'region_id' => 80000,
                'provincia_id' => 80700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 =>
            array (
                'id' => 80704,
                'nombre' => 'Colquemarca',
                'region_id' => 80000,
                'provincia_id' => 80700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 =>
            array (
                'id' => 80705,
                'nombre' => 'Livitaca',
                'region_id' => 80000,
                'provincia_id' => 80700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 =>
            array (
                'id' => 80706,
                'nombre' => 'Llusco',
                'region_id' => 80000,
                'provincia_id' => 80700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 =>
            array (
                'id' => 80707,
                'nombre' => 'Quiñota',
                'region_id' => 80000,
                'provincia_id' => 80700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 =>
            array (
                'id' => 80708,
                'nombre' => 'Velille',
                'region_id' => 80000,
                'provincia_id' => 80700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 =>
            array (
                'id' => 80801,
                'nombre' => 'Espinar',
                'region_id' => 80000,
                'provincia_id' => 80800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 =>
            array (
                'id' => 80802,
                'nombre' => 'Condoroma',
                'region_id' => 80000,
                'provincia_id' => 80800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 =>
            array (
                'id' => 80803,
                'nombre' => 'Coporaque',
                'region_id' => 80000,
                'provincia_id' => 80800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 =>
            array (
                'id' => 80804,
                'nombre' => 'Ocoruro',
                'region_id' => 80000,
                'provincia_id' => 80800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 =>
            array (
                'id' => 80805,
                'nombre' => 'Pallpata',
                'region_id' => 80000,
                'provincia_id' => 80800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 =>
            array (
                'id' => 80806,
                'nombre' => 'Pichigua',
                'region_id' => 80000,
                'provincia_id' => 80800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 =>
            array (
                'id' => 80807,
                'nombre' => 'Suyckutambo',
                'region_id' => 80000,
                'provincia_id' => 80800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 =>
            array (
                'id' => 80808,
                'nombre' => 'Alto Pichigua',
                'region_id' => 80000,
                'provincia_id' => 80800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 =>
            array (
                'id' => 80901,
                'nombre' => 'Santa Ana',
                'region_id' => 80000,
                'provincia_id' => 80900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 =>
            array (
                'id' => 80902,
                'nombre' => 'Echarate',
                'region_id' => 80000,
                'provincia_id' => 80900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 =>
            array (
                'id' => 80903,
                'nombre' => 'Huayopata',
                'region_id' => 80000,
                'provincia_id' => 80900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 =>
            array (
                'id' => 80904,
                'nombre' => 'Maranura',
                'region_id' => 80000,
                'provincia_id' => 80900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 =>
            array (
                'id' => 80905,
                'nombre' => 'Ocobamba',
                'region_id' => 80000,
                'provincia_id' => 80900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 =>
            array (
                'id' => 80906,
                'nombre' => 'Quellouno',
                'region_id' => 80000,
                'provincia_id' => 80900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 =>
            array (
                'id' => 80907,
                'nombre' => 'Kimbiri',
                'region_id' => 80000,
                'provincia_id' => 80900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 =>
            array (
                'id' => 80908,
                'nombre' => 'Santa Teresa',
                'region_id' => 80000,
                'provincia_id' => 80900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 =>
            array (
                'id' => 80909,
                'nombre' => 'Vilcabamba',
                'region_id' => 80000,
                'provincia_id' => 80900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 =>
            array (
                'id' => 80910,
                'nombre' => 'Pichari',
                'region_id' => 80000,
                'provincia_id' => 80900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 =>
            array (
                'id' => 80911,
                'nombre' => 'Inkawasi',
                'region_id' => 80000,
                'provincia_id' => 80900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 =>
            array (
                'id' => 80912,
                'nombre' => 'Villa Virgen',
                'region_id' => 80000,
                'provincia_id' => 80900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 =>
            array (
                'id' => 80913,
                'nombre' => 'Villa Kintiarina',
                'region_id' => 80000,
                'provincia_id' => 80900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 =>
            array (
                'id' => 80914,
                'nombre' => 'Megantoni',
                'region_id' => 80000,
                'provincia_id' => 80900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 =>
            array (
                'id' => 81001,
                'nombre' => 'Paruro',
                'region_id' => 80000,
                'provincia_id' => 81000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 =>
            array (
                'id' => 81002,
                'nombre' => 'Accha',
                'region_id' => 80000,
                'provincia_id' => 81000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 =>
            array (
                'id' => 81003,
                'nombre' => 'Ccapi',
                'region_id' => 80000,
                'provincia_id' => 81000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 =>
            array (
                'id' => 81004,
                'nombre' => 'Colcha',
                'region_id' => 80000,
                'provincia_id' => 81000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 =>
            array (
                'id' => 81005,
                'nombre' => 'Huanoquite',
                'region_id' => 80000,
                'provincia_id' => 81000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 =>
            array (
                'id' => 81006,
                'nombre' => 'Omacha',
                'region_id' => 80000,
                'provincia_id' => 81000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 =>
            array (
                'id' => 81007,
                'nombre' => 'Paccaritambo',
                'region_id' => 80000,
                'provincia_id' => 81000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 =>
            array (
                'id' => 81008,
                'nombre' => 'Pillpinto',
                'region_id' => 80000,
                'provincia_id' => 81000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 =>
            array (
                'id' => 81009,
                'nombre' => 'Yaurisque',
                'region_id' => 80000,
                'provincia_id' => 81000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 =>
            array (
                'id' => 81101,
                'nombre' => 'Paucartambo',
                'region_id' => 80000,
                'provincia_id' => 81100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 =>
            array (
                'id' => 81102,
                'nombre' => 'Caicay',
                'region_id' => 80000,
                'provincia_id' => 81100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 =>
            array (
                'id' => 81103,
                'nombre' => 'Challabamba',
                'region_id' => 80000,
                'provincia_id' => 81100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 =>
            array (
                'id' => 81104,
                'nombre' => 'Colquepata',
                'region_id' => 80000,
                'provincia_id' => 81100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 =>
            array (
                'id' => 81105,
                'nombre' => 'Huancarani',
                'region_id' => 80000,
                'provincia_id' => 81100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 =>
            array (
                'id' => 81106,
                'nombre' => 'Kosñipata',
                'region_id' => 80000,
                'provincia_id' => 81100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 =>
            array (
                'id' => 81201,
                'nombre' => 'Urcos',
                'region_id' => 80000,
                'provincia_id' => 81200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 =>
            array (
                'id' => 81202,
                'nombre' => 'Andahuaylillas',
                'region_id' => 80000,
                'provincia_id' => 81200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 =>
            array (
                'id' => 81203,
                'nombre' => 'Camanti',
                'region_id' => 80000,
                'provincia_id' => 81200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 =>
            array (
                'id' => 81204,
                'nombre' => 'Ccarhuayo',
                'region_id' => 80000,
                'provincia_id' => 81200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 =>
            array (
                'id' => 81205,
                'nombre' => 'Ccatca',
                'region_id' => 80000,
                'provincia_id' => 81200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 =>
            array (
                'id' => 81206,
                'nombre' => 'Cusipata',
                'region_id' => 80000,
                'provincia_id' => 81200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 =>
            array (
                'id' => 81207,
                'nombre' => 'Huaro',
                'region_id' => 80000,
                'provincia_id' => 81200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 =>
            array (
                'id' => 81208,
                'nombre' => 'Lucre',
                'region_id' => 80000,
                'provincia_id' => 81200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 =>
            array (
                'id' => 81209,
                'nombre' => 'Marcapata',
                'region_id' => 80000,
                'provincia_id' => 81200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 =>
            array (
                'id' => 81210,
                'nombre' => 'Ocongate',
                'region_id' => 80000,
                'provincia_id' => 81200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 =>
            array (
                'id' => 81211,
                'nombre' => 'Oropesa',
                'region_id' => 80000,
                'provincia_id' => 81200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 =>
            array (
                'id' => 81212,
                'nombre' => 'Quiquijana',
                'region_id' => 80000,
                'provincia_id' => 81200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 =>
            array (
                'id' => 81301,
                'nombre' => 'Urubamba',
                'region_id' => 80000,
                'provincia_id' => 81300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 =>
            array (
                'id' => 81302,
                'nombre' => 'Chinchero',
                'region_id' => 80000,
                'provincia_id' => 81300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 =>
            array (
                'id' => 81303,
                'nombre' => 'Huayllabamba',
                'region_id' => 80000,
                'provincia_id' => 81300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 =>
            array (
                'id' => 81304,
                'nombre' => 'Machupicchu',
                'region_id' => 80000,
                'provincia_id' => 81300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 =>
            array (
                'id' => 81305,
                'nombre' => 'Maras',
                'region_id' => 80000,
                'provincia_id' => 81300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 =>
            array (
                'id' => 81306,
                'nombre' => 'Ollantaytambo',
                'region_id' => 80000,
                'provincia_id' => 81300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 =>
            array (
                'id' => 81307,
                'nombre' => 'Yucay',
                'region_id' => 80000,
                'provincia_id' => 81300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 =>
            array (
                'id' => 90101,
                'nombre' => 'Huancavelica',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 =>
            array (
                'id' => 90102,
                'nombre' => 'Acobambilla',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 =>
            array (
                'id' => 90103,
                'nombre' => 'Acoria',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 =>
            array (
                'id' => 90104,
                'nombre' => 'Conayca',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 =>
            array (
                'id' => 90105,
                'nombre' => 'Cuenca',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 =>
            array (
                'id' => 90106,
                'nombre' => 'Huachocolpa',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 =>
            array (
                'id' => 90107,
                'nombre' => 'Huayllahuara',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 =>
            array (
                'id' => 90108,
                'nombre' => 'Izcuchaca',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 =>
            array (
                'id' => 90109,
                'nombre' => 'Laria',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 =>
            array (
                'id' => 90110,
                'nombre' => 'Manta',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 =>
            array (
                'id' => 90111,
                'nombre' => 'Mariscal Cáceres',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 =>
            array (
                'id' => 90112,
                'nombre' => 'Moya',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 =>
            array (
                'id' => 90113,
                'nombre' => 'Nuevo Occoro',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 =>
            array (
                'id' => 90114,
                'nombre' => 'Palca',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 =>
            array (
                'id' => 90115,
                'nombre' => 'Pilchaca',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 =>
            array (
                'id' => 90116,
                'nombre' => 'Vilca',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 =>
            array (
                'id' => 90117,
                'nombre' => 'Yauli',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 =>
            array (
                'id' => 90118,
                'nombre' => 'Ascensión',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 =>
            array (
                'id' => 90119,
                'nombre' => 'Huando',
                'region_id' => 90000,
                'provincia_id' => 90100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 =>
            array (
                'id' => 90201,
                'nombre' => 'Acobamba',
                'region_id' => 90000,
                'provincia_id' => 90200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 =>
            array (
                'id' => 90202,
                'nombre' => 'Andabamba',
                'region_id' => 90000,
                'provincia_id' => 90200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 =>
            array (
                'id' => 90203,
                'nombre' => 'Anta',
                'region_id' => 90000,
                'provincia_id' => 90200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 =>
            array (
                'id' => 90204,
                'nombre' => 'Caja',
                'region_id' => 90000,
                'provincia_id' => 90200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 =>
            array (
                'id' => 90205,
                'nombre' => 'Marcas',
                'region_id' => 90000,
                'provincia_id' => 90200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 =>
            array (
                'id' => 90206,
                'nombre' => 'Paucara',
                'region_id' => 90000,
                'provincia_id' => 90200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 =>
            array (
                'id' => 90207,
                'nombre' => 'Pomacocha',
                'region_id' => 90000,
                'provincia_id' => 90200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 =>
            array (
                'id' => 90208,
                'nombre' => 'Rosario',
                'region_id' => 90000,
                'provincia_id' => 90200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 =>
            array (
                'id' => 90301,
                'nombre' => 'Lircay',
                'region_id' => 90000,
                'provincia_id' => 90300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 =>
            array (
                'id' => 90302,
                'nombre' => 'Anchonga',
                'region_id' => 90000,
                'provincia_id' => 90300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 =>
            array (
                'id' => 90303,
                'nombre' => 'Callanmarca',
                'region_id' => 90000,
                'provincia_id' => 90300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 =>
            array (
                'id' => 90304,
                'nombre' => 'Ccochaccasa',
                'region_id' => 90000,
                'provincia_id' => 90300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 =>
            array (
                'id' => 90305,
                'nombre' => 'Chincho',
                'region_id' => 90000,
                'provincia_id' => 90300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 =>
            array (
                'id' => 90306,
                'nombre' => 'Congalla',
                'region_id' => 90000,
                'provincia_id' => 90300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 =>
            array (
                'id' => 90307,
                'nombre' => 'Huanca-Huanca',
                'region_id' => 90000,
                'provincia_id' => 90300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 =>
            array (
                'id' => 90308,
                'nombre' => 'Huayllay Grande',
                'region_id' => 90000,
                'provincia_id' => 90300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 =>
            array (
                'id' => 90309,
                'nombre' => 'Julcamarca',
                'region_id' => 90000,
                'provincia_id' => 90300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 =>
            array (
                'id' => 90310,
                'nombre' => 'San Antonio de Antaparco',
                'region_id' => 90000,
                'provincia_id' => 90300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 =>
            array (
                'id' => 90311,
                'nombre' => 'Santo Tomas de Pata',
                'region_id' => 90000,
                'provincia_id' => 90300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 =>
            array (
                'id' => 90312,
                'nombre' => 'Secclla',
                'region_id' => 90000,
                'provincia_id' => 90300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 =>
            array (
                'id' => 90401,
                'nombre' => 'Castrovirreyna',
                'region_id' => 90000,
                'provincia_id' => 90400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 =>
            array (
                'id' => 90402,
                'nombre' => 'Arma',
                'region_id' => 90000,
                'provincia_id' => 90400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 =>
            array (
                'id' => 90403,
                'nombre' => 'Aurahua',
                'region_id' => 90000,
                'provincia_id' => 90400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 =>
            array (
                'id' => 90404,
                'nombre' => 'Capillas',
                'region_id' => 90000,
                'provincia_id' => 90400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 =>
            array (
                'id' => 90405,
                'nombre' => 'Chupamarca',
                'region_id' => 90000,
                'provincia_id' => 90400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 =>
            array (
                'id' => 90406,
                'nombre' => 'Cocas',
                'region_id' => 90000,
                'provincia_id' => 90400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 =>
            array (
                'id' => 90407,
                'nombre' => 'Huachos',
                'region_id' => 90000,
                'provincia_id' => 90400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 =>
            array (
                'id' => 90408,
                'nombre' => 'Huamatambo',
                'region_id' => 90000,
                'provincia_id' => 90400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 =>
            array (
                'id' => 90409,
                'nombre' => 'Mollepampa',
                'region_id' => 90000,
                'provincia_id' => 90400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 =>
            array (
                'id' => 90410,
                'nombre' => 'San Juan',
                'region_id' => 90000,
                'provincia_id' => 90400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 =>
            array (
                'id' => 90411,
                'nombre' => 'Santa Ana',
                'region_id' => 90000,
                'provincia_id' => 90400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 =>
            array (
                'id' => 90412,
                'nombre' => 'Tantara',
                'region_id' => 90000,
                'provincia_id' => 90400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 =>
            array (
                'id' => 90413,
                'nombre' => 'Ticrapo',
                'region_id' => 90000,
                'provincia_id' => 90400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 =>
            array (
                'id' => 90501,
                'nombre' => 'Churcampa',
                'region_id' => 90000,
                'provincia_id' => 90500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 =>
            array (
                'id' => 90502,
                'nombre' => 'Anco',
                'region_id' => 90000,
                'provincia_id' => 90500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 =>
            array (
                'id' => 90503,
                'nombre' => 'Chinchihuasi',
                'region_id' => 90000,
                'provincia_id' => 90500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 =>
            array (
                'id' => 90504,
                'nombre' => 'El Carmen',
                'region_id' => 90000,
                'provincia_id' => 90500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 =>
            array (
                'id' => 90505,
                'nombre' => 'La Merced',
                'region_id' => 90000,
                'provincia_id' => 90500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 =>
            array (
                'id' => 90506,
                'nombre' => 'Locroja',
                'region_id' => 90000,
                'provincia_id' => 90500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 =>
            array (
                'id' => 90507,
                'nombre' => 'Paucarbamba',
                'region_id' => 90000,
                'provincia_id' => 90500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 =>
            array (
                'id' => 90508,
                'nombre' => 'San Miguel de Mayocc',
                'region_id' => 90000,
                'provincia_id' => 90500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 =>
            array (
                'id' => 90509,
                'nombre' => 'San Pedro de Coris',
                'region_id' => 90000,
                'provincia_id' => 90500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 =>
            array (
                'id' => 90510,
                'nombre' => 'Pachamarca',
                'region_id' => 90000,
                'provincia_id' => 90500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 =>
            array (
                'id' => 90511,
                'nombre' => 'Cosme',
                'region_id' => 90000,
                'provincia_id' => 90500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 =>
            array (
                'id' => 90601,
                'nombre' => 'Huaytara',
                'region_id' => 90000,
                'provincia_id' => 90600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 =>
            array (
                'id' => 90602,
                'nombre' => 'Ayavi',
                'region_id' => 90000,
                'provincia_id' => 90600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 =>
            array (
                'id' => 90603,
                'nombre' => 'Córdova',
                'region_id' => 90000,
                'provincia_id' => 90600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 =>
            array (
                'id' => 90604,
                'nombre' => 'Huayacundo Arma',
                'region_id' => 90000,
                'provincia_id' => 90600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 =>
            array (
                'id' => 90605,
                'nombre' => 'Laramarca',
                'region_id' => 90000,
                'provincia_id' => 90600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 =>
            array (
                'id' => 90606,
                'nombre' => 'Ocoyo',
                'region_id' => 90000,
                'provincia_id' => 90600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 =>
            array (
                'id' => 90607,
                'nombre' => 'Pilpichaca',
                'region_id' => 90000,
                'provincia_id' => 90600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 =>
            array (
                'id' => 90608,
                'nombre' => 'Querco',
                'region_id' => 90000,
                'provincia_id' => 90600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 =>
            array (
                'id' => 90609,
                'nombre' => 'Quito-Arma',
                'region_id' => 90000,
                'provincia_id' => 90600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 =>
            array (
                'id' => 90610,
                'nombre' => 'San Antonio de Cusicancha',
                'region_id' => 90000,
                'provincia_id' => 90600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 =>
            array (
                'id' => 90611,
                'nombre' => 'San Francisco de Sangayaico',
                'region_id' => 90000,
                'provincia_id' => 90600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 =>
            array (
                'id' => 90612,
                'nombre' => 'San Isidro',
                'region_id' => 90000,
                'provincia_id' => 90600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 =>
            array (
                'id' => 90613,
                'nombre' => 'Santiago de Chocorvos',
                'region_id' => 90000,
                'provincia_id' => 90600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 =>
            array (
                'id' => 90614,
                'nombre' => 'Santiago de Quirahuara',
                'region_id' => 90000,
                'provincia_id' => 90600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 =>
            array (
                'id' => 90615,
                'nombre' => 'Santo Domingo de Capillas',
                'region_id' => 90000,
                'provincia_id' => 90600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 =>
            array (
                'id' => 90616,
                'nombre' => 'Tambo',
                'region_id' => 90000,
                'provincia_id' => 90600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 =>
            array (
                'id' => 90701,
                'nombre' => 'Pampas',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 =>
            array (
                'id' => 90702,
                'nombre' => 'Acostambo',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 =>
            array (
                'id' => 90703,
                'nombre' => 'Acraquia',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 =>
            array (
                'id' => 90704,
                'nombre' => 'Ahuaycha',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 =>
            array (
                'id' => 90705,
                'nombre' => 'Colcabamba',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 =>
            array (
                'id' => 90706,
                'nombre' => 'Daniel Hernández',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 =>
            array (
                'id' => 90707,
                'nombre' => 'Huachocolpa',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 =>
            array (
                'id' => 90709,
                'nombre' => 'Huaribamba',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 =>
            array (
                'id' => 90710,
                'nombre' => 'Ñahuimpuquio',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 =>
            array (
                'id' => 90711,
                'nombre' => 'Pazos',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 =>
            array (
                'id' => 90713,
                'nombre' => 'Quishuar',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 =>
            array (
                'id' => 90714,
                'nombre' => 'Salcabamba',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 =>
            array (
                'id' => 90715,
                'nombre' => 'Salcahuasi',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 =>
            array (
                'id' => 90716,
                'nombre' => 'San Marcos de Rocchac',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 =>
            array (
                'id' => 90717,
                'nombre' => 'Surcubamba',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 =>
            array (
                'id' => 90718,
                'nombre' => 'Tintay Puncu',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 =>
            array (
                'id' => 90719,
                'nombre' => 'Quichuas',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 =>
            array (
                'id' => 90720,
                'nombre' => 'Andaymarca',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 =>
            array (
                'id' => 90721,
                'nombre' => 'Roble',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 =>
            array (
                'id' => 90722,
                'nombre' => 'Pichos',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 =>
            array (
                'id' => 90723,
                'nombre' => 'Santiago de Tucuma',
                'region_id' => 90000,
                'provincia_id' => 90700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 =>
            array (
                'id' => 100101,
                'nombre' => 'Huanuco',
                'region_id' => 100000,
                'provincia_id' => 100100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 =>
            array (
                'id' => 100102,
                'nombre' => 'Amarilis',
                'region_id' => 100000,
                'provincia_id' => 100100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 =>
            array (
                'id' => 100103,
                'nombre' => 'Chinchao',
                'region_id' => 100000,
                'provincia_id' => 100100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 =>
            array (
                'id' => 100104,
                'nombre' => 'Churubamba',
                'region_id' => 100000,
                'provincia_id' => 100100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 =>
            array (
                'id' => 100105,
                'nombre' => 'Margos',
                'region_id' => 100000,
                'provincia_id' => 100100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 =>
            array (
                'id' => 100106,
            'nombre' => 'Quisqui (Kichki)',
                'region_id' => 100000,
                'provincia_id' => 100100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 =>
            array (
                'id' => 100107,
                'nombre' => 'San Francisco de Cayran',
                'region_id' => 100000,
                'provincia_id' => 100100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 =>
            array (
                'id' => 100108,
                'nombre' => 'San Pedro de Chaulan',
                'region_id' => 100000,
                'provincia_id' => 100100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 =>
            array (
                'id' => 100109,
                'nombre' => 'Santa María del Valle',
                'region_id' => 100000,
                'provincia_id' => 100100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 =>
            array (
                'id' => 100110,
                'nombre' => 'Yarumayo',
                'region_id' => 100000,
                'provincia_id' => 100100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 =>
            array (
                'id' => 100111,
                'nombre' => 'Pillco Marca',
                'region_id' => 100000,
                'provincia_id' => 100100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 =>
            array (
                'id' => 100112,
                'nombre' => 'Yacus',
                'region_id' => 100000,
                'provincia_id' => 100100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 =>
            array (
                'id' => 100113,
                'nombre' => 'San Pablo de Pillao',
                'region_id' => 100000,
                'provincia_id' => 100100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 =>
            array (
                'id' => 100201,
                'nombre' => 'Ambo',
                'region_id' => 100000,
                'provincia_id' => 100200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 =>
            array (
                'id' => 100202,
                'nombre' => 'Cayna',
                'region_id' => 100000,
                'provincia_id' => 100200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 =>
            array (
                'id' => 100203,
                'nombre' => 'Colpas',
                'region_id' => 100000,
                'provincia_id' => 100200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 =>
            array (
                'id' => 100204,
                'nombre' => 'Conchamarca',
                'region_id' => 100000,
                'provincia_id' => 100200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 =>
            array (
                'id' => 100205,
                'nombre' => 'Huacar',
                'region_id' => 100000,
                'provincia_id' => 100200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 =>
            array (
                'id' => 100206,
                'nombre' => 'San Francisco',
                'region_id' => 100000,
                'provincia_id' => 100200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 =>
            array (
                'id' => 100207,
                'nombre' => 'San Rafael',
                'region_id' => 100000,
                'provincia_id' => 100200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 =>
            array (
                'id' => 100208,
                'nombre' => 'Tomay Kichwa',
                'region_id' => 100000,
                'provincia_id' => 100200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 =>
            array (
                'id' => 100301,
                'nombre' => 'La Unión',
                'region_id' => 100000,
                'provincia_id' => 100300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 =>
            array (
                'id' => 100307,
                'nombre' => 'Chuquis',
                'region_id' => 100000,
                'provincia_id' => 100300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 =>
            array (
                'id' => 100311,
                'nombre' => 'Marías',
                'region_id' => 100000,
                'provincia_id' => 100300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 =>
            array (
                'id' => 100313,
                'nombre' => 'Pachas',
                'region_id' => 100000,
                'provincia_id' => 100300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 =>
            array (
                'id' => 100316,
                'nombre' => 'Quivilla',
                'region_id' => 100000,
                'provincia_id' => 100300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 =>
            array (
                'id' => 100317,
                'nombre' => 'Ripan',
                'region_id' => 100000,
                'provincia_id' => 100300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 =>
            array (
                'id' => 100321,
                'nombre' => 'Shunqui',
                'region_id' => 100000,
                'provincia_id' => 100300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 =>
            array (
                'id' => 100322,
                'nombre' => 'Sillapata',
                'region_id' => 100000,
                'provincia_id' => 100300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 =>
            array (
                'id' => 100323,
                'nombre' => 'Yanas',
                'region_id' => 100000,
                'provincia_id' => 100300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 =>
            array (
                'id' => 100401,
                'nombre' => 'Huacaybamba',
                'region_id' => 100000,
                'provincia_id' => 100400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 =>
            array (
                'id' => 100402,
                'nombre' => 'Canchabamba',
                'region_id' => 100000,
                'provincia_id' => 100400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 =>
            array (
                'id' => 100403,
                'nombre' => 'Cochabamba',
                'region_id' => 100000,
                'provincia_id' => 100400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 =>
            array (
                'id' => 100404,
                'nombre' => 'Pinra',
                'region_id' => 100000,
                'provincia_id' => 100400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 =>
            array (
                'id' => 100501,
                'nombre' => 'Llata',
                'region_id' => 100000,
                'provincia_id' => 100500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 =>
            array (
                'id' => 100502,
                'nombre' => 'Arancay',
                'region_id' => 100000,
                'provincia_id' => 100500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 =>
            array (
                'id' => 100503,
                'nombre' => 'Chavín de Pariarca',
                'region_id' => 100000,
                'provincia_id' => 100500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 =>
            array (
                'id' => 100504,
                'nombre' => 'Jacas Grande',
                'region_id' => 100000,
                'provincia_id' => 100500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 =>
            array (
                'id' => 100505,
                'nombre' => 'Jircan',
                'region_id' => 100000,
                'provincia_id' => 100500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 =>
            array (
                'id' => 100506,
                'nombre' => 'Miraflores',
                'region_id' => 100000,
                'provincia_id' => 100500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 =>
            array (
                'id' => 100507,
                'nombre' => 'Monzón',
                'region_id' => 100000,
                'provincia_id' => 100500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 =>
            array (
                'id' => 100508,
                'nombre' => 'Punchao',
                'region_id' => 100000,
                'provincia_id' => 100500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 =>
            array (
                'id' => 100509,
                'nombre' => 'Puños',
                'region_id' => 100000,
                'provincia_id' => 100500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 =>
            array (
                'id' => 100510,
                'nombre' => 'Singa',
                'region_id' => 100000,
                'provincia_id' => 100500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 =>
            array (
                'id' => 100511,
                'nombre' => 'Tantamayo',
                'region_id' => 100000,
                'provincia_id' => 100500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 =>
            array (
                'id' => 100601,
                'nombre' => 'Rupa-Rupa',
                'region_id' => 100000,
                'provincia_id' => 100600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 =>
            array (
                'id' => 100602,
                'nombre' => 'Daniel Alomía Robles',
                'region_id' => 100000,
                'provincia_id' => 100600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 =>
            array (
                'id' => 100603,
                'nombre' => 'Hermílio Valdizan',
                'region_id' => 100000,
                'provincia_id' => 100600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 =>
            array (
                'id' => 100604,
                'nombre' => 'José Crespo y Castillo',
                'region_id' => 100000,
                'provincia_id' => 100600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 =>
            array (
                'id' => 100605,
                'nombre' => 'Luyando',
                'region_id' => 100000,
                'provincia_id' => 100600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 =>
            array (
                'id' => 100606,
                'nombre' => 'Mariano Damaso Beraun',
                'region_id' => 100000,
                'provincia_id' => 100600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 =>
            array (
                'id' => 100607,
                'nombre' => 'Pucayacu',
                'region_id' => 100000,
                'provincia_id' => 100600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 =>
            array (
                'id' => 100608,
                'nombre' => 'Castillo Grande',
                'region_id' => 100000,
                'provincia_id' => 100600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 =>
            array (
                'id' => 100609,
                'nombre' => 'Pueblo Nuevo',
                'region_id' => 100000,
                'provincia_id' => 100600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 =>
            array (
                'id' => 100610,
                'nombre' => 'Santo Domingo de Anda',
                'region_id' => 100000,
                'provincia_id' => 100600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 =>
            array (
                'id' => 100701,
                'nombre' => 'Huacrachuco',
                'region_id' => 100000,
                'provincia_id' => 100700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 =>
            array (
                'id' => 100702,
                'nombre' => 'Cholon',
                'region_id' => 100000,
                'provincia_id' => 100700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 =>
            array (
                'id' => 100703,
                'nombre' => 'San Buenaventura',
                'region_id' => 100000,
                'provincia_id' => 100700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 =>
            array (
                'id' => 100704,
                'nombre' => 'La Morada',
                'region_id' => 100000,
                'provincia_id' => 100700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 =>
            array (
                'id' => 100705,
                'nombre' => 'Santa Rosa de Alto Yanajanca',
                'region_id' => 100000,
                'provincia_id' => 100700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 =>
            array (
                'id' => 100801,
                'nombre' => 'Panao',
                'region_id' => 100000,
                'provincia_id' => 100800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 =>
            array (
                'id' => 100802,
                'nombre' => 'Chaglla',
                'region_id' => 100000,
                'provincia_id' => 100800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 =>
            array (
                'id' => 100803,
                'nombre' => 'Molino',
                'region_id' => 100000,
                'provincia_id' => 100800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 =>
            array (
                'id' => 100804,
                'nombre' => 'Umari',
                'region_id' => 100000,
                'provincia_id' => 100800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 =>
            array (
                'id' => 100901,
                'nombre' => 'Puerto Inca',
                'region_id' => 100000,
                'provincia_id' => 100900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 =>
            array (
                'id' => 100902,
                'nombre' => 'Codo del Pozuzo',
                'region_id' => 100000,
                'provincia_id' => 100900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 =>
            array (
                'id' => 100903,
                'nombre' => 'Honoria',
                'region_id' => 100000,
                'provincia_id' => 100900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 =>
            array (
                'id' => 100904,
                'nombre' => 'Tournavista',
                'region_id' => 100000,
                'provincia_id' => 100900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 =>
            array (
                'id' => 100905,
                'nombre' => 'Yuyapichis',
                'region_id' => 100000,
                'provincia_id' => 100900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 =>
            array (
                'id' => 101001,
                'nombre' => 'Jesús',
                'region_id' => 100000,
                'provincia_id' => 101000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 =>
            array (
                'id' => 101002,
                'nombre' => 'Baños',
                'region_id' => 100000,
                'provincia_id' => 101000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 =>
            array (
                'id' => 101003,
                'nombre' => 'Jivia',
                'region_id' => 100000,
                'provincia_id' => 101000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 =>
            array (
                'id' => 101004,
                'nombre' => 'Queropalca',
                'region_id' => 100000,
                'provincia_id' => 101000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 =>
            array (
                'id' => 101005,
                'nombre' => 'Rondos',
                'region_id' => 100000,
                'provincia_id' => 101000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 =>
            array (
                'id' => 101006,
                'nombre' => 'San Francisco de Asís',
                'region_id' => 100000,
                'provincia_id' => 101000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 =>
            array (
                'id' => 101007,
                'nombre' => 'San Miguel de Cauri',
                'region_id' => 100000,
                'provincia_id' => 101000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 =>
            array (
                'id' => 101101,
                'nombre' => 'Chavinillo',
                'region_id' => 100000,
                'provincia_id' => 101100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 =>
            array (
                'id' => 101102,
                'nombre' => 'Cahuac',
                'region_id' => 100000,
                'provincia_id' => 101100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 =>
            array (
                'id' => 101103,
                'nombre' => 'Chacabamba',
                'region_id' => 100000,
                'provincia_id' => 101100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 =>
            array (
                'id' => 101104,
                'nombre' => 'Aparicio Pomares',
                'region_id' => 100000,
                'provincia_id' => 101100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 =>
            array (
                'id' => 101105,
                'nombre' => 'Jacas Chico',
                'region_id' => 100000,
                'provincia_id' => 101100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 =>
            array (
                'id' => 101106,
                'nombre' => 'Obas',
                'region_id' => 100000,
                'provincia_id' => 101100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 =>
            array (
                'id' => 101107,
                'nombre' => 'Pampamarca',
                'region_id' => 100000,
                'provincia_id' => 101100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 =>
            array (
                'id' => 101108,
                'nombre' => 'Choras',
                'region_id' => 100000,
                'provincia_id' => 101100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 =>
            array (
                'id' => 110101,
                'nombre' => 'Ica',
                'region_id' => 110000,
                'provincia_id' => 110100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 =>
            array (
                'id' => 110102,
                'nombre' => 'La Tinguiña',
                'region_id' => 110000,
                'provincia_id' => 110100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 =>
            array (
                'id' => 110103,
                'nombre' => 'Los Aquijes',
                'region_id' => 110000,
                'provincia_id' => 110100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 =>
            array (
                'id' => 110104,
                'nombre' => 'Ocucaje',
                'region_id' => 110000,
                'provincia_id' => 110100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 =>
            array (
                'id' => 110105,
                'nombre' => 'Pachacutec',
                'region_id' => 110000,
                'provincia_id' => 110100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 =>
            array (
                'id' => 110106,
                'nombre' => 'Parcona',
                'region_id' => 110000,
                'provincia_id' => 110100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 =>
            array (
                'id' => 110107,
                'nombre' => 'Pueblo Nuevo',
                'region_id' => 110000,
                'provincia_id' => 110100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 =>
            array (
                'id' => 110108,
                'nombre' => 'Salas',
                'region_id' => 110000,
                'provincia_id' => 110100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('distritos')->insert(array (
            0 =>
            array (
                'id' => 110109,
                'nombre' => 'San José de Los Molinos',
                'region_id' => 110000,
                'provincia_id' => 110100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 110110,
                'nombre' => 'San Juan Bautista',
                'region_id' => 110000,
                'provincia_id' => 110100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 110111,
                'nombre' => 'Santiago',
                'region_id' => 110000,
                'provincia_id' => 110100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 110112,
                'nombre' => 'Subtanjalla',
                'region_id' => 110000,
                'provincia_id' => 110100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 110113,
                'nombre' => 'Tate',
                'region_id' => 110000,
                'provincia_id' => 110100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 110114,
                'nombre' => 'Yauca del Rosario',
                'region_id' => 110000,
                'provincia_id' => 110100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array (
                'id' => 110201,
                'nombre' => 'Chincha Alta',
                'region_id' => 110000,
                'provincia_id' => 110200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array (
                'id' => 110202,
                'nombre' => 'Alto Laran',
                'region_id' => 110000,
                'provincia_id' => 110200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array (
                'id' => 110203,
                'nombre' => 'Chavin',
                'region_id' => 110000,
                'provincia_id' => 110200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array (
                'id' => 110204,
                'nombre' => 'Chincha Baja',
                'region_id' => 110000,
                'provincia_id' => 110200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 =>
            array (
                'id' => 110205,
                'nombre' => 'El Carmen',
                'region_id' => 110000,
                'provincia_id' => 110200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 =>
            array (
                'id' => 110206,
                'nombre' => 'Grocio Prado',
                'region_id' => 110000,
                'provincia_id' => 110200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 =>
            array (
                'id' => 110207,
                'nombre' => 'Pueblo Nuevo',
                'region_id' => 110000,
                'provincia_id' => 110200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 =>
            array (
                'id' => 110208,
                'nombre' => 'San Juan de Yanac',
                'region_id' => 110000,
                'provincia_id' => 110200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 =>
            array (
                'id' => 110209,
                'nombre' => 'San Pedro de Huacarpana',
                'region_id' => 110000,
                'provincia_id' => 110200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 =>
            array (
                'id' => 110210,
                'nombre' => 'Sunampe',
                'region_id' => 110000,
                'provincia_id' => 110200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 =>
            array (
                'id' => 110211,
                'nombre' => 'Tambo de Mora',
                'region_id' => 110000,
                'provincia_id' => 110200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 =>
            array (
                'id' => 110301,
                'nombre' => 'Nasca',
                'region_id' => 110000,
                'provincia_id' => 110300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 =>
            array (
                'id' => 110302,
                'nombre' => 'Changuillo',
                'region_id' => 110000,
                'provincia_id' => 110300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 =>
            array (
                'id' => 110303,
                'nombre' => 'El Ingenio',
                'region_id' => 110000,
                'provincia_id' => 110300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 =>
            array (
                'id' => 110304,
                'nombre' => 'Marcona',
                'region_id' => 110000,
                'provincia_id' => 110300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 =>
            array (
                'id' => 110305,
                'nombre' => 'Vista Alegre',
                'region_id' => 110000,
                'provincia_id' => 110300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 =>
            array (
                'id' => 110401,
                'nombre' => 'Palpa',
                'region_id' => 110000,
                'provincia_id' => 110400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 =>
            array (
                'id' => 110402,
                'nombre' => 'Llipata',
                'region_id' => 110000,
                'provincia_id' => 110400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 =>
            array (
                'id' => 110403,
                'nombre' => 'Río Grande',
                'region_id' => 110000,
                'provincia_id' => 110400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 =>
            array (
                'id' => 110404,
                'nombre' => 'Santa Cruz',
                'region_id' => 110000,
                'provincia_id' => 110400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 =>
            array (
                'id' => 110405,
                'nombre' => 'Tibillo',
                'region_id' => 110000,
                'provincia_id' => 110400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 =>
            array (
                'id' => 110501,
                'nombre' => 'Pisco',
                'region_id' => 110000,
                'provincia_id' => 110500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 =>
            array (
                'id' => 110502,
                'nombre' => 'Huancano',
                'region_id' => 110000,
                'provincia_id' => 110500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 =>
            array (
                'id' => 110503,
                'nombre' => 'Humay',
                'region_id' => 110000,
                'provincia_id' => 110500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 =>
            array (
                'id' => 110504,
                'nombre' => 'Independencia',
                'region_id' => 110000,
                'provincia_id' => 110500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 =>
            array (
                'id' => 110505,
                'nombre' => 'Paracas',
                'region_id' => 110000,
                'provincia_id' => 110500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 =>
            array (
                'id' => 110506,
                'nombre' => 'San Andrés',
                'region_id' => 110000,
                'provincia_id' => 110500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 =>
            array (
                'id' => 110507,
                'nombre' => 'San Clemente',
                'region_id' => 110000,
                'provincia_id' => 110500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 =>
            array (
                'id' => 110508,
                'nombre' => 'Tupac Amaru Inca',
                'region_id' => 110000,
                'provincia_id' => 110500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 =>
            array (
                'id' => 120101,
                'nombre' => 'Huancayo',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 =>
            array (
                'id' => 120104,
                'nombre' => 'Carhuacallanga',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 =>
            array (
                'id' => 120105,
                'nombre' => 'Chacapampa',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 =>
            array (
                'id' => 120106,
                'nombre' => 'Chicche',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 =>
            array (
                'id' => 120107,
                'nombre' => 'Chilca',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 =>
            array (
                'id' => 120108,
                'nombre' => 'Chongos Alto',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 =>
            array (
                'id' => 120111,
                'nombre' => 'Chupuro',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 =>
            array (
                'id' => 120112,
                'nombre' => 'Colca',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 =>
            array (
                'id' => 120113,
                'nombre' => 'Cullhuas',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 =>
            array (
                'id' => 120114,
                'nombre' => 'El Tambo',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 =>
            array (
                'id' => 120116,
                'nombre' => 'Huacrapuquio',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 =>
            array (
                'id' => 120117,
                'nombre' => 'Hualhuas',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 =>
            array (
                'id' => 120119,
                'nombre' => 'Huancan',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 =>
            array (
                'id' => 120120,
                'nombre' => 'Huasicancha',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 =>
            array (
                'id' => 120121,
                'nombre' => 'Huayucachi',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 =>
            array (
                'id' => 120122,
                'nombre' => 'Ingenio',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 =>
            array (
                'id' => 120124,
                'nombre' => 'Pariahuanca',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 =>
            array (
                'id' => 120125,
                'nombre' => 'Pilcomayo',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 =>
            array (
                'id' => 120126,
                'nombre' => 'Pucara',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 =>
            array (
                'id' => 120127,
                'nombre' => 'Quichuay',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 =>
            array (
                'id' => 120128,
                'nombre' => 'Quilcas',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 =>
            array (
                'id' => 120129,
                'nombre' => 'San Agustín',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 =>
            array (
                'id' => 120130,
                'nombre' => 'San Jerónimo de Tunan',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 =>
            array (
                'id' => 120132,
                'nombre' => 'Saño',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 =>
            array (
                'id' => 120133,
                'nombre' => 'Sapallanga',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 =>
            array (
                'id' => 120134,
                'nombre' => 'Sicaya',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 =>
            array (
                'id' => 120135,
                'nombre' => 'Santo Domingo de Acobamba',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 =>
            array (
                'id' => 120136,
                'nombre' => 'Viques',
                'region_id' => 120000,
                'provincia_id' => 120100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 =>
            array (
                'id' => 120201,
                'nombre' => 'Concepción',
                'region_id' => 120000,
                'provincia_id' => 120200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 =>
            array (
                'id' => 120202,
                'nombre' => 'Aco',
                'region_id' => 120000,
                'provincia_id' => 120200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 =>
            array (
                'id' => 120203,
                'nombre' => 'Andamarca',
                'region_id' => 120000,
                'provincia_id' => 120200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 =>
            array (
                'id' => 120204,
                'nombre' => 'Chambara',
                'region_id' => 120000,
                'provincia_id' => 120200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 =>
            array (
                'id' => 120205,
                'nombre' => 'Cochas',
                'region_id' => 120000,
                'provincia_id' => 120200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 =>
            array (
                'id' => 120206,
                'nombre' => 'Comas',
                'region_id' => 120000,
                'provincia_id' => 120200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 =>
            array (
                'id' => 120207,
                'nombre' => 'Heroínas Toledo',
                'region_id' => 120000,
                'provincia_id' => 120200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 =>
            array (
                'id' => 120208,
                'nombre' => 'Manzanares',
                'region_id' => 120000,
                'provincia_id' => 120200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 =>
            array (
                'id' => 120209,
                'nombre' => 'Mariscal Castilla',
                'region_id' => 120000,
                'provincia_id' => 120200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 =>
            array (
                'id' => 120210,
                'nombre' => 'Matahuasi',
                'region_id' => 120000,
                'provincia_id' => 120200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 =>
            array (
                'id' => 120211,
                'nombre' => 'Mito',
                'region_id' => 120000,
                'provincia_id' => 120200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 =>
            array (
                'id' => 120212,
                'nombre' => 'Nueve de Julio',
                'region_id' => 120000,
                'provincia_id' => 120200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 =>
            array (
                'id' => 120213,
                'nombre' => 'Orcotuna',
                'region_id' => 120000,
                'provincia_id' => 120200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 =>
            array (
                'id' => 120214,
                'nombre' => 'San José de Quero',
                'region_id' => 120000,
                'provincia_id' => 120200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 =>
            array (
                'id' => 120215,
                'nombre' => 'Santa Rosa de Ocopa',
                'region_id' => 120000,
                'provincia_id' => 120200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 =>
            array (
                'id' => 120301,
                'nombre' => 'Chanchamayo',
                'region_id' => 120000,
                'provincia_id' => 120300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 =>
            array (
                'id' => 120302,
                'nombre' => 'Perene',
                'region_id' => 120000,
                'provincia_id' => 120300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 =>
            array (
                'id' => 120303,
                'nombre' => 'Pichanaqui',
                'region_id' => 120000,
                'provincia_id' => 120300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 =>
            array (
                'id' => 120304,
                'nombre' => 'San Luis de Shuaro',
                'region_id' => 120000,
                'provincia_id' => 120300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 =>
            array (
                'id' => 120305,
                'nombre' => 'San Ramón',
                'region_id' => 120000,
                'provincia_id' => 120300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 =>
            array (
                'id' => 120306,
                'nombre' => 'Vitoc',
                'region_id' => 120000,
                'provincia_id' => 120300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 =>
            array (
                'id' => 120401,
                'nombre' => 'Jauja',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 =>
            array (
                'id' => 120402,
                'nombre' => 'Acolla',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 =>
            array (
                'id' => 120403,
                'nombre' => 'Apata',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 =>
            array (
                'id' => 120404,
                'nombre' => 'Ataura',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 =>
            array (
                'id' => 120405,
                'nombre' => 'Canchayllo',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 =>
            array (
                'id' => 120406,
                'nombre' => 'Curicaca',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 =>
            array (
                'id' => 120407,
                'nombre' => 'El Mantaro',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 =>
            array (
                'id' => 120408,
                'nombre' => 'Huamali',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 =>
            array (
                'id' => 120409,
                'nombre' => 'Huaripampa',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 =>
            array (
                'id' => 120410,
                'nombre' => 'Huertas',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 =>
            array (
                'id' => 120411,
                'nombre' => 'Janjaillo',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 =>
            array (
                'id' => 120412,
                'nombre' => 'Julcán',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 =>
            array (
                'id' => 120413,
                'nombre' => 'Leonor Ordóñez',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 =>
            array (
                'id' => 120414,
                'nombre' => 'Llocllapampa',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 =>
            array (
                'id' => 120415,
                'nombre' => 'Marco',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 =>
            array (
                'id' => 120416,
                'nombre' => 'Masma',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 =>
            array (
                'id' => 120417,
                'nombre' => 'Masma Chicche',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 =>
            array (
                'id' => 120418,
                'nombre' => 'Molinos',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 =>
            array (
                'id' => 120419,
                'nombre' => 'Monobamba',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 =>
            array (
                'id' => 120420,
                'nombre' => 'Muqui',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 =>
            array (
                'id' => 120421,
                'nombre' => 'Muquiyauyo',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 =>
            array (
                'id' => 120422,
                'nombre' => 'Paca',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 =>
            array (
                'id' => 120423,
                'nombre' => 'Paccha',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 =>
            array (
                'id' => 120424,
                'nombre' => 'Pancan',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 =>
            array (
                'id' => 120425,
                'nombre' => 'Parco',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 =>
            array (
                'id' => 120426,
                'nombre' => 'Pomacancha',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 =>
            array (
                'id' => 120427,
                'nombre' => 'Ricran',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 =>
            array (
                'id' => 120428,
                'nombre' => 'San Lorenzo',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 =>
            array (
                'id' => 120429,
                'nombre' => 'San Pedro de Chunan',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 =>
            array (
                'id' => 120430,
                'nombre' => 'Sausa',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 =>
            array (
                'id' => 120431,
                'nombre' => 'Sincos',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 =>
            array (
                'id' => 120432,
                'nombre' => 'Tunan Marca',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 =>
            array (
                'id' => 120433,
                'nombre' => 'Yauli',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 =>
            array (
                'id' => 120434,
                'nombre' => 'Yauyos',
                'region_id' => 120000,
                'provincia_id' => 120400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 =>
            array (
                'id' => 120501,
                'nombre' => 'Junin',
                'region_id' => 120000,
                'provincia_id' => 120500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 =>
            array (
                'id' => 120502,
                'nombre' => 'Carhuamayo',
                'region_id' => 120000,
                'provincia_id' => 120500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 =>
            array (
                'id' => 120503,
                'nombre' => 'Ondores',
                'region_id' => 120000,
                'provincia_id' => 120500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 =>
            array (
                'id' => 120504,
                'nombre' => 'Ulcumayo',
                'region_id' => 120000,
                'provincia_id' => 120500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 =>
            array (
                'id' => 120601,
                'nombre' => 'Satipo',
                'region_id' => 120000,
                'provincia_id' => 120600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 =>
            array (
                'id' => 120602,
                'nombre' => 'Coviriali',
                'region_id' => 120000,
                'provincia_id' => 120600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 =>
            array (
                'id' => 120603,
                'nombre' => 'Llaylla',
                'region_id' => 120000,
                'provincia_id' => 120600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 =>
            array (
                'id' => 120604,
                'nombre' => 'Mazamari',
                'region_id' => 120000,
                'provincia_id' => 120600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 =>
            array (
                'id' => 120605,
                'nombre' => 'Pampa Hermosa',
                'region_id' => 120000,
                'provincia_id' => 120600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 =>
            array (
                'id' => 120606,
                'nombre' => 'Pangoa',
                'region_id' => 120000,
                'provincia_id' => 120600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 =>
            array (
                'id' => 120607,
                'nombre' => 'Río Negro',
                'region_id' => 120000,
                'provincia_id' => 120600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 =>
            array (
                'id' => 120608,
                'nombre' => 'Río Tambo',
                'region_id' => 120000,
                'provincia_id' => 120600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 =>
            array (
                'id' => 120609,
                'nombre' => 'Vizcatan del Ene',
                'region_id' => 120000,
                'provincia_id' => 120600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 =>
            array (
                'id' => 120701,
                'nombre' => 'Tarma',
                'region_id' => 120000,
                'provincia_id' => 120700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 =>
            array (
                'id' => 120702,
                'nombre' => 'Acobamba',
                'region_id' => 120000,
                'provincia_id' => 120700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 =>
            array (
                'id' => 120703,
                'nombre' => 'Huaricolca',
                'region_id' => 120000,
                'provincia_id' => 120700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 =>
            array (
                'id' => 120704,
                'nombre' => 'Huasahuasi',
                'region_id' => 120000,
                'provincia_id' => 120700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 =>
            array (
                'id' => 120705,
                'nombre' => 'La Unión',
                'region_id' => 120000,
                'provincia_id' => 120700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 =>
            array (
                'id' => 120706,
                'nombre' => 'Palca',
                'region_id' => 120000,
                'provincia_id' => 120700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 =>
            array (
                'id' => 120707,
                'nombre' => 'Palcamayo',
                'region_id' => 120000,
                'provincia_id' => 120700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 =>
            array (
                'id' => 120708,
                'nombre' => 'San Pedro de Cajas',
                'region_id' => 120000,
                'provincia_id' => 120700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 =>
            array (
                'id' => 120709,
                'nombre' => 'Tapo',
                'region_id' => 120000,
                'provincia_id' => 120700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 =>
            array (
                'id' => 120801,
                'nombre' => 'La Oroya',
                'region_id' => 120000,
                'provincia_id' => 120800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 =>
            array (
                'id' => 120802,
                'nombre' => 'Chacapalpa',
                'region_id' => 120000,
                'provincia_id' => 120800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 =>
            array (
                'id' => 120803,
                'nombre' => 'Huay-Huay',
                'region_id' => 120000,
                'provincia_id' => 120800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 =>
            array (
                'id' => 120804,
                'nombre' => 'Marcapomacocha',
                'region_id' => 120000,
                'provincia_id' => 120800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 =>
            array (
                'id' => 120805,
                'nombre' => 'Morococha',
                'region_id' => 120000,
                'provincia_id' => 120800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 =>
            array (
                'id' => 120806,
                'nombre' => 'Paccha',
                'region_id' => 120000,
                'provincia_id' => 120800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 =>
            array (
                'id' => 120807,
                'nombre' => 'Santa Bárbara de Carhuacayan',
                'region_id' => 120000,
                'provincia_id' => 120800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 =>
            array (
                'id' => 120808,
                'nombre' => 'Santa Rosa de Sacco',
                'region_id' => 120000,
                'provincia_id' => 120800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 =>
            array (
                'id' => 120809,
                'nombre' => 'Suitucancha',
                'region_id' => 120000,
                'provincia_id' => 120800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 =>
            array (
                'id' => 120810,
                'nombre' => 'Yauli',
                'region_id' => 120000,
                'provincia_id' => 120800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 =>
            array (
                'id' => 120901,
                'nombre' => 'Chupaca',
                'region_id' => 120000,
                'provincia_id' => 120900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 =>
            array (
                'id' => 120902,
                'nombre' => 'Ahuac',
                'region_id' => 120000,
                'provincia_id' => 120900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 =>
            array (
                'id' => 120903,
                'nombre' => 'Chongos Bajo',
                'region_id' => 120000,
                'provincia_id' => 120900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 =>
            array (
                'id' => 120904,
                'nombre' => 'Huachac',
                'region_id' => 120000,
                'provincia_id' => 120900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 =>
            array (
                'id' => 120905,
                'nombre' => 'Huamancaca Chico',
                'region_id' => 120000,
                'provincia_id' => 120900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 =>
            array (
                'id' => 120906,
                'nombre' => 'San Juan de Iscos',
                'region_id' => 120000,
                'provincia_id' => 120900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 =>
            array (
                'id' => 120907,
                'nombre' => 'San Juan de Jarpa',
                'region_id' => 120000,
                'provincia_id' => 120900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 =>
            array (
                'id' => 120908,
                'nombre' => 'Tres de Diciembre',
                'region_id' => 120000,
                'provincia_id' => 120900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 =>
            array (
                'id' => 120909,
                'nombre' => 'Yanacancha',
                'region_id' => 120000,
                'provincia_id' => 120900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 =>
            array (
                'id' => 130101,
                'nombre' => 'Trujillo',
                'region_id' => 130000,
                'provincia_id' => 130100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 =>
            array (
                'id' => 130102,
                'nombre' => 'El Porvenir',
                'region_id' => 130000,
                'provincia_id' => 130100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 =>
            array (
                'id' => 130103,
                'nombre' => 'Florencia de Mora',
                'region_id' => 130000,
                'provincia_id' => 130100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 =>
            array (
                'id' => 130104,
                'nombre' => 'Huanchaco',
                'region_id' => 130000,
                'provincia_id' => 130100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 =>
            array (
                'id' => 130105,
                'nombre' => 'La Esperanza',
                'region_id' => 130000,
                'provincia_id' => 130100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 =>
            array (
                'id' => 130106,
                'nombre' => 'Laredo',
                'region_id' => 130000,
                'provincia_id' => 130100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 =>
            array (
                'id' => 130107,
                'nombre' => 'Moche',
                'region_id' => 130000,
                'provincia_id' => 130100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 =>
            array (
                'id' => 130108,
                'nombre' => 'Poroto',
                'region_id' => 130000,
                'provincia_id' => 130100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 =>
            array (
                'id' => 130109,
                'nombre' => 'Salaverry',
                'region_id' => 130000,
                'provincia_id' => 130100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 =>
            array (
                'id' => 130110,
                'nombre' => 'Simbal',
                'region_id' => 130000,
                'provincia_id' => 130100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 =>
            array (
                'id' => 130111,
                'nombre' => 'Victor Larco Herrera',
                'region_id' => 130000,
                'provincia_id' => 130100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 =>
            array (
                'id' => 130201,
                'nombre' => 'Ascope',
                'region_id' => 130000,
                'provincia_id' => 130200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 =>
            array (
                'id' => 130202,
                'nombre' => 'Chicama',
                'region_id' => 130000,
                'provincia_id' => 130200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 =>
            array (
                'id' => 130203,
                'nombre' => 'Chocope',
                'region_id' => 130000,
                'provincia_id' => 130200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 =>
            array (
                'id' => 130204,
                'nombre' => 'Magdalena de Cao',
                'region_id' => 130000,
                'provincia_id' => 130200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 =>
            array (
                'id' => 130205,
                'nombre' => 'Paijan',
                'region_id' => 130000,
                'provincia_id' => 130200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 =>
            array (
                'id' => 130206,
                'nombre' => 'Rázuri',
                'region_id' => 130000,
                'provincia_id' => 130200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 =>
            array (
                'id' => 130207,
                'nombre' => 'Santiago de Cao',
                'region_id' => 130000,
                'provincia_id' => 130200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 =>
            array (
                'id' => 130208,
                'nombre' => 'Casa Grande',
                'region_id' => 130000,
                'provincia_id' => 130200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 =>
            array (
                'id' => 130301,
                'nombre' => 'Bolívar',
                'region_id' => 130000,
                'provincia_id' => 130300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 =>
            array (
                'id' => 130302,
                'nombre' => 'Bambamarca',
                'region_id' => 130000,
                'provincia_id' => 130300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 =>
            array (
                'id' => 130303,
                'nombre' => 'Condormarca',
                'region_id' => 130000,
                'provincia_id' => 130300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 =>
            array (
                'id' => 130304,
                'nombre' => 'Longotea',
                'region_id' => 130000,
                'provincia_id' => 130300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 =>
            array (
                'id' => 130305,
                'nombre' => 'Uchumarca',
                'region_id' => 130000,
                'provincia_id' => 130300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 =>
            array (
                'id' => 130306,
                'nombre' => 'Ucuncha',
                'region_id' => 130000,
                'provincia_id' => 130300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 =>
            array (
                'id' => 130401,
                'nombre' => 'Chepen',
                'region_id' => 130000,
                'provincia_id' => 130400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 =>
            array (
                'id' => 130402,
                'nombre' => 'Pacanga',
                'region_id' => 130000,
                'provincia_id' => 130400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 =>
            array (
                'id' => 130403,
                'nombre' => 'Pueblo Nuevo',
                'region_id' => 130000,
                'provincia_id' => 130400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 =>
            array (
                'id' => 130501,
                'nombre' => 'Julcan',
                'region_id' => 130000,
                'provincia_id' => 130500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 =>
            array (
                'id' => 130502,
                'nombre' => 'Calamarca',
                'region_id' => 130000,
                'provincia_id' => 130500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 =>
            array (
                'id' => 130503,
                'nombre' => 'Carabamba',
                'region_id' => 130000,
                'provincia_id' => 130500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 =>
            array (
                'id' => 130504,
                'nombre' => 'Huaso',
                'region_id' => 130000,
                'provincia_id' => 130500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 =>
            array (
                'id' => 130601,
                'nombre' => 'Otuzco',
                'region_id' => 130000,
                'provincia_id' => 130600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 =>
            array (
                'id' => 130602,
                'nombre' => 'Agallpampa',
                'region_id' => 130000,
                'provincia_id' => 130600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 =>
            array (
                'id' => 130604,
                'nombre' => 'Charat',
                'region_id' => 130000,
                'provincia_id' => 130600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 =>
            array (
                'id' => 130605,
                'nombre' => 'Huaranchal',
                'region_id' => 130000,
                'provincia_id' => 130600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 =>
            array (
                'id' => 130606,
                'nombre' => 'La Cuesta',
                'region_id' => 130000,
                'provincia_id' => 130600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 =>
            array (
                'id' => 130608,
                'nombre' => 'Mache',
                'region_id' => 130000,
                'provincia_id' => 130600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 =>
            array (
                'id' => 130610,
                'nombre' => 'Paranday',
                'region_id' => 130000,
                'provincia_id' => 130600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 =>
            array (
                'id' => 130611,
                'nombre' => 'Salpo',
                'region_id' => 130000,
                'provincia_id' => 130600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 =>
            array (
                'id' => 130613,
                'nombre' => 'Sinsicap',
                'region_id' => 130000,
                'provincia_id' => 130600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 =>
            array (
                'id' => 130614,
                'nombre' => 'Usquil',
                'region_id' => 130000,
                'provincia_id' => 130600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 =>
            array (
                'id' => 130701,
                'nombre' => 'San Pedro de Lloc',
                'region_id' => 130000,
                'provincia_id' => 130700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 =>
            array (
                'id' => 130702,
                'nombre' => 'Guadalupe',
                'region_id' => 130000,
                'provincia_id' => 130700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 =>
            array (
                'id' => 130703,
                'nombre' => 'Jequetepeque',
                'region_id' => 130000,
                'provincia_id' => 130700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 =>
            array (
                'id' => 130704,
                'nombre' => 'Pacasmayo',
                'region_id' => 130000,
                'provincia_id' => 130700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 =>
            array (
                'id' => 130705,
                'nombre' => 'San José',
                'region_id' => 130000,
                'provincia_id' => 130700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 =>
            array (
                'id' => 130801,
                'nombre' => 'Tayabamba',
                'region_id' => 130000,
                'provincia_id' => 130800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 =>
            array (
                'id' => 130802,
                'nombre' => 'Buldibuyo',
                'region_id' => 130000,
                'provincia_id' => 130800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 =>
            array (
                'id' => 130803,
                'nombre' => 'Chillia',
                'region_id' => 130000,
                'provincia_id' => 130800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 =>
            array (
                'id' => 130804,
                'nombre' => 'Huancaspata',
                'region_id' => 130000,
                'provincia_id' => 130800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 =>
            array (
                'id' => 130805,
                'nombre' => 'Huaylillas',
                'region_id' => 130000,
                'provincia_id' => 130800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 =>
            array (
                'id' => 130806,
                'nombre' => 'Huayo',
                'region_id' => 130000,
                'provincia_id' => 130800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 =>
            array (
                'id' => 130807,
                'nombre' => 'Ongon',
                'region_id' => 130000,
                'provincia_id' => 130800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 =>
            array (
                'id' => 130808,
                'nombre' => 'Parcoy',
                'region_id' => 130000,
                'provincia_id' => 130800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 =>
            array (
                'id' => 130809,
                'nombre' => 'Pataz',
                'region_id' => 130000,
                'provincia_id' => 130800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 =>
            array (
                'id' => 130810,
                'nombre' => 'Pias',
                'region_id' => 130000,
                'provincia_id' => 130800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 =>
            array (
                'id' => 130811,
                'nombre' => 'Santiago de Challas',
                'region_id' => 130000,
                'provincia_id' => 130800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 =>
            array (
                'id' => 130812,
                'nombre' => 'Taurija',
                'region_id' => 130000,
                'provincia_id' => 130800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 =>
            array (
                'id' => 130813,
                'nombre' => 'Urpay',
                'region_id' => 130000,
                'provincia_id' => 130800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 =>
            array (
                'id' => 130901,
                'nombre' => 'Huamachuco',
                'region_id' => 130000,
                'provincia_id' => 130900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 =>
            array (
                'id' => 130902,
                'nombre' => 'Chugay',
                'region_id' => 130000,
                'provincia_id' => 130900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 =>
            array (
                'id' => 130903,
                'nombre' => 'Cochorco',
                'region_id' => 130000,
                'provincia_id' => 130900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 =>
            array (
                'id' => 130904,
                'nombre' => 'Curgos',
                'region_id' => 130000,
                'provincia_id' => 130900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 =>
            array (
                'id' => 130905,
                'nombre' => 'Marcabal',
                'region_id' => 130000,
                'provincia_id' => 130900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 =>
            array (
                'id' => 130906,
                'nombre' => 'Sanagoran',
                'region_id' => 130000,
                'provincia_id' => 130900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 =>
            array (
                'id' => 130907,
                'nombre' => 'Sarin',
                'region_id' => 130000,
                'provincia_id' => 130900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 =>
            array (
                'id' => 130908,
                'nombre' => 'Sartimbamba',
                'region_id' => 130000,
                'provincia_id' => 130900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 =>
            array (
                'id' => 131001,
                'nombre' => 'Santiago de Chuco',
                'region_id' => 130000,
                'provincia_id' => 131000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 =>
            array (
                'id' => 131002,
                'nombre' => 'Angasmarca',
                'region_id' => 130000,
                'provincia_id' => 131000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 =>
            array (
                'id' => 131003,
                'nombre' => 'Cachicadan',
                'region_id' => 130000,
                'provincia_id' => 131000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 =>
            array (
                'id' => 131004,
                'nombre' => 'Mollebamba',
                'region_id' => 130000,
                'provincia_id' => 131000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 =>
            array (
                'id' => 131005,
                'nombre' => 'Mollepata',
                'region_id' => 130000,
                'provincia_id' => 131000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 =>
            array (
                'id' => 131006,
                'nombre' => 'Quiruvilca',
                'region_id' => 130000,
                'provincia_id' => 131000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 =>
            array (
                'id' => 131007,
                'nombre' => 'Santa Cruz de Chuca',
                'region_id' => 130000,
                'provincia_id' => 131000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 =>
            array (
                'id' => 131008,
                'nombre' => 'Sitabamba',
                'region_id' => 130000,
                'provincia_id' => 131000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 =>
            array (
                'id' => 131101,
                'nombre' => 'Cascas',
                'region_id' => 130000,
                'provincia_id' => 131100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 =>
            array (
                'id' => 131102,
                'nombre' => 'Lucma',
                'region_id' => 130000,
                'provincia_id' => 131100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 =>
            array (
                'id' => 131103,
                'nombre' => 'Marmot',
                'region_id' => 130000,
                'provincia_id' => 131100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 =>
            array (
                'id' => 131104,
                'nombre' => 'Sayapullo',
                'region_id' => 130000,
                'provincia_id' => 131100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 =>
            array (
                'id' => 131201,
                'nombre' => 'Viru',
                'region_id' => 130000,
                'provincia_id' => 131200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 =>
            array (
                'id' => 131202,
                'nombre' => 'Chao',
                'region_id' => 130000,
                'provincia_id' => 131200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 =>
            array (
                'id' => 131203,
                'nombre' => 'Guadalupito',
                'region_id' => 130000,
                'provincia_id' => 131200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 =>
            array (
                'id' => 140101,
                'nombre' => 'Chiclayo',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 =>
            array (
                'id' => 140102,
                'nombre' => 'Chongoyape',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 =>
            array (
                'id' => 140103,
                'nombre' => 'Eten',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 =>
            array (
                'id' => 140104,
                'nombre' => 'Eten Puerto',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 =>
            array (
                'id' => 140105,
                'nombre' => 'José Leonardo Ortiz',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 =>
            array (
                'id' => 140106,
                'nombre' => 'La Victoria',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 =>
            array (
                'id' => 140107,
                'nombre' => 'Lagunas',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 =>
            array (
                'id' => 140108,
                'nombre' => 'Monsefu',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 =>
            array (
                'id' => 140109,
                'nombre' => 'Nueva Arica',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 =>
            array (
                'id' => 140110,
                'nombre' => 'Oyotun',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 =>
            array (
                'id' => 140111,
                'nombre' => 'Picsi',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 =>
            array (
                'id' => 140112,
                'nombre' => 'Pimentel',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 =>
            array (
                'id' => 140113,
                'nombre' => 'Reque',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 =>
            array (
                'id' => 140114,
                'nombre' => 'Santa Rosa',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 =>
            array (
                'id' => 140115,
                'nombre' => 'Saña',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 =>
            array (
                'id' => 140116,
                'nombre' => 'Cayalti',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 =>
            array (
                'id' => 140117,
                'nombre' => 'Patapo',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 =>
            array (
                'id' => 140118,
                'nombre' => 'Pomalca',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 =>
            array (
                'id' => 140119,
                'nombre' => 'Pucala',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 =>
            array (
                'id' => 140120,
                'nombre' => 'Tuman',
                'region_id' => 140000,
                'provincia_id' => 140100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 =>
            array (
                'id' => 140201,
                'nombre' => 'Ferreñafe',
                'region_id' => 140000,
                'provincia_id' => 140200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 =>
            array (
                'id' => 140202,
                'nombre' => 'Cañaris',
                'region_id' => 140000,
                'provincia_id' => 140200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 =>
            array (
                'id' => 140203,
                'nombre' => 'Incahuasi',
                'region_id' => 140000,
                'provincia_id' => 140200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 =>
            array (
                'id' => 140204,
                'nombre' => 'Manuel Antonio Mesones Muro',
                'region_id' => 140000,
                'provincia_id' => 140200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 =>
            array (
                'id' => 140205,
                'nombre' => 'Pitipo',
                'region_id' => 140000,
                'provincia_id' => 140200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 =>
            array (
                'id' => 140206,
                'nombre' => 'Pueblo Nuevo',
                'region_id' => 140000,
                'provincia_id' => 140200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 =>
            array (
                'id' => 140301,
                'nombre' => 'Lambayeque',
                'region_id' => 140000,
                'provincia_id' => 140300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 =>
            array (
                'id' => 140302,
                'nombre' => 'Chochope',
                'region_id' => 140000,
                'provincia_id' => 140300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 =>
            array (
                'id' => 140303,
                'nombre' => 'Illimo',
                'region_id' => 140000,
                'provincia_id' => 140300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 =>
            array (
                'id' => 140304,
                'nombre' => 'Jayanca',
                'region_id' => 140000,
                'provincia_id' => 140300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 =>
            array (
                'id' => 140305,
                'nombre' => 'Mochumi',
                'region_id' => 140000,
                'provincia_id' => 140300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 =>
            array (
                'id' => 140306,
                'nombre' => 'Morrope',
                'region_id' => 140000,
                'provincia_id' => 140300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 =>
            array (
                'id' => 140307,
                'nombre' => 'Motupe',
                'region_id' => 140000,
                'provincia_id' => 140300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 =>
            array (
                'id' => 140308,
                'nombre' => 'Olmos',
                'region_id' => 140000,
                'provincia_id' => 140300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 =>
            array (
                'id' => 140309,
                'nombre' => 'Pacora',
                'region_id' => 140000,
                'provincia_id' => 140300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 =>
            array (
                'id' => 140310,
                'nombre' => 'Salas',
                'region_id' => 140000,
                'provincia_id' => 140300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 =>
            array (
                'id' => 140311,
                'nombre' => 'San José',
                'region_id' => 140000,
                'provincia_id' => 140300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 =>
            array (
                'id' => 140312,
                'nombre' => 'Tucume',
                'region_id' => 140000,
                'provincia_id' => 140300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 =>
            array (
                'id' => 150101,
                'nombre' => 'Lima',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 =>
            array (
                'id' => 150102,
                'nombre' => 'Ancón',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 =>
            array (
                'id' => 150103,
                'nombre' => 'Ate',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 =>
            array (
                'id' => 150104,
                'nombre' => 'Barranco',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 =>
            array (
                'id' => 150105,
                'nombre' => 'Breña',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 =>
            array (
                'id' => 150106,
                'nombre' => 'Carabayllo',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 =>
            array (
                'id' => 150107,
                'nombre' => 'Chaclacayo',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 =>
            array (
                'id' => 150108,
                'nombre' => 'Chorrillos',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 =>
            array (
                'id' => 150109,
                'nombre' => 'Cieneguilla',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 =>
            array (
                'id' => 150110,
                'nombre' => 'Comas',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 =>
            array (
                'id' => 150111,
                'nombre' => 'El Agustino',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 =>
            array (
                'id' => 150112,
                'nombre' => 'Independencia',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 =>
            array (
                'id' => 150113,
                'nombre' => 'Jesús María',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 =>
            array (
                'id' => 150114,
                'nombre' => 'La Molina',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 =>
            array (
                'id' => 150115,
                'nombre' => 'La Victoria',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 =>
            array (
                'id' => 150116,
                'nombre' => 'Lince',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 =>
            array (
                'id' => 150117,
                'nombre' => 'Los Olivos',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 =>
            array (
                'id' => 150118,
                'nombre' => 'Lurigancho',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 =>
            array (
                'id' => 150119,
                'nombre' => 'Lurin',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 =>
            array (
                'id' => 150120,
                'nombre' => 'Magdalena del Mar',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 =>
            array (
                'id' => 150121,
                'nombre' => 'Pueblo Libre',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 =>
            array (
                'id' => 150122,
                'nombre' => 'Miraflores',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 =>
            array (
                'id' => 150123,
                'nombre' => 'Pachacamac',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 =>
            array (
                'id' => 150124,
                'nombre' => 'Pucusana',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 =>
            array (
                'id' => 150125,
                'nombre' => 'Puente Piedra',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 =>
            array (
                'id' => 150126,
                'nombre' => 'Punta Hermosa',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 =>
            array (
                'id' => 150127,
                'nombre' => 'Punta Negra',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 =>
            array (
                'id' => 150128,
                'nombre' => 'Rímac',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 =>
            array (
                'id' => 150129,
                'nombre' => 'San Bartolo',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 =>
            array (
                'id' => 150130,
                'nombre' => 'San Borja',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 =>
            array (
                'id' => 150131,
                'nombre' => 'San Isidro',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 =>
            array (
                'id' => 150132,
                'nombre' => 'San Juan de Lurigancho',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 =>
            array (
                'id' => 150133,
                'nombre' => 'San Juan de Miraflores',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 =>
            array (
                'id' => 150134,
                'nombre' => 'San Luis',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 =>
            array (
                'id' => 150135,
                'nombre' => 'San Martín de Porres',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 =>
            array (
                'id' => 150136,
                'nombre' => 'San Miguel',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 =>
            array (
                'id' => 150137,
                'nombre' => 'Santa Anita',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 =>
            array (
                'id' => 150138,
                'nombre' => 'Santa María del Mar',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 =>
            array (
                'id' => 150139,
                'nombre' => 'Santa Rosa',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 =>
            array (
                'id' => 150140,
                'nombre' => 'Santiago de Surco',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 =>
            array (
                'id' => 150141,
                'nombre' => 'Surquillo',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 =>
            array (
                'id' => 150142,
                'nombre' => 'Villa El Salvador',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 =>
            array (
                'id' => 150143,
                'nombre' => 'Villa María del Triunfo',
                'region_id' => 150000,
                'provincia_id' => 150100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 =>
            array (
                'id' => 150201,
                'nombre' => 'Barranca',
                'region_id' => 150000,
                'provincia_id' => 150200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 =>
            array (
                'id' => 150202,
                'nombre' => 'Paramonga',
                'region_id' => 150000,
                'provincia_id' => 150200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 =>
            array (
                'id' => 150203,
                'nombre' => 'Pativilca',
                'region_id' => 150000,
                'provincia_id' => 150200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 =>
            array (
                'id' => 150204,
                'nombre' => 'Supe',
                'region_id' => 150000,
                'provincia_id' => 150200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 =>
            array (
                'id' => 150205,
                'nombre' => 'Supe Puerto',
                'region_id' => 150000,
                'provincia_id' => 150200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 =>
            array (
                'id' => 150301,
                'nombre' => 'Cajatambo',
                'region_id' => 150000,
                'provincia_id' => 150300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 =>
            array (
                'id' => 150302,
                'nombre' => 'Copa',
                'region_id' => 150000,
                'provincia_id' => 150300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 =>
            array (
                'id' => 150303,
                'nombre' => 'Gorgor',
                'region_id' => 150000,
                'provincia_id' => 150300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 =>
            array (
                'id' => 150304,
                'nombre' => 'Huancapon',
                'region_id' => 150000,
                'provincia_id' => 150300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 =>
            array (
                'id' => 150305,
                'nombre' => 'Manas',
                'region_id' => 150000,
                'provincia_id' => 150300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 =>
            array (
                'id' => 150401,
                'nombre' => 'Canta',
                'region_id' => 150000,
                'provincia_id' => 150400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 =>
            array (
                'id' => 150402,
                'nombre' => 'Arahuay',
                'region_id' => 150000,
                'provincia_id' => 150400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 =>
            array (
                'id' => 150403,
                'nombre' => 'Huamantanga',
                'region_id' => 150000,
                'provincia_id' => 150400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 =>
            array (
                'id' => 150404,
                'nombre' => 'Huaros',
                'region_id' => 150000,
                'provincia_id' => 150400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 =>
            array (
                'id' => 150405,
                'nombre' => 'Lachaqui',
                'region_id' => 150000,
                'provincia_id' => 150400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 =>
            array (
                'id' => 150406,
                'nombre' => 'San Buenaventura',
                'region_id' => 150000,
                'provincia_id' => 150400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 =>
            array (
                'id' => 150407,
                'nombre' => 'Santa Rosa de Quives',
                'region_id' => 150000,
                'provincia_id' => 150400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 =>
            array (
                'id' => 150501,
                'nombre' => 'San Vicente de Cañete',
                'region_id' => 150000,
                'provincia_id' => 150500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 =>
            array (
                'id' => 150502,
                'nombre' => 'Asia',
                'region_id' => 150000,
                'provincia_id' => 150500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 =>
            array (
                'id' => 150503,
                'nombre' => 'Calango',
                'region_id' => 150000,
                'provincia_id' => 150500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 =>
            array (
                'id' => 150504,
                'nombre' => 'Cerro Azul',
                'region_id' => 150000,
                'provincia_id' => 150500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 =>
            array (
                'id' => 150505,
                'nombre' => 'Chilca',
                'region_id' => 150000,
                'provincia_id' => 150500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 =>
            array (
                'id' => 150506,
                'nombre' => 'Coayllo',
                'region_id' => 150000,
                'provincia_id' => 150500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 =>
            array (
                'id' => 150507,
                'nombre' => 'Imperial',
                'region_id' => 150000,
                'provincia_id' => 150500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 =>
            array (
                'id' => 150508,
                'nombre' => 'Lunahuana',
                'region_id' => 150000,
                'provincia_id' => 150500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 =>
            array (
                'id' => 150509,
                'nombre' => 'Mala',
                'region_id' => 150000,
                'provincia_id' => 150500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 =>
            array (
                'id' => 150510,
                'nombre' => 'Nuevo Imperial',
                'region_id' => 150000,
                'provincia_id' => 150500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 =>
            array (
                'id' => 150511,
                'nombre' => 'Pacaran',
                'region_id' => 150000,
                'provincia_id' => 150500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 =>
            array (
                'id' => 150512,
                'nombre' => 'Quilmana',
                'region_id' => 150000,
                'provincia_id' => 150500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 =>
            array (
                'id' => 150513,
                'nombre' => 'San Antonio',
                'region_id' => 150000,
                'provincia_id' => 150500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 =>
            array (
                'id' => 150514,
                'nombre' => 'San Luis',
                'region_id' => 150000,
                'provincia_id' => 150500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 =>
            array (
                'id' => 150515,
                'nombre' => 'Santa Cruz de Flores',
                'region_id' => 150000,
                'provincia_id' => 150500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 =>
            array (
                'id' => 150516,
                'nombre' => 'Zúñiga',
                'region_id' => 150000,
                'provincia_id' => 150500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 =>
            array (
                'id' => 150601,
                'nombre' => 'Huaral',
                'region_id' => 150000,
                'provincia_id' => 150600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 =>
            array (
                'id' => 150602,
                'nombre' => 'Atavillos Alto',
                'region_id' => 150000,
                'provincia_id' => 150600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 =>
            array (
                'id' => 150603,
                'nombre' => 'Atavillos Bajo',
                'region_id' => 150000,
                'provincia_id' => 150600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 =>
            array (
                'id' => 150604,
                'nombre' => 'Aucallama',
                'region_id' => 150000,
                'provincia_id' => 150600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 =>
            array (
                'id' => 150605,
                'nombre' => 'Chancay',
                'region_id' => 150000,
                'provincia_id' => 150600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 =>
            array (
                'id' => 150606,
                'nombre' => 'Ihuari',
                'region_id' => 150000,
                'provincia_id' => 150600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 =>
            array (
                'id' => 150607,
                'nombre' => 'Lampian',
                'region_id' => 150000,
                'provincia_id' => 150600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 =>
            array (
                'id' => 150608,
                'nombre' => 'Pacaraos',
                'region_id' => 150000,
                'provincia_id' => 150600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 =>
            array (
                'id' => 150609,
                'nombre' => 'San Miguel de Acos',
                'region_id' => 150000,
                'provincia_id' => 150600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 =>
            array (
                'id' => 150610,
                'nombre' => 'Santa Cruz de Andamarca',
                'region_id' => 150000,
                'provincia_id' => 150600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 =>
            array (
                'id' => 150611,
                'nombre' => 'Sumbilca',
                'region_id' => 150000,
                'provincia_id' => 150600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 =>
            array (
                'id' => 150612,
                'nombre' => 'Veintisiete de Noviembre',
                'region_id' => 150000,
                'provincia_id' => 150600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 =>
            array (
                'id' => 150701,
                'nombre' => 'Matucana',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 =>
            array (
                'id' => 150702,
                'nombre' => 'Antioquia',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 =>
            array (
                'id' => 150703,
                'nombre' => 'Callahuanca',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 =>
            array (
                'id' => 150704,
                'nombre' => 'Carampoma',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 =>
            array (
                'id' => 150705,
                'nombre' => 'Chicla',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 =>
            array (
                'id' => 150706,
                'nombre' => 'Cuenca',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 =>
            array (
                'id' => 150707,
                'nombre' => 'Huachupampa',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 =>
            array (
                'id' => 150708,
                'nombre' => 'Huanza',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 =>
            array (
                'id' => 150709,
                'nombre' => 'Huarochiri',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 =>
            array (
                'id' => 150710,
                'nombre' => 'Lahuaytambo',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 =>
            array (
                'id' => 150711,
                'nombre' => 'Langa',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 =>
            array (
                'id' => 150712,
                'nombre' => 'Laraos',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 =>
            array (
                'id' => 150713,
                'nombre' => 'Mariatana',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 =>
            array (
                'id' => 150714,
                'nombre' => 'Ricardo Palma',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 =>
            array (
                'id' => 150715,
                'nombre' => 'San Andrés de Tupicocha',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 =>
            array (
                'id' => 150716,
                'nombre' => 'San Antonio',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 =>
            array (
                'id' => 150717,
                'nombre' => 'San Bartolomé',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 =>
            array (
                'id' => 150718,
                'nombre' => 'San Damian',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 =>
            array (
                'id' => 150719,
                'nombre' => 'San Juan de Iris',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 =>
            array (
                'id' => 150720,
                'nombre' => 'San Juan de Tantaranche',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 =>
            array (
                'id' => 150721,
                'nombre' => 'San Lorenzo de Quinti',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 =>
            array (
                'id' => 150722,
                'nombre' => 'San Mateo',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 =>
            array (
                'id' => 150723,
                'nombre' => 'San Mateo de Otao',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 =>
            array (
                'id' => 150724,
                'nombre' => 'San Pedro de Casta',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 =>
            array (
                'id' => 150725,
                'nombre' => 'San Pedro de Huancayre',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 =>
            array (
                'id' => 150726,
                'nombre' => 'Sangallaya',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 =>
            array (
                'id' => 150727,
                'nombre' => 'Santa Cruz de Cocachacra',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 =>
            array (
                'id' => 150728,
                'nombre' => 'Santa Eulalia',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 =>
            array (
                'id' => 150729,
                'nombre' => 'Santiago de Anchucaya',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 =>
            array (
                'id' => 150730,
                'nombre' => 'Santiago de Tuna',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 =>
            array (
                'id' => 150731,
                'nombre' => 'Santo Domingo de Los Olleros',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 =>
            array (
                'id' => 150732,
                'nombre' => 'Surco',
                'region_id' => 150000,
                'provincia_id' => 150700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 =>
            array (
                'id' => 150801,
                'nombre' => 'Huacho',
                'region_id' => 150000,
                'provincia_id' => 150800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 =>
            array (
                'id' => 150802,
                'nombre' => 'Ambar',
                'region_id' => 150000,
                'provincia_id' => 150800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 =>
            array (
                'id' => 150803,
                'nombre' => 'Caleta de Carquin',
                'region_id' => 150000,
                'provincia_id' => 150800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 =>
            array (
                'id' => 150804,
                'nombre' => 'Checras',
                'region_id' => 150000,
                'provincia_id' => 150800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 =>
            array (
                'id' => 150805,
                'nombre' => 'Hualmay',
                'region_id' => 150000,
                'provincia_id' => 150800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 =>
            array (
                'id' => 150806,
                'nombre' => 'Huaura',
                'region_id' => 150000,
                'provincia_id' => 150800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 =>
            array (
                'id' => 150807,
                'nombre' => 'Leoncio Prado',
                'region_id' => 150000,
                'provincia_id' => 150800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 =>
            array (
                'id' => 150808,
                'nombre' => 'Paccho',
                'region_id' => 150000,
                'provincia_id' => 150800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 =>
            array (
                'id' => 150809,
                'nombre' => 'Santa Leonor',
                'region_id' => 150000,
                'provincia_id' => 150800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 =>
            array (
                'id' => 150810,
                'nombre' => 'Santa María',
                'region_id' => 150000,
                'provincia_id' => 150800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 =>
            array (
                'id' => 150811,
                'nombre' => 'Sayan',
                'region_id' => 150000,
                'provincia_id' => 150800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 =>
            array (
                'id' => 150812,
                'nombre' => 'Vegueta',
                'region_id' => 150000,
                'provincia_id' => 150800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 =>
            array (
                'id' => 150901,
                'nombre' => 'Oyon',
                'region_id' => 150000,
                'provincia_id' => 150900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 =>
            array (
                'id' => 150902,
                'nombre' => 'Andajes',
                'region_id' => 150000,
                'provincia_id' => 150900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 =>
            array (
                'id' => 150903,
                'nombre' => 'Caujul',
                'region_id' => 150000,
                'provincia_id' => 150900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 =>
            array (
                'id' => 150904,
                'nombre' => 'Cochamarca',
                'region_id' => 150000,
                'provincia_id' => 150900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 =>
            array (
                'id' => 150905,
                'nombre' => 'Navan',
                'region_id' => 150000,
                'provincia_id' => 150900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 =>
            array (
                'id' => 150906,
                'nombre' => 'Pachangara',
                'region_id' => 150000,
                'provincia_id' => 150900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 =>
            array (
                'id' => 151001,
                'nombre' => 'Yauyos',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 =>
            array (
                'id' => 151002,
                'nombre' => 'Alis',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 =>
            array (
                'id' => 151003,
                'nombre' => 'Allauca',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 =>
            array (
                'id' => 151004,
                'nombre' => 'Ayaviri',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 =>
            array (
                'id' => 151005,
                'nombre' => 'Azángaro',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 =>
            array (
                'id' => 151006,
                'nombre' => 'Cacra',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 =>
            array (
                'id' => 151007,
                'nombre' => 'Carania',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 =>
            array (
                'id' => 151008,
                'nombre' => 'Catahuasi',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 =>
            array (
                'id' => 151009,
                'nombre' => 'Chocos',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 =>
            array (
                'id' => 151010,
                'nombre' => 'Cochas',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 =>
            array (
                'id' => 151011,
                'nombre' => 'Colonia',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 =>
            array (
                'id' => 151012,
                'nombre' => 'Hongos',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 =>
            array (
                'id' => 151013,
                'nombre' => 'Huampara',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 =>
            array (
                'id' => 151014,
                'nombre' => 'Huancaya',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 =>
            array (
                'id' => 151015,
                'nombre' => 'Huangascar',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 =>
            array (
                'id' => 151016,
                'nombre' => 'Huantan',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 =>
            array (
                'id' => 151017,
                'nombre' => 'Huañec',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 =>
            array (
                'id' => 151018,
                'nombre' => 'Laraos',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 =>
            array (
                'id' => 151019,
                'nombre' => 'Lincha',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 =>
            array (
                'id' => 151020,
                'nombre' => 'Madean',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 =>
            array (
                'id' => 151021,
                'nombre' => 'Miraflores',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 =>
            array (
                'id' => 151022,
                'nombre' => 'Omas',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 =>
            array (
                'id' => 151023,
                'nombre' => 'Putinza',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 =>
            array (
                'id' => 151024,
                'nombre' => 'Quinches',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 =>
            array (
                'id' => 151025,
                'nombre' => 'Quinocay',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 =>
            array (
                'id' => 151026,
                'nombre' => 'San Joaquín',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 =>
            array (
                'id' => 151027,
                'nombre' => 'San Pedro de Pilas',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 =>
            array (
                'id' => 151028,
                'nombre' => 'Tanta',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 =>
            array (
                'id' => 151029,
                'nombre' => 'Tauripampa',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 =>
            array (
                'id' => 151030,
                'nombre' => 'Tomas',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 =>
            array (
                'id' => 151031,
                'nombre' => 'Tupe',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 =>
            array (
                'id' => 151032,
                'nombre' => 'Viñac',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 =>
            array (
                'id' => 151033,
                'nombre' => 'Vitis',
                'region_id' => 150000,
                'provincia_id' => 151000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 =>
            array (
                'id' => 160101,
                'nombre' => 'Iquitos',
                'region_id' => 160000,
                'provincia_id' => 160100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 =>
            array (
                'id' => 160102,
                'nombre' => 'Alto Nanay',
                'region_id' => 160000,
                'provincia_id' => 160100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 =>
            array (
                'id' => 160103,
                'nombre' => 'Fernando Lores',
                'region_id' => 160000,
                'provincia_id' => 160100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 =>
            array (
                'id' => 160104,
                'nombre' => 'Indiana',
                'region_id' => 160000,
                'provincia_id' => 160100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 =>
            array (
                'id' => 160105,
                'nombre' => 'Las Amazonas',
                'region_id' => 160000,
                'provincia_id' => 160100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 =>
            array (
                'id' => 160106,
                'nombre' => 'Mazan',
                'region_id' => 160000,
                'provincia_id' => 160100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 =>
            array (
                'id' => 160107,
                'nombre' => 'Napo',
                'region_id' => 160000,
                'provincia_id' => 160100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 =>
            array (
                'id' => 160108,
                'nombre' => 'Punchana',
                'region_id' => 160000,
                'provincia_id' => 160100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 =>
            array (
                'id' => 160110,
                'nombre' => 'Torres Causana',
                'region_id' => 160000,
                'provincia_id' => 160100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 =>
            array (
                'id' => 160112,
                'nombre' => 'Belén',
                'region_id' => 160000,
                'provincia_id' => 160100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 =>
            array (
                'id' => 160113,
                'nombre' => 'San Juan Bautista',
                'region_id' => 160000,
                'provincia_id' => 160100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 =>
            array (
                'id' => 160201,
                'nombre' => 'Yurimaguas',
                'region_id' => 160000,
                'provincia_id' => 160200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 =>
            array (
                'id' => 160202,
                'nombre' => 'Balsapuerto',
                'region_id' => 160000,
                'provincia_id' => 160200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 =>
            array (
                'id' => 160205,
                'nombre' => 'Jeberos',
                'region_id' => 160000,
                'provincia_id' => 160200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 =>
            array (
                'id' => 160206,
                'nombre' => 'Lagunas',
                'region_id' => 160000,
                'provincia_id' => 160200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 =>
            array (
                'id' => 160210,
                'nombre' => 'Santa Cruz',
                'region_id' => 160000,
                'provincia_id' => 160200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 =>
            array (
                'id' => 160211,
                'nombre' => 'Teniente Cesar López Rojas',
                'region_id' => 160000,
                'provincia_id' => 160200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 =>
            array (
                'id' => 160301,
                'nombre' => 'Nauta',
                'region_id' => 160000,
                'provincia_id' => 160300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 =>
            array (
                'id' => 160302,
                'nombre' => 'Parinari',
                'region_id' => 160000,
                'provincia_id' => 160300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 =>
            array (
                'id' => 160303,
                'nombre' => 'Tigre',
                'region_id' => 160000,
                'provincia_id' => 160300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 =>
            array (
                'id' => 160304,
                'nombre' => 'Trompeteros',
                'region_id' => 160000,
                'provincia_id' => 160300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 =>
            array (
                'id' => 160305,
                'nombre' => 'Urarinas',
                'region_id' => 160000,
                'provincia_id' => 160300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 =>
            array (
                'id' => 160401,
                'nombre' => 'Ramón Castilla',
                'region_id' => 160000,
                'provincia_id' => 160400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 =>
            array (
                'id' => 160402,
                'nombre' => 'Pebas',
                'region_id' => 160000,
                'provincia_id' => 160400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 =>
            array (
                'id' => 160403,
                'nombre' => 'Yavari',
                'region_id' => 160000,
                'provincia_id' => 160400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 =>
            array (
                'id' => 160404,
                'nombre' => 'San Pablo',
                'region_id' => 160000,
                'provincia_id' => 160400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 =>
            array (
                'id' => 160501,
                'nombre' => 'Requena',
                'region_id' => 160000,
                'provincia_id' => 160500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 =>
            array (
                'id' => 160502,
                'nombre' => 'Alto Tapiche',
                'region_id' => 160000,
                'provincia_id' => 160500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 =>
            array (
                'id' => 160503,
                'nombre' => 'Capelo',
                'region_id' => 160000,
                'provincia_id' => 160500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 =>
            array (
                'id' => 160504,
                'nombre' => 'Emilio San Martín',
                'region_id' => 160000,
                'provincia_id' => 160500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 =>
            array (
                'id' => 160505,
                'nombre' => 'Maquia',
                'region_id' => 160000,
                'provincia_id' => 160500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 =>
            array (
                'id' => 160506,
                'nombre' => 'Puinahua',
                'region_id' => 160000,
                'provincia_id' => 160500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 =>
            array (
                'id' => 160507,
                'nombre' => 'Saquena',
                'region_id' => 160000,
                'provincia_id' => 160500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 =>
            array (
                'id' => 160508,
                'nombre' => 'Soplin',
                'region_id' => 160000,
                'provincia_id' => 160500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 =>
            array (
                'id' => 160509,
                'nombre' => 'Tapiche',
                'region_id' => 160000,
                'provincia_id' => 160500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 =>
            array (
                'id' => 160510,
                'nombre' => 'Jenaro Herrera',
                'region_id' => 160000,
                'provincia_id' => 160500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 =>
            array (
                'id' => 160511,
                'nombre' => 'Yaquerana',
                'region_id' => 160000,
                'provincia_id' => 160500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 =>
            array (
                'id' => 160601,
                'nombre' => 'Contamana',
                'region_id' => 160000,
                'provincia_id' => 160600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 =>
            array (
                'id' => 160602,
                'nombre' => 'Inahuaya',
                'region_id' => 160000,
                'provincia_id' => 160600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 =>
            array (
                'id' => 160603,
                'nombre' => 'Padre Márquez',
                'region_id' => 160000,
                'provincia_id' => 160600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 =>
            array (
                'id' => 160604,
                'nombre' => 'Pampa Hermosa',
                'region_id' => 160000,
                'provincia_id' => 160600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 =>
            array (
                'id' => 160605,
                'nombre' => 'Sarayacu',
                'region_id' => 160000,
                'provincia_id' => 160600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 =>
            array (
                'id' => 160606,
                'nombre' => 'Vargas Guerra',
                'region_id' => 160000,
                'provincia_id' => 160600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 =>
            array (
                'id' => 160701,
                'nombre' => 'Barranca',
                'region_id' => 160000,
                'provincia_id' => 160700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 =>
            array (
                'id' => 160702,
                'nombre' => 'Cahuapanas',
                'region_id' => 160000,
                'provincia_id' => 160700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 =>
            array (
                'id' => 160703,
                'nombre' => 'Manseriche',
                'region_id' => 160000,
                'provincia_id' => 160700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 =>
            array (
                'id' => 160704,
                'nombre' => 'Morona',
                'region_id' => 160000,
                'provincia_id' => 160700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 =>
            array (
                'id' => 160705,
                'nombre' => 'Pastaza',
                'region_id' => 160000,
                'provincia_id' => 160700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 =>
            array (
                'id' => 160706,
                'nombre' => 'Andoas',
                'region_id' => 160000,
                'provincia_id' => 160700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('distritos')->insert(array (
            0 =>
            array (
                'id' => 160801,
                'nombre' => 'Putumayo',
                'region_id' => 160000,
                'provincia_id' => 160800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 160802,
                'nombre' => 'Rosa Panduro',
                'region_id' => 160000,
                'provincia_id' => 160800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 160803,
                'nombre' => 'Teniente Manuel Clavero',
                'region_id' => 160000,
                'provincia_id' => 160800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 160804,
                'nombre' => 'Yaguas',
                'region_id' => 160000,
                'provincia_id' => 160800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 170101,
                'nombre' => 'Tambopata',
                'region_id' => 170000,
                'provincia_id' => 170100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 170102,
                'nombre' => 'Inambari',
                'region_id' => 170000,
                'provincia_id' => 170100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array (
                'id' => 170103,
                'nombre' => 'Las Piedras',
                'region_id' => 170000,
                'provincia_id' => 170100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array (
                'id' => 170104,
                'nombre' => 'Laberinto',
                'region_id' => 170000,
                'provincia_id' => 170100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array (
                'id' => 170201,
                'nombre' => 'Manu',
                'region_id' => 170000,
                'provincia_id' => 170200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array (
                'id' => 170202,
                'nombre' => 'Fitzcarrald',
                'region_id' => 170000,
                'provincia_id' => 170200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 =>
            array (
                'id' => 170203,
                'nombre' => 'Madre de Dios',
                'region_id' => 170000,
                'provincia_id' => 170200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 =>
            array (
                'id' => 170204,
                'nombre' => 'Huepetuhe',
                'region_id' => 170000,
                'provincia_id' => 170200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 =>
            array (
                'id' => 170301,
                'nombre' => 'Iñapari',
                'region_id' => 170000,
                'provincia_id' => 170300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 =>
            array (
                'id' => 170302,
                'nombre' => 'Iberia',
                'region_id' => 170000,
                'provincia_id' => 170300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 =>
            array (
                'id' => 170303,
                'nombre' => 'Tahuamanu',
                'region_id' => 170000,
                'provincia_id' => 170300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 =>
            array (
                'id' => 180101,
                'nombre' => 'Moquegua',
                'region_id' => 180000,
                'provincia_id' => 180100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 =>
            array (
                'id' => 180102,
                'nombre' => 'Carumas',
                'region_id' => 180000,
                'provincia_id' => 180100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 =>
            array (
                'id' => 180103,
                'nombre' => 'Cuchumbaya',
                'region_id' => 180000,
                'provincia_id' => 180100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 =>
            array (
                'id' => 180104,
                'nombre' => 'Samegua',
                'region_id' => 180000,
                'provincia_id' => 180100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 =>
            array (
                'id' => 180105,
                'nombre' => 'San Cristóbal',
                'region_id' => 180000,
                'provincia_id' => 180100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 =>
            array (
                'id' => 180106,
                'nombre' => 'Torata',
                'region_id' => 180000,
                'provincia_id' => 180100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 =>
            array (
                'id' => 180201,
                'nombre' => 'Omate',
                'region_id' => 180000,
                'provincia_id' => 180200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 =>
            array (
                'id' => 180202,
                'nombre' => 'Chojata',
                'region_id' => 180000,
                'provincia_id' => 180200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 =>
            array (
                'id' => 180203,
                'nombre' => 'Coalaque',
                'region_id' => 180000,
                'provincia_id' => 180200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 =>
            array (
                'id' => 180204,
                'nombre' => 'Ichuña',
                'region_id' => 180000,
                'provincia_id' => 180200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 =>
            array (
                'id' => 180205,
                'nombre' => 'La Capilla',
                'region_id' => 180000,
                'provincia_id' => 180200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 =>
            array (
                'id' => 180206,
                'nombre' => 'Lloque',
                'region_id' => 180000,
                'provincia_id' => 180200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 =>
            array (
                'id' => 180207,
                'nombre' => 'Matalaque',
                'region_id' => 180000,
                'provincia_id' => 180200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 =>
            array (
                'id' => 180208,
                'nombre' => 'Puquina',
                'region_id' => 180000,
                'provincia_id' => 180200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 =>
            array (
                'id' => 180209,
                'nombre' => 'Quinistaquillas',
                'region_id' => 180000,
                'provincia_id' => 180200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 =>
            array (
                'id' => 180210,
                'nombre' => 'Ubinas',
                'region_id' => 180000,
                'provincia_id' => 180200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 =>
            array (
                'id' => 180211,
                'nombre' => 'Yunga',
                'region_id' => 180000,
                'provincia_id' => 180200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 =>
            array (
                'id' => 180301,
                'nombre' => 'Ilo',
                'region_id' => 180000,
                'provincia_id' => 180300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 =>
            array (
                'id' => 180302,
                'nombre' => 'El Algarrobal',
                'region_id' => 180000,
                'provincia_id' => 180300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 =>
            array (
                'id' => 180303,
                'nombre' => 'Pacocha',
                'region_id' => 180000,
                'provincia_id' => 180300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 =>
            array (
                'id' => 190101,
                'nombre' => 'Chaupimarca',
                'region_id' => 190000,
                'provincia_id' => 190100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 =>
            array (
                'id' => 190102,
                'nombre' => 'Huachon',
                'region_id' => 190000,
                'provincia_id' => 190100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 =>
            array (
                'id' => 190103,
                'nombre' => 'Huariaca',
                'region_id' => 190000,
                'provincia_id' => 190100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 =>
            array (
                'id' => 190104,
                'nombre' => 'Huayllay',
                'region_id' => 190000,
                'provincia_id' => 190100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 =>
            array (
                'id' => 190105,
                'nombre' => 'Ninacaca',
                'region_id' => 190000,
                'provincia_id' => 190100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 =>
            array (
                'id' => 190106,
                'nombre' => 'Pallanchacra',
                'region_id' => 190000,
                'provincia_id' => 190100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 =>
            array (
                'id' => 190107,
                'nombre' => 'Paucartambo',
                'region_id' => 190000,
                'provincia_id' => 190100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 =>
            array (
                'id' => 190108,
                'nombre' => 'San Francisco de Asís de Yarusyacan',
                'region_id' => 190000,
                'provincia_id' => 190100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 =>
            array (
                'id' => 190109,
                'nombre' => 'Simon Bolívar',
                'region_id' => 190000,
                'provincia_id' => 190100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 =>
            array (
                'id' => 190110,
                'nombre' => 'Ticlacayan',
                'region_id' => 190000,
                'provincia_id' => 190100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 =>
            array (
                'id' => 190111,
                'nombre' => 'Tinyahuarco',
                'region_id' => 190000,
                'provincia_id' => 190100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 =>
            array (
                'id' => 190112,
                'nombre' => 'Vicco',
                'region_id' => 190000,
                'provincia_id' => 190100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 =>
            array (
                'id' => 190113,
                'nombre' => 'Yanacancha',
                'region_id' => 190000,
                'provincia_id' => 190100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 =>
            array (
                'id' => 190201,
                'nombre' => 'Yanahuanca',
                'region_id' => 190000,
                'provincia_id' => 190200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 =>
            array (
                'id' => 190202,
                'nombre' => 'Chacayan',
                'region_id' => 190000,
                'provincia_id' => 190200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 =>
            array (
                'id' => 190203,
                'nombre' => 'Goyllarisquizga',
                'region_id' => 190000,
                'provincia_id' => 190200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 =>
            array (
                'id' => 190204,
                'nombre' => 'Paucar',
                'region_id' => 190000,
                'provincia_id' => 190200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 =>
            array (
                'id' => 190205,
                'nombre' => 'San Pedro de Pillao',
                'region_id' => 190000,
                'provincia_id' => 190200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 =>
            array (
                'id' => 190206,
                'nombre' => 'Santa Ana de Tusi',
                'region_id' => 190000,
                'provincia_id' => 190200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 =>
            array (
                'id' => 190207,
                'nombre' => 'Tapuc',
                'region_id' => 190000,
                'provincia_id' => 190200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 =>
            array (
                'id' => 190208,
                'nombre' => 'Vilcabamba',
                'region_id' => 190000,
                'provincia_id' => 190200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 =>
            array (
                'id' => 190301,
                'nombre' => 'Oxapampa',
                'region_id' => 190000,
                'provincia_id' => 190300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 =>
            array (
                'id' => 190302,
                'nombre' => 'Chontabamba',
                'region_id' => 190000,
                'provincia_id' => 190300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 =>
            array (
                'id' => 190303,
                'nombre' => 'Huancabamba',
                'region_id' => 190000,
                'provincia_id' => 190300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 =>
            array (
                'id' => 190304,
                'nombre' => 'Palcazu',
                'region_id' => 190000,
                'provincia_id' => 190300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 =>
            array (
                'id' => 190305,
                'nombre' => 'Pozuzo',
                'region_id' => 190000,
                'provincia_id' => 190300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 =>
            array (
                'id' => 190306,
                'nombre' => 'Puerto Bermúdez',
                'region_id' => 190000,
                'provincia_id' => 190300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 =>
            array (
                'id' => 190307,
                'nombre' => 'Villa Rica',
                'region_id' => 190000,
                'provincia_id' => 190300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 =>
            array (
                'id' => 190308,
                'nombre' => 'Constitución',
                'region_id' => 190000,
                'provincia_id' => 190300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 =>
            array (
                'id' => 200101,
                'nombre' => 'Piura',
                'region_id' => 200000,
                'provincia_id' => 200100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 =>
            array (
                'id' => 200104,
                'nombre' => 'Castilla',
                'region_id' => 200000,
                'provincia_id' => 200100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 =>
            array (
                'id' => 200105,
                'nombre' => 'Catacaos',
                'region_id' => 200000,
                'provincia_id' => 200100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 =>
            array (
                'id' => 200107,
                'nombre' => 'Cura Mori',
                'region_id' => 200000,
                'provincia_id' => 200100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 =>
            array (
                'id' => 200108,
                'nombre' => 'El Tallan',
                'region_id' => 200000,
                'provincia_id' => 200100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 =>
            array (
                'id' => 200109,
                'nombre' => 'La Arena',
                'region_id' => 200000,
                'provincia_id' => 200100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 =>
            array (
                'id' => 200110,
                'nombre' => 'La Unión',
                'region_id' => 200000,
                'provincia_id' => 200100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 =>
            array (
                'id' => 200111,
                'nombre' => 'Las Lomas',
                'region_id' => 200000,
                'provincia_id' => 200100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 =>
            array (
                'id' => 200114,
                'nombre' => 'Tambo Grande',
                'region_id' => 200000,
                'provincia_id' => 200100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 =>
            array (
                'id' => 200115,
                'nombre' => 'Veintiseis de Octubre',
                'region_id' => 200000,
                'provincia_id' => 200100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 =>
            array (
                'id' => 200201,
                'nombre' => 'Ayabaca',
                'region_id' => 200000,
                'provincia_id' => 200200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 =>
            array (
                'id' => 200202,
                'nombre' => 'Frias',
                'region_id' => 200000,
                'provincia_id' => 200200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 =>
            array (
                'id' => 200203,
                'nombre' => 'Jilili',
                'region_id' => 200000,
                'provincia_id' => 200200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 =>
            array (
                'id' => 200204,
                'nombre' => 'Lagunas',
                'region_id' => 200000,
                'provincia_id' => 200200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 =>
            array (
                'id' => 200205,
                'nombre' => 'Montero',
                'region_id' => 200000,
                'provincia_id' => 200200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 =>
            array (
                'id' => 200206,
                'nombre' => 'Pacaipampa',
                'region_id' => 200000,
                'provincia_id' => 200200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 =>
            array (
                'id' => 200207,
                'nombre' => 'Paimas',
                'region_id' => 200000,
                'provincia_id' => 200200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 =>
            array (
                'id' => 200208,
                'nombre' => 'Sapillica',
                'region_id' => 200000,
                'provincia_id' => 200200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 =>
            array (
                'id' => 200209,
                'nombre' => 'Sicchez',
                'region_id' => 200000,
                'provincia_id' => 200200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 =>
            array (
                'id' => 200210,
                'nombre' => 'Suyo',
                'region_id' => 200000,
                'provincia_id' => 200200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 =>
            array (
                'id' => 200301,
                'nombre' => 'Huancabamba',
                'region_id' => 200000,
                'provincia_id' => 200300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 =>
            array (
                'id' => 200302,
                'nombre' => 'Canchaque',
                'region_id' => 200000,
                'provincia_id' => 200300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 =>
            array (
                'id' => 200303,
                'nombre' => 'El Carmen de la Frontera',
                'region_id' => 200000,
                'provincia_id' => 200300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 =>
            array (
                'id' => 200304,
                'nombre' => 'Huarmaca',
                'region_id' => 200000,
                'provincia_id' => 200300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 =>
            array (
                'id' => 200305,
                'nombre' => 'Lalaquiz',
                'region_id' => 200000,
                'provincia_id' => 200300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 =>
            array (
                'id' => 200306,
                'nombre' => 'San Miguel de El Faique',
                'region_id' => 200000,
                'provincia_id' => 200300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 =>
            array (
                'id' => 200307,
                'nombre' => 'Sondor',
                'region_id' => 200000,
                'provincia_id' => 200300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 =>
            array (
                'id' => 200308,
                'nombre' => 'Sondorillo',
                'region_id' => 200000,
                'provincia_id' => 200300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 =>
            array (
                'id' => 200401,
                'nombre' => 'Chulucanas',
                'region_id' => 200000,
                'provincia_id' => 200400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 =>
            array (
                'id' => 200402,
                'nombre' => 'Buenos Aires',
                'region_id' => 200000,
                'provincia_id' => 200400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 =>
            array (
                'id' => 200403,
                'nombre' => 'Chalaco',
                'region_id' => 200000,
                'provincia_id' => 200400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 =>
            array (
                'id' => 200404,
                'nombre' => 'La Matanza',
                'region_id' => 200000,
                'provincia_id' => 200400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 =>
            array (
                'id' => 200405,
                'nombre' => 'Morropon',
                'region_id' => 200000,
                'provincia_id' => 200400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 =>
            array (
                'id' => 200406,
                'nombre' => 'Salitral',
                'region_id' => 200000,
                'provincia_id' => 200400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 =>
            array (
                'id' => 200407,
                'nombre' => 'San Juan de Bigote',
                'region_id' => 200000,
                'provincia_id' => 200400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 =>
            array (
                'id' => 200408,
                'nombre' => 'Santa Catalina de Mossa',
                'region_id' => 200000,
                'provincia_id' => 200400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 =>
            array (
                'id' => 200409,
                'nombre' => 'Santo Domingo',
                'region_id' => 200000,
                'provincia_id' => 200400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 =>
            array (
                'id' => 200410,
                'nombre' => 'Yamango',
                'region_id' => 200000,
                'provincia_id' => 200400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 =>
            array (
                'id' => 200501,
                'nombre' => 'Paita',
                'region_id' => 200000,
                'provincia_id' => 200500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 =>
            array (
                'id' => 200502,
                'nombre' => 'Amotape',
                'region_id' => 200000,
                'provincia_id' => 200500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 =>
            array (
                'id' => 200503,
                'nombre' => 'Arenal',
                'region_id' => 200000,
                'provincia_id' => 200500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 =>
            array (
                'id' => 200504,
                'nombre' => 'Colan',
                'region_id' => 200000,
                'provincia_id' => 200500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 =>
            array (
                'id' => 200505,
                'nombre' => 'La Huaca',
                'region_id' => 200000,
                'provincia_id' => 200500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 =>
            array (
                'id' => 200506,
                'nombre' => 'Tamarindo',
                'region_id' => 200000,
                'provincia_id' => 200500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 =>
            array (
                'id' => 200507,
                'nombre' => 'Vichayal',
                'region_id' => 200000,
                'provincia_id' => 200500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 =>
            array (
                'id' => 200601,
                'nombre' => 'Sullana',
                'region_id' => 200000,
                'provincia_id' => 200600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 =>
            array (
                'id' => 200602,
                'nombre' => 'Bellavista',
                'region_id' => 200000,
                'provincia_id' => 200600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 =>
            array (
                'id' => 200603,
                'nombre' => 'Ignacio Escudero',
                'region_id' => 200000,
                'provincia_id' => 200600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 =>
            array (
                'id' => 200604,
                'nombre' => 'Lancones',
                'region_id' => 200000,
                'provincia_id' => 200600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 =>
            array (
                'id' => 200605,
                'nombre' => 'Marcavelica',
                'region_id' => 200000,
                'provincia_id' => 200600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 =>
            array (
                'id' => 200606,
                'nombre' => 'Miguel Checa',
                'region_id' => 200000,
                'provincia_id' => 200600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 =>
            array (
                'id' => 200607,
                'nombre' => 'Querecotillo',
                'region_id' => 200000,
                'provincia_id' => 200600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 =>
            array (
                'id' => 200608,
                'nombre' => 'Salitral',
                'region_id' => 200000,
                'provincia_id' => 200600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 =>
            array (
                'id' => 200701,
                'nombre' => 'Pariñas',
                'region_id' => 200000,
                'provincia_id' => 200700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 =>
            array (
                'id' => 200702,
                'nombre' => 'El Alto',
                'region_id' => 200000,
                'provincia_id' => 200700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 =>
            array (
                'id' => 200703,
                'nombre' => 'La Brea',
                'region_id' => 200000,
                'provincia_id' => 200700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 =>
            array (
                'id' => 200704,
                'nombre' => 'Lobitos',
                'region_id' => 200000,
                'provincia_id' => 200700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 =>
            array (
                'id' => 200705,
                'nombre' => 'Los Organos',
                'region_id' => 200000,
                'provincia_id' => 200700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 =>
            array (
                'id' => 200706,
                'nombre' => 'Mancora',
                'region_id' => 200000,
                'provincia_id' => 200700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 =>
            array (
                'id' => 200801,
                'nombre' => 'Sechura',
                'region_id' => 200000,
                'provincia_id' => 200800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 =>
            array (
                'id' => 200802,
                'nombre' => 'Bellavista de la Unión',
                'region_id' => 200000,
                'provincia_id' => 200800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 =>
            array (
                'id' => 200803,
                'nombre' => 'Bernal',
                'region_id' => 200000,
                'provincia_id' => 200800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 =>
            array (
                'id' => 200804,
                'nombre' => 'Cristo Nos Valga',
                'region_id' => 200000,
                'provincia_id' => 200800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 =>
            array (
                'id' => 200805,
                'nombre' => 'Vice',
                'region_id' => 200000,
                'provincia_id' => 200800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 =>
            array (
                'id' => 200806,
                'nombre' => 'Rinconada Llicuar',
                'region_id' => 200000,
                'provincia_id' => 200800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 =>
            array (
                'id' => 210101,
                'nombre' => 'Puno',
                'region_id' => 210000,
                'provincia_id' => 210100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 =>
            array (
                'id' => 210102,
                'nombre' => 'Acora',
                'region_id' => 210000,
                'provincia_id' => 210100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 =>
            array (
                'id' => 210103,
                'nombre' => 'Amantani',
                'region_id' => 210000,
                'provincia_id' => 210100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 =>
            array (
                'id' => 210104,
                'nombre' => 'Atuncolla',
                'region_id' => 210000,
                'provincia_id' => 210100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 =>
            array (
                'id' => 210105,
                'nombre' => 'Capachica',
                'region_id' => 210000,
                'provincia_id' => 210100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 =>
            array (
                'id' => 210106,
                'nombre' => 'Chucuito',
                'region_id' => 210000,
                'provincia_id' => 210100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 =>
            array (
                'id' => 210107,
                'nombre' => 'Coata',
                'region_id' => 210000,
                'provincia_id' => 210100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 =>
            array (
                'id' => 210108,
                'nombre' => 'Huata',
                'region_id' => 210000,
                'provincia_id' => 210100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 =>
            array (
                'id' => 210109,
                'nombre' => 'Mañazo',
                'region_id' => 210000,
                'provincia_id' => 210100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 =>
            array (
                'id' => 210110,
                'nombre' => 'Paucarcolla',
                'region_id' => 210000,
                'provincia_id' => 210100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 =>
            array (
                'id' => 210111,
                'nombre' => 'Pichacani',
                'region_id' => 210000,
                'provincia_id' => 210100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 =>
            array (
                'id' => 210112,
                'nombre' => 'Plateria',
                'region_id' => 210000,
                'provincia_id' => 210100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 =>
            array (
                'id' => 210113,
                'nombre' => 'San Antonio',
                'region_id' => 210000,
                'provincia_id' => 210100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 =>
            array (
                'id' => 210114,
                'nombre' => 'Tiquillaca',
                'region_id' => 210000,
                'provincia_id' => 210100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 =>
            array (
                'id' => 210115,
                'nombre' => 'Vilque',
                'region_id' => 210000,
                'provincia_id' => 210100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 =>
            array (
                'id' => 210201,
                'nombre' => 'Azángaro',
                'region_id' => 210000,
                'provincia_id' => 210200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 =>
            array (
                'id' => 210202,
                'nombre' => 'Achaya',
                'region_id' => 210000,
                'provincia_id' => 210200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 =>
            array (
                'id' => 210203,
                'nombre' => 'Arapa',
                'region_id' => 210000,
                'provincia_id' => 210200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 =>
            array (
                'id' => 210204,
                'nombre' => 'Asillo',
                'region_id' => 210000,
                'provincia_id' => 210200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 =>
            array (
                'id' => 210205,
                'nombre' => 'Caminaca',
                'region_id' => 210000,
                'provincia_id' => 210200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 =>
            array (
                'id' => 210206,
                'nombre' => 'Chupa',
                'region_id' => 210000,
                'provincia_id' => 210200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 =>
            array (
                'id' => 210207,
                'nombre' => 'José Domingo Choquehuanca',
                'region_id' => 210000,
                'provincia_id' => 210200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 =>
            array (
                'id' => 210208,
                'nombre' => 'Muñani',
                'region_id' => 210000,
                'provincia_id' => 210200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 =>
            array (
                'id' => 210209,
                'nombre' => 'Potoni',
                'region_id' => 210000,
                'provincia_id' => 210200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 =>
            array (
                'id' => 210210,
                'nombre' => 'Saman',
                'region_id' => 210000,
                'provincia_id' => 210200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 =>
            array (
                'id' => 210211,
                'nombre' => 'San Anton',
                'region_id' => 210000,
                'provincia_id' => 210200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 =>
            array (
                'id' => 210212,
                'nombre' => 'San José',
                'region_id' => 210000,
                'provincia_id' => 210200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 =>
            array (
                'id' => 210213,
                'nombre' => 'San Juan de Salinas',
                'region_id' => 210000,
                'provincia_id' => 210200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 =>
            array (
                'id' => 210214,
                'nombre' => 'Santiago de Pupuja',
                'region_id' => 210000,
                'provincia_id' => 210200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 =>
            array (
                'id' => 210215,
                'nombre' => 'Tirapata',
                'region_id' => 210000,
                'provincia_id' => 210200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 =>
            array (
                'id' => 210301,
                'nombre' => 'Macusani',
                'region_id' => 210000,
                'provincia_id' => 210300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 =>
            array (
                'id' => 210302,
                'nombre' => 'Ajoyani',
                'region_id' => 210000,
                'provincia_id' => 210300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 =>
            array (
                'id' => 210303,
                'nombre' => 'Ayapata',
                'region_id' => 210000,
                'provincia_id' => 210300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 =>
            array (
                'id' => 210304,
                'nombre' => 'Coasa',
                'region_id' => 210000,
                'provincia_id' => 210300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 =>
            array (
                'id' => 210305,
                'nombre' => 'Corani',
                'region_id' => 210000,
                'provincia_id' => 210300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 =>
            array (
                'id' => 210306,
                'nombre' => 'Crucero',
                'region_id' => 210000,
                'provincia_id' => 210300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 =>
            array (
                'id' => 210307,
                'nombre' => 'Ituata',
                'region_id' => 210000,
                'provincia_id' => 210300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 =>
            array (
                'id' => 210308,
                'nombre' => 'Ollachea',
                'region_id' => 210000,
                'provincia_id' => 210300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 =>
            array (
                'id' => 210309,
                'nombre' => 'San Gaban',
                'region_id' => 210000,
                'provincia_id' => 210300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 =>
            array (
                'id' => 210310,
                'nombre' => 'Usicayos',
                'region_id' => 210000,
                'provincia_id' => 210300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 =>
            array (
                'id' => 210401,
                'nombre' => 'Juli',
                'region_id' => 210000,
                'provincia_id' => 210400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 =>
            array (
                'id' => 210402,
                'nombre' => 'Desaguadero',
                'region_id' => 210000,
                'provincia_id' => 210400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 =>
            array (
                'id' => 210403,
                'nombre' => 'Huacullani',
                'region_id' => 210000,
                'provincia_id' => 210400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 =>
            array (
                'id' => 210404,
                'nombre' => 'Kelluyo',
                'region_id' => 210000,
                'provincia_id' => 210400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 =>
            array (
                'id' => 210405,
                'nombre' => 'Pisacoma',
                'region_id' => 210000,
                'provincia_id' => 210400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 =>
            array (
                'id' => 210406,
                'nombre' => 'Pomata',
                'region_id' => 210000,
                'provincia_id' => 210400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 =>
            array (
                'id' => 210407,
                'nombre' => 'Zepita',
                'region_id' => 210000,
                'provincia_id' => 210400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 =>
            array (
                'id' => 210501,
                'nombre' => 'Ilave',
                'region_id' => 210000,
                'provincia_id' => 210500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 =>
            array (
                'id' => 210502,
                'nombre' => 'Capazo',
                'region_id' => 210000,
                'provincia_id' => 210500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 =>
            array (
                'id' => 210503,
                'nombre' => 'Pilcuyo',
                'region_id' => 210000,
                'provincia_id' => 210500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 =>
            array (
                'id' => 210504,
                'nombre' => 'Santa Rosa',
                'region_id' => 210000,
                'provincia_id' => 210500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 =>
            array (
                'id' => 210505,
                'nombre' => 'Conduriri',
                'region_id' => 210000,
                'provincia_id' => 210500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 =>
            array (
                'id' => 210601,
                'nombre' => 'Huancane',
                'region_id' => 210000,
                'provincia_id' => 210600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 =>
            array (
                'id' => 210602,
                'nombre' => 'Cojata',
                'region_id' => 210000,
                'provincia_id' => 210600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 =>
            array (
                'id' => 210603,
                'nombre' => 'Huatasani',
                'region_id' => 210000,
                'provincia_id' => 210600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 =>
            array (
                'id' => 210604,
                'nombre' => 'Inchupalla',
                'region_id' => 210000,
                'provincia_id' => 210600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 =>
            array (
                'id' => 210605,
                'nombre' => 'Pusi',
                'region_id' => 210000,
                'provincia_id' => 210600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 =>
            array (
                'id' => 210606,
                'nombre' => 'Rosaspata',
                'region_id' => 210000,
                'provincia_id' => 210600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 =>
            array (
                'id' => 210607,
                'nombre' => 'Taraco',
                'region_id' => 210000,
                'provincia_id' => 210600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 =>
            array (
                'id' => 210608,
                'nombre' => 'Vilque Chico',
                'region_id' => 210000,
                'provincia_id' => 210600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 =>
            array (
                'id' => 210701,
                'nombre' => 'Lampa',
                'region_id' => 210000,
                'provincia_id' => 210700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 =>
            array (
                'id' => 210702,
                'nombre' => 'Cabanilla',
                'region_id' => 210000,
                'provincia_id' => 210700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 =>
            array (
                'id' => 210703,
                'nombre' => 'Calapuja',
                'region_id' => 210000,
                'provincia_id' => 210700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 =>
            array (
                'id' => 210704,
                'nombre' => 'Nicasio',
                'region_id' => 210000,
                'provincia_id' => 210700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 =>
            array (
                'id' => 210705,
                'nombre' => 'Ocuviri',
                'region_id' => 210000,
                'provincia_id' => 210700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 =>
            array (
                'id' => 210706,
                'nombre' => 'Palca',
                'region_id' => 210000,
                'provincia_id' => 210700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 =>
            array (
                'id' => 210707,
                'nombre' => 'Paratia',
                'region_id' => 210000,
                'provincia_id' => 210700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 =>
            array (
                'id' => 210708,
                'nombre' => 'Pucara',
                'region_id' => 210000,
                'provincia_id' => 210700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 =>
            array (
                'id' => 210709,
                'nombre' => 'Santa Lucia',
                'region_id' => 210000,
                'provincia_id' => 210700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 =>
            array (
                'id' => 210710,
                'nombre' => 'Vilavila',
                'region_id' => 210000,
                'provincia_id' => 210700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 =>
            array (
                'id' => 210801,
                'nombre' => 'Ayaviri',
                'region_id' => 210000,
                'provincia_id' => 210800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 =>
            array (
                'id' => 210802,
                'nombre' => 'Antauta',
                'region_id' => 210000,
                'provincia_id' => 210800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 =>
            array (
                'id' => 210803,
                'nombre' => 'Cupi',
                'region_id' => 210000,
                'provincia_id' => 210800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 =>
            array (
                'id' => 210804,
                'nombre' => 'Llalli',
                'region_id' => 210000,
                'provincia_id' => 210800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 =>
            array (
                'id' => 210805,
                'nombre' => 'Macari',
                'region_id' => 210000,
                'provincia_id' => 210800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 =>
            array (
                'id' => 210806,
                'nombre' => 'Nuñoa',
                'region_id' => 210000,
                'provincia_id' => 210800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 =>
            array (
                'id' => 210807,
                'nombre' => 'Orurillo',
                'region_id' => 210000,
                'provincia_id' => 210800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 =>
            array (
                'id' => 210808,
                'nombre' => 'Santa Rosa',
                'region_id' => 210000,
                'provincia_id' => 210800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 =>
            array (
                'id' => 210809,
                'nombre' => 'Umachiri',
                'region_id' => 210000,
                'provincia_id' => 210800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 =>
            array (
                'id' => 210901,
                'nombre' => 'Moho',
                'region_id' => 210000,
                'provincia_id' => 210900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 =>
            array (
                'id' => 210902,
                'nombre' => 'Conima',
                'region_id' => 210000,
                'provincia_id' => 210900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 =>
            array (
                'id' => 210903,
                'nombre' => 'Huayrapata',
                'region_id' => 210000,
                'provincia_id' => 210900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 =>
            array (
                'id' => 210904,
                'nombre' => 'Tilali',
                'region_id' => 210000,
                'provincia_id' => 210900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 =>
            array (
                'id' => 211001,
                'nombre' => 'Putina',
                'region_id' => 210000,
                'provincia_id' => 211000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 =>
            array (
                'id' => 211002,
                'nombre' => 'Ananea',
                'region_id' => 210000,
                'provincia_id' => 211000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 =>
            array (
                'id' => 211003,
                'nombre' => 'Pedro Vilca Apaza',
                'region_id' => 210000,
                'provincia_id' => 211000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 =>
            array (
                'id' => 211004,
                'nombre' => 'Quilcapuncu',
                'region_id' => 210000,
                'provincia_id' => 211000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 =>
            array (
                'id' => 211005,
                'nombre' => 'Sina',
                'region_id' => 210000,
                'provincia_id' => 211000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 =>
            array (
                'id' => 211101,
                'nombre' => 'Juliaca',
                'region_id' => 210000,
                'provincia_id' => 211100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 =>
            array (
                'id' => 211102,
                'nombre' => 'Cabana',
                'region_id' => 210000,
                'provincia_id' => 211100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 =>
            array (
                'id' => 211103,
                'nombre' => 'Cabanillas',
                'region_id' => 210000,
                'provincia_id' => 211100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 =>
            array (
                'id' => 211104,
                'nombre' => 'Caracoto',
                'region_id' => 210000,
                'provincia_id' => 211100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 =>
            array (
                'id' => 211105,
                'nombre' => 'San Miguel',
                'region_id' => 210000,
                'provincia_id' => 211100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 =>
            array (
                'id' => 211201,
                'nombre' => 'Sandia',
                'region_id' => 210000,
                'provincia_id' => 211200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 =>
            array (
                'id' => 211202,
                'nombre' => 'Cuyocuyo',
                'region_id' => 210000,
                'provincia_id' => 211200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 =>
            array (
                'id' => 211203,
                'nombre' => 'Limbani',
                'region_id' => 210000,
                'provincia_id' => 211200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 =>
            array (
                'id' => 211204,
                'nombre' => 'Patambuco',
                'region_id' => 210000,
                'provincia_id' => 211200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 =>
            array (
                'id' => 211205,
                'nombre' => 'Phara',
                'region_id' => 210000,
                'provincia_id' => 211200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 =>
            array (
                'id' => 211206,
                'nombre' => 'Quiaca',
                'region_id' => 210000,
                'provincia_id' => 211200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 =>
            array (
                'id' => 211207,
                'nombre' => 'San Juan del Oro',
                'region_id' => 210000,
                'provincia_id' => 211200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 =>
            array (
                'id' => 211208,
                'nombre' => 'Yanahuaya',
                'region_id' => 210000,
                'provincia_id' => 211200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 =>
            array (
                'id' => 211209,
                'nombre' => 'Alto Inambari',
                'region_id' => 210000,
                'provincia_id' => 211200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 =>
            array (
                'id' => 211210,
                'nombre' => 'San Pedro de Putina Punco',
                'region_id' => 210000,
                'provincia_id' => 211200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 =>
            array (
                'id' => 211301,
                'nombre' => 'Yunguyo',
                'region_id' => 210000,
                'provincia_id' => 211300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 =>
            array (
                'id' => 211302,
                'nombre' => 'Anapia',
                'region_id' => 210000,
                'provincia_id' => 211300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 =>
            array (
                'id' => 211303,
                'nombre' => 'Copani',
                'region_id' => 210000,
                'provincia_id' => 211300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 =>
            array (
                'id' => 211304,
                'nombre' => 'Cuturapi',
                'region_id' => 210000,
                'provincia_id' => 211300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 =>
            array (
                'id' => 211305,
                'nombre' => 'Ollaraya',
                'region_id' => 210000,
                'provincia_id' => 211300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 =>
            array (
                'id' => 211306,
                'nombre' => 'Tinicachi',
                'region_id' => 210000,
                'provincia_id' => 211300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 =>
            array (
                'id' => 211307,
                'nombre' => 'Unicachi',
                'region_id' => 210000,
                'provincia_id' => 211300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 =>
            array (
                'id' => 220101,
                'nombre' => 'Moyobamba',
                'region_id' => 220000,
                'provincia_id' => 220100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 =>
            array (
                'id' => 220102,
                'nombre' => 'Calzada',
                'region_id' => 220000,
                'provincia_id' => 220100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 =>
            array (
                'id' => 220103,
                'nombre' => 'Habana',
                'region_id' => 220000,
                'provincia_id' => 220100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 =>
            array (
                'id' => 220104,
                'nombre' => 'Jepelacio',
                'region_id' => 220000,
                'provincia_id' => 220100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 =>
            array (
                'id' => 220105,
                'nombre' => 'Soritor',
                'region_id' => 220000,
                'provincia_id' => 220100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 =>
            array (
                'id' => 220106,
                'nombre' => 'Yantalo',
                'region_id' => 220000,
                'provincia_id' => 220100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 =>
            array (
                'id' => 220201,
                'nombre' => 'Bellavista',
                'region_id' => 220000,
                'provincia_id' => 220200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 =>
            array (
                'id' => 220202,
                'nombre' => 'Alto Biavo',
                'region_id' => 220000,
                'provincia_id' => 220200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 =>
            array (
                'id' => 220203,
                'nombre' => 'Bajo Biavo',
                'region_id' => 220000,
                'provincia_id' => 220200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 =>
            array (
                'id' => 220204,
                'nombre' => 'Huallaga',
                'region_id' => 220000,
                'provincia_id' => 220200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 =>
            array (
                'id' => 220205,
                'nombre' => 'San Pablo',
                'region_id' => 220000,
                'provincia_id' => 220200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 =>
            array (
                'id' => 220206,
                'nombre' => 'San Rafael',
                'region_id' => 220000,
                'provincia_id' => 220200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 =>
            array (
                'id' => 220301,
                'nombre' => 'San José de Sisa',
                'region_id' => 220000,
                'provincia_id' => 220300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 =>
            array (
                'id' => 220302,
                'nombre' => 'Agua Blanca',
                'region_id' => 220000,
                'provincia_id' => 220300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 =>
            array (
                'id' => 220303,
                'nombre' => 'San Martín',
                'region_id' => 220000,
                'provincia_id' => 220300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 =>
            array (
                'id' => 220304,
                'nombre' => 'Santa Rosa',
                'region_id' => 220000,
                'provincia_id' => 220300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 =>
            array (
                'id' => 220305,
                'nombre' => 'Shatoja',
                'region_id' => 220000,
                'provincia_id' => 220300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 =>
            array (
                'id' => 220401,
                'nombre' => 'Saposoa',
                'region_id' => 220000,
                'provincia_id' => 220400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 =>
            array (
                'id' => 220402,
                'nombre' => 'Alto Saposoa',
                'region_id' => 220000,
                'provincia_id' => 220400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 =>
            array (
                'id' => 220403,
                'nombre' => 'El Eslabón',
                'region_id' => 220000,
                'provincia_id' => 220400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 =>
            array (
                'id' => 220404,
                'nombre' => 'Piscoyacu',
                'region_id' => 220000,
                'provincia_id' => 220400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 =>
            array (
                'id' => 220405,
                'nombre' => 'Sacanche',
                'region_id' => 220000,
                'provincia_id' => 220400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 =>
            array (
                'id' => 220406,
                'nombre' => 'Tingo de Saposoa',
                'region_id' => 220000,
                'provincia_id' => 220400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 =>
            array (
                'id' => 220501,
                'nombre' => 'Lamas',
                'region_id' => 220000,
                'provincia_id' => 220500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 =>
            array (
                'id' => 220502,
                'nombre' => 'Alonso de Alvarado',
                'region_id' => 220000,
                'provincia_id' => 220500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 =>
            array (
                'id' => 220503,
                'nombre' => 'Barranquita',
                'region_id' => 220000,
                'provincia_id' => 220500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 =>
            array (
                'id' => 220504,
                'nombre' => 'Caynarachi',
                'region_id' => 220000,
                'provincia_id' => 220500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 =>
            array (
                'id' => 220505,
                'nombre' => 'Cuñumbuqui',
                'region_id' => 220000,
                'provincia_id' => 220500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 =>
            array (
                'id' => 220506,
                'nombre' => 'Pinto Recodo',
                'region_id' => 220000,
                'provincia_id' => 220500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 =>
            array (
                'id' => 220507,
                'nombre' => 'Rumisapa',
                'region_id' => 220000,
                'provincia_id' => 220500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 =>
            array (
                'id' => 220508,
                'nombre' => 'San Roque de Cumbaza',
                'region_id' => 220000,
                'provincia_id' => 220500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 =>
            array (
                'id' => 220509,
                'nombre' => 'Shanao',
                'region_id' => 220000,
                'provincia_id' => 220500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 =>
            array (
                'id' => 220510,
                'nombre' => 'Tabalosos',
                'region_id' => 220000,
                'provincia_id' => 220500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 =>
            array (
                'id' => 220511,
                'nombre' => 'Zapatero',
                'region_id' => 220000,
                'provincia_id' => 220500,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 =>
            array (
                'id' => 220601,
                'nombre' => 'Juanjuí',
                'region_id' => 220000,
                'provincia_id' => 220600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 =>
            array (
                'id' => 220602,
                'nombre' => 'Campanilla',
                'region_id' => 220000,
                'provincia_id' => 220600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 =>
            array (
                'id' => 220603,
                'nombre' => 'Huicungo',
                'region_id' => 220000,
                'provincia_id' => 220600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 =>
            array (
                'id' => 220604,
                'nombre' => 'Pachiza',
                'region_id' => 220000,
                'provincia_id' => 220600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 =>
            array (
                'id' => 220605,
                'nombre' => 'Pajarillo',
                'region_id' => 220000,
                'provincia_id' => 220600,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 =>
            array (
                'id' => 220701,
                'nombre' => 'Picota',
                'region_id' => 220000,
                'provincia_id' => 220700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 =>
            array (
                'id' => 220702,
                'nombre' => 'Buenos Aires',
                'region_id' => 220000,
                'provincia_id' => 220700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 =>
            array (
                'id' => 220703,
                'nombre' => 'Caspisapa',
                'region_id' => 220000,
                'provincia_id' => 220700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 =>
            array (
                'id' => 220704,
                'nombre' => 'Pilluana',
                'region_id' => 220000,
                'provincia_id' => 220700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 =>
            array (
                'id' => 220705,
                'nombre' => 'Pucacaca',
                'region_id' => 220000,
                'provincia_id' => 220700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 =>
            array (
                'id' => 220706,
                'nombre' => 'San Cristóbal',
                'region_id' => 220000,
                'provincia_id' => 220700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 =>
            array (
                'id' => 220707,
                'nombre' => 'San Hilarión',
                'region_id' => 220000,
                'provincia_id' => 220700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 =>
            array (
                'id' => 220708,
                'nombre' => 'Shamboyacu',
                'region_id' => 220000,
                'provincia_id' => 220700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 =>
            array (
                'id' => 220709,
                'nombre' => 'Tingo de Ponasa',
                'region_id' => 220000,
                'provincia_id' => 220700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 =>
            array (
                'id' => 220710,
                'nombre' => 'Tres Unidos',
                'region_id' => 220000,
                'provincia_id' => 220700,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 =>
            array (
                'id' => 220801,
                'nombre' => 'Rioja',
                'region_id' => 220000,
                'provincia_id' => 220800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 =>
            array (
                'id' => 220802,
                'nombre' => 'Awajun',
                'region_id' => 220000,
                'provincia_id' => 220800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 =>
            array (
                'id' => 220803,
                'nombre' => 'Elías Soplin Vargas',
                'region_id' => 220000,
                'provincia_id' => 220800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 =>
            array (
                'id' => 220804,
                'nombre' => 'Nueva Cajamarca',
                'region_id' => 220000,
                'provincia_id' => 220800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 =>
            array (
                'id' => 220805,
                'nombre' => 'Pardo Miguel',
                'region_id' => 220000,
                'provincia_id' => 220800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 =>
            array (
                'id' => 220806,
                'nombre' => 'Posic',
                'region_id' => 220000,
                'provincia_id' => 220800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 =>
            array (
                'id' => 220807,
                'nombre' => 'San Fernando',
                'region_id' => 220000,
                'provincia_id' => 220800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 =>
            array (
                'id' => 220808,
                'nombre' => 'Yorongos',
                'region_id' => 220000,
                'provincia_id' => 220800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 =>
            array (
                'id' => 220809,
                'nombre' => 'Yuracyacu',
                'region_id' => 220000,
                'provincia_id' => 220800,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 =>
            array (
                'id' => 220901,
                'nombre' => 'Tarapoto',
                'region_id' => 220000,
                'provincia_id' => 220900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 =>
            array (
                'id' => 220902,
                'nombre' => 'Alberto Leveau',
                'region_id' => 220000,
                'provincia_id' => 220900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 =>
            array (
                'id' => 220903,
                'nombre' => 'Cacatachi',
                'region_id' => 220000,
                'provincia_id' => 220900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 =>
            array (
                'id' => 220904,
                'nombre' => 'Chazuta',
                'region_id' => 220000,
                'provincia_id' => 220900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 =>
            array (
                'id' => 220905,
                'nombre' => 'Chipurana',
                'region_id' => 220000,
                'provincia_id' => 220900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 =>
            array (
                'id' => 220906,
                'nombre' => 'El Porvenir',
                'region_id' => 220000,
                'provincia_id' => 220900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 =>
            array (
                'id' => 220907,
                'nombre' => 'Huimbayoc',
                'region_id' => 220000,
                'provincia_id' => 220900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 =>
            array (
                'id' => 220908,
                'nombre' => 'Juan Guerra',
                'region_id' => 220000,
                'provincia_id' => 220900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 =>
            array (
                'id' => 220909,
                'nombre' => 'La Banda de Shilcayo',
                'region_id' => 220000,
                'provincia_id' => 220900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 =>
            array (
                'id' => 220910,
                'nombre' => 'Morales',
                'region_id' => 220000,
                'provincia_id' => 220900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 =>
            array (
                'id' => 220911,
                'nombre' => 'Papaplaya',
                'region_id' => 220000,
                'provincia_id' => 220900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 =>
            array (
                'id' => 220912,
                'nombre' => 'San Antonio',
                'region_id' => 220000,
                'provincia_id' => 220900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 =>
            array (
                'id' => 220913,
                'nombre' => 'Sauce',
                'region_id' => 220000,
                'provincia_id' => 220900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 =>
            array (
                'id' => 220914,
                'nombre' => 'Shapaja',
                'region_id' => 220000,
                'provincia_id' => 220900,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 =>
            array (
                'id' => 221001,
                'nombre' => 'Tocache',
                'region_id' => 220000,
                'provincia_id' => 221000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 =>
            array (
                'id' => 221002,
                'nombre' => 'Nuevo Progreso',
                'region_id' => 220000,
                'provincia_id' => 221000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 =>
            array (
                'id' => 221003,
                'nombre' => 'Polvora',
                'region_id' => 220000,
                'provincia_id' => 221000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 =>
            array (
                'id' => 221004,
                'nombre' => 'Shunte',
                'region_id' => 220000,
                'provincia_id' => 221000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 =>
            array (
                'id' => 221005,
                'nombre' => 'Uchiza',
                'region_id' => 220000,
                'provincia_id' => 221000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 =>
            array (
                'id' => 230101,
                'nombre' => 'Tacna',
                'region_id' => 230000,
                'provincia_id' => 230100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 =>
            array (
                'id' => 230102,
                'nombre' => 'Alto de la Alianza',
                'region_id' => 230000,
                'provincia_id' => 230100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 =>
            array (
                'id' => 230103,
                'nombre' => 'Calana',
                'region_id' => 230000,
                'provincia_id' => 230100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 =>
            array (
                'id' => 230104,
                'nombre' => 'Ciudad Nueva',
                'region_id' => 230000,
                'provincia_id' => 230100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 =>
            array (
                'id' => 230105,
                'nombre' => 'Inclan',
                'region_id' => 230000,
                'provincia_id' => 230100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 =>
            array (
                'id' => 230106,
                'nombre' => 'Pachia',
                'region_id' => 230000,
                'provincia_id' => 230100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 =>
            array (
                'id' => 230107,
                'nombre' => 'Palca',
                'region_id' => 230000,
                'provincia_id' => 230100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 =>
            array (
                'id' => 230108,
                'nombre' => 'Pocollay',
                'region_id' => 230000,
                'provincia_id' => 230100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 =>
            array (
                'id' => 230109,
                'nombre' => 'Sama',
                'region_id' => 230000,
                'provincia_id' => 230100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 =>
            array (
                'id' => 230110,
                'nombre' => 'Coronel Gregorio Albarracín Lanchipa',
                'region_id' => 230000,
                'provincia_id' => 230100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 =>
            array (
                'id' => 230111,
                'nombre' => 'La Yarada los Palos',
                'region_id' => 230000,
                'provincia_id' => 230100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 =>
            array (
                'id' => 230201,
                'nombre' => 'Candarave',
                'region_id' => 230000,
                'provincia_id' => 230200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 =>
            array (
                'id' => 230202,
                'nombre' => 'Cairani',
                'region_id' => 230000,
                'provincia_id' => 230200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 =>
            array (
                'id' => 230203,
                'nombre' => 'Camilaca',
                'region_id' => 230000,
                'provincia_id' => 230200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 =>
            array (
                'id' => 230204,
                'nombre' => 'Curibaya',
                'region_id' => 230000,
                'provincia_id' => 230200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 =>
            array (
                'id' => 230205,
                'nombre' => 'Huanuara',
                'region_id' => 230000,
                'provincia_id' => 230200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 =>
            array (
                'id' => 230206,
                'nombre' => 'Quilahuani',
                'region_id' => 230000,
                'provincia_id' => 230200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 =>
            array (
                'id' => 230301,
                'nombre' => 'Locumba',
                'region_id' => 230000,
                'provincia_id' => 230300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 =>
            array (
                'id' => 230302,
                'nombre' => 'Ilabaya',
                'region_id' => 230000,
                'provincia_id' => 230300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 =>
            array (
                'id' => 230303,
                'nombre' => 'Ite',
                'region_id' => 230000,
                'provincia_id' => 230300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 =>
            array (
                'id' => 230401,
                'nombre' => 'Tarata',
                'region_id' => 230000,
                'provincia_id' => 230400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 =>
            array (
                'id' => 230402,
                'nombre' => 'Héroes Albarracín',
                'region_id' => 230000,
                'provincia_id' => 230400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 =>
            array (
                'id' => 230403,
                'nombre' => 'Estique',
                'region_id' => 230000,
                'provincia_id' => 230400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 =>
            array (
                'id' => 230404,
                'nombre' => 'Estique-Pampa',
                'region_id' => 230000,
                'provincia_id' => 230400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 =>
            array (
                'id' => 230405,
                'nombre' => 'Sitajara',
                'region_id' => 230000,
                'provincia_id' => 230400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 =>
            array (
                'id' => 230406,
                'nombre' => 'Susapaya',
                'region_id' => 230000,
                'provincia_id' => 230400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 =>
            array (
                'id' => 230407,
                'nombre' => 'Tarucachi',
                'region_id' => 230000,
                'provincia_id' => 230400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 =>
            array (
                'id' => 230408,
                'nombre' => 'Ticaco',
                'region_id' => 230000,
                'provincia_id' => 230400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 =>
            array (
                'id' => 240101,
                'nombre' => 'Tumbes',
                'region_id' => 240000,
                'provincia_id' => 240100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 =>
            array (
                'id' => 240102,
                'nombre' => 'Corrales',
                'region_id' => 240000,
                'provincia_id' => 240100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 =>
            array (
                'id' => 240103,
                'nombre' => 'La Cruz',
                'region_id' => 240000,
                'provincia_id' => 240100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 =>
            array (
                'id' => 240104,
                'nombre' => 'Pampas de Hospital',
                'region_id' => 240000,
                'provincia_id' => 240100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 =>
            array (
                'id' => 240105,
                'nombre' => 'San Jacinto',
                'region_id' => 240000,
                'provincia_id' => 240100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 =>
            array (
                'id' => 240106,
                'nombre' => 'San Juan de la Virgen',
                'region_id' => 240000,
                'provincia_id' => 240100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 =>
            array (
                'id' => 240201,
                'nombre' => 'Zorritos',
                'region_id' => 240000,
                'provincia_id' => 240200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 =>
            array (
                'id' => 240202,
                'nombre' => 'Casitas',
                'region_id' => 240000,
                'provincia_id' => 240200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 =>
            array (
                'id' => 240203,
                'nombre' => 'Canoas de Punta Sal',
                'region_id' => 240000,
                'provincia_id' => 240200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 =>
            array (
                'id' => 240301,
                'nombre' => 'Zarumilla',
                'region_id' => 240000,
                'provincia_id' => 240300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 =>
            array (
                'id' => 240302,
                'nombre' => 'Aguas Verdes',
                'region_id' => 240000,
                'provincia_id' => 240300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 =>
            array (
                'id' => 240303,
                'nombre' => 'Matapalo',
                'region_id' => 240000,
                'provincia_id' => 240300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 =>
            array (
                'id' => 240304,
                'nombre' => 'Papayal',
                'region_id' => 240000,
                'provincia_id' => 240300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 =>
            array (
                'id' => 250101,
                'nombre' => 'Calleria',
                'region_id' => 250000,
                'provincia_id' => 250100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 =>
            array (
                'id' => 250102,
                'nombre' => 'Campoverde',
                'region_id' => 250000,
                'provincia_id' => 250100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 =>
            array (
                'id' => 250103,
                'nombre' => 'Iparia',
                'region_id' => 250000,
                'provincia_id' => 250100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 =>
            array (
                'id' => 250104,
                'nombre' => 'Masisea',
                'region_id' => 250000,
                'provincia_id' => 250100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 =>
            array (
                'id' => 250105,
                'nombre' => 'Yarinacocha',
                'region_id' => 250000,
                'provincia_id' => 250100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 =>
            array (
                'id' => 250106,
                'nombre' => 'Nueva Requena',
                'region_id' => 250000,
                'provincia_id' => 250100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 =>
            array (
                'id' => 250107,
                'nombre' => 'Manantay',
                'region_id' => 250000,
                'provincia_id' => 250100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 =>
            array (
                'id' => 250201,
                'nombre' => 'Raymondi',
                'region_id' => 250000,
                'provincia_id' => 250200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 =>
            array (
                'id' => 250202,
                'nombre' => 'Sepahua',
                'region_id' => 250000,
                'provincia_id' => 250200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 =>
            array (
                'id' => 250203,
                'nombre' => 'Tahuania',
                'region_id' => 250000,
                'provincia_id' => 250200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 =>
            array (
                'id' => 250204,
                'nombre' => 'Yurua',
                'region_id' => 250000,
                'provincia_id' => 250200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 =>
            array (
                'id' => 250301,
                'nombre' => 'Padre Abad',
                'region_id' => 250000,
                'provincia_id' => 250300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 =>
            array (
                'id' => 250302,
                'nombre' => 'Irazola',
                'region_id' => 250000,
                'provincia_id' => 250300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 =>
            array (
                'id' => 250303,
                'nombre' => 'Curimana',
                'region_id' => 250000,
                'provincia_id' => 250300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 =>
            array (
                'id' => 250304,
                'nombre' => 'Neshuya',
                'region_id' => 250000,
                'provincia_id' => 250300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 =>
            array (
                'id' => 250305,
                'nombre' => 'Alexander Von Humboldt',
                'region_id' => 250000,
                'provincia_id' => 250300,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 =>
            array (
                'id' => 250401,
                'nombre' => 'Purús',
                'region_id' => 250000,
                'provincia_id' => 250400,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 =>
            array (
                'id' => 260101,
                'nombre' => 'Online',
                'region_id' => 260000,
                'provincia_id' => 260100,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
