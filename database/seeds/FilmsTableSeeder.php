<?php

use Illuminate\Database\Seeder;
use App\Film;


class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->delete();

        $film1 = new Film();
        //$film1->film_id = 2;
        $film1->name = "12 Years a Slave";
        $film1->description = "07038865067";
        $film1->releasedate = "dayoabiona@gmail.com";
        $film1->comment = "dayoabiona@gmail.com";
        $film1->rating = "Dayo Abiona";
        $film1->ticketprice = "07038865067";
        $film1->country = "dayoabiona@gmail.com";
        $film1->genre = "Dayo Abiona";
        $film1->photo = "07038865067";
        //$film1->created_at = "dayoabiona@gmail.com";
        $film1->save();

        $film2 = new Film();
        //$film2->film_id = 2;
        $film2->name = "Mission Impossible";
        $film2->description = "07038865067";
        $film2->releasedate = "dayoabiona@gmail.com";
        $film2->comment = "dayoabiona@gmail.com";
        $film2->rating = "Dayo Abiona";
        $film2->ticketprice = "07038865067";
        $film2->country = "dayoabiona@gmail.com";
        $film2->genre = "Dayo Abiona";
        $film2->photo = "07038865067";
        //$film2->created_at = "dayoabiona@gmail.com";
        $film2->save(); //
    }
}
