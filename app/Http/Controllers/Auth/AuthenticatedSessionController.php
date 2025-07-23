<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Mail\VerificationCodeMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }
    
    // public function verificationCodeView(){
    //     return view('auth.verification_code');
    // }

    public function verificationCode(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Bu email adresiyle kayıtlı bir kullanıcı bulunamadı.');
        }

        $code =random_int(100000,999999);
        session()->put('code',$code);
        Mail::to($user->email)->send(new VerificationCodeMail($code));
        $email=$user->email;
        
        
        return view('auth.verification_code',compact('email'));
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'code' => 'required|numeric|min:6',
        ]);
        
        if($request->code==session()->get('code')){
            $user=User::where('email', $request->email)->first();
            session()->forget('code');
           Auth::login($user);
           
            return redirect()->intended(route('admin.index', absolute: true));
        }

        return redirect()->back()->with('error', 'Doğrulama kodu yanlış.');
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