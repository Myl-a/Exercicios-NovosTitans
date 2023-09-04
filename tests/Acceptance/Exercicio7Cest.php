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
        $I->selectOption('user-type', 'aluno');
        $I->click('Gerar Recibo');
        $I->see("Recibo de Empréstimo");
        $I->see("Livro: livro");
        $I->see("Tipo de Usuário: aluno");
        $expectedReturnDate = date('d-m-Y', strtotime("+3 days"));
        $I->see("Data de Devolução: $expectedReturnDate");
        $I->click('Voltar para a Página Inicial');
        $I->amOnPage('/Exercicio7');
        $I->see("Biblioteca Universitária");
}


}
