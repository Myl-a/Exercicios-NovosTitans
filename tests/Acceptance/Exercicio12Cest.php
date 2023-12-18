<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exericio12Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // Teste
    public function FormExercicioTest(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio12");
        $I->fillField("palavra", 'Teste');
        $I->click('Imprimir');
        codecept_debug($I->grabTextFrom('body'));
    
        $I->see('Teste');
        $I->see('Teste Teste');
        $I->see('Teste Teste Teste');
        $I->see('Teste Teste Teste Teste');
    }    
}
