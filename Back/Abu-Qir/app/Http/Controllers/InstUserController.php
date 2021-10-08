<?php

namespace App\Http\Controllers;

use App\Models\InstUser;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InstUserController extends Controller
{
    public function index()
    {
        if (session('login')) {
            session()->forget('login');
        }
        return view('login');
    }

    public function dashboard()
    {
        return view('addNewUser');
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'role' => ['required', Rule::in(['admin', 'student-affair'])],
        ]);
        $user = new InstUser;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();
        return redirect()->back()->with('success', 'user has been added');
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        date_default_timezone_set('Africa/Cairo');
        $user = InstUser::whereRaw('username = ? AND password = ?', [$request->name, $request->password])->first();
        if ($user === null) {
            return redirect()->back()->with('login-error', 'خطأ في اسم المستخدم أو كلمة مرور');
        } else {
            session(['login' => $user->role, 'full' => true]);
            $user->last_signin = date('Y-m-d H:i:s');
            $user->save();
            return redirect()->route('student.form');
        }
    }

    public function logout()
    {
        session()->forget('login');
        return redirect()->route('login');
    }

}
