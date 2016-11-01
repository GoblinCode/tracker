<?php

namespace App\Http\Controllers;

use App\Models\Torrent;
use Illuminate\Http\Request;

class HubController extends Controller
{
    /**
     * Главная страница хаба выводит последение публикации
     * 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $public = DB::table('torrent')->orderBy('created_at', 'DESC')->paginate(24);
        return view('hub.index', ['public' => $public]);
    }

    /**
     * Страница хаба
     * 
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function more($id)
    {
        $hub = Torrent::getPublicId($id);
        $torrent = Torrent::getTorrentByHub($id);
        return view('hub.more', ['hub' =>$hub, 'torrent' => $torrent]);
    }

    /**
     * Страница добавления публикации
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store()
    {
        return view('hub.store',);
    }
    
}
