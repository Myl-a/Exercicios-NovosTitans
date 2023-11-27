<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio11Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function Exercicio11Test(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio11');

        $I->fillField("numero", "3");
        $I->click('Enviar');
        $I->see("Tabuada do número: 3");
        $I->see("3 X 1 = 3");
        $I->see("3 X 2 = 6");
        $I->see("3 X 3 = 9");
        $I->see("3 X 4 = 12");
        $I->see("3 X 5 = 15");
        $I->see("3 X 6 = 18");
        $I->see("3 X 7 = 21");
        $I->see("3 X 8 = 24");
        $I->see("3 X 9 = 27");
        $I->see("3 X 10 = 30");


        $I->amOnPage('/Exercicio11');

        $I->fillField("numero", "5");
        $I->click('Enviar');
        $I->see("Tabuada do número: 5");
        $I->see("5 X 1 = 5");
        $I->see("5 X 2 = 10");
        $I->see("5 X 3 = 15");
        $I->see("5 X 4 = 20");
        $I->see("5 X 5 = 25");
        $I->see("5 X 6 = 30");
        $I->see("5 X 7 = 35");
        $I->see("5 X 8 = 40");
        $I->see("5 X 9 = 45");
        $I->see("5 X 10 = 50");
     }
}