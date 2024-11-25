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