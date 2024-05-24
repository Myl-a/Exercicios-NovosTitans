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
        $I->amOnPage('/Exercicio16');

        $I->fillField("numeros", "3,6,10,5,7,9,8,1,4,25,16,13,17,89,15");
        $I->click('Enviar');
        $I->see("O número 3 é ímpar.O número 6 é par.O número 10 é par.O número 5 é ímpar.O número 7 é ímpar.O número 9 é ímpar.O número 8 é par.O número 1 é ímpar.O número 4 é par.O número 25 é ímpar.O número 16 é par.O número 13 é ímpar.O número 17 é ímpar.O número 89 é ímpar.O número 15 é ímpar.");

        $I->seeInDatabase('exercicio16', ['numeros' => '3,6,10,5,7,9,8,1,4,25,16,13,17,89,15', 'resposta' => 'O número 3 é ímpar.<br>O número 6 é par.<br>O número 10 é par.<br>O número 5 é ímpar.<br>O número 7 é ímpar.<br>O número 9 é ímpar.<br>O número 8 é par.<br>O número 1 é ímpar.<br>O número 4 é par.<br>O número 25 é ímpar.<br>O número 16 é par.<br>O número 13 é ímpar.<br>O número 17 é ímpar.<br>O número 89 é ímpar.<br>O número 15 é ímpar.<br>']);
        
    }
}