<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exericio15Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function FromExercicioTest(AcceptanceTester $I)
    {

        $I->amOnPage("/Exercicio15");

        $I->fillField("massaInicial", "9");
        $I->fillField("massaLimite", "0.9");
        $I->click('Calcular');
        $I->see('270');

        $I->seeInDatabase('exercicio15', ['massaInicial' => '9']);
        $I->seeInDatabase('exercicio15', ['tempo' => '270']);

    }
    public function FromListagem(AcceptanceTester $I)
    {

        $I->amOnPage("/Exercicio15");

        $I->click('Carregar Listagem');
        $I->amOnPage("/Exercicio15");
        $I->see('Massa Inicial: 9');
        $I->see('Massa Limite: 0.9');
        $I->see('Tempo: 270');


        
    }
}