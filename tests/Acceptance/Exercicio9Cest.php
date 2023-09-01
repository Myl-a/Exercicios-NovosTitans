<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio9Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function TitleExercicio9Test(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio9/form.html');
        $I->fillField('countRepeat', '3');
        $I->click('Imprimir');
        $I->see("SOL");
        $I->see("SOL");
        $I->see("SOL");

        $I->amOnPage('/Exercicio9/form.html');
        $I->fillField('countRepeat', 'abc');
        $I->click('Imprimir');
        $I->see("Por favor, insira um número válido.");

    }
}
