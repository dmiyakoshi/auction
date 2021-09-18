<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return view('items.index', ['items' => $items]);
    }

    public function show($id)
    {
        $item = Item::find($id);

        return view('items.show', ['item' => $item]);
    }
}
