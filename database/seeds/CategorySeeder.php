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
        DB::table('category')->delete();
        DB::table('category')->insert([
            'id'            =>  '1',
            'category_id'   => 'kino',
            'name'          => 'Кино',
            'description'   => '',
            'module'        => 'hub',
            'tree'          => '01',
        ]);
        DB::table('category')->insert([
            'id'            =>  '3',
            'category_id'   => 'kino',
            'name'          => 'Кино',
            'description'   => '',
            'module'        => 'hub',
            'tree'          => '02',
        ]);
        DB::table('category')->insert([
            'id'            =>  '2',
            'category_id'   => 'kino',
            'name'          => 'Кино',
            'description'   => '',
            'module'        => 'hub',
            'tree'          => '03',
        ]);
        DB::table('category')->insert([
            'id'            =>  '30',
            'category_id'   => 'sport',
            'name'          => 'Спорт',
            'description'   => '',
            'module'        => 'hub',
            'tree'          => '0201',
        ]);
        DB::table('category')->insert([
            'id'            =>  '31',
            'category_id'   => 'triller',
            'name'          => 'Триллер',
            'description'   => '',
            'module'        => 'hub',
            'tree'          => '010N',
        ]);
        DB::table('category')->insert([
            'id'            =>  '32',
            'category_id'   => 'uzhasy',
            'name'          => 'Ужасы',
            'description'   => '',
            'module'        => 'hub',
            'tree'          => '010O',
        ]);
        DB::table('category')->insert([
            'id'            =>  '33',
            'category_id'   => 'fantastika',
            'name'          => 'Фантастика',
            'description'   => '',
            'module'        => 'hub',
            'tree'          => '010P',
        ]);
    }
}
