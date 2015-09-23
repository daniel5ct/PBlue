<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class NewsletterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('newsletter')->insert([
            'title' => 'Football',
            'introduction' => 'Argentina knock Germany off top spot',
            'body' => 'Argentina are the new leaders of the FIFA CocaCola World Ranking. Despite losing to Chile on penalties in the final of the Copa America, the Albiceleste have leapfrogged over Belgium and Germany to take the top spot in the world ranking for the first time in seven years. Meanwhile the newly crowned South American champions Chile have moved up eight positions, only just missing out on a top-ten ranking at number 11',
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
        ]);

        DB::table('newsletter')->insert([
            'title' => 'Promocoes',
            'introduction' => 'Promocoes desta semana',
            'body' => 'Esta semana aproveite o desconto em todos os artigos de higiene. Temos para si tambem um desconto de 40% em todo o peixe fresco e 50% de desconto em toda a carne de porco. Nao perca!',
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
        ]);

        DB::table('newsletter')->insert([
            'title' => 'Trabalho',
            'introduction' => 'Prepara-te para os desafios do mercado de trabalho',
            'body' => 'Continua os teus estudos e prepara-te para dar resposta aos desafios mais aliciantes do mercado e trabalho. Temos para ti um leque de cursos sobre os quais podes desenvolver e rentabilizar todas as tuas competencia.',
            'created_at' => carbon::now(),
            'updated_at' => carbon::now(),
        ]);

    }
}
