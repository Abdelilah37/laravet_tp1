<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FilieresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
//         DB::table('filieres')->insert([
// [
//     'titre'=>'DEV',
//     'description'=>'devlopment degitale '
// ],
// [
//     'titre'=>'WFS',
//     'description'=>'Web Fulle Stake '
// ],
// [
//     'titre'=>'AM',
//     'description'=>'Application Mobile '
// ],

//         ]);
for($i=0;$i<10;$i++){
    DB::table('filieres')->insert([
        'titre'=>'Filiere'.$i,
   'description'=>'description filiere '.$i
    ]);
}
    }
}
