<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio14Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // Teste automatizado
    public function Exercicio14test(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio14");
        $I->fillField("alturaChico", "150");
        $I->fillField("crescimentoChico", "2");
        $I->fillField("alturaJuca", "110");
        $I->fillField("crescimentoJuca", "3");
        $I->click('Calcular');
        $I->see("Serão necessários 41 anos para que Juca seja maior do que Chico.");
    }
}
