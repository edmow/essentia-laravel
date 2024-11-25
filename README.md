Etapas 
-Criando o projeto com => composer create-project laravel/laravel cadastro-clientes
-Descomentado linhas do banco .env
-Criado modelo cliente => php artisan make:model Cliente -m
-Criado controller => php artisan make:controller ClienteController
-Alterado ClienteController
-Criado as rotas web.php
-Criado as views 

Utilizado a documentação e stack overflow
Tempo de execução: 04:00

Tabela: clientes
+-------------+-----------------+-----------+
| Atributo    | Tipo            | Restrição |
+-------------+-----------------+-----------+
| id          | bigint          | PK        |
| nome        | varchar(255)    | NOT NULL  |
| email       | varchar(255)    | UNIQUE    |
| telefone    | varchar(15)     | NOT NULL  |
| foto        | varchar(255)    | NULL      |
| created_at  | timestamp       | NULL      |
| updated_at  | timestamp       | NULL      |
+-------------+-----------------+-----------+

Resumo:
-Framework: Laravel
-Banco de Dados: MySQL
-Funcionalidades: Cadastro, listagem, edição, exclusão de clientes.

Passos para Executar:
-Clone o repositório.
-Execute composer install e npm install.
-Configure o .env com as credenciais do banco.
-Execute as migrations com php artisan migrate.
-Suba o servidor com php artisan serve.