<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionsSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            ['title' => 'Qual é a capital da França?', 'option_a' => 'Paris', 'option_b' => 'Londres', 'option_c' => 'Roma', 'option_d' => 'Madri', 'correct_option' => 'A'],
            ['title' => 'Quem foi o primeiro presidente do Brasil?', 'option_a' => 'Deodoro da Fonseca', 'option_b' => 'Getúlio Vargas', 'option_c' => 'Juscelino Kubitschek', 'option_d' => 'Dom Pedro II', 'correct_option' => 'A'],
            ['title' => 'Qual é o maior planeta do sistema solar?', 'option_a' => 'Júpiter', 'option_b' => 'Saturno', 'option_c' => 'Terra', 'option_d' => 'Marte', 'correct_option' => 'A'],
            ['title' => 'Qual é o continente mais populoso?', 'option_a' => 'Ásia', 'option_b' => 'África', 'option_c' => 'Europa', 'option_d' => 'América', 'correct_option' => 'A'],
            ['title' => 'Quem pintou a Mona Lisa?', 'option_a' => 'Leonardo da Vinci', 'option_b' => 'Pablo Picasso', 'option_c' => 'Vincent van Gogh', 'option_d' => 'Claude Monet', 'correct_option' => 'A'],
            ['title' => 'Qual é o maior oceano do mundo?', 'option_a' => 'Oceano Pacífico', 'option_b' => 'Oceano Atlântico', 'option_c' => 'Oceano Índico', 'option_d' => 'Oceano Ártico', 'correct_option' => 'A'],
            ['title' => 'Em que ano o homem pisou na Lua pela primeira vez?', 'option_a' => '1969', 'option_b' => '1972', 'option_c' => '1965', 'option_d' => '1959', 'correct_option' => 'A'],
            ['title' => 'Quem foi o autor de "Dom Quixote"?', 'option_a' => 'Miguel de Cervantes', 'option_b' => 'William Shakespeare', 'option_c' => 'Jorge Luis Borges', 'option_d' => 'José Saramago', 'correct_option' => 'A'],
            ['title' => 'Qual o nome da primeira mulher a ganhar o prêmio Nobel?', 'option_a' => 'Marie Curie', 'option_b' => 'Rosalind Franklin', 'option_c' => 'Ada Lovelace', 'option_d' => 'Elizabeth Blackwell', 'correct_option' => 'A'],
            ['title' => 'Qual é o país com maior área territorial do mundo?', 'option_a' => 'Rússia', 'option_b' => 'Canadá', 'option_c' => 'China', 'option_d' => 'Estados Unidos', 'correct_option' => 'A'],
            ['title' => 'Qual é o elemento químico representado pela sigla O?', 'option_a' => 'Oxigênio', 'option_b' => 'Osmium', 'option_c' => 'Ouro', 'option_d' => 'Ozônio', 'correct_option' => 'A'],
            ['title' => 'Quem descobriu a América?', 'option_a' => 'Cristóvão Colombo', 'option_b' => 'Vasco da Gama', 'option_c' => 'Pedro Álvares Cabral', 'option_d' => 'Américo Vespúcio', 'correct_option' => 'A'],
            ['title' => 'Qual é o nome do maior deserto do mundo?', 'option_a' => 'Deserto do Saara', 'option_b' => 'Deserto de Atacama', 'option_c' => 'Deserto de Gobi', 'option_d' => 'Deserto da Arábia', 'correct_option' => 'A'],
            ['title' => 'Em que cidade nasceu Albert Einstein?', 'option_a' => 'Ulm', 'option_b' => 'Berlim', 'option_c' => 'Zurique', 'option_d' => 'Viena', 'correct_option' => 'A'],
            ['title' => 'Qual é o nome do escritor de "Harry Potter"?', 'option_a' => 'J.K. Rowling', 'option_b' => 'George R.R. Martin', 'option_c' => 'J.R.R. Tolkien', 'option_d' => 'Suzanne Collins', 'correct_option' => 'A'],
            ['title' => 'Qual o nome do maior animal terrestre?', 'option_a' => 'Elefante Africano', 'option_b' => 'Girafa', 'option_c' => 'Rinoceronte', 'option_d' => 'Hipopótamo', 'correct_option' => 'A'],
            ['title' => 'Em que ano foi fundada a ONU?', 'option_a' => '1945', 'option_b' => '1939', 'option_c' => '1919', 'option_d' => '1951', 'correct_option' => 'A'],
            ['title' => 'Qual é o maior animal marinho?', 'option_a' => 'Baleia Azul', 'option_b' => 'Tubarão Branco', 'option_c' => 'Orca', 'option_d' => 'Manta Raya', 'correct_option' => 'A'],
            ['title' => 'Qual é o nome do famoso pintor espanhol, conhecido por sua obra surrealista?', 'option_a' => 'Salvador Dalí', 'option_b' => 'Pablo Picasso', 'option_c' => 'Diego Rivera', 'option_d' => 'Frida Kahlo', 'correct_option' => 'A'],
            ['title' => 'Quem foi o responsável pela teoria da evolução das espécies?', 'option_a' => 'Charles Darwin', 'option_b' => 'Galileo Galilei', 'option_c' => 'Isaac Newton', 'option_d' => 'Nikola Tesla', 'correct_option' => 'A'],
            ['title' => 'Em que continente está localizada a maioria das pirâmides?', 'option_a' => 'África', 'option_b' => 'Ásia', 'option_c' => 'Europa', 'option_d' => 'América', 'correct_option' => 'A'],
            ['title' => 'Qual é o maior rio do mundo?', 'option_a' => 'Rio Amazonas', 'option_b' => 'Rio Nilo', 'option_c' => 'Rio Yangtzé', 'option_d' => 'Rio Mississippi', 'correct_option' => 'A'],
            ['title' => 'Quantos estados tem o Brasil?', 'option_a' => '26', 'option_b' => '27', 'option_c' => '28', 'option_d' => '25', 'correct_option' => 'B'],
            ['title' => 'Qual é o nome da cidade mais populosa do Brasil?', 'option_a' => 'São Paulo', 'option_b' => 'Rio de Janeiro', 'option_c' => 'Salvador', 'option_d' => 'Brasília', 'correct_option' => 'A'],
            ['title' => 'Quem foi o líder da Revolução Francesa?', 'option_a' => 'Napoleão Bonaparte', 'option_b' => 'Maximilien Robespierre', 'option_c' => 'Louis XVI', 'option_d' => 'Joan of Arc', 'correct_option' => 'B'],
            ['title' => 'Qual é o planeta mais próximo do sol?', 'option_a' => 'Mercúrio', 'option_b' => 'Vênus', 'option_c' => 'Terra', 'option_d' => 'Marte', 'correct_option' => 'A'],
            ['title' => 'Em que país fica a cidade de Kyoto?', 'option_a' => 'Japão', 'option_b' => 'China', 'option_c' => 'Coreia do Sul', 'option_d' => 'Taiwan', 'correct_option' => 'A'],
            ['title' => 'Qual é o nome do maior estádio de futebol do Brasil?', 'option_a' => 'Maracanã', 'option_b' => 'Mineirão', 'option_c' => 'Arena Corinthians', 'option_d' => 'Morumbi', 'correct_option' => 'A'],
            ['title' => 'Qual o nome da maior montanha do mundo?', 'option_a' => 'Monte Everest', 'option_b' => 'K2', 'option_c' => 'Kangchenjunga', 'option_d' => 'Makalu', 'correct_option' => 'A'],
            ['title' => 'Qual é o maior animal terrestre?', 'option_a' => 'Elefante Africano', 'option_b' => 'Girafa', 'option_c' => 'Rinoceronte', 'option_d' => 'Hipopótamo', 'correct_option' => 'A'],
            ['title' => 'Qual é o menor país do mundo?', 'option_a' => 'Vaticano', 'option_b' => 'Mônaco', 'option_c' => 'San Marino', 'option_d' => 'Liechtenstein', 'correct_option' => 'A'],
            ['title' => 'Quem foi o autor de "O Pequeno Príncipe"?', 'option_a' => 'Antoine de Saint-Exupéry', 'option_b' => 'J.K. Rowling', 'option_c' => 'Mark Twain', 'option_d' => 'Ernest Hemingway', 'correct_option' => 'A'],
            ['title' => 'Qual é o nome da maior floresta tropical do mundo?', 'option_a' => 'Amazônia', 'option_b' => 'Congo', 'option_c' => 'Boreal', 'option_d' => 'Yangtze', 'correct_option' => 'A'],
            ['title' => 'Qual é o maior satélite natural da Terra?', 'option_a' => 'Lua', 'option_b' => 'Fobos', 'option_c' => 'Ío', 'option_d' => 'Europa', 'correct_option' => 'A'],
            ['title' => 'Qual é o principal gás responsável pelo efeito estufa?', 'option_a' => 'Dióxido de carbono (CO2)', 'option_b' => 'Oxigênio (O2)', 'option_c' => 'Metano (CH4)', 'option_d' => 'Hélio (He)', 'correct_option' => 'A'],
            ['title' => 'Quem escreveu "Cem Anos de Solidão"?', 'option_a' => 'Gabriel García Márquez', 'option_b' => 'Mario Vargas Llosa', 'option_c' => 'Pablo Neruda', 'option_d' => 'Jorge Luis Borges', 'correct_option' => 'A'],
            ['title' => 'Em que cidade se encontra a famosa Torre Eiffel?', 'option_a' => 'Paris', 'option_b' => 'Londres', 'option_c' => 'Roma', 'option_d' => 'Berlim', 'correct_option' => 'A'],
            ['title' => 'Qual é a maior ilha do mundo?', 'option_a' => 'Grã-Bretanha', 'option_b' => 'Groelândia', 'option_c' => 'Baffin', 'option_d' => 'Sumatra', 'correct_option' => 'B'],
            ['title' => 'Quem foi o líder da independência de Cuba?', 'option_a' => 'Fidel Castro', 'option_b' => 'Ernesto Guevara', 'option_c' => 'Simón Bolívar', 'option_d' => 'José Martí', 'correct_option' => 'A'],
            ['title' => 'Qual é o nome do maior rio da África?', 'option_a' => 'Rio Nilo', 'option_b' => 'Rio Congo', 'option_c' => 'Rio Zambeze', 'option_d' => 'Rio Limpopo', 'correct_option' => 'A'],
            ['title' => 'Qual é o maior satélite natural do Sistema Solar?', 'option_a' => 'Ganimedes', 'option_b' => 'Titan', 'option_c' => 'Io', 'option_d' => 'Lua', 'correct_option' => 'A']
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
