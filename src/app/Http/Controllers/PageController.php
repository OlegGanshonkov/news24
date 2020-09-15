<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function showOne()
    {
        return view('pages.suck');

        $pages = [
            1 => 'страница 1',
            2 => 'страница 2',
            3 => 'страница 3',
            4 => 'страница 4',
            5 => 'страница 5',
        ];
        if (isset($pages[$id])){
            return $pages[$id];
        }
        return 'такой страницы нет';
    }

    public function showAll()
    {
        return 'show all';
    }

}
