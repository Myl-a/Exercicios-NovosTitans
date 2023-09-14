<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio10Cest
{
    public function _before(AcceptanceTester $I)
    {
    }
        public function TitleExercicio10Test(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio10');
        $I->seeInTitle('Calculadora de Soma de Números');
        $I->see('Calculadora de Soma de Números', 'h2');
    }
    public function testExibirCalculadora(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio10');
        $I->see('Calculadora de Soma de Números', 'h2');
        $I->seeElement('input[name="inputNumbers"]');
        $I->seeElement('button[type="submit"]');
    }

    public function testCalcularSoma(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio10');
        // Preencher o campo de entrada com números
        $I->fillField('inputNumbers', '1,2,3,4,5,-1,-2,-3,-4,-5');

        // Enviar o formulário
        $I->click('Calcular');

        // Verificar os resultados
        $I->see('Total de números negativos: 5');
        $I->see('Soma dos números positivos: 15');
    }
}
