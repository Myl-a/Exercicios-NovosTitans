<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio9Cest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio9/index.php');
    }

    public function testImprimirPalavra(AcceptanceTester $I)
    {
        $I->fillField('numVezes', '3');
        $I->click('Imprimir');
        $I->seeElement('#resultado');
        $I->see('SOL SOL SOL', '#resultado');
    }

    public function testValorInvalido(AcceptanceTester $I)
    {
        $I->fillField('numVezes', 'abc');
        $I->click('Imprimir');
        $I->see('Por favor, insira um número válido.');
    }
}
