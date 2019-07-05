<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use App\Product;
use App\League;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProviderFB()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleProviderCallbackFB()
    {
        $userFB = Socialite::driver('facebook')->user();
        // $user->token;
        if ($user = User::where('email', $userFB->email)->first()) {
            return $this->authAndRedirect($user);
        } else {
        // dd($userFB);
        $user = User::create([
            'name' => $userFB->name,
            'email' => $userFB->email,
            'avatar' => $userFB->avatar,
        ]);
        return $this->authAndRedirect($user);
      }
    }
    public function redirectToProviderGG()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallbackGG()
    {
        $userGG = Socialite::driver('google')->user();
        if ($user = User::where('email', $userGG->email)->first()) {
            return $this->authAndRedirect($user);
        } else {
          $user = User::create([
              'name' => $userGG->name,
              'email' => $userGG->email,
              'avatar' => $userGG->avatar,
          ]);
          return $this->authAndRedirect($user);
        }
        // $user->token;
    }

    public function authAndRedirect($user)
    {
      Auth::login($user);
      return redirect()->to('/');
    }

    public function showLoginForm() {
        $products = Product::all();
        $leagues = League::all();
        
      return view('auth/login')
      ->with([
        'products' => $products,
        'leagues' =>$leagues
      ]);
    }
}
