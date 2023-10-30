<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio6Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function TitleExercicio6Test(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio6");
        $I->seeInTitle("Consulta de Mês"); // Update the expected title
    }
    public function FormExercicio6Test(AcceptanceTester $I)
    {  
        $I->amOnPage('/Exercicio6');
        $meses = [
            1 => 'janeiro',
            2 => 'fevereiro',
            3 => 'março',
            4 => 'abril',
            5 => 'maio',
            6 => 'junho',
            7 => 'julho',
            8 => 'agosto',
            9 => 'setembro',
            10 => 'outubro',
            11 => 'novembro',
            12 => 'dezembro'
        ];
        for ($num = 1; $num <= 12; $num++) {
            $I->fillField('#numeroMes', $num);
            $I->click('Consultar');
            $mes = $meses[$num];
            $I->see("O número $num corresponde ao mês de $mes.");
        }
    }
    public function VerificarExercicio6Test(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio6');
        $I->fillField('#numeroMes', '15');
        $I->click('Consultar');
        $I->see('Não existe mês com o número 15.');
    }



}