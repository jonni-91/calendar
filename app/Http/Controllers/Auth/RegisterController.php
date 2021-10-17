<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $validationRule = [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'min:10', 'starts_with: 6,7,8,9', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ];
        if(isset($data['email'])) {
            $validationRule['email'] = ['required', 'string', 'email', 'max:255', 'unique:users'];
        }
        if(isset($data['login'])) {
            $validationRule['login'] = ['required', 'string', 'min:6', 'max:64', 'unique:users'];
        }
        return Validator::make($data, $validationRule);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if(!isset($data['email'])) {
            $data['email'] = $data['phone'].'@'.$_SERVER['SERVER_NAME'];
        }
        if(!isset($data['login'])) {
            $data['login'] = $data['phone'].'@'.$_SERVER['SERVER_NAME'];
        }
         $user = User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'login' => $data['login'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response =  [
          'user' => $user,
          'token' => $token
        ];

        //return response($response, 201);
        return $user;
    }
}
