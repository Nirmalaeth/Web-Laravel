<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request)
    {
        // Validasi input email dan password
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek apakah kredensial sesuai
        if (Auth::attempt($request->only('email', 'password'))) {
            // $request->session()->regenerate(); // Regenerasi session untuk keamanan
            $user = Auth::user();

            // Flash message untuk notifikasi berhasil login
            // session()->flash('success', 'Berhasil login!');

            // Cek role user dan arahkan ke dashboard yang sesuai
            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard');
            }

            if ($user->hasRole('user')) {
                return redirect()->route('welcome'); // Arahkan ke user dashboard
            }

            // Logout jika role tidak cocok
            // Auth::logout();
            return redirect()->route('login')->withErrors(['role' => 'Role mismatch.']);
        }

        // Kembalikan error jika login gagal
        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
