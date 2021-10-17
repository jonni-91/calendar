<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    private $userData = [];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth'); //ensures user is logged in
    }

    public function getUser(Request $request)
    {
//      $user = \Auth::user();

//      UserResource::collection(\Auth::user())

        $fields = $request->validate([
            'id' => 'numeric'
        ]);

        $user = User::getUserById($fields['id']);
        //Log::info('Showing the user profile for user: ');
        //Log::info($user);
        //Log::info(User::all());
        return UserResource::collection([$user]);
    }
}
