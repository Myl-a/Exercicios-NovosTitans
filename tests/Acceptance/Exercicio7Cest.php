<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio7Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function TitleExercicio7Test(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio7');
        $I->seeInTitle('Biblioteca Universitária');
        $I->see('Biblioteca Universitária', 'h1');
    }

    public function FormExercicio7Test(AcceptanceTester $I)
    {
        $I->amOnPage('/Exercicio7');
        $I->fillField('book-name', 'livro');
        $I->selectOption('user-type', 'tipoUsuario');
        $I->click('Gerar Recibo');
        $I->see('Recibo gerado com sucesso');

    }
}
