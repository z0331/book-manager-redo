<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Book;

class BookTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run() {
        Book::create([
            'title' => 'The City Where We Once Lived',
            'subtitle' => 'A Novel',
            'contributors' => 'Eric Barnes',
            'isbn' => '9781628728835',
            'eisbn' => '9781',
            'imprint' => 'Arcade',
            'season' => 'spring',
            'season_year' => '2018',
            'arc' => True,
            'pub_date' => '2018-03-27',
            'deadlines' => [
                '2017-12-01', '2018-01-01', '2017-02-01'
                ]
        ]);
    }
}