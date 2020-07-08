<?php

use Illuminate\Database\Seeder;
use App\Models\ScStudy;
class ScStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            ScStudy::create([
            	'sc_school_id' => '1',
            	'sc_class_id' => '1',
            	'sc_teacher_id' => $i,
            	'name' => 'Fullstack Developer',
            	'day' => '1',
            	'time' => '2020-06-24 14:50:24'
            ]);
        }
    }
}
