<?php

namespace App\Http\Controllers;

use App\Models\Attach;
use App\Models\Torrent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

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
    public function show($id, Attach $attach)
    {
        $public = Torrent::getPublicId($id);
        $torrent = Torrent::getTorrentByHub($id);
        $category = Category::getCategoryById($public->category_id);
        $screen =  $attach->getAttach('hub', $id);
        return view('user.hub.show', ['public' => $public, 'torrent' => $torrent, 'category' => $category, 'screen' => $screen]);
    }

    /**
     * Страница добавления публикации
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $category = Category::getCategoryTree();
        return view('user.hub.create', ['category' => $category]);
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
