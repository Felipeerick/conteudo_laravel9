# Comandos Laravel

 - php artisan serve

- sobe o servidor;
----------------------------
- php artisan optimize

- limpa o cache do sistema;
-----------------------------------
- php artisan make:controller nomeDoController

- Cria o controller;
-------------------------------------------
- php artisan make:migration nomeDaMigra��o 

- cria uma migra��o;
----------------------------------------
- php artisan migrate

- sobe as migra��es criadas para o banco de dados previamente configurado no arquivo .env;
--------------------------------------------------------------------------------------------
- php artisan db:seed

- vai popular ou preencher as informa��es no banco de dados;
------------------------------------------------------------------------------------------
- php artisan make:factory

- cria a 'fabrica dos semeadores';
------------------------------------------------------------------------------------------
- php artisan make:model

 cria o model;
------------------------------------------------------------------------------------------
- php artisan make:seeder nomeDoSemeador

<<<<<<< HEAD
cria o 'semeador', aquele que vai popular a tabela;
------------------------------------------------------------------------------------------
- php artisan make:request nomeDoArquivo

cria um arquivo de validação de formulário.
------------------------------------------------------------------------------------------------
- php artisan make:seed NomeDoSeed

- cria o 'semeador', aquele que vai popular a tabela;
------------------------------------------------------------------------------------------
- php artisa make:request nomeDoRequest

- cria a pasta e o arquivo request
-----------------------------------------------------------------------------------------
- php artisan migrate:fresh

- apaga e sobe todas as migrates
-----------------------------------------------------------------------------------------------
- php artisan migrate:rollback

- dropa a migrate
------------------------------------------------------------------------------------------------
- php artisan storage:link

- gerar um link da pasta storage;
------------------------------------------------------------------------------------------------
- php artisan vendor:publish --tag=laravel-errors

- Traz todas as views de erro para personalizar;
------------------------------------------------------------------------------------------------
- php artisan queue:table

- Cria a tabela de jobs;
------------------------------------------------------------------------------------------------
- php artisan storage:link

- cria o link da pasta storage
------------------------------------------------------------------------------------------------
- php artisan queue:work

- coloca o jobs para trabalhar
------------------------------------------------------------------------------------------------
- php artisan make:mail NomeDoEmail

- Cria uma pasta com um arquivo de envio de email dentro
------------------------------------------------------------------------------------------------
- php artisan make:component NomeDoComponente

- Cria um componente no blade para reaproveitar
------------------------------------------------------------------------------------------------

