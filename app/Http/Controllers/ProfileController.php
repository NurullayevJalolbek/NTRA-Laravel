<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Ad;
use App\Models\User;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use JetBrains\PhpStorm\NoReturn;
use Illuminate\Validation\Rules;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(): View
    {
        return view('ads.profile-setting', ['user' => Auth::user()]);
    }

    public function profile(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $user = Auth::user();
        $ads = Ad::where('user_id', $user->id)->get();
        return view('ads.profile', ['user' => $user, 'ads' => $ads]);

    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        $validatedData = [];

        // Foydalanuvchi shaxsiy ma'lumotlarini yangilash
        if ($request->has('first_name')) {
            $request->validate([
                'first_name' => ['required', 'string', 'max:255'],
            ]);
            $validatedData['first_name'] = $request->first_name;
        }

        if ($request->has('last_name')) {
            $request->validate([
                'last_name' => ['required', 'string', 'max:255'],
            ]);
            $validatedData['last_name'] = $request->last_name;
        }

        if ($request->has('email')) {
            $request->validate([
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class . ',email,' . Auth::id()],
            ]);
            $validatedData['email'] = $request->email;
        }

        // Agar validatsiya o‘tganda, shaxsiy ma'lumotlarni yangilash
        if (!empty($validatedData)) {
            Auth::user()->update($validatedData);
        }

        // Telefon raqamini yangilash
        if ($request->has('number')) {
            $request->validate([
                'number' => ['required', 'digits:9'],
            ]);
            $validatedData['phone'] = $request->number;
        }
        if (!empty($validatedData)) {
            Auth::user()->update($validatedData);
        }

        // Parolni yangilash
        if ($request->has('old_password') && $request->has('new_password')) {
            $validatedData = $request->validate([
                'old_password' => 'required|current_password',
                'new_password' => 'required|min:8',
            ]);

            Auth::user()->update([
                'password' => Hash::make($validatedData['new_password']),
            ]);

            return redirect()->route('user.setting')->with('success', 'Password updated successfully.');


        }


        if (!empty($validatedData)) {
            Auth::user()->update($validatedData);
        }

        return redirect()->route('user.setting');
    }


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
