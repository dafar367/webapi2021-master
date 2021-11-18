<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('projects')->insert([
            'code' => 'cal',
            'project' => 'Calculator',
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
            'semester' => 'ODD',
            'mata_kuliah' => 'Algorithm Programmimg',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('projects')->insert([
            'code' => 'acc',
            'project' => 'Accounting',
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. ",
            'semester' => 'EVEN',
            'mata_kuliah' => 'Web Programming',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
