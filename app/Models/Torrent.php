<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Torrent extends Model
{
    
    protected $fillable = ['name', 'public_id', 'description'];
    
    protected $table = 'public';
    
    /**
     * Получаем id публикации
     *
     * @param $id
     */
    public static function getPublicId($id)
    {
        return self::where('public_id', '=', $id)->first();
    }

    /**
     * Получаем список торрентов хаба
     *
     * @param $id
     * @return mixed
     */
    public static function getTorrentByHub($id)
    {
        return DB::table('torrent')->where()->get();
    }
}
