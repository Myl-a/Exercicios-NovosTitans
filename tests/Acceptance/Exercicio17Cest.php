<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio17Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function Exercicio17Test(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio17');

        $I->fillField("#Vetor1", "42");
        $I->fillField("#Vetor2", "17");
        $I->fillField("#Vetor3", "88");
        $I->fillField("#Vetor4", "56");
        $I->fillField("#Vetor5", "29");
        $I->fillField("#Vetor6", "63");
        $I->fillField("#Vetor7", "11");
        $I->fillField("#Vetor8", "70");
        $I->fillField("#Vetor9", "3");
        $I->fillField("#Vetor10", "95");
        $I->fillField("#Vetor11", "7");
        $I->fillField("#Vetor12", "50");
        $I->fillField("#Vetor13", "68");
        $I->fillField("#Vetor14", "25");
        $I->fillField("#Vetor15", "81");
        $I->fillField("#Vetor16", "37");
        $I->fillField("#Vetor17", "14");
        $I->fillField("#Vetor18", "47");
        $I->fillField("#Vetor19", "6");
        $I->fillField("#Vetor20", "72");

        $I->click('Enviar');

        $I->see("Maior valor: 95Menor valor: 3Percentual de números Pares: 45%Média dos elementos: 44.05");
    }

    public function Exercicio17Listagem(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio17');

        $I->click('Carregar Listagem');
        $I->amOnPage("/Exercicio17/listagem.php");
        $I->see('Vetor: 42, 17, 88, 56, 29, 63, 11, 70, 3, 95, 7, 50, 68, 25, 81, 37, 14, 47, 6, 72');
        $I->see('Maior valor: 95');
        $I->see('Menor valor: 3');
        $I->see('Média: 44');
        $I->see('Percentual de Pares: 45 %');
    }
}