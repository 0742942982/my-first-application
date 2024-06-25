<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\user_type;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function register()
    {
       
        $userTypes = user_type::all();
       

        // Pass data to the view using consistent variable names
        return view('users.register', [
            'user_types' => $userTypes,
        ]);
    }

    /**
     * Handle the registration form submission.
     *
     * @param  \Illuminate\Http\Request  $req
     * @return \Illuminate\Http\RedirectResponse
     */


    public function register_check(Request $req)
    {
        try {

        $newUser = new User();

        $newUser->status = 0;
        $newUser->behavior = 1;
        $newUser->role = 2;
        $newUser->user_type = $req->user_type;
        $newUser->fname = $req->fname;
        $newUser->gender = $req->gender;
        $newUser->phone = $req->phone;
        $newUser->email = $req->email;
        $newUser->password = Hash::make($req->password);

            $created_user = $newUser->save();

            if ($created_user) {
                return redirect('/home')->with('success', 'Account created successfully.');
            } else {
                return redirect()->route('register')->with('registration_failed', 'Registration failed.');
            }
        } catch (\Exception $e) {
            return redirect()->route('register')->with('registration_failed', 'Registration failed. Error: ' . $e->getMessage());
        }
    }

/////////
public function login()
    {
        return view('users.login');
    }

    public function login_check(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');
    Log::info('Attempting login with credentials: ', $credentials);

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        Log::info('Login successful for user: ', ['user_id' => $user->id]);

        if ($user->status == '0') {
            Auth::logout();
            Log::info('User not approved: ', ['user_id' => $user->id]);
            return redirect('/login')->with('un_approved_user', 'Your Account is waiting for Admin approval, you cannot login now');
        }

        if ($user->behavior == '0') {
            Auth::logout();
            Log::info('User blocked: ', ['user_id' => $user->id]);
            return redirect('/login')->with('blocked_user', 'ARU disabled this Account, please contact ARU Convocation admin');
        }

        $request->session()->regenerate();
        Log::info('Session regenerated for user: ', ['user_id' => $user->id]);

        if ($user->role == '1') {
            Log::info('Redirecting to admin dashboard for user: ', ['user_id' => $user->id]);
            return redirect()->route('admin.a_contents');
        } else {
            Log::info('Redirecting to user dashboard for user: ', ['user_id' => $user->id]);
            return redirect()->route('u_dashboard');
        }
    } else {
        Log::info('Login failed for credentials: ', $credentials);
        return back()->with('login_failure', 'Login failed');
    }
}

}
