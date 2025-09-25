<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'string', 'max:20'],
            'address' => ['nullable', 'string', 'max:500'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'terms' => ['required', 'accepted'],
        ]);

        // Generate verification token
        $verificationToken = Str::random(60);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'name' => $request->first_name . ' ' . $request->last_name, // Combine for legacy support
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'verification_token' => $verificationToken,
            'is_verified' => false,
            'active' => false, // User needs email verification to activate
            'level_account' => 2, // Default to regular user
            'participant_stat' => 2, // Default to external participant
        ]);

        // Send verification email
        $this->sendVerificationEmail($user, $verificationToken);

        // Don't login user immediately - they need to verify email first
        return redirect()->route('login')->with('success', 'Registration successful! Please check your email to verify your account.');
    }

    /**
     * Send verification email to user
     */
    private function sendVerificationEmail(User $user, string $token): void
    {
        // For now, we'll just log the verification link
        // In production, you would send an actual email
        $verificationUrl = route('verification.verify', [
            'token' => $token,
            'email' => $user->email
        ]);

        // Log the verification URL for development
        \Log::info("Verification URL for {$user->email}: {$verificationUrl}");

        // TODO: Implement actual email sending
        // Mail::to($user->email)->send(new VerificationEmail($verificationUrl));
    }

    /**
     * Verify user email
     */
    public function verifyEmail(Request $request, string $token): RedirectResponse
    {
        $user = User::where('verification_token', $token)
                   ->where('email', $request->email)
                   ->first();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Invalid verification link.');
        }

        if ($user->is_verified) {
            return redirect()->route('login')->with('info', 'Email already verified.');
        }

        // Update user verification status
        $user->update([
            'is_verified' => true,
            'active' => true,
            'email_verified_at' => now(),
            'verification_token' => null,
        ]);

        return redirect()->route('login')->with('success', 'Email verified successfully! You can now login.');
    }
}
