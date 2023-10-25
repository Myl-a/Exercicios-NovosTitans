<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio9Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    
    public function testImprimirPalavra(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio9/index.php');
        $I->fillField('numVezes', '3');
        $I->click('Imprimir');
        $I->waitForElement('#resultado', 10);
        $I->see('SOL SOL SOL', '#resultado');
    }
    public function testValorInvalido(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio9/index.php');
        $I->see('Imprimir a palavra SOL');
        $I->fillField('numVezes', 'abc');
        $I->click('Imprimir');
        $I->waitForText("Por favor, insira um número válido.", 10);
    }
}