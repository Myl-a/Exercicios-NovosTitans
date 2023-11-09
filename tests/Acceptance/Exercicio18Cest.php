<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio18Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function Exercicio18Test(AcceptanceTester $I)
    {

        $I->amOnPage("/Exercicio18");

        $I->fillField("numeros", "36, 21, 49, 11, 67, 8, 55, 30, 72, 44");
        $I->fillField("numeros2", "3, 27, 50, 14, 62, 18, 41, 77, 5, 29");
        $I->click('Enviar');

        $I->see("Números não comuns aos dois vetores: 36, 21, 49, 11, 67, 8, 55, 30, 72, 44, 3, 27, 50, 14, 62, 18, 41, 77, 5, 29");

    }
}
