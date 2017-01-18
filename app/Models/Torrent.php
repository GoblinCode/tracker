<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Torrent extends Model
{
    
    protected $fillable = ['name', 'public_id', 'description'];
    
    protected $table = 'public';
    
   

    /**
     * Получаем последние публикации
     */
    public static function getPublic()
    {
       return DB::table('hub')->orderBy('created_at', 'DESC')->where('active','=','1')->paginate(24);
    }
    /**
     * 
     * Получаем id публикации
     *
     * @param $id
     */
    public static function getPublicId($id)
    {
        return DB::table('hub')->where('id', '=', $id)->first();
    }

    /**
     * Получаем список торрентов хаба
     *
     * @param $id
     * @return mixed
     */
    public static function getTorrentByHub($id)
    {
        return DB::table('torrent')->where('hub_id','=', $id)->get();
    }
}
