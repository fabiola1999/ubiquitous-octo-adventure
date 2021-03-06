<?php

namespace App\Http\Controllers\Auth;

use App\Author;
use App\Http\Controllers\Controller;
use App\Mail\VerificationLink;
use App\Notifications\NewTeamMember;
use App\Providers\RouteServiceProvider;
use App\Student;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
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
    protected $redirectTo = '/';

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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'numeric'],
            'country_code' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'sponsor' => ['exists:users,ref', 'string', 'nullable'],
            'terms' => ['accepted']
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
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'country' => $data['country_code'],
            'password' => Hash::make($data['password']),
            'phone' => $data['code'] . $data['phone'],
            'is_active' => 1,
            'role_id' => 3,
            'sponsor' => $data['sponsor'] ?? Author::first()->user->ref,
            'ref' => User::ref()
        ]);
        $user = User::find($user->id);
        $sponsor = User::where('ref', $user->sponsor)->first();
        Student::create(['user_id' => $user->id]);
        $link = url('/email/verify/' . $user->id) . '/' . Crypt::encryptString($user->toJson());
        Mail::to($user->email)->send(new VerificationLink($link));
        $sponsor->notify(new NewTeamMember($user));
        Request::session()->flash('new_registered');
        return $user;
    }
}
