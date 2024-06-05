<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio19Cest
{
    public function _before(AcceptanceTester $I)
    {
        // Você pode realizar qualquer configuração necessária aqui
    }

    // testes
    public function FromExercicioTest(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio19");

        $I->fillField("matrix[0][0]", "3");
        $I->fillField("matrix[0][1]", "1");
        $I->fillField("matrix[0][2]", "4");
        $I->fillField("matrix[0][3]", "2");
        $I->fillField("matrix[0][4]", "7");

        $I->fillField("matrix[1][0]", "1");
        $I->fillField("matrix[1][1]", "20");
        $I->fillField("matrix[1][2]", "5");
        $I->fillField("matrix[1][3]", "3");
        $I->fillField("matrix[1][4]", "6");

        $I->fillField("matrix[2][0]", "4");
        $I->fillField("matrix[2][1]", "5");
        $I->fillField("matrix[2][2]", "15");
        $I->fillField("matrix[2][3]", "1");
        $I->fillField("matrix[2][4]", "8");

        $I->fillField("matrix[3][0]", "2");
        $I->fillField("matrix[3][1]", "3");
        $I->fillField("matrix[3][2]", "1");
        $I->fillField("matrix[3][3]", "10");
        $I->fillField("matrix[3][4]", "4");

        $I->fillField("matrix[4][0]", "7");
        $I->fillField("matrix[4][1]", "6");
        $I->fillField("matrix[4][2]", "8");
        $I->fillField("matrix[4][3]", "4");
        $I->fillField("matrix[4][4]", "12");

        $I->click('Enviar');

        $I->waitForElementChange('table', function () use ($I) {
            $I->see("3", "table tr:nth-child(1) td:nth-child(1)");
            $I->see("20", "table tr:nth-child(2) td:nth-child(2)");
            $I->see("15", "table tr:nth-child(3) td:nth-child(3)");
            $I->see("10", "table tr:nth-child(4) td:nth-child(4)");
            $I->see("12", "table tr:nth-child(5) td:nth-child(5)");
        }, 10);

        $I->seeInDatabase("Exercicio19", [
            "matriz" => "3, 1, 4, 2, 7, 1, 20, 5, 3, 6, 4, 5, 15, 1, 8, 2, 3, 1, 10, 4, 7, 6, 8, 4, 12",
            "diagonal" => "3, 20, 15, 10, 12"
        ]);
    }

    public function FromListagem(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio19");

        $I->click('Carregar Listagem');
        $I->amOnPage("/Exercicio19");

        $I->see('Matriz: 3, 1, 4, 2, 7, 1, 20, 5, 3, 6, 4, 5, 15, 1, 8, 2, 3, 1, 10, 4, 7, 6, 8, 4, 12');
        $I->see('Diagonal Principal: 3, 20, 15, 10, 12');
    }
}
