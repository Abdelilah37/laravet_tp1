<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Groupe;

class StagiairesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('stagiaires')->insert([
        //     [
        //         'nom_complet'=>'Abdelilah Tainit',
        //         'genre'=>'M',
        //         'date_naissance'=>'2002-07-19',
        //         'note'=>18,
        //         'groupe_id'=>8,
        //     ],
        //     [
        //         'nom_complet'=>'Hicham Bouabrik',
        //         'genre'=>'M',
        //         'date_naissance'=>'2001-07-19',
        //         'note'=>18,
        //         'groupe_id'=>8,
        //     ],
        //     [
        //         'nom_complet'=>'Sara Ait Haddou',
        //         'genre'=>'F',
        //         'date_naissance'=>'2004-07-19',
        //         'note'=>18,
        //         'groupe_id'=>8,
        //     ],
        //     [
        //         'nom_complet'=>'Rabab Zouitini',
        //         'genre'=>'F',
        //         'date_naissance'=>'2004-07-19',
        //         'note'=>18,
        //         'groupe_id'=>8,
        //     ],
        //     [
        //         'nom_complet'=>'Tohfa Ganounin',
        //         'genre'=>'F',
        //         'date_naissance'=>'2004-07-19',
        //         'note'=>18,
        //         'groupe_id'=>8,
        //     ],
        //     [
        //         'nom_complet'=>'Tohfa Ganounin2',
        //         'genre'=>'F',
        //         'date_naissance'=>'2004-07-19',
        //         'note'=>18,
        //         'groupe_id'=>9,
        //     ],
        //     [
        //         'nom_complet'=>'Rabab Zouitini2',
        //         'genre'=>'F',
        //         'date_naissance'=>'2004-07-19',
        //         'note'=>18,
        //         'groupe_id'=>9,
        //     ],
        //     [
        //         'nom_complet'=>'Abdelilah Tainit2',
        //         'genre'=>'M',
        //         'date_naissance'=>'2002-07-19',
        //         'note'=>18,
        //         'groupe_id'=>9,
        //     ],
        //     [
        //         'nom_complet'=>'Hicham Bouabrik2',
        //         'genre'=>'M',
        //         'date_naissance'=>'2001-07-19',
        //         'note'=>18,
        //         'groupe_id'=>9,
        //     ],
        //     [
        //         'nom_complet'=>'Sara Ait Haddou2',
        //         'genre'=>'F',
        //         'date_naissance'=>'2004-07-19',
        //         'note'=>18,
        //         'groupe_id'=>9,
        //     ],

        //     [
        //         'nom_complet'=>'Tohfa Ganounin3',
        //         'genre'=>'F',
        //         'date_naissance'=>'2004-07-19',
        //         'note'=>18,
        //         'groupe_id'=>1,
        //     ],
        //     [
        //         'nom_complet'=>'Rabab Zouitini3',
        //         'genre'=>'F',
        //         'date_naissance'=>'2004-07-19',
        //         'note'=>18,
        //         'groupe_id'=>1,
        //     ],
        //     [
        //         'nom_complet'=>'Abdelilah Tainit2',
        //         'genre'=>'M',
        //         'date_naissance'=>'2002-07-19',
        //         'note'=>18,
        //         'groupe_id'=>1,
        //     ],
        //     [
        //         'nom_complet'=>'Hicham Bouabrik3',
        //         'genre'=>'M',
        //         'date_naissance'=>'2001-07-19',
        //         'note'=>18,
        //         'groupe_id'=>1,
        //     ],
        //     [
        //         'nom_complet'=>'Sara Ait Haddou2',
        //         'genre'=>'F',
        //         'date_naissance'=>'2004-07-19',
        //         'note'=>18,
        //         'groupe_id'=>9,
        //     ],
        //     ]);

        for ($i = 0; $i < 100; $i++) {
            DB::table('stagiaires')->insert([
                'nom_complet' => fake()->Name(),
                'genre' => fake()->randomElement(['F', 'M']),
                'date_naissance' => '2002-07-19',
                'note' => rand(0, 20),
                'groupe_id' => Groupe::all()->random()->id,
            ]);
        }
    }
}
