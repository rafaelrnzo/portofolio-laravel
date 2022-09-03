<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\makanan;
use App\Models\minuman;


class FavController extends Controller
{
    public function Index(){
        $foods = makanan::all();
        $drinks = minuman::all();
        return view("fav", compact(
            'foods',
            'drinks',
        ));
    }

}
