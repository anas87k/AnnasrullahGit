<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Auth\Request;
use App\Mail\DaftarMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/login';

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
        return Validator::make($data, [
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'nik' => ['required', 'string', 'max:16'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $random = str_shuffle('abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ1234567890');
        $password =str_random(7);
        $username =str_random(6);

        return User::create([
            'nik' => $data['nik'],
            'username' => $username,
            'nama_lengkap' => $data['nama_lengkap'],
            'email' => $data['email'],
            'password'=> bcrypt($password),
            'password2' => $password,
        ]);
        $memberRole = Role::where('username', 'member')->first();
        $user->attachRole($memberRole);
        return $user;
    }

    /*public function register(array $data){
        Mail::send('mail.pesan', $data, function ($message) {
            $message->from('admin@sippannasrullah.com', 'Admin');
            $message->sender('admin@sippannasrullah.com', 'Admin');
            $message->to($data['email'], $data['nama_lengkap']);
            $message->subject('Username Notifikasi');
            $message->priority(3);
        });
        return redirect()->to('login')->with('success',"Registrasi Berhasil. Silahkan login menggunakan username dan password pada  email");
    }*/
}
