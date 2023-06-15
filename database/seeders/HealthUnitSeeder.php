<?php

namespace Database\Seeders;

use Carbon\Carbon;
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

            ['cnes' => '0000001', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '0000002', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '0000003', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '2013274', 'name' => 'FUNDAÇÃO HEMOAM', 'deleted_at' => null],
            ['cnes' => '0000005', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '0000006', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '2012677', 'name' => 'FUNDAÇÃO CECON', 'deleted_at' => null],
            ['cnes' => '2012685', 'name' => 'FUNDAÇÃO HOSPITAL ADRIANO JORGE', 'deleted_at' => null],
            ['cnes' => '3042626', 'name' => 'POLICLÍNICA ZENO LANZINI', 'deleted_at' => null],
            ['cnes' => '10', 'name' => 'CREPS', 'deleted_at' => null],
            ['cnes' => '0000011', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '2017210', 'name' => 'CAIC AFRANIO SOARES', 'deleted_at' => null],
            ['cnes' => '2011824', 'name' => 'CAIC ALBERTO CARREIRA', 'deleted_at' => null],
            ['cnes' => '2013525', 'name' => 'CAIC ALEXANDRE MONTORIL', 'deleted_at' => null],
            ['cnes' => '2018527', 'name' => 'CAIC ANA MARIA DOS SANTOS PEREIRA BRAGA (CAIC CORINA BATISTA)', 'deleted_at' => null],
            ['cnes' => '2018519', 'name' => 'CAIC DRA JOSEPHINA DE MELLO (CAIC CRISOLITA TORRES)', 'deleted_at' => null],
            ['cnes' => '2013738', 'name' => 'CAIC DR JOSE CONTENTE', 'deleted_at' => null],
            ['cnes' => '2013592', 'name' => 'CAIC DR MOURA TAPAJÓS', 'deleted_at' => null],
            ['cnes' => '2016982', 'name' => 'CAIC DRA MARIA HELENA FREITAS DE GOES (CAIC DR PAULO XEREZ)', 'deleted_at' => null],
            ['cnes' => '2018500', 'name' => 'CAIC EDSON MELO', 'deleted_at' => null],
            ['cnes' => '2011913', 'name' => 'CAIC GILSON MOREIRA', 'deleted_at' => null],
            ['cnes' => '2011840', 'name' => 'CAIC JOSE CARLOS MESTRINHO', 'deleted_at' => null],
            ['cnes' => '2018535', 'name' => 'CAIC RUBIM SA', 'deleted_at' => null],
            ['cnes' => '3212270', 'name' => 'CAIMI ADA RODRIGUES VIANA', 'deleted_at' => null],
            ['cnes' => '2012049', 'name' => 'CAIMI ANDRE ARAUJO', 'deleted_at' => null],
            ['cnes' => '2012057', 'name' => 'CAIMI PAULO LIMA', 'deleted_at' => null],
            ['cnes' => '2019434', 'name' => 'CDR - CENTRO DE DOENÇAS RENAIS', 'deleted_at' => null],
            ['cnes' => '2012162', 'name' => 'CEDOA - CENTRO DE DIAGNOSTICO OFTALMOLOGICO DO AM', 'deleted_at' => null],
            ['cnes' => '5010039', 'name' => 'CEDOF - CENTRO DIAGNOSTICO DE OTORRINOLARINGOLOGIA E FONOAUDIOLOGIA', 'deleted_at' => null],
            ['cnes' => '2017733', 'name' => 'CEFRAM - CENTRO DE FRATURA DO AMAZONAS', 'deleted_at' => null],
    ['cnes' => '2016206', 'name' => 'CENTRO MEDICO SAO BRAZ', 'deleted_at' => null],
    ['cnes' => '2012359', 'name' => 'CENTRO ORTOPEDICO ANA ROSA', 'deleted_at' => null],
    ['cnes' => '5075939', 'name' => 'CLINFIT - CLINFIT CLINICA INTENSIVA DE FISIOTERAPIA DO AMAZONAS LTDA', 'deleted_at' => null],
    ['cnes' => '3105490', 'name' => 'CLINICA DE OLHOS HARLEY STREET', 'deleted_at' => null],
    ['cnes' => '2012103', 'name' => 'CLINICA NOSSA SENHORA AUXILIADORA', 'deleted_at' => null],
            ['cnes' => '0000036', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
    ['cnes' => '2019345', 'name' => 'CLINICA RENAL DE MANAUS', 'deleted_at' => null],
            ['cnes' => '0000038', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
    ['cnes' => '2013606', 'name' => 'FUNDAÇÃO DE MEDICINA TROPICAL DO AM', 'deleted_at' => null],
    ['cnes' => '2012650', 'name' => 'FUNDAÇÃO ALFREDO DA MATTA', 'deleted_at' => null],
            ['cnes' => '0000041', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
    ['cnes' => '2017849', 'name' => 'HOSPITAL INFANTIL DR FAJARDO', 'deleted_at' => null],
    ['cnes' => '2018055', 'name' => 'HOSPITAL SANTA JULIA', 'deleted_at' => null],
    ['cnes' => '2013649', 'name' => 'HPS 28 DE AGOSTO', 'deleted_at' => null],
    ['cnes' => '5169976', 'name' => 'HPS DR ARISTOTELES PLATAO ARAUJO', 'deleted_at' => null],
    ['cnes' => '2019574', 'name' => 'HPS JOAO LUCIO', 'deleted_at' => null],
    ['cnes' => '2012030', 'name' => 'HPSC ZONA LESTE', 'deleted_at' => null],
    ['cnes' => '2018071', 'name' => 'HPSC ZONA OESTE', 'deleted_at' => null],
    ['cnes' => '2012472', 'name' => 'HPSC ZONA SUL', 'deleted_at' => null],
    ['cnes' => '2018403', 'name' => 'HOSPITAL UNIVERSITARIO FRANCISCA MENDES', 'deleted_at' => null],
    ['cnes' => '2017644', 'name' => 'HOSPITAL UNIVERSITARIO GETULIO VARGAS', 'deleted_at' => null],
    ['cnes' => '2017431', 'name' => 'ICAM', 'deleted_at' => null],
    ['cnes' => '2018969', 'name' => 'ICON INSTITUTO DE CIRURGIA OCULAR DO NORTE', 'deleted_at' => null],
    ['cnes' => '54', 'name' => 'IMAGEM CENTER', 'deleted_at' => null],
    ['cnes' => '55', 'name' => 'IOM', 'deleted_at' => null],
    ['cnes' => '56', 'name' => 'MANAUSMED', 'deleted_at' => null],
    ['cnes' => '2019078', 'name' => 'OFTALCLIN CLINICA OFTALMICA LTDA EPP', 'deleted_at' => null],
    ['cnes' => '2017776', 'name' => 'ONCOCLIN DE MANAUS LTDA', 'deleted_at' => null],
    ['cnes' => '2019124', 'name' => 'ORTOAM', 'deleted_at' => null],
    ['cnes' => '2019043', 'name' => 'ORTONORTE - CENTRO DE TRATAMENTO ORTOPEDICO LTDA', 'deleted_at' => null],
    ['cnes' => '2019159', 'name' => 'OTOCENTER - CENTRO DE DIAGNOSTICO OTORRINOLARINGOLOGICO LTDA', 'deleted_at' => null],
    ['cnes' => '3039285', 'name' => 'POLICLINICA ANTONIO ALEIXO', 'deleted_at' => null],
    ['cnes' => '2011883', 'name' => 'POLICLINICA CARDOSO FONTES', 'deleted_at' => null],
    ['cnes' => '2018756', 'name' => 'POLICLINICA CODAJAS', 'deleted_at' => null],
            ['cnes' => '0000065', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
    ['cnes' => '5222710', 'name' => 'POLICLINICA DR JOSE LINS', 'deleted_at' => null],
    ['cnes' => '2018748', 'name' => 'POLICLINICA GOVERNADOR GILBERTO MESTRINHO', 'deleted_at' => null],
    ['cnes' => '3500179', 'name' => 'POLICLINICA JOAO BRAGA', 'deleted_at' => null],
            ['cnes' => '0000069', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
    ['cnes' => '3403394', 'name' => 'PONTESCLIN', 'deleted_at' => null],
    ['cnes' => '2018950', 'name' => 'PRODIMAGEM', 'deleted_at' => null],
    ['cnes' => '2018098', 'name' => 'SOCIEDADE BENEFICENTE PORTUGUESA', 'deleted_at' => null],
    ['cnes' => '2017873', 'name' => 'SPA ALVORADA', 'deleted_at' => null],
    ['cnes' => '2017687', 'name' => 'SPA COROADO', 'deleted_at' => null],
    ['cnes' => '3368599', 'name' => 'SPA ELIAMEME MADY', 'deleted_at' => null],
    ['cnes' => '2012766', 'name' => 'SPA JOVENTINA DIAS', 'deleted_at' => null],
    ['cnes' => '5084458', 'name' => 'SPA SAO RAIMUNDO', 'deleted_at' => null],
    ['cnes' => '2016435', 'name' => 'SPA ZONA SUL', 'deleted_at' => null],
    ['cnes' => '2012146', 'name' => 'VISOCLIN', 'deleted_at' => null],
    ['cnes' => '2018934', 'name' => 'VISOMED', 'deleted_at' => null],
    ['cnes' => '81', 'name' => 'SPA E POLICLÍNICA DR JOSÉ DE JESUS LINS DE ALBUQUERQUE', 'deleted_at' => null],
    ['cnes' => '82', 'name' => 'AMBULATORIO ARAUJO LIMA', 'deleted_at' => null],
            ['cnes' => '0000083', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '0000084', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '0000085', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '0000086', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '0000087', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '0000088', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '0000089', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '0000090', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
    ['cnes' => '91', 'name' => 'LAURO SÉRGIO COSTA CALDERARO', 'deleted_at' => null],
    ['cnes' => '2019027', 'name' => 'CLÍNICA DE OLHOS DR. DAVID TAYAH', 'deleted_at' => null],
            ['cnes' => '0000093', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '0000094', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '0000095', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
    ['cnes' => '2019086', 'name' => 'JULIA HERRERA HOSPITAL DE OLHOS', 'deleted_at' => null],
    ['cnes' => '2019558', 'name' => 'MATERNIDADE BALBINA MESTRINHO', 'deleted_at' => null],
            ['cnes' => '0000098', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '0000099', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '0000100', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
    ['cnes' => '7058969', 'name' => 'CLINICA DE OLHOS', 'deleted_at' => null],
            ['cnes' => '0000102', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '0000103', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
            ['cnes' => '0000104', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
    ['cnes' => '105', 'name' => 'UNIDADE MISTA DE MANACAPURU', 'deleted_at' => null],
    ['cnes' => '5257158', 'name' => 'PRONEFRO', 'deleted_at' => null],
    ['cnes' => '2012758', 'name' => 'SPA E POLICLINICA DANILO CORREA', 'deleted_at' => null],
    ['cnes' => '108', 'name' => 'INSTITUTO DE MEDICINA TROPICAL DE COARI', 'deleted_at' => null],
    ['cnes' => '2017865', 'name' => 'POLICLINICA DR. ANTÔNIO COMTE TELLES', 'deleted_at' => null],
    ['cnes' => '2017067', 'name' => 'POLICLINICA  DR. RAIMUNDO FRANCO DE SÁ', 'deleted_at' => null],
    ['cnes' => '5683874', 'name' => 'OTOCLIN', 'deleted_at' => null],
            ['cnes' => '0000112', 'name' => 'eeeee', 'deleted_at' => Carbon::create(2023,1,1, 0, 0, 0, 'America/Manaus')],
    ['cnes' => '2012480', 'name' => 'MATERNIDADE DR. MOURA TAPAJÓZ', 'deleted_at' => null],
    ['cnes' => '2017318', 'name' => 'MATERNIDADE DONA NAZIRA DAOU', 'deleted_at' => null],
    ['cnes' => '3499359', 'name' => 'VISION - CLINICA DE OLHOS', 'deleted_at' => null],
    ['cnes' => '116', 'name' => 'CENTRO DE ATENÇÃO PSICOSSOCIAL SUL - CAPS SUL', 'deleted_at' => null],
    ['cnes' => '6627595', 'name' => 'INSTITUTO DA MULHER DONA LINDÚ', 'deleted_at' => null],
    ['cnes' => '7564546', 'name' => 'HOSPITAL ZONA NORTE - DELPHINA RINALDI ABDEL AZIZ', 'deleted_at' => null],
    ['cnes' => '9784195', 'name' => 'CENTRO DE VIDA INDEPENDENTE DO AMAZONAS - CVI-AM', 'deleted_at' => null],
    ['cnes' => '120', 'name' => 'CENTRO DE SAÚDE MENTAL DO AMAZONAS', 'deleted_at' => null]

        ]);
    }
}
