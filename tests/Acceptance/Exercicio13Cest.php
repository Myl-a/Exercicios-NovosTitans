<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio13Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // Teste automatizado
    public function Exercicio13(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio13');
        $I->fillField('number', '165');
        $I->click('Contar');
        $I->see("Foi digitado 1 número entre 100 e 200.");


        $I->amOnPage('/Exercicio13');
        $I->fillField('number', '');
        $I->click('Contar');
        $I->see("Por favor, insira um número válido.");
    }
}
