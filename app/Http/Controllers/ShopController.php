<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
        //１対多　親ー＞子
        $shops = Area::find(1)->shops;

        // 多対多
        $routes=Shop::find(1)->routes()->get();

        dd($shops,$routes);
    }
}
