Passos para Configuração
Passo 1: Clonar o Repositório

Clone o repositório para o seu diretório local utilizando o Git:

git clone https://github.com/daniel47899/quiz-api.git

Passo 2: Instalar as Dependências

Entre na pasta do projeto e instale as dependências utilizando o Composer:

cd quiz-api
composer install

Passo 3: Configurar o Banco de Dados

Crie o arquivo de banco de dados:

New-Item -Path "database/database.sqlite" -ItemType File
OU
touch database/database.sqlite

Passo 4: Configurar Migrations e Seeders

Execute as migrations para criar as tabelas necessárias no banco de dados.

Rodar as migrations:

php artisan migrate

Após as migrations, rode os seeders para popular o banco com algumas questões de exemplo:

php artisan db:seed --class=QuestionsSeeder

Passo 5: Gerar a Chave de Autenticação

Este projeto utiliza Laravel Sanctum para autenticação via tokens. Para gerar a chave da API, execute:

cp .env.example .env

php artisan key:generate

Passo 6: Servir a Aplicação

Agora você pode rodar o servidor local utilizando o comando do Artisan:

php artisan serve
