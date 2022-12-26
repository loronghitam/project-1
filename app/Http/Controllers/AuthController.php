<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $rules = [
            'nim' => 'required',
            'password' => 'required'
        ];

        $Validator = Validator::make($request->all(), $rules);

        if ($Validator->fails()) {
            return redirect()->back()->withErrors($Validator)->withInput($request->all);
        }
        $data = [
            'nim' => $request->nim,
            'password' => $request->password,
        ];


        Auth::attempt($data);

        if (Auth::check()) {
            $user = Auth::user();
            return redirect()->to('/dashboard');
        }

        return back()->with('loginError', 'Email atau Password Salah!');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->to('/');
    }

    public function user(Request $requeset)
    {
        $confirm = Hash::check($requeset->cpassword, auth()->user()->password);
        if ($confirm) {
            User::where('id','=', auth()->user()->id)->update([
                'email' => ($requeset->email) ? $requeset->email : auth()->user()->email,
                'password' => ($requeset->password) ? Hash::make($requeset->password) : auth()->user()->password,
            ]);

            return back()->with('success', 'Perbuah berhasil');
        }
        return back()->with('error', 'Confirm password salah');
    }

}
