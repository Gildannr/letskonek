<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\PwUser;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Show the registration form.
     */
    public function index()
    {
        return view('page.auth.register');
    }

    /**
     * Handle the registration form submission.
     */
    public function register(Request $request)
    {
        // Validate the form input
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new user
        // Create PwUser first
        $pwUser = PwUser::create([
            'username' => $request->username,
            'nama_lengkap' => $request->fullname,
            // 'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipe' => 'system',
            'akses' => 'system',
            'kodeacak' => 'system',
            'created' => now(),
            'updated' => now(),
            'updater' => 'system',
            'status' => 1,
        ]);

        // Create User with pw_user_id reference
        User::create([
            'users_id' => $pwUser->id, // Link to PwUser
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'created' => now(),
            'updated' => now(),
            'updater' => 'system',
            'status' => 1,
        ]);

        // Redirect to the login page or dashboard
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
}
