<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
// use App\Models\PwUser;
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
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required',
            'password' => 'required|string|min:8',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Cek duplikat
        $emailExists = User::where('email', $request->email)->exists();
        $phoneExists = User::where('phone', $request->phone)->exists();
    
        if ($emailExists || $phoneExists) {
            $message = null;
            if ($emailExists && $phoneExists) {
                $message = 'Email dan nomor telepon sudah terdaftar.';
            } elseif ($emailExists) {
                $message = 'Email sudah terdaftar.';
            } elseif ($phoneExists) {
                $message = 'Nomor telepon sudah terdaftar.';
            }
    
            return redirect()->back()->withErrors([
                'email_phone' => $message,
            ])->withInput();
        }
    
        // Simpan user
        User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'created' => now(),
            'updated' => now(),
            'updater' => 'system',
            'status' => 1,
        ]);
    
        return redirect()->route('login')->with('success', 'Registrasi berhasil. Silakan login.');
    }


}
