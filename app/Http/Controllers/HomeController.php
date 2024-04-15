<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Models\User;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.home');
    }

    public function signup()
    {
        return view('pages.signup');
    }


    public function signupSubmit(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => [
                    'required',
                    'email',
                    'max:255',
                    'unique:users,email',
                ],
                'password' => 'required',
                'confirm_password' => 'required|same:password',
                'phone_number' => 'required|numeric',
                'address' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput($request->except('password'));
            }


            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->phone_number = $request->phone_number;
            $user->address = $request->address;

            $user->save();

            Auth::login($user);

            return back()->with(['success' => 'User created successfully']);
        } catch (Exception $e) {
            return back()
                ->with(['error' => $e->getMessage()])
                ->withInput($request->except('password'));
        }
    }

    public function login()
    {
        return view('pages.login');
    }


    public function loginSubmit(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|exists:users,email',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput($request->except('password'));
            }

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $user = Auth::user();


                if ($request->has('redirect')) {
                    $request->session()->put('url.intended', $request->input('redirect'));
                }

                return redirect()->intended(route('home'));
            }

            return redirect()->route('login')->with('error', 'Invalid credentials. Please try again.')->withInput($request->except('password'));
        } catch (Exception $e) {
            return back()
                ->with(['error' => $e->getMessage()]);
        }
    }
}
