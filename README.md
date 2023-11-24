# ExerciciosPHP
<h1> Instruções </h1>

Certifique-se de ter os seguintes requisitos antes de executar os exercícios PHP: 
- PHP 8 instalado na sua máquina, digitando o seguinte comando no terminal: `php -v` se não tiver, você pode baixar e instalar o PHP 8 a partir do site oficial do PHP (https://www.php.net/downloads.php).

<h2> Para rodar os exercícios PHP, siga estes passos: </h2>

1- Clone o repositório do git na sua máquina (É necessário que o Git esteja instalado em seu computador) e navegue até o diretório raiz do seu projeto clonado.

```
2- Certifique-se de ter o Docker instalado em sua máquina. 
Você pode baixá-lo a partir do site oficial do Docker: https://www.docker.com/

3- Execute o seguinte comando no terminal, dentro do diretório raiz do seu projeto:
```
docker-compose up -d
```

4- Quando o ambiente estiver pronto, você pode acessar o código PHP em seu navegador em http://localhost:8181. 

5- No terminal, execute o seguinte comando para instalar as dependências do Composer: 
```
composer install
``` 
Isso irá baixar e instalar as dependências necessárias, incluindo o Codeception.

6- Execute o teste com o seguinte comando 
```
docker compose exec php-apache php vendor/bin/codecept run 
```
7- Para executar um teste específico, utilize o seguinte comando:
```
docker compose exec php-apache php vendor/bin/codecept run tests/Acceptance/nome_do_teste.php
```
 Certifique-se de que está na raiz do projeto ao executar o comando.

 <h2> Para acessar o banco de dados com o phpMyAdmin a partir do Exercício 10: </h2>

1- Importe o SQL para rodar o sistema e verifique se a extensão mysqli está habilitada no PHP. Você pode verificar isso verificando o arquivo php.ini do PHP.

2- Você pode acessar o banco em seu navegador: http://localhost:8585.

3- Utilize o servidor, o usuário e a senha configurada no arquivo `docker-compose.yml` para fazer login no phpMyAdmin.

4- Certifique-se de que o ambiente Docker esteja em execução antes de acessar o banco de dados. 
 