<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
        // 1�Α� �e->�q
        $shops = Area::find(1)->shops;

        // �e <- �q
        $area = Shop::find(3)->area;

        // ���Α�
        $routes = Shop::find(1)->routes()->get();

        dd($shops, $area, $routes);
    }
}
