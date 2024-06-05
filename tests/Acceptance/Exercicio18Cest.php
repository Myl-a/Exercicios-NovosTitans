<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio18Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // testes
    public function Exercicio18Test(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio18");

        $I->fillField("numeros", "36, 21, 49, 11, 67, 8, 55, 30, 72, 44");
        $I->fillField("numeros2", "3, 27, 50, 14, 62, 18, 41, 77, 5, 29");
        $I->click('Enviar');

        $I->see("Números não comuns aos dois vetores: 36, 21, 49, 11, 67, 8, 55, 30, 72, 44, 3, 27, 50, 14, 62, 18, 41, 77, 5, 29");

        $I->seeInDatabase('exercicio18', [
            'numeros' => '36, 21, 49, 11, 67, 8, 55, 30, 72, 44',
            'numeros2' => '3, 27, 50, 14, 62, 18, 41, 77, 5, 29',
            'resultado' => '36, 21, 49, 11, 67, 8, 55, 30, 72, 44, 3, 27, 50, 14, 62, 18, 41, 77, 5, 29'
        ]);
    }

    public function FromListagem(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio18");

        $I->click('Carregar Listagem');
        $I->amOnPage("/Exercicio18");

        $I->see('Números: 36, 21, 49, 11, 67, 8, 55, 30, 72, 44');
        $I->see('Números2: 3, 27, 50, 14, 62, 18, 41, 77, 5, 29');
        $I->see('Resultado: 36, 21, 49, 11, 67, 8, 55, 30, 72, 44, 3, 27, 50, 14, 62, 18, 41, 77, 5, 29');
    }
}
