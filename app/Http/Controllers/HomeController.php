<?php

namespace App\Http\Controllers;

use App\Models\Goods;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $goods = Goods::where('user_id', auth()->user()->id)->get();
        $matching_requests2 = Goods::where('user_id', '<>', auth()->user()->id)->get();
        $matching_requests3 = array();

        foreach ($goods as $good) {
            foreach ($matching_requests2 as $match) {
                if ($good['title'] === $match['title'] &&
                    $good['price_from'] <= $match['price_from'] &&
                    $good['price_to'] >= $match['price_to'] &&
                    $good['type'] === $match['type']
                ) {
                    array_push($matching_requests3, $match['id']);
                }
            }
        }

        $matching_requests = Goods::whereIn('id', $matching_requests3)->get();


        return view('home', ['goods' => $goods, 'matching_requests' => $matching_requests]);
    }
}
