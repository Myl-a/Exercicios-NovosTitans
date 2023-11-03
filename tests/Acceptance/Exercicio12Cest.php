<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio12Cest
{
    public function _before(AcceptanceTester $I)
    {
    }
    public function Exercicio12test(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio12");
        $palavra = "Test";
        $I->fillField("palavra", $palavra);
        $I->click('Imprimir');
        for ($x = 1; $x <= 4; $x++) {
            for ($y = 1; $y <= $x; $y++) {
                $I->see($palavra);
            }
            $I->seeInSource('<br>');
        }
        $I->see("Voltar");
    }
}
