<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio20Cest
{
    public function _before(AcceptanceTester $I)
    {
    }
    public function FromExercicioTest(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio20");

        $I->fillField("matrix[0][0]", "2");
        $I->fillField("matrix[0][1]", "9");
        $I->fillField("matrix[0][2]", "56");
        $I->fillField("matrix[0][3]", "7");
        $I->fillField("matrix[0][4]", "1");

        $I->fillField("matrix[1][0]", "4");
        $I->fillField("matrix[1][1]", "4");
        $I->fillField("matrix[1][2]", "1");
        $I->fillField("matrix[1][3]", "6");
        $I->fillField("matrix[1][4]", "8");

        $I->fillField("matrix[2][0]", "58");
        $I->fillField("matrix[2][1]", "4");
        $I->fillField("matrix[2][2]", "3");
        $I->fillField("matrix[2][3]", "9");
        $I->fillField("matrix[2][4]", "11");

        $I->fillField("matrix[3][0]", "48");
        $I->fillField("matrix[3][1]", "2");
        $I->fillField("matrix[3][2]", "5");
        $I->fillField("matrix[3][3]", "15");
        $I->fillField("matrix[3][4]", "16");

        $I->fillField("matrix[4][0]", "4");
        $I->fillField("matrix[4][1]", "3");
        $I->fillField("matrix[4][2]", "9");
        $I->fillField("matrix[4][3]", "3");
        $I->fillField("matrix[4][4]", "5");

        $I->click('Enviar');

        $I->waitForText("2", 10, "table tr:nth-child(1) td:nth-child(1)");
        $I->waitForText("4", 10, "table tr:nth-child(2) td:nth-child(1)");
        $I->waitForText("9", 10, "table tr:nth-child(1) td:nth-child(2)");
        $I->waitForText("4", 10, "table tr:nth-child(2) td:nth-child(2)");

        $I->seeInDatabase("exercicio20", [
            "matriz" => "2, 9, 56, 7, 1, 4, 4, 1, 6, 8, 58, 4, 3, 9, 11, 48, 2, 5, 15, 16, 4, 3, 9, 3, 5",
            "pares" => "2, 56, 4, 4, 6, 8, 58, 4, 48, 2, 16, 4",
            "impares" => "9, 7, 1, 1, 3, 9, 11, 5, 15, 3, 9, 3, 5"
        ]);
    }

    public function FromListagem(AcceptanceTester $I)
    {
        $I->amOnPage("/Exercicio20");

        $I->click('#CarregarListagem');
        $I->waitForText('Matriz:', 10, '#listagem');
        $I->see('Matriz: 2, 9, 56, 7, 1, 4, 4, 1, 6, 8, 58, 4, 3, 9, 11, 48, 2, 5, 15, 16, 4, 3, 9, 3, 5', '#listagem');
        $I->see('Pares: 2, 56, 4, 4, 6, 8, 58, 4, 48, 2, 16, 4', '#listagem');
        $I->see('Ímpares: 9, 7, 1, 1, 3, 9, 11, 5, 15, 3, 9, 3, 5', '#listagem');
    }
}
