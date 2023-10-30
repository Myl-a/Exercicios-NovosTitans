<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio8Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio8');

        // Test input with a valid value (e.g., 5)
        $I->fillField('inputNumber', '5');
        $I->click('Calcular');
        $I->see('Números de 1 até 5:');
        $I->see('Produto dos números: 120');

        // Test input with an invalid value (e.g., 0)
        $I->fillField('inputNumber', '0');
        $I->click('Calcular');
        $I->see('Por favor, insira um número válido maior ou igual a 1.');
    }
}
