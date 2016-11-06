<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hub')->delete();
        DB::table('hub')->insert([
            'id'            =>  '1',
            'category_id'   => 'video',
            'name'          => 'Видео',
            'module'        => 'hub',
            'description'   => '',
            'image'         => '',
            'tree'          => '01',
        ]);
    }
}
