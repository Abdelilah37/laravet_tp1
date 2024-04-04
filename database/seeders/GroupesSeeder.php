<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Filiere;

class GroupesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('groupes')->insert([
        //     [
        //         'libelle'=>'DEV101',
        //         'filiere_id'=>1
        //     ],
        //     [
        //         'libelle'=>'DEV102',
        //         'filiere_id'=>1
        //     ],
        //     [
        //         'libelle'=>'DEV103',
        //         'filiere_id'=>1
        //     ],
        //     [
        //         'libelle'=>'DEV104',
        //         'filiere_id'=>1
        //     ],
        //     [
        //         'libelle'=>'DEV105',
        //         'filiere_id'=>1
        //     ],
        //     [
        //         'libelle'=>'DEV106',
        //         'filiere_id'=>1
        //     ],
        //     [
        //         'libelle'=>'DEV107',
        //         'filiere_id'=>1
        //     ],
        //     [
        //         'libelle'=>'WFS201',
        //         'filiere_id'=>2
        //     ],
        //     [
        //         'libelle'=>'WFS202',
        //         'filiere_id'=>2
        //     ],
        //     [
        //         'libelle'=>'WFS203',
        //         'filiere_id'=>2
        //     ],
        //     [
        //         'libelle'=>'WFS204',
        //         'filiere_id'=>2
        //     ],
        //     [
        //         'libelle'=>'WFS205',
        //         'filiere_id'=>2
        //     ],
        //     [
        //         'libelle'=>'WFS206',
        //         'filiere_id'=>2
        //     ],

        //     [
        //         'libelle'=>'AM201',
        //         'filiere_id'=>3
        //     ],
        //     [
        //         'libelle'=>'AM202',
        //         'filiere_id'=>3
        //     ],
        //     [
        //         'libelle'=>'AM203',
        //         'filiere_id'=>3
        //     ],
        //     [
        //         'libelle'=>'AM204',
        //         'filiere_id'=>3
        //     ],
        //     [
        //         'libelle'=>'AM205',
        //         'filiere_id'=>3
        //     ],
        //     [
        //         'libelle'=>'AM206',
        //         'filiere_id'=>3
        //     ],
        // ]);


        for($i=0;$i<30;$i++){
            DB::table('groupes')->insert([
                     [
                         'libelle'=>'Groupe '.$i,
                        'filiere_id'=>Filiere::all()->random()->id,
                     ]
                     ]);
        }
    }
}
