<?php

namespace App\Http\Controllers\Admin\Web;

use App\Models\User;
use App\Models\UserSpotCharacter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Bases\DataTableResource as DataTable;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.buyers.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\\User  $user
     * @return \Illuminate\Http\Response
     */
    public function user(User $user)
    {
        $totalPrice = $user->spotCharacters->sum(function ($eachPrice) {
            return $eachPrice->character->price;
        });

        $count = $user->spotCharacters->count();

        return view('admin.dashboard.buyers.user')->with(compact(['user', 'count', 'totalPrice']));
    }
}
