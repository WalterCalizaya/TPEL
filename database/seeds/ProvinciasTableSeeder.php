<?php

use Illuminate\Database\Seeder;

class ProvinciasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('provincias')->delete();

        \DB::table('provincias')->insert(array (
            0 =>
            array (
                'id' => 10100,
                'nombre' => 'Chachapoyas',
                'region_id' => 10000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 10200,
                'nombre' => 'Bagua',
                'region_id' => 10000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 10300,
                'nombre' => 'Bongará',
                'region_id' => 10000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 10400,
                'nombre' => 'Condorcanqui',
                'region_id' => 10000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 10500,
                'nombre' => 'Luya',
                'region_id' => 10000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 10600,
                'nombre' => 'Rodríguez de Mendoza',
                'region_id' => 10000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array (
                'id' => 10700,
                'nombre' => 'Utcubamba',
                'region_id' => 10000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array (
                'id' => 20100,
                'nombre' => 'Huaraz',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array (
                'id' => 20200,
                'nombre' => 'Aija',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array (
                'id' => 20300,
                'nombre' => 'Antonio Raymondi',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 =>
            array (
                'id' => 20400,
                'nombre' => 'Asunción',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 =>
            array (
                'id' => 20500,
                'nombre' => 'Bolognesi',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 =>
            array (
                'id' => 20600,
                'nombre' => 'Carhuaz',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 =>
            array (
                'id' => 20700,
                'nombre' => 'Carlos Fermín Fitzcarrald',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 =>
            array (
                'id' => 20800,
                'nombre' => 'Casma',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 =>
            array (
                'id' => 20900,
                'nombre' => 'Corongo',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 =>
            array (
                'id' => 21000,
                'nombre' => 'Huari',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 =>
            array (
                'id' => 21100,
                'nombre' => 'Huarmey',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 =>
            array (
                'id' => 21200,
                'nombre' => 'Huaylas',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 =>
            array (
                'id' => 21300,
                'nombre' => 'Mariscal Luzuriaga',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 =>
            array (
                'id' => 21400,
                'nombre' => 'Ocros',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 =>
            array (
                'id' => 21500,
                'nombre' => 'Pallasca',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 =>
            array (
                'id' => 21600,
                'nombre' => 'Pomabamba',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 =>
            array (
                'id' => 21700,
                'nombre' => 'Recuay',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 =>
            array (
                'id' => 21800,
                'nombre' => 'Santa',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 =>
            array (
                'id' => 21900,
                'nombre' => 'Sihuas',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 =>
            array (
                'id' => 22000,
                'nombre' => 'Yungay',
                'region_id' => 20000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 =>
            array (
                'id' => 30100,
                'nombre' => 'Abancay',
                'region_id' => 30000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 =>
            array (
                'id' => 30200,
                'nombre' => 'Andahuaylas',
                'region_id' => 30000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 =>
            array (
                'id' => 30300,
                'nombre' => 'Antabamba',
                'region_id' => 30000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 =>
            array (
                'id' => 30400,
                'nombre' => 'Aymaraes',
                'region_id' => 30000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 =>
            array (
                'id' => 30500,
                'nombre' => 'Cotabambas',
                'region_id' => 30000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 =>
            array (
                'id' => 30600,
                'nombre' => 'Chincheros',
                'region_id' => 30000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 =>
            array (
                'id' => 30700,
                'nombre' => 'Grau',
                'region_id' => 30000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 =>
            array (
                'id' => 40100,
                'nombre' => 'Arequipa',
                'region_id' => 40000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 =>
            array (
                'id' => 40200,
                'nombre' => 'Camaná',
                'region_id' => 40000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 =>
            array (
                'id' => 40300,
                'nombre' => 'Caravelí',
                'region_id' => 40000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 =>
            array (
                'id' => 40400,
                'nombre' => 'Castilla',
                'region_id' => 40000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 =>
            array (
                'id' => 40500,
                'nombre' => 'Caylloma',
                'region_id' => 40000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 =>
            array (
                'id' => 40600,
                'nombre' => 'Condesuyos',
                'region_id' => 40000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 =>
            array (
                'id' => 40700,
                'nombre' => 'Islay',
                'region_id' => 40000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 =>
            array (
                'id' => 40800,
                'nombre' => 'La Unión',
                'region_id' => 40000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 =>
            array (
                'id' => 50100,
                'nombre' => 'Huamanga',
                'region_id' => 50000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 =>
            array (
                'id' => 50200,
                'nombre' => 'Cangallo',
                'region_id' => 50000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 =>
            array (
                'id' => 50300,
                'nombre' => 'Huanca Sancos',
                'region_id' => 50000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 =>
            array (
                'id' => 50400,
                'nombre' => 'Huanta',
                'region_id' => 50000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 =>
            array (
                'id' => 50500,
                'nombre' => 'La Mar',
                'region_id' => 50000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 =>
            array (
                'id' => 50600,
                'nombre' => 'Lucanas',
                'region_id' => 50000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 =>
            array (
                'id' => 50700,
                'nombre' => 'Parinacochas',
                'region_id' => 50000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 =>
            array (
                'id' => 50800,
                'nombre' => 'Páucar del Sara Sara',
                'region_id' => 50000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 =>
            array (
                'id' => 50900,
                'nombre' => 'Sucre',
                'region_id' => 50000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 =>
            array (
                'id' => 51000,
                'nombre' => 'Víctor Fajardo',
                'region_id' => 50000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 =>
            array (
                'id' => 51100,
                'nombre' => 'Vilcas Huamán',
                'region_id' => 50000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 =>
            array (
                'id' => 60100,
                'nombre' => 'Cajamarca',
                'region_id' => 60000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 =>
            array (
                'id' => 60200,
                'nombre' => 'Cajabamba',
                'region_id' => 60000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 =>
            array (
                'id' => 60300,
                'nombre' => 'Celendín',
                'region_id' => 60000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 =>
            array (
                'id' => 60400,
                'nombre' => 'Chota',
                'region_id' => 60000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 =>
            array (
                'id' => 60500,
                'nombre' => 'Contumazá',
                'region_id' => 60000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 =>
            array (
                'id' => 60600,
                'nombre' => 'Cutervo',
                'region_id' => 60000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 =>
            array (
                'id' => 60700,
                'nombre' => 'Hualgayoc',
                'region_id' => 60000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 =>
            array (
                'id' => 60800,
                'nombre' => 'Jaén',
                'region_id' => 60000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 =>
            array (
                'id' => 60900,
                'nombre' => 'San Ignacio',
                'region_id' => 60000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 =>
            array (
                'id' => 61000,
                'nombre' => 'San Marcos',
                'region_id' => 60000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 =>
            array (
                'id' => 61100,
                'nombre' => 'San Miguel',
                'region_id' => 60000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 =>
            array (
                'id' => 61200,
                'nombre' => 'San Pablo',
                'region_id' => 60000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 =>
            array (
                'id' => 61300,
                'nombre' => 'Santa Cruz',
                'region_id' => 60000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 =>
            array (
                'id' => 70100,
                'nombre' => 'Prov. Const. del Callao',
                'region_id' => 70000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 =>
            array (
                'id' => 80100,
                'nombre' => 'Cusco',
                'region_id' => 80000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 =>
            array (
                'id' => 80200,
                'nombre' => 'Acomayo',
                'region_id' => 80000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 =>
            array (
                'id' => 80300,
                'nombre' => 'Anta',
                'region_id' => 80000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 =>
            array (
                'id' => 80400,
                'nombre' => 'Calca',
                'region_id' => 80000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 =>
            array (
                'id' => 80500,
                'nombre' => 'Canas',
                'region_id' => 80000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 =>
            array (
                'id' => 80600,
                'nombre' => 'Canchis',
                'region_id' => 80000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 =>
            array (
                'id' => 80700,
                'nombre' => 'Chumbivilcas',
                'region_id' => 80000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 =>
            array (
                'id' => 80800,
                'nombre' => 'Espinar',
                'region_id' => 80000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 =>
            array (
                'id' => 80900,
                'nombre' => 'La Convención',
                'region_id' => 80000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 =>
            array (
                'id' => 81000,
                'nombre' => 'Paruro',
                'region_id' => 80000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 =>
            array (
                'id' => 81100,
                'nombre' => 'Paucartambo',
                'region_id' => 80000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 =>
            array (
                'id' => 81200,
                'nombre' => 'Quispicanchi',
                'region_id' => 80000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 =>
            array (
                'id' => 81300,
                'nombre' => 'Urubamba',
                'region_id' => 80000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 =>
            array (
                'id' => 90100,
                'nombre' => 'Huancavelica',
                'region_id' => 90000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 =>
            array (
                'id' => 90200,
                'nombre' => 'Acobamba',
                'region_id' => 90000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 =>
            array (
                'id' => 90300,
                'nombre' => 'Angaraes',
                'region_id' => 90000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 =>
            array (
                'id' => 90400,
                'nombre' => 'Castrovirreyna',
                'region_id' => 90000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 =>
            array (
                'id' => 90500,
                'nombre' => 'Churcampa',
                'region_id' => 90000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 =>
            array (
                'id' => 90600,
                'nombre' => 'Huaytará',
                'region_id' => 90000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 =>
            array (
                'id' => 90700,
                'nombre' => 'Tayacaja',
                'region_id' => 90000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 =>
            array (
                'id' => 100100,
                'nombre' => 'Huánuco',
                'region_id' => 100000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 =>
            array (
                'id' => 100200,
                'nombre' => 'Ambo',
                'region_id' => 100000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 =>
            array (
                'id' => 100300,
                'nombre' => 'Dos de Mayo',
                'region_id' => 100000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 =>
            array (
                'id' => 100400,
                'nombre' => 'Huacaybamba',
                'region_id' => 100000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 =>
            array (
                'id' => 100500,
                'nombre' => 'Huamalíes',
                'region_id' => 100000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 =>
            array (
                'id' => 100600,
                'nombre' => 'Leoncio Prado',
                'region_id' => 100000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 =>
            array (
                'id' => 100700,
                'nombre' => 'Marañón',
                'region_id' => 100000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 =>
            array (
                'id' => 100800,
                'nombre' => 'Pachitea',
                'region_id' => 100000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 =>
            array (
                'id' => 100900,
                'nombre' => 'Puerto Inca',
                'region_id' => 100000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 =>
            array (
                'id' => 101000,
                'nombre' => 'Lauricocha ',
                'region_id' => 100000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 =>
            array (
                'id' => 101100,
                'nombre' => 'Yarowilca ',
                'region_id' => 100000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 =>
            array (
                'id' => 110100,
                'nombre' => 'Ica ',
                'region_id' => 110000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 =>
            array (
                'id' => 110200,
                'nombre' => 'Chincha ',
                'region_id' => 110000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 =>
            array (
                'id' => 110300,
                'nombre' => 'Nasca ',
                'region_id' => 110000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 =>
            array (
                'id' => 110400,
                'nombre' => 'Palpa ',
                'region_id' => 110000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 =>
            array (
                'id' => 110500,
                'nombre' => 'Pisco ',
                'region_id' => 110000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 =>
            array (
                'id' => 120100,
                'nombre' => 'Huancayo ',
                'region_id' => 120000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 =>
            array (
                'id' => 120200,
                'nombre' => 'Concepción ',
                'region_id' => 120000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 =>
            array (
                'id' => 120300,
                'nombre' => 'Chanchamayo ',
                'region_id' => 120000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 =>
            array (
                'id' => 120400,
                'nombre' => 'Jauja ',
                'region_id' => 120000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 =>
            array (
                'id' => 120500,
                'nombre' => 'Junín ',
                'region_id' => 120000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 =>
            array (
                'id' => 120600,
                'nombre' => 'Satipo ',
                'region_id' => 120000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 =>
            array (
                'id' => 120700,
                'nombre' => 'Tarma ',
                'region_id' => 120000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 =>
            array (
                'id' => 120800,
                'nombre' => 'Yauli ',
                'region_id' => 120000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 =>
            array (
                'id' => 120900,
                'nombre' => 'Chupaca ',
                'region_id' => 120000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 =>
            array (
                'id' => 130100,
                'nombre' => 'Trujillo ',
                'region_id' => 130000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 =>
            array (
                'id' => 130200,
                'nombre' => 'Ascope ',
                'region_id' => 130000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 =>
            array (
                'id' => 130300,
                'nombre' => 'Bolívar ',
                'region_id' => 130000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 =>
            array (
                'id' => 130400,
                'nombre' => 'Chepén ',
                'region_id' => 130000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 =>
            array (
                'id' => 130500,
                'nombre' => 'Julcán ',
                'region_id' => 130000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 =>
            array (
                'id' => 130600,
                'nombre' => 'Otuzco ',
                'region_id' => 130000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 =>
            array (
                'id' => 130700,
                'nombre' => 'Pacasmayo ',
                'region_id' => 130000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 =>
            array (
                'id' => 130800,
                'nombre' => 'Pataz ',
                'region_id' => 130000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 =>
            array (
                'id' => 130900,
                'nombre' => 'Sánchez Carrión ',
                'region_id' => 130000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 =>
            array (
                'id' => 131000,
                'nombre' => 'Santiago de Chuco ',
                'region_id' => 130000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 =>
            array (
                'id' => 131100,
                'nombre' => 'Gran Chimú ',
                'region_id' => 130000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 =>
            array (
                'id' => 131200,
                'nombre' => 'Virú ',
                'region_id' => 130000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 =>
            array (
                'id' => 140100,
                'nombre' => 'Chiclayo ',
                'region_id' => 140000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 =>
            array (
                'id' => 140200,
                'nombre' => 'Ferreñafe ',
                'region_id' => 140000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 =>
            array (
                'id' => 140300,
                'nombre' => 'Lambayeque ',
                'region_id' => 140000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 =>
            array (
                'id' => 150100,
                'nombre' => 'Lima ',
                'region_id' => 150000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 =>
            array (
                'id' => 150200,
                'nombre' => 'Barranca ',
                'region_id' => 150000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 =>
            array (
                'id' => 150300,
                'nombre' => 'Cajatambo ',
                'region_id' => 150000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 =>
            array (
                'id' => 150400,
                'nombre' => 'Canta ',
                'region_id' => 150000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 =>
            array (
                'id' => 150500,
                'nombre' => 'Cañete ',
                'region_id' => 150000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 =>
            array (
                'id' => 150600,
                'nombre' => 'Huaral ',
                'region_id' => 150000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 =>
            array (
                'id' => 150700,
                'nombre' => 'Huarochirí ',
                'region_id' => 150000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 =>
            array (
                'id' => 150800,
                'nombre' => 'Huaura ',
                'region_id' => 150000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 =>
            array (
                'id' => 150900,
                'nombre' => 'Oyón ',
                'region_id' => 150000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 =>
            array (
                'id' => 151000,
                'nombre' => 'Yauyos ',
                'region_id' => 150000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 =>
            array (
                'id' => 160100,
                'nombre' => 'Maynas ',
                'region_id' => 160000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 =>
            array (
                'id' => 160200,
                'nombre' => 'Alto Amazonas ',
                'region_id' => 160000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 =>
            array (
                'id' => 160300,
                'nombre' => 'Loreto ',
                'region_id' => 160000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 =>
            array (
                'id' => 160400,
                'nombre' => 'Mariscal Ramón Castilla ',
                'region_id' => 160000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 =>
            array (
                'id' => 160500,
                'nombre' => 'Requena ',
                'region_id' => 160000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 =>
            array (
                'id' => 160600,
                'nombre' => 'Ucayali ',
                'region_id' => 160000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 =>
            array (
                'id' => 160700,
                'nombre' => 'Datem del Marañón ',
                'region_id' => 160000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 =>
            array (
                'id' => 160800,
                'nombre' => 'Putumayo',
                'region_id' => 160000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 =>
            array (
                'id' => 170100,
                'nombre' => 'Tambopata ',
                'region_id' => 170000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 =>
            array (
                'id' => 170200,
                'nombre' => 'Manu ',
                'region_id' => 170000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 =>
            array (
                'id' => 170300,
                'nombre' => 'Tahuamanu ',
                'region_id' => 170000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 =>
            array (
                'id' => 180100,
                'nombre' => 'Mariscal Nieto ',
                'region_id' => 180000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 =>
            array (
                'id' => 180200,
                'nombre' => 'General Sánchez Cerro ',
                'region_id' => 180000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 =>
            array (
                'id' => 180300,
                'nombre' => 'Ilo ',
                'region_id' => 180000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 =>
            array (
                'id' => 190100,
                'nombre' => 'Pasco ',
                'region_id' => 190000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 =>
            array (
                'id' => 190200,
                'nombre' => 'Daniel Alcides Carrión ',
                'region_id' => 190000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 =>
            array (
                'id' => 190300,
                'nombre' => 'Oxapampa ',
                'region_id' => 190000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 =>
            array (
                'id' => 200100,
                'nombre' => 'Piura ',
                'region_id' => 200000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 =>
            array (
                'id' => 200200,
                'nombre' => 'Ayabaca ',
                'region_id' => 200000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 =>
            array (
                'id' => 200300,
                'nombre' => 'Huancabamba ',
                'region_id' => 200000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 =>
            array (
                'id' => 200400,
                'nombre' => 'Morropón ',
                'region_id' => 200000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 =>
            array (
                'id' => 200500,
                'nombre' => 'Paita ',
                'region_id' => 200000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 =>
            array (
                'id' => 200600,
                'nombre' => 'Sullana ',
                'region_id' => 200000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 =>
            array (
                'id' => 200700,
                'nombre' => 'Talara ',
                'region_id' => 200000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 =>
            array (
                'id' => 200800,
                'nombre' => 'Sechura ',
                'region_id' => 200000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 =>
            array (
                'id' => 210100,
                'nombre' => 'Puno ',
                'region_id' => 210000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 =>
            array (
                'id' => 210200,
                'nombre' => 'Azángaro ',
                'region_id' => 210000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 =>
            array (
                'id' => 210300,
                'nombre' => 'Carabaya ',
                'region_id' => 210000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 =>
            array (
                'id' => 210400,
                'nombre' => 'Chucuito ',
                'region_id' => 210000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 =>
            array (
                'id' => 210500,
                'nombre' => 'El Collao ',
                'region_id' => 210000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 =>
            array (
                'id' => 210600,
                'nombre' => 'Huancané ',
                'region_id' => 210000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 =>
            array (
                'id' => 210700,
                'nombre' => 'Lampa ',
                'region_id' => 210000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 =>
            array (
                'id' => 210800,
                'nombre' => 'Melgar ',
                'region_id' => 210000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 =>
            array (
                'id' => 210900,
                'nombre' => 'Moho ',
                'region_id' => 210000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 =>
            array (
                'id' => 211000,
                'nombre' => 'San Antonio de Putina ',
                'region_id' => 210000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 =>
            array (
                'id' => 211100,
                'nombre' => 'San Román ',
                'region_id' => 210000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 =>
            array (
                'id' => 211200,
                'nombre' => 'Sandia ',
                'region_id' => 210000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 =>
            array (
                'id' => 211300,
                'nombre' => 'Yunguyo ',
                'region_id' => 210000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 =>
            array (
                'id' => 220100,
                'nombre' => 'Moyobamba ',
                'region_id' => 220000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 =>
            array (
                'id' => 220200,
                'nombre' => 'Bellavista ',
                'region_id' => 220000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 =>
            array (
                'id' => 220300,
                'nombre' => 'El Dorado ',
                'region_id' => 220000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 =>
            array (
                'id' => 220400,
                'nombre' => 'Huallaga ',
                'region_id' => 220000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 =>
            array (
                'id' => 220500,
                'nombre' => 'Lamas ',
                'region_id' => 220000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 =>
            array (
                'id' => 220600,
                'nombre' => 'Mariscal Cáceres ',
                'region_id' => 220000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 =>
            array (
                'id' => 220700,
                'nombre' => 'Picota ',
                'region_id' => 220000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 =>
            array (
                'id' => 220800,
                'nombre' => 'Rioja ',
                'region_id' => 220000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 =>
            array (
                'id' => 220900,
                'nombre' => 'San Martín ',
                'region_id' => 220000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 =>
            array (
                'id' => 221000,
                'nombre' => 'Tocache ',
                'region_id' => 220000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 =>
            array (
                'id' => 230100,
                'nombre' => 'Tacna ',
                'region_id' => 230000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 =>
            array (
                'id' => 230200,
                'nombre' => 'Candarave ',
                'region_id' => 230000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 =>
            array (
                'id' => 230300,
                'nombre' => 'Jorge Basadre ',
                'region_id' => 230000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 =>
            array (
                'id' => 230400,
                'nombre' => 'Tarata ',
                'region_id' => 230000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 =>
            array (
                'id' => 240100,
                'nombre' => 'Tumbes ',
                'region_id' => 240000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 =>
            array (
                'id' => 240200,
                'nombre' => 'Contralmirante Villar ',
                'region_id' => 240000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 =>
            array (
                'id' => 240300,
                'nombre' => 'Zarumilla ',
                'region_id' => 240000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 =>
            array (
                'id' => 250100,
                'nombre' => 'Coronel Portillo ',
                'region_id' => 250000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 =>
            array (
                'id' => 250200,
                'nombre' => 'Atalaya ',
                'region_id' => 250000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 =>
            array (
                'id' => 250300,
                'nombre' => 'Padre Abad ',
                'region_id' => 250000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 =>
            array (
                'id' => 250400,
                'nombre' => 'Purús',
                'region_id' => 250000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 =>
            array (
                'id' => 260100,
                'nombre' => 'Online',
                'region_id' => 260000,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
