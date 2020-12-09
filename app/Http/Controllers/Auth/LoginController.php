<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User; 

class LoginController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGithubProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    public function redirectToFacebookProvider() {
        return  Socialite::driver('facebook')->redirect();
    }
    
    public function redirectToGoogleProvider() {
        return  Socialite::driver('google')->redirect();
    }
    
    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGithubProviderCallback()
    {
        $socialite = Socialite::driver('github')->stateless()-> user();
    
        $password_pin = str_shuffle(mt_rand(1000, 9999) );

        $user = User::where('email',$socialite->getEmail())->first();
        
        if(!$user) {
            $user = User::create([
                'name' =>   $socialite->getName(),
                'email' =>   $socialite->getEmail(),
                'password' => $socialite->getId(),
            ]);
        }
        Auth::login($user, true);

        return redirect()->intended('dashboard');
       
       
    }
    
    public function handleFacebookProviderCallback()
    {
        $socialite = Socialite::driver('facebook')->stateless()->user();

        $password_pin = str_shuffle(mt_rand(1000, 9999) );
    
        $user = User::where('email',$socialite->getEmail())->first();
        
        if(!$user) {
            $user = User::create([
                'name' =>   $socialite->getName(),
                'email' =>   $socialite->getEmail(),
                'password' => $socialite->getId(),
            ]);
        }
        Auth::login($user, true);
        return redirect()->intended('dashboard');
       
       
    }

    public function handleGoogleProviderCallback()
    {
        $socialite = Socialite::driver('google')->stateless()->user();

        $password_pin = str_shuffle(mt_rand(1000, 9999) );
    
        $user = User::where('email',$socialite->getEmail())->first();
        
        if(!$user) {
            $user = User::create([
                'name' =>   $socialite->getName(),
                'email' =>   $socialite->getEmail(),
                'password' => $socialite->getId(),
            ]);
        }
   
        Auth::login($user, true);
        return redirect()->intended('dashboard');
    }


    public function logout(){
        Auth::logout();
        return redirect('/');   
    }
}
?>