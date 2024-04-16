<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio14Cest
{
    public function _before(AcceptanceTester $I)
    {
    }
    public function Exercicio14Test(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio14");
        $I->fillField("alturaChico", "150");
        $I->fillField("crescimentoChico", "2");
        $I->fillField("alturaJuca", "110");
        $I->fillField("crescimentoJuca", "3");
        $I->click('Calcular');
        $I->see("Serão necessários 41 anos para que Juca seja maior do que Chico.");
        $I->see('Listagem dos anos e alturas:');
        $I->see('Ano: 1 - Altura Chico: 152cm - Altura Juca: 113cm');
        $I->see('Ano: 2 - Altura Chico: 154cm - Altura Juca: 116cm');
        $I->see('Ano: 3 - Altura Chico: 156cm - Altura Juca: 119cm');
        $I->amOnPage("/Exercicio14");
    }
}
