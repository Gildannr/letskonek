<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->users_id;
        $users = User::find($userId);

        return view('page.profile', compact('users'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::find(Auth::user()->users_id); // disesuaikan agar konsisten pakai users_id

        $user->update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'updated' => now(),
            'updater' => Auth::user()->username,
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function updateResume(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'resume' => 'required|mimes:pdf|max:2048',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $originalName = $file->getClientOriginalName();
            $path = $file->store('resumes', 'public');
    
            $userId = Auth::user()->users_id;
            $username = Auth::user()->username;
    
            // ✅ Step 1: Update semua resume user ini jadi non-default (status = 1)
            DB::table('tabel_resume')
                ->where('users_id', $userId)
                ->update(['status' => 1]);
    
            // ✅ Step 2: Simpan resume baru dan set sebagai default (status = 2)
            DB::table('tabel_resume')->insert([
                'users_id'    => $userId,
                'resume_name' => $originalName,
                'resume_file' => $path,
                'default'     => 1,
                'created'     => now(),
                'author'      => $username,
                'updated'     => now(),
                'updater'     => $username,
                'status'      => 2, // default resume
            ]);
        }
    
        return redirect()->back()->with('success', 'Resume uploaded successfully.');
    }
    
    // public function setDefault($id)
    // {
    //     $userId = Auth::user()->users_id;
    
    //     // Set semua resume user jadi default = '1'
    //     DB::table('tabel_resume')
    //         ->where('users_id', $userId)
    //         ->update(['default' => '1', 'status' => '1']);
    
    //     // Set resume yang dipilih jadi default = '2'
    //     DB::table('tabel_resume')
    //         ->where('id', $id)
    //         ->where('users_id', $userId)
    //         ->update(['default' => '2', 'status' => '2']);
    
    //     return redirect()->back()->with('success', 'Resume berhasil dijadikan default.');
    // }




    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::find(Auth::user()->users_id);

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Current password is incorrect'])->withInput();
        }

        $user->update([
            'password' => Hash::make($request->new_password),
            'updated' => now(),
            'updater' => $user->username,
        ]);

        return redirect()->back()->with('success', 'Password updated successfully.');
    }
}
