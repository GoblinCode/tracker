<?php

namespace App\Http\Controllers;

use App\Models\Torrent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HubController extends Controller
{
    /**
     * Главная страница хаба выводит последение публикации
     * 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $public = Torrent::getPublic();
        return view('user.hub.index', ['public' => $public]);
    }

    /**
     * Страница хаба
     * 
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $public = Torrent::getPublicId($id);
        $torrent = Torrent::getTorrentByHub($id);
        return view('user.hub.show', ['public' => $public, 'torrent' => $torrent]);
    }

    /**
     * Страница добавления публикации
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('hub.create');
    }


    /**
     * Сохранение публикации
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Редактируем публикацию
     *
     * @param $id
     */
    public function edit($id)
    {
        //
    }

    /**
     * Сохранение Изменений
     *
     * @param Request $request
     * @param $id
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Удаление публикации
     *
     * @param $id
     */
    public function destroy($id)
    {
        //
    }
}
