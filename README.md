git clone https://github.com/daniel47899/quiz-api.git
Passo 2: Instalar as dependências
Entre na pasta do projeto e instale as dependências utilizando o Composer:

bash
Copiar código
cd quiz-api
composer install
Passo 3: Configurar o banco de dados
O projeto utiliza o SQLite como banco de dados, portanto, você não precisa de uma instalação de MySQL. O banco de dados será armazenado no arquivo database/database.sqlite.

Crie o arquivo do banco de dados:

bash
Copiar código
touch database/database.sqlite
No arquivo .env, configure o banco de dados para utilizar SQLite:

ini
Copiar código
DB_CONNECTION=sqlite
DB_DATABASE=/caminho/para/o/seu/projeto/database/database.sqlite
Passo 4: Configuração das Migrations e Seeders
Agora, vamos rodar as migrations para criar as tabelas necessárias no banco de dados.

Execute o seguinte comando para rodar as migrations:

bash
Copiar código
php artisan migrate
Após as migrations, podemos rodar os seeders para popular o banco com algumas questões para o quiz:

bash
Copiar código
php artisan db:seed --class=QuestionsSeeder
Passo 5: Gerar a chave de autenticação
Para usar o Laravel Sanctum para autenticação via tokens, você precisará gerar a chave da API:

bash
Copiar código
php artisan key:generate
Passo 6: Servir a aplicação
Agora, você pode rodar o servidor local utilizando o comando do Artisan:

bash
Copiar código
php artisan serve
