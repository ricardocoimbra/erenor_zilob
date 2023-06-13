<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HealthUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('health_units')->insert([

            ['cnes' => '0000001', 'name' => 'eeeee'],
            ['cnes' => '0000002', 'name' => 'eeeee'],
            ['cnes' => '0000003', 'name' => 'eeeee'],
            ['cnes' => '2013274', 'name' => 'FUNDAÇÃO HEMOAM'],
            ['cnes' => '0000005', 'name' => 'eeeee'],
            ['cnes' => '0000006', 'name' => 'eeeee'],
            ['cnes' => '2012677', 'name' => 'FUNDAÇÃO CECON'],
            ['cnes' => '2012685', 'name' => 'FUNDAÇÃO HOSPITAL ADRIANO JORGE'],
            ['cnes' => '3042626', 'name' => 'POLICLÍNICA ZENO LANZINI'],
            ['cnes' => '10', 'name' => 'CREPS ?'],
            ['cnes' => '0000011', 'name' => 'eeeee'],
            ['cnes' => '2017210', 'name' => 'CAIC AFRANIO SOARES'],
            ['cnes' => '2011824', 'name' => 'CAIC ALBERTO CARREIRA'],
            ['cnes' => '2013525', 'name' => 'CAIC ALEXANDRE MONTORIL'],
            ['cnes' => '2018527', 'name' => 'CAIC ANA MARIA DOS SANTOS PEREIRA BRAGA (CAIC CORINA BATISTA)'],
            ['cnes' => '2018519', 'name' => 'CAIC DRA JOSEPHINA DE MELLO (CAIC CRISOLITA TORRES)'],
            ['cnes' => '2013738', 'name' => 'CAIC DR JOSE CONTENTE'],
            ['cnes' => '2013592', 'name' => 'CAIC DR MOURA TAPAJÓS'],
            ['cnes' => '2016982', 'name' => 'CAIC DRA MARIA HELENA FREITAS DE GOES (CAIC DR PAULO XEREZ)'],
            ['cnes' => '2018500', 'name' => 'CAIC EDSON MELO'],
            ['cnes' => '2011913', 'name' => 'CAIC GILSON MOREIRA'],
            ['cnes' => '2011840', 'name' => 'CAIC JOSE CARLOS MESTRINHO'],
            ['cnes' => '2018535', 'name' => 'CAIC RUBIM SA'],
            ['cnes' => '3212270', 'name' => 'CAIMI ADA RODRIGUES VIANA'],
            ['cnes' => '2012049', 'name' => 'CAIMI ANDRE ARAUJO'],
            ['cnes' => '2012057', 'name' => 'CAIMI PAULO LIMA'],
            ['cnes' => '2019434', 'name' => 'CDR - CENTRO DE DOENÇAS RENAIS'],
            ['cnes' => '2012162', 'name' => 'CEDOA - CENTRO DE DIAGNOSTICO OFTALMOLOGICO DO AM'],
            ['cnes' => '5010039', 'name' => 'CEDOF - CENTRO DIAGNOSTICO DE OTORRINOLARINGOLOGIA E FONOAUDIOLOGIA'],
            ['cnes' => '2017733', 'name' => 'CEFRAM - CENTRO DE FRATURA DO AMAZONAS'],
    ['cnes' => '2016206', 'name' => 'CENTRO MEDICO SAO BRAZ'],
    ['cnes' => '2012359', 'name' => 'CENTRO ORTOPEDICO ANA ROSA'],
    ['cnes' => '5075939', 'name' => 'CLINFIT - CLINFIT CLINICA INTENSIVA DE FISIOTERAPIA DO AMAZONAS LTDA'],
    ['cnes' => '3105490', 'name' => 'CLINICA DE OLHOS HARLEY STREET'],
    ['cnes' => '2012103', 'name' => 'CLINICA NOSSA SENHORA AUXILIADORA'],
            ['cnes' => '0000036', 'name' => 'eeeee'],
    ['cnes' => '2019345', 'name' => 'CLINICA RENAL DE MANAUS'],
            ['cnes' => '0000038', 'name' => 'eeeee'],
    ['cnes' => '2013606', 'name' => 'FUNDAÇÃO DE MEDICINA TROPICAL DO AM'],
    ['cnes' => '2012650', 'name' => 'FUNDAÇÃO ALFREDO DA MATTA'],
            ['cnes' => '0000041', 'name' => 'eeeee'],
    ['cnes' => '2017849', 'name' => 'HOSPITAL INFANTIL DR FAJARDO'],
    ['cnes' => '2018055', 'name' => 'HOSPITAL SANTA JULIA'],
    ['cnes' => '2013649', 'name' => 'HPS 28 DE AGOSTO'],
    ['cnes' => '5169976', 'name' => 'HPS DR ARISTOTELES PLATAO ARAUJO'],
    ['cnes' => '2019574', 'name' => 'HPS JOAO LUCIO'],
    ['cnes' => '2012030', 'name' => 'HPSC ZONA LESTE'],
    ['cnes' => '2018071', 'name' => 'HPSC ZONA OESTE'],
    ['cnes' => '2012472', 'name' => 'HPSC ZONA SUL'],
    ['cnes' => '2018403', 'name' => 'HOSPITAL UNIVERSITARIO FRANCISCA MENDES'],
    ['cnes' => '2017644', 'name' => 'HOSPITAL UNIVERSITARIO GETULIO VARGAS'],
    ['cnes' => '2017431', 'name' => 'ICAM'],
    ['cnes' => '2018969', 'name' => 'ICON INSTITUTO DE CIRURGIA OCULAR DO NORTE'],
    ['cnes' => '54', 'name' => 'IMAGEM CENTER'],
    ['cnes' => '55', 'name' => 'IOM'],
    ['cnes' => '56', 'name' => 'MANAUSMED'],
    ['cnes' => '2019078', 'name' => 'OFTALCLIN CLINICA OFTALMICA LTDA EPP'],
    ['cnes' => '2017776', 'name' => 'ONCOCLIN DE MANAUS LTDA'],
    ['cnes' => '2019124', 'name' => 'ORTOAM'],
    ['cnes' => '2019043', 'name' => 'ORTONORTE - CENTRO DE TRATAMENTO ORTOPEDICO LTDA'],
    ['cnes' => '2019159', 'name' => 'OTOCENTER - CENTRO DE DIAGNOSTICO OTORRINOLARINGOLOGICO LTDA'],
    ['cnes' => '3039285', 'name' => 'POLICLINICA ANTONIO ALEIXO'],
    ['cnes' => '2011883', 'name' => 'POLICLINICA CARDOSO FONTES'],
    ['cnes' => '2018756', 'name' => 'POLICLINICA CODAJAS'],
            ['cnes' => '0000065', 'name' => 'eeeee'],
    ['cnes' => '5222710', 'name' => 'POLICLINICA DR JOSE LINS'],
    ['cnes' => '2018748', 'name' => 'POLICLINICA GOVERNADOR GILBERTO MESTRINHO'],
    ['cnes' => '3500179', 'name' => 'POLICLINICA JOAO BRAGA'],
            ['cnes' => '0000069', 'name' => 'eeeee'],
    ['cnes' => '3403394', 'name' => 'PONTESCLIN'],
    ['cnes' => '2018950', 'name' => 'PRODIMAGEM'],
    ['cnes' => '2018098', 'name' => 'SOCIEDADE BENEFICENTE PORTUGUESA'],
    ['cnes' => '2017873', 'name' => 'SPA ALVORADA'],
    ['cnes' => '2017687', 'name' => 'SPA COROADO'],
    ['cnes' => '3368599', 'name' => 'SPA ELIAMEME MADY'],
    ['cnes' => '2012766', 'name' => 'SPA JOVENTINA DIAS'],
    ['cnes' => '5084458', 'name' => 'SPA SAO RAIMUNDO'],
    ['cnes' => '2016435', 'name' => 'SPA ZONA SUL'],
    ['cnes' => '2012146', 'name' => 'VISOCLIN'],
    ['cnes' => '2018934', 'name' => 'VISOMED'],
    ['cnes' => '81', 'name' => 'SPA E POLICLÍNICA DR JOSÉ DE JESUS LINS DE ALBUQUERQUE'],
    ['cnes' => '82', 'name' => 'AMBULATORIO ARAUJO LIMA'],
            ['cnes' => '0000083', 'name' => 'eeeee'],
            ['cnes' => '0000084', 'name' => 'eeeee'],
            ['cnes' => '0000085', 'name' => 'eeeee'],
            ['cnes' => '0000086', 'name' => 'eeeee'],
            ['cnes' => '0000087', 'name' => 'eeeee'],
            ['cnes' => '0000088', 'name' => 'eeeee'],
            ['cnes' => '0000089', 'name' => 'eeeee'],
            ['cnes' => '0000090', 'name' => 'eeeee'],
    ['cnes' => '91', 'name' => 'LAURO SÉRGIO COSTA CALDERARO'],
    ['cnes' => '2019027', 'name' => 'CLÍNICA DE OLHOS DR. DAVID TAYAH'],
            ['cnes' => '0000093', 'name' => 'eeeee'],
            ['cnes' => '0000094', 'name' => 'eeeee'],
            ['cnes' => '0000095', 'name' => 'eeeee'],
    ['cnes' => '2019086', 'name' => 'JULIA HERRERA HOSPITAL DE OLHOS'],
    ['cnes' => '2019558', 'name' => 'MATERNIDADE BALBINA MESTRINHO'],
            ['cnes' => '0000098', 'name' => 'eeeee'],
            ['cnes' => '0000099', 'name' => 'eeeee'],
            ['cnes' => '0000100', 'name' => 'eeeee'],
    ['cnes' => '7058969', 'name' => 'CLINICA DE OLHOS'],
            ['cnes' => '0000102', 'name' => 'eeeee'],
            ['cnes' => '0000103', 'name' => 'eeeee'],
            ['cnes' => '0000104', 'name' => 'eeeee'],
    ['cnes' => '105', 'name' => 'UNIDADE MISTA DE MANACAPURU'],
    ['cnes' => '5257158', 'name' => 'PRONEFRO'],
    ['cnes' => '2012758', 'name' => 'SPA E POLICLINICA DANILO CORREA'],
    ['cnes' => '108', 'name' => 'INSTITUTO DE MEDICINA TROPICAL DE COARI'],
    ['cnes' => '2017865', 'name' => 'POLICLINICA DR. ANTÔNIO COMTE TELLES'],
    ['cnes' => '2017067', 'name' => 'POLICLINICA  DR. RAIMUNDO FRANCO DE SÁ'],
    ['cnes' => '5683874', 'name' => 'OTOCLIN'],
            ['cnes' => '0000112', 'name' => 'eeeee'],
    ['cnes' => '2012480', 'name' => 'MATERNIDADE DR. MOURA TAPAJÓZ'],
    ['cnes' => '2017318', 'name' => 'MATERNIDADE DONA NAZIRA DAOU'],
    ['cnes' => '3499359', 'name' => 'VISION - CLINICA DE OLHOS'],
    ['cnes' => '116', 'name' => 'CENTRO DE ATENÇÃO PSICOSSOCIAL SUL - CAPS SUL'],
    ['cnes' => '6627595', 'name' => 'INSTITUTO DA MULHER DONA LINDÚ'],
    ['cnes' => '7564546', 'name' => 'HOSPITAL ZONA NORTE - DELPHINA RINALDI ABDEL AZIZ'],
    ['cnes' => '9784195', 'name' => 'CENTRO DE VIDA INDEPENDENTE DO AMAZONAS - CVI-AM'],
    ['cnes' => '120', 'name' => 'CENTRO DE SAÚDE MENTAL DO AMAZONAS']

        ]);
    }
}
