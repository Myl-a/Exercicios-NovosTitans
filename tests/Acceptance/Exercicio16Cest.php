<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio16Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function Exercicio16Test(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio16/form.html');

        $I->fillField("numeros", "3, 14, 27, 33, 42, 57, 66, 72, 88, 97, 109, 120, 131, 145, 159");
        $I->click('Verificar');
        $I->see("O número 3 é ímpar.O número 14 é par.O número 27 é impar.O número 33 é ímpar.O número 42 é par.O número 57 é ímpar.O número 66 é par.O número 72 é par.O número 88 é par.O número 97 é ímpar.O número 109 é impar.O número 120 é par.O número 131 é ímpar.O número 145 é ímpar.O número 159 é ímpar.");

        $I->seeInDatabase('Exercicio16', ['numeros' => '3, 14, 27, 33, 42, 57, 66, 72, 88, 97, 109, 120, 131, 145, 159', 'resposta' => 'O número 3 é ímpar.O número 14 é par.O número 27 é impar.O número 33 é ímpar.O número 42 é par.O número 57 é ímpar.O número 66 é par.O número 72 é par.O número 88 é par.O número 97 é ímpar.O número 109 é impar.O número 120 é par.O número 131 é ímpar.O número 145 é ímpar.O número 159 é ímpar.']);
        
    }
}