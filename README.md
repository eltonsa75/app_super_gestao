Configuração do Ambiente

Banco de dados Mysql
Rodas as migrate
rodar a class MotivoContatoSeeder
comando = php artisan db:seed --class=MotivoContatoSeeder




Desenvolvimento Web Avançado 2022 com PHP, Laravel e Vue.JS

Configurar o ambiente de desenvolvimento nos sistemas operacionais Windows, Linux Ubuntu e OSX.
Trabalhar com rotas, grupos e com os verbos HTTP Get, Post, Delete, Put e Patch.
Trabalhar com o motor de renderização de views Blade
Trabalhar com o desenvolvimento incremental de bancos de dados relacionais utilizando Migrations
Criar Seeders e Factories para popular tabelas
Trabalhar com o console Tinker
Como manipular e validar formulários
Como interceptar requisições e respostas utilizando Middlewares
Como implementar as operações CRUD utilizando o Eloquent ORM
Como implementar autenticação por Session e Token (JWT)
Como lidar com o padrão de arquitetura MVC (Model, View e Controller)
Como exportar arquivos nos formatos XLSX, CSV e PDF
Como enviar e-mails
Construir APIs Webservices REST
Dominar os principais recursos do framework Laravel
Como combinar os frameworks Bootstrap (CSS) e Laravel
Como combinar os frameworks VueJS e Laravel
Como combinar o Laravel com o banco de dados Redis para armazenamento de dados em memória (cache)
Como desenvolver projetos web de forma rápida e estruturada


=============================================================================================================

Controller

index() => Exibir lista de registros
create() => Exibir formulário de criação do registro
store() => Receber formulário de criação do registro
show() => Exibir registro especifico
edit() => Exibir formulário de edição do registro
update() => Receber formulário de ediçao do registro
destroy() => Receber dados para remoção d registro

php artisan make:controller --resource ProdutoController --model=Produto
