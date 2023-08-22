<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio8Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function Exercicio8Test(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio8');
        $I->fillField('countRepeat', '3');
        $I->click('Enviar');
        $I->see("SOL");
        $I->see("SOL");
        $I->see("SOL");
        $I->amOnPage('/Exercicio9/form.html');
        $I->fillField('countRepeat', 'abc');
        $I->click('Enviar');
        $I->see("Por favor, insira um número válido.");
    }
}
