<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // Funciones de validación para los nuevos usuarios
        return Validator::make($data, [
            'firstName' => 'required|max:255|min:3',
            'lastName'  => 'required|max:255|min:3',
            'email'     => 'required|email|max:255|unique:users|min:6',
            'password'  => 'required|confirmed|min:6|regex:([A-ZÁÉÍÓÚÀÈÌÒÙÄËÏÖÜÑ]{1,})|regex:([0-9]{1,})|regex:([a-zñáéíóúàèìòùäëïöüñ]{1,})',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstName' => $data['firstName'],
            'lastName'  => $data['lastName'],
            'email'     => $data['email'],
            'password'  => $data['password'],
        ]);
    }
}
