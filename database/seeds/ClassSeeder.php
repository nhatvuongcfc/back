<?php

use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data=[
        //     for($i=1; $i<=10; $i++){
        //         ['name_class'=>'12/'+$i];
        //     }
        // ];
            (string)$i=9;
            DB::table('class')->insert(['name_class'=>'12/'+$i]);
            // for()
    }
}
