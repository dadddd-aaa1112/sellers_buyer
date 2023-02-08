<?php

namespace App\Http\Controllers;

use App\Http\Requests\Goods\StoreRequest;
use Illuminate\Http\Request;
use App\Models\Goods;

class GoodsController extends Controller
{
    public function store(StoreRequest $storeRequest)
    {
        $data = $storeRequest->validated();
        Goods::create([
            'title' => $data['title'],
            'price_from' => $data['price_from'],
            'price_to' => $data['price_to'],
            'type' => $data['type'],
            'user_id' => auth()->user()->id,
        ]);

        return redirect()
            ->route('home')
            ->with('message', 'Успешно создан');
    }


}
