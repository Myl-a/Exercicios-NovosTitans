<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exericio10Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function FromExercicioTest(AcceptanceTester $I)
    {

        $I->amOnPage("/Exercicio10");

        $I->fillField("numeros", "10, 20, -1, -2, -6, -8, -1, -2, -6, -8, -1, -2, -6, -8, -1, -2, -6, -8, -1, -2");
        $I->click('Enviar');

        $I->see("Os números que você digitou: 10, 20, -1, -2, -6, -8, -1, -2, -6, -8, -1, -2, -6, -8, -1, -2, -6, -8, -1, -2");
        $I->see("A soma dos números positivos é: 30");
        $I->see("O total de números negativos é: 18");
    }
}