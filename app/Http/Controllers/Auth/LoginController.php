<?php

namespace App\Http\Controllers\Auth;

use App\Models\Back\User;
use DateTime;
use Illuminate\Http\Request;
use App\Models\Back\Business;
use App\Models\Back\Metadata;
use App\Models\Back\UserLogs;
use App\Http\Controllers\Controller;
use App\Models\Back\AdminLogHistory;
use App\Models\Back\BusinessPackage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Back\BusinessSubscription;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    use AuthenticatesUsers{
	    logout as performLogout;
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/redirect';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, User $user){
        return redirect(route('adminarea'));
    }
}
