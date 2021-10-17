<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    private $userData = [];
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->userData['user'] = \Auth::user();
            $this->userData['img'] = \Storage::disk('public');
            return $next($request);
        });


    }

    public function index(){
        return view('person.dashboard', $this->userData);
    }

    public function profile(Request $request){
        return view('person.profile', $this->userData);
    }

    public function edit_avatar(ProfileRequest $request){
        dd($request);
        $userId = $this->userData['user']->id;
        $imagePath = storage_path('app/private/'.$userId.'/images/avatar.jpg');
        //$request->file('image')->storePublicly('public/images/index');
        $image = \Image::make($request->file('image'));
        $image->resize(null, 300, function ($constraint){
           $constraint->aspectRatio();
        });
        $image->save($imagePath);

        return back()->with('message', 'Profile updated!');


    }
}
