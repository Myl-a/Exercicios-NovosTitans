<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio15Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // Teste automatizado
    public function Exercicio14test(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio15");
        $I->fillField("massaAtual", "9");
        $I->fillField("massaFinal", "0.9");
        $I->click('Calcular');
        $I->see('270');
        $I->seeInDatabase('Exercicio15', ['massaAtual' => '9']);
        $I->seeInDatabase('Exercicio15', ['tempo' => '270']);
    }
}