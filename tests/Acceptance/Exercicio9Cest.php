<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class Exercicio9Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function testImprimirResultado(AcceptanceTester $I)
    {
        // Acessa a página do formulário
        $I->amOnPage('/Exercicio9/index.php');
    
        // Preenche o campo com um número válido (por exemplo, 3)
        $I->fillField('numVezes', '3');
    
        // Submete o formulário clicando no botão "Imprimir"
        $I->click('Imprimir');
    
        // Aguarda até que o elemento com ID "resultado" esteja presente
        $timeout = 10; // Defina um limite de tempo máximo em segundos
        $start = time();
    
        while (time() - $start < $timeout) {
            if ($I->seeElement('#resultado')) {
                break;
            }
            sleep(1); // Espera 1 segundo antes de verificar novamente
        }
    
        // Verifica se o texto "SOL SOL SOL" está presente na página
        $I->see('SOL SOL SOL', '#resultado');
    }
    
    
    // Teste para inserir um valor não numérico
    public function testValorInvalido(AcceptanceTester $I)
    {
    $I->amOnPage('/Exercicio9/index.php');
    $I->see('Imprimir a palavra SOL');
    $I->fillField('numVezes', 'abc');
    $I->click('Imprimir');
    $I->see("Por favor, insira um número válido.");

    }
}
