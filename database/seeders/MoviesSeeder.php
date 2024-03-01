<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MoviesSeeder extends Seeder
{

    protected $movies = [
        [
            'title' => 'Vingadores a era de ultron',
            'description' => 'Loki, o irmão de Thor, ganha acesso ao poder ilimitado do cubo cósmico ao roubá-lo de dentro das instalações da S.H.I.E.L.D. Nick Fury, o diretor desta agência internacional que mantém a paz, logo reúne os únicos super-heróis que serão capazes de defender a Terra de ameaças sem precedentes. Homem de Ferro, Capitão América, Hulk, Thor, Viúva Negra e Gavião Arqueiro formam o time dos sonhos de Fury, mas eles precisam aprender a colocar os egos de lado e agir como um grupo em prol da humanidade.',
            'banner_link' => 'https://img.elo7.com.br/product/zoom/265F251/big-poster-filme-vingadores-era-de-ultron-lo01-tam-90x60-cm-presente-geek.jpg',
            'duration' => '02:12',
        ],
        [
            'title' => 'Aventuras de pi',
            'description' => 'Pi e sua família decidem ir para o Canadá depois de fechar o zoológico da família. A embarcação deles naufraga, e o jovem sobrevive junto com alguns animais, incluindo um temível tigre de Bengala, com o qual desenvolve uma ligação.',
            'banner_link' => 'https://computacaograficaecinema.files.wordpress.com/2013/02/as-aventuras-de-pi-cartaz.jpg',
            'duration' => '02:58',
        ],
        [
            'title' => 'Velozes e furiosos 2',
            'description' => 'Brian OConner é um policial que se infiltra no submundo dos rachas de rua para investigar uma série de furtos. Enquanto tenta ganhar o respeito e a confiança do líder Dom Toretto, ele corre o risco de ser desmascarado.',
            'banner_link' => 'https://img.elo7.com.br/product/main/268D913/big-poster-velozes-e-furiosos-lo02-tamanho-90x60-cm-poster-de-filme.jpg',
            'duration' => '01:49',
        ],
        [
            'title' => 'Transformers',
            'description' => 'O destino da humanidade está em jogo quando duas raças de robôs, os Autobots e os vilões Decepticons, chegam à Terra. Os robôs possuem a capacidade de se transformarem em diferentes objetos mecânicos enquanto buscam a chave do poder supremo com a ajuda do jovem Sam.',
            'banner_link' => 'https://http2.mlstatic.com/D_NQ_NP_803908-MLB69811882197_062023-O.webp',
            'duration' => '03:09',
        ],
        [
            'title' => 'A espera de um milagre',
            'description' => 'Um carcereiro tem um relacionamento incomum e comovente com um preso que está no corredor na morte: Coffey, um negro enorme, condenado por ter matado brutalmente duas gêmeas de nove anos. Ele tem tamanho e força para matar qualquer um, mas seu comportamento é completamente oposto à sua aparência. Além de ser simples, ingênuo e ter pavor do escuro, ele possui um dom sobrenatural. Com o passar do tempo, o carcereiro aprende que, às vezes, os milagres acontecem nos lugares mais inesperados.',
            'banner_link' => 'https://br.web.img2.acsta.net/medias/nmedia/18/91/66/66/20156966.jpg',
            'duration' => '03:19',
        ],
    ];

    public function run(): void
    {
        // Generate 50 movies
        for ($i = 0; $i < 50; $i++) {
            Movie::create([
                'title' => $this->movies[$i % 5]['title'] . " - " . $i,
                'description' => $this->movies[$i % 5]['description'],
                'duration' => $this->movies[$i % 5]['duration'],
                'banner_link' => $this->movies[$i % 5]['banner_link'],
            ]);
        }
    }
}
