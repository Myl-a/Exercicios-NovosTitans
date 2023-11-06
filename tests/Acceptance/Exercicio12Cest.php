<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio12Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // Teste automatizado
    public function Exercicio12test(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio12");
        $I->see("Repetir Palavra");

        $palavra = "Test";
        $repeticoes = 4;

        $I->fillField("palavra", $palavra);
        $I->fillField("repeticoes", $repeticoes);
        $I->click('Repetir');

        $I->see('Test');
        $I->see('TestTest'); 
        $I->see('TestTestTest'); 
        $I->see('TestTestTestTest');
    }
}
