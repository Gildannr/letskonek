<?php

namespace App\Http\Controllers;

use App\Models\PwUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $pwUsers = PwUser::find($userId);
        
        // Ensure we get the correct user - check if there's a username match
        $users = User::where('email', Auth::user()->username)
            ->orWhere('author', Auth::user()->username)
            ->first();
            
        // If user still not found, provide an empty model with default values
        if (!$users) {
            $users = new User([
                'fullname' => $pwUsers->nama_lengkap ?? Auth::user()->username,
                'email' => Auth::user()->username . '@example.com',
                'phone' => '',
            ]);
        }
        
        $mergedData = [
            'pwUsers' => $pwUsers,
            'users' => $users
        ];

        return view('page.profile', compact('mergedData'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'username' => 'required|string|max:255',
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $pwUser = PwUser::find(Auth::user()->id);
        $user = User::find(Auth::user()->id);

        $pwUser->update([
            // 'username' => $request->username,
            'nama_lengkap' => $request->fullname,
            'updated' => now(),
            'updater' => Auth::user()->username,
        ]);

        $user->update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'updated' => now(),
            'updater' => Auth::user()->username,
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = PwUser::find(Auth::user()->id);

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Current password is incorrect'])->withInput();
        }

        $user->password = Hash::make($request->new_password);
        $user->updated = now();
        $user->updater = $user->username;
        $user->save();

        return redirect()->back()->with('success', 'Password updated successfully.');
    }
}
