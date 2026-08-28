<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showStudentForm()
    {
        return view('auth.login', ['portal' => 'student']);
    }

    public function showAdminForm()
    {
        return view('auth.login', ['portal' => 'admin']);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'portal' => ['required', 'in:student,admin'],
        ]);

        $portal = $credentials['portal'];
        unset($credentials['portal']);

        if (! Auth::attempt($credentials, $request->boolean('remember'))) {
            return back()
                ->withErrors(['email' => 'Those credentials don\'t match our records.'])
                ->withInput($request->only('email'))
                ->with('portal', $portal);
        }

        $request->session()->regenerate();

        /** @var User $user */
        $user = Auth::user();

        // A student logging in through the admin portal (or vice versa)
        // is authenticated but sent right back out — the account is real,
        // it just doesn't belong in that portal.
        if ($user->role !== $portal) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return back()
                ->withErrors(['email' => 'This account does not have ' . $portal . ' access.'])
                ->withInput($request->only('email'))
                ->with('portal', $portal);
        }

        return redirect()->intended(
            $user->isAdmin() ? route('admin.dashboard') : route('student.dashboard')
        );
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}