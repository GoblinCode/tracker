<?php

use Illuminate\Database\Seeder;

class TorrentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('torrent')->delete();
        DB::table('torrent')->insert([
            'hub_id'            =>  '1',
            'info_hash'         =>  '',
            'description'       =>  'desc',
            'autor'             =>  '',
            'size'              =>  '1234',
            //'date'              =>  '',
            'type'              =>  '1',
            'numfiles'          =>  '1',
            'hits'              =>  '2',
            'times_complited'    =>  '1',
            'leechers'          =>  '1',
            'remote_leechers'   =>  '1',
            'seeders'           =>  '1',
            'remote_seeders'    =>  '1',
        ]);
        DB::table('torrent')->insert([
            'hub_id'            =>  '1',
            'info_hash'         =>  '',
            'description'       =>  'ASC',
            'autor'             =>  '',
            'size'              =>  '1234',
            //'date'              =>  '',
            'type'              =>  '1',
            'numfiles'          =>  '1',
            'hits'              =>  '2',
            'times_complited'    =>  '1',
            'leechers'          =>  '1',
            'remote_leechers'   =>  '1',
            'seeders'           =>  '1',
            'remote_seeders'    =>  '1',
        ]);
        DB::table('torrent')->insert([
            'hub_id'            =>  '1',
            'info_hash'         =>  '',
            'description'       =>  'ASC',
            'autor'             =>  '',
            'size'              =>  '1234',
            //'date'              =>  '',
            'type'              =>  '1',
            'numfiles'          =>  '1',
            'hits'              =>  '2',
            'times_complited'    =>  '1',
            'leechers'          =>  '1',
            'remote_leechers'   =>  '1',
            'seeders'           =>  '1',
            'remote_seeders'    =>  '1',
        ]);
    }
}
