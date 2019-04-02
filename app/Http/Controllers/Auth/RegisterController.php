<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Support\Facades\Mail;

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
    protected $redirectTo = '/home';

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
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'telephone' => 'required|string|min:8',
            'societe_city' => 'required',
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
        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'tel' => $data['telephone'],
            'adresse' => $data['societe_city'],
        ]);
    }

//    protected function register(Request $request)
//    {
//        $input = $request->all();
//        $validator = $this->validator($input);
//
//        if($validator->passes()){
//            $data = $this->create($input)->toArray();
//
//            $data['token'] = str_random(25);
//
//            $user = User::find($data['id']);
//            $user->token = $data['token'];
//            $user->save();
//
//            Mail::send('mails.confirmation', $data, function($message) use($data){
//               $message->to($data['email']);
//               $message->subject('confirmation d\'enregistrement');
//            });
//            return redirect(route('login'))->with('status', 'Un e-mail de confirmation a été envoyé, veuillez vérifier votre email !');
//        }
//        return redirect(route('login'))->with('status', $validator->errors());
//    }
//
//    public  function confirmation($token){
//        $user = User::where('token', $token)->first();
//
//        if (!is_null($user)){
//            $user->confirmed=1;
//            $user->token = '';
//            $user->save();
//            return redirect(route('login'))->with('status', 'Votre activation est valide, vous pouvez accéder maintenant !');
//        }
//        return redirect(route('login'))->with('status', 'Quelque chose s\'est mal passé !');
//    }
}
