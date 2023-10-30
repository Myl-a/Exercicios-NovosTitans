<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio6Cest
{
    public function _before(AcceptanceTester $I)
    {/**Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja
         * fora desse intervalo, informar que não existe mês com este número */
    }

    // tests
    public function TitleExercicio6Test(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio6");
        $I->seeInTitle("Consulta de Mês");
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

        for ($numero = 1; $numero <= 12; $numero++) {
            $I->fillField('num', $numero);
            $I->click('Consultar');

            $meses = $meses[$numero];
            $I->see("O número $numero corresponde ao mês de $meses.");
        }
    }

    public function VerificarExercicio6Test(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio6');
        $I->fillField('num','15');
        $I->click('Consultar');
        $I->see('Não existe mês correspondente para o número informado.');
    }
}
